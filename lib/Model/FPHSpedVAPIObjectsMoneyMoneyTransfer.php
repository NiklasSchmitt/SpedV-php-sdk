<?php
/**
 * FPHSpedVAPIObjectsMoneyMoneyTransfer
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SpedV API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FPHSpedVAPIObjectsMoneyMoneyTransfer Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsMoneyMoneyTransfer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Money.MoneyTransfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'sender_account' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount',
        'sender' => 'string',
        'receiver_account' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount',
        'receiver' => 'string',
        'cause' => 'string',
        'cause_group' => 'string',
        'value' => 'float',
        'money' => 'string',
        'responsible_user' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser',
        'responsible' => 'string',
        'date_time' => '\DateTime',
        'time' => 'string',
        'is_negative' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'sender_account' => null,
        'sender' => null,
        'receiver_account' => null,
        'receiver' => null,
        'cause' => null,
        'cause_group' => null,
        'value' => 'double',
        'money' => null,
        'responsible_user' => null,
        'responsible' => null,
        'date_time' => 'date-time',
        'time' => null,
        'is_negative' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'sender_account' => true,
        'sender' => true,
        'receiver_account' => true,
        'receiver' => true,
        'cause' => true,
        'cause_group' => true,
        'value' => false,
        'money' => true,
        'responsible_user' => true,
        'responsible' => true,
        'date_time' => false,
        'time' => true,
        'is_negative' => false
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
        'sender_account' => 'senderAccount',
        'sender' => 'sender',
        'receiver_account' => 'receiverAccount',
        'receiver' => 'receiver',
        'cause' => 'cause',
        'cause_group' => 'causeGroup',
        'value' => 'value',
        'money' => 'money',
        'responsible_user' => 'responsibleUser',
        'responsible' => 'responsible',
        'date_time' => 'dateTime',
        'time' => 'time',
        'is_negative' => 'isNegative'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sender_account' => 'setSenderAccount',
        'sender' => 'setSender',
        'receiver_account' => 'setReceiverAccount',
        'receiver' => 'setReceiver',
        'cause' => 'setCause',
        'cause_group' => 'setCauseGroup',
        'value' => 'setValue',
        'money' => 'setMoney',
        'responsible_user' => 'setResponsibleUser',
        'responsible' => 'setResponsible',
        'date_time' => 'setDateTime',
        'time' => 'setTime',
        'is_negative' => 'setIsNegative'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sender_account' => 'getSenderAccount',
        'sender' => 'getSender',
        'receiver_account' => 'getReceiverAccount',
        'receiver' => 'getReceiver',
        'cause' => 'getCause',
        'cause_group' => 'getCauseGroup',
        'value' => 'getValue',
        'money' => 'getMoney',
        'responsible_user' => 'getResponsibleUser',
        'responsible' => 'getResponsible',
        'date_time' => 'getDateTime',
        'time' => 'getTime',
        'is_negative' => 'getIsNegative'
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
        $this->setIfExists('sender_account', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('receiver_account', $data ?? [], null);
        $this->setIfExists('receiver', $data ?? [], null);
        $this->setIfExists('cause', $data ?? [], null);
        $this->setIfExists('cause_group', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('money', $data ?? [], null);
        $this->setIfExists('responsible_user', $data ?? [], null);
        $this->setIfExists('responsible', $data ?? [], null);
        $this->setIfExists('date_time', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('is_negative', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['sender_account'] === null) {
            $invalidProperties[] = "'sender_account' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['receiver_account'] === null) {
            $invalidProperties[] = "'receiver_account' can't be null";
        }
        if ($this->container['receiver'] === null) {
            $invalidProperties[] = "'receiver' can't be null";
        }
        if ($this->container['cause'] === null) {
            $invalidProperties[] = "'cause' can't be null";
        }
        if ($this->container['cause_group'] === null) {
            $invalidProperties[] = "'cause_group' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['money'] === null) {
            $invalidProperties[] = "'money' can't be null";
        }
        if ($this->container['responsible_user'] === null) {
            $invalidProperties[] = "'responsible_user' can't be null";
        }
        if ($this->container['responsible'] === null) {
            $invalidProperties[] = "'responsible' can't be null";
        }
        if ($this->container['date_time'] === null) {
            $invalidProperties[] = "'date_time' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['is_negative'] === null) {
            $invalidProperties[] = "'is_negative' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
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
     * Gets sender_account
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount
     */
    public function getSenderAccount()
    {
        return $this->container['sender_account'];
    }

    /**
     * Sets sender_account
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount $sender_account sender_account
     *
     * @return self
     */
    public function setSenderAccount($sender_account)
    {
        if (is_null($sender_account)) {
            array_push($this->openAPINullablesSetToNull, 'sender_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender_account'] = $sender_account;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            array_push($this->openAPINullablesSetToNull, 'sender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets receiver_account
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount
     */
    public function getReceiverAccount()
    {
        return $this->container['receiver_account'];
    }

    /**
     * Sets receiver_account
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount $receiver_account receiver_account
     *
     * @return self
     */
    public function setReceiverAccount($receiver_account)
    {
        if (is_null($receiver_account)) {
            array_push($this->openAPINullablesSetToNull, 'receiver_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('receiver_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['receiver_account'] = $receiver_account;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return string
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param string $receiver receiver
     *
     * @return self
     */
    public function setReceiver($receiver)
    {
        if (is_null($receiver)) {
            array_push($this->openAPINullablesSetToNull, 'receiver');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('receiver', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets cause
     *
     * @return string
     */
    public function getCause()
    {
        return $this->container['cause'];
    }

    /**
     * Sets cause
     *
     * @param string $cause cause
     *
     * @return self
     */
    public function setCause($cause)
    {
        if (is_null($cause)) {
            array_push($this->openAPINullablesSetToNull, 'cause');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cause', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cause'] = $cause;

        return $this;
    }

    /**
     * Gets cause_group
     *
     * @return string
     */
    public function getCauseGroup()
    {
        return $this->container['cause_group'];
    }

    /**
     * Sets cause_group
     *
     * @param string $cause_group cause_group
     *
     * @return self
     */
    public function setCauseGroup($cause_group)
    {
        if (is_null($cause_group)) {
            array_push($this->openAPINullablesSetToNull, 'cause_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cause_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cause_group'] = $cause_group;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->container['money'];
    }

    /**
     * Sets money
     *
     * @param string $money money
     *
     * @return self
     */
    public function setMoney($money)
    {
        if (is_null($money)) {
            array_push($this->openAPINullablesSetToNull, 'money');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('money', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['money'] = $money;

        return $this;
    }

    /**
     * Gets responsible_user
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser
     */
    public function getResponsibleUser()
    {
        return $this->container['responsible_user'];
    }

    /**
     * Sets responsible_user
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUser $responsible_user responsible_user
     *
     * @return self
     */
    public function setResponsibleUser($responsible_user)
    {
        if (is_null($responsible_user)) {
            array_push($this->openAPINullablesSetToNull, 'responsible_user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsible_user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responsible_user'] = $responsible_user;

        return $this;
    }

    /**
     * Gets responsible
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->container['responsible'];
    }

    /**
     * Sets responsible
     *
     * @param string $responsible responsible
     *
     * @return self
     */
    public function setResponsible($responsible)
    {
        if (is_null($responsible)) {
            array_push($this->openAPINullablesSetToNull, 'responsible');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsible', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responsible'] = $responsible;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime $date_time date_time
     *
     * @return self
     */
    public function setDateTime($date_time)
    {
        if (is_null($date_time)) {
            throw new \InvalidArgumentException('non-nullable date_time cannot be null');
        }
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time time
     *
     * @return self
     */
    public function setTime($time)
    {
        if (is_null($time)) {
            array_push($this->openAPINullablesSetToNull, 'time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets is_negative
     *
     * @return bool
     */
    public function getIsNegative()
    {
        return $this->container['is_negative'];
    }

    /**
     * Sets is_negative
     *
     * @param bool $is_negative is_negative
     *
     * @return self
     */
    public function setIsNegative($is_negative)
    {
        if (is_null($is_negative)) {
            throw new \InvalidArgumentException('non-nullable is_negative cannot be null');
        }
        $this->container['is_negative'] = $is_negative;

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

