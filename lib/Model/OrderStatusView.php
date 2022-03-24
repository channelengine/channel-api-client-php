<?php
/**
 * OrderStatusView
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
 * The version of the OpenAPI document: 2.10.0
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
 * OrderStatusView Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStatusView
{
    /**
     * Possible values of this enum
     */
    const IN_PROGRESS = 'IN_PROGRESS';
    const SHIPPED = 'SHIPPED';
    const IN_BACKORDER = 'IN_BACKORDER';
    const MANCO = 'MANCO';
    const CANCELED = 'CANCELED';
    const IN_COMBI = 'IN_COMBI';
    const CLOSED = 'CLOSED';
    const _NEW = 'NEW';
    const RETURNED = 'RETURNED';
    const REQUIRES_CORRECTION = 'REQUIRES_CORRECTION';
    const AWAITING_PAYMENT = 'AWAITING_PAYMENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_PROGRESS,
            self::SHIPPED,
            self::IN_BACKORDER,
            self::MANCO,
            self::CANCELED,
            self::IN_COMBI,
            self::CLOSED,
            self::_NEW,
            self::RETURNED,
            self::REQUIRES_CORRECTION,
            self::AWAITING_PAYMENT,
        ];
    }
}


