<?php
/**
 * NoFrixionMoneyMoovModelsCardCustomerToken
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
 * NoFrixionMoneyMoovModelsCardCustomerToken Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsCardCustomerToken implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.CardCustomerToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'masked_card_number' => 'string',
        'last_four_digits' => 'string',
        'expiry_month' => 'string',
        'expiry_year' => 'string',
        'payment_request_id' => 'string',
        'customer_email_address' => 'string',
        'card_type' => 'string',
        'merchant_id' => 'string',
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
        'masked_card_number' => null,
        'last_four_digits' => null,
        'expiry_month' => null,
        'expiry_year' => null,
        'payment_request_id' => 'uuid',
        'customer_email_address' => 'email',
        'card_type' => null,
        'merchant_id' => 'uuid',
        'inserted' => 'date-time',
        'last_updated' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'masked_card_number' => true,
        'last_four_digits' => true,
        'expiry_month' => true,
        'expiry_year' => true,
        'payment_request_id' => false,
        'customer_email_address' => true,
        'card_type' => true,
        'merchant_id' => false,
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
        'masked_card_number' => 'maskedCardNumber',
        'last_four_digits' => 'lastFourDigits',
        'expiry_month' => 'expiryMonth',
        'expiry_year' => 'expiryYear',
        'payment_request_id' => 'paymentRequestID',
        'customer_email_address' => 'customerEmailAddress',
        'card_type' => 'cardType',
        'merchant_id' => 'merchantID',
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
        'masked_card_number' => 'setMaskedCardNumber',
        'last_four_digits' => 'setLastFourDigits',
        'expiry_month' => 'setExpiryMonth',
        'expiry_year' => 'setExpiryYear',
        'payment_request_id' => 'setPaymentRequestId',
        'customer_email_address' => 'setCustomerEmailAddress',
        'card_type' => 'setCardType',
        'merchant_id' => 'setMerchantId',
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
        'masked_card_number' => 'getMaskedCardNumber',
        'last_four_digits' => 'getLastFourDigits',
        'expiry_month' => 'getExpiryMonth',
        'expiry_year' => 'getExpiryYear',
        'payment_request_id' => 'getPaymentRequestId',
        'customer_email_address' => 'getCustomerEmailAddress',
        'card_type' => 'getCardType',
        'merchant_id' => 'getMerchantId',
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
        $this->setIfExists('masked_card_number', $data ?? [], null);
        $this->setIfExists('last_four_digits', $data ?? [], null);
        $this->setIfExists('expiry_month', $data ?? [], null);
        $this->setIfExists('expiry_year', $data ?? [], null);
        $this->setIfExists('payment_request_id', $data ?? [], null);
        $this->setIfExists('customer_email_address', $data ?? [], null);
        $this->setIfExists('card_type', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
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
     * @param string|null $id The unique ID of the card token that has been stored for the customer. This is   the ID to supply when requesting an authorisation on behalf of the customer.
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
     * Gets masked_card_number
     *
     * @return string|null
     */
    public function getMaskedCardNumber()
    {
        return $this->container['masked_card_number'];
    }

    /**
     * Sets masked_card_number
     *
     * @param string|null $masked_card_number masked_card_number
     *
     * @return self
     */
    public function setMaskedCardNumber($masked_card_number)
    {
        if (is_null($masked_card_number)) {
            array_push($this->openAPINullablesSetToNull, 'masked_card_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('masked_card_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['masked_card_number'] = $masked_card_number;

        return $this;
    }

    /**
     * Gets last_four_digits
     *
     * @return string|null
     */
    public function getLastFourDigits()
    {
        return $this->container['last_four_digits'];
    }

    /**
     * Sets last_four_digits
     *
     * @param string|null $last_four_digits last_four_digits
     *
     * @return self
     */
    public function setLastFourDigits($last_four_digits)
    {
        if (is_null($last_four_digits)) {
            array_push($this->openAPINullablesSetToNull, 'last_four_digits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_four_digits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_four_digits'] = $last_four_digits;

        return $this;
    }

    /**
     * Gets expiry_month
     *
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->container['expiry_month'];
    }

    /**
     * Sets expiry_month
     *
     * @param string|null $expiry_month expiry_month
     *
     * @return self
     */
    public function setExpiryMonth($expiry_month)
    {
        if (is_null($expiry_month)) {
            array_push($this->openAPINullablesSetToNull, 'expiry_month');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiry_month', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiry_month'] = $expiry_month;

        return $this;
    }

    /**
     * Gets expiry_year
     *
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->container['expiry_year'];
    }

    /**
     * Sets expiry_year
     *
     * @param string|null $expiry_year expiry_year
     *
     * @return self
     */
    public function setExpiryYear($expiry_year)
    {
        if (is_null($expiry_year)) {
            array_push($this->openAPINullablesSetToNull, 'expiry_year');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiry_year', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiry_year'] = $expiry_year;

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
            throw new \InvalidArgumentException('non-nullable payment_request_id cannot be null');
        }
        $this->container['payment_request_id'] = $payment_request_id;

        return $this;
    }

    /**
     * Gets customer_email_address
     *
     * @return string|null
     */
    public function getCustomerEmailAddress()
    {
        return $this->container['customer_email_address'];
    }

    /**
     * Sets customer_email_address
     *
     * @param string|null $customer_email_address When creating a tokenised card the payer's email address must be supplied. This is  used as away to group card tokens for an end user. For customer initiated transactions   it is important that the email address supplied has been verified to belong to the user  initiating the payment.
     *
     * @return self
     */
    public function setCustomerEmailAddress($customer_email_address)
    {
        if (is_null($customer_email_address)) {
            array_push($this->openAPINullablesSetToNull, 'customer_email_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_email_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_email_address'] = $customer_email_address;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type The type of the tokenised card, e.g. Visa, MasterCard etc. It's possible this could  be empty if the card type could not be identified. There is no hard and fast way to  know for sure to know the type of card.
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        if (is_null($card_type)) {
            array_push($this->openAPINullablesSetToNull, 'card_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_type'] = $card_type;

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


