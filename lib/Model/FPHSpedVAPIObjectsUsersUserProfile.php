<?php
/**
 * FPHSpedVAPIObjectsUsersUserProfile
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
 * FPHSpedVAPIObjectsUsersUserProfile Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FPHSpedVAPIObjectsUsersUserProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FPH.SpedV.API.Objects.Users.UserProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'steam_id' => 'int',
        'income_sum' => 'float',
        'damage_sum' => 'float',
        'km_sum' => 'float',
        'real_name' => 'string',
        'about_me' => 'string',
        'birthday' => '\DateTime',
        'steam_img_url' => 'string',
        'residence' => 'string',
        'user_name' => 'string',
        'change_log' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserChangeLogEntry[]',
        'spedition' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition',
        'in_sped' => 'bool',
        'format_name' => 'string',
        'last_task_time' => '\DateTime',
        'main_bank_account' => '\OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount'
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
        'steam_id' => 'int64',
        'income_sum' => 'double',
        'damage_sum' => 'double',
        'km_sum' => 'double',
        'real_name' => null,
        'about_me' => null,
        'birthday' => 'date-time',
        'steam_img_url' => null,
        'residence' => null,
        'user_name' => null,
        'change_log' => null,
        'spedition' => null,
        'in_sped' => null,
        'format_name' => null,
        'last_task_time' => 'date-time',
        'main_bank_account' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'steam_id' => false,
        'income_sum' => false,
        'damage_sum' => false,
        'km_sum' => false,
        'real_name' => true,
        'about_me' => true,
        'birthday' => false,
        'steam_img_url' => true,
        'residence' => true,
        'user_name' => true,
        'change_log' => true,
        'spedition' => true,
        'in_sped' => false,
        'format_name' => true,
        'last_task_time' => false,
        'main_bank_account' => true
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
        'steam_id' => 'steamID',
        'income_sum' => 'incomeSum',
        'damage_sum' => 'damageSum',
        'km_sum' => 'kmSum',
        'real_name' => 'realName',
        'about_me' => 'aboutMe',
        'birthday' => 'birthday',
        'steam_img_url' => 'steamImgURL',
        'residence' => 'residence',
        'user_name' => 'userName',
        'change_log' => 'changeLog',
        'spedition' => 'spedition',
        'in_sped' => 'inSped',
        'format_name' => 'formatName',
        'last_task_time' => 'lastTaskTime',
        'main_bank_account' => 'mainBankAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'steam_id' => 'setSteamId',
        'income_sum' => 'setIncomeSum',
        'damage_sum' => 'setDamageSum',
        'km_sum' => 'setKmSum',
        'real_name' => 'setRealName',
        'about_me' => 'setAboutMe',
        'birthday' => 'setBirthday',
        'steam_img_url' => 'setSteamImgUrl',
        'residence' => 'setResidence',
        'user_name' => 'setUserName',
        'change_log' => 'setChangeLog',
        'spedition' => 'setSpedition',
        'in_sped' => 'setInSped',
        'format_name' => 'setFormatName',
        'last_task_time' => 'setLastTaskTime',
        'main_bank_account' => 'setMainBankAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'steam_id' => 'getSteamId',
        'income_sum' => 'getIncomeSum',
        'damage_sum' => 'getDamageSum',
        'km_sum' => 'getKmSum',
        'real_name' => 'getRealName',
        'about_me' => 'getAboutMe',
        'birthday' => 'getBirthday',
        'steam_img_url' => 'getSteamImgUrl',
        'residence' => 'getResidence',
        'user_name' => 'getUserName',
        'change_log' => 'getChangeLog',
        'spedition' => 'getSpedition',
        'in_sped' => 'getInSped',
        'format_name' => 'getFormatName',
        'last_task_time' => 'getLastTaskTime',
        'main_bank_account' => 'getMainBankAccount'
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
        $this->setIfExists('steam_id', $data ?? [], null);
        $this->setIfExists('income_sum', $data ?? [], null);
        $this->setIfExists('damage_sum', $data ?? [], null);
        $this->setIfExists('km_sum', $data ?? [], null);
        $this->setIfExists('real_name', $data ?? [], null);
        $this->setIfExists('about_me', $data ?? [], null);
        $this->setIfExists('birthday', $data ?? [], null);
        $this->setIfExists('steam_img_url', $data ?? [], null);
        $this->setIfExists('residence', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('change_log', $data ?? [], null);
        $this->setIfExists('spedition', $data ?? [], null);
        $this->setIfExists('in_sped', $data ?? [], null);
        $this->setIfExists('format_name', $data ?? [], null);
        $this->setIfExists('last_task_time', $data ?? [], null);
        $this->setIfExists('main_bank_account', $data ?? [], null);
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
        if ($this->container['steam_id'] === null) {
            $invalidProperties[] = "'steam_id' can't be null";
        }
        if ($this->container['income_sum'] === null) {
            $invalidProperties[] = "'income_sum' can't be null";
        }
        if ($this->container['damage_sum'] === null) {
            $invalidProperties[] = "'damage_sum' can't be null";
        }
        if ($this->container['km_sum'] === null) {
            $invalidProperties[] = "'km_sum' can't be null";
        }
        if ($this->container['real_name'] === null) {
            $invalidProperties[] = "'real_name' can't be null";
        }
        if ($this->container['about_me'] === null) {
            $invalidProperties[] = "'about_me' can't be null";
        }
        if ($this->container['birthday'] === null) {
            $invalidProperties[] = "'birthday' can't be null";
        }
        if ($this->container['steam_img_url'] === null) {
            $invalidProperties[] = "'steam_img_url' can't be null";
        }
        if ($this->container['residence'] === null) {
            $invalidProperties[] = "'residence' can't be null";
        }
        if ($this->container['user_name'] === null) {
            $invalidProperties[] = "'user_name' can't be null";
        }
        if ($this->container['change_log'] === null) {
            $invalidProperties[] = "'change_log' can't be null";
        }
        if ($this->container['spedition'] === null) {
            $invalidProperties[] = "'spedition' can't be null";
        }
        if ($this->container['in_sped'] === null) {
            $invalidProperties[] = "'in_sped' can't be null";
        }
        if ($this->container['format_name'] === null) {
            $invalidProperties[] = "'format_name' can't be null";
        }
        if ($this->container['last_task_time'] === null) {
            $invalidProperties[] = "'last_task_time' can't be null";
        }
        if ($this->container['main_bank_account'] === null) {
            $invalidProperties[] = "'main_bank_account' can't be null";
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
     * Gets steam_id
     *
     * @return int
     */
    public function getSteamId()
    {
        return $this->container['steam_id'];
    }

    /**
     * Sets steam_id
     *
     * @param int $steam_id steam_id
     *
     * @return self
     */
    public function setSteamId($steam_id)
    {
        if (is_null($steam_id)) {
            throw new \InvalidArgumentException('non-nullable steam_id cannot be null');
        }
        $this->container['steam_id'] = $steam_id;

        return $this;
    }

    /**
     * Gets income_sum
     *
     * @return float
     */
    public function getIncomeSum()
    {
        return $this->container['income_sum'];
    }

    /**
     * Sets income_sum
     *
     * @param float $income_sum income_sum
     *
     * @return self
     */
    public function setIncomeSum($income_sum)
    {
        if (is_null($income_sum)) {
            throw new \InvalidArgumentException('non-nullable income_sum cannot be null');
        }
        $this->container['income_sum'] = $income_sum;

        return $this;
    }

    /**
     * Gets damage_sum
     *
     * @return float
     */
    public function getDamageSum()
    {
        return $this->container['damage_sum'];
    }

    /**
     * Sets damage_sum
     *
     * @param float $damage_sum damage_sum
     *
     * @return self
     */
    public function setDamageSum($damage_sum)
    {
        if (is_null($damage_sum)) {
            throw new \InvalidArgumentException('non-nullable damage_sum cannot be null');
        }
        $this->container['damage_sum'] = $damage_sum;

        return $this;
    }

    /**
     * Gets km_sum
     *
     * @return float
     */
    public function getKmSum()
    {
        return $this->container['km_sum'];
    }

    /**
     * Sets km_sum
     *
     * @param float $km_sum km_sum
     *
     * @return self
     */
    public function setKmSum($km_sum)
    {
        if (is_null($km_sum)) {
            throw new \InvalidArgumentException('non-nullable km_sum cannot be null');
        }
        $this->container['km_sum'] = $km_sum;

        return $this;
    }

    /**
     * Gets real_name
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->container['real_name'];
    }

    /**
     * Sets real_name
     *
     * @param string $real_name real_name
     *
     * @return self
     */
    public function setRealName($real_name)
    {
        if (is_null($real_name)) {
            array_push($this->openAPINullablesSetToNull, 'real_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('real_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['real_name'] = $real_name;

        return $this;
    }

    /**
     * Gets about_me
     *
     * @return string
     */
    public function getAboutMe()
    {
        return $this->container['about_me'];
    }

    /**
     * Sets about_me
     *
     * @param string $about_me about_me
     *
     * @return self
     */
    public function setAboutMe($about_me)
    {
        if (is_null($about_me)) {
            array_push($this->openAPINullablesSetToNull, 'about_me');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('about_me', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['about_me'] = $about_me;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime $birthday birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        if (is_null($birthday)) {
            throw new \InvalidArgumentException('non-nullable birthday cannot be null');
        }
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets steam_img_url
     *
     * @return string
     */
    public function getSteamImgUrl()
    {
        return $this->container['steam_img_url'];
    }

    /**
     * Sets steam_img_url
     *
     * @param string $steam_img_url steam_img_url
     *
     * @return self
     */
    public function setSteamImgUrl($steam_img_url)
    {
        if (is_null($steam_img_url)) {
            array_push($this->openAPINullablesSetToNull, 'steam_img_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('steam_img_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['steam_img_url'] = $steam_img_url;

        return $this;
    }

    /**
     * Gets residence
     *
     * @return string
     */
    public function getResidence()
    {
        return $this->container['residence'];
    }

    /**
     * Sets residence
     *
     * @param string $residence residence
     *
     * @return self
     */
    public function setResidence($residence)
    {
        if (is_null($residence)) {
            array_push($this->openAPINullablesSetToNull, 'residence');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('residence', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['residence'] = $residence;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name user_name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            array_push($this->openAPINullablesSetToNull, 'user_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets change_log
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserChangeLogEntry[]
     */
    public function getChangeLog()
    {
        return $this->container['change_log'];
    }

    /**
     * Sets change_log
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsUsersUserChangeLogEntry[] $change_log change_log
     *
     * @return self
     */
    public function setChangeLog($change_log)
    {
        if (is_null($change_log)) {
            array_push($this->openAPINullablesSetToNull, 'change_log');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('change_log', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['change_log'] = $change_log;

        return $this;
    }

    /**
     * Gets spedition
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition
     */
    public function getSpedition()
    {
        return $this->container['spedition'];
    }

    /**
     * Sets spedition
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsSpeditionsSpedition $spedition spedition
     *
     * @return self
     */
    public function setSpedition($spedition)
    {
        if (is_null($spedition)) {
            array_push($this->openAPINullablesSetToNull, 'spedition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('spedition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['spedition'] = $spedition;

        return $this;
    }

    /**
     * Gets in_sped
     *
     * @return bool
     */
    public function getInSped()
    {
        return $this->container['in_sped'];
    }

    /**
     * Sets in_sped
     *
     * @param bool $in_sped in_sped
     *
     * @return self
     */
    public function setInSped($in_sped)
    {
        if (is_null($in_sped)) {
            throw new \InvalidArgumentException('non-nullable in_sped cannot be null');
        }
        $this->container['in_sped'] = $in_sped;

        return $this;
    }

    /**
     * Gets format_name
     *
     * @return string
     */
    public function getFormatName()
    {
        return $this->container['format_name'];
    }

    /**
     * Sets format_name
     *
     * @param string $format_name format_name
     *
     * @return self
     */
    public function setFormatName($format_name)
    {
        if (is_null($format_name)) {
            array_push($this->openAPINullablesSetToNull, 'format_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('format_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['format_name'] = $format_name;

        return $this;
    }

    /**
     * Gets last_task_time
     *
     * @return \DateTime
     */
    public function getLastTaskTime()
    {
        return $this->container['last_task_time'];
    }

    /**
     * Sets last_task_time
     *
     * @param \DateTime $last_task_time last_task_time
     *
     * @return self
     */
    public function setLastTaskTime($last_task_time)
    {
        if (is_null($last_task_time)) {
            throw new \InvalidArgumentException('non-nullable last_task_time cannot be null');
        }
        $this->container['last_task_time'] = $last_task_time;

        return $this;
    }

    /**
     * Gets main_bank_account
     *
     * @return \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount
     */
    public function getMainBankAccount()
    {
        return $this->container['main_bank_account'];
    }

    /**
     * Sets main_bank_account
     *
     * @param \OpenAPI\Client\Model\FPHSpedVAPIObjectsMoneyLiteBankAccount $main_bank_account main_bank_account
     *
     * @return self
     */
    public function setMainBankAccount($main_bank_account)
    {
        if (is_null($main_bank_account)) {
            array_push($this->openAPINullablesSetToNull, 'main_bank_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('main_bank_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['main_bank_account'] = $main_bank_account;

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

