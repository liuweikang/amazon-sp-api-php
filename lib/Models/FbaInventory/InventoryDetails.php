<?php
/**
 * InventoryDetails.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for FBA Inventory.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * InventoryDetails Class Doc Comment.
 *

 * @description Summarized inventory details. This object will not appear if the details parameter in the request is false.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InventoryDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InventoryDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fulfillable_quantity' => 'int',
'inbound_working_quantity' => 'int',
'inbound_shipped_quantity' => 'int',
'inbound_receiving_quantity' => 'int',
'reserved_quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ReservedQuantity',
'researching_quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ResearchingQuantity',
'unfulfillable_quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\UnfulfillableQuantity',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fulfillable_quantity' => null,
'inbound_working_quantity' => null,
'inbound_shipped_quantity' => null,
'inbound_receiving_quantity' => null,
'reserved_quantity' => null,
'researching_quantity' => null,
'unfulfillable_quantity' => null,    ];

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
        'fulfillable_quantity' => 'fulfillableQuantity',
'inbound_working_quantity' => 'inboundWorkingQuantity',
'inbound_shipped_quantity' => 'inboundShippedQuantity',
'inbound_receiving_quantity' => 'inboundReceivingQuantity',
'reserved_quantity' => 'reservedQuantity',
'researching_quantity' => 'researchingQuantity',
'unfulfillable_quantity' => 'unfulfillableQuantity',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillable_quantity' => 'setFulfillableQuantity',
'inbound_working_quantity' => 'setInboundWorkingQuantity',
'inbound_shipped_quantity' => 'setInboundShippedQuantity',
'inbound_receiving_quantity' => 'setInboundReceivingQuantity',
'reserved_quantity' => 'setReservedQuantity',
'researching_quantity' => 'setResearchingQuantity',
'unfulfillable_quantity' => 'setUnfulfillableQuantity',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillable_quantity' => 'getFulfillableQuantity',
'inbound_working_quantity' => 'getInboundWorkingQuantity',
'inbound_shipped_quantity' => 'getInboundShippedQuantity',
'inbound_receiving_quantity' => 'getInboundReceivingQuantity',
'reserved_quantity' => 'getReservedQuantity',
'researching_quantity' => 'getResearchingQuantity',
'unfulfillable_quantity' => 'getUnfulfillableQuantity',    ];

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
        $this->container['fulfillable_quantity'] = isset($data['fulfillable_quantity']) ? $data['fulfillable_quantity'] : null;
        $this->container['inbound_working_quantity'] = isset($data['inbound_working_quantity']) ? $data['inbound_working_quantity'] : null;
        $this->container['inbound_shipped_quantity'] = isset($data['inbound_shipped_quantity']) ? $data['inbound_shipped_quantity'] : null;
        $this->container['inbound_receiving_quantity'] = isset($data['inbound_receiving_quantity']) ? $data['inbound_receiving_quantity'] : null;
        $this->container['reserved_quantity'] = isset($data['reserved_quantity']) ? $data['reserved_quantity'] : null;
        $this->container['researching_quantity'] = isset($data['researching_quantity']) ? $data['researching_quantity'] : null;
        $this->container['unfulfillable_quantity'] = isset($data['unfulfillable_quantity']) ? $data['unfulfillable_quantity'] : null;
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
     * Gets fulfillable_quantity.
     *
     * @return int
     */
    public function getFulfillableQuantity()
    {
        return $this->container['fulfillable_quantity'];
    }

    /**
     * Sets fulfillable_quantity.
     *
     * @param int $fulfillable_quantity the item quantity that can be picked, packed, and shipped
     *
     * @return $this
     */
    public function setFulfillableQuantity($fulfillable_quantity)
    {
        $this->container['fulfillable_quantity'] = $fulfillable_quantity;

        return $this;
    }

    /**
     * Gets inbound_working_quantity.
     *
     * @return int
     */
    public function getInboundWorkingQuantity()
    {
        return $this->container['inbound_working_quantity'];
    }

    /**
     * Sets inbound_working_quantity.
     *
     * @param int $inbound_working_quantity the number of units in an inbound shipment for which you have notified Amazon
     *
     * @return $this
     */
    public function setInboundWorkingQuantity($inbound_working_quantity)
    {
        $this->container['inbound_working_quantity'] = $inbound_working_quantity;

        return $this;
    }

    /**
     * Gets inbound_shipped_quantity.
     *
     * @return int
     */
    public function getInboundShippedQuantity()
    {
        return $this->container['inbound_shipped_quantity'];
    }

    /**
     * Sets inbound_shipped_quantity.
     *
     * @param int $inbound_shipped_quantity the number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number
     *
     * @return $this
     */
    public function setInboundShippedQuantity($inbound_shipped_quantity)
    {
        $this->container['inbound_shipped_quantity'] = $inbound_shipped_quantity;

        return $this;
    }

    /**
     * Gets inbound_receiving_quantity.
     *
     * @return int
     */
    public function getInboundReceivingQuantity()
    {
        return $this->container['inbound_receiving_quantity'];
    }

    /**
     * Sets inbound_receiving_quantity.
     *
     * @param int $inbound_receiving_quantity the number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed
     *
     * @return $this
     */
    public function setInboundReceivingQuantity($inbound_receiving_quantity)
    {
        $this->container['inbound_receiving_quantity'] = $inbound_receiving_quantity;

        return $this;
    }

    /**
     * Gets reserved_quantity.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ReservedQuantity
     */
    public function getReservedQuantity()
    {
        return $this->container['reserved_quantity'];
    }

    /**
     * Sets reserved_quantity.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ReservedQuantity $reserved_quantity reserved_quantity
     *
     * @return $this
     */
    public function setReservedQuantity($reserved_quantity)
    {
        $this->container['reserved_quantity'] = $reserved_quantity;

        return $this;
    }

    /**
     * Gets researching_quantity.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ResearchingQuantity
     */
    public function getResearchingQuantity()
    {
        return $this->container['researching_quantity'];
    }

    /**
     * Sets researching_quantity.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ResearchingQuantity $researching_quantity researching_quantity
     *
     * @return $this
     */
    public function setResearchingQuantity($researching_quantity)
    {
        $this->container['researching_quantity'] = $researching_quantity;

        return $this;
    }

    /**
     * Gets unfulfillable_quantity.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\UnfulfillableQuantity
     */
    public function getUnfulfillableQuantity()
    {
        return $this->container['unfulfillable_quantity'];
    }

    /**
     * Sets unfulfillable_quantity.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\UnfulfillableQuantity $unfulfillable_quantity unfulfillable_quantity
     *
     * @return $this
     */
    public function setUnfulfillableQuantity($unfulfillable_quantity)
    {
        $this->container['unfulfillable_quantity'] = $unfulfillable_quantity;

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
