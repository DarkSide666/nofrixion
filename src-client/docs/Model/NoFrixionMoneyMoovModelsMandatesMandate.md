# # NoFrixionMoneyMoovModelsMandatesMandate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal ID of the mandate. | [optional]
**merchant_id** | **string** | Internal ID of this mandate&#39;s merchant. | [optional]
**supplier_name** | **string** | Name of the supplier used to create this mandate. | [optional]
**supplier_mandate_id** | **string** | ID that the supplier assigned to this mandate. | [optional]
**supplier_bank_account_id** | **string** | ID that the supplier assigned to this mandate&#39;s  bank account. | [optional]
**supplier_customer_id** | **string** | ID that the supplier assigned to this mandate&#39;s  customer. | [optional]
**customer_first_name** | **string** | Customer&#39;s first name. | [optional]
**customer_last_name** | **string** | Customer&#39;s last name. | [optional]
**customer_country_code** | **string** | Customer&#39;s country of residence code. | [optional]
**customer_country_name** | **string** | Customer&#39;s country of residence. | [optional]
**customer_city** | **string** | Customer&#39;s city of residence. | [optional]
**customer_email_address** | **string** | Customer&#39;s email address. | [optional]
**customer_iban** | **string** | Customer&#39;s IBAN in case of EUR account. | [optional]
**customer_account_number** | **string** | Customer&#39;s account number in case of GBP account. | [optional]
**customer_sort_code** | **string** | Customer&#39;s sort code in case of GBP account. | [optional]
**reference** | **string** | Reference assigned to this mandate. | [optional]
**is_recurring** | **bool** | Whether this mandate is single-use or recurring. | [optional]
**currency** | **string** | Currency of this mandate. | [optional]
**amount** | **float** | Amount of this mandate. | [optional]
**approved_at** | **\DateTime** | Date at which the supplier approved this mandate. | [optional]
**supplier_status** | **string** | Last status that the supplier reported for this mandate. | [optional]
**status** | **string** | General status of this mandate. | [optional]
**inserted** | **\DateTime** | The timestamp this mandate was created at. | [optional]
**last_updated** | **\DateTime** | The timestamp this mandate was last updated at. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
