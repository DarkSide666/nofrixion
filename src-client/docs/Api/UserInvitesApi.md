# Nofrixion\Client\UserInvitesApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1UserinvitesIdDelete()**](UserInvitesApi.md#apiV1UserinvitesIdDelete) | **DELETE** /api/v1/userinvites/{id} | Deletes user invite. |
| [**apiV1UserinvitesIdGet()**](UserInvitesApi.md#apiV1UserinvitesIdGet) | **GET** /api/v1/userinvites/{id} | Gets a user invite by ID. |
| [**apiV1UserinvitesIdPut()**](UserInvitesApi.md#apiV1UserinvitesIdPut) | **PUT** /api/v1/userinvites/{id} | Resend, or request a resend, of a user invite. |
| [**apiV1UserinvitesPost()**](UserInvitesApi.md#apiV1UserinvitesPost) | **POST** /api/v1/userinvites | Creates a new user invite and optionally sends the invitee an email with the details. |


## `apiV1UserinvitesIdDelete()`

```php
apiV1UserinvitesIdDelete($id)
```

Deletes user invite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | THe ID of the user invite to delete.

try {
    $apiInstance->apiV1UserinvitesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->apiV1UserinvitesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| THe ID of the user invite to delete. | |

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

## `apiV1UserinvitesIdGet()`

```php
apiV1UserinvitesIdGet($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite
```

Gets a user invite by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user invite to retrieve.

try {
    $result = $apiInstance->apiV1UserinvitesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->apiV1UserinvitesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user invite to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite**](../Model/NoFrixionMoneyMoovModelsUserInvite.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1UserinvitesIdPut()`

```php
apiV1UserinvitesIdPut($id)
```

Resend, or request a resend, of a user invite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the user invite to resend.

try {
    $apiInstance->apiV1UserinvitesIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->apiV1UserinvitesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the user invite to resend. | |

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

## `apiV1UserinvitesPost()`

```php
apiV1UserinvitesPost($no_frixion_money_moov_models_user_invite_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite
```

Creates a new user invite and optionally sends the invitee an email with the details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\UserInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_user_invite_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate | The model holding the details of the user invite to create.

try {
    $result = $apiInstance->apiV1UserinvitesPost($no_frixion_money_moov_models_user_invite_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitesApi->apiV1UserinvitesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_user_invite_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInviteCreate**](../Model/NoFrixionMoneyMoovModelsUserInviteCreate.md)| The model holding the details of the user invite to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserInvite**](../Model/NoFrixionMoneyMoovModelsUserInvite.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
