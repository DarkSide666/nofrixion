# Nofrixion\Client\RulesApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1RulesGet()**](RulesApi.md#apiV1RulesGet) | **GET** /api/v1/rules | Gets all the rules for a merchant. |
| [**apiV1RulesIdDelete()**](RulesApi.md#apiV1RulesIdDelete) | **DELETE** /api/v1/rules/{id} | Deletes a rule and any associated events. |
| [**apiV1RulesIdDisablePut()**](RulesApi.md#apiV1RulesIdDisablePut) | **PUT** /api/v1/rules/{id}/disable | Disables a rule. |
| [**apiV1RulesIdEventsGet()**](RulesApi.md#apiV1RulesIdEventsGet) | **GET** /api/v1/rules/{id}/events | Gets a list of the events for a single rule. |
| [**apiV1RulesIdGet()**](RulesApi.md#apiV1RulesIdGet) | **GET** /api/v1/rules/{id} | Get a single rule by ID. |
| [**apiV1RulesIdPut()**](RulesApi.md#apiV1RulesIdPut) | **PUT** /api/v1/rules/{id} | Update an existing rule. |
| [**apiV1RulesPost()**](RulesApi.md#apiV1RulesPost) | **POST** /api/v1/rules | Creates a new rule for a MoneyMoov payment account. |


## `apiV1RulesGet()`

```php
apiV1RulesGet($merchant_id, $page, $size, $sort, $search, $archived_only): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingRulesPageResponse
```

Gets all the rules for a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant ID to retrieve the rules for.
$page = 1; // int | The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned.
$size = 20; // int | The number of records to be retrieved from a page.
$sort = 'sort_example'; // string | The field(s) to sort by
$search = 'search_example'; // string | The search filter
$archived_only = false; // bool | If set to true, returns only archived rules

try {
    $result = $apiInstance->apiV1RulesGet($merchant_id, $page, $size, $sort, $search, $archived_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->apiV1RulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant ID to retrieve the rules for. | [optional] |
| **page** | **int**| The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned. | [optional] [default to 1] |
| **size** | **int**| The number of records to be retrieved from a page. | [optional] [default to 20] |
| **sort** | **string**| The field(s) to sort by | [optional] |
| **search** | **string**| The search filter | [optional] |
| **archived_only** | **bool**| If set to true, returns only archived rules | [optional] [default to false] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingRulesPageResponse**](../Model/NoFrixionBizBizModelsPagingRulesPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1RulesIdDelete()`

```php
apiV1RulesIdDelete($id)
```

Deletes a rule and any associated events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the rule to delete.

try {
    $apiInstance->apiV1RulesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->apiV1RulesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the rule to delete. | |

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

## `apiV1RulesIdDisablePut()`

```php
apiV1RulesIdDisablePut($id)
```

Disables a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the rule to disable.

try {
    $apiInstance->apiV1RulesIdDisablePut($id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->apiV1RulesIdDisablePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the rule to disable. | |

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

## `apiV1RulesIdEventsGet()`

```php
apiV1RulesIdEventsGet($id, $page, $size, $event_types): \Nofrixion\Client\Model\NoFrixionBizBizModelsPagingRuleEventsPageResponse
```

Gets a list of the events for a single rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the rule to get the events for.
$page = 1; // int | The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned.
$size = 20; // int | The number of records to be retrieved from a page.
$event_types = array('event_types_example'); // string[] | List of event types to filter the rule events based on type

try {
    $result = $apiInstance->apiV1RulesIdEventsGet($id, $page, $size, $event_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->apiV1RulesIdEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the rule to get the events for. | |
| **page** | **int**| The page number from where records are retrieved. Note that the paging starts from page 1.              If a 0 is supplied it will be treated as a 1 and the first page is returned. | [optional] [default to 1] |
| **size** | **int**| The number of records to be retrieved from a page. | [optional] [default to 20] |
| **event_types** | [**string[]**](../Model/string.md)| List of event types to filter the rule events based on type | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionBizBizModelsPagingRuleEventsPageResponse**](../Model/NoFrixionBizBizModelsPagingRuleEventsPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1RulesIdGet()`

```php
apiV1RulesIdGet($id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRule
```

Get a single rule by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the rule to get.

try {
    $result = $apiInstance->apiV1RulesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->apiV1RulesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the rule to get. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRule**](../Model/NoFrixionMoneyMoovModelsRule.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1RulesIdPut()`

```php
apiV1RulesIdPut($id, $no_frixion_money_moov_models_rule_update): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRule
```

Update an existing rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the rule to update.
$no_frixion_money_moov_models_rule_update = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleUpdate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleUpdate | The model with the updated rule fields.

try {
    $result = $apiInstance->apiV1RulesIdPut($id, $no_frixion_money_moov_models_rule_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->apiV1RulesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the rule to update. | |
| **no_frixion_money_moov_models_rule_update** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleUpdate**](../Model/NoFrixionMoneyMoovModelsRuleUpdate.md)| The model with the updated rule fields. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRule**](../Model/NoFrixionMoneyMoovModelsRule.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1RulesPost()`

```php
apiV1RulesPost($no_frixion_money_moov_models_rule_create): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRule
```

Creates a new rule for a MoneyMoov payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_rule_create = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleCreate(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleCreate | The model of the new rule to create.

try {
    $result = $apiInstance->apiV1RulesPost($no_frixion_money_moov_models_rule_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->apiV1RulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_rule_create** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleCreate**](../Model/NoFrixionMoneyMoovModelsRuleCreate.md)| The model of the new rule to create. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRule**](../Model/NoFrixionMoneyMoovModelsRule.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
