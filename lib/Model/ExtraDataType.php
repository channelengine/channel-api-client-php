<?php
/**
 * ExtraDataType
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
use \ChannelEngine\Channel\ApiClient\ObjectSerializer;

/**
 * ExtraDataType Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExtraDataType
{
    /**
     * Possible values of this enum
     */
    const TEXT = 'TEXT';

    const NUMBER = 'NUMBER';

    const URL = 'URL';

    const IMAGEURL = 'IMAGEURL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::NUMBER,
            self::URL,
            self::IMAGEURL
        ];
    }
}


