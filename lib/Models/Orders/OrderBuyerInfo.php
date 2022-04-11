<?php
/**
 * OrderBuyerInfo.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Orders;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OrderBuyerInfo Class Doc Comment.
 *

 * @description Buyer information for an order.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OrderBuyerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderBuyerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id' => 'string',
'buyer_email' => 'string',
'buyer_name' => 'string',
'buyer_county' => 'string',
'buyer_tax_info' => '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInfo',
'purchase_order_number' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_order_id' => null,
'buyer_email' => null,
'buyer_name' => null,
'buyer_county' => null,
'buyer_tax_info' => null,
'purchase_order_number' => null,    ];

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
        'amazon_order_id' => 'AmazonOrderId',
'buyer_email' => 'BuyerEmail',
'buyer_name' => 'BuyerName',
'buyer_county' => 'BuyerCounty',
'buyer_tax_info' => 'BuyerTaxInfo',
'purchase_order_number' => 'PurchaseOrderNumber',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
'buyer_email' => 'setBuyerEmail',
'buyer_name' => 'setBuyerName',
'buyer_county' => 'setBuyerCounty',
'buyer_tax_info' => 'setBuyerTaxInfo',
'purchase_order_number' => 'setPurchaseOrderNumber',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
'buyer_email' => 'getBuyerEmail',
'buyer_name' => 'getBuyerName',
'buyer_county' => 'getBuyerCounty',
'buyer_tax_info' => 'getBuyerTaxInfo',
'purchase_order_number' => 'getPurchaseOrderNumber',    ];

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
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['buyer_email'] = isset($data['buyer_email']) ? $data['buyer_email'] : null;
        $this->container['buyer_name'] = isset($data['buyer_name']) ? $data['buyer_name'] : null;
        $this->container['buyer_county'] = isset($data['buyer_county']) ? $data['buyer_county'] : null;
        $this->container['buyer_tax_info'] = isset($data['buyer_tax_info']) ? $data['buyer_tax_info'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['amazon_order_id']) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
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
     * Gets amazon_order_id.
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id an Amazon-defined order identifier, in 3-7-7 format
     *
     * @return $this
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets buyer_email.
     *
     * @return string
     */
    public function getBuyerEmail()
    {
        return $this->container['buyer_email'];
    }

    /**
     * Sets buyer_email.
     *
     * @param string $buyer_email the anonymized email address of the buyer
     *
     * @return $this
     */
    public function setBuyerEmail($buyer_email)
    {
        $this->container['buyer_email'] = $buyer_email;

        return $this;
    }

    /**
     * Gets buyer_name.
     *
     * @return string
     */
    public function getBuyerName()
    {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name.
     *
     * @param string $buyer_name the name of the buyer
     *
     * @return $this
     */
    public function setBuyerName($buyer_name)
    {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }

    /**
     * Gets buyer_county.
     *
     * @return string
     */
    public function getBuyerCounty()
    {
        return $this->container['buyer_county'];
    }

    /**
     * Sets buyer_county.
     *
     * @param string $buyer_county the county of the buyer
     *
     * @return $this
     */
    public function setBuyerCounty($buyer_county)
    {
        $this->container['buyer_county'] = $buyer_county;

        return $this;
    }

    /**
     * Gets buyer_tax_info.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInfo
     */
    public function getBuyerTaxInfo()
    {
        return $this->container['buyer_tax_info'];
    }

    /**
     * Sets buyer_tax_info.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInfo $buyer_tax_info buyer_tax_info
     *
     * @return $this
     */
    public function setBuyerTaxInfo($buyer_tax_info)
    {
        $this->container['buyer_tax_info'] = $buyer_tax_info;

        return $this;
    }

    /**
     * Gets purchase_order_number.
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param string $purchase_order_number The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

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
