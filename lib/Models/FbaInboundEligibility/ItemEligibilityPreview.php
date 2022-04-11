<?php
/**
 * ItemEligibilityPreview.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for FBA Inbound Eligibilty.
 *
 * With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FbaInboundEligibility;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ItemEligibilityPreview Class Doc Comment.
 *

 * @description The response object which contains the ASIN, marketplaceId if required, eligibility program, the eligibility status (boolean), and a list of ineligibility reason codes.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ItemEligibilityPreview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemEligibilityPreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
'marketplace_id' => 'string',
'program' => 'string',
'is_eligible_for_program' => 'bool',
'ineligibility_reason_list' => 'string[]',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
'marketplace_id' => null,
'program' => null,
'is_eligible_for_program' => null,
'ineligibility_reason_list' => null,    ];

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
        'asin' => 'asin',
'marketplace_id' => 'marketplaceId',
'program' => 'program',
'is_eligible_for_program' => 'isEligibleForProgram',
'ineligibility_reason_list' => 'ineligibilityReasonList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
'marketplace_id' => 'setMarketplaceId',
'program' => 'setProgram',
'is_eligible_for_program' => 'setIsEligibleForProgram',
'ineligibility_reason_list' => 'setIneligibilityReasonList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
'marketplace_id' => 'getMarketplaceId',
'program' => 'getProgram',
'is_eligible_for_program' => 'getIsEligibleForProgram',
'ineligibility_reason_list' => 'getIneligibilityReasonList',    ];

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

    const PROGRAM_INBOUND = 'INBOUND';
    const PROGRAM_COMMINGLING = 'COMMINGLING';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0004 = 'FBA_INB_0004';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0006 = 'FBA_INB_0006';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0007 = 'FBA_INB_0007';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0008 = 'FBA_INB_0008';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0009 = 'FBA_INB_0009';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0010 = 'FBA_INB_0010';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0011 = 'FBA_INB_0011';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0012 = 'FBA_INB_0012';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0013 = 'FBA_INB_0013';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0014 = 'FBA_INB_0014';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0015 = 'FBA_INB_0015';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0016 = 'FBA_INB_0016';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0017 = 'FBA_INB_0017';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0018 = 'FBA_INB_0018';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0019 = 'FBA_INB_0019';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0034 = 'FBA_INB_0034';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0035 = 'FBA_INB_0035';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0036 = 'FBA_INB_0036';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0037 = 'FBA_INB_0037';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0038 = 'FBA_INB_0038';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0050 = 'FBA_INB_0050';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0051 = 'FBA_INB_0051';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0053 = 'FBA_INB_0053';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0055 = 'FBA_INB_0055';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0056 = 'FBA_INB_0056';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0059 = 'FBA_INB_0059';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0065 = 'FBA_INB_0065';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0066 = 'FBA_INB_0066';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0067 = 'FBA_INB_0067';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0068 = 'FBA_INB_0068';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0095 = 'FBA_INB_0095';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0097 = 'FBA_INB_0097';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0098 = 'FBA_INB_0098';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0099 = 'FBA_INB_0099';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0100 = 'FBA_INB_0100';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0103 = 'FBA_INB_0103';
    const INELIGIBILITY_REASON_LIST_FBA_INB_0104 = 'FBA_INB_0104';
    const INELIGIBILITY_REASON_LIST_UNKNOWN_INB_ERROR_CODE = 'UNKNOWN_INB_ERROR_CODE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getProgramAllowableValues()
    {
        return [
            self::PROGRAM_INBOUND,
self::PROGRAM_COMMINGLING,        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getIneligibilityReasonListAllowableValues()
    {
        return [
            self::INELIGIBILITY_REASON_LIST_FBA_INB_0004,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0006,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0007,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0008,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0009,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0010,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0011,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0012,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0013,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0014,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0015,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0016,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0017,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0018,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0019,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0034,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0035,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0036,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0037,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0038,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0050,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0051,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0053,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0055,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0056,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0059,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0065,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0066,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0067,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0068,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0095,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0097,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0098,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0099,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0100,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0103,
self::INELIGIBILITY_REASON_LIST_FBA_INB_0104,
self::INELIGIBILITY_REASON_LIST_UNKNOWN_INB_ERROR_CODE,        ];
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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['is_eligible_for_program'] = isset($data['is_eligible_for_program']) ? $data['is_eligible_for_program'] : null;
        $this->container['ineligibility_reason_list'] = isset($data['ineligibility_reason_list']) ? $data['ineligibility_reason_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['asin']) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if (null === $this->container['program']) {
            $invalidProperties[] = "'program' can't be null";
        }
        $allowedValues = $this->getProgramAllowableValues();
        if (!is_null($this->container['program']) && !in_array($this->container['program'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'program', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (null === $this->container['is_eligible_for_program']) {
            $invalidProperties[] = "'is_eligible_for_program' can't be null";
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
     * @param string $asin the ASIN for which eligibility was determined
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the marketplace for which eligibility was determined
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets program.
     *
     * @return string
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program.
     *
     * @param string $program the program for which eligibility was determined
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $allowedValues = $this->getProgramAllowableValues();
        if (!in_array($program, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'program', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets is_eligible_for_program.
     *
     * @return bool
     */
    public function getIsEligibleForProgram()
    {
        return $this->container['is_eligible_for_program'];
    }

    /**
     * Sets is_eligible_for_program.
     *
     * @param bool $is_eligible_for_program indicates if the item is eligible for the program
     *
     * @return $this
     */
    public function setIsEligibleForProgram($is_eligible_for_program)
    {
        $this->container['is_eligible_for_program'] = $is_eligible_for_program;

        return $this;
    }

    /**
     * Gets ineligibility_reason_list.
     *
     * @return string[]
     */
    public function getIneligibilityReasonList()
    {
        return $this->container['ineligibility_reason_list'];
    }

    /**
     * Sets ineligibility_reason_list.
     *
     * @param string[] $ineligibility_reason_list potential Ineligibility Reason Codes
     *
     * @return $this
     */
    public function setIneligibilityReasonList($ineligibility_reason_list)
    {
        $allowedValues = $this->getIneligibilityReasonListAllowableValues();
        if (!is_null($ineligibility_reason_list) && array_diff($ineligibility_reason_list, $allowedValues)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'ineligibility_reason_list', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['ineligibility_reason_list'] = $ineligibility_reason_list;

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
