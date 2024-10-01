<?php
/**
 * NoFrixionMoneyMoovModelsPaymentRequestAddress
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
 * NoFrixionMoneyMoovModelsPaymentRequestAddress Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsPaymentRequestAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.PaymentRequestAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'payment_request_id' => 'string',
        'address_type' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_city' => 'string',
        'address_county' => 'string',
        'address_post_code' => 'string',
        'address_country_code' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'inserted' => '\DateTime',
        'last_updated' => '\DateTime'
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
        'payment_request_id' => 'uuid',
        'address_type' => null,
        'first_name' => null,
        'last_name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_city' => null,
        'address_county' => null,
        'address_post_code' => null,
        'address_country_code' => null,
        'phone' => null,
        'email' => 'email',
        'inserted' => 'date-time',
        'last_updated' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'payment_request_id' => true,
        'address_type' => false,
        'first_name' => true,
        'last_name' => true,
        'address_line1' => true,
        'address_line2' => true,
        'address_city' => true,
        'address_county' => true,
        'address_post_code' => true,
        'address_country_code' => true,
        'phone' => true,
        'email' => true,
        'inserted' => false,
        'last_updated' => false
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
        'payment_request_id' => 'paymentRequestID',
        'address_type' => 'addressType',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_city' => 'addressCity',
        'address_county' => 'addressCounty',
        'address_post_code' => 'addressPostCode',
        'address_country_code' => 'addressCountryCode',
        'phone' => 'phone',
        'email' => 'email',
        'inserted' => 'inserted',
        'last_updated' => 'lastUpdated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'payment_request_id' => 'setPaymentRequestId',
        'address_type' => 'setAddressType',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_city' => 'setAddressCity',
        'address_county' => 'setAddressCounty',
        'address_post_code' => 'setAddressPostCode',
        'address_country_code' => 'setAddressCountryCode',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'inserted' => 'setInserted',
        'last_updated' => 'setLastUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'payment_request_id' => 'getPaymentRequestId',
        'address_type' => 'getAddressType',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_city' => 'getAddressCity',
        'address_county' => 'getAddressCounty',
        'address_post_code' => 'getAddressPostCode',
        'address_country_code' => 'getAddressCountryCode',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'inserted' => 'getInserted',
        'last_updated' => 'getLastUpdated'
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

    public const ADDRESS_TYPE_UNKNOWN = 'Unknown';
    public const ADDRESS_TYPE_SHIPPING = 'Shipping';
    public const ADDRESS_TYPE_BILLING = 'Billing';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_UNKNOWN,
            self::ADDRESS_TYPE_SHIPPING,
            self::ADDRESS_TYPE_BILLING,
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
        $this->setIfExists('payment_request_id', $data ?? [], null);
        $this->setIfExists('address_type', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('address_city', $data ?? [], null);
        $this->setIfExists('address_county', $data ?? [], null);
        $this->setIfExists('address_post_code', $data ?? [], null);
        $this->setIfExists('address_country_code', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('inserted', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
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

        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['address_type']) && !in_array($this->container['address_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'address_type', must be one of '%s'",
                $this->container['address_type'],
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
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payment_request_id
     *
     * @return string|null
     */
    public function getPaymentRequestId()
    {
        return $this->container['payment_request_id'];
    }

    /**
     * Sets payment_request_id
     *
     * @param string|null $payment_request_id payment_request_id
     *
     * @return self
     */
    public function setPaymentRequestId($payment_request_id)
    {
        if (is_null($payment_request_id)) {
            array_push($this->openAPINullablesSetToNull, 'payment_request_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_request_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_request_id'] = $payment_request_id;

        return $this;
    }

    /**
     * Gets address_type
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string|null $address_type Lists the supported address types.
     *
     * @return self
     */
    public function setAddressType($address_type)
    {
        if (is_null($address_type)) {
            throw new \InvalidArgumentException('non-nullable address_type cannot be null');
        }
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!in_array($address_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'address_type', must be one of '%s'",
                    $address_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            array_push($this->openAPINullablesSetToNull, 'first_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            array_push($this->openAPINullablesSetToNull, 'last_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (is_null($address_line1)) {
            array_push($this->openAPINullablesSetToNull, 'address_line1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 address_line2
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (is_null($address_line2)) {
            array_push($this->openAPINullablesSetToNull, 'address_line2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string|null
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string|null $address_city address_city
     *
     * @return self
     */
    public function setAddressCity($address_city)
    {
        if (is_null($address_city)) {
            array_push($this->openAPINullablesSetToNull, 'address_city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_county
     *
     * @return string|null
     */
    public function getAddressCounty()
    {
        return $this->container['address_county'];
    }

    /**
     * Sets address_county
     *
     * @param string|null $address_county address_county
     *
     * @return self
     */
    public function setAddressCounty($address_county)
    {
        if (is_null($address_county)) {
            array_push($this->openAPINullablesSetToNull, 'address_county');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_county', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_county'] = $address_county;

        return $this;
    }

    /**
     * Gets address_post_code
     *
     * @return string|null
     */
    public function getAddressPostCode()
    {
        return $this->container['address_post_code'];
    }

    /**
     * Sets address_post_code
     *
     * @param string|null $address_post_code address_post_code
     *
     * @return self
     */
    public function setAddressPostCode($address_post_code)
    {
        if (is_null($address_post_code)) {
            array_push($this->openAPINullablesSetToNull, 'address_post_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_post_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_post_code'] = $address_post_code;

        return $this;
    }

    /**
     * Gets address_country_code
     *
     * @return string|null
     */
    public function getAddressCountryCode()
    {
        return $this->container['address_country_code'];
    }

    /**
     * Sets address_country_code
     *
     * @param string|null $address_country_code address_country_code
     *
     * @return self
     */
    public function setAddressCountryCode($address_country_code)
    {
        if (is_null($address_country_code)) {
            array_push($this->openAPINullablesSetToNull, 'address_country_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_country_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_country_code'] = $address_country_code;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            array_push($this->openAPINullablesSetToNull, 'phone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email'] = $email;

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


