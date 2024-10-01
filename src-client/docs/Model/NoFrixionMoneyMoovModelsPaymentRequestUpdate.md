# # NoFrixionMoneyMoovModelsPaymentRequestUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**customer_id** | **string** | An optional customer identifier for the payment request. This field is sent to the   payer&#39;s bank when using payment initiation. The restriction in the available characters  is due to some banks rejecting requests when ones outside the set are used. | [optional]
**order_id** | **string** | An optional order ID for the payment request. If the request is for an invoice this  is the most appropriate field for the invoice ID. | [optional]
**payment_method_types** | **string** | The payment methods that the payment request supports. When setting using form data  should be supplied as a comma separated list, for example \&quot;card, pisp, lightning\&quot;. | [optional]
**description** | **string** | An optional description for the payment request. If set this field will appear  on the transaction record for some card processors. | [optional]
**pisp_account_id** | **string** | The payment account ID to use to receive payment initiation payments. This must match one of your  NoFrixion payment account IDs. This can be left blank to use your default payment account. | [optional]
**shipping_first_name** | **string** | Optionally the first name of the customer&#39;s shipping address. | [optional]
**shipping_last_name** | **string** | Optionally the last name of the customer&#39;s shipping address. | [optional]
**shipping_address_line1** | **string** | Optionally the first line of the customer&#39;s shipping address. | [optional]
**shipping_address_line2** | **string** | Optionally the second line of the customer&#39;s shipping address. | [optional]
**shipping_address_city** | **string** | Optionally the city of the customer&#39;s shipping address. | [optional]
**shipping_address_county** | **string** | Optionally the state or county of the customer&#39;s shipping address. | [optional]
**shipping_address_post_code** | **string** | Optionally the post code of the customer&#39;s shipping address. | [optional]
**shipping_address_country_code** | **string** | Optionally the country code of the customer&#39;s shipping address. | [optional]
**shipping_phone** | **string** | Optionally the shipping phone number for the customer. | [optional]
**shipping_email** | **string** | Optionally the shipping email address for the customer. | [optional]
**base_origin_url** | **string** | For card payments the origin of the payment page needs to be set in advance.  A public key context is generated to encrypt sensitive card details and is bound  to a single origin URL. | [optional]
**callback_url** | **string** | Once a payment is processed, or a notification of an inbound payment is received,  a callback request will be made to this URL. Typically it will be the page on  a merchant&#39;s web site that displays the results of the payment attempt. | [optional]
**failure_callback_url** | **string** | Optional callback URL for payment failures that can occur when the payer is   redirected away from the payment page. Typically the payer is only sent away  from the payment page for pay by bank attempts. If this URL is not set the   payer will be redirected back to the original URL the payment attempt was initiated  from. | [optional]
**card_authorize_only** | **bool** | For card payments the default behaviour is to authorise and capture the payment at the same  time. If a merchant needs to authorise and then capture at a later point this property needs  to be set to true. | [optional]
**card_create_token** | **bool** | For card payments a payment attempt can be used to create a reusable token for subsequent  payments. Setting this field to true will create a reusable customer token. | [optional]
**card_create_token_mode** | **string** | This specifies whether user consent will be taken before tokenising card or not.  This cannot be &#39;None&#39; if CardCreateToken is set to true. If this is set to &#39;UserConsentRequired&#39;  then, the user consent will overwrite CardCreateToken flag on submit card payment. | [optional]
**ignore_address_verification** | **bool** |  | [optional]
**card_ignore_cvn** | **bool** |  | [optional]
**card_processor_merchant_id** | **string** | Optional field that if specified indicates the processor merchant ID that should be used  to process any card payments. Mainly useful where a merchant has multiple processor  merchant ID&#39;s. If left empty the default merchant card settings will be used. | [optional]
**customer_email_address** | **string** | Optional email address for the customer. If the tokenise card option is set then the customer email address  is mandatory. | [optional]
**notification_email_addresses** | **string** |  | [optional]
**title** | **string** | A generic field to contain any additional data that the merchant wishes to store against the payment request.  E.g. product or service information. | [optional]
**partial_payment_steps** | **string** | An optional comma separated list of partial payment amounts. The amounts represent guidance, or suggestions, as to  how the payer will be requested to make partial payments. | [optional]
**tag_ids** | **string[]** | An optional list of tag ids to add to the payment request | [optional]
**lightning_invoice** | **string** | Bitcoin Lightning invoice for the payment request. | [optional]
**lightning_invoice_expires_at** | **\DateTime** | Date and time of expiration of the lightning invoice. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
