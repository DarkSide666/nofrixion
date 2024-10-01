# # NoFrixionMoneyMoovModelsRuleUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Account ID the rule is associated with. | [optional]
**name** | **string** | A name to succinctly describe the rule. | [optional]
**description** | **string** | Arbitrary description for the rule. | [optional]
**on_approved_web_hook_url** | **string** | Optional URL to receive an HTTP request with the rule details when the rule status changes to   approved. The webhook payload will contain the full Rule object. | [optional]
**on_execution_error_web_hook_url** | **string** | Optional URL to receive an HTTP request when a rule execution attempt fails. The webhook   payload will contain a NoFrixionPorblem object. | [optional]
**on_execution_success_web_hook_url** | **string** | Optional URL to receive an HTTP request when a rule execution attempt succeeds. The webhook   payload will contain a ?. | [optional]
**is_disabled** | **bool** | If set to false the rule will be disabled from executing. | [optional]
**trigger_on_pay_in** | **bool** | Set to true if the rule execution should be triggered when the account   receives a pay in (credit). | [optional]
**trigger_cron_expression** | **string** | If the rule should be executed on a recurring schedule this is the expression  that sets the schedule. The expression uses a CRON format. | [optional]
**time_zone_id** | **string** | If the rule should be executed on a recurring schedule this is the timezone | [optional]
**start_at** | **\DateTime** | Optional start time for rule executions. If this value is set the rule will not  be triggered until the start time has been reached. | [optional]
**end_at** | **\DateTime** | Optional end time for rule executions. If this value is set the rule will not  be triggered after the end time has been reached. | [optional]
**sweep_action** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsSweepAction**](NoFrixionMoneyMoovModelsSweepAction.md) |  | [optional]
**web_hook_secret** | **string** | If set this secret will be used to sign Web Hook requests. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
