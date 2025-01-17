# # NoFrixionMoneyMoovModelsPayout

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID for the payout. | [optional]
**payrun_id** | **string** | The ID of the payrun that this payout is associated with. | [optional]
**account_id** | **string** | Gets or Sets Account Id of sending account | [optional]
**merchant_id** | **string** | The ID of the merchant that owns the account. | [optional]
**user_id** | **string** | Gets or Sets User ID of who created the payout request | [optional]
**approver_id** | **string** | Gets the User ID of person that approved the payout. | [optional]
**topup_payrun_id** | **string** | The ID of a payrun that needs an account top up.   Payouts can be used to top up payrun accounts. | [optional]
**type** | **string** | Gets or Sets payout type | [optional]
**description** | **string** | Gets or Sets description of payout request | [optional]
**currency** | **string** | Gets or Sets Currency of payout request | [optional]
**amount** | **float** | Gets or Sets payout amount | [optional]
**formatted_amount** | **string** | Currency and formatted amount string. | [optional] [readonly]
**your_reference** | **string** | Gets or Sets your reference ID | [optional]
**their_reference** | **string** | Gets or Sets destination reference ID | [optional]
**can_process** | **bool** | If set to true indicates the payout has been flagged as safe to process after transaction monitoring. | [optional]
**batch_payout_id** | **string** | The ID of the batch the payout is associated with. | [optional]
**merchant_token_description** | **string** |  | [optional]
**status** | **string** | Gets or Sets the status of payout request | [optional]
**current_user_id** | **string** | The ID of the user that requested access to the PayOut record. Note  this is NOT necessarily the user that created it. | [optional]
**current_user_role** | **string** | The role of the user that requested access to the PayOut record. Note  this is NOT necessarily the user that created it. For example one user  may create the payout and then a different user will load the record to  approve it. | [optional]
**approve_payout_url** | **string** | This field is used when returning an payout record to a client. If set it holds the URL  the user needs to visit in order to complete a strong authentication check in order to approve   the payout. | [optional]
**created_by** | **string** |  | [optional]
**created_by_email_address** | **string** |  | [optional]
**inserted** | **\DateTime** |  | [optional]
**source_account_name** | **string** | The name of the account the payout is being made from. | [optional]
**source_account_iban** | **string** | The IBAN of the account the payout is being made from. | [optional]
**source_account_number** | **string** | The account number of the account the payout is being made from. | [optional]
**source_account_sortcode** | **string** | The sort code of the account the payout is being made from. | [optional]
**source_bitcoin_address** | **string** | The current Bitcoin address of the account the payout is being made from. | [optional]
**source_account_identifier** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsAccountIdentifier**](NoFrixionMoneyMoovModelsAccountIdentifier.md) |  | [optional]
**source_account_available_balance** | **float** | The available balance of the account the payout is being made from. | [optional]
**formatted_source_account_available_balance** | **string** | The available balance of the account the payout is being made from. | [optional] [readonly]
**destination** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty**](NoFrixionMoneyMoovModelsCounterparty.md) |  | [optional]
**invoice_id** | **string** | Optional field to associate the payout with the invoice from an external   application such as Xero. The InvoiceID needs to be unique for each  account. | [optional]
**tags** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTag[]**](NoFrixionMoneyMoovModelsTag.md) | An optional list of descriptive tags attached to the payout. | [optional]
**scheduled** | **bool** | Should this payout be scheduled for a future date? | [optional]
**schedule_date** | **\DateTime** | The date the payout should be submitted. | [optional]
**formatted_schedule_day_only** | **string** |  | [optional] [readonly]
**formatted_schedule** | **string** |  | [optional] [readonly]
**bitcoin_subtract_fee_from_amount** | **bool** | For Bitcoin payouts, when this flag is set the network fee will be deducted from the send amount.  THis is particularly useful for sweeps where it can be difficult to calculate the exact fee required. | [optional]
**bitcoin_fee_sats_per_vbyte** | **int** | The Bitcoin fee rate to apply in Satoshis per virtual byte. | [optional]
**formatted_bitcoin_fee** | **string** |  | [optional] [readonly]
**authorisers_required_count** | **int** | The number of authorisers required for this payout. Is determined by business settings  on the source account and/or merchant. | [optional]
**authorisers_completed_count** | **int** | The number of distinct authorisers that have authorised the payout. | [optional]
**can_authorise** | **bool** | True if the payout can be authorised by the user who loaded it. | [optional]
**can_update** | **bool** | True if the payout can be updated by the user who loaded it. | [optional]
**has_current_user_authorised** | **bool** | True if the payout was loaded for a user and that user has already authorised the latest version of the payout. | [optional]
**authorisations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsApproveAuthorisation[]**](NoFrixionMoneyMoovModelsApproveAuthorisation.md) | A list of the users who have successfully authorised the latest version of the payout and when. | [optional]
**authentication_methods** | **string[]** | A list of authentication types allowed to authorise the payout. | [optional]
**payrun_name** | **string** | The name of the payrun that this payout is associated with. | [optional]
**beneficiary** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsBeneficiary**](NoFrixionMoneyMoovModelsBeneficiary.md) |  | [optional]
**payment_processor** | **string** | The usptream payment processor for the payout. | [optional]
**events** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutEvent[]**](NoFrixionMoneyMoovModelsPayoutEvent.md) | The activity associated with the payout. | [optional]
**rule** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsRuleMinimal**](NoFrixionMoneyMoovModelsRuleMinimal.md) |  | [optional]
**payment_rail** | **string** | Optional field to indicate the payment rail to use for the payout. Currrently only  supports choosing between SEPA-CT and SEPA-INST for EUR payments. If not set, for a EUR  payment, the default behaviour is to attempt SEPA-INST and fallback to SEPA-CT if rejected. | [optional]
**nonce** | **string** |  | [optional]
**documents** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPayoutDocument[]**](NoFrixionMoneyMoovModelsPayoutDocument.md) | Documents associated with the payout. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
