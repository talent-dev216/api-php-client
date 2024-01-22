<?php
/**
 * ActionsRecommendedbestrewardsBody
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
 * ActionsRecommendedbestrewardsBody Class Doc Comment
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActionsRecommendedbestrewardsBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'actions_recommendedbestrewards_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'store_id' => 'string',
        'cashdesk_number' => 'int',
        'card_number' => 'string',
        'customer_id' => 'string',
        'reward_list_type' => 'string',
        'bill' => '\CrmCareCloud\Webservice\RestApi\Client\Model\Bill'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'store_id' => null,
        'cashdesk_number' => null,
        'card_number' => null,
        'customer_id' => null,
        'reward_list_type' => null,
        'bill' => null
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
        'store_id' => 'store_id',
        'cashdesk_number' => 'cashdesk_number',
        'card_number' => 'card_number',
        'customer_id' => 'customer_id',
        'reward_list_type' => 'reward_list_type',
        'bill' => 'bill'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_id' => 'setStoreId',
        'cashdesk_number' => 'setCashdeskNumber',
        'card_number' => 'setCardNumber',
        'customer_id' => 'setCustomerId',
        'reward_list_type' => 'setRewardListType',
        'bill' => 'setBill'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_id' => 'getStoreId',
        'cashdesk_number' => 'getCashdeskNumber',
        'card_number' => 'getCardNumber',
        'customer_id' => 'getCustomerId',
        'reward_list_type' => 'getRewardListType',
        'bill' => 'getBill'
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

    const REWARD_LIST_TYPE_F = 'F';
const REWARD_LIST_TYPE_C = 'C';
const REWARD_LIST_TYPE_A = 'A';

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getRewardListTypeAllowableValues()
    {
        return [
            self::REWARD_LIST_TYPE_F,
self::REWARD_LIST_TYPE_C,
self::REWARD_LIST_TYPE_A,        ];
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
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['cashdesk_number'] = isset($data['cashdesk_number']) ? $data['cashdesk_number'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['reward_list_type'] = isset($data['reward_list_type']) ? $data['reward_list_type'] : null;
        $this->container['bill'] = isset($data['bill']) ? $data['bill'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['store_id'] === null) {
            $invalidProperties[] = "'store_id' can't be null";
        }
        if ($this->container['cashdesk_number'] === null) {
            $invalidProperties[] = "'cashdesk_number' can't be null";
        }
        if ($this->container['reward_list_type'] === null) {
            $invalidProperties[] = "'reward_list_type' can't be null";
        }
        $allowedValues = $this->getRewardListTypeAllowableValues();
        if (!is_null($this->container['reward_list_type']) && !in_array($this->container['reward_list_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reward_list_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['bill'] === null) {
            $invalidProperties[] = "'bill' can't be null";
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
     * @param string $store_id ID of the store.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets cashdesk_number
     *
     * @return int
     */
    public function getCashdeskNumber()
    {
        return $this->container['cashdesk_number'];
    }

    /**
     * Sets cashdesk_number
     *
     * @param int $cashdesk_number Number of the cash-desk in the store.
     *
     * @return $this
     */
    public function setCashdeskNumber($cashdesk_number)
    {
        $this->container['cashdesk_number'] = $cashdesk_number;

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
     * @param string $card_number The customer card number.
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

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
     * @param string $customer_id ID of the customer that made the purchase. You can search customers by plenty parameter in the resource customers.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets reward_list_type
     *
     * @return string
     */
    public function getRewardListType()
    {
        return $this->container['reward_list_type'];
    }

    /**
     * Sets reward_list_type
     *
     * @param string $reward_list_type Type of the rewards. *Possible values: F - full (all manual rewards available and valid of the specific POS)/ C -condensed (only manual rewards corresponding to items on the bill - maxCount not equals zero)/ A - all rewards list including automatic apply this is only for the DATA CUBE*
     *
     * @return $this
     */
    public function setRewardListType($reward_list_type)
    {
        $allowedValues = $this->getRewardListTypeAllowableValues();
        if (!in_array($reward_list_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reward_list_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reward_list_type'] = $reward_list_type;

        return $this;
    }

    /**
     * Gets bill
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\Bill
     */
    public function getBill()
    {
        return $this->container['bill'];
    }

    /**
     * Sets bill
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\Bill $bill bill
     *
     * @return $this
     */
    public function setBill($bill)
    {
        $this->container['bill'] = $bill;

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
