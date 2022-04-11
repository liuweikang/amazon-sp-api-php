<?php
/**
 * ReservedQuantity.
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
 * ReservedQuantity Class Doc Comment.
 *

 * @description The quantity of reserved inventory.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ReservedQuantity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ReservedQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'total_reserved_quantity' => 'int',
'pending_customer_order_quantity' => 'int',
'pending_transshipment_quantity' => 'int',
'fc_processing_quantity' => 'int',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'total_reserved_quantity' => null,
'pending_customer_order_quantity' => null,
'pending_transshipment_quantity' => null,
'fc_processing_quantity' => null,    ];

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
        'total_reserved_quantity' => 'totalReservedQuantity',
'pending_customer_order_quantity' => 'pendingCustomerOrderQuantity',
'pending_transshipment_quantity' => 'pendingTransshipmentQuantity',
'fc_processing_quantity' => 'fcProcessingQuantity',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'total_reserved_quantity' => 'setTotalReservedQuantity',
'pending_customer_order_quantity' => 'setPendingCustomerOrderQuantity',
'pending_transshipment_quantity' => 'setPendingTransshipmentQuantity',
'fc_processing_quantity' => 'setFcProcessingQuantity',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'total_reserved_quantity' => 'getTotalReservedQuantity',
'pending_customer_order_quantity' => 'getPendingCustomerOrderQuantity',
'pending_transshipment_quantity' => 'getPendingTransshipmentQuantity',
'fc_processing_quantity' => 'getFcProcessingQuantity',    ];

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
        $this->container['total_reserved_quantity'] = isset($data['total_reserved_quantity']) ? $data['total_reserved_quantity'] : null;
        $this->container['pending_customer_order_quantity'] = isset($data['pending_customer_order_quantity']) ? $data['pending_customer_order_quantity'] : null;
        $this->container['pending_transshipment_quantity'] = isset($data['pending_transshipment_quantity']) ? $data['pending_transshipment_quantity'] : null;
        $this->container['fc_processing_quantity'] = isset($data['fc_processing_quantity']) ? $data['fc_processing_quantity'] : null;
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
     * Gets total_reserved_quantity.
     *
     * @return int
     */
    public function getTotalReservedQuantity()
    {
        return $this->container['total_reserved_quantity'];
    }

    /**
     * Sets total_reserved_quantity.
     *
     * @param int $total_reserved_quantity the total number of units in Amazon's fulfillment network that are currently being picked, packed, and shipped; or are sidelined for measurement, sampling, or other internal processes
     *
     * @return $this
     */
    public function setTotalReservedQuantity($total_reserved_quantity)
    {
        $this->container['total_reserved_quantity'] = $total_reserved_quantity;

        return $this;
    }

    /**
     * Gets pending_customer_order_quantity.
     *
     * @return int
     */
    public function getPendingCustomerOrderQuantity()
    {
        return $this->container['pending_customer_order_quantity'];
    }

    /**
     * Sets pending_customer_order_quantity.
     *
     * @param int $pending_customer_order_quantity the number of units reserved for customer orders
     *
     * @return $this
     */
    public function setPendingCustomerOrderQuantity($pending_customer_order_quantity)
    {
        $this->container['pending_customer_order_quantity'] = $pending_customer_order_quantity;

        return $this;
    }

    /**
     * Gets pending_transshipment_quantity.
     *
     * @return int
     */
    public function getPendingTransshipmentQuantity()
    {
        return $this->container['pending_transshipment_quantity'];
    }

    /**
     * Sets pending_transshipment_quantity.
     *
     * @param int $pending_transshipment_quantity the number of units being transferred from one fulfillment center to another
     *
     * @return $this
     */
    public function setPendingTransshipmentQuantity($pending_transshipment_quantity)
    {
        $this->container['pending_transshipment_quantity'] = $pending_transshipment_quantity;

        return $this;
    }

    /**
     * Gets fc_processing_quantity.
     *
     * @return int
     */
    public function getFcProcessingQuantity()
    {
        return $this->container['fc_processing_quantity'];
    }

    /**
     * Sets fc_processing_quantity.
     *
     * @param int $fc_processing_quantity the number of units that have been sidelined at the fulfillment center for additional processing
     *
     * @return $this
     */
    public function setFcProcessingQuantity($fc_processing_quantity)
    {
        $this->container['fc_processing_quantity'] = $fc_processing_quantity;

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
