<?php
/**
 * Categories.
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
 * Categories Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Categories';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'product_category_id' => 'string',
'product_category_name' => 'string',
'parent' => 'object',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'product_category_id' => null,
'product_category_name' => null,
'parent' => null,    ];

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
        'product_category_id' => 'ProductCategoryId',
'product_category_name' => 'ProductCategoryName',
'parent' => 'parent',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'product_category_id' => 'setProductCategoryId',
'product_category_name' => 'setProductCategoryName',
'parent' => 'setParent',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'product_category_id' => 'getProductCategoryId',
'product_category_name' => 'getProductCategoryName',
'parent' => 'getParent',    ];

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
        $this->container['product_category_id'] = isset($data['product_category_id']) ? $data['product_category_id'] : null;
        $this->container['product_category_name'] = isset($data['product_category_name']) ? $data['product_category_name'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
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
     * Gets product_category_id.
     *
     * @return string
     */
    public function getProductCategoryId()
    {
        return $this->container['product_category_id'];
    }

    /**
     * Sets product_category_id.
     *
     * @param string $product_category_id the identifier for the product category (or browse node)
     *
     * @return $this
     */
    public function setProductCategoryId($product_category_id)
    {
        $this->container['product_category_id'] = $product_category_id;

        return $this;
    }

    /**
     * Gets product_category_name.
     *
     * @return string
     */
    public function getProductCategoryName()
    {
        return $this->container['product_category_name'];
    }

    /**
     * Sets product_category_name.
     *
     * @param string $product_category_name the name of the product category (or browse node)
     *
     * @return $this
     */
    public function setProductCategoryName($product_category_name)
    {
        $this->container['product_category_name'] = $product_category_name;

        return $this;
    }

    /**
     * Gets parent.
     *
     * @return object
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent.
     *
     * @param object $parent the parent product category
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

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
