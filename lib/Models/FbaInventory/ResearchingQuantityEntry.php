<?php
/**
 * ResearchingQuantityEntry.
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
 * ResearchingQuantityEntry Class Doc Comment.
 *

 * @description The misplaced or warehouse damaged inventory that is actively being confirmed at our fulfillment centers.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ResearchingQuantityEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ResearchingQuantityEntry';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
'quantity' => 'int',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => null,
'quantity' => null,    ];

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
        'name' => 'name',
'quantity' => 'quantity',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'quantity' => 'setQuantity',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'quantity' => 'getQuantity',    ];

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

    const NAME_RESEARCHING_QUANTITY_IN_SHORT_TERM = 'researchingQuantityInShortTerm';
    const NAME_RESEARCHING_QUANTITY_IN_MID_TERM = 'researchingQuantityInMidTerm';
    const NAME_RESEARCHING_QUANTITY_IN_LONG_TERM = 'researchingQuantityInLongTerm';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_RESEARCHING_QUANTITY_IN_SHORT_TERM,
self::NAME_RESEARCHING_QUANTITY_IN_MID_TERM,
self::NAME_RESEARCHING_QUANTITY_IN_LONG_TERM,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['name']) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (null === $this->container['quantity']) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the duration of the research
     *
     * @return $this
     */
    public function setName($name)
    {
        $allowedValues = $this->getNameAllowableValues();
        if (!in_array($name, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'name', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['name'] = $name;

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
     * @param int $quantity the number of units
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
