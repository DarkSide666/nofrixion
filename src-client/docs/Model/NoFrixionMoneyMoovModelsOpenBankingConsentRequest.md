# # NoFrixionMoneyMoovModelsOpenBankingConsentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | The email address that identifies the end user that will be authorising the   open banking consent request. | [optional]
**institution_id** | **string** | The institution ID the open banking consent is being requested for. |
**merchant_id** | **string** | The ID of the merchant the consent token is being created to be used with. |
**callback_url** | **string** | Optional callback URL that the end user performing the open banking authorisation  will be redirected to on completion. Typically this should be a URL that takes the   user back to the application that they originally started the open banking authorisation  from. | [optional]
**success_web_hook_url** | **string** | Optional URL that will be called by the MoneyMoov server upon a successful open banking  authorisation. The webhook URL will pass a single parameter of \&quot;id\&quot;. That ID can  then be used in the MoneyMoov open banking actions to verify the operation. Note  web hooks can easily be spoofed and should NOT be trusted without calling back to the   MoneyMoov server for verification. | [optional]
**failure_callback_url** | **string** | Optional URL for open banking consent authorisation failure.   If the URL is set, the calling application will be redirected here with the error  message as query parameter. If it’s not set it will fall back on default page that  will show the error message. | [optional]
**is_connected_accounts** | **bool** | Optional setting. If connected accounts is enabled. After a successful consent authorisation,  NoFrixion will pull all authorised EUR and GBP account information and store them along NoFrixion payment accounts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
