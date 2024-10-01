# # NoFrixionMoneyMoovModelsOpenBankingAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usage_type** | **string** |  | [optional]
**account_type** | **string** | The type of account e.g. (Credit Card, Savings). | [optional]
**id** | **string** | Unique identifier of the account. | [optional]
**type** | **string** | Specifies the type of account e.g. (BUSINESS_CURRENT). | [optional] [default to '']
**description** | **string** | Product name as defined by the financial institution for this account. | [optional] [default to '']
**balance** | **float** | Main or headline balance for the account. Use of this field is recommended as fallback only. Instead, use of the typed balances (accountBalances) is recommended. | [optional]
**currency** | **string** | Currency the bank account balance is denoted in. Specified as a 3-letter ISO 4217 currency code. | [optional] [default to '']
**nickname** | **string** | Nickname of the account that was provided by the account owner. May be used to aid identification of the account. | [optional] [default to '']
**details** | **string** | Supplementary specifications that might be provided by the Bank. These provide further characteristics about the account. | [optional] [default to '']
**account_names** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAccountName[]**](NoFrixionMoneyMoovModelsOpenBankingAccountName.md) | Optional account names set by the account holder. | [optional]
**account_identifications** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAccountIdentification[]**](NoFrixionMoneyMoovModelsOpenBankingAccountIdentification.md) | The canoncial identifiers for the account. | [optional]
**account_balances** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingAccountBalance[]**](NoFrixionMoneyMoovModelsOpenBankingAccountBalance.md) | The various balances for the account. | [optional]
**consolidated_account_information** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsOpenBankingConsolidatedAccountInformation**](NoFrixionMoneyMoovModelsOpenBankingConsolidatedAccountInformation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
