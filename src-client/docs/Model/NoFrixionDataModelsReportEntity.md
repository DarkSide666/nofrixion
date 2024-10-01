# # NoFrixionDataModelsReportEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**created_by_user_id** | **string** |  | [optional]
**report_type** | **string** |  | [optional]
**report_name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**cron_expression** | **string** |  | [optional]
**status** | **string** |  | [optional]
**last_completed_at** | **\DateTime** |  | [optional]
**statement_number** | **int** |  | [optional]
**is_disabled** | **bool** |  | [optional]
**error** | **string** |  | [optional]
**merchant** | [**\Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity**](NoFrixionDataModelsMerchantEntity.md) |  | [optional]
**created_by_user** | [**\Nofrixion\Client\Model\NoFrixionDataModelsUserEntity**](NoFrixionDataModelsUserEntity.md) |  | [optional]
**report_accounts** | [**\Nofrixion\Client\Model\NoFrixionDataModelsReportAccountEntity[]**](NoFrixionDataModelsReportAccountEntity.md) |  | [optional]
**report_results** | [**\Nofrixion\Client\Model\NoFrixionDataModelsReportResultEntity[]**](NoFrixionDataModelsReportResultEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
