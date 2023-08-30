<?php
/**
 * VouchersBatchBody
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
 * VouchersBatchBody Class Doc Comment
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VouchersBatchBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'vouchers_batch_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'vouchers' => '\CrmCareCloud\Webservice\RestApi\Client\Model\VoucherBatch[]',
'error_processing' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'vouchers' => null,
'error_processing' => null    ];

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
        'vouchers' => 'vouchers',
'error_processing' => 'error_processing'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vouchers' => 'setVouchers',
'error_processing' => 'setErrorProcessing'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vouchers' => 'getVouchers',
'error_processing' => 'getErrorProcessing'    ];

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

    const ERROR_PROCESSING_1 = 1;
const ERROR_PROCESSING_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getErrorProcessingAllowableValues()
    {
        return [
            self::ERROR_PROCESSING_1,
self::ERROR_PROCESSING_2,        ];
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
        $this->container['vouchers'] = isset($data['vouchers']) ? $data['vouchers'] : null;
        $this->container['error_processing'] = isset($data['error_processing']) ? $data['error_processing'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['vouchers'] === null) {
            $invalidProperties[] = "'vouchers' can't be null";
        }
        $allowedValues = $this->getErrorProcessingAllowableValues();
        if (!is_null($this->container['error_processing']) && !in_array($this->container['error_processing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'error_processing', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets vouchers
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\VoucherBatch[]
     */
    public function getVouchers()
    {
        return $this->container['vouchers'];
    }

    /**
     * Sets vouchers
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\VoucherBatch[] $vouchers List of the CareCloud vouchers.
     *
     * @return $this
     */
    public function setVouchers($vouchers)
    {
        $this->container['vouchers'] = $vouchers;

        return $this;
    }

    /**
     * Gets error_processing
     *
     * @return int
     */
    public function getErrorProcessing()
    {
        return $this->container['error_processing'];
    }

    /**
     * Sets error_processing
     *
     * @param int $error_processing The parameter describes the batch method behavior in case of error occurs. *Possible values are: 1 - It returns the first error found and rollback all previous changes (this is also the default behavior if the parameter is not set) / 2 - It creates all valid records and creates an error report from failed attempts.*
     *
     * @return $this
     */
    public function setErrorProcessing($error_processing)
    {
        $allowedValues = $this->getErrorProcessingAllowableValues();
        if (!is_null($error_processing) && !in_array($error_processing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_processing', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_processing'] = $error_processing;

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
