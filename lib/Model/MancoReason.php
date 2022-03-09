<?php
/**
 * MancoReason
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
 * The version of the OpenAPI document: 2.9.12
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Channel\ApiClient\Model;
use \ChannelEngine\Channel\ApiClient\ObjectSerializer;

/**
 * MancoReason Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MancoReason
{
    /**
     * Possible values of this enum
     */
    const NOT_IN_STOCK = 'NOT_IN_STOCK';
    const DAMAGED = 'DAMAGED';
    const INCOMPLETE = 'INCOMPLETE';
    const CLIENT_CANCELLED = 'CLIENT_CANCELLED';
    const INVALID_ADDRESS = 'INVALID_ADDRESS';
    const OTHER = 'OTHER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_IN_STOCK,
            self::DAMAGED,
            self::INCOMPLETE,
            self::CLIENT_CANCELLED,
            self::INVALID_ADDRESS,
            self::OTHER,
        ];
    }
}


