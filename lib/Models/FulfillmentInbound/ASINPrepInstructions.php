<?php
/**
 * ASINPrepInstructions.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ASINPrepInstructions Class Doc Comment.
 *

 * @description Item preparation instructions to help with item sourcing decisions.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ASINPrepInstructions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ASINPrepInstructions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
'barcode_instruction' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BarcodeInstruction',
'prep_guidance' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepGuidance',
'prep_instruction_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstructionList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
'barcode_instruction' => null,
'prep_guidance' => null,
'prep_instruction_list' => null,    ];

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
        'asin' => 'ASIN',
'barcode_instruction' => 'BarcodeInstruction',
'prep_guidance' => 'PrepGuidance',
'prep_instruction_list' => 'PrepInstructionList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
'barcode_instruction' => 'setBarcodeInstruction',
'prep_guidance' => 'setPrepGuidance',
'prep_instruction_list' => 'setPrepInstructionList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
'barcode_instruction' => 'getBarcodeInstruction',
'prep_guidance' => 'getPrepGuidance',
'prep_instruction_list' => 'getPrepInstructionList',    ];

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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['barcode_instruction'] = isset($data['barcode_instruction']) ? $data['barcode_instruction'] : null;
        $this->container['prep_guidance'] = isset($data['prep_guidance']) ? $data['prep_guidance'] : null;
        $this->container['prep_instruction_list'] = isset($data['prep_instruction_list']) ? $data['prep_instruction_list'] : null;
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
     * Gets barcode_instruction.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BarcodeInstruction
     */
    public function getBarcodeInstruction()
    {
        return $this->container['barcode_instruction'];
    }

    /**
     * Sets barcode_instruction.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BarcodeInstruction $barcode_instruction barcode_instruction
     *
     * @return $this
     */
    public function setBarcodeInstruction($barcode_instruction)
    {
        $this->container['barcode_instruction'] = $barcode_instruction;

        return $this;
    }

    /**
     * Gets prep_guidance.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepGuidance
     */
    public function getPrepGuidance()
    {
        return $this->container['prep_guidance'];
    }

    /**
     * Sets prep_guidance.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepGuidance $prep_guidance prep_guidance
     *
     * @return $this
     */
    public function setPrepGuidance($prep_guidance)
    {
        $this->container['prep_guidance'] = $prep_guidance;

        return $this;
    }

    /**
     * Gets prep_instruction_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstructionList
     */
    public function getPrepInstructionList()
    {
        return $this->container['prep_instruction_list'];
    }

    /**
     * Sets prep_instruction_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstructionList $prep_instruction_list prep_instruction_list
     *
     * @return $this
     */
    public function setPrepInstructionList($prep_instruction_list)
    {
        $this->container['prep_instruction_list'] = $prep_instruction_list;

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
