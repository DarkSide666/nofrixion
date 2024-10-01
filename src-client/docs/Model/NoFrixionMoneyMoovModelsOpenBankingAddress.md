# # NoFrixionMoneyMoovModelsOpenBankingAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_type** | **string** | The type of the address. | [optional]
**address_lines** | **string[]** | The address line of the address. | [optional]
**street_name** | **string** | The street name of the address. | [optional] [default to '']
**building_number** | **string** | The building number of the address. | [optional] [default to '']
**post_code** | **string** | The post code of the address. | [optional] [default to '']
**town_name** | **string** | The town name of the address. | [optional] [default to '']
**county** | **string[]** | The list of counties for the address. | [optional]
**country** | **string** | The 2-letter country code for the address. Institution&#39;s; may require you to specify the country when used in the context of the Payee to be able to make a payment. | [optional] [default to '']
**department** | **string** | The department for the address. | [optional] [default to '']
**sub_department** | **string** | The sub-department for the address. | [optional] [default to '']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
