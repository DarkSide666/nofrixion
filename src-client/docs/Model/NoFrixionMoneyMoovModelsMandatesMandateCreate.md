# # NoFrixionMoneyMoovModelsMandatesMandateCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | Merchant ID that this mandate is associated with. |
**first_name** | **string** | Customer&#39;s first name. |
**last_name** | **string** | Customer&#39;s last name. |
**address_line1** | **string** | First line of the customer&#39;s address. |
**address_line2** | **string** | Second line of the customer&#39;s address. Optional. | [optional]
**postal_code** | **string** | Customer&#39;s postal code. |
**city** | **string** | Customer&#39;s city. |
**country_code** | **string** | 2-character country code of the customer&#39;s bank account. |
**iban** | **string** | IBAN of the customer&#39;s bank account in case of EUR account. | [optional]
**account_number** | **string** | Account number of the customer&#39;s bank account in case of GBP account. | [optional]
**sort_code** | **string** | Sort code of the customer&#39;s bank account in case of GBP account. | [optional]
**email_address** | **string** | Customer&#39;s email address. |
**reference** | **string** | Field that you can use as reference. | [optional]
**is_recurring** | **bool** | Indicates whether this mandate is single-use or recurring. | [optional]
**currency** | **string** | Currency of the mandate. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
