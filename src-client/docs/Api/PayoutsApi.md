# Nofrixion\Client\PayoutsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1PayoutsBatchIdGet()**](PayoutsApi.md#apiV1PayoutsBatchIdGet) | **GET** /api/v1/payouts/batch/{id} | Gets a list of all the payouts contained in a batch. |
| [**apiV1PayoutsBatchPost()**](PayoutsApi.md#apiV1PayoutsBatchPost) | **POST** /api/v1/payouts/batch | Creates a new batch payout. |
| [**apiV1PayoutsBatchSubmitIdPost()**](PayoutsApi.md#apiV1PayoutsBatchSubmitIdPost) | **POST** /api/v1/payouts/batch/submit/{id} | Submits a batch payout for processing. |
| [**apiV1PayoutsBatchcreatePost()**](PayoutsApi.md#apiV1PayoutsBatchcreatePost) | **POST** /api/v1/payouts/batchcreate | Creates payouts. |
| [**apiV1PayoutsBatchdeleteDelete()**](PayoutsApi.md#apiV1PayoutsBatchdeleteDelete) | **DELETE** /api/v1/payouts/batchdelete | Deletes a list of payout records. |
| [**apiV1PayoutsCancelIdPut()**](PayoutsApi.md#apiV1PayoutsCancelIdPut) | **PUT** /api/v1/payouts/cancel/{id} | Attempts to cancel a scheduled payout. |
| [**apiV1PayoutsGet()**](PayoutsApi.md#apiV1PayoutsGet) | **GET** /api/v1/payouts | Gets a list of all payouts for a specific merchant. |
| [**apiV1PayoutsGetbyinvoiceidInvoiceIDGet()**](PayoutsApi.md#apiV1PayoutsGetbyinvoiceidInvoiceIDGet) | **GET** /api/v1/payouts/getbyinvoiceid/{invoiceID} | Gets a payout by its invoice ID. |
| [**apiV1PayoutsIdDelete()**](PayoutsApi.md#apiV1PayoutsIdDelete) | **DELETE** /api/v1/payouts/{id} | Deletes a payout record. |
| [**apiV1PayoutsIdGet()**](PayoutsApi.md#apiV1PayoutsIdGet) | **GET** /api/v1/payouts/{id} | Gets a single payout. |
| [**apiV1PayoutsIdPut()**](PayoutsApi.md#apiV1PayoutsIdPut) | **PUT** /api/v1/payouts/{id} | Updates a payout record. |
| [**apiV1PayoutsMetricsGet()**](PayoutsApi.md#apiV1PayoutsMetricsGet) | **GET** /api/v1/payouts/metrics | Gets a list of all payouts for a specific merchant. |
| [**apiV1PayoutsPost()**](PayoutsApi.md#apiV1PayoutsPost) | **POST** /api/v1/payouts | Creates a new payout. |
| [**apiV1PayoutsRejectIdPut()**](PayoutsApi.md#apiV1PayoutsRejectIdPut) | **PUT** /api/v1/payouts/reject/{id} | Rejects the authorisation for a payout. |
| [**apiV1PayoutsSendPost()**](PayoutsApi.md#apiV1PayoutsSendPost) | **POST** /api/v1/payouts/send | Creates and submits a payout for a trusted caller. |
| [**apiV1PayoutsStatusIdGet()**](PayoutsApi.md#apiV1PayoutsStatusIdGet) | **GET** /api/v1/payouts/status/{id} | Gets a single payout status from. |
| [**apiV1PayoutsSubmitIdPost()**](PayoutsApi.md#apiV1PayoutsSubmitIdPost) | **POST** /api/v1/payouts/submit/{id} | Submits a payout for processing. |


## `apiV1PayoutsBatchIdGet()`

```php
apiV1PayoutsBatchIdGet($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout
```

Gets a list of all the payouts contained in a batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the batch payout to retrieve.

try {
    $result = $apiInstance->apiV1PayoutsBatchIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsBatchIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the batch payout to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout**](../Model/NoFrixionMoneyMoovModelsBatchPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsBatchPost()`

```php
apiV1PayoutsBatchPost($request_body): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout
```

Creates a new batch payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[] | The IDs of the payout to include in the batch.

try {
    $result = $apiInstance->apiV1PayoutsBatchPost($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsBatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)| The IDs of the payout to include in the batch. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBatchPayout**](../Model/NoFrixionMoneyMoovModelsBatchPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsBatchSubmitIdPost()`

```php
apiV1PayoutsBatchSubmitIdPost($id)
```

Submits a batch payout for processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the batch payout to submit.

try {
    $apiInstance->apiV1PayoutsBatchSubmitIdPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsBatchSubmitIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the batch payout to submit. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsBatchcreatePost()`

```php
apiV1PayoutsBatchcreatePost($no_frixion_money_moov_models_payout_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutsPayoutsCreateResponse
```

Creates payouts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payout_create = array(new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate()); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate[] | A list of objects containing the details of the payouts to create.

try {
    $result = $apiInstance->apiV1PayoutsBatchcreatePost($no_frixion_money_moov_models_payout_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsBatchcreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payout_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate[]**](../Model/NoFrixionMoneyMoovModelsPayoutCreate.md)| A list of objects containing the details of the payouts to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutsPayoutsCreateResponse**](../Model/NoFrixionMoneyMoovModelsPayoutsPayoutsCreateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsBatchdeleteDelete()`

```php
apiV1PayoutsBatchdeleteDelete($request_body)
```

Deletes a list of payout records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[] | The IDs of the payouts to be deleted

try {
    $apiInstance->apiV1PayoutsBatchdeleteDelete($request_body);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsBatchdeleteDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)| The IDs of the payouts to be deleted | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsCancelIdPut()`

```php
apiV1PayoutsCancelIdPut($id): \Nofrixion\Client\Model\NoFrixionDataModelsPayoutEntity
```

Attempts to cancel a scheduled payout.

If successful the payout will be reverted to a pending state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to cancel.

try {
    $result = $apiInstance->apiV1PayoutsCancelIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsCancelIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to cancel. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionDataModelsPayoutEntity**](../Model/NoFrixionDataModelsPayoutEntity.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsGet()`

```php
apiV1PayoutsGet($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayoutPageResponse
```

Gets a list of all payouts for a specific merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Required. The ID of the merchant to get the payouts for.
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$statuses = array('statuses_example'); // string[] | An optional status filter for the payout records.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created after this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created up until this date.
$search = 'search_example'; // string | The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payouts with this currency.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payouts that exceed this amount.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payouts that don't exceed this amount.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payouts with at least one of these tags.
$sort = 'sort_example'; // string | Optional expression to sort the order of the payouts.

try {
    $result = $apiInstance->apiV1PayoutsGet($merchant_id, $page_number, $page_size, $statuses, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Required. The ID of the merchant to get the payouts for. | [optional] |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| An optional status filter for the payout records. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payouts created after this date. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payouts created up until this date. | [optional] |
| **search** | **string**| The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payouts with this currency. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payouts that exceed this amount. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payouts that don&#39;t exceed this amount. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payouts with at least one of these tags. | [optional] |
| **sort** | **string**| Optional expression to sort the order of the payouts. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingPayoutPageResponse**](../Model/NoFrixionBizBizModelsPagingPayoutPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsGetbyinvoiceidInvoiceIDGet()`

```php
apiV1PayoutsGetbyinvoiceidInvoiceIDGet($invoice_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest
```

Gets a payout by its invoice ID.

Can only be called with a merchant token. The payout lookup is done by              invoice and merchant ID and relies on the merchant ID from the token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | The invoice ID of the payout to retrieve. Useful when the              payout has been created by an external application such as Xero.

try {
    $result = $apiInstance->apiV1PayoutsGetbyinvoiceidInvoiceIDGet($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsGetbyinvoiceidInvoiceIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| The invoice ID of the payout to retrieve. Useful when the              payout has been created by an external application such as Xero. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequest**](../Model/NoFrixionMoneyMoovModelsPaymentRequest.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsIdDelete()`

```php
apiV1PayoutsIdDelete($id)
```

Deletes a payout record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payment record to delete.

try {
    $apiInstance->apiV1PayoutsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payment record to delete. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsIdGet()`

```php
apiV1PayoutsIdGet($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Gets a single payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout record to retrieve.

try {
    $result = $apiInstance->apiV1PayoutsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout record to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsIdPut()`

```php
apiV1PayoutsIdPut($id, $no_frixion_money_moov_models_payout_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Updates a payout record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to update.
$no_frixion_money_moov_models_payout_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutUpdate | The object containing the details of payout to update.

try {
    $result = $apiInstance->apiV1PayoutsIdPut($id, $no_frixion_money_moov_models_payout_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to update. | |
| **no_frixion_money_moov_models_payout_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutUpdate**](../Model/NoFrixionMoneyMoovModelsPayoutUpdate.md)| The object containing the details of payout to update. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsMetricsGet()`

```php
apiV1PayoutsMetricsGet($merchant_id, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutMetrics
```

Gets a list of all payouts for a specific merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Required. The ID of the merchant to get the payout metrics for.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created after this date as metrics.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date filter to apply to retrieve payouts created up until this date as metrics.
$search = 'search_example'; // string | The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information as metrics.
$currency = 'currency_example'; // string | The currency filter to apply to retrieve payouts with this currency as metrics.
$min_amount = 3.4; // float | The amount filter to apply to retrieve payouts that exceed this amount as metrics.
$max_amount = 3.4; // float | The amount filter to apply to retrieve payouts that don't exceed this amount as metrics.
$tags = array('tags_example'); // string[] | The tag filter to apply to retrieve payouts with at least one of these tags as metrics.

try {
    $result = $apiInstance->apiV1PayoutsMetricsGet($merchant_id, $from_date, $to_date, $search, $currency, $min_amount, $max_amount, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsMetricsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Required. The ID of the merchant to get the payout metrics for. | [optional] |
| **from_date** | **\DateTime**| The date filter to apply to retrieve payouts created after this date as metrics. | [optional] |
| **to_date** | **\DateTime**| The date filter to apply to retrieve payouts created up until this date as metrics. | [optional] |
| **search** | **string**| The text filter to apply to retrieve payouts with a similar title, description, merchant name or contact information as metrics. | [optional] |
| **currency** | **string**| The currency filter to apply to retrieve payouts with this currency as metrics. | [optional] |
| **min_amount** | **float**| The amount filter to apply to retrieve payouts that exceed this amount as metrics. | [optional] |
| **max_amount** | **float**| The amount filter to apply to retrieve payouts that don&#39;t exceed this amount as metrics. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| The tag filter to apply to retrieve payouts with at least one of these tags as metrics. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutMetrics**](../Model/NoFrixionMoneyMoovModelsPayoutMetrics.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsPost()`

```php
apiV1PayoutsPost($no_frixion_money_moov_models_payout_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Creates a new payout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payout_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate | The object containing the details of the payout to create.

try {
    $result = $apiInstance->apiV1PayoutsPost($no_frixion_money_moov_models_payout_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payout_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate**](../Model/NoFrixionMoneyMoovModelsPayoutCreate.md)| The object containing the details of the payout to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsRejectIdPut()`

```php
apiV1PayoutsRejectIdPut($id, $no_frixion_money_moov_models_payout_reject): \Nofrixion\Client\Model\NoFrixionDataModelsPayoutEntity
```

Rejects the authorisation for a payout.

If successful the payout will be set to REJECTED_APPROVAL state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to reject.
$no_frixion_money_moov_models_payout_reject = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutReject(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutReject | Reason for rejection.

try {
    $result = $apiInstance->apiV1PayoutsRejectIdPut($id, $no_frixion_money_moov_models_payout_reject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsRejectIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to reject. | |
| **no_frixion_money_moov_models_payout_reject** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutReject**](../Model/NoFrixionMoneyMoovModelsPayoutReject.md)| Reason for rejection. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionDataModelsPayoutEntity**](../Model/NoFrixionDataModelsPayoutEntity.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsSendPost()`

```php
apiV1PayoutsSendPost($no_frixion_money_moov_models_payout_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Creates and submits a payout for a trusted caller.

Access to this endpoint is restricted, please contact support for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_payout_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate | The object containing the details of the payout to create and submit.

try {
    $result = $apiInstance->apiV1PayoutsSendPost($no_frixion_money_moov_models_payout_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsSendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_payout_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutCreate**](../Model/NoFrixionMoneyMoovModelsPayoutCreate.md)| The object containing the details of the payout to create and submit. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsStatusIdGet()`

```php
apiV1PayoutsStatusIdGet($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout
```

Gets a single payout status from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout record to retrieve.

try {
    $result = $apiInstance->apiV1PayoutsStatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsStatusIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout record to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayout**](../Model/NoFrixionMoneyMoovModelsPayout.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PayoutsSubmitIdPost()`

```php
apiV1PayoutsSubmitIdPost($id)
```

Submits a payout for processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the payout to submit.

try {
    $apiInstance->apiV1PayoutsSubmitIdPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->apiV1PayoutsSubmitIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the payout to submit. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
