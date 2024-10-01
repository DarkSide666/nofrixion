# Nofrixion\Client\MetadataApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1MetadataHeightGet()**](MetadataApi.md#apiV1MetadataHeightGet) | **GET** /api/v1/metadata/height | Gets the current Bitcoin blockchain height. In sandbox the testnet height is returned. |
| [**apiV1MetadataProblemGet()**](MetadataApi.md#apiV1MetadataProblemGet) | **GET** /api/v1/metadata/problem | Returns an example problem response. |
| [**apiV1MetadataProblemnotificationGet()**](MetadataApi.md#apiV1MetadataProblemnotificationGet) | **GET** /api/v1/metadata/problemnotification | Triggers a webhook with the problem details in the payload. |
| [**apiV1MetadataVersionGet()**](MetadataApi.md#apiV1MetadataVersionGet) | **GET** /api/v1/metadata/version | Gets the current version of the MoneyMoov API. |
| [**apiV1MetadataWhoamiGet()**](MetadataApi.md#apiV1MetadataWhoamiGet) | **GET** /api/v1/metadata/whoami | Returns the profile of the requesting user. |
| [**apiV1MetadataWhoamimerchantGet()**](MetadataApi.md#apiV1MetadataWhoamimerchantGet) | **GET** /api/v1/metadata/whoamimerchant | Returns the name of the merchant that authentication token was issued for. |


## `apiV1MetadataHeightGet()`

```php
apiV1MetadataHeightGet(): int
```

Gets the current Bitcoin blockchain height. In sandbox the testnet height is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1MetadataHeightGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->apiV1MetadataHeightGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**int**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1MetadataProblemGet()`

```php
apiV1MetadataProblemGet()
```

Returns an example problem response.

All problem responses from the API will follow this general format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV1MetadataProblemGet();
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->apiV1MetadataProblemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiV1MetadataProblemnotificationGet()`

```php
apiV1MetadataProblemnotificationGet($url, $id, $secret)
```

Triggers a webhook with the problem details in the payload.

This method can be used to test receiving webhooks from the MoneyMoo API as well as   verifying the HMAC HTTP request authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | The URL to send the HTTP POST request to with the problem notification.
$id = 'id_example'; // string | Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added.
$secret = 'secret_example'; // string | Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added.

try {
    $apiInstance->apiV1MetadataProblemnotificationGet($url, $id, $secret);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->apiV1MetadataProblemnotificationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| The URL to send the HTTP POST request to with the problem notification. | [optional] |
| **id** | **string**| Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added. | [optional] |
| **secret** | **string**| Optional. If the id and secret are set the notification request will have the              HMAC HTTP authentication headers added. | [optional] |

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

## `apiV1MetadataVersionGet()`

```php
apiV1MetadataVersionGet(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsNoFrixionVersion
```

Gets the current version of the MoneyMoov API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1MetadataVersionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->apiV1MetadataVersionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsNoFrixionVersion**](../Model/NoFrixionMoneyMoovModelsNoFrixionVersion.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1MetadataWhoamiGet()`

```php
apiV1MetadataWhoamiGet(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Returns the profile of the requesting user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1MetadataWhoamiGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->apiV1MetadataWhoamiGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](../Model/NoFrixionMoneyMoovModelsUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1MetadataWhoamimerchantGet()`

```php
apiV1MetadataWhoamimerchantGet(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant
```

Returns the name of the merchant that authentication token was issued for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1MetadataWhoamimerchantGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->apiV1MetadataWhoamimerchantGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchant**](../Model/NoFrixionMoneyMoovModelsMerchant.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
