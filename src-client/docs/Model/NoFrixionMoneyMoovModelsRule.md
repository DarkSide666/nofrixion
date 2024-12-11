# # NoFrixionMoneyMoovModelsRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**merchant_id** | **string** | The ID of the merchant that owns the account. | [optional]
**user_id** | **string** |  | [optional]
**approver_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**is_disabled** | **bool** |  | [optional]
**status** | **string** |  | [optional]
**trigger_on_pay_in** | **bool** |  | [optional]
**trigger_cron_expression** | **string** |  | [optional]
**time_zone_id** | **string** |  | [optional]
**start_at** | **\DateTime** |  | [optional]
**end_at** | **\DateTime** |  | [optional]
**sweep_action** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsSweepAction**](NoFrixionMoneyMoovModelsSweepAction.md) |  | [optional]
**approve_url** | **string** | If set this property holds the URL an approver needs to visit in order to  complete a strong authentication check in order to approve the rule. | [optional]
**on_approved_web_hook_url** | **string** | Optional URL to receive an HTTP request with the rule details when the rule status changes to   approved. The webhook payload will contain the full Rule object. | [optional]
**on_execution_error_web_hook_url** | **string** | Optional URL to receive an HTTP request when a rule execution attempt fails. The webhook   payload will contain a Problem object. | [optional]
**on_execution_success_web_hook_url** | **string** | Optional URL to receive an HTTP request when a rule execution attempt succeeds. The webhook   payload will contain a list of any payouts that were submitted for the rule execution. | [optional]
**web_hook_secret** | **string** | If set this secret will be used to sign Web Hook requests. | [optional]
**inserted** | **\DateTime** |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**last_executed_at** | **\DateTime** |  | [optional]
**last_run_at_transaction_date** | **\DateTime** | The most recent transaction date when the rule was last run. | [optional]
**created_by** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsUser**](NoFrixionMoneyMoovModelsUser.md) |  | [optional]
**authorisations** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsApproveAuthorisation[]**](NoFrixionMoneyMoovModelsApproveAuthorisation.md) | A list of the users who have successfully authorised the latest version of the rule and when. | [optional]
**account** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsPaymentAccount**](NoFrixionMoneyMoovModelsPaymentAccount.md) |  | [optional]
**authorisers_required_count** | **int** | The number of authorisers required for this rule. | [optional]
**authorisers_completed_count** | **int** | The number of distinct authorisers that have authorised the rule. | [optional]
**can_authorise** | **bool** | True if the rule can be authorised by the user who loaded it. | [optional]
**has_current_user_authorised** | **bool** | True if the current user has authorised. | [optional]
**nonce** | **string** |  |
**authentication_methods** | **string[]** | A list of authentication types allowed to authorise the payout. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
