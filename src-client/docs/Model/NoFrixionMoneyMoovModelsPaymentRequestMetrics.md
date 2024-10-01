# # NoFrixionMoneyMoovModelsPaymentRequestMetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all** | **int** | Total payment request count. | [optional]
**unpaid** | **int** | Total payment request count with status None. | [optional]
**partially_paid** | **int** | Total payment request count with status PartiallyPaid. | [optional]
**paid** | **int** | Total payment request count with status FullyPaid. | [optional]
**authorized** | **int** | Total payment request count with status Authorized. | [optional]
**total_amounts_by_currency** | **array<string,array<string,float>>** | The total amounts by status and currency. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
