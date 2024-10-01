# Nofrixion\Client\TokensApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1TokensIdDelete()**](TokensApi.md#apiV1TokensIdDelete) | **DELETE** /api/v1/tokens/{id} | Deletes a merchant API token. |
| [**apiV1TokensPost()**](TokensApi.md#apiV1TokensPost) | **POST** /api/v1/tokens | Creates a new merchant API token. |


## `apiV1TokensIdDelete()`

```php
apiV1TokensIdDelete($id)
```

Deletes a merchant API token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the token to delete.

try {
    $apiInstance->apiV1TokensIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->apiV1TokensIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the token to delete. | |

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

## `apiV1TokensPost()`

```php
apiV1TokensPost($no_frixion_money_moov_models_token_add): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken
```

Creates a new merchant API token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_token_add = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd | The details of the merchant token to add.

try {
    $result = $apiInstance->apiV1TokensPost($no_frixion_money_moov_models_token_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->apiV1TokensPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_token_add** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd**](../Model/NoFrixionMoneyMoovModelsTokenAdd.md)| The details of the merchant token to add. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken**](../Model/NoFrixionMoneyMoovModelsMerchantToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
