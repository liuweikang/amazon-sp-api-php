<?php
/**
 * Granularity.
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
 * Granularity Class Doc Comment.
 *

 * @description Describes a granularity at which inventory data can be aggregated. For example, if you use Marketplace granularity, the fulfillable quantity will reflect inventory that could be fulfilled in the given marketplace.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Granularity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Granularity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'granularity_type' => 'string',
'granularity_id' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'granularity_type' => null,
'granularity_id' => null,    ];

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
        'granularity_type' => 'granularityType',
'granularity_id' => 'granularityId',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'granularity_type' => 'setGranularityType',
'granularity_id' => 'setGranularityId',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'granularity_type' => 'getGranularityType',
'granularity_id' => 'getGranularityId',    ];

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

    const GRANULARITY_TYPE_MARKETPLACE = 'Marketplace';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getGranularityTypeAllowableValues()
    {
        return [
            self::GRANULARITY_TYPE_MARKETPLACE,        ];
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
        $this->container['granularity_type'] = isset($data['granularity_type']) ? $data['granularity_type'] : null;
        $this->container['granularity_id'] = isset($data['granularity_id']) ? $data['granularity_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGranularityTypeAllowableValues();
        if (!is_null($this->container['granularity_type']) && !in_array($this->container['granularity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'granularity_type', must be one of '%s'",
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
     * Gets granularity_type.
     *
     * @return string
     */
    public function getGranularityType()
    {
        return $this->container['granularity_type'];
    }

    /**
     * Sets granularity_type.
     *
     * @param string $granularity_type the granularity type for the inventory aggregation level
     *
     * @return $this
     */
    public function setGranularityType($granularity_type)
    {
        $allowedValues = $this->getGranularityTypeAllowableValues();
        if (!is_null($granularity_type) && !in_array($granularity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'granularity_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['granularity_type'] = $granularity_type;

        return $this;
    }

    /**
     * Gets granularity_id.
     *
     * @return string
     */
    public function getGranularityId()
    {
        return $this->container['granularity_id'];
    }

    /**
     * Sets granularity_id.
     *
     * @param string $granularity_id The granularity ID for the specified granularity type. When granularityType is Marketplace, specify the marketplaceId.
     *
     * @return $this
     */
    public function setGranularityId($granularity_id)
    {
        $this->container['granularity_id'] = $granularity_id;

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
