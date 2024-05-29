<?php
/**
 * FPHSpedVAPIObjectsSpeditionsPartialETSTaskInfo
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
 * FPHSpedVAPIObjectsSpeditionsPartialETSTaskInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsSpeditionsPartialETSTaskInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Speditions.PartialETSTaskInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'visible_id' => 'string',
        'state' => '\OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState',
        'start' => 'string',
        'dest' => 'string',
        'freight' => 'string',
        'has_screenshot' => 'int',
        'is_deductable' => 'bool',
        'dd_cleaned' => 'bool'
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
        'visible_id' => null,
        'state' => null,
        'start' => null,
        'dest' => null,
        'freight' => null,
        'has_screenshot' => 'int32',
        'is_deductable' => null,
        'dd_cleaned' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'visible_id' => true,
        'state' => false,
        'start' => true,
        'dest' => true,
        'freight' => true,
        'has_screenshot' => false,
        'is_deductable' => false,
        'dd_cleaned' => false
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
        'visible_id' => 'visibleID',
        'state' => 'state',
        'start' => 'start',
        'dest' => 'dest',
        'freight' => 'freight',
        'has_screenshot' => 'hasScreenshot',
        'is_deductable' => 'isDeductable',
        'dd_cleaned' => 'ddCleaned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'visible_id' => 'setVisibleId',
        'state' => 'setState',
        'start' => 'setStart',
        'dest' => 'setDest',
        'freight' => 'setFreight',
        'has_screenshot' => 'setHasScreenshot',
        'is_deductable' => 'setIsDeductable',
        'dd_cleaned' => 'setDdCleaned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'visible_id' => 'getVisibleId',
        'state' => 'getState',
        'start' => 'getStart',
        'dest' => 'getDest',
        'freight' => 'getFreight',
        'has_screenshot' => 'getHasScreenshot',
        'is_deductable' => 'getIsDeductable',
        'dd_cleaned' => 'getDdCleaned'
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
        $this->setIfExists('visible_id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('start', $data ?? [], null);
        $this->setIfExists('dest', $data ?? [], null);
        $this->setIfExists('freight', $data ?? [], null);
        $this->setIfExists('has_screenshot', $data ?? [], null);
        $this->setIfExists('is_deductable', $data ?? [], null);
        $this->setIfExists('dd_cleaned', $data ?? [], null);
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
        if ($this->container['visible_id'] === null) {
            $invalidProperties[] = "'visible_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['dest'] === null) {
            $invalidProperties[] = "'dest' can't be null";
        }
        if ($this->container['freight'] === null) {
            $invalidProperties[] = "'freight' can't be null";
        }
        if ($this->container['has_screenshot'] === null) {
            $invalidProperties[] = "'has_screenshot' can't be null";
        }
        if ($this->container['is_deductable'] === null) {
            $invalidProperties[] = "'is_deductable' can't be null";
        }
        if ($this->container['dd_cleaned'] === null) {
            $invalidProperties[] = "'dd_cleaned' can't be null";
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
     * Gets visible_id
     *
     * @return string
     */
    public function getVisibleId()
    {
        return $this->container['visible_id'];
    }

    /**
     * Sets visible_id
     *
     * @param string $visible_id visible_id
     *
     * @return self
     */
    public function setVisibleId($visible_id)
    {
        if (is_null($visible_id)) {
            array_push($this->openAPINullablesSetToNull, 'visible_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visible_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['visible_id'] = $visible_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIEnumsETSTaskState $state 0 = InDrive  1 = Done  2 = Settled  3 = Fail  4 = AdminCheck  5 = Paused  6 = Cancelled  7 = Invalid  -1 = NotAvaliable
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param string $start start
     *
     * @return self
     */
    public function setStart($start)
    {
        if (is_null($start)) {
            array_push($this->openAPINullablesSetToNull, 'start');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets dest
     *
     * @return string
     */
    public function getDest()
    {
        return $this->container['dest'];
    }

    /**
     * Sets dest
     *
     * @param string $dest dest
     *
     * @return self
     */
    public function setDest($dest)
    {
        if (is_null($dest)) {
            array_push($this->openAPINullablesSetToNull, 'dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dest'] = $dest;

        return $this;
    }

    /**
     * Gets freight
     *
     * @return string
     */
    public function getFreight()
    {
        return $this->container['freight'];
    }

    /**
     * Sets freight
     *
     * @param string $freight freight
     *
     * @return self
     */
    public function setFreight($freight)
    {
        if (is_null($freight)) {
            array_push($this->openAPINullablesSetToNull, 'freight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('freight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['freight'] = $freight;

        return $this;
    }

    /**
     * Gets has_screenshot
     *
     * @return int
     */
    public function getHasScreenshot()
    {
        return $this->container['has_screenshot'];
    }

    /**
     * Sets has_screenshot
     *
     * @param int $has_screenshot has_screenshot
     *
     * @return self
     */
    public function setHasScreenshot($has_screenshot)
    {
        if (is_null($has_screenshot)) {
            throw new \InvalidArgumentException('non-nullable has_screenshot cannot be null');
        }
        $this->container['has_screenshot'] = $has_screenshot;

        return $this;
    }

    /**
     * Gets is_deductable
     *
     * @return bool
     */
    public function getIsDeductable()
    {
        return $this->container['is_deductable'];
    }

    /**
     * Sets is_deductable
     *
     * @param bool $is_deductable is_deductable
     *
     * @return self
     */
    public function setIsDeductable($is_deductable)
    {
        if (is_null($is_deductable)) {
            throw new \InvalidArgumentException('non-nullable is_deductable cannot be null');
        }
        $this->container['is_deductable'] = $is_deductable;

        return $this;
    }

    /**
     * Gets dd_cleaned
     *
     * @return bool
     */
    public function getDdCleaned()
    {
        return $this->container['dd_cleaned'];
    }

    /**
     * Sets dd_cleaned
     *
     * @param bool $dd_cleaned dd_cleaned
     *
     * @return self
     */
    public function setDdCleaned($dd_cleaned)
    {
        if (is_null($dd_cleaned)) {
            throw new \InvalidArgumentException('non-nullable dd_cleaned cannot be null');
        }
        $this->container['dd_cleaned'] = $dd_cleaned;

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

