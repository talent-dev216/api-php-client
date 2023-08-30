<?php
/**
 * PurchaseItem
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
 * PurchaseItem Class Doc Comment
 *
 * @category Class
 * @description Purchase item.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'purchase_item_id' => 'string',
'product_id' => 'string',
'external_id' => 'string',
'purchase_item_type_id' => 'string',
'price' => 'float',
'amount' => 'float',
'vat_rate' => 'float',
'additional_properties' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'purchase_item_id' => null,
'product_id' => null,
'external_id' => null,
'purchase_item_type_id' => null,
'price' => 'float',
'amount' => 'float',
'vat_rate' => 'float',
'additional_properties' => null    ];

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
        'purchase_item_id' => 'purchase_item_id',
'product_id' => 'product_id',
'external_id' => 'external_id',
'purchase_item_type_id' => 'purchase_item_type_id',
'price' => 'price',
'amount' => 'amount',
'vat_rate' => 'vat_rate',
'additional_properties' => 'additional_properties'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_item_id' => 'setPurchaseItemId',
'product_id' => 'setProductId',
'external_id' => 'setExternalId',
'purchase_item_type_id' => 'setPurchaseItemTypeId',
'price' => 'setPrice',
'amount' => 'setAmount',
'vat_rate' => 'setVatRate',
'additional_properties' => 'setAdditionalProperties'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_item_id' => 'getPurchaseItemId',
'product_id' => 'getProductId',
'external_id' => 'getExternalId',
'purchase_item_type_id' => 'getPurchaseItemTypeId',
'price' => 'getPrice',
'amount' => 'getAmount',
'vat_rate' => 'getVatRate',
'additional_properties' => 'getAdditionalProperties'    ];

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
        $this->container['purchase_item_id'] = isset($data['purchase_item_id']) ? $data['purchase_item_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['purchase_item_type_id'] = isset($data['purchase_item_type_id']) ? $data['purchase_item_type_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat_rate'] = isset($data['vat_rate']) ? $data['vat_rate'] : null;
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['purchase_item_type_id'] === null) {
            $invalidProperties[] = "'purchase_item_type_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['vat_rate'] === null) {
            $invalidProperties[] = "'vat_rate' can't be null";
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
     * Gets purchase_item_id
     *
     * @return string
     */
    public function getPurchaseItemId()
    {
        return $this->container['purchase_item_id'];
    }

    /**
     * Sets purchase_item_id
     *
     * @param string $purchase_item_id The unique ID of the purchase item.
     *
     * @return $this
     */
    public function setPurchaseItemId($purchase_item_id)
    {
        $this->container['purchase_item_id'] = $purchase_item_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The unique ID of the [product](#tag/Product).
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id Identifier of the purchase item in external system.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets purchase_item_type_id
     *
     * @return string
     */
    public function getPurchaseItemTypeId()
    {
        return $this->container['purchase_item_type_id'];
    }

    /**
     * Sets purchase_item_type_id
     *
     * @param string $purchase_item_type_id Type of the purchase item.
     *
     * @return $this
     */
    public function setPurchaseItemTypeId($purchase_item_type_id)
    {
        $this->container['purchase_item_type_id'] = $purchase_item_type_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Price of the purchase item.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Amount of the purchase item.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return float
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float $vat_rate The rate of an item VAT.
     *
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets additional_properties
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[] $additional_properties List of additional properties.
     *
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

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
