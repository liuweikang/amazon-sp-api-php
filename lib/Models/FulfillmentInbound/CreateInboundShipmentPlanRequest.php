<?php
/**
 * CreateInboundShipmentPlanRequest.
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
 * CreateInboundShipmentPlanRequest Class Doc Comment.
 *

 * @description The request schema for the createInboundShipmentPlan operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CreateInboundShipmentPlanRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateInboundShipmentPlanRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ship_from_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address',
'label_prep_preference' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepPreference',
'ship_to_country_code' => 'string',
'ship_to_country_subdivision_code' => 'string',
'inbound_shipment_plan_request_items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InboundShipmentPlanRequestItemList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'ship_from_address' => null,
'label_prep_preference' => null,
'ship_to_country_code' => null,
'ship_to_country_subdivision_code' => null,
'inbound_shipment_plan_request_items' => null,    ];

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
        'ship_from_address' => 'ShipFromAddress',
'label_prep_preference' => 'LabelPrepPreference',
'ship_to_country_code' => 'ShipToCountryCode',
'ship_to_country_subdivision_code' => 'ShipToCountrySubdivisionCode',
'inbound_shipment_plan_request_items' => 'InboundShipmentPlanRequestItems',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_from_address' => 'setShipFromAddress',
'label_prep_preference' => 'setLabelPrepPreference',
'ship_to_country_code' => 'setShipToCountryCode',
'ship_to_country_subdivision_code' => 'setShipToCountrySubdivisionCode',
'inbound_shipment_plan_request_items' => 'setInboundShipmentPlanRequestItems',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_from_address' => 'getShipFromAddress',
'label_prep_preference' => 'getLabelPrepPreference',
'ship_to_country_code' => 'getShipToCountryCode',
'ship_to_country_subdivision_code' => 'getShipToCountrySubdivisionCode',
'inbound_shipment_plan_request_items' => 'getInboundShipmentPlanRequestItems',    ];

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
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['label_prep_preference'] = isset($data['label_prep_preference']) ? $data['label_prep_preference'] : null;
        $this->container['ship_to_country_code'] = isset($data['ship_to_country_code']) ? $data['ship_to_country_code'] : null;
        $this->container['ship_to_country_subdivision_code'] = isset($data['ship_to_country_subdivision_code']) ? $data['ship_to_country_subdivision_code'] : null;
        $this->container['inbound_shipment_plan_request_items'] = isset($data['inbound_shipment_plan_request_items']) ? $data['inbound_shipment_plan_request_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['ship_from_address']) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if (null === $this->container['label_prep_preference']) {
            $invalidProperties[] = "'label_prep_preference' can't be null";
        }
        if (null === $this->container['inbound_shipment_plan_request_items']) {
            $invalidProperties[] = "'inbound_shipment_plan_request_items' can't be null";
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
     * Gets ship_from_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address $ship_from_address ship_from_address
     *
     * @return $this
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets label_prep_preference.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepPreference
     */
    public function getLabelPrepPreference()
    {
        return $this->container['label_prep_preference'];
    }

    /**
     * Sets label_prep_preference.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepPreference $label_prep_preference label_prep_preference
     *
     * @return $this
     */
    public function setLabelPrepPreference($label_prep_preference)
    {
        $this->container['label_prep_preference'] = $label_prep_preference;

        return $this;
    }

    /**
     * Gets ship_to_country_code.
     *
     * @return string
     */
    public function getShipToCountryCode()
    {
        return $this->container['ship_to_country_code'];
    }

    /**
     * Sets ship_to_country_code.
     *
     * @param string $ship_to_country_code The two-character country code for the country where the inbound shipment is to be sent.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.   Values:   ShipToCountryCode values for North America:  * CA – Canada  * MX - Mexico  * US - United States  ShipToCountryCode values for MCI sellers in Europe:  * DE – Germany  * ES – Spain  * FR – France  * GB – United Kingdom  * IT – Italy  Default: The country code for the seller's home marketplace.
     *
     * @return $this
     */
    public function setShipToCountryCode($ship_to_country_code)
    {
        $this->container['ship_to_country_code'] = $ship_to_country_code;

        return $this;
    }

    /**
     * Gets ship_to_country_subdivision_code.
     *
     * @return string
     */
    public function getShipToCountrySubdivisionCode()
    {
        return $this->container['ship_to_country_subdivision_code'];
    }

    /**
     * Sets ship_to_country_subdivision_code.
     *
     * @param string $ship_to_country_subdivision_code The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, \"IN-MH\". In full ISO 3166-2 format.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     *
     * @return $this
     */
    public function setShipToCountrySubdivisionCode($ship_to_country_subdivision_code)
    {
        $this->container['ship_to_country_subdivision_code'] = $ship_to_country_subdivision_code;

        return $this;
    }

    /**
     * Gets inbound_shipment_plan_request_items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InboundShipmentPlanRequestItemList
     */
    public function getInboundShipmentPlanRequestItems()
    {
        return $this->container['inbound_shipment_plan_request_items'];
    }

    /**
     * Sets inbound_shipment_plan_request_items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\InboundShipmentPlanRequestItemList $inbound_shipment_plan_request_items inbound_shipment_plan_request_items
     *
     * @return $this
     */
    public function setInboundShipmentPlanRequestItems($inbound_shipment_plan_request_items)
    {
        $this->container['inbound_shipment_plan_request_items'] = $inbound_shipment_plan_request_items;

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
