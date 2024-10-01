# # NoFrixionMoneyMoovModelsCardCustomerToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique ID of the card token that has been stored for the customer. This is   the ID to supply when requesting an authorisation on behalf of the customer. | [optional]
**masked_card_number** | **string** |  | [optional]
**last_four_digits** | **string** |  | [optional]
**expiry_month** | **string** |  | [optional]
**expiry_year** | **string** |  | [optional]
**payment_request_id** | **string** |  | [optional]
**customer_email_address** | **string** | When creating a tokenised card the payer&#39;s email address must be supplied. This is  used as away to group card tokens for an end user. For customer initiated transactions   it is important that the email address supplied has been verified to belong to the user  initiating the payment. | [optional]
**card_type** | **string** | The type of the tokenised card, e.g. Visa, MasterCard etc. It&#39;s possible this could  be empty if the card type could not be identified. There is no hard and fast way to  know for sure to know the type of card. | [optional]
**merchant_id** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
