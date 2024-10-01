# Nofrixion\Client\BeneficiariesApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1BeneficiariesAuthoriseIdPost()**](BeneficiariesApi.md#apiV1BeneficiariesAuthoriseIdPost) | **POST** /api/v1/beneficiaries/authorise/{id} | Authorises a beneficiary. |
| [**apiV1BeneficiariesDisableIdPut()**](BeneficiariesApi.md#apiV1BeneficiariesDisableIdPut) | **PUT** /api/v1/beneficiaries/disable/{id} | Attempts to disable a beneficiary. If successful the beneficiary will be disabled. |
| [**apiV1BeneficiariesEnableIdPut()**](BeneficiariesApi.md#apiV1BeneficiariesEnableIdPut) | **PUT** /api/v1/beneficiaries/enable/{id} | Attempts to enable a beneficiary. If successful the beneficiary will be enabled. |
| [**apiV1BeneficiariesGet()**](BeneficiariesApi.md#apiV1BeneficiariesGet) | **GET** /api/v1/beneficiaries | Gets a list of all beneficiaries. |
| [**apiV1BeneficiariesIdDelete()**](BeneficiariesApi.md#apiV1BeneficiariesIdDelete) | **DELETE** /api/v1/beneficiaries/{id} | Deletes a beneficiary |
| [**apiV1BeneficiariesIdPut()**](BeneficiariesApi.md#apiV1BeneficiariesIdPut) | **PUT** /api/v1/beneficiaries/{id} | Updates a beneficiary. |
| [**apiV1BeneficiariesPost()**](BeneficiariesApi.md#apiV1BeneficiariesPost) | **POST** /api/v1/beneficiaries | Creates a new beneficiary. |
| [**getBeneficiaryAsync()**](BeneficiariesApi.md#getBeneficiaryAsync) | **GET** /api/v1/beneficiaries/{id} | Get&#39;s a beneficiary by beneficiary ID. |


## `apiV1BeneficiariesAuthoriseIdPost()`

```php
apiV1BeneficiariesAuthoriseIdPost($id)
```

Authorises a beneficiary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary record to authorise.

try {
    $apiInstance->apiV1BeneficiariesAuthoriseIdPost($id);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->apiV1BeneficiariesAuthoriseIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary record to authorise. | |

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

## `apiV1BeneficiariesDisableIdPut()`

```php
apiV1BeneficiariesDisableIdPut($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Attempts to disable a beneficiary. If successful the beneficiary will be disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary to disable.

try {
    $result = $apiInstance->apiV1BeneficiariesDisableIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->apiV1BeneficiariesDisableIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary to disable. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1BeneficiariesEnableIdPut()`

```php
apiV1BeneficiariesEnableIdPut($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Attempts to enable a beneficiary. If successful the beneficiary will be enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary to enable.

try {
    $result = $apiInstance->apiV1BeneficiariesEnableIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->apiV1BeneficiariesEnableIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary to enable. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1BeneficiariesGet()`

```php
apiV1BeneficiariesGet($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryPageResponse
```

Gets a list of all beneficiaries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Optional. The ID of the merchant to retrieve the beneficiaries for.               If not set beneficiaries for all merchants the user has access to will be returned
$page_number = 56; // int | The page number from where records are retrieved.
$page_size = 56; // int | The number of records to be retrieved from a page.
$search = 'search_example'; // string | The text filter used to retrieve the records.
$currency = 'currency_example'; // string | The currency filter used to retrieve the records..
$include_disabled = false; // bool | If set to true will include disabled beneficiaries as well
$sort = 'sort_example'; // string | Optional expression to sort the order of the beneficiaries.

try {
    $result = $apiInstance->apiV1BeneficiariesGet($merchant_id, $page_number, $page_size, $search, $currency, $include_disabled, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->apiV1BeneficiariesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Optional. The ID of the merchant to retrieve the beneficiaries for.               If not set beneficiaries for all merchants the user has access to will be returned | [optional] |
| **page_number** | **int**| The page number from where records are retrieved. | [optional] |
| **page_size** | **int**| The number of records to be retrieved from a page. | [optional] |
| **search** | **string**| The text filter used to retrieve the records. | [optional] |
| **currency** | **string**| The currency filter used to retrieve the records.. | [optional] |
| **include_disabled** | **bool**| If set to true will include disabled beneficiaries as well | [optional] [default to false] |
| **sort** | **string**| Optional expression to sort the order of the beneficiaries. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryPageResponse**](../Model/NoFrixionMoneyMoovModelsBeneficiaryPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1BeneficiariesIdDelete()`

```php
apiV1BeneficiariesIdDelete($id)
```

Deletes a beneficiary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the beneficiary to delete.

try {
    $apiInstance->apiV1BeneficiariesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->apiV1BeneficiariesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the beneficiary to delete. | |

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

## `apiV1BeneficiariesIdPut()`

```php
apiV1BeneficiariesIdPut($id, $no_frixion_money_moov_models_beneficiary_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Updates a beneficiary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the beneficiary to update.
$no_frixion_money_moov_models_beneficiary_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryUpdate | The beneficiary to update

try {
    $result = $apiInstance->apiV1BeneficiariesIdPut($id, $no_frixion_money_moov_models_beneficiary_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->apiV1BeneficiariesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the beneficiary to update. | |
| **no_frixion_money_moov_models_beneficiary_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryUpdate**](../Model/NoFrixionMoneyMoovModelsBeneficiaryUpdate.md)| The beneficiary to update | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1BeneficiariesPost()`

```php
apiV1BeneficiariesPost($no_frixion_money_moov_models_beneficiary_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Creates a new beneficiary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_beneficiary_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryCreate | The beneficiary to create.

try {
    $result = $apiInstance->apiV1BeneficiariesPost($no_frixion_money_moov_models_beneficiary_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->apiV1BeneficiariesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_beneficiary_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiaryCreate**](../Model/NoFrixionMoneyMoovModelsBeneficiaryCreate.md)| The beneficiary to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBeneficiaryAsync()`

```php
getBeneficiaryAsync($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary
```

Get's a beneficiary by beneficiary ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\BeneficiariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The beneficiaryID of the beneficiary to retrieve.

try {
    $result = $apiInstance->getBeneficiaryAsync($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiariesApi->getBeneficiaryAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The beneficiaryID of the beneficiary to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](../Model/NoFrixionMoneyMoovModelsBeneficiary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
