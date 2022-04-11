<?php
/**
 * GetFulfillmentOrderResult.
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
 * GetFulfillmentOrderResult Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetFulfillmentOrderResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetFulfillmentOrderResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fulfillment_order' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrder',
'fulfillment_order_items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrderItemList',
'fulfillment_shipments' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentShipmentList',
'return_items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ReturnItemList',
'return_authorizations' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ReturnAuthorizationList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fulfillment_order' => null,
'fulfillment_order_items' => null,
'fulfillment_shipments' => null,
'return_items' => null,
'return_authorizations' => null,    ];

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
        'fulfillment_order' => 'fulfillmentOrder',
'fulfillment_order_items' => 'fulfillmentOrderItems',
'fulfillment_shipments' => 'fulfillmentShipments',
'return_items' => 'returnItems',
'return_authorizations' => 'returnAuthorizations',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_order' => 'setFulfillmentOrder',
'fulfillment_order_items' => 'setFulfillmentOrderItems',
'fulfillment_shipments' => 'setFulfillmentShipments',
'return_items' => 'setReturnItems',
'return_authorizations' => 'setReturnAuthorizations',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_order' => 'getFulfillmentOrder',
'fulfillment_order_items' => 'getFulfillmentOrderItems',
'fulfillment_shipments' => 'getFulfillmentShipments',
'return_items' => 'getReturnItems',
'return_authorizations' => 'getReturnAuthorizations',    ];

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
        $this->container['fulfillment_order'] = isset($data['fulfillment_order']) ? $data['fulfillment_order'] : null;
        $this->container['fulfillment_order_items'] = isset($data['fulfillment_order_items']) ? $data['fulfillment_order_items'] : null;
        $this->container['fulfillment_shipments'] = isset($data['fulfillment_shipments']) ? $data['fulfillment_shipments'] : null;
        $this->container['return_items'] = isset($data['return_items']) ? $data['return_items'] : null;
        $this->container['return_authorizations'] = isset($data['return_authorizations']) ? $data['return_authorizations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['fulfillment_order']) {
            $invalidProperties[] = "'fulfillment_order' can't be null";
        }
        if (null === $this->container['fulfillment_order_items']) {
            $invalidProperties[] = "'fulfillment_order_items' can't be null";
        }
        if (null === $this->container['return_items']) {
            $invalidProperties[] = "'return_items' can't be null";
        }
        if (null === $this->container['return_authorizations']) {
            $invalidProperties[] = "'return_authorizations' can't be null";
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
     * Gets fulfillment_order.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrder
     */
    public function getFulfillmentOrder()
    {
        return $this->container['fulfillment_order'];
    }

    /**
     * Sets fulfillment_order.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrder $fulfillment_order fulfillment_order
     *
     * @return $this
     */
    public function setFulfillmentOrder($fulfillment_order)
    {
        $this->container['fulfillment_order'] = $fulfillment_order;

        return $this;
    }

    /**
     * Gets fulfillment_order_items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrderItemList
     */
    public function getFulfillmentOrderItems()
    {
        return $this->container['fulfillment_order_items'];
    }

    /**
     * Sets fulfillment_order_items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrderItemList $fulfillment_order_items fulfillment_order_items
     *
     * @return $this
     */
    public function setFulfillmentOrderItems($fulfillment_order_items)
    {
        $this->container['fulfillment_order_items'] = $fulfillment_order_items;

        return $this;
    }

    /**
     * Gets fulfillment_shipments.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentShipmentList
     */
    public function getFulfillmentShipments()
    {
        return $this->container['fulfillment_shipments'];
    }

    /**
     * Sets fulfillment_shipments.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentShipmentList $fulfillment_shipments fulfillment_shipments
     *
     * @return $this
     */
    public function setFulfillmentShipments($fulfillment_shipments)
    {
        $this->container['fulfillment_shipments'] = $fulfillment_shipments;

        return $this;
    }

    /**
     * Gets return_items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ReturnItemList
     */
    public function getReturnItems()
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ReturnItemList $return_items return_items
     *
     * @return $this
     */
    public function setReturnItems($return_items)
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }

    /**
     * Gets return_authorizations.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ReturnAuthorizationList
     */
    public function getReturnAuthorizations()
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ReturnAuthorizationList $return_authorizations return_authorizations
     *
     * @return $this
     */
    public function setReturnAuthorizations($return_authorizations)
    {
        $this->container['return_authorizations'] = $return_authorizations;

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
