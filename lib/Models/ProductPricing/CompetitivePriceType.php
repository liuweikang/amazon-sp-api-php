<?php
/**
 * CompetitivePriceType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * CompetitivePriceType Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CompetitivePriceType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CompetitivePriceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'competitive_price_id' => 'string',
'price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\PriceType',
'condition' => 'string',
'subcondition' => 'string',
'belongs_to_requester' => 'bool',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'competitive_price_id' => null,
'price' => null,
'condition' => null,
'subcondition' => null,
'belongs_to_requester' => null,    ];

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
        'competitive_price_id' => 'CompetitivePriceId',
'price' => 'Price',
'condition' => 'condition',
'subcondition' => 'subcondition',
'belongs_to_requester' => 'belongsToRequester',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'competitive_price_id' => 'setCompetitivePriceId',
'price' => 'setPrice',
'condition' => 'setCondition',
'subcondition' => 'setSubcondition',
'belongs_to_requester' => 'setBelongsToRequester',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'competitive_price_id' => 'getCompetitivePriceId',
'price' => 'getPrice',
'condition' => 'getCondition',
'subcondition' => 'getSubcondition',
'belongs_to_requester' => 'getBelongsToRequester',    ];

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
        $this->container['competitive_price_id'] = isset($data['competitive_price_id']) ? $data['competitive_price_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['subcondition'] = isset($data['subcondition']) ? $data['subcondition'] : null;
        $this->container['belongs_to_requester'] = isset($data['belongs_to_requester']) ? $data['belongs_to_requester'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['competitive_price_id']) {
            $invalidProperties[] = "'competitive_price_id' can't be null";
        }
        if (null === $this->container['price']) {
            $invalidProperties[] = "'price' can't be null";
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
     * Gets competitive_price_id.
     *
     * @return string
     */
    public function getCompetitivePriceId()
    {
        return $this->container['competitive_price_id'];
    }

    /**
     * Sets competitive_price_id.
     *
     * @param string $competitive_price_id The pricing model for each price that is returned.  Possible values:  * 1 - New Buy Box Price. * 2 - Used Buy Box Price.
     *
     * @return $this
     */
    public function setCompetitivePriceId($competitive_price_id)
    {
        $this->container['competitive_price_id'] = $competitive_price_id;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\PriceType
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\PriceType $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string $condition Indicates the condition of the item whose pricing information is returned. Possible values are: New, Used, Collectible, Refurbished, or Club.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets subcondition.
     *
     * @return string
     */
    public function getSubcondition()
    {
        return $this->container['subcondition'];
    }

    /**
     * Sets subcondition.
     *
     * @param string $subcondition Indicates the subcondition of the item whose pricing information is returned. Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return $this
     */
    public function setSubcondition($subcondition)
    {
        $this->container['subcondition'] = $subcondition;

        return $this;
    }

    /**
     * Gets belongs_to_requester.
     *
     * @return bool
     */
    public function getBelongsToRequester()
    {
        return $this->container['belongs_to_requester'];
    }

    /**
     * Sets belongs_to_requester.
     *
     * @param bool $belongs_to_requester Indicates whether or not the pricing information is for an offer listing that belongs to the requester. The requester is the seller associated with the SellerId that was submitted with the request. Possible values are: true and false.
     *
     * @return $this
     */
    public function setBelongsToRequester($belongs_to_requester)
    {
        $this->container['belongs_to_requester'] = $belongs_to_requester;

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
