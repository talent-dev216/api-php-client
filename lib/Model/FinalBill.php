<?php
/**
 * FinalBill
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
 * FinalBill Class Doc Comment
 *
 * @category Class
 * @description Final bill structure.
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinalBill implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinalBill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'fiscal' => 'bool',
        'purchase_type_id' => 'string',
        'canceled' => 'bool',
        'payment_type' => 'string',
        'payment_recap' => '\CrmCareCloud\Webservice\RestApi\Client\Model\PaymentRecap',
        'bill_id' => 'string',
        'bill_number' => 'string',
        'payment_time' => 'string',
        'created_by' => 'string',
        'currency_id' => 'string',
        'total_price' => 'float',
        'utm' => '\CrmCareCloud\Webservice\RestApi\Client\Model\UTM',
        'bill_items' => '\CrmCareCloud\Webservice\RestApi\Client\Model\BillItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'fiscal' => null,
        'purchase_type_id' => null,
        'canceled' => null,
        'payment_type' => null,
        'payment_recap' => null,
        'bill_id' => null,
        'bill_number' => null,
        'payment_time' => null,
        'created_by' => null,
        'currency_id' => null,
        'total_price' => 'float',
        'utm' => null,
        'bill_items' => null
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
        'fiscal' => 'fiscal',
        'purchase_type_id' => 'purchase_type_id',
        'canceled' => 'canceled',
        'payment_type' => 'payment_type',
        'payment_recap' => 'payment_recap',
        'bill_id' => 'bill_id',
        'bill_number' => 'bill_number',
        'payment_time' => 'payment_time',
        'created_by' => 'created_by',
        'currency_id' => 'currency_id',
        'total_price' => 'total_price',
        'utm' => 'utm',
        'bill_items' => 'bill_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fiscal' => 'setFiscal',
        'purchase_type_id' => 'setPurchaseTypeId',
        'canceled' => 'setCanceled',
        'payment_type' => 'setPaymentType',
        'payment_recap' => 'setPaymentRecap',
        'bill_id' => 'setBillId',
        'bill_number' => 'setBillNumber',
        'payment_time' => 'setPaymentTime',
        'created_by' => 'setCreatedBy',
        'currency_id' => 'setCurrencyId',
        'total_price' => 'setTotalPrice',
        'utm' => 'setUtm',
        'bill_items' => 'setBillItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fiscal' => 'getFiscal',
        'purchase_type_id' => 'getPurchaseTypeId',
        'canceled' => 'getCanceled',
        'payment_type' => 'getPaymentType',
        'payment_recap' => 'getPaymentRecap',
        'bill_id' => 'getBillId',
        'bill_number' => 'getBillNumber',
        'payment_time' => 'getPaymentTime',
        'created_by' => 'getCreatedBy',
        'currency_id' => 'getCurrencyId',
        'total_price' => 'getTotalPrice',
        'utm' => 'getUtm',
        'bill_items' => 'getBillItems'
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

    const PAYMENT_TYPE_S = 'S';
const PAYMENT_TYPE_A = 'A';
const PAYMENT_TYPE_C = 'C';
const PAYMENT_TYPE_D = 'D';

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_S,
self::PAYMENT_TYPE_A,
self::PAYMENT_TYPE_C,
self::PAYMENT_TYPE_D,        ];
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
        $this->container['fiscal'] = isset($data['fiscal']) ? $data['fiscal'] : null;
        $this->container['purchase_type_id'] = isset($data['purchase_type_id']) ? $data['purchase_type_id'] : null;
        $this->container['canceled'] = isset($data['canceled']) ? $data['canceled'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['payment_recap'] = isset($data['payment_recap']) ? $data['payment_recap'] : null;
        $this->container['bill_id'] = isset($data['bill_id']) ? $data['bill_id'] : null;
        $this->container['bill_number'] = isset($data['bill_number']) ? $data['bill_number'] : null;
        $this->container['payment_time'] = isset($data['payment_time']) ? $data['payment_time'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['utm'] = isset($data['utm']) ? $data['utm'] : null;
        $this->container['bill_items'] = isset($data['bill_items']) ? $data['bill_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fiscal'] === null) {
            $invalidProperties[] = "'fiscal' can't be null";
        }
        if ($this->container['purchase_type_id'] === null) {
            $invalidProperties[] = "'purchase_type_id' can't be null";
        }
        if ($this->container['canceled'] === null) {
            $invalidProperties[] = "'canceled' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['bill_id'] === null) {
            $invalidProperties[] = "'bill_id' can't be null";
        }
        if ($this->container['payment_time'] === null) {
            $invalidProperties[] = "'payment_time' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
        }
        if ($this->container['bill_items'] === null) {
            $invalidProperties[] = "'bill_items' can't be null";
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
     * Gets fiscal
     *
     * @return bool
     */
    public function getFiscal()
    {
        return $this->container['fiscal'];
    }

    /**
     * Sets fiscal
     *
     * @param bool $fiscal Information, whether it is a fiscal bill.
     *
     * @return $this
     */
    public function setFiscal($fiscal)
    {
        $this->container['fiscal'] = $fiscal;

        return $this;
    }

    /**
     * Gets purchase_type_id
     *
     * @return string
     */
    public function getPurchaseTypeId()
    {
        return $this->container['purchase_type_id'];
    }

    /**
     * Sets purchase_type_id
     *
     * @param string $purchase_type_id Type of the purchase. Values are available in resource [purchase-types](#tag/Purchase-types).
     *
     * @return $this
     */
    public function setPurchaseTypeId($purchase_type_id)
    {
        $this->container['purchase_type_id'] = $purchase_type_id;

        return $this;
    }

    /**
     * Gets canceled
     *
     * @return bool
     */
    public function getCanceled()
    {
        return $this->container['canceled'];
    }

    /**
     * Sets canceled
     *
     * @param bool $canceled Information, whether it is the cancellation of the purchase. It is the only parameter that identifies the canceled purchase. All other values are the same as in the original bill. No different values like totalPrice, quantity, paidAmount, and itemPrice are changed nor inverted.
     *
     * @return $this
     */
    public function setCanceled($canceled)
    {
        $this->container['canceled'] = $canceled;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type Payment type changes the checkout process depending on the value of the parameter you can allow/deny the use of benefits. *Possible values are: \"S\" - with standard setup checkout process allows you to collect points, but isn't possible to apply overall discounts  / \"A\"- checkout process allows you to collect points and apply overall discounts too / \"C\" - use credits for payment, allows you to collect points, but isn't possible to apply overall discounts / \"D\"- will enable you to use overall discounts, but you are not able to collect points with this setup*
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets payment_recap
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\PaymentRecap
     */
    public function getPaymentRecap()
    {
        return $this->container['payment_recap'];
    }

    /**
     * Sets payment_recap
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\PaymentRecap $payment_recap payment_recap
     *
     * @return $this
     */
    public function setPaymentRecap($payment_recap)
    {
        $this->container['payment_recap'] = $payment_recap;

        return $this;
    }

    /**
     * Gets bill_id
     *
     * @return string
     */
    public function getBillId()
    {
        return $this->container['bill_id'];
    }

    /**
     * Sets bill_id
     *
     * @param string $bill_id Identification number of the bill (must be unique in POS, use prefix 'C' for a canceled bill).
     *
     * @return $this
     */
    public function setBillId($bill_id)
    {
        $this->container['bill_id'] = $bill_id;

        return $this;
    }

    /**
     * Gets bill_number
     *
     * @return string
     */
    public function getBillNumber()
    {
        return $this->container['bill_number'];
    }

    /**
     * Sets bill_number
     *
     * @param string $bill_number Alternative identification of the bill. In the case of cancellation, there should be bill_id from the original bill.
     *
     * @return $this
     */
    public function setBillNumber($bill_number)
    {
        $this->container['bill_number'] = $bill_number;

        return $this;
    }

    /**
     * Gets payment_time
     *
     * @return string
     */
    public function getPaymentTime()
    {
        return $this->container['payment_time'];
    }

    /**
     * Sets payment_time
     *
     * @param string $payment_time Date and time of bill creation *Possible value: 2016-06-30T15:51:49+02:00*
     *
     * @return $this
     */
    public function setPaymentTime($payment_time)
    {
        $this->container['payment_time'] = $payment_time;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by Name of the user who created a bill.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id ID of the currency from resource [currencies](#tag/Currencies).
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price The total price of the bill as a sum of all items.
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets utm
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\UTM
     */
    public function getUtm()
    {
        return $this->container['utm'];
    }

    /**
     * Sets utm
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\UTM $utm utm
     *
     * @return $this
     */
    public function setUtm($utm)
    {
        $this->container['utm'] = $utm;

        return $this;
    }

    /**
     * Gets bill_items
     *
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\BillItem[]
     */
    public function getBillItems()
    {
        return $this->container['bill_items'];
    }

    /**
     * Sets bill_items
     *
     * @param \CrmCareCloud\Webservice\RestApi\Client\Model\BillItem[] $bill_items List of bill items.
     *
     * @return $this
     */
    public function setBillItems($bill_items)
    {
        $this->container['bill_items'] = $bill_items;

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
