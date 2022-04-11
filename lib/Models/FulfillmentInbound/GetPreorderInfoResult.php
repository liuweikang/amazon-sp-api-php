<?php
/**
 * GetPreorderInfoResult.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * GetPreorderInfoResult Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetPreorderInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetPreorderInfoResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_contains_preorderable_items' => 'bool',
'shipment_confirmed_for_preorder' => 'bool',
'need_by_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',
'confirmed_fulfillable_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_contains_preorderable_items' => null,
'shipment_confirmed_for_preorder' => null,
'need_by_date' => null,
'confirmed_fulfillable_date' => null,    ];

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
        'shipment_contains_preorderable_items' => 'ShipmentContainsPreorderableItems',
'shipment_confirmed_for_preorder' => 'ShipmentConfirmedForPreorder',
'need_by_date' => 'NeedByDate',
'confirmed_fulfillable_date' => 'ConfirmedFulfillableDate',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_contains_preorderable_items' => 'setShipmentContainsPreorderableItems',
'shipment_confirmed_for_preorder' => 'setShipmentConfirmedForPreorder',
'need_by_date' => 'setNeedByDate',
'confirmed_fulfillable_date' => 'setConfirmedFulfillableDate',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_contains_preorderable_items' => 'getShipmentContainsPreorderableItems',
'shipment_confirmed_for_preorder' => 'getShipmentConfirmedForPreorder',
'need_by_date' => 'getNeedByDate',
'confirmed_fulfillable_date' => 'getConfirmedFulfillableDate',    ];

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
        $this->container['shipment_contains_preorderable_items'] = isset($data['shipment_contains_preorderable_items']) ? $data['shipment_contains_preorderable_items'] : null;
        $this->container['shipment_confirmed_for_preorder'] = isset($data['shipment_confirmed_for_preorder']) ? $data['shipment_confirmed_for_preorder'] : null;
        $this->container['need_by_date'] = isset($data['need_by_date']) ? $data['need_by_date'] : null;
        $this->container['confirmed_fulfillable_date'] = isset($data['confirmed_fulfillable_date']) ? $data['confirmed_fulfillable_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets shipment_contains_preorderable_items.
     *
     * @return bool
     */
    public function getShipmentContainsPreorderableItems()
    {
        return $this->container['shipment_contains_preorderable_items'];
    }

    /**
     * Sets shipment_contains_preorderable_items.
     *
     * @param bool $shipment_contains_preorderable_items Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help.
     *
     * @return $this
     */
    public function setShipmentContainsPreorderableItems($shipment_contains_preorderable_items)
    {
        $this->container['shipment_contains_preorderable_items'] = $shipment_contains_preorderable_items;

        return $this;
    }

    /**
     * Gets shipment_confirmed_for_preorder.
     *
     * @return bool
     */
    public function getShipmentConfirmedForPreorder()
    {
        return $this->container['shipment_confirmed_for_preorder'];
    }

    /**
     * Sets shipment_confirmed_for_preorder.
     *
     * @param bool $shipment_confirmed_for_preorder indicates whether this shipment has been confirmed for pre-order
     *
     * @return $this
     */
    public function setShipmentConfirmedForPreorder($shipment_confirmed_for_preorder)
    {
        $this->container['shipment_confirmed_for_preorder'] = $shipment_confirmed_for_preorder;

        return $this;
    }

    /**
     * Gets need_by_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getNeedByDate()
    {
        return $this->container['need_by_date'];
    }

    /**
     * Sets need_by_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $need_by_date need_by_date
     *
     * @return $this
     */
    public function setNeedByDate($need_by_date)
    {
        $this->container['need_by_date'] = $need_by_date;

        return $this;
    }

    /**
     * Gets confirmed_fulfillable_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->container['confirmed_fulfillable_date'];
    }

    /**
     * Sets confirmed_fulfillable_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $confirmed_fulfillable_date confirmed_fulfillable_date
     *
     * @return $this
     */
    public function setConfirmedFulfillableDate($confirmed_fulfillable_date)
    {
        $this->container['confirmed_fulfillable_date'] = $confirmed_fulfillable_date;

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
