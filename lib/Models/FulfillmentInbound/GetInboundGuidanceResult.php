<?php
/**
 * GetInboundGuidanceResult.
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
 * GetInboundGuidanceResult Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetInboundGuidanceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetInboundGuidanceResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'sku_inbound_guidance_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SKUInboundGuidanceList',
'invalid_sku_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InvalidSKUList',
'asin_inbound_guidance_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ASINInboundGuidanceList',
'invalid_asin_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InvalidASINList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'sku_inbound_guidance_list' => null,
'invalid_sku_list' => null,
'asin_inbound_guidance_list' => null,
'invalid_asin_list' => null,    ];

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
        'sku_inbound_guidance_list' => 'SKUInboundGuidanceList',
'invalid_sku_list' => 'InvalidSKUList',
'asin_inbound_guidance_list' => 'ASINInboundGuidanceList',
'invalid_asin_list' => 'InvalidASINList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'sku_inbound_guidance_list' => 'setSkuInboundGuidanceList',
'invalid_sku_list' => 'setInvalidSkuList',
'asin_inbound_guidance_list' => 'setAsinInboundGuidanceList',
'invalid_asin_list' => 'setInvalidAsinList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'sku_inbound_guidance_list' => 'getSkuInboundGuidanceList',
'invalid_sku_list' => 'getInvalidSkuList',
'asin_inbound_guidance_list' => 'getAsinInboundGuidanceList',
'invalid_asin_list' => 'getInvalidAsinList',    ];

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
        $this->container['sku_inbound_guidance_list'] = isset($data['sku_inbound_guidance_list']) ? $data['sku_inbound_guidance_list'] : null;
        $this->container['invalid_sku_list'] = isset($data['invalid_sku_list']) ? $data['invalid_sku_list'] : null;
        $this->container['asin_inbound_guidance_list'] = isset($data['asin_inbound_guidance_list']) ? $data['asin_inbound_guidance_list'] : null;
        $this->container['invalid_asin_list'] = isset($data['invalid_asin_list']) ? $data['invalid_asin_list'] : null;
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
     * Gets sku_inbound_guidance_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SKUInboundGuidanceList
     */
    public function getSkuInboundGuidanceList()
    {
        return $this->container['sku_inbound_guidance_list'];
    }

    /**
     * Sets sku_inbound_guidance_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SKUInboundGuidanceList $sku_inbound_guidance_list sku_inbound_guidance_list
     *
     * @return $this
     */
    public function setSkuInboundGuidanceList($sku_inbound_guidance_list)
    {
        $this->container['sku_inbound_guidance_list'] = $sku_inbound_guidance_list;

        return $this;
    }

    /**
     * Gets invalid_sku_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InvalidSKUList
     */
    public function getInvalidSkuList()
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InvalidSKUList $invalid_sku_list invalid_sku_list
     *
     * @return $this
     */
    public function setInvalidSkuList($invalid_sku_list)
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }

    /**
     * Gets asin_inbound_guidance_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ASINInboundGuidanceList
     */
    public function getAsinInboundGuidanceList()
    {
        return $this->container['asin_inbound_guidance_list'];
    }

    /**
     * Sets asin_inbound_guidance_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ASINInboundGuidanceList $asin_inbound_guidance_list asin_inbound_guidance_list
     *
     * @return $this
     */
    public function setAsinInboundGuidanceList($asin_inbound_guidance_list)
    {
        $this->container['asin_inbound_guidance_list'] = $asin_inbound_guidance_list;

        return $this;
    }

    /**
     * Gets invalid_asin_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InvalidASINList
     */
    public function getInvalidAsinList()
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InvalidASINList $invalid_asin_list invalid_asin_list
     *
     * @return $this
     */
    public function setInvalidAsinList($invalid_asin_list)
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

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
