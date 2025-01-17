<?php
/**
 * NoFrixionMoneyMoovModelsTokenAdd
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
 * NoFrixionMoneyMoovModelsTokenAdd Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsTokenAdd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.TokenAdd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_id' => 'string',
        'description' => 'string',
        'hmac_algorithm' => 'string',
        'permissions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_id' => 'uuid',
        'description' => null,
        'hmac_algorithm' => null,
        'permissions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchant_id' => false,
        'description' => false,
        'hmac_algorithm' => false,
        'permissions' => false
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
        'merchant_id' => 'merchantID',
        'description' => 'description',
        'hmac_algorithm' => 'hmacAlgorithm',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'description' => 'setDescription',
        'hmac_algorithm' => 'setHmacAlgorithm',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'description' => 'getDescription',
        'hmac_algorithm' => 'getHmacAlgorithm',
        'permissions' => 'getPermissions'
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

    public const HMAC_ALGORITHM_NONE = 'None';
    public const HMAC_ALGORITHM_HMAC_SHA1 = 'HMAC_SHA1';
    public const HMAC_ALGORITHM_HMAC_SHA256 = 'HMAC_SHA256';
    public const HMAC_ALGORITHM_HMAC_SHA384 = 'HMAC_SHA384';
    public const HMAC_ALGORITHM_HMAC_SHA512 = 'HMAC_SHA512';
    public const PERMISSIONS_DENY = 'Deny';
    public const PERMISSIONS_CREATE_PAYMENT_REQUEST = 'CreatePaymentRequest';
    public const PERMISSIONS_EDIT_PAYMENT_REQUEST = 'EditPaymentRequest';
    public const PERMISSIONS_DELETE_PAYMENT_REQUEST = 'DeletePaymentRequest';
    public const PERMISSIONS_CREATE_RULE = 'CreateRule';
    public const PERMISSIONS_EDIT_RULE = 'EditRule';
    public const PERMISSIONS_DELETE_RULE = 'DeleteRule';
    public const PERMISSIONS_CREATE_PAYOUT = 'CreatePayout';
    public const PERMISSIONS_EDIT_PAYOUT = 'EditPayout';
    public const PERMISSIONS_DELETE_PAYOUT = 'DeletePayout';
    public const PERMISSIONS_CREATE_REPORT = 'CreateReport';
    public const PERMISSIONS_EDIT_REPORT = 'EditReport';
    public const PERMISSIONS_DELETE_REPORT = 'DeleteReport';
    public const PERMISSIONS_EXECUTE_REPORT = 'ExecuteReport';
    public const PERMISSIONS_CREATE_PAYMENT_ACCOUNT = 'CreatePaymentAccount';
    public const PERMISSIONS_EDIT_PAYMENT_ACCOUNT = 'EditPaymentAccount';
    public const PERMISSIONS_TRUSTED_SUBMIT_PAYOUT = 'TrustedSubmitPayout';
    public const PERMISSIONS_OPEN_BANKING_ACCOUNT_INFORMATION = 'OpenBankingAccountInformation';
    public const PERMISSIONS_CREATE_DIRECT_DEBIT_MANDATE = 'CreateDirectDebitMandate';
    public const PERMISSIONS_SUBMIT_DIRECT_DEBIT_PAYMENT = 'SubmitDirectDebitPayment';
    public const PERMISSIONS_VIEW_TRANSACTIONS = 'ViewTransactions';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHmacAlgorithmAllowableValues()
    {
        return [
            self::HMAC_ALGORITHM_NONE,
            self::HMAC_ALGORITHM_HMAC_SHA1,
            self::HMAC_ALGORITHM_HMAC_SHA256,
            self::HMAC_ALGORITHM_HMAC_SHA384,
            self::HMAC_ALGORITHM_HMAC_SHA512,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionsAllowableValues()
    {
        return [
            self::PERMISSIONS_DENY,
            self::PERMISSIONS_CREATE_PAYMENT_REQUEST,
            self::PERMISSIONS_EDIT_PAYMENT_REQUEST,
            self::PERMISSIONS_DELETE_PAYMENT_REQUEST,
            self::PERMISSIONS_CREATE_RULE,
            self::PERMISSIONS_EDIT_RULE,
            self::PERMISSIONS_DELETE_RULE,
            self::PERMISSIONS_CREATE_PAYOUT,
            self::PERMISSIONS_EDIT_PAYOUT,
            self::PERMISSIONS_DELETE_PAYOUT,
            self::PERMISSIONS_CREATE_REPORT,
            self::PERMISSIONS_EDIT_REPORT,
            self::PERMISSIONS_DELETE_REPORT,
            self::PERMISSIONS_EXECUTE_REPORT,
            self::PERMISSIONS_CREATE_PAYMENT_ACCOUNT,
            self::PERMISSIONS_EDIT_PAYMENT_ACCOUNT,
            self::PERMISSIONS_TRUSTED_SUBMIT_PAYOUT,
            self::PERMISSIONS_OPEN_BANKING_ACCOUNT_INFORMATION,
            self::PERMISSIONS_CREATE_DIRECT_DEBIT_MANDATE,
            self::PERMISSIONS_SUBMIT_DIRECT_DEBIT_PAYMENT,
            self::PERMISSIONS_VIEW_TRANSACTIONS,
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
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('hmac_algorithm', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
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

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getHmacAlgorithmAllowableValues();
        if (!is_null($this->container['hmac_algorithm']) && !in_array($this->container['hmac_algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'hmac_algorithm', must be one of '%s'",
                $this->container['hmac_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPermissionsAllowableValues();
        if (!is_null($this->container['permissions']) && !in_array($this->container['permissions'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'permissions', must be one of '%s'",
                $this->container['permissions'],
                implode("', '", $allowedValues)
            );
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
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id The merchant id to add to the token
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        if (is_null($merchant_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_id cannot be null');
        }
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Token description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling NoFrixionMoneyMoovModelsTokenAdd., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets hmac_algorithm
     *
     * @return string|null
     */
    public function getHmacAlgorithm()
    {
        return $this->container['hmac_algorithm'];
    }

    /**
     * Sets hmac_algorithm
     *
     * @param string|null $hmac_algorithm Optional shared secret algorithm to use for HMAC authentication. If set a shared secret will be   returned when the token is intially created but not on any subsequent retrievals.
     *
     * @return self
     */
    public function setHmacAlgorithm($hmac_algorithm)
    {
        if (is_null($hmac_algorithm)) {
            throw new \InvalidArgumentException('non-nullable hmac_algorithm cannot be null');
        }
        $allowedValues = $this->getHmacAlgorithmAllowableValues();
        if (!in_array($hmac_algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'hmac_algorithm', must be one of '%s'",
                    $hmac_algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hmac_algorithm'] = $hmac_algorithm;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $allowedValues = $this->getPermissionsAllowableValues();
        if (!in_array($permissions, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'permissions', must be one of '%s'",
                    $permissions,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permissions'] = $permissions;

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


