# # NoFrixionMoneyMoovModelsMerchant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the merchant. | [optional]
**name** | **string** | The registered business name of the merchant. | [optional]
**enabled** | **bool** |  | [optional]
**company_id** | **string** | The Company ID recorded in the Compliance system. | [optional]
**merchant_category_code** | **string** | The industry code that represents the merchant&#39;s primary trading activity. | [optional]
**short_name** | **string** | A URL friendly shortish name for the merchant. Principal purpose is  to use in the hosted payment page URL. | [optional]
**trading_name** | **string** | An optional trading name. If not set the Name field will be used . | [optional]
**payment_account_limit** | **int** | The maximum number of payment accounts that can be created for the Merchant.  To increase the limit contact support. | [optional]
**inserted** | **\DateTime** | Timestamp the merchant was added to MoneyMoov. | [optional]
**jurisdiction** | **string** | The jurisdiction the merchant entity is incorporated or established in. | [optional]
**hosted_pay_version** | **int** | The version of the hosted payment page to use with the merchant. | [optional]
**web_hook_limit** | **int** | The maximum number of web hooks that can be created for the Merchant.  To increase the limit contact support. | [optional]
**display_qr_on_hosted_pay** | **bool** | Indicates if a QR Code containing the payment link should be displayed  on the hosted payment page. | [optional]
**modulr_customer_id** | **string** | For internal use only. | [optional]
**supported_payment_methods_list** | **string[]** | The payment methods that are configured and supported for this merchant. | [optional]
**your_role** | **string** | The role of the identity that loaded the merchant record. | [optional]
**user_roles** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUserRole[]**](NoFrixionMoneyMoovModelsUserRole.md) | The list of users that have been assigned a role on the merchant. | [optional]
**tags** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag[]**](NoFrixionMoneyMoovModelsTag.md) | An optional list of descriptive tags that can be used on merchant entities  such as payment requests. | [optional]
**payment_accounts** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount[]**](NoFrixionMoneyMoovModelsPaymentAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
