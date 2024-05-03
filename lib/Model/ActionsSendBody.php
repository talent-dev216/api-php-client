<?php
/**
 * ActionsSendBody
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
 * Swagger Codegen version: 3.0.55
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
 * ActionsSendBody Class Doc Comment
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActionsSendBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'actions_send_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string,string>
      */
    protected static $swaggerTypes = [
        'external_application_id' => 'string',
        'communication_channel_id' => 'int',
        'recipient' => 'string',
        'otp_type' => 'int',
        'message_template_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string,string|null>
      */
    protected static $swaggerFormats = [
        'external_application_id' => null,
        'communication_channel_id' => null,
        'recipient' => null,
        'otp_type' => null,
        'message_template_id' => null
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
        'external_application_id' => 'external_application_id',
        'communication_channel_id' => 'communication_channel_id',
        'recipient' => 'recipient',
        'otp_type' => 'otp_type',
        'message_template_id' => 'message_template_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_application_id' => 'setExternalApplicationId',
        'communication_channel_id' => 'setCommunicationChannelId',
        'recipient' => 'setRecipient',
        'otp_type' => 'setOtpType',
        'message_template_id' => 'setMessageTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_application_id' => 'getExternalApplicationId',
        'communication_channel_id' => 'getCommunicationChannelId',
        'recipient' => 'getRecipient',
        'otp_type' => 'getOtpType',
        'message_template_id' => 'getMessageTemplateId'
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

    const COMMUNICATION_CHANNEL_ID_1 = 1;
const COMMUNICATION_CHANNEL_ID_2 = 2;
const COMMUNICATION_CHANNEL_ID_4 = 4;
const COMMUNICATION_CHANNEL_ID_5 = 5;
const OTP_TYPE_1 = 1;
const OTP_TYPE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getCommunicationChannelIdAllowableValues()
    {
        return [
            self::COMMUNICATION_CHANNEL_ID_1,
self::COMMUNICATION_CHANNEL_ID_2,
self::COMMUNICATION_CHANNEL_ID_4,
self::COMMUNICATION_CHANNEL_ID_5,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return array<int,int|string>
     */
    public function getOtpTypeAllowableValues()
    {
        return [
            self::OTP_TYPE_1,
self::OTP_TYPE_2,        ];
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
        $this->container['external_application_id'] = isset($data['external_application_id']) ? $data['external_application_id'] : null;
        $this->container['communication_channel_id'] = isset($data['communication_channel_id']) ? $data['communication_channel_id'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['otp_type'] = isset($data['otp_type']) ? $data['otp_type'] : self::OTP_TYPE_1;
        $this->container['message_template_id'] = isset($data['message_template_id']) ? $data['message_template_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['external_application_id'] === null) {
            $invalidProperties[] = "'external_application_id' can't be null";
        }
        if ($this->container['communication_channel_id'] === null) {
            $invalidProperties[] = "'communication_channel_id' can't be null";
        }
        $allowedValues = $this->getCommunicationChannelIdAllowableValues();
        if (!is_null($this->container['communication_channel_id']) && !in_array($this->container['communication_channel_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'communication_channel_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        $allowedValues = $this->getOtpTypeAllowableValues();
        if (!is_null($this->container['otp_type']) && !in_array($this->container['otp_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'otp_type', must be one of '%s'",
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
     * Gets external_application_id
     *
     * @return string
     */
    public function getExternalApplicationId()
    {
        return $this->container['external_application_id'];
    }

    /**
     * Sets external_application_id
     *
     * @param string $external_application_id ID of the external application that requested one time password. If you dont have external application id, guide how to get it is available [here](#section/Authentication).
     *
     * @return $this
     */
    public function setExternalApplicationId($external_application_id)
    {
        $this->container['external_application_id'] = $external_application_id;

        return $this;
    }

    /**
     * Gets communication_channel_id
     *
     * @return int
     */
    public function getCommunicationChannelId()
    {
        return $this->container['communication_channel_id'];
    }

    /**
     * Sets communication_channel_id
     *
     * @param int $communication_channel_id The unique ID of the communication channel. *Possible values are: 1 - email / 2- SMS / 4 - PUSH notification (Apple or Google)/ 5 - internal system notification*
     *
     * @return $this
     */
    public function setCommunicationChannelId($communication_channel_id)
    {
        $allowedValues = $this->getCommunicationChannelIdAllowableValues();
        if (!in_array($communication_channel_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'communication_channel_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['communication_channel_id'] = $communication_channel_id;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Recipient of the message with OTP. The parameter could contain email, phone number or other identifier of the message recipient.
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets otp_type
     *
     * @return int
     */
    public function getOtpType()
    {
        return $this->container['otp_type'];
    }

    /**
     * Sets otp_type
     *
     * @param int $otp_type Parameter sets witch OTP type should be generated. *Possible values: 1 - alphanumeric, 2 - numeric*
     *
     * @return $this
     */
    public function setOtpType($otp_type)
    {
        $allowedValues = $this->getOtpTypeAllowableValues();
        if (!is_null($otp_type) && !in_array($otp_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'otp_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['otp_type'] = $otp_type;

        return $this;
    }

    /**
     * Gets message_template_id
     *
     * @return string
     */
    public function getMessageTemplateId()
    {
        return $this->container['message_template_id'];
    }

    /**
     * Sets message_template_id
     *
     * @param string $message_template_id The unique ID of the message_template. If not set, CareCloud uses default value from the system configuration.
     *
     * @return $this
     */
    public function setMessageTemplateId($message_template_id)
    {
        $this->container['message_template_id'] = $message_template_id;

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
