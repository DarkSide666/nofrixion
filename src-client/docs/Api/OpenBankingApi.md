# Nofrixion\Client\OpenBankingApi

All URIs are relative to https://api-sandbox.nofrixion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1OpenbankingAccountAccountIDDelete()**](OpenBankingApi.md#apiV1OpenbankingAccountAccountIDDelete) | **DELETE** /api/v1/openbanking/account/{accountID} | Deletes the specified connected account and all associated transactions. |
| [**apiV1OpenbankingAccountAccountIDSynchronisePost()**](OpenBankingApi.md#apiV1OpenbankingAccountAccountIDSynchronisePost) | **POST** /api/v1/openbanking/account/{accountID}/synchronise | Attempts to synchronise the balance and transactions of a connected account. |
| [**apiV1OpenbankingAccountsConsentIDGet()**](OpenBankingApi.md#apiV1OpenbankingAccountsConsentIDGet) | **GET** /api/v1/openbanking/accounts/{consentID} | Retrieves list of accounts from financial institution. |
| [**apiV1OpenbankingConsentsConsentIDDelete()**](OpenBankingApi.md#apiV1OpenbankingConsentsConsentIDDelete) | **DELETE** /api/v1/openbanking/consents/{consentID} | Deletes a single open banking consent. |
| [**apiV1OpenbankingConsentsConsentIDGet()**](OpenBankingApi.md#apiV1OpenbankingConsentsConsentIDGet) | **GET** /api/v1/openbanking/consents/{consentID} | Retrieve a single open banking consent. |
| [**apiV1OpenbankingConsentsConsentIDPatch()**](OpenBankingApi.md#apiV1OpenbankingConsentsConsentIDPatch) | **PATCH** /api/v1/openbanking/consents/{consentID} | Creates a new authorisation to a financial institution based on a consent that has   already been authorised. |
| [**apiV1OpenbankingConsentsMerchantIDEmailDelete()**](OpenBankingApi.md#apiV1OpenbankingConsentsMerchantIDEmailDelete) | **DELETE** /api/v1/openbanking/consents/{merchantID}/{email} | Delete all the open banking consents for a single user. |
| [**apiV1OpenbankingConsentsMerchantIDEmailGet()**](OpenBankingApi.md#apiV1OpenbankingConsentsMerchantIDEmailGet) | **GET** /api/v1/openbanking/consents/{merchantID}/{email} | Retrieve all the open banking consents for a single user. |
| [**apiV1OpenbankingConsentsPost()**](OpenBankingApi.md#apiV1OpenbankingConsentsPost) | **POST** /api/v1/openbanking/consents | Creates a consent thats used to initiate an authorisation to a financial institution. |
| [**apiV1OpenbankingTransactionsConsentIDAccountIDGet()**](OpenBankingApi.md#apiV1OpenbankingTransactionsConsentIDAccountIDGet) | **GET** /api/v1/openbanking/transactions/{consentID}/{accountID} | Retrieves transactions from financial institution. |


## `apiV1OpenbankingAccountAccountIDDelete()`

```php
apiV1OpenbankingAccountAccountIDDelete($account_id)
```

Deletes the specified connected account and all associated transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the connected account.

try {
    $apiInstance->apiV1OpenbankingAccountAccountIDDelete($account_id);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingAccountAccountIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the connected account. | |

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

## `apiV1OpenbankingAccountAccountIDSynchronisePost()`

```php
apiV1OpenbankingAccountAccountIDSynchronisePost($account_id)
```

Attempts to synchronise the balance and transactions of a connected account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the connected account.

try {
    $apiInstance->apiV1OpenbankingAccountAccountIDSynchronisePost($account_id);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingAccountAccountIDSynchronisePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the connected account. | |

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

## `apiV1OpenbankingAccountsConsentIDGet()`

```php
apiV1OpenbankingAccountsConsentIDGet($consent_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAccount[]
```

Retrieves list of accounts from financial institution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string | The ConsentTokenID is the reference id to the token.

try {
    $result = $apiInstance->apiV1OpenbankingAccountsConsentIDGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingAccountsConsentIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**| The ConsentTokenID is the reference id to the token. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAccount[]**](../Model/NoFrixionMoneyMoovModelsOpenBankingAccount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OpenbankingConsentsConsentIDDelete()`

```php
apiV1OpenbankingConsentsConsentIDDelete($consent_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent
```

Deletes a single open banking consent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string | The ID of the consent to delete.

try {
    $result = $apiInstance->apiV1OpenbankingConsentsConsentIDDelete($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingConsentsConsentIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**| The ID of the consent to delete. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OpenbankingConsentsConsentIDGet()`

```php
apiV1OpenbankingConsentsConsentIDGet($consent_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent
```

Retrieve a single open banking consent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string | The ID of the consent to retrieve.

try {
    $result = $apiInstance->apiV1OpenbankingConsentsConsentIDGet($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingConsentsConsentIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**| The ID of the consent to retrieve. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OpenbankingConsentsConsentIDPatch()`

```php
apiV1OpenbankingConsentsConsentIDPatch($consent_id): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse
```

Creates a new authorisation to a financial institution based on a consent that has   already been authorised.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string | The ID of the consent to base the new authorisation on.

try {
    $result = $apiInstance->apiV1OpenbankingConsentsConsentIDPatch($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingConsentsConsentIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**| The ID of the consent to base the new authorisation on. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OpenbankingConsentsMerchantIDEmailDelete()`

```php
apiV1OpenbankingConsentsMerchantIDEmailDelete($merchant_id, $email)
```

Delete all the open banking consents for a single user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to delete the consents for.
$email = 'email_example'; // string | The email address of the end user to delete the consents for.

try {
    $apiInstance->apiV1OpenbankingConsentsMerchantIDEmailDelete($merchant_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingConsentsMerchantIDEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to delete the consents for. | |
| **email** | **string**| The email address of the end user to delete the consents for. | |

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

## `apiV1OpenbankingConsentsMerchantIDEmailGet()`

```php
apiV1OpenbankingConsentsMerchantIDEmailGet($merchant_id, $email): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent[]
```

Retrieve all the open banking consents for a single user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The ID of the merchant to get the consents for.
$email = 'email_example'; // string | The email address of the end user to get the consents for.

try {
    $result = $apiInstance->apiV1OpenbankingConsentsMerchantIDEmailGet($merchant_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingConsentsMerchantIDEmailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The ID of the merchant to get the consents for. | |
| **email** | **string**| The email address of the end user to get the consents for. | |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsent[]**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsent.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OpenbankingConsentsPost()`

```php
apiV1OpenbankingConsentsPost($no_frixion_money_moov_models_open_banking_consent_request): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse
```

Creates a consent thats used to initiate an authorisation to a financial institution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no_frixion_money_moov_models_open_banking_consent_request = new \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentRequest(); // \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentRequest | The fields required to request a new consent. The email address must belong              to the user who will be authorising the consent.

try {
    $result = $apiInstance->apiV1OpenbankingConsentsPost($no_frixion_money_moov_models_open_banking_consent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingConsentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no_frixion_money_moov_models_open_banking_consent_request** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentRequest**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsentRequest.md)| The fields required to request a new consent. The email address must belong              to the user who will be authorising the consent. | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsentResponse**](../Model/NoFrixionMoneyMoovModelsOpenBankingConsentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OpenbankingTransactionsConsentIDAccountIDGet()`

```php
apiV1OpenbankingTransactionsConsentIDAccountIDGet($consent_id, $account_id, $offset, $limit, $transaction_from, $transaction_to, $sort_inserted_ascending): \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingTransaction[]
```

Retrieves transactions from financial institution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nofrixion\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Nofrixion\Client\Api\OpenBankingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = 'consent_id_example'; // string | The ConsentTokenID is the reference id to the token.
$account_id = 'account_id_example'; // string | The id of the account where transactions are retrieved.
$offset = 56; // int | Optional, offset the transactions by offset number.
$limit = 56; // int | Optional, limit per amount of transactions.
$transaction_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, the date filter to apply to retrieve transactions created after this date.
$transaction_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, the date filter to apply to retrieve transactions created up until this date.
$sort_inserted_ascending = True; // bool | Default sort order is inserted descending (latest first). Set to true to sort by               inserted ascending (earliest first).

try {
    $result = $apiInstance->apiV1OpenbankingTransactionsConsentIDAccountIDGet($consent_id, $account_id, $offset, $limit, $transaction_from, $transaction_to, $sort_inserted_ascending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenBankingApi->apiV1OpenbankingTransactionsConsentIDAccountIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_id** | **string**| The ConsentTokenID is the reference id to the token. | |
| **account_id** | **string**| The id of the account where transactions are retrieved. | |
| **offset** | **int**| Optional, offset the transactions by offset number. | [optional] |
| **limit** | **int**| Optional, limit per amount of transactions. | [optional] |
| **transaction_from** | **\DateTime**| Optional, the date filter to apply to retrieve transactions created after this date. | [optional] |
| **transaction_to** | **\DateTime**| Optional, the date filter to apply to retrieve transactions created up until this date. | [optional] |
| **sort_inserted_ascending** | **bool**| Default sort order is inserted descending (latest first). Set to true to sort by               inserted ascending (earliest first). | [optional] |

### Return type

[**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingTransaction[]**](../Model/NoFrixionMoneyMoovModelsOpenBankingTransaction.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
