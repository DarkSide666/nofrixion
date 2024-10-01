<?php
/**
 * NoFrixionDataModelsRuleDestinationEntity
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
 * Generator version: 7.8.0
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
 * NoFrixionDataModelsRuleDestinationEntity Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionDataModelsRuleDestinationEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.DataModels.RuleDestinationEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'rule_id' => 'string',
        'priority' => 'int',
        'percentage' => 'float',
        'amount' => 'float',
        'destination_account_id' => 'string',
        'destination_beneficiary_id' => 'string',
        'destination_account_name' => 'string',
        'destination_iban' => 'string',
        'destination_sort_code' => 'string',
        'destination_account_number' => 'string',
        'destination_bitcoin_address' => 'string',
        'is_disabled' => 'bool',
        'inserted' => '\DateTime',
        'last_updated' => '\DateTime',
        'destination_account' => '\Nofrixion\Client\Model\NoFrixionDataModelsAccountEntity',
        'destination_beneficiary' => '\Nofrixion\Client\Model\NoFrixionDataModelsBeneficiaryEntity',
        'rule' => '\Nofrixion\Client\Model\NoFrixionDataModelsRuleEntity',
        'is_deleted' => 'bool'
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
        'rule_id' => 'uuid',
        'priority' => 'int32',
        'percentage' => 'double',
        'amount' => 'double',
        'destination_account_id' => 'uuid',
        'destination_beneficiary_id' => 'uuid',
        'destination_account_name' => null,
        'destination_iban' => null,
        'destination_sort_code' => null,
        'destination_account_number' => null,
        'destination_bitcoin_address' => null,
        'is_disabled' => null,
        'inserted' => 'date-time',
        'last_updated' => 'date-time',
        'destination_account' => null,
        'destination_beneficiary' => null,
        'rule' => null,
        'is_deleted' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'rule_id' => false,
        'priority' => false,
        'percentage' => true,
        'amount' => true,
        'destination_account_id' => true,
        'destination_beneficiary_id' => true,
        'destination_account_name' => true,
        'destination_iban' => true,
        'destination_sort_code' => true,
        'destination_account_number' => true,
        'destination_bitcoin_address' => true,
        'is_disabled' => false,
        'inserted' => false,
        'last_updated' => true,
        'destination_account' => false,
        'destination_beneficiary' => false,
        'rule' => false,
        'is_deleted' => false
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
        'rule_id' => 'ruleID',
        'priority' => 'priority',
        'percentage' => 'percentage',
        'amount' => 'amount',
        'destination_account_id' => 'destinationAccountID',
        'destination_beneficiary_id' => 'destinationBeneficiaryID',
        'destination_account_name' => 'destinationAccountName',
        'destination_iban' => 'destinationIBAN',
        'destination_sort_code' => 'destinationSortCode',
        'destination_account_number' => 'destinationAccountNumber',
        'destination_bitcoin_address' => 'destinationBitcoinAddress',
        'is_disabled' => 'isDisabled',
        'inserted' => 'inserted',
        'last_updated' => 'lastUpdated',
        'destination_account' => 'destinationAccount',
        'destination_beneficiary' => 'destinationBeneficiary',
        'rule' => 'rule',
        'is_deleted' => 'isDeleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rule_id' => 'setRuleId',
        'priority' => 'setPriority',
        'percentage' => 'setPercentage',
        'amount' => 'setAmount',
        'destination_account_id' => 'setDestinationAccountId',
        'destination_beneficiary_id' => 'setDestinationBeneficiaryId',
        'destination_account_name' => 'setDestinationAccountName',
        'destination_iban' => 'setDestinationIban',
        'destination_sort_code' => 'setDestinationSortCode',
        'destination_account_number' => 'setDestinationAccountNumber',
        'destination_bitcoin_address' => 'setDestinationBitcoinAddress',
        'is_disabled' => 'setIsDisabled',
        'inserted' => 'setInserted',
        'last_updated' => 'setLastUpdated',
        'destination_account' => 'setDestinationAccount',
        'destination_beneficiary' => 'setDestinationBeneficiary',
        'rule' => 'setRule',
        'is_deleted' => 'setIsDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rule_id' => 'getRuleId',
        'priority' => 'getPriority',
        'percentage' => 'getPercentage',
        'amount' => 'getAmount',
        'destination_account_id' => 'getDestinationAccountId',
        'destination_beneficiary_id' => 'getDestinationBeneficiaryId',
        'destination_account_name' => 'getDestinationAccountName',
        'destination_iban' => 'getDestinationIban',
        'destination_sort_code' => 'getDestinationSortCode',
        'destination_account_number' => 'getDestinationAccountNumber',
        'destination_bitcoin_address' => 'getDestinationBitcoinAddress',
        'is_disabled' => 'getIsDisabled',
        'inserted' => 'getInserted',
        'last_updated' => 'getLastUpdated',
        'destination_account' => 'getDestinationAccount',
        'destination_beneficiary' => 'getDestinationBeneficiary',
        'rule' => 'getRule',
        'is_deleted' => 'getIsDeleted'
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
        $this->setIfExists('rule_id', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('percentage', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('destination_account_id', $data ?? [], null);
        $this->setIfExists('destination_beneficiary_id', $data ?? [], null);
        $this->setIfExists('destination_account_name', $data ?? [], null);
        $this->setIfExists('destination_iban', $data ?? [], null);
        $this->setIfExists('destination_sort_code', $data ?? [], null);
        $this->setIfExists('destination_account_number', $data ?? [], null);
        $this->setIfExists('destination_bitcoin_address', $data ?? [], null);
        $this->setIfExists('is_disabled', $data ?? [], null);
        $this->setIfExists('inserted', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('destination_account', $data ?? [], null);
        $this->setIfExists('destination_beneficiary', $data ?? [], null);
        $this->setIfExists('rule', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
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
     * Gets rule_id
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string|null $rule_id rule_id
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        if (is_null($rule_id)) {
            throw new \InvalidArgumentException('non-nullable rule_id cannot be null');
        }
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float|null $percentage percentage
     *
     * @return self
     */
    public function setPercentage($percentage)
    {
        if (is_null($percentage)) {
            array_push($this->openAPINullablesSetToNull, 'percentage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('percentage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            array_push($this->openAPINullablesSetToNull, 'amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets destination_account_id
     *
     * @return string|null
     */
    public function getDestinationAccountId()
    {
        return $this->container['destination_account_id'];
    }

    /**
     * Sets destination_account_id
     *
     * @param string|null $destination_account_id destination_account_id
     *
     * @return self
     */
    public function setDestinationAccountId($destination_account_id)
    {
        if (is_null($destination_account_id)) {
            array_push($this->openAPINullablesSetToNull, 'destination_account_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_account_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_account_id'] = $destination_account_id;

        return $this;
    }

    /**
     * Gets destination_beneficiary_id
     *
     * @return string|null
     */
    public function getDestinationBeneficiaryId()
    {
        return $this->container['destination_beneficiary_id'];
    }

    /**
     * Sets destination_beneficiary_id
     *
     * @param string|null $destination_beneficiary_id destination_beneficiary_id
     *
     * @return self
     */
    public function setDestinationBeneficiaryId($destination_beneficiary_id)
    {
        if (is_null($destination_beneficiary_id)) {
            array_push($this->openAPINullablesSetToNull, 'destination_beneficiary_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_beneficiary_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_beneficiary_id'] = $destination_beneficiary_id;

        return $this;
    }

    /**
     * Gets destination_account_name
     *
     * @return string|null
     */
    public function getDestinationAccountName()
    {
        return $this->container['destination_account_name'];
    }

    /**
     * Sets destination_account_name
     *
     * @param string|null $destination_account_name destination_account_name
     *
     * @return self
     */
    public function setDestinationAccountName($destination_account_name)
    {
        if (is_null($destination_account_name)) {
            array_push($this->openAPINullablesSetToNull, 'destination_account_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_account_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_account_name'] = $destination_account_name;

        return $this;
    }

    /**
     * Gets destination_iban
     *
     * @return string|null
     */
    public function getDestinationIban()
    {
        return $this->container['destination_iban'];
    }

    /**
     * Sets destination_iban
     *
     * @param string|null $destination_iban destination_iban
     *
     * @return self
     */
    public function setDestinationIban($destination_iban)
    {
        if (is_null($destination_iban)) {
            array_push($this->openAPINullablesSetToNull, 'destination_iban');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_iban', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_iban'] = $destination_iban;

        return $this;
    }

    /**
     * Gets destination_sort_code
     *
     * @return string|null
     */
    public function getDestinationSortCode()
    {
        return $this->container['destination_sort_code'];
    }

    /**
     * Sets destination_sort_code
     *
     * @param string|null $destination_sort_code destination_sort_code
     *
     * @return self
     */
    public function setDestinationSortCode($destination_sort_code)
    {
        if (is_null($destination_sort_code)) {
            array_push($this->openAPINullablesSetToNull, 'destination_sort_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_sort_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_sort_code'] = $destination_sort_code;

        return $this;
    }

    /**
     * Gets destination_account_number
     *
     * @return string|null
     */
    public function getDestinationAccountNumber()
    {
        return $this->container['destination_account_number'];
    }

    /**
     * Sets destination_account_number
     *
     * @param string|null $destination_account_number destination_account_number
     *
     * @return self
     */
    public function setDestinationAccountNumber($destination_account_number)
    {
        if (is_null($destination_account_number)) {
            array_push($this->openAPINullablesSetToNull, 'destination_account_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_account_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_account_number'] = $destination_account_number;

        return $this;
    }

    /**
     * Gets destination_bitcoin_address
     *
     * @return string|null
     */
    public function getDestinationBitcoinAddress()
    {
        return $this->container['destination_bitcoin_address'];
    }

    /**
     * Sets destination_bitcoin_address
     *
     * @param string|null $destination_bitcoin_address destination_bitcoin_address
     *
     * @return self
     */
    public function setDestinationBitcoinAddress($destination_bitcoin_address)
    {
        if (is_null($destination_bitcoin_address)) {
            array_push($this->openAPINullablesSetToNull, 'destination_bitcoin_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_bitcoin_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_bitcoin_address'] = $destination_bitcoin_address;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool|null $is_disabled is_disabled
     *
     * @return self
     */
    public function setIsDisabled($is_disabled)
    {
        if (is_null($is_disabled)) {
            throw new \InvalidArgumentException('non-nullable is_disabled cannot be null');
        }
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets inserted
     *
     * @return \DateTime|null
     */
    public function getInserted()
    {
        return $this->container['inserted'];
    }

    /**
     * Sets inserted
     *
     * @param \DateTime|null $inserted inserted
     *
     * @return self
     */
    public function setInserted($inserted)
    {
        if (is_null($inserted)) {
            throw new \InvalidArgumentException('non-nullable inserted cannot be null');
        }
        $this->container['inserted'] = $inserted;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return \DateTime|null
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param \DateTime|null $last_updated last_updated
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        if (is_null($last_updated)) {
            array_push($this->openAPINullablesSetToNull, 'last_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_updated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets destination_account
     *
     * @return \Nofrixion\Client\Model\NoFrixionDataModelsAccountEntity|null
     */
    public function getDestinationAccount()
    {
        return $this->container['destination_account'];
    }

    /**
     * Sets destination_account
     *
     * @param \Nofrixion\Client\Model\NoFrixionDataModelsAccountEntity|null $destination_account destination_account
     *
     * @return self
     */
    public function setDestinationAccount($destination_account)
    {
        if (is_null($destination_account)) {
            throw new \InvalidArgumentException('non-nullable destination_account cannot be null');
        }
        $this->container['destination_account'] = $destination_account;

        return $this;
    }

    /**
     * Gets destination_beneficiary
     *
     * @return \Nofrixion\Client\Model\NoFrixionDataModelsBeneficiaryEntity|null
     */
    public function getDestinationBeneficiary()
    {
        return $this->container['destination_beneficiary'];
    }

    /**
     * Sets destination_beneficiary
     *
     * @param \Nofrixion\Client\Model\NoFrixionDataModelsBeneficiaryEntity|null $destination_beneficiary destination_beneficiary
     *
     * @return self
     */
    public function setDestinationBeneficiary($destination_beneficiary)
    {
        if (is_null($destination_beneficiary)) {
            throw new \InvalidArgumentException('non-nullable destination_beneficiary cannot be null');
        }
        $this->container['destination_beneficiary'] = $destination_beneficiary;

        return $this;
    }

    /**
     * Gets rule
     *
     * @return \Nofrixion\Client\Model\NoFrixionDataModelsRuleEntity|null
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     *
     * @param \Nofrixion\Client\Model\NoFrixionDataModelsRuleEntity|null $rule rule
     *
     * @return self
     */
    public function setRule($rule)
    {
        if (is_null($rule)) {
            throw new \InvalidArgumentException('non-nullable rule cannot be null');
        }
        $this->container['rule'] = $rule;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted is_deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

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


