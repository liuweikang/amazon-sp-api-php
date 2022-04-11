<?php
/**
 * ReturnAuthorization.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ReturnAuthorization Class Doc Comment.
 *

 * @description Return authorization information for items accepted for return.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ReturnAuthorization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ReturnAuthorization';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'return_authorization_id' => 'string',
'fulfillment_center_id' => 'string',
'return_to_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address',
'amazon_rma_id' => 'string',
'rma_page_url' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'return_authorization_id' => null,
'fulfillment_center_id' => null,
'return_to_address' => null,
'amazon_rma_id' => null,
'rma_page_url' => null,    ];

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
        'return_authorization_id' => 'returnAuthorizationId',
'fulfillment_center_id' => 'fulfillmentCenterId',
'return_to_address' => 'returnToAddress',
'amazon_rma_id' => 'amazonRmaId',
'rma_page_url' => 'rmaPageURL',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'return_authorization_id' => 'setReturnAuthorizationId',
'fulfillment_center_id' => 'setFulfillmentCenterId',
'return_to_address' => 'setReturnToAddress',
'amazon_rma_id' => 'setAmazonRmaId',
'rma_page_url' => 'setRmaPageUrl',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'return_authorization_id' => 'getReturnAuthorizationId',
'fulfillment_center_id' => 'getFulfillmentCenterId',
'return_to_address' => 'getReturnToAddress',
'amazon_rma_id' => 'getAmazonRmaId',
'rma_page_url' => 'getRmaPageUrl',    ];

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
        $this->container['return_authorization_id'] = isset($data['return_authorization_id']) ? $data['return_authorization_id'] : null;
        $this->container['fulfillment_center_id'] = isset($data['fulfillment_center_id']) ? $data['fulfillment_center_id'] : null;
        $this->container['return_to_address'] = isset($data['return_to_address']) ? $data['return_to_address'] : null;
        $this->container['amazon_rma_id'] = isset($data['amazon_rma_id']) ? $data['amazon_rma_id'] : null;
        $this->container['rma_page_url'] = isset($data['rma_page_url']) ? $data['rma_page_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['return_authorization_id']) {
            $invalidProperties[] = "'return_authorization_id' can't be null";
        }
        if (null === $this->container['fulfillment_center_id']) {
            $invalidProperties[] = "'fulfillment_center_id' can't be null";
        }
        if (null === $this->container['return_to_address']) {
            $invalidProperties[] = "'return_to_address' can't be null";
        }
        if (null === $this->container['amazon_rma_id']) {
            $invalidProperties[] = "'amazon_rma_id' can't be null";
        }
        if (null === $this->container['rma_page_url']) {
            $invalidProperties[] = "'rma_page_url' can't be null";
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
     * Gets return_authorization_id.
     *
     * @return string
     */
    public function getReturnAuthorizationId()
    {
        return $this->container['return_authorization_id'];
    }

    /**
     * Sets return_authorization_id.
     *
     * @param string $return_authorization_id An identifier for the return authorization. This identifier associates return items with the return authorization used to return them.
     *
     * @return $this
     */
    public function setReturnAuthorizationId($return_authorization_id)
    {
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }

    /**
     * Gets fulfillment_center_id.
     *
     * @return string
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id.
     *
     * @param string $fulfillment_center_id an identifier for the Amazon fulfillment center that the return items should be sent to
     *
     * @return $this
     */
    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }

    /**
     * Gets return_to_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address
     */
    public function getReturnToAddress()
    {
        return $this->container['return_to_address'];
    }

    /**
     * Sets return_to_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address $return_to_address return_to_address
     *
     * @return $this
     */
    public function setReturnToAddress($return_to_address)
    {
        $this->container['return_to_address'] = $return_to_address;

        return $this;
    }

    /**
     * Gets amazon_rma_id.
     *
     * @return string
     */
    public function getAmazonRmaId()
    {
        return $this->container['amazon_rma_id'];
    }

    /**
     * Sets amazon_rma_id.
     *
     * @param string $amazon_rma_id the return merchandise authorization (RMA) that Amazon needs to process the return
     *
     * @return $this
     */
    public function setAmazonRmaId($amazon_rma_id)
    {
        $this->container['amazon_rma_id'] = $amazon_rma_id;

        return $this;
    }

    /**
     * Gets rma_page_url.
     *
     * @return string
     */
    public function getRmaPageUrl()
    {
        return $this->container['rma_page_url'];
    }

    /**
     * Sets rma_page_url.
     *
     * @param string $rma_page_url A URL for a web page that contains the return authorization barcode and the mailing label. This does not include pre-paid shipping.
     *
     * @return $this
     */
    public function setRmaPageUrl($rma_page_url)
    {
        $this->container['rma_page_url'] = $rma_page_url;

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
