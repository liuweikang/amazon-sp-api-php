<?php
/**
 * LabelSpecification.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Shipping;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * LabelSpecification Class Doc Comment.
 *

 * @description The label specification info.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class LabelSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'LabelSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'label_format' => 'string',
'label_stock_size' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'label_format' => null,
'label_stock_size' => null,    ];

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
        'label_format' => 'labelFormat',
'label_stock_size' => 'labelStockSize',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'label_format' => 'setLabelFormat',
'label_stock_size' => 'setLabelStockSize',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'label_format' => 'getLabelFormat',
'label_stock_size' => 'getLabelStockSize',    ];

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

    const LABEL_FORMAT_PNG = 'PNG';
    const LABEL_STOCK_SIZE__4X6 = '4x6';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getLabelFormatAllowableValues()
    {
        return [
            self::LABEL_FORMAT_PNG,        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getLabelStockSizeAllowableValues()
    {
        return [
            self::LABEL_STOCK_SIZE__4X6,        ];
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
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : null;
        $this->container['label_stock_size'] = isset($data['label_stock_size']) ? $data['label_stock_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['label_format']) {
            $invalidProperties[] = "'label_format' can't be null";
        }
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($this->container['label_format']) && !in_array($this->container['label_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (null === $this->container['label_stock_size']) {
            $invalidProperties[] = "'label_stock_size' can't be null";
        }
        $allowedValues = $this->getLabelStockSizeAllowableValues();
        if (!is_null($this->container['label_stock_size']) && !in_array($this->container['label_stock_size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_stock_size', must be one of '%s'",
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
     * Gets label_format.
     *
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format.
     *
     * @param string $label_format The format of the label. Enum of PNG only for now.
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!in_array($label_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'label_format', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets label_stock_size.
     *
     * @return string
     */
    public function getLabelStockSize()
    {
        return $this->container['label_stock_size'];
    }

    /**
     * Sets label_stock_size.
     *
     * @param string $label_stock_size The label stock size specification in length and height. Enum of 4x6 only for now.
     *
     * @return $this
     */
    public function setLabelStockSize($label_stock_size)
    {
        $allowedValues = $this->getLabelStockSizeAllowableValues();
        if (!in_array($label_stock_size, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'label_stock_size', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['label_stock_size'] = $label_stock_size;

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
