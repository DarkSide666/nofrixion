# # NoFrixionMoneyMoovModelsOpenBankingTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | [optional]
**id** | **string** |  | [optional] [default to '']
**date** | **\DateTime** |  | [optional]
**booking_date_time** | **\DateTime** |  | [optional]
**value_date_time** | **\DateTime** |  | [optional]
**amount** | **float** |  | [optional]
**currency** | **string** |  | [optional] [default to '']
**transaction_amount** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAmount**](NoFrixionMoneyMoovModelsOpenBankingAmount.md) |  | [optional]
**gross_amount** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAmount**](NoFrixionMoneyMoovModelsOpenBankingAmount.md) |  | [optional]
**currency_exchange** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingCurrencyExchange**](NoFrixionMoneyMoovModelsOpenBankingCurrencyExchange.md) |  | [optional]
**charge_details** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingTransactionChargeDetails**](NoFrixionMoneyMoovModelsOpenBankingTransactionChargeDetails.md) |  | [optional]
**reference** | **string** |  | [optional] [default to '']
**statement_references** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingStatementReference[]**](NoFrixionMoneyMoovModelsOpenBankingStatementReference.md) |  | [optional]
**description** | **string** |  | [optional] [default to '']
**transaction_information** | **string[]** |  | [optional]
**address_details** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAddressDetails**](NoFrixionMoneyMoovModelsOpenBankingAddressDetails.md) |  | [optional]
**iso_bank_transaction_code** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingIsoBankTransactionCode**](NoFrixionMoneyMoovModelsOpenBankingIsoBankTransactionCode.md) |  | [optional]
**proprietary_bank_transaction_code** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingProprietaryBankTransactionCode**](NoFrixionMoneyMoovModelsOpenBankingProprietaryBankTransactionCode.md) |  | [optional]
**balance** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingTransactionBalance**](NoFrixionMoneyMoovModelsOpenBankingTransactionBalance.md) |  | [optional]
**payee_details** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingPayee**](NoFrixionMoneyMoovModelsOpenBankingPayee.md) |  | [optional]
**payer_details** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingPayer**](NoFrixionMoneyMoovModelsOpenBankingPayer.md) |  | [optional]
**merchant** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingMerchant**](NoFrixionMoneyMoovModelsOpenBankingMerchant.md) |  | [optional]
**enrichment** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingEnrichment**](NoFrixionMoneyMoovModelsOpenBankingEnrichment.md) |  | [optional]
**supplementary_data** | **mixed** |  | [optional]
**transaction_mutability** | **string** |  | [optional] [default to '']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
