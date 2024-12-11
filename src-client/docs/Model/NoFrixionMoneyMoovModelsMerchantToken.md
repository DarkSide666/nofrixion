# # NoFrixionMoneyMoovModelsMerchantToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**merchant_id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**permissions** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**token** | **string** | The JWT merchant token. It will only be available when the merchant token is  initially created. The token is not stored by NoFrixion. | [optional]
**is_enabled** | **bool** | If set to false the merchant token will not be accepted to authorise a request. | [optional]
**shared_secret_algorithm** | **string** | Optional shared secret algorithm to use for HMAC authentication. | [optional]
**shared_secret_base64** | **string** | The base 64 encoded shared secret that is used for request authentication with an HMAC.  Note this property will ONLY be set when the token is initially created. It is not possible  to retrieve the secret afterwards. If it is lost a new token should be created. | [optional]
**request_signature_version** | **int** | Represent the version of the overall merchant token. This field is to allow the secret and public key mechanisms to  vary over time. For example if the HTTP header fields to include in the algorithms change this version will faciliatate  keeping track of which signature versions a particular merchant token is using. | [optional]
**expires_at** | **\DateTime** | Optional. If set indicates the merchant token is not valid after the specified expiry date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
