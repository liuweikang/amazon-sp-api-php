<?php
/**
 * RejectedShippingService.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * RejectedShippingService Class Doc Comment.
 *

 * @description Information about a rejected shipping service
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class RejectedShippingService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RejectedShippingService';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'carrier_name' => 'string',
'shipping_service_name' => 'string',
'shipping_service_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceIdentifier',
'rejection_reason_code' => 'string',
'rejection_reason_message' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'carrier_name' => null,
'shipping_service_name' => null,
'shipping_service_id' => null,
'rejection_reason_code' => null,
'rejection_reason_message' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'carrier_name' => 'CarrierName',
'shipping_service_name' => 'ShippingServiceName',
'shipping_service_id' => 'ShippingServiceId',
'rejection_reason_code' => 'RejectionReasonCode',
'rejection_reason_message' => 'RejectionReasonMessage',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName',
'shipping_service_name' => 'setShippingServiceName',
'shipping_service_id' => 'setShippingServiceId',
'rejection_reason_code' => 'setRejectionReasonCode',
'rejection_reason_message' => 'setRejectionReasonMessage',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName',
'shipping_service_name' => 'getShippingServiceName',
'shipping_service_id' => 'getShippingServiceId',
'rejection_reason_code' => 'getRejectionReasonCode',
'rejection_reason_message' => 'getRejectionReasonMessage',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['shipping_service_name'] = isset($data['shipping_service_name']) ? $data['shipping_service_name'] : null;
        $this->container['shipping_service_id'] = isset($data['shipping_service_id']) ? $data['shipping_service_id'] : null;
        $this->container['rejection_reason_code'] = isset($data['rejection_reason_code']) ? $data['rejection_reason_code'] : null;
        $this->container['rejection_reason_message'] = isset($data['rejection_reason_message']) ? $data['rejection_reason_message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['carrier_name']) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if (null === $this->container['shipping_service_name']) {
            $invalidProperties[] = "'shipping_service_name' can't be null";
        }
        if (null === $this->container['shipping_service_id']) {
            $invalidProperties[] = "'shipping_service_id' can't be null";
        }
        if (null === $this->container['rejection_reason_code']) {
            $invalidProperties[] = "'rejection_reason_code' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets carrier_name.
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name The rejected shipping carrier name. e.g. USPS
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets shipping_service_name.
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name.
     *
     * @param string $shipping_service_name The rejected shipping service localized name. e.g. FedEx Standard Overnight
     *
     * @return $this
     */
    public function setShippingServiceName($shipping_service_name)
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
    }

    /**
     * Gets shipping_service_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceIdentifier
     */
    public function getShippingServiceId()
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceIdentifier $shipping_service_id shipping_service_id
     *
     * @return $this
     */
    public function setShippingServiceId($shipping_service_id)
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }

    /**
     * Gets rejection_reason_code.
     *
     * @return string
     */
    public function getRejectionReasonCode()
    {
        return $this->container['rejection_reason_code'];
    }

    /**
     * Sets rejection_reason_code.
     *
     * @param string $rejection_reason_code A reason code meant to be consumed programatically. e.g. CARRIER_CANNOT_SHIP_TO_POBOX
     *
     * @return $this
     */
    public function setRejectionReasonCode($rejection_reason_code)
    {
        $this->container['rejection_reason_code'] = $rejection_reason_code;

        return $this;
    }

    /**
     * Gets rejection_reason_message.
     *
     * @return string
     */
    public function getRejectionReasonMessage()
    {
        return $this->container['rejection_reason_message'];
    }

    /**
     * Sets rejection_reason_message.
     *
     * @param string $rejection_reason_message a localized human readable description of the rejected reason
     *
     * @return $this
     */
    public function setRejectionReasonMessage($rejection_reason_message)
    {
        $this->container['rejection_reason_message'] = $rejection_reason_message;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
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
