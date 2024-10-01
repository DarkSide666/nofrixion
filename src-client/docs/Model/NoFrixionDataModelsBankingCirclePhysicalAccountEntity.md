# # NoFrixionDataModelsBankingCirclePhysicalAccountEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**physical_account_id** | **string** |  | [optional]
**physical_account_iban** | **string** |  | [optional]
**supplier_name** | **string** | Lists the supported card and PIS processors. | [optional]
**agency_bic** | **string** |  | [optional]
**last_balance** | **float** |  | [optional]
**is_default** | **bool** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**is_safeguard** | **bool** |  | [optional]
**is_operating** | **bool** |  | [optional]
**is_fee** | **bool** |  | [optional]
**is_fiduciary** | **bool** |  | [optional]
**linked_fiduciary_account_id** | **string** |  | [optional]
**company_number** | **string** |  | [optional]
**default_payment_rail** | **string** |  | [optional]
**accounts** | [**\Nofrixion\Client\Model\NoFrixionDataModelsAccountEntity[]**](NoFrixionDataModelsAccountEntity.md) |  | [optional]
**merchants** | [**\Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity[]**](NoFrixionDataModelsMerchantEntity.md) |  | [optional]
**linked_fiduciary_account** | [**\Nofrixion\Client\Model\NoFrixionDataModelsBankingCirclePhysicalAccountEntity**](NoFrixionDataModelsBankingCirclePhysicalAccountEntity.md) |  | [optional]
**inverse_linked_fiduciary_account** | [**\Nofrixion\Client\Model\NoFrixionDataModelsBankingCirclePhysicalAccountEntity[]**](NoFrixionDataModelsBankingCirclePhysicalAccountEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
