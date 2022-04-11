<?php
/**
 * CreateFeedSpecification.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Feeds.
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Feeds;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * CreateFeedSpecification Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CreateFeedSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateFeedSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'feed_type' => 'string',
'marketplace_ids' => 'string[]',
'input_feed_document_id' => 'string',
'feed_options' => '\ClouSale\AmazonSellingPartnerAPI\Models\Feeds\FeedOptions',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'feed_type' => null,
'marketplace_ids' => null,
'input_feed_document_id' => null,
'feed_options' => null,    ];

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
        'feed_type' => 'feedType',
'marketplace_ids' => 'marketplaceIds',
'input_feed_document_id' => 'inputFeedDocumentId',
'feed_options' => 'feedOptions',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_type' => 'setFeedType',
'marketplace_ids' => 'setMarketplaceIds',
'input_feed_document_id' => 'setInputFeedDocumentId',
'feed_options' => 'setFeedOptions',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_type' => 'getFeedType',
'marketplace_ids' => 'getMarketplaceIds',
'input_feed_document_id' => 'getInputFeedDocumentId',
'feed_options' => 'getFeedOptions',    ];

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
        $this->container['feed_type'] = isset($data['feed_type']) ? $data['feed_type'] : null;
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['input_feed_document_id'] = isset($data['input_feed_document_id']) ? $data['input_feed_document_id'] : null;
        $this->container['feed_options'] = isset($data['feed_options']) ? $data['feed_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['feed_type']) {
            $invalidProperties[] = "'feed_type' can't be null";
        }
        if (null === $this->container['marketplace_ids']) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if (null === $this->container['input_feed_document_id']) {
            $invalidProperties[] = "'input_feed_document_id' can't be null";
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
     * Gets feed_type.
     *
     * @return string
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type.
     *
     * @param string $feed_type the feed type
     *
     * @return $this
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids a list of identifiers for marketplaces that you want the feed to be applied to
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets input_feed_document_id.
     *
     * @return string
     */
    public function getInputFeedDocumentId()
    {
        return $this->container['input_feed_document_id'];
    }

    /**
     * Sets input_feed_document_id.
     *
     * @param string $input_feed_document_id The document identifier returned by the createFeedDocument operation. Encrypt and upload the feed document contents before calling the createFeed operation.
     *
     * @return $this
     */
    public function setInputFeedDocumentId($input_feed_document_id)
    {
        $this->container['input_feed_document_id'] = $input_feed_document_id;

        return $this;
    }

    /**
     * Gets feed_options.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Feeds\FeedOptions
     */
    public function getFeedOptions()
    {
        return $this->container['feed_options'];
    }

    /**
     * Sets feed_options.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Feeds\FeedOptions $feed_options feed_options
     *
     * @return $this
     */
    public function setFeedOptions($feed_options)
    {
        $this->container['feed_options'] = $feed_options;

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
