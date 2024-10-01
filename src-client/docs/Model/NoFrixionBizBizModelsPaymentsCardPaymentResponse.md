# # NoFrixionBizBizModelsPaymentsCardPaymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorized_amount** | **string** |  | [optional]
**currency_code** | **string** |  | [optional]
**response_code** | **string** |  | [optional]
**status** | **string** |  | [optional]
**request_id** | **string** |  | [optional]
**transaction_id** | **string** |  | [optional]
**is_payer_authentication_required** | **bool** | Gets set to true if 3-D Secure payer authentication is required for a payment. | [optional]
**is_soft_decline** | **bool** | Gets set to true if the card processor flagged the transaction as having failed address or  card security number verification. If the payment was for a sale a soft decline will prevent  the transaction being captured. The merchant can set the ignore address verification flag   if they want to allow soft declines to be accepted or false if not. | [optional]
**payer_authentication_url** | **string** | If a card payment response indicates a 3-D Secure payer authentication is required  this field holds the URL to redirect the payer to their issuing bank. | [optional]
**payer_authentication_access_token** | **string** | If a card payment response indicates a 3-D Secure payer authentication is required  this field holds the access token to POST when performing the redirect. | [optional]
**payer_authentication_window_width** | **int** | If a card payment response indicates a 3-D Secure payer authentication is required  this field holds the requested width of the iframe used to hold the challenge. | [optional]
**payer_authentication_window_height** | **int** | If a card payment response indicates a 3-D Secure payer authentication is required  this field holds the requested height of the iframe used to hold the challenge. | [optional]
**payer_authentication_merchant_data** | **string** | If a card payment response indicates a 3-D Secure payer authentication this field may   get set in order to transfer information back to the \&quot;authenticationcallback\&quot; method  that gets called automatically after a successful payer authentication attempt. | [optional]
**payment_request_callback_url** | **string** | The callback URL that was set when the payment request was created. Payers will be   redirected to this URL after a successful card authorisation. | [optional]
**three_ds_redirect_url** | **string** | Checkout.com require a redirect for 3DS authentication. This link will contain the   link the payer needs to be redirected to. | [optional]
**payment_request_id** | **string** |  | [optional]
**response_type** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
