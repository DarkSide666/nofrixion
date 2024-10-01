# Nofrixion\Client\TransactionsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1TransactionsAccountIDGet()**](TransactionsApi.md#apiV1TransactionsAccountIDGet) | **GET** /api/v1/transactions/{accountID} | Get a list of the transactions for a single payment account. |
| [**apiV1TransactionsGet()**](TransactionsApi.md#apiV1TransactionsGet) | **GET** /api/v1/transactions | Get a list of the transactions for all payment accounts a user has access to. |


## `apiV1TransactionsAccountIDGet()`

```php
apiV1TransactionsAccountIDGet($account_id, $from_date, $page_number, $page_size, $to_date, $credit_type, $search, $sort): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse
```

Get a list of the transactions for a single payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the account to retrieve transactions for.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to retrieve transactions from.
$page_number = 56; // int | The page number to retrieve.
$page_size = 20; // int | The number of transactions per page.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to retrieve transactions from.
$credit_type = 'credit_type_example'; // string | A credit filter to apply to the transactions to retrieve.
$search = 'search_example'; // string | The text filter to apply to retrieve transactions with a similar account name, description, their reference, your reference, etc.
$sort = 'sort_example'; // string | Optional expression to sort the order of the transactions. Example \"Amount desc,Inserted asc\".

try {
    $result = $apiInstance->apiV1TransactionsAccountIDGet($account_id, $from_date, $page_number, $page_size, $to_date, $credit_type, $search, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->apiV1TransactionsAccountIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the account to retrieve transactions for. | |
| **from_date** | **\DateTime**| The start date to retrieve transactions from. | [optional] |
| **page_number** | **int**| The page number to retrieve. | [optional] |
| **page_size** | **int**| The number of transactions per page. | [optional] [default to 20] |
| **to_date** | **\DateTime**| The end date to retrieve transactions from. | [optional] |
| **credit_type** | **string**| A credit filter to apply to the transactions to retrieve. | [optional] |
| **search** | **string**| The text filter to apply to retrieve transactions with a similar account name, description, their reference, your reference, etc. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the transactions. Example \&quot;Amount desc,Inserted asc\&quot;. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse**](../Model/NoFrixionMoneyMoovModelsTransactionPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1TransactionsGet()`

```php
apiV1TransactionsGet($from_date, $page_number, $page_size, $to_date, $credit_type): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse
```

Get a list of the transactions for all payment accounts a user has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to retrieve transactions from.
$page_number = 56; // int | The page number to retrieve.
$page_size = 20; // int | The number of transactions per page.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to retrieve transactions from.
$credit_type = 'credit_type_example'; // string | A credit filter to apply to the transactions to retrieve.

try {
    $result = $apiInstance->apiV1TransactionsGet($from_date, $page_number, $page_size, $to_date, $credit_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->apiV1TransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| The start date to retrieve transactions from. | [optional] |
| **page_number** | **int**| The page number to retrieve. | [optional] |
| **page_size** | **int**| The number of transactions per page. | [optional] [default to 20] |
| **to_date** | **\DateTime**| The end date to retrieve transactions from. | [optional] |
| **credit_type** | **string**| A credit filter to apply to the transactions to retrieve. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTransactionPageResponse**](../Model/NoFrixionMoneyMoovModelsTransactionPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
