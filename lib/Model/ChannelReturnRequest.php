<?php
/**
 * ChannelReturnRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Channel API
 *
 * ChannelEngine API for channels
 *
 * The version of the OpenAPI document: 2.9.3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Channel\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Channel\ApiClient\ObjectSerializer;

/**
 * ChannelReturnRequest Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelReturnRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelReturnRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channelOrderNo' => 'string',
        'merchantOrderNo' => 'string',
        'channelReference' => 'string',
        'keyIsMerchantOrderNo' => 'bool',
        'keyIsMerchantProductNo' => 'bool',
        'lines' => '\ChannelEngine\Channel\ApiClient\Model\ChannelReturnLineRequest[]',
        'id' => 'int',
        'reason' => '\ChannelEngine\Channel\ApiClient\Model\ReturnReason',
        'customerComment' => 'string',
        'merchantComment' => 'string',
        'refundInclVat' => 'float',
        'refundExclVat' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'channelOrderNo' => null,
        'merchantOrderNo' => null,
        'channelReference' => null,
        'keyIsMerchantOrderNo' => null,
        'keyIsMerchantProductNo' => null,
        'lines' => null,
        'id' => 'int32',
        'reason' => null,
        'customerComment' => null,
        'merchantComment' => null,
        'refundInclVat' => 'decimal',
        'refundExclVat' => 'decimal'
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'channelOrderNo' => 'ChannelOrderNo',
        'merchantOrderNo' => 'MerchantOrderNo',
        'channelReference' => 'ChannelReference',
        'keyIsMerchantOrderNo' => 'KeyIsMerchantOrderNo',
        'keyIsMerchantProductNo' => 'KeyIsMerchantProductNo',
        'lines' => 'Lines',
        'id' => 'Id',
        'reason' => 'Reason',
        'customerComment' => 'CustomerComment',
        'merchantComment' => 'MerchantComment',
        'refundInclVat' => 'RefundInclVat',
        'refundExclVat' => 'RefundExclVat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelOrderNo' => 'setChannelOrderNo',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'channelReference' => 'setChannelReference',
        'keyIsMerchantOrderNo' => 'setKeyIsMerchantOrderNo',
        'keyIsMerchantProductNo' => 'setKeyIsMerchantProductNo',
        'lines' => 'setLines',
        'id' => 'setId',
        'reason' => 'setReason',
        'customerComment' => 'setCustomerComment',
        'merchantComment' => 'setMerchantComment',
        'refundInclVat' => 'setRefundInclVat',
        'refundExclVat' => 'setRefundExclVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelOrderNo' => 'getChannelOrderNo',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'channelReference' => 'getChannelReference',
        'keyIsMerchantOrderNo' => 'getKeyIsMerchantOrderNo',
        'keyIsMerchantProductNo' => 'getKeyIsMerchantProductNo',
        'lines' => 'getLines',
        'id' => 'getId',
        'reason' => 'getReason',
        'customerComment' => 'getCustomerComment',
        'merchantComment' => 'getMerchantComment',
        'refundInclVat' => 'getRefundInclVat',
        'refundExclVat' => 'getRefundExclVat'
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
        $this->container['channelOrderNo'] = isset($data['channelOrderNo']) ? $data['channelOrderNo'] : null;
        $this->container['merchantOrderNo'] = isset($data['merchantOrderNo']) ? $data['merchantOrderNo'] : null;
        $this->container['channelReference'] = isset($data['channelReference']) ? $data['channelReference'] : null;
        $this->container['keyIsMerchantOrderNo'] = isset($data['keyIsMerchantOrderNo']) ? $data['keyIsMerchantOrderNo'] : null;
        $this->container['keyIsMerchantProductNo'] = isset($data['keyIsMerchantProductNo']) ? $data['keyIsMerchantProductNo'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['customerComment'] = isset($data['customerComment']) ? $data['customerComment'] : null;
        $this->container['merchantComment'] = isset($data['merchantComment']) ? $data['merchantComment'] : null;
        $this->container['refundInclVat'] = isset($data['refundInclVat']) ? $data['refundInclVat'] : null;
        $this->container['refundExclVat'] = isset($data['refundExclVat']) ? $data['refundExclVat'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channelReference'] === null) {
            $invalidProperties[] = "'channelReference' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be bigger than or equal to 0.";
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
     * Gets channelOrderNo
     *
     * @return string|null
     */
    public function getChannelOrderNo()
    {
        return $this->container['channelOrderNo'];
    }

    /**
     * Sets channelOrderNo
     *
     * @param string|null $channelOrderNo The unique order reference used by the Channel.
     *
     * @return $this
     */
    public function setChannelOrderNo($channelOrderNo)
    {
        $this->container['channelOrderNo'] = $channelOrderNo;

        return $this;
    }

    /**
     * Gets merchantOrderNo
     *
     * @return string|null
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string|null $merchantOrderNo The unique order reference used by the Merchant (sku).
     *
     * @return $this
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets channelReference
     *
     * @return string
     */
    public function getChannelReference()
    {
        return $this->container['channelReference'];
    }

    /**
     * Sets channelReference
     *
     * @param string $channelReference The unique return reference used by the Channel.
     *
     * @return $this
     */
    public function setChannelReference($channelReference)
    {
        $this->container['channelReference'] = $channelReference;

        return $this;
    }

    /**
     * Gets keyIsMerchantOrderNo
     *
     * @return bool|null
     */
    public function getKeyIsMerchantOrderNo()
    {
        return $this->container['keyIsMerchantOrderNo'];
    }

    /**
     * Sets keyIsMerchantOrderNo
     *
     * @param bool|null $keyIsMerchantOrderNo Optional. Is the MON used as key for the order (default value is false).
     *
     * @return $this
     */
    public function setKeyIsMerchantOrderNo($keyIsMerchantOrderNo)
    {
        $this->container['keyIsMerchantOrderNo'] = $keyIsMerchantOrderNo;

        return $this;
    }

    /**
     * Gets keyIsMerchantProductNo
     *
     * @return bool|null
     */
    public function getKeyIsMerchantProductNo()
    {
        return $this->container['keyIsMerchantProductNo'];
    }

    /**
     * Sets keyIsMerchantProductNo
     *
     * @param bool|null $keyIsMerchantProductNo Optional. Is the MPN used as key for the product (default value is false).
     *
     * @return $this
     */
    public function setKeyIsMerchantProductNo($keyIsMerchantProductNo)
    {
        $this->container['keyIsMerchantProductNo'] = $keyIsMerchantProductNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\ChannelReturnLineRequest[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\ChannelReturnLineRequest[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The unique return reference used by ChannelEngine.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\ReturnReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\ReturnReason|null $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets customerComment
     *
     * @return string|null
     */
    public function getCustomerComment()
    {
        return $this->container['customerComment'];
    }

    /**
     * Sets customerComment
     *
     * @param string|null $customerComment Optional. Comment of customer on the (reason of) the return.
     *
     * @return $this
     */
    public function setCustomerComment($customerComment)
    {
        if (!is_null($customerComment) && (mb_strlen($customerComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling ChannelReturnRequest., must be smaller than or equal to 4001.');
        }
        if (!is_null($customerComment) && (mb_strlen($customerComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling ChannelReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['customerComment'] = $customerComment;

        return $this;
    }

    /**
     * Gets merchantComment
     *
     * @return string|null
     */
    public function getMerchantComment()
    {
        return $this->container['merchantComment'];
    }

    /**
     * Sets merchantComment
     *
     * @param string|null $merchantComment Optional. Comment of merchant on the return.
     *
     * @return $this
     */
    public function setMerchantComment($merchantComment)
    {
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling ChannelReturnRequest., must be smaller than or equal to 4001.');
        }
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling ChannelReturnRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantComment'] = $merchantComment;

        return $this;
    }

    /**
     * Gets refundInclVat
     *
     * @return float|null
     */
    public function getRefundInclVat()
    {
        return $this->container['refundInclVat'];
    }

    /**
     * Sets refundInclVat
     *
     * @param float|null $refundInclVat Refund amount incl. VAT.
     *
     * @return $this
     */
    public function setRefundInclVat($refundInclVat)
    {
        $this->container['refundInclVat'] = $refundInclVat;

        return $this;
    }

    /**
     * Gets refundExclVat
     *
     * @return float|null
     */
    public function getRefundExclVat()
    {
        return $this->container['refundExclVat'];
    }

    /**
     * Sets refundExclVat
     *
     * @param float|null $refundExclVat Refund amount excl. VAT.
     *
     * @return $this
     */
    public function setRefundExclVat($refundExclVat)
    {
        $this->container['refundExclVat'] = $refundExclVat;

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


