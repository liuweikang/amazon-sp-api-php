<?php
/**
 * BoxContentsFeeDetails.
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
 * BoxContentsFeeDetails Class Doc Comment.
 *

 * @description The manual processing fee per unit and total fee for a shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class BoxContentsFeeDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BoxContentsFeeDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'total_units' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity',
'fee_per_unit' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount',
'total_fee' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'total_units' => null,
'fee_per_unit' => null,
'total_fee' => null,    ];

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
        'total_units' => 'TotalUnits',
'fee_per_unit' => 'FeePerUnit',
'total_fee' => 'TotalFee',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'total_units' => 'setTotalUnits',
'fee_per_unit' => 'setFeePerUnit',
'total_fee' => 'setTotalFee',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'total_units' => 'getTotalUnits',
'fee_per_unit' => 'getFeePerUnit',
'total_fee' => 'getTotalFee',    ];

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
        $this->container['total_units'] = isset($data['total_units']) ? $data['total_units'] : null;
        $this->container['fee_per_unit'] = isset($data['fee_per_unit']) ? $data['fee_per_unit'] : null;
        $this->container['total_fee'] = isset($data['total_fee']) ? $data['total_fee'] : null;
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
     * Gets total_units.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity
     */
    public function getTotalUnits()
    {
        return $this->container['total_units'];
    }

    /**
     * Sets total_units.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity $total_units total_units
     *
     * @return $this
     */
    public function setTotalUnits($total_units)
    {
        $this->container['total_units'] = $total_units;

        return $this;
    }

    /**
     * Gets fee_per_unit.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount
     */
    public function getFeePerUnit()
    {
        return $this->container['fee_per_unit'];
    }

    /**
     * Sets fee_per_unit.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount $fee_per_unit fee_per_unit
     *
     * @return $this
     */
    public function setFeePerUnit($fee_per_unit)
    {
        $this->container['fee_per_unit'] = $fee_per_unit;

        return $this;
    }

    /**
     * Gets total_fee.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount
     */
    public function getTotalFee()
    {
        return $this->container['total_fee'];
    }

    /**
     * Sets total_fee.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount $total_fee total_fee
     *
     * @return $this
     */
    public function setTotalFee($total_fee)
    {
        $this->container['total_fee'] = $total_fee;

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
