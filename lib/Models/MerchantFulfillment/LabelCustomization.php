<?php
/**
 * LabelCustomization.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * LabelCustomization Class Doc Comment.
 *

 * @description Custom text for shipping labels.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class LabelCustomization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'LabelCustomization';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'custom_text_for_label' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CustomTextForLabel',
'standard_id_for_label' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\StandardIdForLabel',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'custom_text_for_label' => null,
'standard_id_for_label' => null,    ];

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
        'custom_text_for_label' => 'CustomTextForLabel',
'standard_id_for_label' => 'StandardIdForLabel',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_text_for_label' => 'setCustomTextForLabel',
'standard_id_for_label' => 'setStandardIdForLabel',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_text_for_label' => 'getCustomTextForLabel',
'standard_id_for_label' => 'getStandardIdForLabel',    ];

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
        $this->container['custom_text_for_label'] = isset($data['custom_text_for_label']) ? $data['custom_text_for_label'] : null;
        $this->container['standard_id_for_label'] = isset($data['standard_id_for_label']) ? $data['standard_id_for_label'] : null;
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
     * Gets custom_text_for_label.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CustomTextForLabel
     */
    public function getCustomTextForLabel()
    {
        return $this->container['custom_text_for_label'];
    }

    /**
     * Sets custom_text_for_label.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CustomTextForLabel $custom_text_for_label custom_text_for_label
     *
     * @return $this
     */
    public function setCustomTextForLabel($custom_text_for_label)
    {
        $this->container['custom_text_for_label'] = $custom_text_for_label;

        return $this;
    }

    /**
     * Gets standard_id_for_label.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\StandardIdForLabel
     */
    public function getStandardIdForLabel()
    {
        return $this->container['standard_id_for_label'];
    }

    /**
     * Sets standard_id_for_label.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\StandardIdForLabel $standard_id_for_label standard_id_for_label
     *
     * @return $this
     */
    public function setStandardIdForLabel($standard_id_for_label)
    {
        $this->container['standard_id_for_label'] = $standard_id_for_label;

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
