<?php
/**
 * ChannelOrderLineRequest
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
 * ChannelOrderLineRequest Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelOrderLineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelOrderLineRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channelProductNo' => 'string',
        'quantity' => 'int',
        'cancellationRequestedQuantity' => 'int',
        'unitPriceInclVat' => 'double',
        'feeFixed' => 'double',
        'feeRate' => 'double',
        'condition' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channelProductNo' => null,
        'quantity' => 'int32',
        'cancellationRequestedQuantity' => 'int32',
        'unitPriceInclVat' => 'double',
        'feeFixed' => 'double',
        'feeRate' => 'double',
        'condition' => null
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
        'channelProductNo' => 'ChannelProductNo',
        'quantity' => 'Quantity',
        'cancellationRequestedQuantity' => 'CancellationRequestedQuantity',
        'unitPriceInclVat' => 'UnitPriceInclVat',
        'feeFixed' => 'FeeFixed',
        'feeRate' => 'FeeRate',
        'condition' => 'Condition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelProductNo' => 'setChannelProductNo',
        'quantity' => 'setQuantity',
        'cancellationRequestedQuantity' => 'setCancellationRequestedQuantity',
        'unitPriceInclVat' => 'setUnitPriceInclVat',
        'feeFixed' => 'setFeeFixed',
        'feeRate' => 'setFeeRate',
        'condition' => 'setCondition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelProductNo' => 'getChannelProductNo',
        'quantity' => 'getQuantity',
        'cancellationRequestedQuantity' => 'getCancellationRequestedQuantity',
        'unitPriceInclVat' => 'getUnitPriceInclVat',
        'feeFixed' => 'getFeeFixed',
        'feeRate' => 'getFeeRate',
        'condition' => 'getCondition'
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

    const CONDITION__NEW = 'NEW';
    const CONDITION_NEW_REFURBISHED = 'NEW_REFURBISHED';
    const CONDITION_USED_AS_NEW = 'USED_AS_NEW';
    const CONDITION_USED_GOOD = 'USED_GOOD';
    const CONDITION_USED_REASONABLE = 'USED_REASONABLE';
    const CONDITION_USED_MEDIOCRE = 'USED_MEDIOCRE';
    const CONDITION_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__NEW,
            self::CONDITION_NEW_REFURBISHED,
            self::CONDITION_USED_AS_NEW,
            self::CONDITION_USED_GOOD,
            self::CONDITION_USED_REASONABLE,
            self::CONDITION_USED_MEDIOCRE,
            self::CONDITION_UNKNOWN,
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
        $this->container['channelProductNo'] = isset($data['channelProductNo']) ? $data['channelProductNo'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['cancellationRequestedQuantity'] = isset($data['cancellationRequestedQuantity']) ? $data['cancellationRequestedQuantity'] : null;
        $this->container['unitPriceInclVat'] = isset($data['unitPriceInclVat']) ? $data['unitPriceInclVat'] : null;
        $this->container['feeFixed'] = isset($data['feeFixed']) ? $data['feeFixed'] : null;
        $this->container['feeRate'] = isset($data['feeRate']) ? $data['feeRate'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channelProductNo'] === null) {
            $invalidProperties[] = "'channelProductNo' can't be null";
        }
        if ((strlen($this->container['channelProductNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelProductNo', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['channelProductNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'channelProductNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['cancellationRequestedQuantity'] === null) {
            $invalidProperties[] = "'cancellationRequestedQuantity' can't be null";
        }
        if ($this->container['unitPriceInclVat'] === null) {
            $invalidProperties[] = "'unitPriceInclVat' can't be null";
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!in_array($this->container['condition'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
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

        if ($this->container['channelProductNo'] === null) {
            return false;
        }
        if (strlen($this->container['channelProductNo']) > 50) {
            return false;
        }
        if (strlen($this->container['channelProductNo']) < 0) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['cancellationRequestedQuantity'] === null) {
            return false;
        }
        if ($this->container['unitPriceInclVat'] === null) {
            return false;
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!in_array($this->container['condition'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets channelProductNo
     *
     * @return string
     */
    public function getChannelProductNo()
    {
        return $this->container['channelProductNo'];
    }

    /**
     * Sets channelProductNo
     *
     * @param string $channelProductNo channelProductNo
     *
     * @return $this
     */
    public function setChannelProductNo($channelProductNo)
    {
        if ((strlen($channelProductNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelProductNo when calling ChannelOrderLineRequest., must be smaller than or equal to 50.');
        }
        if ((strlen($channelProductNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $channelProductNo when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['channelProductNo'] = $channelProductNo;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets cancellationRequestedQuantity
     *
     * @return int
     */
    public function getCancellationRequestedQuantity()
    {
        return $this->container['cancellationRequestedQuantity'];
    }

    /**
     * Sets cancellationRequestedQuantity
     *
     * @param int $cancellationRequestedQuantity The number of items for which cancellation was requested by the customer.  Some channels allow a customer to cancel an order until it has been shipped.  When an order has already been acknowledged in ChannelEngine, it can only be cancelled by creating a cancellation.  Use this field to check whether it is still possible to cancel the order. If this is the case, submit a cancellation to ChannelEngine
     *
     * @return $this
     */
    public function setCancellationRequestedQuantity($cancellationRequestedQuantity)
    {
        $this->container['cancellationRequestedQuantity'] = $cancellationRequestedQuantity;

        return $this;
    }

    /**
     * Gets unitPriceInclVat
     *
     * @return double
     */
    public function getUnitPriceInclVat()
    {
        return $this->container['unitPriceInclVat'];
    }

    /**
     * Sets unitPriceInclVat
     *
     * @param double $unitPriceInclVat The value of a single unit of the ordered product including VAT  (in the shop's base currency calculated using the exchange rate at the time of ordering).
     *
     * @return $this
     */
    public function setUnitPriceInclVat($unitPriceInclVat)
    {
        $this->container['unitPriceInclVat'] = $unitPriceInclVat;

        return $this;
    }

    /**
     * Gets feeFixed
     *
     * @return double
     */
    public function getFeeFixed()
    {
        return $this->container['feeFixed'];
    }

    /**
     * Sets feeFixed
     *
     * @param double $feeFixed A fixed fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable.
     *
     * @return $this
     */
    public function setFeeFixed($feeFixed)
    {
        $this->container['feeFixed'] = $feeFixed;

        return $this;
    }

    /**
     * Gets feeRate
     *
     * @return double
     */
    public function getFeeRate()
    {
        return $this->container['feeRate'];
    }

    /**
     * Sets feeRate
     *
     * @param double $feeRate A percentage fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable.
     *
     * @return $this
     */
    public function setFeeRate($feeRate)
    {
        $this->container['feeRate'] = $feeRate;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The condition of the product, this can be used to indicate that a product is a second-hand product
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($condition) && !in_array($condition, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'condition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition'] = $condition;

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


