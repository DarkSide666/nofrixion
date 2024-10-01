<?php
require __DIR__ . '/../vendor/autoload.php';

// config - fill these with your credentials
$clientID = '***';
$clientSecret = '***';
$callbackURI = 'https://oauthdebugger.com/debug'; // for testing

use Nofrixion\Environment\Environment;
use Nofrixion\OAuth2\Provider;
use Nofrixion\Scope\Scope;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

session_start();

$accessToken = $_SESSION['accessToken'] ?? null;
$action = $_GET['action'] ?? null;

//Environment::getInstance()->setToLive();


$provider = new Provider($clientID, $clientSecret, $callbackURI);

function showMenu(): void {
    $accessToken = $_SESSION['accessToken'];
    echo 'Access Token: <code>' . $accessToken->getToken() . '</code><br>';
    echo 'Refresh Token: <code>' . $accessToken->getRefreshToken() . '</code><br>';
    echo 'Expires in: <code>' . $accessToken->getExpires() . '</code><br>';
    echo '<a href="?action=refresh">Refresh Access Token</a><br>';
    echo '<a href="?action=revoke">Revoke Refresh Token</a><br>';
}



// Step 1: Redirect user to the authorization URL to get authorization_code
if (!isset($_GET['code']) && !$action) {
    // If we don't have an authorization code, get one
    $authorizationUrl = $provider->getAuthorizationUrl([
        'scope' => [
            Scope::NOFRIXION,
            Scope::OFFLINE_ACCESS,
            Scope::OPENID,
        ],
    ]);

    // Save the state generated for later verification
    $_SESSION['oauth2state'] = $provider->getState();

    // Redirect user to authorization URL
    echo'<a href="'.$authorizationUrl.'" target=_blank>'.$authorizationUrl.'</a>';exit;
    //header('Location: '.$authorizationUrl);exit;
}

// Step 2: Handle the callback, exchange the authorization_code for tokens
elseif (isset($_GET['code']) && isset($_SESSION['oauth2state']) && $_SESSION['oauth2state'] === $_GET['state']) {
    unset($_SESSION['oauth2state']); // cleanup

    try {
        // Try to get an access token using the authorization code grant
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code'],
        ]);

        $_SESSION['accessToken'] = $accessToken; // save just here for testing, normally should save in DB

        showMenu();

    } catch (IdentityProviderException $e) {
        // Failed to get the access token
        exit('Error exchanging authorization_code for tokens: ' . $e->getMessage());
    }
}

elseif ($action=='refresh') {
    try {
        $refreshToken = $accessToken->getRefreshToken();

        // Use the refresh token to request a new access token
        $newAccessToken = $provider->getAccessToken('refresh_token', [
            'refresh_token' => $refreshToken,
        ]);

        $_SESSION['accessToken'] = $newAccessToken; // save just here for testing, normally should save in DB

        showMenu();

    } catch (IdentityProviderException $e) {
        exit('Error refreshing the token: ' . $e->getMessage());
    }
}

elseif ($action=='revoke') {
    try {
        //$response = $provider->revokeAccessToken($accessToken, 'access_token');
        // you should revoke refresh token, then will not be able to request new access token by refreshing
        $response = $provider->revokeAccessToken($accessToken->getRefreshToken(), 'refresh_token');
        //var_dump($response);echo "<hr>";
        //var_dump($response->getBody());echo "<hr>";
        //var_dump((string) $response->getBody());echo "<hr>";
        //var_dump($response->getStatusCode());echo "<hr>";
        echo "Refresh token revoked<hr>";

        showMenu();

    } catch (IdentityProviderException $e) {
        exit('Error revoking the token: ' . $e->getMessage());
    }
}

else {
    exit('Invalid state');
}


