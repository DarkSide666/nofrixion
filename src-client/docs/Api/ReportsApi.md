# Nofrixion\Client\ReportsApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1ReportsIdInitiatePut()**](ReportsApi.md#apiV1ReportsIdInitiatePut) | **PUT** /api/v1/reports/{id}/initiate | Initiates the execution of a merchant report. |
| [**apiV1ReportsIdResultStatementNumberGet()**](ReportsApi.md#apiV1ReportsIdResultStatementNumberGet) | **GET** /api/v1/reports/{id}/result/{statementNumber} | Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned. |


## `apiV1ReportsIdInitiatePut()`

```php
apiV1ReportsIdInitiatePut($id)
```

Initiates the execution of a merchant report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the merchant report to execute.

try {
    $apiInstance->apiV1ReportsIdInitiatePut($id);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->apiV1ReportsIdInitiatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the merchant report to execute. | |

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

## `apiV1ReportsIdResultStatementNumberGet()`

```php
apiV1ReportsIdResultStatementNumberGet($id, $statement_number): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult
```

Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the merchant report to get the result for.
$statement_number = 56; // int | Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned.

try {
    $result = $apiInstance->apiV1ReportsIdResultStatementNumberGet($id, $statement_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->apiV1ReportsIdResultStatementNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the merchant report to get the result for. | |
| **statement_number** | **int**| Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult**](../Model/NoFrixionMoneyMoovModelsReportResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
