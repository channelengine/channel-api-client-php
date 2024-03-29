<?php
/**
 * ChannelOrderLineRequest
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * ChannelOrderLineRequest Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelOrderLineRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelOrderLineRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channelProductNo' => 'string',
        'merchantProductNo' => 'string',
        'quantity' => 'int',
        'cancellationRequestedQuantity' => 'int',
        'unitPriceInclVat' => 'float',
        'feeFixed' => 'float',
        'feeRate' => 'float',
        'condition' => '\ChannelEngine\Channel\ApiClient\Model\Condition',
        'expectedDeliveryDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channelProductNo' => null,
        'merchantProductNo' => null,
        'quantity' => 'int32',
        'cancellationRequestedQuantity' => 'int32',
        'unitPriceInclVat' => 'decimal',
        'feeFixed' => 'decimal',
        'feeRate' => 'decimal',
        'condition' => null,
        'expectedDeliveryDate' => 'date-time'
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
        'channelProductNo' => 'ChannelProductNo',
        'merchantProductNo' => 'MerchantProductNo',
        'quantity' => 'Quantity',
        'cancellationRequestedQuantity' => 'CancellationRequestedQuantity',
        'unitPriceInclVat' => 'UnitPriceInclVat',
        'feeFixed' => 'FeeFixed',
        'feeRate' => 'FeeRate',
        'condition' => 'Condition',
        'expectedDeliveryDate' => 'ExpectedDeliveryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelProductNo' => 'setChannelProductNo',
        'merchantProductNo' => 'setMerchantProductNo',
        'quantity' => 'setQuantity',
        'cancellationRequestedQuantity' => 'setCancellationRequestedQuantity',
        'unitPriceInclVat' => 'setUnitPriceInclVat',
        'feeFixed' => 'setFeeFixed',
        'feeRate' => 'setFeeRate',
        'condition' => 'setCondition',
        'expectedDeliveryDate' => 'setExpectedDeliveryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelProductNo' => 'getChannelProductNo',
        'merchantProductNo' => 'getMerchantProductNo',
        'quantity' => 'getQuantity',
        'cancellationRequestedQuantity' => 'getCancellationRequestedQuantity',
        'unitPriceInclVat' => 'getUnitPriceInclVat',
        'feeFixed' => 'getFeeFixed',
        'feeRate' => 'getFeeRate',
        'condition' => 'getCondition',
        'expectedDeliveryDate' => 'getExpectedDeliveryDate'
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
        $this->container['channelProductNo'] = $data['channelProductNo'] ?? null;
        $this->container['merchantProductNo'] = $data['merchantProductNo'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['cancellationRequestedQuantity'] = $data['cancellationRequestedQuantity'] ?? null;
        $this->container['unitPriceInclVat'] = $data['unitPriceInclVat'] ?? null;
        $this->container['feeFixed'] = $data['feeFixed'] ?? null;
        $this->container['feeRate'] = $data['feeRate'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['expectedDeliveryDate'] = $data['expectedDeliveryDate'] ?? null;
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
        if ((mb_strlen($this->container['channelProductNo']) > 60)) {
            $invalidProperties[] = "invalid value for 'channelProductNo', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['channelProductNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'channelProductNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchantProductNo']) && (mb_strlen($this->container['merchantProductNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'merchantProductNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['merchantProductNo']) && (mb_strlen($this->container['merchantProductNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantProductNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cancellationRequestedQuantity']) && ($this->container['cancellationRequestedQuantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'cancellationRequestedQuantity', must be bigger than or equal to 0.";
        }

        if ($this->container['unitPriceInclVat'] === null) {
            $invalidProperties[] = "'unitPriceInclVat' can't be null";
        }
        if (($this->container['unitPriceInclVat'] < 0)) {
            $invalidProperties[] = "invalid value for 'unitPriceInclVat', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['feeFixed']) && ($this->container['feeFixed'] < 0)) {
            $invalidProperties[] = "invalid value for 'feeFixed', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['feeRate']) && ($this->container['feeRate'] < 0)) {
            $invalidProperties[] = "invalid value for 'feeRate', must be bigger than or equal to 0.";
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
     * @param string $channelProductNo The unique product reference used by the channel.
     *
     * @return self
     */
    public function setChannelProductNo($channelProductNo)
    {
        if ((mb_strlen($channelProductNo) > 60)) {
            throw new \InvalidArgumentException('invalid length for $channelProductNo when calling ChannelOrderLineRequest., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($channelProductNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $channelProductNo when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['channelProductNo'] = $channelProductNo;

        return $this;
    }

    /**
     * Gets merchantProductNo
     *
     * @return string|null
     */
    public function getMerchantProductNo()
    {
        return $this->container['merchantProductNo'];
    }

    /**
     * Sets merchantProductNo
     *
     * @param string|null $merchantProductNo The unique product reference used by the merchant.
     *
     * @return self
     */
    public function setMerchantProductNo($merchantProductNo)
    {
        if (!is_null($merchantProductNo) && (mb_strlen($merchantProductNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantProductNo when calling ChannelOrderLineRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($merchantProductNo) && (mb_strlen($merchantProductNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantProductNo when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantProductNo'] = $merchantProductNo;

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
     * @param int $quantity The number of items of the product.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {

        if (($quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets cancellationRequestedQuantity
     *
     * @return int|null
     */
    public function getCancellationRequestedQuantity()
    {
        return $this->container['cancellationRequestedQuantity'];
    }

    /**
     * Sets cancellationRequestedQuantity
     *
     * @param int|null $cancellationRequestedQuantity The number of items for which cancellation was requested by the customer.  Some channels allow a customer to cancel an order until it has been shipped.  When an order has already been acknowledged in ChannelEngine, it can only be cancelled by creating a cancellation.  Use this field to check whether it is still possible to cancel the order. If this is the case, submit a cancellation to ChannelEngine.
     *
     * @return self
     */
    public function setCancellationRequestedQuantity($cancellationRequestedQuantity)
    {

        if (!is_null($cancellationRequestedQuantity) && ($cancellationRequestedQuantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $cancellationRequestedQuantity when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['cancellationRequestedQuantity'] = $cancellationRequestedQuantity;

        return $this;
    }

    /**
     * Gets unitPriceInclVat
     *
     * @return float
     */
    public function getUnitPriceInclVat()
    {
        return $this->container['unitPriceInclVat'];
    }

    /**
     * Sets unitPriceInclVat
     *
     * @param float $unitPriceInclVat The value of a single unit of the ordered product including VAT  (in the shop's base currency calculated using the exchange rate at the time of ordering).
     *
     * @return self
     */
    public function setUnitPriceInclVat($unitPriceInclVat)
    {

        if (($unitPriceInclVat < 0)) {
            throw new \InvalidArgumentException('invalid value for $unitPriceInclVat when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['unitPriceInclVat'] = $unitPriceInclVat;

        return $this;
    }

    /**
     * Gets feeFixed
     *
     * @return float|null
     */
    public function getFeeFixed()
    {
        return $this->container['feeFixed'];
    }

    /**
     * Sets feeFixed
     *
     * @param float|null $feeFixed A fixed fee that is charged by the Channel for this orderline.  This fee rate is based on the currency of the Channel  This field is optional, send 0 if not applicable.
     *
     * @return self
     */
    public function setFeeFixed($feeFixed)
    {

        if (!is_null($feeFixed) && ($feeFixed < 0)) {
            throw new \InvalidArgumentException('invalid value for $feeFixed when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['feeFixed'] = $feeFixed;

        return $this;
    }

    /**
     * Gets feeRate
     *
     * @return float|null
     */
    public function getFeeRate()
    {
        return $this->container['feeRate'];
    }

    /**
     * Sets feeRate
     *
     * @param float|null $feeRate A percentage fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable.
     *
     * @return self
     */
    public function setFeeRate($feeRate)
    {

        if (!is_null($feeRate) && ($feeRate < 0)) {
            throw new \InvalidArgumentException('invalid value for $feeRate when calling ChannelOrderLineRequest., must be bigger than or equal to 0.');
        }

        $this->container['feeRate'] = $feeRate;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\Condition|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\Condition|null $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets expectedDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expectedDeliveryDate'];
    }

    /**
     * Sets expectedDeliveryDate
     *
     * @param \DateTime|null $expectedDeliveryDate Expected delivery date from channels, empty if channels not support this value
     *
     * @return self
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {
        $this->container['expectedDeliveryDate'] = $expectedDeliveryDate;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


