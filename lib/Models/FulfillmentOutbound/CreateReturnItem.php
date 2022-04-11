<?php
/**
 * CreateReturnItem.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * CreateReturnItem Class Doc Comment.
 *

 * @description An item that Amazon accepted for return.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CreateReturnItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateReturnItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_return_item_id' => 'string',
'seller_fulfillment_order_item_id' => 'string',
'amazon_shipment_id' => 'string',
'return_reason_code' => 'string',
'return_comment' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_return_item_id' => null,
'seller_fulfillment_order_item_id' => null,
'amazon_shipment_id' => null,
'return_reason_code' => null,
'return_comment' => null,    ];

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
        'seller_return_item_id' => 'sellerReturnItemId',
'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
'amazon_shipment_id' => 'amazonShipmentId',
'return_reason_code' => 'returnReasonCode',
'return_comment' => 'returnComment',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
'amazon_shipment_id' => 'setAmazonShipmentId',
'return_reason_code' => 'setReturnReasonCode',
'return_comment' => 'setReturnComment',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
'amazon_shipment_id' => 'getAmazonShipmentId',
'return_reason_code' => 'getReturnReasonCode',
'return_comment' => 'getReturnComment',    ];

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
        $this->container['seller_return_item_id'] = isset($data['seller_return_item_id']) ? $data['seller_return_item_id'] : null;
        $this->container['seller_fulfillment_order_item_id'] = isset($data['seller_fulfillment_order_item_id']) ? $data['seller_fulfillment_order_item_id'] : null;
        $this->container['amazon_shipment_id'] = isset($data['amazon_shipment_id']) ? $data['amazon_shipment_id'] : null;
        $this->container['return_reason_code'] = isset($data['return_reason_code']) ? $data['return_reason_code'] : null;
        $this->container['return_comment'] = isset($data['return_comment']) ? $data['return_comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['seller_return_item_id']) {
            $invalidProperties[] = "'seller_return_item_id' can't be null";
        }
        if (null === $this->container['seller_fulfillment_order_item_id']) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if (null === $this->container['amazon_shipment_id']) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if (null === $this->container['return_reason_code']) {
            $invalidProperties[] = "'return_reason_code' can't be null";
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
     * Gets seller_return_item_id.
     *
     * @return string
     */
    public function getSellerReturnItemId()
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id.
     *
     * @param string $seller_return_item_id an identifier assigned by the seller to the return item
     *
     * @return $this
     */
    public function setSellerReturnItemId($seller_return_item_id)
    {
        $this->container['seller_return_item_id'] = $seller_return_item_id;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id the identifier assigned to the item by the seller when the fulfillment order was created
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id.
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id.
     *
     * @param string $amazon_shipment_id the identifier for the shipment that is associated with the return item
     *
     * @return $this
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets return_reason_code.
     *
     * @return string
     */
    public function getReturnReasonCode()
    {
        return $this->container['return_reason_code'];
    }

    /**
     * Sets return_reason_code.
     *
     * @param string $return_reason_code the return reason code assigned to the return item by the seller
     *
     * @return $this
     */
    public function setReturnReasonCode($return_reason_code)
    {
        $this->container['return_reason_code'] = $return_reason_code;

        return $this;
    }

    /**
     * Gets return_comment.
     *
     * @return string
     */
    public function getReturnComment()
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment.
     *
     * @param string $return_comment an optional comment about the return item
     *
     * @return $this
     */
    public function setReturnComment($return_comment)
    {
        $this->container['return_comment'] = $return_comment;

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
