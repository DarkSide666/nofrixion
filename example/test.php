<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Nofrixion\Client;
use Nofrixion\Environment\Environment;


// get stored accessToken
session_start();
$accessToken = $_SESSION['accessToken'] ?? null;
if (!$accessToken) {
    throw new \Exception('No access token! Please use auth.php to authorize.');
}

// set up proper environment - sandbox is default
//Environment::getInstance()->setToLive();

// Required configuration for API client
$config = Client\Configuration::getDefaultConfiguration()
            ->setHost(Environment::getApiServer())
            //->setUserAgent('OpenAPI-Generator/1.0.0/PHP')
            ->setApiKey('Authorization', $accessToken)
            ->setApiKeyPrefix('Authorization', 'Bearer')
            ->setBooleanFormatForQueryString(Client\Configuration::BOOLEAN_FORMAT_STRING)
            ;




/*
$a = Client\ObjectSerializer::toQueryValue(
            true, // value
            'connectedAccounts', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        );
var_dump($a);
exit;
*/


$apiAccounts = new Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
/*
$account_id = 'account_id_example'; // string | Required. The ID of the account to get the payouts for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$statuses = array(new Client\Model\NoFrixionMoneyMoovPayoutStatus()); // Client\Model\NoFrixionMoneyMoovPayoutStatus[] | An optional status filter for the payout records.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created up until this date.
$search = 'search_example'; // string | The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information.
$currency = new Client\Model\NoFrixionMoneyMoovCurrencyTypeEnum(); // NoFrixionMoneyMoovCurrencyTypeEnum | The currency filter to apply to retrieve payouts with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payouts that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payouts that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payouts with at least one of these tags.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payouts.

$result = $apiInstance->apiV1AccountsAccountIDPayoutsGet($account_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort);
*/

try {
    $accounts = $apiAccounts->apiV1AccountsGet();
    //print_r($accounts);
    foreach ($accounts as $account) {
        var_dump($account->valid(), $account->getId());

        //$transactions = $apiAccounts->apiV1AccountsAccountIDTransactionsGet($account->getId());
        //print_r($transactions);

        $payouts = $apiAccounts->apiV1AccountsAccountIDPayoutsGet($account->getId());
        print_r($payouts);

        echo '<hr>';
    }
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi endpoint: ', $e->getMessage(), PHP_EOL;
}





if ($_GET['create_payout'] ?? null) {
    $apiPayouts = new Client\Api\PayoutsApi(
        new GuzzleHttp\Client(),
        $config
    );

    $payoutCreate = new Client\Model\NoFrixionMoneyMoovModelsPayoutCreate([
        'account_id' => '4fe033a6-1b42-4583-a449-2ad8e2e5f669',
        'type' => Client\Model\NoFrixionMoneyMoovModelsPayoutCreate::TYPE_IBAN,
        'description' => 'Test 1',
        'currency' => Client\Model\NoFrixionMoneyMoovModelsPayoutCreate::CURRENCY_EUR,
        'amount' => 123.45,
        'your_reference' => 'my ref #1',
        'their_reference' => 'their ref #2',
        //'destination_account_id' => 'string',     // deprecated
        //'destination_iban' => 'string',           // deprecated
        //'destination_account_number' => 'string', // deprecated
        //'destination_sort_code' => 'string',      // deprecated
        //'destination_account_name' => 'string',   // deprecated
        //'destination_account' => 'Client\Model\NoFrixionMoneyMoovModelsCounterpartyCreate',
        'destination' => new Client\Model\NoFrixionMoneyMoovModelsCounterpartyCreate([
            'account_id' => 'd6e00b83-271c-4566-97a2-cf2d608bff5f',
            //'beneficiary_id' => 'string',
            'name' => 'Mr. Foo',
            //'email_address' => 'string',
            //'phone_number' => 'string',
            'identifier' => new Client\Model\NoFrixionMoneyMoovModelsAccountIdentifierCreate([
                //'currency' => 'string',
                //'bic' => 'string',
                //'iban' => 'string',
                //'sort_code' => 'string',
                //'account_number' => 'string',
                //'bitcoin_address' => 'string',
                //'summary' => 'string'
            ]),
            //'summary' => 'string'
        ]),
        //'invoice_id' => 'string',
        'allow_incomplete' => true,
        //'tag_ids' => 'string[]',
        'scheduled' => false,
        //'schedule_date' => '\DateTime',
        //'bitcoin_subtract_fee_from_amount' => 'bool',     // required ???
        //'bitcoin_fee_sats_per_vbyte' => 'int',            // required ???
        //'beneficiary_identifier_id' => 'string',          // deprecated
        //'beneficiary_id' => 'string',
        //'batch_payout_id' => 'string',
        //'topup_payrun_id' => 'string',
        'payment_rail' => Client\Model\NoFrixionMoneyMoovModelsPayoutCreate::PAYMENT_RAIL__DEFAULT,
    ]);

    try {
        $response = $apiPayouts->apiV1PayoutsPost($payoutCreate);
        print_r($response);

     } catch (Client\ApiException $e) {
        var_dump($e->getResponseBody());
        echo 'Exception when calling PayoutsApi endpoint: ', $e->getMessage(), PHP_EOL;
    }

}





