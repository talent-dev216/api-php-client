<?php
/**
 * Card
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
 * Card Class Doc Comment
 *
 * @category Class
 * @description Card resource.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Card implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'card_id' => 'string',
'customer_id' => 'string',
'card_type_id' => 'string',
'card_number' => 'string',
'valid_from' => 'string',
'valid_to' => 'string',
'store_id' => 'string',
'last_change' => 'string',
'state' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'card_id' => null,
'customer_id' => null,
'card_type_id' => null,
'card_number' => null,
'valid_from' => null,
'valid_to' => null,
'store_id' => null,
'last_change' => null,
'state' => null    ];

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
        'card_id' => 'card_id',
'customer_id' => 'customer_id',
'card_type_id' => 'card_type_id',
'card_number' => 'card_number',
'valid_from' => 'valid_from',
'valid_to' => 'valid_to',
'store_id' => 'store_id',
'last_change' => 'last_change',
'state' => 'state'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_id' => 'setCardId',
'customer_id' => 'setCustomerId',
'card_type_id' => 'setCardTypeId',
'card_number' => 'setCardNumber',
'valid_from' => 'setValidFrom',
'valid_to' => 'setValidTo',
'store_id' => 'setStoreId',
'last_change' => 'setLastChange',
'state' => 'setState'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_id' => 'getCardId',
'customer_id' => 'getCustomerId',
'card_type_id' => 'getCardTypeId',
'card_number' => 'getCardNumber',
'valid_from' => 'getValidFrom',
'valid_to' => 'getValidTo',
'store_id' => 'getStoreId',
'last_change' => 'getLastChange',
'state' => 'getState'    ];

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

    const STATE_0 = 0;
const STATE_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_0,
self::STATE_1,        ];
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
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['card_type_id'] = isset($data['card_type_id']) ? $data['card_type_id'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['last_change'] = isset($data['last_change']) ? $data['last_change'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['card_type_id'] === null) {
            $invalidProperties[] = "'card_type_id' can't be null";
        }
        if ($this->container['card_number'] === null) {
            $invalidProperties[] = "'card_number' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets card_id
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string $card_id The unique ID of the card.
     *
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id The unique ID of the card holder.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets card_type_id
     *
     * @return string
     */
    public function getCardTypeId()
    {
        return $this->container['card_type_id'];
    }

    /**
     * Sets card_type_id
     *
     * @param string $card_type_id The unique ID of the card type.
     *
     * @return $this
     */
    public function setCardTypeId($card_type_id)
    {
        $this->container['card_type_id'] = $card_type_id;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number Card number.
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return string
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param string $valid_from Card validity from. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return string
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param string $valid_to Card validity to. *(YYYY-MM-DD HH:MM:SS)*
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string $store_id The unique ID of the store, where the card was assigned to a customer.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

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
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state State of the card. *Possible values are: 0 - blocked / 1 - active*
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
