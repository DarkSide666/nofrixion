# # NoFrixionDataAccessDataModelsPayrunEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** |  | [optional]
**id** | **string** |  | [optional]
**batch_payout_id** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**scheduled_date** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**current_state** | **string** |  | [optional]
**correlation_id** | **string** |  | [optional]
**scheduled_id** | **string** |  | [optional]
**payouts_to_create** | **string[]** |  | [optional]
**created_payouts** | **string[]** |  | [optional]
**timestamp** | **string** |  | [optional]
**user** | [**\Nofrixion\Client\Model\NoFrixionDataModelsUserEntity**](NoFrixionDataModelsUserEntity.md) |  | [optional]
**is_archived** | **bool** |  | [optional]
**can_edit** | **bool** |  | [optional] [readonly]
**can_delete** | **bool** |  | [optional] [readonly]
**merchant** | [**\Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity**](NoFrixionDataModelsMerchantEntity.md) |  | [optional]
**invoices** | [**\Nofrixion\Client\Model\NoFrixionDataAccessDataModelsInvoiceEntity[]**](NoFrixionDataAccessDataModelsInvoiceEntity.md) |  | [optional]
**payrun_source_accounts** | [**\Nofrixion\Client\Model\NoFrixionDataAccessDataModelsPayrunSourceAccountEntity[]**](NoFrixionDataAccessDataModelsPayrunSourceAccountEntity.md) |  | [optional]
**payouts** | [**\Nofrixion\Client\Model\NoFrixionDataModelsPayoutEntity[]**](NoFrixionDataModelsPayoutEntity.md) |  | [optional]
**events** | [**\Nofrixion\Client\Model\NoFrixionDataAccessDataModelsPayrunEventEntity[]**](NoFrixionDataAccessDataModelsPayrunEventEntity.md) |  | [optional]
**payment_requests** | [**\Nofrixion\Client\Model\NoFrixionDataModelsPaymentRequestEntity[]**](NoFrixionDataModelsPaymentRequestEntity.md) |  | [optional]
**topup_payouts** | [**\Nofrixion\Client\Model\NoFrixionDataModelsPayoutEntity[]**](NoFrixionDataModelsPayoutEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
