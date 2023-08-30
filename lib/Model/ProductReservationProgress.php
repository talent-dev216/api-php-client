<?php
/**
 * ProductReservationProgress
 *
 * PHP version 5
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@carecloud.cz
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.26
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CrmCareCloud\Webservice\RestApi\Client\Model;

use \ArrayAccess;
use \CrmCareCloud\Webservice\RestApi\Client\ObjectSerializer;

/**
 * ProductReservationProgress Class Doc Comment
 *
 * @category Class
 * @description Product reservation progress history structure.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductReservationProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductReservationProgress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'reservation_progress_id' => 'int',
'reservation_progress_text' => 'string',
'reservation_progress_time' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'reservation_progress_id' => null,
'reservation_progress_text' => null,
'reservation_progress_time' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string,string>
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string,string|null>
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
        'reservation_progress_id' => 'reservation_progress_id',
'reservation_progress_text' => 'reservation_progress_text',
'reservation_progress_time' => 'reservation_progress_time'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reservation_progress_id' => 'setReservationProgressId',
'reservation_progress_text' => 'setReservationProgressText',
'reservation_progress_time' => 'setReservationProgressTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reservation_progress_id' => 'getReservationProgressId',
'reservation_progress_text' => 'getReservationProgressText',
'reservation_progress_time' => 'getReservationProgressTime'    ];

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
        $this->container['reservation_progress_id'] = isset($data['reservation_progress_id']) ? $data['reservation_progress_id'] : null;
        $this->container['reservation_progress_text'] = isset($data['reservation_progress_text']) ? $data['reservation_progress_text'] : null;
        $this->container['reservation_progress_time'] = isset($data['reservation_progress_time']) ? $data['reservation_progress_time'] : null;
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
     * Gets reservation_progress_id
     *
     * @return int
     */
    public function getReservationProgressId()
    {
        return $this->container['reservation_progress_id'];
    }

    /**
     * Sets reservation_progress_id
     *
     * @param int $reservation_progress_id ID of the product reservation progress.
     *
     * @return $this
     */
    public function setReservationProgressId($reservation_progress_id)
    {
        $this->container['reservation_progress_id'] = $reservation_progress_id;

        return $this;
    }

    /**
     * Gets reservation_progress_text
     *
     * @return string
     */
    public function getReservationProgressText()
    {
        return $this->container['reservation_progress_text'];
    }

    /**
     * Sets reservation_progress_text
     *
     * @param string $reservation_progress_text String of the product reservation progress.
     *
     * @return $this
     */
    public function setReservationProgressText($reservation_progress_text)
    {
        $this->container['reservation_progress_text'] = $reservation_progress_text;

        return $this;
    }

    /**
     * Gets reservation_progress_time
     *
     * @return string
     */
    public function getReservationProgressTime()
    {
        return $this->container['reservation_progress_time'];
    }

    /**
     * Sets reservation_progress_time
     *
     * @param string $reservation_progress_time Date and time of the change of the product reservation progress. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setReservationProgressTime($reservation_progress_time)
    {
        $this->container['reservation_progress_time'] = $reservation_progress_time;

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
