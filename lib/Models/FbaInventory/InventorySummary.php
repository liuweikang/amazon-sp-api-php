<?php
/**
 * InventorySummary.
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
 * InventorySummary Class Doc Comment.
 *

 * @description Inventory summary for a specific item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InventorySummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InventorySummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
'fn_sku' => 'string',
'seller_sku' => 'string',
'condition' => 'string',
'inventory_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\InventoryDetails',
'last_updated_time' => '\DateTime',
'product_name' => 'string',
'total_quantity' => 'int',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
'fn_sku' => null,
'seller_sku' => null,
'condition' => null,
'inventory_details' => null,
'last_updated_time' => 'date-time',
'product_name' => null,
'total_quantity' => null,    ];

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
        'asin' => 'asin',
'fn_sku' => 'fnSku',
'seller_sku' => 'sellerSku',
'condition' => 'condition',
'inventory_details' => 'inventoryDetails',
'last_updated_time' => 'lastUpdatedTime',
'product_name' => 'productName',
'total_quantity' => 'totalQuantity',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
'fn_sku' => 'setFnSku',
'seller_sku' => 'setSellerSku',
'condition' => 'setCondition',
'inventory_details' => 'setInventoryDetails',
'last_updated_time' => 'setLastUpdatedTime',
'product_name' => 'setProductName',
'total_quantity' => 'setTotalQuantity',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
'fn_sku' => 'getFnSku',
'seller_sku' => 'getSellerSku',
'condition' => 'getCondition',
'inventory_details' => 'getInventoryDetails',
'last_updated_time' => 'getLastUpdatedTime',
'product_name' => 'getProductName',
'total_quantity' => 'getTotalQuantity',    ];

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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['fn_sku'] = isset($data['fn_sku']) ? $data['fn_sku'] : null;
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['inventory_details'] = isset($data['inventory_details']) ? $data['inventory_details'] : null;
        $this->container['last_updated_time'] = isset($data['last_updated_time']) ? $data['last_updated_time'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['total_quantity'] = isset($data['total_quantity']) ? $data['total_quantity'] : null;
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
     * Gets asin.
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN) of an item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets fn_sku.
     *
     * @return string
     */
    public function getFnSku()
    {
        return $this->container['fn_sku'];
    }

    /**
     * Sets fn_sku.
     *
     * @param string $fn_sku amazon's fulfillment network SKU identifier
     *
     * @return $this
     */
    public function setFnSku($fn_sku)
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }

    /**
     * Gets seller_sku.
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets condition.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition.
     *
     * @param string $condition the condition of the item as described by the seller (for example, New Item)
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets inventory_details.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\InventoryDetails
     */
    public function getInventoryDetails()
    {
        return $this->container['inventory_details'];
    }

    /**
     * Sets inventory_details.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\InventoryDetails $inventory_details inventory_details
     *
     * @return $this
     */
    public function setInventoryDetails($inventory_details)
    {
        $this->container['inventory_details'] = $inventory_details;

        return $this;
    }

    /**
     * Gets last_updated_time.
     *
     * @return \DateTime
     */
    public function getLastUpdatedTime()
    {
        return $this->container['last_updated_time'];
    }

    /**
     * Sets last_updated_time.
     *
     * @param \DateTime $last_updated_time the date and time that any quantity was last updated
     *
     * @return $this
     */
    public function setLastUpdatedTime($last_updated_time)
    {
        $this->container['last_updated_time'] = $last_updated_time;

        return $this;
    }

    /**
     * Gets product_name.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name.
     *
     * @param string $product_name the localized language product title of the item within the specific marketplace
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets total_quantity.
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->container['total_quantity'];
    }

    /**
     * Sets total_quantity.
     *
     * @param int $total_quantity the total number of units in an inbound shipment or in Amazon fulfillment centers
     *
     * @return $this
     */
    public function setTotalQuantity($total_quantity)
    {
        $this->container['total_quantity'] = $total_quantity;

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
