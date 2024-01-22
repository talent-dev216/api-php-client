<?php
/**
 * ProductBatch
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
 * ProductBatch Class Doc Comment
 *
 * @category Class
 * @description Product resource for the batch processing.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductBatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductBatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
        'name' => 'string',
        'code' => 'string',
        'plu_ids' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PluId[]',
        'product_group_id' => 'string',
        'product_group_external_id' => 'string',
        'product_brand_id' => 'string',
        'product_brand_external_id' => 'string',
        'store_id' => 'string',
        'property_records' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]',
        'prices' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Price[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'product_id' => null,
        'name' => null,
        'code' => null,
        'plu_ids' => null,
        'product_group_id' => null,
        'product_group_external_id' => null,
        'product_brand_id' => null,
        'product_brand_external_id' => null,
        'store_id' => null,
        'property_records' => null,
        'prices' => null
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
        'product_id' => 'product_id',
        'name' => 'name',
        'code' => 'code',
        'plu_ids' => 'plu_ids',
        'product_group_id' => 'product_group_id',
        'product_group_external_id' => 'product_group_external_id',
        'product_brand_id' => 'product_brand_id',
        'product_brand_external_id' => 'product_brand_external_id',
        'store_id' => 'store_id',
        'property_records' => 'property_records',
        'prices' => 'prices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'name' => 'setName',
        'code' => 'setCode',
        'plu_ids' => 'setPluIds',
        'product_group_id' => 'setProductGroupId',
        'product_group_external_id' => 'setProductGroupExternalId',
        'product_brand_id' => 'setProductBrandId',
        'product_brand_external_id' => 'setProductBrandExternalId',
        'store_id' => 'setStoreId',
        'property_records' => 'setPropertyRecords',
        'prices' => 'setPrices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'name' => 'getName',
        'code' => 'getCode',
        'plu_ids' => 'getPluIds',
        'product_group_id' => 'getProductGroupId',
        'product_group_external_id' => 'getProductGroupExternalId',
        'product_brand_id' => 'getProductBrandId',
        'product_brand_external_id' => 'getProductBrandExternalId',
        'store_id' => 'getStoreId',
        'property_records' => 'getPropertyRecords',
        'prices' => 'getPrices'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['plu_ids'] = isset($data['plu_ids']) ? $data['plu_ids'] : null;
        $this->container['product_group_id'] = isset($data['product_group_id']) ? $data['product_group_id'] : null;
        $this->container['product_group_external_id'] = isset($data['product_group_external_id']) ? $data['product_group_external_id'] : null;
        $this->container['product_brand_id'] = isset($data['product_brand_id']) ? $data['product_brand_id'] : null;
        $this->container['product_brand_external_id'] = isset($data['product_brand_external_id']) ? $data['product_brand_external_id'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['property_records'] = isset($data['property_records']) ? $data['property_records'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
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
        if ($this->container['plu_ids'] === null) {
            $invalidProperties[] = "'plu_ids' can't be null";
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
     * @param string $product_id The unique ID of the product.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * @param string $name Name of the product.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code of the product.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets plu_ids
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\PluId[]
     */
    public function getPluIds()
    {
        return $this->container['plu_ids'];
    }

    /**
     * Sets plu_ids
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PluId[] $plu_ids An array of all available pluIDs from the particular product lists (default is Product ID from Global product list (consist cleaned data - unique ID of every product across all POS systems)).
     *
     * @return $this
     */
    public function setPluIds($plu_ids)
    {
        $this->container['plu_ids'] = $plu_ids;

        return $this;
    }

    /**
     * Gets product_group_id
     *
     * @return string
     */
    public function getProductGroupId()
    {
        return $this->container['product_group_id'];
    }

    /**
     * Sets product_group_id
     *
     * @param string $product_group_id The unique ID of the product group. If `product_group_external_id` is also set, both parameters have to represent the same product group.
     *
     * @return $this
     */
    public function setProductGroupId($product_group_id)
    {
        $this->container['product_group_id'] = $product_group_id;

        return $this;
    }

    /**
     * Gets product_group_external_id
     *
     * @return string
     */
    public function getProductGroupExternalId()
    {
        return $this->container['product_group_external_id'];
    }

    /**
     * Sets product_group_external_id
     *
     * @param string $product_group_external_id The unique external ID of the product group. If `product_group_id` is also set, both parameters have to represent the same product group.
     *
     * @return $this
     */
    public function setProductGroupExternalId($product_group_external_id)
    {
        $this->container['product_group_external_id'] = $product_group_external_id;

        return $this;
    }

    /**
     * Gets product_brand_id
     *
     * @return string
     */
    public function getProductBrandId()
    {
        return $this->container['product_brand_id'];
    }

    /**
     * Sets product_brand_id
     *
     * @param string $product_brand_id The unique ID of the product brand. If `product_brand_external_id` is also set, both parameters have to represent the same product brand.
     *
     * @return $this
     */
    public function setProductBrandId($product_brand_id)
    {
        $this->container['product_brand_id'] = $product_brand_id;

        return $this;
    }

    /**
     * Gets product_brand_external_id
     *
     * @return string
     */
    public function getProductBrandExternalId()
    {
        return $this->container['product_brand_external_id'];
    }

    /**
     * Sets product_brand_external_id
     *
     * @param string $product_brand_external_id The unique external ID of the product brand. If `product_brand_id` is also set, both parameters have to represent the same product brand.
     *
     * @return $this
     */
    public function setProductBrandExternalId($product_brand_external_id)
    {
        $this->container['product_brand_external_id'] = $product_brand_external_id;

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
     * @param string $store_id The unique ID of the store where the product group is valid. The product group is global if this value is not set.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets property_records
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]
     */
    public function getPropertyRecords()
    {
        return $this->container['property_records'];
    }

    /**
     * Sets property_records
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[] $property_records List of an additional properties.
     *
     * @return $this
     */
    public function setPropertyRecords($property_records)
    {
        $this->container['property_records'] = $property_records;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Price[]
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Price[] $prices prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

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
