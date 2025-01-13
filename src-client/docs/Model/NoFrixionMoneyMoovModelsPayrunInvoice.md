# # NoFrixionMoneyMoovModelsPayrunInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**pay_run_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**invoice_reference** | **string** |  |
**payment_terms** | **string** |  | [optional]
**date** | **\DateTime** |  | [optional]
**due_date** | **\DateTime** |  | [optional]
**contact** | **string** |  | [optional]
**destination** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty**](NoFrixionMoneyMoovModelsCounterparty.md) |  | [optional]
**currency** | **string** |  |
**discounts** | **float** |  | [optional]
**taxes** | **float** |  | [optional]
**total_amount** | **float** |  |
**outstanding_amount** | **float** |  | [optional]
**sub_total** | **float** |  | [optional]
**status** | **string** |  | [optional]
**remittance_email** | **string** |  | [optional]
**xero_invoice_id** | **string** |  | [optional]
**invoice_payments** | [**\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsInvoicesInvoicePayment[]**](NoFrixionMoneyMoovModelsInvoicesInvoicePayment.md) |  | [optional]
**is_enabled** | **bool** |  | [optional]
**payment_reference** | **string** | Represents the reference used in the payout created for this invoice.  For a single destination (e.g., multiple invoices with the same IBAN),  the PaymentReference should remain consistent across all invoices.  If the PaymentReference is not set, one will be generated automatically. | [optional]
**external_invoice_id** | **string** | If this invoice was created from an external invoice, this will be the ID of the external invoice. | [optional]
**external_invoice_provider** | **string** | If this invoice was created from an external invoice, this will be the provider of the external invoice.  E.g., \&quot;Xero\&quot;, \&quot;QuickBooks\&quot;, etc. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
