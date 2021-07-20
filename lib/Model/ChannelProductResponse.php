<?php
/**
 * ChannelProductResponse
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
 * The version of the OpenAPI document: 2.9.8
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * ChannelProductResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelProductResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelProductResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'parentChannelProductNo' => 'string',
        'grandparentChannelProductNo' => 'string',
        'mappedFields' => 'array<string,string>',
        'extraData' => '\ChannelEngine\Channel\ApiClient\Model\ChannelProductExtraDataItemResponse[]',
        'name' => 'string',
        'description' => 'string',
        'brand' => 'string',
        'size' => 'string',
        'color' => 'string',
        'ean' => 'string',
        'manufacturerProductNumber' => 'string',
        'stock' => 'int',
        'price' => 'float',
        'mSRP' => 'float',
        'purchasePrice' => 'float',
        'vatRateType' => '\ChannelEngine\Channel\ApiClient\Model\VatRateType',
        'shippingCost' => 'float',
        'shippingTime' => 'string',
        'url' => 'string',
        'imageUrl' => 'string',
        'extraImageUrl1' => 'string',
        'extraImageUrl2' => 'string',
        'extraImageUrl3' => 'string',
        'extraImageUrl4' => 'string',
        'extraImageUrl5' => 'string',
        'extraImageUrl6' => 'string',
        'extraImageUrl7' => 'string',
        'extraImageUrl8' => 'string',
        'extraImageUrl9' => 'string',
        'categoryTrail' => 'string'
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
        'parentChannelProductNo' => null,
        'grandparentChannelProductNo' => null,
        'mappedFields' => null,
        'extraData' => null,
        'name' => null,
        'description' => null,
        'brand' => null,
        'size' => null,
        'color' => null,
        'ean' => null,
        'manufacturerProductNumber' => null,
        'stock' => 'int32',
        'price' => 'decimal',
        'mSRP' => 'decimal',
        'purchasePrice' => 'decimal',
        'vatRateType' => null,
        'shippingCost' => 'decimal',
        'shippingTime' => null,
        'url' => null,
        'imageUrl' => null,
        'extraImageUrl1' => null,
        'extraImageUrl2' => null,
        'extraImageUrl3' => null,
        'extraImageUrl4' => null,
        'extraImageUrl5' => null,
        'extraImageUrl6' => null,
        'extraImageUrl7' => null,
        'extraImageUrl8' => null,
        'extraImageUrl9' => null,
        'categoryTrail' => null
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
        'id' => 'Id',
        'parentChannelProductNo' => 'ParentChannelProductNo',
        'grandparentChannelProductNo' => 'GrandparentChannelProductNo',
        'mappedFields' => 'MappedFields',
        'extraData' => 'ExtraData',
        'name' => 'Name',
        'description' => 'Description',
        'brand' => 'Brand',
        'size' => 'Size',
        'color' => 'Color',
        'ean' => 'Ean',
        'manufacturerProductNumber' => 'ManufacturerProductNumber',
        'stock' => 'Stock',
        'price' => 'Price',
        'mSRP' => 'MSRP',
        'purchasePrice' => 'PurchasePrice',
        'vatRateType' => 'VatRateType',
        'shippingCost' => 'ShippingCost',
        'shippingTime' => 'ShippingTime',
        'url' => 'Url',
        'imageUrl' => 'ImageUrl',
        'extraImageUrl1' => 'ExtraImageUrl1',
        'extraImageUrl2' => 'ExtraImageUrl2',
        'extraImageUrl3' => 'ExtraImageUrl3',
        'extraImageUrl4' => 'ExtraImageUrl4',
        'extraImageUrl5' => 'ExtraImageUrl5',
        'extraImageUrl6' => 'ExtraImageUrl6',
        'extraImageUrl7' => 'ExtraImageUrl7',
        'extraImageUrl8' => 'ExtraImageUrl8',
        'extraImageUrl9' => 'ExtraImageUrl9',
        'categoryTrail' => 'CategoryTrail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parentChannelProductNo' => 'setParentChannelProductNo',
        'grandparentChannelProductNo' => 'setGrandparentChannelProductNo',
        'mappedFields' => 'setMappedFields',
        'extraData' => 'setExtraData',
        'name' => 'setName',
        'description' => 'setDescription',
        'brand' => 'setBrand',
        'size' => 'setSize',
        'color' => 'setColor',
        'ean' => 'setEan',
        'manufacturerProductNumber' => 'setManufacturerProductNumber',
        'stock' => 'setStock',
        'price' => 'setPrice',
        'mSRP' => 'setMSRP',
        'purchasePrice' => 'setPurchasePrice',
        'vatRateType' => 'setVatRateType',
        'shippingCost' => 'setShippingCost',
        'shippingTime' => 'setShippingTime',
        'url' => 'setUrl',
        'imageUrl' => 'setImageUrl',
        'extraImageUrl1' => 'setExtraImageUrl1',
        'extraImageUrl2' => 'setExtraImageUrl2',
        'extraImageUrl3' => 'setExtraImageUrl3',
        'extraImageUrl4' => 'setExtraImageUrl4',
        'extraImageUrl5' => 'setExtraImageUrl5',
        'extraImageUrl6' => 'setExtraImageUrl6',
        'extraImageUrl7' => 'setExtraImageUrl7',
        'extraImageUrl8' => 'setExtraImageUrl8',
        'extraImageUrl9' => 'setExtraImageUrl9',
        'categoryTrail' => 'setCategoryTrail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parentChannelProductNo' => 'getParentChannelProductNo',
        'grandparentChannelProductNo' => 'getGrandparentChannelProductNo',
        'mappedFields' => 'getMappedFields',
        'extraData' => 'getExtraData',
        'name' => 'getName',
        'description' => 'getDescription',
        'brand' => 'getBrand',
        'size' => 'getSize',
        'color' => 'getColor',
        'ean' => 'getEan',
        'manufacturerProductNumber' => 'getManufacturerProductNumber',
        'stock' => 'getStock',
        'price' => 'getPrice',
        'mSRP' => 'getMSRP',
        'purchasePrice' => 'getPurchasePrice',
        'vatRateType' => 'getVatRateType',
        'shippingCost' => 'getShippingCost',
        'shippingTime' => 'getShippingTime',
        'url' => 'getUrl',
        'imageUrl' => 'getImageUrl',
        'extraImageUrl1' => 'getExtraImageUrl1',
        'extraImageUrl2' => 'getExtraImageUrl2',
        'extraImageUrl3' => 'getExtraImageUrl3',
        'extraImageUrl4' => 'getExtraImageUrl4',
        'extraImageUrl5' => 'getExtraImageUrl5',
        'extraImageUrl6' => 'getExtraImageUrl6',
        'extraImageUrl7' => 'getExtraImageUrl7',
        'extraImageUrl8' => 'getExtraImageUrl8',
        'extraImageUrl9' => 'getExtraImageUrl9',
        'categoryTrail' => 'getCategoryTrail'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['parentChannelProductNo'] = $data['parentChannelProductNo'] ?? null;
        $this->container['grandparentChannelProductNo'] = $data['grandparentChannelProductNo'] ?? null;
        $this->container['mappedFields'] = $data['mappedFields'] ?? null;
        $this->container['extraData'] = $data['extraData'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['manufacturerProductNumber'] = $data['manufacturerProductNumber'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['mSRP'] = $data['mSRP'] ?? null;
        $this->container['purchasePrice'] = $data['purchasePrice'] ?? null;
        $this->container['vatRateType'] = $data['vatRateType'] ?? null;
        $this->container['shippingCost'] = $data['shippingCost'] ?? null;
        $this->container['shippingTime'] = $data['shippingTime'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['imageUrl'] = $data['imageUrl'] ?? null;
        $this->container['extraImageUrl1'] = $data['extraImageUrl1'] ?? null;
        $this->container['extraImageUrl2'] = $data['extraImageUrl2'] ?? null;
        $this->container['extraImageUrl3'] = $data['extraImageUrl3'] ?? null;
        $this->container['extraImageUrl4'] = $data['extraImageUrl4'] ?? null;
        $this->container['extraImageUrl5'] = $data['extraImageUrl5'] ?? null;
        $this->container['extraImageUrl6'] = $data['extraImageUrl6'] ?? null;
        $this->container['extraImageUrl7'] = $data['extraImageUrl7'] ?? null;
        $this->container['extraImageUrl8'] = $data['extraImageUrl8'] ?? null;
        $this->container['extraImageUrl9'] = $data['extraImageUrl9'] ?? null;
        $this->container['categoryTrail'] = $data['categoryTrail'] ?? null;
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
     * @param int|null $id An unique identifier which ChannelEngine uses to identify the product.  Needed in the call 'POST /v2/products/data'.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parentChannelProductNo
     *
     * @return string|null
     */
    public function getParentChannelProductNo()
    {
        return $this->container['parentChannelProductNo'];
    }

    /**
     * Sets parentChannelProductNo
     *
     * @param string|null $parentChannelProductNo The unique product reference used by the Channel for the parent product.
     *
     * @return self
     */
    public function setParentChannelProductNo($parentChannelProductNo)
    {
        $this->container['parentChannelProductNo'] = $parentChannelProductNo;

        return $this;
    }

    /**
     * Gets grandparentChannelProductNo
     *
     * @return string|null
     */
    public function getGrandparentChannelProductNo()
    {
        return $this->container['grandparentChannelProductNo'];
    }

    /**
     * Sets grandparentChannelProductNo
     *
     * @param string|null $grandparentChannelProductNo The unique product reference used by the Channel for the grandparent product.
     *
     * @return self
     */
    public function setGrandparentChannelProductNo($grandparentChannelProductNo)
    {
        $this->container['grandparentChannelProductNo'] = $grandparentChannelProductNo;

        return $this;
    }

    /**
     * Gets mappedFields
     *
     * @return array<string,string>|null
     */
    public function getMappedFields()
    {
        return $this->container['mappedFields'];
    }

    /**
     * Sets mappedFields
     *
     * @param array<string,string>|null $mappedFields A channel can require certain fields to be available. The channel  can provide ChannelEngine with this fields after which the merchants  will be able to fill in this field using custom conditions in ChannelEngine.
     *
     * @return self
     */
    public function setMappedFields($mappedFields)
    {
        $this->container['mappedFields'] = $mappedFields;

        return $this;
    }

    /**
     * Gets extraData
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\ChannelProductExtraDataItemResponse[]|null
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\ChannelProductExtraDataItemResponse[]|null $extraData An optional list of key-value pairs containing  extra data about this product. This data can be  sent to channels or used for filtering products.
     *
     * @return self
     */
    public function setExtraData($extraData)
    {
        $this->container['extraData'] = $extraData;

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
     * @param string|null $name The name of the product.
     *
     * @return self
     */
    public function setName($name)
    {
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
     * @param string|null $description A description of the product. Can contain these HTML tags:  div, span, pre, p, br, hr, hgroup, h1, h2, h3, h4, h5, h6, ul, ol, li, dl, dt, dd, strong, em, b, i, u, img, a, abbr, address, blockquote, area, audio, video, caption, table, tbody, td, tfoot, th, thead, tr.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The brand of the product.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size Optional. The size of the product (variant). E.g. fashion size (S-XL, 46-56, etc), width of the watch, etc..
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Optional. The color of the product (variant).
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean The EAN of GTIN of the product.
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets manufacturerProductNumber
     *
     * @return string|null
     */
    public function getManufacturerProductNumber()
    {
        return $this->container['manufacturerProductNumber'];
    }

    /**
     * Sets manufacturerProductNumber
     *
     * @param string|null $manufacturerProductNumber The unique product reference used by the manufacturer/vendor of the product.
     *
     * @return self
     */
    public function setManufacturerProductNumber($manufacturerProductNumber)
    {
        $this->container['manufacturerProductNumber'] = $manufacturerProductNumber;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return int|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int|null $stock The number of items in stock.
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Price, including VAT.
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets mSRP
     *
     * @return float|null
     */
    public function getMSRP()
    {
        return $this->container['mSRP'];
    }

    /**
     * Sets mSRP
     *
     * @param float|null $mSRP Manufacturer's suggested retail price.
     *
     * @return self
     */
    public function setMSRP($mSRP)
    {
        $this->container['mSRP'] = $mSRP;

        return $this;
    }

    /**
     * Gets purchasePrice
     *
     * @return float|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchasePrice'];
    }

    /**
     * Sets purchasePrice
     *
     * @param float|null $purchasePrice Optional. The purchase price of the product. Useful for repricing.
     *
     * @return self
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->container['purchasePrice'] = $purchasePrice;

        return $this;
    }

    /**
     * Gets vatRateType
     *
     * @return \ChannelEngine\Channel\ApiClient\Model\VatRateType|null
     */
    public function getVatRateType()
    {
        return $this->container['vatRateType'];
    }

    /**
     * Sets vatRateType
     *
     * @param \ChannelEngine\Channel\ApiClient\Model\VatRateType|null $vatRateType vatRateType
     *
     * @return self
     */
    public function setVatRateType($vatRateType)
    {
        $this->container['vatRateType'] = $vatRateType;

        return $this;
    }

    /**
     * Gets shippingCost
     *
     * @return float|null
     */
    public function getShippingCost()
    {
        return $this->container['shippingCost'];
    }

    /**
     * Sets shippingCost
     *
     * @param float|null $shippingCost Shipping cost of the product.
     *
     * @return self
     */
    public function setShippingCost($shippingCost)
    {
        $this->container['shippingCost'] = $shippingCost;

        return $this;
    }

    /**
     * Gets shippingTime
     *
     * @return string|null
     */
    public function getShippingTime()
    {
        return $this->container['shippingTime'];
    }

    /**
     * Sets shippingTime
     *
     * @param string|null $shippingTime A textual representation of the shippingtime.  For example, in Dutch: 'Op werkdagen voor 22:00 uur besteld, morgen in huis'.
     *
     * @return self
     */
    public function setShippingTime($shippingTime)
    {
        $this->container['shippingTime'] = $shippingTime;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url A URL pointing to the merchant's webpage  which displays this product.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|null $imageUrl A URL at which an image of this product  can be found.
     *
     * @return self
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets extraImageUrl1
     *
     * @return string|null
     */
    public function getExtraImageUrl1()
    {
        return $this->container['extraImageUrl1'];
    }

    /**
     * Sets extraImageUrl1
     *
     * @param string|null $extraImageUrl1 Url to an additional image of product (1).
     *
     * @return self
     */
    public function setExtraImageUrl1($extraImageUrl1)
    {
        $this->container['extraImageUrl1'] = $extraImageUrl1;

        return $this;
    }

    /**
     * Gets extraImageUrl2
     *
     * @return string|null
     */
    public function getExtraImageUrl2()
    {
        return $this->container['extraImageUrl2'];
    }

    /**
     * Sets extraImageUrl2
     *
     * @param string|null $extraImageUrl2 Url to an additional image of product (2).
     *
     * @return self
     */
    public function setExtraImageUrl2($extraImageUrl2)
    {
        $this->container['extraImageUrl2'] = $extraImageUrl2;

        return $this;
    }

    /**
     * Gets extraImageUrl3
     *
     * @return string|null
     */
    public function getExtraImageUrl3()
    {
        return $this->container['extraImageUrl3'];
    }

    /**
     * Sets extraImageUrl3
     *
     * @param string|null $extraImageUrl3 Url to an additional image of product (3).
     *
     * @return self
     */
    public function setExtraImageUrl3($extraImageUrl3)
    {
        $this->container['extraImageUrl3'] = $extraImageUrl3;

        return $this;
    }

    /**
     * Gets extraImageUrl4
     *
     * @return string|null
     */
    public function getExtraImageUrl4()
    {
        return $this->container['extraImageUrl4'];
    }

    /**
     * Sets extraImageUrl4
     *
     * @param string|null $extraImageUrl4 Url to an additional image of product (4).
     *
     * @return self
     */
    public function setExtraImageUrl4($extraImageUrl4)
    {
        $this->container['extraImageUrl4'] = $extraImageUrl4;

        return $this;
    }

    /**
     * Gets extraImageUrl5
     *
     * @return string|null
     */
    public function getExtraImageUrl5()
    {
        return $this->container['extraImageUrl5'];
    }

    /**
     * Sets extraImageUrl5
     *
     * @param string|null $extraImageUrl5 Url to an additional image of product (5).
     *
     * @return self
     */
    public function setExtraImageUrl5($extraImageUrl5)
    {
        $this->container['extraImageUrl5'] = $extraImageUrl5;

        return $this;
    }

    /**
     * Gets extraImageUrl6
     *
     * @return string|null
     */
    public function getExtraImageUrl6()
    {
        return $this->container['extraImageUrl6'];
    }

    /**
     * Sets extraImageUrl6
     *
     * @param string|null $extraImageUrl6 Url to an additional image of product (6).
     *
     * @return self
     */
    public function setExtraImageUrl6($extraImageUrl6)
    {
        $this->container['extraImageUrl6'] = $extraImageUrl6;

        return $this;
    }

    /**
     * Gets extraImageUrl7
     *
     * @return string|null
     */
    public function getExtraImageUrl7()
    {
        return $this->container['extraImageUrl7'];
    }

    /**
     * Sets extraImageUrl7
     *
     * @param string|null $extraImageUrl7 Url to an additional image of product (7).
     *
     * @return self
     */
    public function setExtraImageUrl7($extraImageUrl7)
    {
        $this->container['extraImageUrl7'] = $extraImageUrl7;

        return $this;
    }

    /**
     * Gets extraImageUrl8
     *
     * @return string|null
     */
    public function getExtraImageUrl8()
    {
        return $this->container['extraImageUrl8'];
    }

    /**
     * Sets extraImageUrl8
     *
     * @param string|null $extraImageUrl8 Url to an additional image of product (8).
     *
     * @return self
     */
    public function setExtraImageUrl8($extraImageUrl8)
    {
        $this->container['extraImageUrl8'] = $extraImageUrl8;

        return $this;
    }

    /**
     * Gets extraImageUrl9
     *
     * @return string|null
     */
    public function getExtraImageUrl9()
    {
        return $this->container['extraImageUrl9'];
    }

    /**
     * Sets extraImageUrl9
     *
     * @param string|null $extraImageUrl9 Url to an additional image of product (9).
     *
     * @return self
     */
    public function setExtraImageUrl9($extraImageUrl9)
    {
        $this->container['extraImageUrl9'] = $extraImageUrl9;

        return $this;
    }

    /**
     * Gets categoryTrail
     *
     * @return string|null
     */
    public function getCategoryTrail()
    {
        return $this->container['categoryTrail'];
    }

    /**
     * Sets categoryTrail
     *
     * @param string|null $categoryTrail The category to which this product belongs.  Please supply this field in the following format:  'maincategory > category > subcategory'  For example:  'vehicles > bikes > mountainbike'.
     *
     * @return self
     */
    public function setCategoryTrail($categoryTrail)
    {
        $this->container['categoryTrail'] = $categoryTrail;

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


