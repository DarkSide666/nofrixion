# # NoFrixionDataModelsOpenBankingConsentEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**bank_id** | **string** |  | [optional]
**consent_token** | **string** |  | [optional]
**institution_id** | **string** |  | [optional]
**email_address** | **string** |  | [optional]
**is_enabled** | **bool** |  | [optional]
**callback_url** | **string** |  | [optional]
**success_web_hook_url** | **string** |  | [optional]
**failure_callback_url** | **string** |  | [optional]
**is_connected_accounts** | **bool** |  | [optional]
**provider** | **string** | Lists the supported card and PIS processors. | [optional]
**expiry_date** | **\DateTime** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**merchant** | [**\Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity**](NoFrixionDataModelsMerchantEntity.md) |  | [optional]
**bank** | [**\Nofrixion\Client\Model\NoFrixionDataModelsBankEntity**](NoFrixionDataModelsBankEntity.md) |  | [optional]
**accounts** | [**\Nofrixion\Client\Model\NoFrixionDataModelsAccountEntity[]**](NoFrixionDataModelsAccountEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
