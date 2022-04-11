<?php
/**
 * InboundShipmentPlan.
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
 * InboundShipmentPlan Class Doc Comment.
 *

 * @description Inbound shipment information used to create an inbound shipment. Returned by the createInboundShipmentPlan operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InboundShipmentPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InboundShipmentPlan';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_id' => 'string',
'destination_fulfillment_center_id' => 'string',
'ship_to_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address',
'label_prep_type' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepType',
'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InboundShipmentPlanItemList',
'estimated_box_contents_fee' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsFeeDetails',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_id' => null,
'destination_fulfillment_center_id' => null,
'ship_to_address' => null,
'label_prep_type' => null,
'items' => null,
'estimated_box_contents_fee' => null,    ];

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
        'shipment_id' => 'ShipmentId',
'destination_fulfillment_center_id' => 'DestinationFulfillmentCenterId',
'ship_to_address' => 'ShipToAddress',
'label_prep_type' => 'LabelPrepType',
'items' => 'Items',
'estimated_box_contents_fee' => 'EstimatedBoxContentsFee',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
'destination_fulfillment_center_id' => 'setDestinationFulfillmentCenterId',
'ship_to_address' => 'setShipToAddress',
'label_prep_type' => 'setLabelPrepType',
'items' => 'setItems',
'estimated_box_contents_fee' => 'setEstimatedBoxContentsFee',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
'destination_fulfillment_center_id' => 'getDestinationFulfillmentCenterId',
'ship_to_address' => 'getShipToAddress',
'label_prep_type' => 'getLabelPrepType',
'items' => 'getItems',
'estimated_box_contents_fee' => 'getEstimatedBoxContentsFee',    ];

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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['destination_fulfillment_center_id'] = isset($data['destination_fulfillment_center_id']) ? $data['destination_fulfillment_center_id'] : null;
        $this->container['ship_to_address'] = isset($data['ship_to_address']) ? $data['ship_to_address'] : null;
        $this->container['label_prep_type'] = isset($data['label_prep_type']) ? $data['label_prep_type'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['estimated_box_contents_fee'] = isset($data['estimated_box_contents_fee']) ? $data['estimated_box_contents_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipment_id']) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if (null === $this->container['destination_fulfillment_center_id']) {
            $invalidProperties[] = "'destination_fulfillment_center_id' can't be null";
        }
        if (null === $this->container['ship_to_address']) {
            $invalidProperties[] = "'ship_to_address' can't be null";
        }
        if (null === $this->container['label_prep_type']) {
            $invalidProperties[] = "'label_prep_type' can't be null";
        }
        if (null === $this->container['items']) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets shipment_id.
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id a shipment identifier originally returned by the createInboundShipmentPlan operation
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets destination_fulfillment_center_id.
     *
     * @return string
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->container['destination_fulfillment_center_id'];
    }

    /**
     * Sets destination_fulfillment_center_id.
     *
     * @param string $destination_fulfillment_center_id an Amazon fulfillment center identifier created by Amazon
     *
     * @return $this
     */
    public function setDestinationFulfillmentCenterId($destination_fulfillment_center_id)
    {
        $this->container['destination_fulfillment_center_id'] = $destination_fulfillment_center_id;

        return $this;
    }

    /**
     * Gets ship_to_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address $ship_to_address ship_to_address
     *
     * @return $this
     */
    public function setShipToAddress($ship_to_address)
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets label_prep_type.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepType
     */
    public function getLabelPrepType()
    {
        return $this->container['label_prep_type'];
    }

    /**
     * Sets label_prep_type.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepType $label_prep_type label_prep_type
     *
     * @return $this
     */
    public function setLabelPrepType($label_prep_type)
    {
        $this->container['label_prep_type'] = $label_prep_type;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InboundShipmentPlanItemList
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InboundShipmentPlanItemList $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets estimated_box_contents_fee.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsFeeDetails
     */
    public function getEstimatedBoxContentsFee()
    {
        return $this->container['estimated_box_contents_fee'];
    }

    /**
     * Sets estimated_box_contents_fee.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsFeeDetails $estimated_box_contents_fee estimated_box_contents_fee
     *
     * @return $this
     */
    public function setEstimatedBoxContentsFee($estimated_box_contents_fee)
    {
        $this->container['estimated_box_contents_fee'] = $estimated_box_contents_fee;

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
