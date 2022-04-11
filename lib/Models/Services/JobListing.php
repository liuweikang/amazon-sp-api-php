<?php
/**
 * JobListing.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Services;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * JobListing Class Doc Comment.
 *

 * @description The payload for the GetJobs operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class JobListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'JobListing';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'total_result_size' => 'int',
'next_page_token' => 'string',
'previous_page_token' => 'string',
'jobs' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJob[]',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'total_result_size' => null,
'next_page_token' => null,
'previous_page_token' => null,
'jobs' => null,    ];

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
        'total_result_size' => 'totalResultSize',
'next_page_token' => 'nextPageToken',
'previous_page_token' => 'previousPageToken',
'jobs' => 'jobs',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'total_result_size' => 'setTotalResultSize',
'next_page_token' => 'setNextPageToken',
'previous_page_token' => 'setPreviousPageToken',
'jobs' => 'setJobs',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'total_result_size' => 'getTotalResultSize',
'next_page_token' => 'getNextPageToken',
'previous_page_token' => 'getPreviousPageToken',
'jobs' => 'getJobs',    ];

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
        $this->container['total_result_size'] = isset($data['total_result_size']) ? $data['total_result_size'] : null;
        $this->container['next_page_token'] = isset($data['next_page_token']) ? $data['next_page_token'] : null;
        $this->container['previous_page_token'] = isset($data['previous_page_token']) ? $data['previous_page_token'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
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
     * Gets total_result_size.
     *
     * @return int
     */
    public function getTotalResultSize()
    {
        return $this->container['total_result_size'];
    }

    /**
     * Sets total_result_size.
     *
     * @param int $total_result_size total result size of the query result
     *
     * @return $this
     */
    public function setTotalResultSize($total_result_size)
    {
        $this->container['total_result_size'] = $total_result_size;

        return $this;
    }

    /**
     * Gets next_page_token.
     *
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->container['next_page_token'];
    }

    /**
     * Sets next_page_token.
     *
     * @param string $next_page_token A generated string used to pass information to your next request.If nextPageToken is returned, pass the value of nextPageToken to the pageToken to get next results.
     *
     * @return $this
     */
    public function setNextPageToken($next_page_token)
    {
        $this->container['next_page_token'] = $next_page_token;

        return $this;
    }

    /**
     * Gets previous_page_token.
     *
     * @return string
     */
    public function getPreviousPageToken()
    {
        return $this->container['previous_page_token'];
    }

    /**
     * Sets previous_page_token.
     *
     * @param string $previous_page_token A generated string used to pass information to your next request.If previousPageToken is returned, pass the value of previousPageToken to the pageToken to get previous page results.
     *
     * @return $this
     */
    public function setPreviousPageToken($previous_page_token)
    {
        $this->container['previous_page_token'] = $previous_page_token;

        return $this;
    }

    /**
     * Gets jobs.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJob[]
     */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
     * Sets jobs.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJob[] $jobs list of job details for the given input
     *
     * @return $this
     */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;

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
