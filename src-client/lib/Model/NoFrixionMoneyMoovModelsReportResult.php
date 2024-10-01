<?php
/**
 * NoFrixionMoneyMoovModelsReportResult
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
 * NoFrixionMoneyMoovModelsReportResult Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsReportResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.ReportResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_id' => 'string',
        'report_type' => 'string',
        'report_name' => 'string',
        'last_completed_at' => '\DateTime',
        'statement_number' => 'int',
        'contents' => 'string',
        'content_type' => 'string'
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
        'report_type' => null,
        'report_name' => null,
        'last_completed_at' => 'date-time',
        'statement_number' => 'int32',
        'contents' => null,
        'content_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchant_id' => true,
        'report_type' => false,
        'report_name' => true,
        'last_completed_at' => false,
        'statement_number' => false,
        'contents' => true,
        'content_type' => true
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
        'report_type' => 'reportType',
        'report_name' => 'reportName',
        'last_completed_at' => 'lastCompletedAt',
        'statement_number' => 'statementNumber',
        'contents' => 'contents',
        'content_type' => 'contentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'report_type' => 'setReportType',
        'report_name' => 'setReportName',
        'last_completed_at' => 'setLastCompletedAt',
        'statement_number' => 'setStatementNumber',
        'contents' => 'setContents',
        'content_type' => 'setContentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'report_type' => 'getReportType',
        'report_name' => 'getReportName',
        'last_completed_at' => 'getLastCompletedAt',
        'statement_number' => 'getStatementNumber',
        'contents' => 'getContents',
        'content_type' => 'getContentType'
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

    public const REPORT_TYPE_UNKNOWN = 'Unknown';
    public const REPORT_TYPE_SWIFT_CUSTOMER_STATEMENT = 'SwiftCustomerStatement';
    public const REPORT_TYPE_CUSTOMER_ACTIVITY = 'CustomerActivity';
    public const REPORT_TYPE_SAFE_GUARDING_RECONCILIATION = 'SafeGuardingReconciliation';
    public const REPORT_TYPE_MERCHANT_ACCOUNTS_BALANCE = 'MerchantAccountsBalance';
    public const REPORT_TYPE_MERCHANT_ACCOUNTS_TRANSACTION = 'MerchantAccountsTransaction';
    public const REPORT_TYPE_VISION_BLUE_TRANSACTION = 'VisionBlueTransaction';
    public const REPORT_TYPE_MERCHANT_SAFE_GUARDING_RECONCILIATION = 'MerchantSafeGuardingReconciliation';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReportTypeAllowableValues()
    {
        return [
            self::REPORT_TYPE_UNKNOWN,
            self::REPORT_TYPE_SWIFT_CUSTOMER_STATEMENT,
            self::REPORT_TYPE_CUSTOMER_ACTIVITY,
            self::REPORT_TYPE_SAFE_GUARDING_RECONCILIATION,
            self::REPORT_TYPE_MERCHANT_ACCOUNTS_BALANCE,
            self::REPORT_TYPE_MERCHANT_ACCOUNTS_TRANSACTION,
            self::REPORT_TYPE_VISION_BLUE_TRANSACTION,
            self::REPORT_TYPE_MERCHANT_SAFE_GUARDING_RECONCILIATION,
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
        $this->setIfExists('report_type', $data ?? [], null);
        $this->setIfExists('report_name', $data ?? [], null);
        $this->setIfExists('last_completed_at', $data ?? [], null);
        $this->setIfExists('statement_number', $data ?? [], null);
        $this->setIfExists('contents', $data ?? [], null);
        $this->setIfExists('content_type', $data ?? [], null);
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

        $allowedValues = $this->getReportTypeAllowableValues();
        if (!is_null($this->container['report_type']) && !in_array($this->container['report_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'report_type', must be one of '%s'",
                $this->container['report_type'],
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
            array_push($this->openAPINullablesSetToNull, 'merchant_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchant_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string|null $report_type report_type
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        if (is_null($report_type)) {
            throw new \InvalidArgumentException('non-nullable report_type cannot be null');
        }
        $allowedValues = $this->getReportTypeAllowableValues();
        if (!in_array($report_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'report_type', must be one of '%s'",
                    $report_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets report_name
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string|null $report_name report_name
     *
     * @return self
     */
    public function setReportName($report_name)
    {
        if (is_null($report_name)) {
            array_push($this->openAPINullablesSetToNull, 'report_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('report_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets last_completed_at
     *
     * @return \DateTime|null
     */
    public function getLastCompletedAt()
    {
        return $this->container['last_completed_at'];
    }

    /**
     * Sets last_completed_at
     *
     * @param \DateTime|null $last_completed_at last_completed_at
     *
     * @return self
     */
    public function setLastCompletedAt($last_completed_at)
    {
        if (is_null($last_completed_at)) {
            throw new \InvalidArgumentException('non-nullable last_completed_at cannot be null');
        }
        $this->container['last_completed_at'] = $last_completed_at;

        return $this;
    }

    /**
     * Gets statement_number
     *
     * @return int|null
     */
    public function getStatementNumber()
    {
        return $this->container['statement_number'];
    }

    /**
     * Sets statement_number
     *
     * @param int|null $statement_number statement_number
     *
     * @return self
     */
    public function setStatementNumber($statement_number)
    {
        if (is_null($statement_number)) {
            throw new \InvalidArgumentException('non-nullable statement_number cannot be null');
        }
        $this->container['statement_number'] = $statement_number;

        return $this;
    }

    /**
     * Gets contents
     *
     * @return string|null
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param string|null $contents contents
     *
     * @return self
     */
    public function setContents($contents)
    {
        if (is_null($contents)) {
            array_push($this->openAPINullablesSetToNull, 'contents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        if (is_null($content_type)) {
            array_push($this->openAPINullablesSetToNull, 'content_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content_type'] = $content_type;

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


