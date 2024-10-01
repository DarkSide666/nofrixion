<?php

declare(strict_types=1);

namespace Nofrixion\Oauth2;

use Nofrixion\Environment\Environment;
use Nofrixion\Exception\InvalidArgumentException;
use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\ResponseInterface;

class Provider extends GenericProvider
{
    /**
     * @var string
     */
    protected $urlRevokeToken;

    /**
     * Provider constructor.
     *
     * @param string $clientID
     * @param string $clientSecret
     * @param string $callbackURI
     */
    public function __construct(string $clientID, string $clientSecret, string $callbackURI)
    {
        $options = array_merge([
            'clientId'     => $clientID,
            'clientSecret' => $clientSecret,
            'redirectUri'  => $callbackURI,
        ], $this->optionFromEnvironments());

        parent::__construct($options);
    }

    private function optionFromEnvironments(): array
    {
        $host = Environment::getIdentityServer();

        return [
            'urlAuthorize'            => "{$host}/connect/authorize",
            'urlAccessToken'          => "{$host}/connect/token",
            'urlResourceOwnerDetails' => "{$host}/connect/resource",
            'urlRevokeToken'          => "{$host}/connect/revocation",
        ];
    }

    /**
     * Returns the string that should be used to separate scopes when building
     * the URL for requesting an access token.
     *
     * @return string Scope separator, defaults to ','
     */
    protected function getScopeSeparator()
    {
        return ' ';
    }

    /**
     * Returns all options that are required.
     *
     * @return array
     */
    protected function getRequiredOptions()
    {
        return array_merge(parent::getRequiredOptions(), [
            'urlRevokeToken',
        ]);
    }

    /**
     * Returns the base URL for revoking an access token.
     *
     * Eg. https://oauth.service.com/revocation
     *
     * @return string
     */
    public function getRevokeTokenUrl()
    {
        return $this->urlRevokeToken;
    }

    /**
     * @inheritdoc
     */
    protected function getRevokeTokenMethod()
    {
        return self::METHOD_POST;
    }

    /**
     * Revoke an access or refresh token.
     *
     * @param AccessToken|string|null $token
     * @param string|null $tokenTypeHint Either 'access_token' or 'refresh_token'
     * @return ResponseInterface|null
     */
    public function revokeAccessToken($token, ?string $tokenTypeHint = 'access_token'): ?ResponseInterface
    {
        // Get the method (POST) and revocation URL
        $method  = $this->getRevokeTokenMethod();
        $url     = $this->getRevokeTokenUrl();

        // Determine if the token is an AccessToken object or a string token
        $tokenValue = ($token instanceof AccessToken) ? $token->getToken() : $token;

        // Ensure we have a valid token to revoke
        if (empty($tokenValue)) {
            throw new InvalidArgumentException('The token provided for revocation is invalid.');
        }

        // Prepare the body for the revocation request (token and token_type_hint)
        $body = [
            'token' => $tokenValue,
            'token_type_hint' => $tokenTypeHint,
        ];

        // Create Basic Authorization header (clientId:clientSecret)
        $authHeader = base64_encode($this->clientId . ':' . $this->clientSecret);

        // Create an authenticated request
        $request = $this->getAuthenticatedRequest(
            $method, // POST
            $url,    // Revocation URL
            null,    // No access token is needed for this request
            [
                'headers' => [
                    'Authorization' => 'Basic ' . $authHeader,
                    'Content-Type'  => 'application/x-www-form-urlencoded',
                ],
                'body' => http_build_query($body), // Proper form-encoded body
            ]
        );

        // Send the request and get the response
        return $this->getResponse($request);
        //return $this->getParsedResponse($request);
    }

    public function redirectToAuthorizationURL(array $scopes)
    {
        $authorizationUrl = $this->getAuthorizationUrl([
            'scope' => $scopes,
        ]);

        header('Location: '.$authorizationUrl);
        exit;
    }
}
