<?php
/**
 * NoFrixionDataModelsMerchantBusinessSettingEntity
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
 * NoFrixionDataModelsMerchantBusinessSettingEntity Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionDataModelsMerchantBusinessSettingEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.DataModels.MerchantBusinessSettingEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'merchant_id' => 'string',
        'setting_type' => 'string',
        'merchant_setting_value' => 'string',
        'no_frixion_admin_note' => 'string',
        'inserted' => '\DateTime',
        'last_updated' => '\DateTime',
        'merchant' => '\Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity'
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
        'merchant_id' => 'uuid',
        'setting_type' => null,
        'merchant_setting_value' => null,
        'no_frixion_admin_note' => null,
        'inserted' => 'date-time',
        'last_updated' => 'date-time',
        'merchant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'merchant_id' => false,
        'setting_type' => false,
        'merchant_setting_value' => true,
        'no_frixion_admin_note' => true,
        'inserted' => false,
        'last_updated' => false,
        'merchant' => false
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
        'merchant_id' => 'merchantID',
        'setting_type' => 'settingType',
        'merchant_setting_value' => 'merchantSettingValue',
        'no_frixion_admin_note' => 'noFrixionAdminNote',
        'inserted' => 'inserted',
        'last_updated' => 'lastUpdated',
        'merchant' => 'merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'setting_type' => 'setSettingType',
        'merchant_setting_value' => 'setMerchantSettingValue',
        'no_frixion_admin_note' => 'setNoFrixionAdminNote',
        'inserted' => 'setInserted',
        'last_updated' => 'setLastUpdated',
        'merchant' => 'setMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'setting_type' => 'getSettingType',
        'merchant_setting_value' => 'getMerchantSettingValue',
        'no_frixion_admin_note' => 'getNoFrixionAdminNote',
        'inserted' => 'getInserted',
        'last_updated' => 'getLastUpdated',
        'merchant' => 'getMerchant'
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

    public const SETTING_TYPE_UNKNOWN = 'Unknown';
    public const SETTING_TYPE_PAYOUT_AUTHORISER_COUNT = 'PayoutAuthoriserCount';
    public const SETTING_TYPE_BENEFICIARY_AUTHORISER_COUNT = 'BeneficiaryAuthoriserCount';
    public const SETTING_TYPE_ONLY_PAYOUT_TO_BENEFICIARY = 'OnlyPayoutToBeneficiary';
    public const SETTING_TYPE_PAYOUT_ONLY_USERS_CAN_CREATE_AND_UPDATE = 'PayoutOnlyUsersCanCreateAndUpdate';
    public const SETTING_TYPE_BENEFICIARY_ONLY_USERS_CAN_CREATE_AND_UPDATE = 'BeneficiaryOnlyUsersCanCreateAndUpdate';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSettingTypeAllowableValues()
    {
        return [
            self::SETTING_TYPE_UNKNOWN,
            self::SETTING_TYPE_PAYOUT_AUTHORISER_COUNT,
            self::SETTING_TYPE_BENEFICIARY_AUTHORISER_COUNT,
            self::SETTING_TYPE_ONLY_PAYOUT_TO_BENEFICIARY,
            self::SETTING_TYPE_PAYOUT_ONLY_USERS_CAN_CREATE_AND_UPDATE,
            self::SETTING_TYPE_BENEFICIARY_ONLY_USERS_CAN_CREATE_AND_UPDATE,
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
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('setting_type', $data ?? [], null);
        $this->setIfExists('merchant_setting_value', $data ?? [], null);
        $this->setIfExists('no_frixion_admin_note', $data ?? [], null);
        $this->setIfExists('inserted', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('merchant', $data ?? [], null);
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

        $allowedValues = $this->getSettingTypeAllowableValues();
        if (!is_null($this->container['setting_type']) && !in_array($this->container['setting_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'setting_type', must be one of '%s'",
                $this->container['setting_type'],
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
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id merchant_id
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
     * Gets setting_type
     *
     * @return string|null
     */
    public function getSettingType()
    {
        return $this->container['setting_type'];
    }

    /**
     * Sets setting_type
     *
     * @param string|null $setting_type setting_type
     *
     * @return self
     */
    public function setSettingType($setting_type)
    {
        if (is_null($setting_type)) {
            throw new \InvalidArgumentException('non-nullable setting_type cannot be null');
        }
        $allowedValues = $this->getSettingTypeAllowableValues();
        if (!in_array($setting_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'setting_type', must be one of '%s'",
                    $setting_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['setting_type'] = $setting_type;

        return $this;
    }

    /**
     * Gets merchant_setting_value
     *
     * @return string|null
     */
    public function getMerchantSettingValue()
    {
        return $this->container['merchant_setting_value'];
    }

    /**
     * Sets merchant_setting_value
     *
     * @param string|null $merchant_setting_value merchant_setting_value
     *
     * @return self
     */
    public function setMerchantSettingValue($merchant_setting_value)
    {
        if (is_null($merchant_setting_value)) {
            array_push($this->openAPINullablesSetToNull, 'merchant_setting_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchant_setting_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchant_setting_value'] = $merchant_setting_value;

        return $this;
    }

    /**
     * Gets no_frixion_admin_note
     *
     * @return string|null
     */
    public function getNoFrixionAdminNote()
    {
        return $this->container['no_frixion_admin_note'];
    }

    /**
     * Sets no_frixion_admin_note
     *
     * @param string|null $no_frixion_admin_note no_frixion_admin_note
     *
     * @return self
     */
    public function setNoFrixionAdminNote($no_frixion_admin_note)
    {
        if (is_null($no_frixion_admin_note)) {
            array_push($this->openAPINullablesSetToNull, 'no_frixion_admin_note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('no_frixion_admin_note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['no_frixion_admin_note'] = $no_frixion_admin_note;

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
            throw new \InvalidArgumentException('non-nullable last_updated cannot be null');
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity|null
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \Nofrixion\Client\Model\NoFrixionDataModelsMerchantEntity|null $merchant merchant
     *
     * @return self
     */
    public function setMerchant($merchant)
    {
        if (is_null($merchant)) {
            throw new \InvalidArgumentException('non-nullable merchant cannot be null');
        }
        $this->container['merchant'] = $merchant;

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


