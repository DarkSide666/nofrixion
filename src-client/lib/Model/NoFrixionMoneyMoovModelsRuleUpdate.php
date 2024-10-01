<?php
/**
 * NoFrixionMoneyMoovModelsRuleUpdate
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
 * NoFrixionMoneyMoovModelsRuleUpdate Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoFrixionMoneyMoovModelsRuleUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoFrixion.MoneyMoov.Models.RuleUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'on_approved_web_hook_url' => 'string',
        'on_execution_error_web_hook_url' => 'string',
        'on_execution_success_web_hook_url' => 'string',
        'is_disabled' => 'bool',
        'trigger_on_pay_in' => 'bool',
        'trigger_cron_expression' => 'string',
        'time_zone_id' => 'string',
        'start_at' => '\DateTime',
        'end_at' => '\DateTime',
        'sweep_action' => '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsSweepAction',
        'web_hook_secret' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => 'uuid',
        'name' => null,
        'description' => null,
        'on_approved_web_hook_url' => null,
        'on_execution_error_web_hook_url' => null,
        'on_execution_success_web_hook_url' => null,
        'is_disabled' => null,
        'trigger_on_pay_in' => null,
        'trigger_cron_expression' => null,
        'time_zone_id' => null,
        'start_at' => 'date-time',
        'end_at' => 'date-time',
        'sweep_action' => null,
        'web_hook_secret' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => true,
        'name' => true,
        'description' => true,
        'on_approved_web_hook_url' => true,
        'on_execution_error_web_hook_url' => true,
        'on_execution_success_web_hook_url' => true,
        'is_disabled' => true,
        'trigger_on_pay_in' => true,
        'trigger_cron_expression' => true,
        'time_zone_id' => true,
        'start_at' => true,
        'end_at' => true,
        'sweep_action' => false,
        'web_hook_secret' => true
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
        'account_id' => 'accountID',
        'name' => 'name',
        'description' => 'description',
        'on_approved_web_hook_url' => 'onApprovedWebHookUrl',
        'on_execution_error_web_hook_url' => 'onExecutionErrorWebHookUrl',
        'on_execution_success_web_hook_url' => 'onExecutionSuccessWebHookUrl',
        'is_disabled' => 'isDisabled',
        'trigger_on_pay_in' => 'triggerOnPayIn',
        'trigger_cron_expression' => 'triggerCronExpression',
        'time_zone_id' => 'timeZoneId',
        'start_at' => 'startAt',
        'end_at' => 'endAt',
        'sweep_action' => 'sweepAction',
        'web_hook_secret' => 'webHookSecret'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'name' => 'setName',
        'description' => 'setDescription',
        'on_approved_web_hook_url' => 'setOnApprovedWebHookUrl',
        'on_execution_error_web_hook_url' => 'setOnExecutionErrorWebHookUrl',
        'on_execution_success_web_hook_url' => 'setOnExecutionSuccessWebHookUrl',
        'is_disabled' => 'setIsDisabled',
        'trigger_on_pay_in' => 'setTriggerOnPayIn',
        'trigger_cron_expression' => 'setTriggerCronExpression',
        'time_zone_id' => 'setTimeZoneId',
        'start_at' => 'setStartAt',
        'end_at' => 'setEndAt',
        'sweep_action' => 'setSweepAction',
        'web_hook_secret' => 'setWebHookSecret'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'name' => 'getName',
        'description' => 'getDescription',
        'on_approved_web_hook_url' => 'getOnApprovedWebHookUrl',
        'on_execution_error_web_hook_url' => 'getOnExecutionErrorWebHookUrl',
        'on_execution_success_web_hook_url' => 'getOnExecutionSuccessWebHookUrl',
        'is_disabled' => 'getIsDisabled',
        'trigger_on_pay_in' => 'getTriggerOnPayIn',
        'trigger_cron_expression' => 'getTriggerCronExpression',
        'time_zone_id' => 'getTimeZoneId',
        'start_at' => 'getStartAt',
        'end_at' => 'getEndAt',
        'sweep_action' => 'getSweepAction',
        'web_hook_secret' => 'getWebHookSecret'
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('on_approved_web_hook_url', $data ?? [], null);
        $this->setIfExists('on_execution_error_web_hook_url', $data ?? [], null);
        $this->setIfExists('on_execution_success_web_hook_url', $data ?? [], null);
        $this->setIfExists('is_disabled', $data ?? [], null);
        $this->setIfExists('trigger_on_pay_in', $data ?? [], null);
        $this->setIfExists('trigger_cron_expression', $data ?? [], null);
        $this->setIfExists('time_zone_id', $data ?? [], null);
        $this->setIfExists('start_at', $data ?? [], null);
        $this->setIfExists('end_at', $data ?? [], null);
        $this->setIfExists('sweep_action', $data ?? [], null);
        $this->setIfExists('web_hook_secret', $data ?? [], null);
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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id Account ID the rule is associated with.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            array_push($this->openAPINullablesSetToNull, 'account_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['account_id'] = $account_id;

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
     * @param string|null $name A name to succinctly describe the rule.
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Arbitrary description for the rule.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets on_approved_web_hook_url
     *
     * @return string|null
     */
    public function getOnApprovedWebHookUrl()
    {
        return $this->container['on_approved_web_hook_url'];
    }

    /**
     * Sets on_approved_web_hook_url
     *
     * @param string|null $on_approved_web_hook_url Optional URL to receive an HTTP request with the rule details when the rule status changes to   approved. The webhook payload will contain the full Rule object.
     *
     * @return self
     */
    public function setOnApprovedWebHookUrl($on_approved_web_hook_url)
    {
        if (is_null($on_approved_web_hook_url)) {
            array_push($this->openAPINullablesSetToNull, 'on_approved_web_hook_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('on_approved_web_hook_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['on_approved_web_hook_url'] = $on_approved_web_hook_url;

        return $this;
    }

    /**
     * Gets on_execution_error_web_hook_url
     *
     * @return string|null
     */
    public function getOnExecutionErrorWebHookUrl()
    {
        return $this->container['on_execution_error_web_hook_url'];
    }

    /**
     * Sets on_execution_error_web_hook_url
     *
     * @param string|null $on_execution_error_web_hook_url Optional URL to receive an HTTP request when a rule execution attempt fails. The webhook   payload will contain a NoFrixionPorblem object.
     *
     * @return self
     */
    public function setOnExecutionErrorWebHookUrl($on_execution_error_web_hook_url)
    {
        if (is_null($on_execution_error_web_hook_url)) {
            array_push($this->openAPINullablesSetToNull, 'on_execution_error_web_hook_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('on_execution_error_web_hook_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['on_execution_error_web_hook_url'] = $on_execution_error_web_hook_url;

        return $this;
    }

    /**
     * Gets on_execution_success_web_hook_url
     *
     * @return string|null
     */
    public function getOnExecutionSuccessWebHookUrl()
    {
        return $this->container['on_execution_success_web_hook_url'];
    }

    /**
     * Sets on_execution_success_web_hook_url
     *
     * @param string|null $on_execution_success_web_hook_url Optional URL to receive an HTTP request when a rule execution attempt succeeds. The webhook   payload will contain a ?.
     *
     * @return self
     */
    public function setOnExecutionSuccessWebHookUrl($on_execution_success_web_hook_url)
    {
        if (is_null($on_execution_success_web_hook_url)) {
            array_push($this->openAPINullablesSetToNull, 'on_execution_success_web_hook_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('on_execution_success_web_hook_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['on_execution_success_web_hook_url'] = $on_execution_success_web_hook_url;

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
     * @param bool|null $is_disabled If set to false the rule will be disabled from executing.
     *
     * @return self
     */
    public function setIsDisabled($is_disabled)
    {
        if (is_null($is_disabled)) {
            array_push($this->openAPINullablesSetToNull, 'is_disabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_disabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets trigger_on_pay_in
     *
     * @return bool|null
     */
    public function getTriggerOnPayIn()
    {
        return $this->container['trigger_on_pay_in'];
    }

    /**
     * Sets trigger_on_pay_in
     *
     * @param bool|null $trigger_on_pay_in Set to true if the rule execution should be triggered when the account   receives a pay in (credit).
     *
     * @return self
     */
    public function setTriggerOnPayIn($trigger_on_pay_in)
    {
        if (is_null($trigger_on_pay_in)) {
            array_push($this->openAPINullablesSetToNull, 'trigger_on_pay_in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trigger_on_pay_in', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trigger_on_pay_in'] = $trigger_on_pay_in;

        return $this;
    }

    /**
     * Gets trigger_cron_expression
     *
     * @return string|null
     */
    public function getTriggerCronExpression()
    {
        return $this->container['trigger_cron_expression'];
    }

    /**
     * Sets trigger_cron_expression
     *
     * @param string|null $trigger_cron_expression If the rule should be executed on a recurring schedule this is the expression  that sets the schedule. The expression uses a CRON format.
     *
     * @return self
     */
    public function setTriggerCronExpression($trigger_cron_expression)
    {
        if (is_null($trigger_cron_expression)) {
            array_push($this->openAPINullablesSetToNull, 'trigger_cron_expression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trigger_cron_expression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trigger_cron_expression'] = $trigger_cron_expression;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string|null
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string|null $time_zone_id If the rule should be executed on a recurring schedule this is the timezone
     *
     * @return self
     */
    public function setTimeZoneId($time_zone_id)
    {
        if (is_null($time_zone_id)) {
            array_push($this->openAPINullablesSetToNull, 'time_zone_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('time_zone_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return \DateTime|null
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime|null $start_at Optional start time for rule executions. If this value is set the rule will not  be triggered until the start time has been reached.
     *
     * @return self
     */
    public function setStartAt($start_at)
    {
        if (is_null($start_at)) {
            array_push($this->openAPINullablesSetToNull, 'start_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return \DateTime|null
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime|null $end_at Optional end time for rule executions. If this value is set the rule will not  be triggered after the end time has been reached.
     *
     * @return self
     */
    public function setEndAt($end_at)
    {
        if (is_null($end_at)) {
            array_push($this->openAPINullablesSetToNull, 'end_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets sweep_action
     *
     * @return \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsSweepAction|null
     */
    public function getSweepAction()
    {
        return $this->container['sweep_action'];
    }

    /**
     * Sets sweep_action
     *
     * @param \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsSweepAction|null $sweep_action sweep_action
     *
     * @return self
     */
    public function setSweepAction($sweep_action)
    {
        if (is_null($sweep_action)) {
            throw new \InvalidArgumentException('non-nullable sweep_action cannot be null');
        }
        $this->container['sweep_action'] = $sweep_action;

        return $this;
    }

    /**
     * Gets web_hook_secret
     *
     * @return string|null
     */
    public function getWebHookSecret()
    {
        return $this->container['web_hook_secret'];
    }

    /**
     * Sets web_hook_secret
     *
     * @param string|null $web_hook_secret If set this secret will be used to sign Web Hook requests.
     *
     * @return self
     */
    public function setWebHookSecret($web_hook_secret)
    {
        if (is_null($web_hook_secret)) {
            array_push($this->openAPINullablesSetToNull, 'web_hook_secret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('web_hook_secret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['web_hook_secret'] = $web_hook_secret;

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


