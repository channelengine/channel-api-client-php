<?php
/**
 * ChannelOrderRequest
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
 * OpenAPI spec version: 2.5.2
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
 * ChannelOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channelOrderNo' => 'string',
        'lines' => '\ChannelEngine\Channel\ApiClient\Model\ChannelOrderLineRequest[]',
        'phone' => 'string',
        'email' => 'string',
        'companyRegistrationNo' => 'string',
        'vatNo' => 'string',
        'paymentMethod' => 'string',
        'shippingCostsInclVat' => 'double',
        'currencyCode' => 'string',
        'orderDate' => '\DateTime',
        'channelCustomerNo' => 'string',
        'billingAddress' => '\ChannelEngine\Channel\ApiClient\Model\Address',
        'shippingAddress' => '\ChannelEngine\Channel\ApiClient\Model\Address',
        'extraData' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channelOrderNo' => null,
        'lines' => null,
        'phone' => null,
        'email' => null,
        'companyRegistrationNo' => null,
        'vatNo' => null,
        'paymentMethod' => null,
        'shippingCostsInclVat' => 'double',
        'currencyCode' => null,
        'orderDate' => 'date-time',
        'channelCustomerNo' => null,
        'billingAddress' => null,
        'shippingAddress' => null,
        'extraData' => null
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
        'channelOrderNo' => 'ChannelOrderNo',
        'lines' => 'Lines',
        'phone' => 'Phone',
        'email' => 'Email',
        'companyRegistrationNo' => 'CompanyRegistrationNo',
        'vatNo' => 'VatNo',
        'paymentMethod' => 'PaymentMethod',
        'shippingCostsInclVat' => 'ShippingCostsInclVat',
        'currencyCode' => 'CurrencyCode',
        'orderDate' => 'OrderDate',
        'channelCustomerNo' => 'ChannelCustomerNo',
        'billingAddress' => 'BillingAddress',
        'shippingAddress' => 'ShippingAddress',
        'extraData' => 'ExtraData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelOrderNo' => 'setChannelOrderNo',
        'lines' => 'setLines',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'companyRegistrationNo' => 'setCompanyRegistrationNo',
        'vatNo' => 'setVatNo',
        'paymentMethod' => 'setPaymentMethod',
        'shippingCostsInclVat' => 'setShippingCostsInclVat',
        'currencyCode' => 'setCurrencyCode',
        'orderDate' => 'setOrderDate',
        'channelCustomerNo' => 'setChannelCustomerNo',
        'billingAddress' => 'setBillingAddress',
        'shippingAddress' => 'setShippingAddress',
        'extraData' => 'setExtraData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelOrderNo' => 'getChannelOrderNo',
        'lines' => 'getLines',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'companyRegistrationNo' => 'getCompanyRegistrationNo',
        'vatNo' => 'getVatNo',
        'paymentMethod' => 'getPaymentMethod',
        'shippingCostsInclVat' => 'getShippingCostsInclVat',
        'currencyCode' => 'getCurrencyCode',
        'orderDate' => 'getOrderDate',
        'channelCustomerNo' => 'getChannelCustomerNo',
        'billingAddress' => 'getBillingAddress',
        'shippingAddress' => 'getShippingAddress',
        'extraData' => 'getExtraData'
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
        $this->container['channelOrderNo'] = isset($data['channelOrderNo']) ? $data['channelOrderNo'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['companyRegistrationNo'] = isset($data['companyRegistrationNo']) ? $data['companyRegistrationNo'] : null;
        $this->container['vatNo'] = isset($data['vatNo']) ? $data['vatNo'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['shippingCostsInclVat'] = isset($data['shippingCostsInclVat']) ? $data['shippingCostsInclVat'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['orderDate'] = isset($data['orderDate']) ? $data['orderDate'] : null;
        $this->container['channelCustomerNo'] = isset($data['channelCustomerNo']) ? $data['channelCustomerNo'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['extraData'] = isset($data['extraData']) ? $data['extraData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channelOrderNo'] === null) {
            $invalidProperties[] = "'channelOrderNo' can't be null";
        }
        if ((strlen($this->container['channelOrderNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelOrderNo', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['channelOrderNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'channelOrderNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if (!is_null($this->container['phone']) && (strlen($this->container['phone']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['phone']) && (strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((strlen($this->container['email']) > 250)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 250.";
        }

        if ((strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['companyRegistrationNo']) && (strlen($this->container['companyRegistrationNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'companyRegistrationNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['companyRegistrationNo']) && (strlen($this->container['companyRegistrationNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'companyRegistrationNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['vatNo']) && (strlen($this->container['vatNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'vatNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['vatNo']) && (strlen($this->container['vatNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'vatNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
        }
        if ((strlen($this->container['paymentMethod']) > 50)) {
            $invalidProperties[] = "invalid value for 'paymentMethod', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['paymentMethod']) < 0)) {
            $invalidProperties[] = "invalid value for 'paymentMethod', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['shippingCostsInclVat'] === null) {
            $invalidProperties[] = "'shippingCostsInclVat' can't be null";
        }
        if ($this->container['currencyCode'] === null) {
            $invalidProperties[] = "'currencyCode' can't be null";
        }
        if ($this->container['orderDate'] === null) {
            $invalidProperties[] = "'orderDate' can't be null";
        }
        if (!is_null($this->container['channelCustomerNo']) && (strlen($this->container['channelCustomerNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelCustomerNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['channelCustomerNo']) && (strlen($this->container['channelCustomerNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'channelCustomerNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['billingAddress'] === null) {
            $invalidProperties[] = "'billingAddress' can't be null";
        }
        if ($this->container['shippingAddress'] === null) {
            $invalidProperties[] = "'shippingAddress' can't be null";
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

        if ($this->container['channelOrderNo'] === null) {
            return false;
        }
        if (strlen($this->container['channelOrderNo']) > 50) {
            return false;
        }
        if (strlen($this->container['channelOrderNo']) < 0) {
            return false;
        }
        if ($this->container['lines'] === null) {
            return false;
        }
        if (strlen($this->container['phone']) > 20) {
            return false;
        }
        if (strlen($this->container['phone']) < 0) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if (strlen($this->container['email']) > 250) {
            return false;
        }
        if (strlen($this->container['email']) < 0) {
            return false;
        }
        if (strlen($this->container['companyRegistrationNo']) > 50) {
            return false;
        }
        if (strlen($this->container['companyRegistrationNo']) < 0) {
            return false;
        }
        if (strlen($this->container['vatNo']) > 50) {
            return false;
        }
        if (strlen($this->container['vatNo']) < 0) {
            return false;
        }
        if ($this->container['paymentMethod'] === null) {
            return false;
        }
        if (strlen($this->container['paymentMethod']) > 50) {
            return false;
        }
        if (strlen($this->container['paymentMethod']) < 0) {
            return false;
        }
        if ($this->container['shippingCostsInclVat'] === null) {
            return false;
        }
        if ($this->container['currencyCode'] === null) {
            return false;
        }
        if ($this->container['orderDate'] === null) {
            return false;
        }
        if (strlen($this->container['channelCustomerNo']) > 50) {
            return false;
        }
        if (strlen($this->container['channelCustomerNo']) < 0) {
            return false;
        }
        if ($this->container['billingAddress'] === null) {
            return false;
        }
        if ($this->container['shippingAddress'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channelOrderNo
     *
     * @return string
     */
    public function getChannelOrderNo()
    {
        return $this->container['channelOrderNo'];
    }

    /**
     * Sets channelOrderNo
     *
     * @param string $channelOrderNo The unique order reference used by the Channel
     *
     * @return $this
     */
    public function setChannelOrderNo($channelOrderNo)
    {
        if ((strlen($channelOrderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelOrderNo when calling ChannelOrderRequest., must be smaller than or equal to 50.');
        }
        if ((strlen($channelOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $channelOrderNo when calling ChannelOrderRequest., must be bigger than or equal to 0.');
        }

        $this->container['channelOrderNo'] = $channelOrderNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\ChannelOrderLineRequest[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\ChannelOrderLineRequest[] $lines The order lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (strlen($phone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling ChannelOrderRequest., must be smaller than or equal to 20.');
        }
        if (!is_null($phone) && (strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling ChannelOrderRequest., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if ((strlen($email) > 250)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ChannelOrderRequest., must be smaller than or equal to 250.');
        }
        if ((strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ChannelOrderRequest., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets companyRegistrationNo
     *
     * @return string
     */
    public function getCompanyRegistrationNo()
    {
        return $this->container['companyRegistrationNo'];
    }

    /**
     * Sets companyRegistrationNo
     *
     * @param string $companyRegistrationNo companyRegistrationNo
     *
     * @return $this
     */
    public function setCompanyRegistrationNo($companyRegistrationNo)
    {
        if (!is_null($companyRegistrationNo) && (strlen($companyRegistrationNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $companyRegistrationNo when calling ChannelOrderRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($companyRegistrationNo) && (strlen($companyRegistrationNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $companyRegistrationNo when calling ChannelOrderRequest., must be bigger than or equal to 0.');
        }

        $this->container['companyRegistrationNo'] = $companyRegistrationNo;

        return $this;
    }

    /**
     * Gets vatNo
     *
     * @return string
     */
    public function getVatNo()
    {
        return $this->container['vatNo'];
    }

    /**
     * Sets vatNo
     *
     * @param string $vatNo vatNo
     *
     * @return $this
     */
    public function setVatNo($vatNo)
    {
        if (!is_null($vatNo) && (strlen($vatNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $vatNo when calling ChannelOrderRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($vatNo) && (strlen($vatNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $vatNo when calling ChannelOrderRequest., must be bigger than or equal to 0.');
        }

        $this->container['vatNo'] = $vatNo;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        if ((strlen($paymentMethod) > 50)) {
            throw new \InvalidArgumentException('invalid length for $paymentMethod when calling ChannelOrderRequest., must be smaller than or equal to 50.');
        }
        if ((strlen($paymentMethod) < 0)) {
            throw new \InvalidArgumentException('invalid length for $paymentMethod when calling ChannelOrderRequest., must be bigger than or equal to 0.');
        }

        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets shippingCostsInclVat
     *
     * @return double
     */
    public function getShippingCostsInclVat()
    {
        return $this->container['shippingCostsInclVat'];
    }

    /**
     * Sets shippingCostsInclVat
     *
     * @param double $shippingCostsInclVat The shipping fee including VAT  (in the shop's base currency calculated using the exchange rate at the time of ordering).
     *
     * @return $this
     */
    public function setShippingCostsInclVat($shippingCostsInclVat)
    {
        $this->container['shippingCostsInclVat'] = $shippingCostsInclVat;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime $orderDate orderDate
     *
     * @return $this
     */
    public function setOrderDate($orderDate)
    {
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets channelCustomerNo
     *
     * @return string
     */
    public function getChannelCustomerNo()
    {
        return $this->container['channelCustomerNo'];
    }

    /**
     * Sets channelCustomerNo
     *
     * @param string $channelCustomerNo channelCustomerNo
     *
     * @return $this
     */
    public function setChannelCustomerNo($channelCustomerNo)
    {
        if (!is_null($channelCustomerNo) && (strlen($channelCustomerNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelCustomerNo when calling ChannelOrderRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($channelCustomerNo) && (strlen($channelCustomerNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $channelCustomerNo when calling ChannelOrderRequest., must be bigger than or equal to 0.');
        }

        $this->container['channelCustomerNo'] = $channelCustomerNo;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\Address $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\Address $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets extraData
     *
     * @return map[string,string]
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     *
     * @param map[string,string] $extraData extraData
     *
     * @return $this
     */
    public function setExtraData($extraData)
    {
        $this->container['extraData'] = $extraData;

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


