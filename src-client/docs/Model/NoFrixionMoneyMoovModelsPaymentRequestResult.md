# # NoFrixionMoneyMoovModelsPaymentRequestResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_request_id** | **string** | The ID of the payment request the result is for. | [optional]
**amount** | **float** | The authorised payment amount. | [optional]
**currency** | **string** | The authorised payment currency. | [optional]
**result** | **string** | The result of the payment attempt. | [optional]
**requested_amount** | **float** | The full original payment amount requested. | [optional]
**payments** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestPayment[]**](NoFrixionMoneyMoovModelsPaymentRequestPayment.md) | The list of payment attempts that have been received for the payment request. | [optional]
**pisp_authorizations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestAuthorization[]**](NoFrixionMoneyMoovModelsPaymentRequestsPaymentRequestAuthorization.md) |  | [optional]
**amount_received** | **float** |  | [optional]
**amount_refunded** | **float** |  | [optional]
**amount_pending** | **float** |  | [optional]
**customer_id** | **string** | The customer id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
