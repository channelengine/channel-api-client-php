<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine Channel API
 *
 * ChannelEngine API for channels
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\Channel\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Channel\ApiClient\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => 'string',
        'companyName' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'streetName' => 'string',
        'houseNr' => 'string',
        'houseNrAddition' => 'string',
        'zipCode' => 'string',
        'city' => 'string',
        'region' => 'string',
        'countryIso' => 'string',
        'original' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gender' => null,
        'companyName' => null,
        'firstName' => null,
        'lastName' => null,
        'streetName' => null,
        'houseNr' => null,
        'houseNrAddition' => null,
        'zipCode' => null,
        'city' => null,
        'region' => null,
        'countryIso' => null,
        'original' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'gender' => 'Gender',
        'companyName' => 'CompanyName',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'streetName' => 'StreetName',
        'houseNr' => 'HouseNr',
        'houseNrAddition' => 'HouseNrAddition',
        'zipCode' => 'ZipCode',
        'city' => 'City',
        'region' => 'Region',
        'countryIso' => 'CountryIso',
        'original' => 'Original'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gender' => 'setGender',
        'companyName' => 'setCompanyName',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'streetName' => 'setStreetName',
        'houseNr' => 'setHouseNr',
        'houseNrAddition' => 'setHouseNrAddition',
        'zipCode' => 'setZipCode',
        'city' => 'setCity',
        'region' => 'setRegion',
        'countryIso' => 'setCountryIso',
        'original' => 'setOriginal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gender' => 'getGender',
        'companyName' => 'getCompanyName',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'streetName' => 'getStreetName',
        'houseNr' => 'getHouseNr',
        'houseNrAddition' => 'getHouseNrAddition',
        'zipCode' => 'getZipCode',
        'city' => 'getCity',
        'region' => 'getRegion',
        'countryIso' => 'getCountryIso',
        'original' => 'getOriginal'
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
        return self::$swaggerModelName;
    }

    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    const GENDER_NOT_APPLICABLE = 'NOT_APPLICABLE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_NOT_APPLICABLE,
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
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['streetName'] = isset($data['streetName']) ? $data['streetName'] : null;
        $this->container['houseNr'] = isset($data['houseNr']) ? $data['houseNr'] : null;
        $this->container['houseNrAddition'] = isset($data['houseNrAddition']) ? $data['houseNrAddition'] : null;
        $this->container['zipCode'] = isset($data['zipCode']) ? $data['zipCode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['countryIso'] = isset($data['countryIso']) ? $data['countryIso'] : null;
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($this->container['gender'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['companyName']) && (strlen($this->container['companyName']) > 50)) {
            $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['companyName']) && (strlen($this->container['companyName']) < 0)) {
            $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['firstName']) && (strlen($this->container['firstName']) > 50)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['firstName']) && (strlen($this->container['firstName']) < 0)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['lastName']) && (strlen($this->container['lastName']) > 50)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['lastName']) && (strlen($this->container['lastName']) < 0)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['streetName']) && (strlen($this->container['streetName']) > 50)) {
            $invalidProperties[] = "invalid value for 'streetName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['streetName']) && (strlen($this->container['streetName']) < 0)) {
            $invalidProperties[] = "invalid value for 'streetName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['houseNr']) && (strlen($this->container['houseNr']) > 50)) {
            $invalidProperties[] = "invalid value for 'houseNr', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['houseNr']) && (strlen($this->container['houseNr']) < 0)) {
            $invalidProperties[] = "invalid value for 'houseNr', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['houseNrAddition']) && (strlen($this->container['houseNrAddition']) > 50)) {
            $invalidProperties[] = "invalid value for 'houseNrAddition', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['houseNrAddition']) && (strlen($this->container['houseNrAddition']) < 0)) {
            $invalidProperties[] = "invalid value for 'houseNrAddition', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['region']) && (strlen($this->container['region']) > 50)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['region']) && (strlen($this->container['region']) < 0)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['countryIso']) && (strlen($this->container['countryIso']) > 2)) {
            $invalidProperties[] = "invalid value for 'countryIso', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['countryIso']) && (strlen($this->container['countryIso']) < 0)) {
            $invalidProperties[] = "invalid value for 'countryIso', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['original']) && (strlen($this->container['original']) > 256)) {
            $invalidProperties[] = "invalid value for 'original', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['original']) && (strlen($this->container['original']) < 0)) {
            $invalidProperties[] = "invalid value for 'original', the character length must be bigger than or equal to 0.";
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

        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($this->container['gender'], $allowedValues)) {
            return false;
        }
        if (strlen($this->container['companyName']) > 50) {
            return false;
        }
        if (strlen($this->container['companyName']) < 0) {
            return false;
        }
        if (strlen($this->container['firstName']) > 50) {
            return false;
        }
        if (strlen($this->container['firstName']) < 0) {
            return false;
        }
        if (strlen($this->container['lastName']) > 50) {
            return false;
        }
        if (strlen($this->container['lastName']) < 0) {
            return false;
        }
        if (strlen($this->container['streetName']) > 50) {
            return false;
        }
        if (strlen($this->container['streetName']) < 0) {
            return false;
        }
        if (strlen($this->container['houseNr']) > 50) {
            return false;
        }
        if (strlen($this->container['houseNr']) < 0) {
            return false;
        }
        if (strlen($this->container['houseNrAddition']) > 50) {
            return false;
        }
        if (strlen($this->container['houseNrAddition']) < 0) {
            return false;
        }
        if (strlen($this->container['city']) > 50) {
            return false;
        }
        if (strlen($this->container['city']) < 0) {
            return false;
        }
        if (strlen($this->container['region']) > 50) {
            return false;
        }
        if (strlen($this->container['region']) < 0) {
            return false;
        }
        if (strlen($this->container['countryIso']) > 2) {
            return false;
        }
        if (strlen($this->container['countryIso']) < 0) {
            return false;
        }
        if (strlen($this->container['original']) > 256) {
            return false;
        }
        if (strlen($this->container['original']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender Optional. The customer's gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string $companyName Optional. Company addressed too.
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        if (!is_null($companyName) && (strlen($companyName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $companyName when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($companyName) && (strlen($companyName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $companyName when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName The first name of the customer
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!is_null($firstName) && (strlen($firstName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($firstName) && (strlen($firstName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName The last name of the customer (includes the surname prefix [tussenvoegsel] like 'de', 'van', 'du')
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        if (!is_null($lastName) && (strlen($lastName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($lastName) && (strlen($lastName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets streetName
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['streetName'];
    }

    /**
     * Sets streetName
     *
     * @param string $streetName The name of the street (without house number information)  This field might be empty if address validation is disabled in ChannelEngine
     *
     * @return $this
     */
    public function setStreetName($streetName)
    {
        if (!is_null($streetName) && (strlen($streetName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $streetName when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($streetName) && (strlen($streetName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $streetName when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['streetName'] = $streetName;

        return $this;
    }

    /**
     * Gets houseNr
     *
     * @return string
     */
    public function getHouseNr()
    {
        return $this->container['houseNr'];
    }

    /**
     * Sets houseNr
     *
     * @param string $houseNr The house number  This field might be empty if address validation is disabled in ChannelEngine
     *
     * @return $this
     */
    public function setHouseNr($houseNr)
    {
        if (!is_null($houseNr) && (strlen($houseNr) > 50)) {
            throw new \InvalidArgumentException('invalid length for $houseNr when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($houseNr) && (strlen($houseNr) < 0)) {
            throw new \InvalidArgumentException('invalid length for $houseNr when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['houseNr'] = $houseNr;

        return $this;
    }

    /**
     * Gets houseNrAddition
     *
     * @return string
     */
    public function getHouseNrAddition()
    {
        return $this->container['houseNrAddition'];
    }

    /**
     * Sets houseNrAddition
     *
     * @param string $houseNrAddition Optional. Addition to the house number  If the address is: Groenhazengracht 2c, the address will be:  StreetName: Groenhazengracht  HouseNo: 2  HouseNrAddition: c  This field might be empty if address validation is disabled in ChannelEngine
     *
     * @return $this
     */
    public function setHouseNrAddition($houseNrAddition)
    {
        if (!is_null($houseNrAddition) && (strlen($houseNrAddition) > 50)) {
            throw new \InvalidArgumentException('invalid length for $houseNrAddition when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($houseNrAddition) && (strlen($houseNrAddition) < 0)) {
            throw new \InvalidArgumentException('invalid length for $houseNrAddition when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['houseNrAddition'] = $houseNrAddition;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string $zipCode The zip or postal code
     *
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The name of the city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($city) && (strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region Optional. State/province/region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        if (!is_null($region) && (strlen($region) > 50)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be smaller than or equal to 50.');
        }
        if (!is_null($region) && (strlen($region) < 0)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets countryIso
     *
     * @return string
     */
    public function getCountryIso()
    {
        return $this->container['countryIso'];
    }

    /**
     * Sets countryIso
     *
     * @param string $countryIso For example: NL, BE, FR
     *
     * @return $this
     */
    public function setCountryIso($countryIso)
    {
        if (!is_null($countryIso) && (strlen($countryIso) > 2)) {
            throw new \InvalidArgumentException('invalid length for $countryIso when calling Address., must be smaller than or equal to 2.');
        }
        if (!is_null($countryIso) && (strlen($countryIso) < 0)) {
            throw new \InvalidArgumentException('invalid length for $countryIso when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['countryIso'] = $countryIso;

        return $this;
    }

    /**
     * Gets original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param string $original Optional. The address as a single string: use in case the address lines are entered  as single lines and later parsed into street, house number and house number addition.
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        if (!is_null($original) && (strlen($original) > 256)) {
            throw new \InvalidArgumentException('invalid length for $original when calling Address., must be smaller than or equal to 256.');
        }
        if (!is_null($original) && (strlen($original) < 0)) {
            throw new \InvalidArgumentException('invalid length for $original when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['original'] = $original;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


