<?php
/**
 * AssociatedItem.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Services;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * AssociatedItem Class Doc Comment.
 *

 * @description Information about an item associated with the service job.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class AssociatedItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AssociatedItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
'title' => 'string',
'quantity' => 'int',
'order_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\OrderId',
'item_status' => 'string',
'brand_name' => 'string',
'item_delivery' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\ItemDelivery',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
'title' => null,
'quantity' => null,
'order_id' => null,
'item_status' => null,
'brand_name' => null,
'item_delivery' => null,    ];

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
'title' => 'title',
'quantity' => 'quantity',
'order_id' => 'orderId',
'item_status' => 'itemStatus',
'brand_name' => 'brandName',
'item_delivery' => 'itemDelivery',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
'title' => 'setTitle',
'quantity' => 'setQuantity',
'order_id' => 'setOrderId',
'item_status' => 'setItemStatus',
'brand_name' => 'setBrandName',
'item_delivery' => 'setItemDelivery',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
'title' => 'getTitle',
'quantity' => 'getQuantity',
'order_id' => 'getOrderId',
'item_status' => 'getItemStatus',
'brand_name' => 'getBrandName',
'item_delivery' => 'getItemDelivery',    ];

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

    const ITEM_STATUS_ACTIVE = 'ACTIVE';
    const ITEM_STATUS_CANCELLED = 'CANCELLED';
    const ITEM_STATUS_SHIPPED = 'SHIPPED';
    const ITEM_STATUS_DELIVERED = 'DELIVERED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getItemStatusAllowableValues()
    {
        return [
            self::ITEM_STATUS_ACTIVE,
self::ITEM_STATUS_CANCELLED,
self::ITEM_STATUS_SHIPPED,
self::ITEM_STATUS_DELIVERED,        ];
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['item_status'] = isset($data['item_status']) ? $data['item_status'] : null;
        $this->container['brand_name'] = isset($data['brand_name']) ? $data['brand_name'] : null;
        $this->container['item_delivery'] = isset($data['item_delivery']) ? $data['item_delivery'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getItemStatusAllowableValues();
        if (!is_null($this->container['item_status']) && !in_array($this->container['item_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'item_status', must be one of '%s'",
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
     * @param string $asin the Amazon Standard Identification Number (ASIN) of the item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string $title the title of the item
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int $quantity the total number of items included in the order
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets order_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\OrderId
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\OrderId $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets item_status.
     *
     * @return string
     */
    public function getItemStatus()
    {
        return $this->container['item_status'];
    }

    /**
     * Sets item_status.
     *
     * @param string $item_status the status of the item
     *
     * @return $this
     */
    public function setItemStatus($item_status)
    {
        $allowedValues = $this->getItemStatusAllowableValues();
        if (!is_null($item_status) && !in_array($item_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'item_status', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['item_status'] = $item_status;

        return $this;
    }

    /**
     * Gets brand_name.
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name.
     *
     * @param string $brand_name the brand name of the item
     *
     * @return $this
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets item_delivery.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\ItemDelivery
     */
    public function getItemDelivery()
    {
        return $this->container['item_delivery'];
    }

    /**
     * Sets item_delivery.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\ItemDelivery $item_delivery item_delivery
     *
     * @return $this
     */
    public function setItemDelivery($item_delivery)
    {
        $this->container['item_delivery'] = $item_delivery;

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
