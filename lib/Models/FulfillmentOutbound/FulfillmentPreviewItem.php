<?php
/**
 * FulfillmentPreviewItem.
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
 * FulfillmentPreviewItem Class Doc Comment.
 *

 * @description Item information for a shipment in a fulfillment order preview.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentPreviewItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentPreviewItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_sku' => 'string',
'quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Quantity',
'seller_fulfillment_order_item_id' => 'string',
'estimated_shipping_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Weight',
'shipping_weight_calculation_method' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
'quantity' => null,
'seller_fulfillment_order_item_id' => null,
'estimated_shipping_weight' => null,
'shipping_weight_calculation_method' => null,    ];

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
        'seller_sku' => 'sellerSku',
'quantity' => 'quantity',
'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
'estimated_shipping_weight' => 'estimatedShippingWeight',
'shipping_weight_calculation_method' => 'shippingWeightCalculationMethod',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
'quantity' => 'setQuantity',
'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
'estimated_shipping_weight' => 'setEstimatedShippingWeight',
'shipping_weight_calculation_method' => 'setShippingWeightCalculationMethod',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
'quantity' => 'getQuantity',
'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
'estimated_shipping_weight' => 'getEstimatedShippingWeight',
'shipping_weight_calculation_method' => 'getShippingWeightCalculationMethod',    ];

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

    const SHIPPING_WEIGHT_CALCULATION_METHOD_PACKAGE = 'Package';
    const SHIPPING_WEIGHT_CALCULATION_METHOD_DIMENSIONAL = 'Dimensional';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getShippingWeightCalculationMethodAllowableValues()
    {
        return [
            self::SHIPPING_WEIGHT_CALCULATION_METHOD_PACKAGE,
self::SHIPPING_WEIGHT_CALCULATION_METHOD_DIMENSIONAL,        ];
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
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['seller_fulfillment_order_item_id'] = isset($data['seller_fulfillment_order_item_id']) ? $data['seller_fulfillment_order_item_id'] : null;
        $this->container['estimated_shipping_weight'] = isset($data['estimated_shipping_weight']) ? $data['estimated_shipping_weight'] : null;
        $this->container['shipping_weight_calculation_method'] = isset($data['shipping_weight_calculation_method']) ? $data['shipping_weight_calculation_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['seller_sku']) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if (null === $this->container['quantity']) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (null === $this->container['seller_fulfillment_order_item_id']) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        $allowedValues = $this->getShippingWeightCalculationMethodAllowableValues();
        if (!is_null($this->container['shipping_weight_calculation_method']) && !in_array($this->container['shipping_weight_calculation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shipping_weight_calculation_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets quantity.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Quantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Quantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id a fulfillment order item identifier that the seller created with a call to the createFulfillmentOrder operation
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets estimated_shipping_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Weight
     */
    public function getEstimatedShippingWeight()
    {
        return $this->container['estimated_shipping_weight'];
    }

    /**
     * Sets estimated_shipping_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Weight $estimated_shipping_weight estimated_shipping_weight
     *
     * @return $this
     */
    public function setEstimatedShippingWeight($estimated_shipping_weight)
    {
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    /**
     * Gets shipping_weight_calculation_method.
     *
     * @return string
     */
    public function getShippingWeightCalculationMethod()
    {
        return $this->container['shipping_weight_calculation_method'];
    }

    /**
     * Sets shipping_weight_calculation_method.
     *
     * @param string $shipping_weight_calculation_method the method used to calculate the estimated shipping weight
     *
     * @return $this
     */
    public function setShippingWeightCalculationMethod($shipping_weight_calculation_method)
    {
        $allowedValues = $this->getShippingWeightCalculationMethodAllowableValues();
        if (!is_null($shipping_weight_calculation_method) && !in_array($shipping_weight_calculation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'shipping_weight_calculation_method', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['shipping_weight_calculation_method'] = $shipping_weight_calculation_method;

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
