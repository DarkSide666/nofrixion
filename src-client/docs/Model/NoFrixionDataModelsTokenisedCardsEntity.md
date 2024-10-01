# # NoFrixionDataModelsTokenisedCardsEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**payment_request_id** | **string** |  | [optional]
**card_token_customer_id** | **string** |  | [optional]
**customer_email_address** | **string** |  | [optional]
**transaction_id** | **string** |  | [optional]
**card_type** | **string** |  | [optional]
**processor_name** | **string** | Lists the supported card and PIS processors. | [optional]
**instrument_identifier_id** | **string** |  | [optional]
**instrument_identifier_new** | **bool** |  | [optional]
**instrument_identifier_status** | **string** |  | [optional]
**instrument_identifier_successor_id** | **string** |  | [optional]
**first_six_digits** | **string** |  | [optional]
**last_four_digits** | **string** |  | [optional]
**masked_number** | **string** |  | [optional]
**expiration_date** | **\DateTime** |  | [optional]
**merchant_id** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**merchant** | [**\Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity**](NoFrixionDataModelsMerchantEntity.md) |  | [optional]
**payment_request** | [**\Nofrixion\Client\Model\NoFrixionDataModelsPaymentRequestEntity**](NoFrixionDataModelsPaymentRequestEntity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
