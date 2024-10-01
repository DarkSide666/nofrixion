# # NoFrixionMoneyMoovModelsPaymentRequestPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_request_id** | **string** | The ID of the payment request the result is for. | [optional]
**occurred_at** | **\DateTime** | Timestamp the payment occurred. For cards this will be the time the  original authorisation occurred. | [optional]
**payment_method** | **string** | The payment type for the received money. | [optional]
**amount** | **float** | The authorised payment amount. | [optional]
**currency** | **string** | The authorised payment currency. | [optional]
**tokenised_card_id** | **string** | For card payments the merchant can request a reusable token for this payer and  use it to submit subsequent merchant initiated payments. | [optional]
**card_authorization_id** | **string** | For card payments this is the ID from the initial successful authorization or sale.  Required for voids and capture operations. | [optional]
**card_captured_amount** | **float** | The captured amount for a card payment. | [optional]
**card_is_voided** | **bool** | If true indicates that the card payment was voided. | [optional]
**payment_processor** | **string** | The card processor that was used for the payment event. | [optional]
**refunded_amount** | **float** | Refunded Amount | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
