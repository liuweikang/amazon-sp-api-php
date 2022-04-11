<?php
/**
 * QualifiersType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Catalog;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * QualifiersType Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class QualifiersType extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'QualifiersType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'item_condition' => 'string',
'item_subcondition' => 'string',
'fulfillment_channel' => 'string',
'ships_domestically' => 'string',
'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ShippingTimeType',
'seller_positive_feedback_rating' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'item_condition' => null,
'item_subcondition' => null,
'fulfillment_channel' => null,
'ships_domestically' => null,
'shipping_time' => null,
'seller_positive_feedback_rating' => null,    ];

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
        'item_condition' => 'ItemCondition',
'item_subcondition' => 'ItemSubcondition',
'fulfillment_channel' => 'FulfillmentChannel',
'ships_domestically' => 'ShipsDomestically',
'shipping_time' => 'ShippingTime',
'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'item_condition' => 'setItemCondition',
'item_subcondition' => 'setItemSubcondition',
'fulfillment_channel' => 'setFulfillmentChannel',
'ships_domestically' => 'setShipsDomestically',
'shipping_time' => 'setShippingTime',
'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'item_condition' => 'getItemCondition',
'item_subcondition' => 'getItemSubcondition',
'fulfillment_channel' => 'getFulfillmentChannel',
'ships_domestically' => 'getShipsDomestically',
'shipping_time' => 'getShippingTime',
'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',    ];

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
        $this->container['item_condition'] = isset($data['item_condition']) ? $data['item_condition'] : null;
        $this->container['item_subcondition'] = isset($data['item_subcondition']) ? $data['item_subcondition'] : null;
        $this->container['fulfillment_channel'] = isset($data['fulfillment_channel']) ? $data['fulfillment_channel'] : null;
        $this->container['ships_domestically'] = isset($data['ships_domestically']) ? $data['ships_domestically'] : null;
        $this->container['shipping_time'] = isset($data['shipping_time']) ? $data['shipping_time'] : null;
        $this->container['seller_positive_feedback_rating'] = isset($data['seller_positive_feedback_rating']) ? $data['seller_positive_feedback_rating'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['item_condition']) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        if (null === $this->container['item_subcondition']) {
            $invalidProperties[] = "'item_subcondition' can't be null";
        }
        if (null === $this->container['fulfillment_channel']) {
            $invalidProperties[] = "'fulfillment_channel' can't be null";
        }
        if (null === $this->container['ships_domestically']) {
            $invalidProperties[] = "'ships_domestically' can't be null";
        }
        if (null === $this->container['shipping_time']) {
            $invalidProperties[] = "'shipping_time' can't be null";
        }
        if (null === $this->container['seller_positive_feedback_rating']) {
            $invalidProperties[] = "'seller_positive_feedback_rating' can't be null";
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
     * Gets item_condition.
     *
     * @return string
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition.
     *
     * @param string $item_condition The condition of the item. Possible values: New, Used, Collectible, Refurbished, or Club.
     *
     * @return $this
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets item_subcondition.
     *
     * @return string
     */
    public function getItemSubcondition()
    {
        return $this->container['item_subcondition'];
    }

    /**
     * Sets item_subcondition.
     *
     * @param string $item_subcondition The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return $this
     */
    public function setItemSubcondition($item_subcondition)
    {
        $this->container['item_subcondition'] = $item_subcondition;

        return $this;
    }

    /**
     * Gets fulfillment_channel.
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param string $fulfillment_channel The fulfillment channel for the item. Possible values:  * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller.
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets ships_domestically.
     *
     * @return string
     */
    public function getShipsDomestically()
    {
        return $this->container['ships_domestically'];
    }

    /**
     * Sets ships_domestically.
     *
     * @param string $ships_domestically Indicates whether the marketplace specified in the request and the location that the item ships from are in the same country. Possible values: True, False, or Unknown.
     *
     * @return $this
     */
    public function setShipsDomestically($ships_domestically)
    {
        $this->container['ships_domestically'] = $ships_domestically;

        return $this;
    }

    /**
     * Gets shipping_time.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ShippingTimeType
     */
    public function getShippingTime()
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\ShippingTimeType $shipping_time shipping_time
     *
     * @return $this
     */
    public function setShippingTime($shipping_time)
    {
        $this->container['shipping_time'] = $shipping_time;

        return $this;
    }

    /**
     * Gets seller_positive_feedback_rating.
     *
     * @return string
     */
    public function getSellerPositiveFeedbackRating()
    {
        return $this->container['seller_positive_feedback_rating'];
    }

    /**
     * Sets seller_positive_feedback_rating.
     *
     * @param string $seller_positive_feedback_rating (98-100%, 95-97%, 90-94%, 80-89%, 70-79%, Less than 70%, or Just launched ) – Indicates the percentage of feedback ratings that were positive over the past 12 months
     *
     * @return $this
     */
    public function setSellerPositiveFeedbackRating($seller_positive_feedback_rating)
    {
        $this->container['seller_positive_feedback_rating'] = $seller_positive_feedback_rating;

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
