<?php
/**
 * Segment
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
 * Swagger Codegen version: 3.0.46
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
 * Segment Class Doc Comment
 *
 * @category Class
 * @description Segment structure.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Segment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Segment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'segment_id' => 'string',
        'name' => 'string',
        'segment_group_id' => 'string',
        'segment_picture_url' => 'string',
        'note' => 'string',
        'last_change' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'segment_id' => null,
        'name' => null,
        'segment_group_id' => null,
        'segment_picture_url' => null,
        'note' => null,
        'last_change' => null
    ];

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
        'segment_id' => 'segment_id',
        'name' => 'name',
        'segment_group_id' => 'segment_group_id',
        'segment_picture_url' => 'segment_picture_url',
        'note' => 'note',
        'last_change' => 'last_change'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'segment_id' => 'setSegmentId',
        'name' => 'setName',
        'segment_group_id' => 'setSegmentGroupId',
        'segment_picture_url' => 'setSegmentPictureUrl',
        'note' => 'setNote',
        'last_change' => 'setLastChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'segment_id' => 'getSegmentId',
        'name' => 'getName',
        'segment_group_id' => 'getSegmentGroupId',
        'segment_picture_url' => 'getSegmentPictureUrl',
        'note' => 'getNote',
        'last_change' => 'getLastChange'
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
        $this->container['segment_id'] = isset($data['segment_id']) ? $data['segment_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['segment_group_id'] = isset($data['segment_group_id']) ? $data['segment_group_id'] : null;
        $this->container['segment_picture_url'] = isset($data['segment_picture_url']) ? $data['segment_picture_url'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['last_change'] = isset($data['last_change']) ? $data['last_change'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets segment_id
     *
     * @return string
     */
    public function getSegmentId()
    {
        return $this->container['segment_id'];
    }

    /**
     * Sets segment_id
     *
     * @param string $segment_id The unique ID of the segment.
     *
     * @return $this
     */
    public function setSegmentId($segment_id)
    {
        $this->container['segment_id'] = $segment_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the segment.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets segment_group_id
     *
     * @return string
     */
    public function getSegmentGroupId()
    {
        return $this->container['segment_group_id'];
    }

    /**
     * Sets segment_group_id
     *
     * @param string $segment_group_id Segment group ID from the resource [GET /segment-groups](#tag/SegmentGroups).
     *
     * @return $this
     */
    public function setSegmentGroupId($segment_group_id)
    {
        $this->container['segment_group_id'] = $segment_group_id;

        return $this;
    }

    /**
     * Gets segment_picture_url
     *
     * @return string
     */
    public function getSegmentPictureUrl()
    {
        return $this->container['segment_picture_url'];
    }

    /**
     * Sets segment_picture_url
     *
     * @param string $segment_picture_url URL of the picture assigned to the segment.
     *
     * @return $this
     */
    public function setSegmentPictureUrl($segment_picture_url)
    {
        $this->container['segment_picture_url'] = $segment_picture_url;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Short description of the segment.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets last_change
     *
     * @return string
     */
    public function getLastChange()
    {
        return $this->container['last_change'];
    }

    /**
     * Sets last_change
     *
     * @param string $last_change Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setLastChange($last_change)
    {
        $this->container['last_change'] = $last_change;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
