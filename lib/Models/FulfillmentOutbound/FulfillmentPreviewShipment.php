<?php
/**
 * FulfillmentPreviewShipment.
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
 * FulfillmentPreviewShipment Class Doc Comment.
 *

 * @description Delivery and item information for a shipment in a fulfillment order preview.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentPreviewShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentPreviewShipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'earliest_ship_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'latest_ship_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'earliest_arrival_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'latest_arrival_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'shipping_notes' => 'string[]',
'fulfillment_preview_items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPreviewItemList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'earliest_ship_date' => null,
'latest_ship_date' => null,
'earliest_arrival_date' => null,
'latest_arrival_date' => null,
'shipping_notes' => null,
'fulfillment_preview_items' => null,    ];

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
        'earliest_ship_date' => 'earliestShipDate',
'latest_ship_date' => 'latestShipDate',
'earliest_arrival_date' => 'earliestArrivalDate',
'latest_arrival_date' => 'latestArrivalDate',
'shipping_notes' => 'shippingNotes',
'fulfillment_preview_items' => 'fulfillmentPreviewItems',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'earliest_ship_date' => 'setEarliestShipDate',
'latest_ship_date' => 'setLatestShipDate',
'earliest_arrival_date' => 'setEarliestArrivalDate',
'latest_arrival_date' => 'setLatestArrivalDate',
'shipping_notes' => 'setShippingNotes',
'fulfillment_preview_items' => 'setFulfillmentPreviewItems',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'earliest_ship_date' => 'getEarliestShipDate',
'latest_ship_date' => 'getLatestShipDate',
'earliest_arrival_date' => 'getEarliestArrivalDate',
'latest_arrival_date' => 'getLatestArrivalDate',
'shipping_notes' => 'getShippingNotes',
'fulfillment_preview_items' => 'getFulfillmentPreviewItems',    ];

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
        $this->container['earliest_ship_date'] = isset($data['earliest_ship_date']) ? $data['earliest_ship_date'] : null;
        $this->container['latest_ship_date'] = isset($data['latest_ship_date']) ? $data['latest_ship_date'] : null;
        $this->container['earliest_arrival_date'] = isset($data['earliest_arrival_date']) ? $data['earliest_arrival_date'] : null;
        $this->container['latest_arrival_date'] = isset($data['latest_arrival_date']) ? $data['latest_arrival_date'] : null;
        $this->container['shipping_notes'] = isset($data['shipping_notes']) ? $data['shipping_notes'] : null;
        $this->container['fulfillment_preview_items'] = isset($data['fulfillment_preview_items']) ? $data['fulfillment_preview_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['fulfillment_preview_items']) {
            $invalidProperties[] = "'fulfillment_preview_items' can't be null";
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
     * Gets earliest_ship_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getEarliestShipDate()
    {
        return $this->container['earliest_ship_date'];
    }

    /**
     * Sets earliest_ship_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $earliest_ship_date earliest_ship_date
     *
     * @return $this
     */
    public function setEarliestShipDate($earliest_ship_date)
    {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }

    /**
     * Gets latest_ship_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getLatestShipDate()
    {
        return $this->container['latest_ship_date'];
    }

    /**
     * Sets latest_ship_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $latest_ship_date latest_ship_date
     *
     * @return $this
     */
    public function setLatestShipDate($latest_ship_date)
    {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }

    /**
     * Gets earliest_arrival_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getEarliestArrivalDate()
    {
        return $this->container['earliest_arrival_date'];
    }

    /**
     * Sets earliest_arrival_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $earliest_arrival_date earliest_arrival_date
     *
     * @return $this
     */
    public function setEarliestArrivalDate($earliest_arrival_date)
    {
        $this->container['earliest_arrival_date'] = $earliest_arrival_date;

        return $this;
    }

    /**
     * Gets latest_arrival_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getLatestArrivalDate()
    {
        return $this->container['latest_arrival_date'];
    }

    /**
     * Sets latest_arrival_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $latest_arrival_date latest_arrival_date
     *
     * @return $this
     */
    public function setLatestArrivalDate($latest_arrival_date)
    {
        $this->container['latest_arrival_date'] = $latest_arrival_date;

        return $this;
    }

    /**
     * Gets shipping_notes.
     *
     * @return string[]
     */
    public function getShippingNotes()
    {
        return $this->container['shipping_notes'];
    }

    /**
     * Sets shipping_notes.
     *
     * @param string[] $shipping_notes provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed
     *
     * @return $this
     */
    public function setShippingNotes($shipping_notes)
    {
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }

    /**
     * Gets fulfillment_preview_items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPreviewItemList
     */
    public function getFulfillmentPreviewItems()
    {
        return $this->container['fulfillment_preview_items'];
    }

    /**
     * Sets fulfillment_preview_items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPreviewItemList $fulfillment_preview_items fulfillment_preview_items
     *
     * @return $this
     */
    public function setFulfillmentPreviewItems($fulfillment_preview_items)
    {
        $this->container['fulfillment_preview_items'] = $fulfillment_preview_items;

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
