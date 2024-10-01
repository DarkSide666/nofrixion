# # NoFrixionMoneyMoovModelsPayoutMetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all** | **float** | Total payout count. | [optional]
**in_progress** | **float** | Payouts with Pending, Queued or QueuedUpstream status. | [optional]
**pending_approval** | **float** | Payouts with PendingApproval or PendingInput status. | [optional]
**failed** | **float** | Payouts with Failed, Rejected or Unknown status. | [optional]
**paid** | **float** | Payouts with Processed status. | [optional]
**scheduled** | **float** | Payouts with Scheduled status. | [optional]
**total_amounts_by_currency** | **array<string,array<string,float>>** | The total amounts by status and currency. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
