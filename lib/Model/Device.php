<?php
/**
 * Device
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
 * Device Class Doc Comment
 *
 * @category Class
 * @description Structure describes the client device or browser.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Device implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'device_id' => 'string',
'device_system' => 'string',
'device_name' => 'string',
'device_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'device_id' => null,
'device_system' => null,
'device_name' => null,
'device_type' => null    ];

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
        'device_id' => 'device_id',
'device_system' => 'device_system',
'device_name' => 'device_name',
'device_type' => 'device_type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_id' => 'setDeviceId',
'device_system' => 'setDeviceSystem',
'device_name' => 'setDeviceName',
'device_type' => 'setDeviceType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_id' => 'getDeviceId',
'device_system' => 'getDeviceSystem',
'device_name' => 'getDeviceName',
'device_type' => 'getDeviceType'    ];

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
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['device_system'] = isset($data['device_system']) ? $data['device_system'] : null;
        $this->container['device_name'] = isset($data['device_name']) ? $data['device_name'] : null;
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['device_id'] === null) {
            $invalidProperties[] = "'device_id' can't be null";
        }
        if ($this->container['device_system'] === null) {
            $invalidProperties[] = "'device_system' can't be null";
        }
        if ($this->container['device_name'] === null) {
            $invalidProperties[] = "'device_name' can't be null";
        }
        if ($this->container['device_type'] === null) {
            $invalidProperties[] = "'device_type' can't be null";
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
     * Gets device_id
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string $device_id The unique ID of the client device.
     *
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets device_system
     *
     * @return string
     */
    public function getDeviceSystem()
    {
        return $this->container['device_system'];
    }

    /**
     * Sets device_system
     *
     * @param string $device_system Operation system of the device.
     *
     * @return $this
     */
    public function setDeviceSystem($device_system)
    {
        $this->container['device_system'] = $device_system;

        return $this;
    }

    /**
     * Gets device_name
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->container['device_name'];
    }

    /**
     * Sets device_name
     *
     * @param string $device_name The name of the device.
     *
     * @return $this
     */
    public function setDeviceName($device_name)
    {
        $this->container['device_name'] = $device_name;

        return $this;
    }

    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type Type of device by producer (product line).
     *
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $this->container['device_type'] = $device_type;

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
