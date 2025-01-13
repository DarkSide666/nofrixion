<?php
/**
 * NoFrixionMoneyMoovModelsPayrunInvoice
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NoFrixion MoneyMoov API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Nofrixion\Client\Model;

use \ArrayAccess;
use \Nofrixion\Client\ObjectSerializer;

/**
 * NoFrixionMoneyMoovModelsPayrunInvoice Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsPayrunInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.PayrunInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'pay_run_id' => 'string',
        'name' => 'string',
        'invoice_reference' => 'string',
        'payment_terms' => 'string',
        'date' => '\DateTime',
        'due_date' => '\DateTime',
        'contact' => 'string',
        'destination' => '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty',
        'currency' => 'string',
        'discounts' => 'float',
        'taxes' => 'float',
        'total_amount' => 'float',
        'outstanding_amount' => 'float',
        'sub_total' => 'float',
        'status' => 'string',
        'remittance_email' => 'string',
        'xero_invoice_id' => 'string',
        'invoice_payments' => '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsInvoicesInvoicePayment[]',
        'is_enabled' => 'bool',
        'payment_reference' => 'string',
        'external_invoice_id' => 'string',
        'external_invoice_provider' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'pay_run_id' => 'uuid',
        'name' => null,
        'invoice_reference' => null,
        'payment_terms' => null,
        'date' => 'date-time',
        'due_date' => 'date-time',
        'contact' => null,
        'destination' => null,
        'currency' => null,
        'discounts' => 'double',
        'taxes' => 'double',
        'total_amount' => 'double',
        'outstanding_amount' => 'double',
        'sub_total' => 'double',
        'status' => null,
        'remittance_email' => 'email',
        'xero_invoice_id' => 'uuid',
        'invoice_payments' => null,
        'is_enabled' => null,
        'payment_reference' => null,
        'external_invoice_id' => null,
        'external_invoice_provider' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'pay_run_id' => false,
        'name' => true,
        'invoice_reference' => false,
        'payment_terms' => true,
        'date' => false,
        'due_date' => false,
        'contact' => true,
        'destination' => false,
        'currency' => false,
        'discounts' => true,
        'taxes' => true,
        'total_amount' => false,
        'outstanding_amount' => false,
        'sub_total' => true,
        'status' => true,
        'remittance_email' => true,
        'xero_invoice_id' => true,
        'invoice_payments' => true,
        'is_enabled' => false,
        'payment_reference' => true,
        'external_invoice_id' => true,
        'external_invoice_provider' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'pay_run_id' => 'payRunID',
        'name' => 'name',
        'invoice_reference' => 'invoiceReference',
        'payment_terms' => 'paymentTerms',
        'date' => 'date',
        'due_date' => 'dueDate',
        'contact' => 'contact',
        'destination' => 'destination',
        'currency' => 'currency',
        'discounts' => 'discounts',
        'taxes' => 'taxes',
        'total_amount' => 'totalAmount',
        'outstanding_amount' => 'outstandingAmount',
        'sub_total' => 'subTotal',
        'status' => 'status',
        'remittance_email' => 'remittanceEmail',
        'xero_invoice_id' => 'xeroInvoiceID',
        'invoice_payments' => 'invoicePayments',
        'is_enabled' => 'isEnabled',
        'payment_reference' => 'paymentReference',
        'external_invoice_id' => 'externalInvoiceID',
        'external_invoice_provider' => 'externalInvoiceProvider'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'pay_run_id' => 'setPayRunId',
        'name' => 'setName',
        'invoice_reference' => 'setInvoiceReference',
        'payment_terms' => 'setPaymentTerms',
        'date' => 'setDate',
        'due_date' => 'setDueDate',
        'contact' => 'setContact',
        'destination' => 'setDestination',
        'currency' => 'setCurrency',
        'discounts' => 'setDiscounts',
        'taxes' => 'setTaxes',
        'total_amount' => 'setTotalAmount',
        'outstanding_amount' => 'setOutstandingAmount',
        'sub_total' => 'setSubTotal',
        'status' => 'setStatus',
        'remittance_email' => 'setRemittanceEmail',
        'xero_invoice_id' => 'setXeroInvoiceId',
        'invoice_payments' => 'setInvoicePayments',
        'is_enabled' => 'setIsEnabled',
        'payment_reference' => 'setPaymentReference',
        'external_invoice_id' => 'setExternalInvoiceId',
        'external_invoice_provider' => 'setExternalInvoiceProvider'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'pay_run_id' => 'getPayRunId',
        'name' => 'getName',
        'invoice_reference' => 'getInvoiceReference',
        'payment_terms' => 'getPaymentTerms',
        'date' => 'getDate',
        'due_date' => 'getDueDate',
        'contact' => 'getContact',
        'destination' => 'getDestination',
        'currency' => 'getCurrency',
        'discounts' => 'getDiscounts',
        'taxes' => 'getTaxes',
        'total_amount' => 'getTotalAmount',
        'outstanding_amount' => 'getOutstandingAmount',
        'sub_total' => 'getSubTotal',
        'status' => 'getStatus',
        'remittance_email' => 'getRemittanceEmail',
        'xero_invoice_id' => 'getXeroInvoiceId',
        'invoice_payments' => 'getInvoicePayments',
        'is_enabled' => 'getIsEnabled',
        'payment_reference' => 'getPaymentReference',
        'external_invoice_id' => 'getExternalInvoiceId',
        'external_invoice_provider' => 'getExternalInvoiceProvider'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const CURRENCY_NONE = 'NONE';
    public const CURRENCY_GBP = 'GBP';
    public const CURRENCY_EUR = 'EUR';
    public const CURRENCY_BTC = 'BTC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_NONE,
            self::CURRENCY_GBP,
            self::CURRENCY_EUR,
            self::CURRENCY_BTC,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('pay_run_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('invoice_reference', $data ?? [], null);
        $this->setIfExists('payment_terms', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('discounts', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('outstanding_amount', $data ?? [], null);
        $this->setIfExists('sub_total', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('remittance_email', $data ?? [], null);
        $this->setIfExists('xero_invoice_id', $data ?? [], null);
        $this->setIfExists('invoice_payments', $data ?? [], null);
        $this->setIfExists('is_enabled', $data ?? [], null);
        $this->setIfExists('payment_reference', $data ?? [], null);
        $this->setIfExists('external_invoice_id', $data ?? [], null);
        $this->setIfExists('external_invoice_provider', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoice_reference'] === null) {
            $invalidProperties[] = "'invoice_reference' can't be null";
        }
        if ((mb_strlen($this->container['invoice_reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'invoice_reference', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency', must be one of '%s'",
                $this->container['currency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if (!is_null($this->container['payment_reference']) && (mb_strlen($this->container['payment_reference']) > 18)) {
            $invalidProperties[] = "invalid value for 'payment_reference', the character length must be smaller than or equal to 18.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets pay_run_id
     *
     * @return string|null
     */
    public function getPayRunId()
    {
        return $this->container['pay_run_id'];
    }

    /**
     * Sets pay_run_id
     *
     * @param string|null $pay_run_id pay_run_id
     *
     * @return self
     */
    public function setPayRunId($pay_run_id)
    {
        if (is_null($pay_run_id)) {
            throw new \InvalidArgumentException('non-nullable pay_run_id cannot be null');
        }
        $this->container['pay_run_id'] = $pay_run_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets invoice_reference
     *
     * @return string
     */
    public function getInvoiceReference()
    {
        return $this->container['invoice_reference'];
    }

    /**
     * Sets invoice_reference
     *
     * @param string $invoice_reference invoice_reference
     *
     * @return self
     */
    public function setInvoiceReference($invoice_reference)
    {
        if (is_null($invoice_reference)) {
            throw new \InvalidArgumentException('non-nullable invoice_reference cannot be null');
        }

        if ((mb_strlen($invoice_reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $invoice_reference when calling NoFrixionMoneyMoovModelsPayrunInvoice., must be bigger than or equal to 1.');
        }

        $this->container['invoice_reference'] = $invoice_reference;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return string|null
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param string|null $payment_terms payment_terms
     *
     * @return self
     */
    public function setPaymentTerms($payment_terms)
    {
        if (is_null($payment_terms)) {
            array_push($this->openAPINullablesSetToNull, 'payment_terms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_terms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            array_push($this->openAPINullablesSetToNull, 'contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsCounterparty|null $destination destination
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency', must be one of '%s'",
                    $currency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return float|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param float|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        if (is_null($discounts)) {
            array_push($this->openAPINullablesSetToNull, 'discounts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discounts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return float|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param float|null $taxes taxes
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            array_push($this->openAPINullablesSetToNull, 'taxes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets outstanding_amount
     *
     * @return float|null
     */
    public function getOutstandingAmount()
    {
        return $this->container['outstanding_amount'];
    }

    /**
     * Sets outstanding_amount
     *
     * @param float|null $outstanding_amount outstanding_amount
     *
     * @return self
     */
    public function setOutstandingAmount($outstanding_amount)
    {
        if (is_null($outstanding_amount)) {
            throw new \InvalidArgumentException('non-nullable outstanding_amount cannot be null');
        }
        $this->container['outstanding_amount'] = $outstanding_amount;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return float|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param float|null $sub_total sub_total
     *
     * @return self
     */
    public function setSubTotal($sub_total)
    {
        if (is_null($sub_total)) {
            array_push($this->openAPINullablesSetToNull, 'sub_total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sub_total', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets remittance_email
     *
     * @return string|null
     */
    public function getRemittanceEmail()
    {
        return $this->container['remittance_email'];
    }

    /**
     * Sets remittance_email
     *
     * @param string|null $remittance_email remittance_email
     *
     * @return self
     */
    public function setRemittanceEmail($remittance_email)
    {
        if (is_null($remittance_email)) {
            array_push($this->openAPINullablesSetToNull, 'remittance_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remittance_email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remittance_email'] = $remittance_email;

        return $this;
    }

    /**
     * Gets xero_invoice_id
     *
     * @return string|null
     */
    public function getXeroInvoiceId()
    {
        return $this->container['xero_invoice_id'];
    }

    /**
     * Sets xero_invoice_id
     *
     * @param string|null $xero_invoice_id xero_invoice_id
     *
     * @return self
     */
    public function setXeroInvoiceId($xero_invoice_id)
    {
        if (is_null($xero_invoice_id)) {
            array_push($this->openAPINullablesSetToNull, 'xero_invoice_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('xero_invoice_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['xero_invoice_id'] = $xero_invoice_id;

        return $this;
    }

    /**
     * Gets invoice_payments
     *
     * @return \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsInvoicesInvoicePayment[]|null
     */
    public function getInvoicePayments()
    {
        return $this->container['invoice_payments'];
    }

    /**
     * Sets invoice_payments
     *
     * @param \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsInvoicesInvoicePayment[]|null $invoice_payments invoice_payments
     *
     * @return self
     */
    public function setInvoicePayments($invoice_payments)
    {
        if (is_null($invoice_payments)) {
            array_push($this->openAPINullablesSetToNull, 'invoice_payments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoice_payments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoice_payments'] = $invoice_payments;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool|null $is_enabled is_enabled
     *
     * @return self
     */
    public function setIsEnabled($is_enabled)
    {
        if (is_null($is_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_enabled cannot be null');
        }
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets payment_reference
     *
     * @return string|null
     */
    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     *
     * @param string|null $payment_reference Represents the reference used in the payout created for this invoice.  For a single destination (e.g., multiple invoices with the same IBAN),  the PaymentReference should remain consistent across all invoices.  If the PaymentReference is not set, one will be generated automatically.
     *
     * @return self
     */
    public function setPaymentReference($payment_reference)
    {
        if (is_null($payment_reference)) {
            array_push($this->openAPINullablesSetToNull, 'payment_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($payment_reference) && (mb_strlen($payment_reference) > 18)) {
            throw new \InvalidArgumentException('invalid length for $payment_reference when calling NoFrixionMoneyMoovModelsPayrunInvoice., must be smaller than or equal to 18.');
        }

        $this->container['payment_reference'] = $payment_reference;

        return $this;
    }

    /**
     * Gets external_invoice_id
     *
     * @return string|null
     */
    public function getExternalInvoiceId()
    {
        return $this->container['external_invoice_id'];
    }

    /**
     * Sets external_invoice_id
     *
     * @param string|null $external_invoice_id If this invoice was created from an external invoice, this will be the ID of the external invoice.
     *
     * @return self
     */
    public function setExternalInvoiceId($external_invoice_id)
    {
        if (is_null($external_invoice_id)) {
            array_push($this->openAPINullablesSetToNull, 'external_invoice_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_invoice_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['external_invoice_id'] = $external_invoice_id;

        return $this;
    }

    /**
     * Gets external_invoice_provider
     *
     * @return string|null
     */
    public function getExternalInvoiceProvider()
    {
        return $this->container['external_invoice_provider'];
    }

    /**
     * Sets external_invoice_provider
     *
     * @param string|null $external_invoice_provider If this invoice was created from an external invoice, this will be the provider of the external invoice.  E.g., \"Xero\", \"QuickBooks\", etc.
     *
     * @return self
     */
    public function setExternalInvoiceProvider($external_invoice_provider)
    {
        if (is_null($external_invoice_provider)) {
            array_push($this->openAPINullablesSetToNull, 'external_invoice_provider');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_invoice_provider', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['external_invoice_provider'] = $external_invoice_provider;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


