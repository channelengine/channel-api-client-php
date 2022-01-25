<?php
/**
 * DataChangesProductType
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
 * The version of the OpenAPI document: 2.9.11
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
 * DataChangesProductType Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DataChangesProductType
{
    /**
     * Possible values of this enum
     */
    const SINGLE = 'SINGLE';
    const PARENT = 'PARENT';
    const CHILD = 'CHILD';
    const GRANDPARENT = 'GRANDPARENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SINGLE,
            self::PARENT,
            self::CHILD,
            self::GRANDPARENT,
        ];
    }
}


