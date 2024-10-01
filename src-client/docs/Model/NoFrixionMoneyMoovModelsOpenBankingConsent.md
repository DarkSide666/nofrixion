# # NoFrixionMoneyMoovModelsOpenBankingConsent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**institution_id** | **string** |  | [optional]
**email_address** | **string** |  | [optional]
**is_enabled** | **bool** |  | [optional]
**callback_url** | **string** |  | [optional]
**success_web_hook_url** | **string** | A web hook URL to send an HTTP request to when the open banking consent  is successfuly authorised. This web hook lets the calling application   know when a consent is ready to be used. | [optional]
**failure_callback_url** | **string** | Optional callback URL for open banking consent authorisation failure.   If the URL is set, the calling application will be redirected here with the error message.  If it’s not set it will fall back on default page that will show the error message. | [optional]
**provider** | **string** | Lists the supported card and PIS processors. | [optional]
**expiry_date** | **\DateTime** |  | [optional]
**inserted** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
