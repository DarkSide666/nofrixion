# # NoFrixionMoneyMoovModelsSweepAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destinations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsSweepDestination[]**](NoFrixionMoneyMoovModelsSweepDestination.md) |  | [optional]
**amount_to_leave** | **float** | The amount to leave in the account once the sweep has been processed.  A value of zero means sweep all funds. | [optional]
**minimum_amount_to_run_at** | **float** | The minimum amount that must be available in order for the sweep to be run.  For example, setting to 1000 means the rule will not execute if the funds  available are less than 1000. | [optional]
**payout_your_reference** | **string** | The pattern to use for the Your Reference value when creating payouts based on the rule. | [optional]
**payout_their_reference** | **string** | The pattern to use for the Their Reference value when creating payouts based on the rule. | [optional]
**payout_description** | **string** | The pattern to use for the Description value when creating payouts based on the rule. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
