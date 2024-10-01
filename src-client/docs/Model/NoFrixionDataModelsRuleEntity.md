# # NoFrixionDataModelsRuleEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**approver_id** | **string** |  | [optional]
**is_disabled** | **bool** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**status** | **string** |  | [optional]
**trigger_on_pay_in** | **bool** |  | [optional]
**trigger_cron_expression** | **string** |  | [optional]
**time_zone_id** | **string** |  | [optional]
**start_at** | **\DateTime** |  | [optional]
**end_at** | **\DateTime** |  | [optional]
**on_approved_web_hook_url** | **string** |  | [optional]
**on_execution_error_web_hook_url** | **string** |  | [optional]
**on_execution_success_web_hook_url** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**last_run_at_transaction_date** | **\DateTime** |  | [optional]
**last_executed_at** | **\DateTime** |  | [optional]
**web_hook_secret** | **string** |  | [optional]
**amount_to_leave** | **float** |  | [optional]
**minimum_amount_to_run_at** | **float** |  | [optional]
**payout_your_reference** | **string** |  | [optional]
**payout_their_reference** | **string** |  | [optional]
**payout_description** | **string** |  | [optional]
**is_archived** | **bool** |  | [optional]
**is_system** | **bool** |  | [optional]
**user** | [**\Nofrixion\Client\Model\NoFrixionDataModelsUserEntity**](NoFrixionDataModelsUserEntity.md) |  | [optional]
**approver** | [**\Nofrixion\Client\Model\NoFrixionDataModelsUserEntity**](NoFrixionDataModelsUserEntity.md) |  | [optional]
**account** | [**\Nofrixion\Client\Model\NoFrixionDataModelsAccountEntity**](NoFrixionDataModelsAccountEntity.md) |  | [optional]
**rule_destinations** | [**\Nofrixion\Client\Model\NoFrixionDataModelsRuleDestinationEntity[]**](NoFrixionDataModelsRuleDestinationEntity.md) |  | [optional]
**rule_events** | [**\Nofrixion\Client\Model\NoFrixionDataModelsRuleEventEntity[]**](NoFrixionDataModelsRuleEventEntity.md) |  | [optional]
**payouts** | [**\Nofrixion\Client\Model\NoFrixionDataModelsPayoutEntity[]**](NoFrixionDataModelsPayoutEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
