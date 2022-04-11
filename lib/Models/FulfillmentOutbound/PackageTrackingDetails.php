<?php
/**
 * PackageTrackingDetails.
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
 * PackageTrackingDetails Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PackageTrackingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PackageTrackingDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'package_number' => 'int',
'tracking_number' => 'string',
'customer_tracking_link' => 'string',
'carrier_code' => 'string',
'carrier_phone_number' => 'string',
'carrier_url' => 'string',
'ship_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'estimated_arrival_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'ship_to_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\TrackingAddress',
'current_status' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CurrentStatus',
'current_status_description' => 'string',
'signed_for_by' => 'string',
'additional_location_info' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\AdditionalLocationInfo',
'tracking_events' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\TrackingEventList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'package_number' => 'int32',
'tracking_number' => null,
'customer_tracking_link' => null,
'carrier_code' => null,
'carrier_phone_number' => null,
'carrier_url' => null,
'ship_date' => null,
'estimated_arrival_date' => null,
'ship_to_address' => null,
'current_status' => null,
'current_status_description' => null,
'signed_for_by' => null,
'additional_location_info' => null,
'tracking_events' => null,    ];

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
        'package_number' => 'packageNumber',
'tracking_number' => 'trackingNumber',
'customer_tracking_link' => 'customerTrackingLink',
'carrier_code' => 'carrierCode',
'carrier_phone_number' => 'carrierPhoneNumber',
'carrier_url' => 'carrierURL',
'ship_date' => 'shipDate',
'estimated_arrival_date' => 'estimatedArrivalDate',
'ship_to_address' => 'shipToAddress',
'current_status' => 'currentStatus',
'current_status_description' => 'currentStatusDescription',
'signed_for_by' => 'signedForBy',
'additional_location_info' => 'additionalLocationInfo',
'tracking_events' => 'trackingEvents',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'package_number' => 'setPackageNumber',
'tracking_number' => 'setTrackingNumber',
'customer_tracking_link' => 'setCustomerTrackingLink',
'carrier_code' => 'setCarrierCode',
'carrier_phone_number' => 'setCarrierPhoneNumber',
'carrier_url' => 'setCarrierUrl',
'ship_date' => 'setShipDate',
'estimated_arrival_date' => 'setEstimatedArrivalDate',
'ship_to_address' => 'setShipToAddress',
'current_status' => 'setCurrentStatus',
'current_status_description' => 'setCurrentStatusDescription',
'signed_for_by' => 'setSignedForBy',
'additional_location_info' => 'setAdditionalLocationInfo',
'tracking_events' => 'setTrackingEvents',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'package_number' => 'getPackageNumber',
'tracking_number' => 'getTrackingNumber',
'customer_tracking_link' => 'getCustomerTrackingLink',
'carrier_code' => 'getCarrierCode',
'carrier_phone_number' => 'getCarrierPhoneNumber',
'carrier_url' => 'getCarrierUrl',
'ship_date' => 'getShipDate',
'estimated_arrival_date' => 'getEstimatedArrivalDate',
'ship_to_address' => 'getShipToAddress',
'current_status' => 'getCurrentStatus',
'current_status_description' => 'getCurrentStatusDescription',
'signed_for_by' => 'getSignedForBy',
'additional_location_info' => 'getAdditionalLocationInfo',
'tracking_events' => 'getTrackingEvents',    ];

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
        $this->container['package_number'] = isset($data['package_number']) ? $data['package_number'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['customer_tracking_link'] = isset($data['customer_tracking_link']) ? $data['customer_tracking_link'] : null;
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['carrier_phone_number'] = isset($data['carrier_phone_number']) ? $data['carrier_phone_number'] : null;
        $this->container['carrier_url'] = isset($data['carrier_url']) ? $data['carrier_url'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['estimated_arrival_date'] = isset($data['estimated_arrival_date']) ? $data['estimated_arrival_date'] : null;
        $this->container['ship_to_address'] = isset($data['ship_to_address']) ? $data['ship_to_address'] : null;
        $this->container['current_status'] = isset($data['current_status']) ? $data['current_status'] : null;
        $this->container['current_status_description'] = isset($data['current_status_description']) ? $data['current_status_description'] : null;
        $this->container['signed_for_by'] = isset($data['signed_for_by']) ? $data['signed_for_by'] : null;
        $this->container['additional_location_info'] = isset($data['additional_location_info']) ? $data['additional_location_info'] : null;
        $this->container['tracking_events'] = isset($data['tracking_events']) ? $data['tracking_events'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['package_number']) {
            $invalidProperties[] = "'package_number' can't be null";
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
     * Gets package_number.
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number.
     *
     * @param int $package_number the package identifier
     *
     * @return $this
     */
    public function setPackageNumber($package_number)
    {
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets tracking_number.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param string $tracking_number the tracking number for the package
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets customer_tracking_link.
     *
     * @return string
     */
    public function getCustomerTrackingLink()
    {
        return $this->container['customer_tracking_link'];
    }

    /**
     * Sets customer_tracking_link.
     *
     * @param string $customer_tracking_link Link on swiship.com that allows customers to track the package.
     *
     * @return $this
     */
    public function setCustomerTrackingLink($customer_tracking_link)
    {
        $this->container['customer_tracking_link'] = $customer_tracking_link;

        return $this;
    }

    /**
     * Gets carrier_code.
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code.
     *
     * @param string $carrier_code the name of the carrier
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_phone_number.
     *
     * @return string
     */
    public function getCarrierPhoneNumber()
    {
        return $this->container['carrier_phone_number'];
    }

    /**
     * Sets carrier_phone_number.
     *
     * @param string $carrier_phone_number the phone number of the carrier
     *
     * @return $this
     */
    public function setCarrierPhoneNumber($carrier_phone_number)
    {
        $this->container['carrier_phone_number'] = $carrier_phone_number;

        return $this;
    }

    /**
     * Gets carrier_url.
     *
     * @return string
     */
    public function getCarrierUrl()
    {
        return $this->container['carrier_url'];
    }

    /**
     * Sets carrier_url.
     *
     * @param string $carrier_url the URL of the carrier’s website
     *
     * @return $this
     */
    public function setCarrierUrl($carrier_url)
    {
        $this->container['carrier_url'] = $carrier_url;

        return $this;
    }

    /**
     * Gets ship_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $ship_date ship_date
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets estimated_arrival_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $estimated_arrival_date estimated_arrival_date
     *
     * @return $this
     */
    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Gets ship_to_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\TrackingAddress
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\TrackingAddress $ship_to_address ship_to_address
     *
     * @return $this
     */
    public function setShipToAddress($ship_to_address)
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets current_status.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CurrentStatus
     */
    public function getCurrentStatus()
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CurrentStatus $current_status current_status
     *
     * @return $this
     */
    public function setCurrentStatus($current_status)
    {
        $this->container['current_status'] = $current_status;

        return $this;
    }

    /**
     * Gets current_status_description.
     *
     * @return string
     */
    public function getCurrentStatusDescription()
    {
        return $this->container['current_status_description'];
    }

    /**
     * Sets current_status_description.
     *
     * @param string $current_status_description description corresponding to the CurrentStatus value
     *
     * @return $this
     */
    public function setCurrentStatusDescription($current_status_description)
    {
        $this->container['current_status_description'] = $current_status_description;

        return $this;
    }

    /**
     * Gets signed_for_by.
     *
     * @return string
     */
    public function getSignedForBy()
    {
        return $this->container['signed_for_by'];
    }

    /**
     * Sets signed_for_by.
     *
     * @param string $signed_for_by the name of the person who signed for the package
     *
     * @return $this
     */
    public function setSignedForBy($signed_for_by)
    {
        $this->container['signed_for_by'] = $signed_for_by;

        return $this;
    }

    /**
     * Gets additional_location_info.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\AdditionalLocationInfo
     */
    public function getAdditionalLocationInfo()
    {
        return $this->container['additional_location_info'];
    }

    /**
     * Sets additional_location_info.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\AdditionalLocationInfo $additional_location_info additional_location_info
     *
     * @return $this
     */
    public function setAdditionalLocationInfo($additional_location_info)
    {
        $this->container['additional_location_info'] = $additional_location_info;

        return $this;
    }

    /**
     * Gets tracking_events.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\TrackingEventList
     */
    public function getTrackingEvents()
    {
        return $this->container['tracking_events'];
    }

    /**
     * Sets tracking_events.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\TrackingEventList $tracking_events tracking_events
     *
     * @return $this
     */
    public function setTrackingEvents($tracking_events)
    {
        $this->container['tracking_events'] = $tracking_events;

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
