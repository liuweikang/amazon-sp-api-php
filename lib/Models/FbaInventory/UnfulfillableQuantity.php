<?php
/**
 * UnfulfillableQuantity.
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
 * UnfulfillableQuantity Class Doc Comment.
 *

 * @description The quantity of unfulfillable inventory.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class UnfulfillableQuantity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'UnfulfillableQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'total_unfulfillable_quantity' => 'int',
'customer_damaged_quantity' => 'int',
'warehouse_damaged_quantity' => 'int',
'distributor_damaged_quantity' => 'int',
'carrier_damaged_quantity' => 'int',
'defective_quantity' => 'int',
'expired_quantity' => 'int',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'total_unfulfillable_quantity' => null,
'customer_damaged_quantity' => null,
'warehouse_damaged_quantity' => null,
'distributor_damaged_quantity' => null,
'carrier_damaged_quantity' => null,
'defective_quantity' => null,
'expired_quantity' => null,    ];

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
        'total_unfulfillable_quantity' => 'totalUnfulfillableQuantity',
'customer_damaged_quantity' => 'customerDamagedQuantity',
'warehouse_damaged_quantity' => 'warehouseDamagedQuantity',
'distributor_damaged_quantity' => 'distributorDamagedQuantity',
'carrier_damaged_quantity' => 'carrierDamagedQuantity',
'defective_quantity' => 'defectiveQuantity',
'expired_quantity' => 'expiredQuantity',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'total_unfulfillable_quantity' => 'setTotalUnfulfillableQuantity',
'customer_damaged_quantity' => 'setCustomerDamagedQuantity',
'warehouse_damaged_quantity' => 'setWarehouseDamagedQuantity',
'distributor_damaged_quantity' => 'setDistributorDamagedQuantity',
'carrier_damaged_quantity' => 'setCarrierDamagedQuantity',
'defective_quantity' => 'setDefectiveQuantity',
'expired_quantity' => 'setExpiredQuantity',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'total_unfulfillable_quantity' => 'getTotalUnfulfillableQuantity',
'customer_damaged_quantity' => 'getCustomerDamagedQuantity',
'warehouse_damaged_quantity' => 'getWarehouseDamagedQuantity',
'distributor_damaged_quantity' => 'getDistributorDamagedQuantity',
'carrier_damaged_quantity' => 'getCarrierDamagedQuantity',
'defective_quantity' => 'getDefectiveQuantity',
'expired_quantity' => 'getExpiredQuantity',    ];

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
        $this->container['total_unfulfillable_quantity'] = isset($data['total_unfulfillable_quantity']) ? $data['total_unfulfillable_quantity'] : null;
        $this->container['customer_damaged_quantity'] = isset($data['customer_damaged_quantity']) ? $data['customer_damaged_quantity'] : null;
        $this->container['warehouse_damaged_quantity'] = isset($data['warehouse_damaged_quantity']) ? $data['warehouse_damaged_quantity'] : null;
        $this->container['distributor_damaged_quantity'] = isset($data['distributor_damaged_quantity']) ? $data['distributor_damaged_quantity'] : null;
        $this->container['carrier_damaged_quantity'] = isset($data['carrier_damaged_quantity']) ? $data['carrier_damaged_quantity'] : null;
        $this->container['defective_quantity'] = isset($data['defective_quantity']) ? $data['defective_quantity'] : null;
        $this->container['expired_quantity'] = isset($data['expired_quantity']) ? $data['expired_quantity'] : null;
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
     * Gets total_unfulfillable_quantity.
     *
     * @return int
     */
    public function getTotalUnfulfillableQuantity()
    {
        return $this->container['total_unfulfillable_quantity'];
    }

    /**
     * Sets total_unfulfillable_quantity.
     *
     * @param int $total_unfulfillable_quantity the total number of units in Amazon's fulfillment network in unsellable condition
     *
     * @return $this
     */
    public function setTotalUnfulfillableQuantity($total_unfulfillable_quantity)
    {
        $this->container['total_unfulfillable_quantity'] = $total_unfulfillable_quantity;

        return $this;
    }

    /**
     * Gets customer_damaged_quantity.
     *
     * @return int
     */
    public function getCustomerDamagedQuantity()
    {
        return $this->container['customer_damaged_quantity'];
    }

    /**
     * Sets customer_damaged_quantity.
     *
     * @param int $customer_damaged_quantity the number of units in customer damaged disposition
     *
     * @return $this
     */
    public function setCustomerDamagedQuantity($customer_damaged_quantity)
    {
        $this->container['customer_damaged_quantity'] = $customer_damaged_quantity;

        return $this;
    }

    /**
     * Gets warehouse_damaged_quantity.
     *
     * @return int
     */
    public function getWarehouseDamagedQuantity()
    {
        return $this->container['warehouse_damaged_quantity'];
    }

    /**
     * Sets warehouse_damaged_quantity.
     *
     * @param int $warehouse_damaged_quantity the number of units in warehouse damaged disposition
     *
     * @return $this
     */
    public function setWarehouseDamagedQuantity($warehouse_damaged_quantity)
    {
        $this->container['warehouse_damaged_quantity'] = $warehouse_damaged_quantity;

        return $this;
    }

    /**
     * Gets distributor_damaged_quantity.
     *
     * @return int
     */
    public function getDistributorDamagedQuantity()
    {
        return $this->container['distributor_damaged_quantity'];
    }

    /**
     * Sets distributor_damaged_quantity.
     *
     * @param int $distributor_damaged_quantity the number of units in distributor damaged disposition
     *
     * @return $this
     */
    public function setDistributorDamagedQuantity($distributor_damaged_quantity)
    {
        $this->container['distributor_damaged_quantity'] = $distributor_damaged_quantity;

        return $this;
    }

    /**
     * Gets carrier_damaged_quantity.
     *
     * @return int
     */
    public function getCarrierDamagedQuantity()
    {
        return $this->container['carrier_damaged_quantity'];
    }

    /**
     * Sets carrier_damaged_quantity.
     *
     * @param int $carrier_damaged_quantity the number of units in carrier damaged disposition
     *
     * @return $this
     */
    public function setCarrierDamagedQuantity($carrier_damaged_quantity)
    {
        $this->container['carrier_damaged_quantity'] = $carrier_damaged_quantity;

        return $this;
    }

    /**
     * Gets defective_quantity.
     *
     * @return int
     */
    public function getDefectiveQuantity()
    {
        return $this->container['defective_quantity'];
    }

    /**
     * Sets defective_quantity.
     *
     * @param int $defective_quantity the number of units in defective disposition
     *
     * @return $this
     */
    public function setDefectiveQuantity($defective_quantity)
    {
        $this->container['defective_quantity'] = $defective_quantity;

        return $this;
    }

    /**
     * Gets expired_quantity.
     *
     * @return int
     */
    public function getExpiredQuantity()
    {
        return $this->container['expired_quantity'];
    }

    /**
     * Sets expired_quantity.
     *
     * @param int $expired_quantity the number of units in expired disposition
     *
     * @return $this
     */
    public function setExpiredQuantity($expired_quantity)
    {
        $this->container['expired_quantity'] = $expired_quantity;

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
