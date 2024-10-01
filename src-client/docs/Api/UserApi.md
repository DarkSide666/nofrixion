# Nofrixion\Client\UserApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1UserGet()**](UserApi.md#apiV1UserGet) | **GET** /api/v1/user | Get the profile for the authenticated user. |
| [**apiV1UserIdPut()**](UserApi.md#apiV1UserIdPut) | **PUT** /api/v1/user/{id} | Updates a user record and optionally accepts an invite to join a merchant. |
| [**apiV1UserMerchantIDUsersGet()**](UserApi.md#apiV1UserMerchantIDUsersGet) | **GET** /api/v1/user/{merchantID}/users | Gets all users including invitees for a merchant. |


## `apiV1UserGet()`

```php
apiV1UserGet(): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Get the profile for the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1UserGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV1UserGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV1UserIdPut()`

```php
apiV1UserIdPut($id, $no_frixion_money_moov_models_user_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Updates a user record and optionally accepts an invite to join a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$no_frixion_money_moov_models_user_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserUpdate

try {
    $result = $apiInstance->apiV1UserIdPut($id, $no_frixion_money_moov_models_user_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV1UserIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **no_frixion_money_moov_models_user_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserUpdate**](../Model/NoFrixionMoneyMoovModelsUserUpdate.md)|  | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](../Model/NoFrixionMoneyMoovModelsUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1UserMerchantIDUsersGet()`

```php
apiV1UserMerchantIDUsersGet($merchant_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser
```

Gets all users including invitees for a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the user roles for.

try {
    $result = $apiInstance->apiV1UserMerchantIDUsersGet($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV1UserMerchantIDUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the user roles for. | |

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
