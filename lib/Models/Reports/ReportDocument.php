<?php
/**
 * ReportDocument.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Reports;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ReportDocument Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ReportDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ReportDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'report_document_id' => 'string',
'url' => 'string',
'encryption_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\Reports\ReportDocumentEncryptionDetails',
'compression_algorithm' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'report_document_id' => null,
'url' => null,
'encryption_details' => null,
'compression_algorithm' => null,    ];

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
        'report_document_id' => 'reportDocumentId',
'url' => 'url',
'encryption_details' => 'encryptionDetails',
'compression_algorithm' => 'compressionAlgorithm',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'report_document_id' => 'setReportDocumentId',
'url' => 'setUrl',
'encryption_details' => 'setEncryptionDetails',
'compression_algorithm' => 'setCompressionAlgorithm',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'report_document_id' => 'getReportDocumentId',
'url' => 'getUrl',
'encryption_details' => 'getEncryptionDetails',
'compression_algorithm' => 'getCompressionAlgorithm',    ];

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

    const COMPRESSION_ALGORITHM_GZIP = 'GZIP';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues()
    {
        return [
            self::COMPRESSION_ALGORITHM_GZIP,        ];
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
        $this->container['report_document_id'] = isset($data['report_document_id']) ? $data['report_document_id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['encryption_details'] = isset($data['encryption_details']) ? $data['encryption_details'] : null;
        $this->container['compression_algorithm'] = isset($data['compression_algorithm']) ? $data['compression_algorithm'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['report_document_id']) {
            $invalidProperties[] = "'report_document_id' can't be null";
        }
        if (null === $this->container['url']) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (null === $this->container['encryption_details']) {
            $invalidProperties[] = "'encryption_details' can't be null";
        }
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($this->container['compression_algorithm']) && !in_array($this->container['compression_algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compression_algorithm', must be one of '%s'",
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
     * Gets report_document_id.
     *
     * @return string
     */
    public function getReportDocumentId()
    {
        return $this->container['report_document_id'];
    }

    /**
     * Sets report_document_id.
     *
     * @param string $report_document_id The identifier for the report document. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setReportDocumentId($report_document_id)
    {
        $this->container['report_document_id'] = $report_document_id;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url A presigned URL for the report document. This URL expires after 5 minutes.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets encryption_details.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Reports\ReportDocumentEncryptionDetails
     */
    public function getEncryptionDetails()
    {
        return $this->container['encryption_details'];
    }

    /**
     * Sets encryption_details.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Reports\ReportDocumentEncryptionDetails $encryption_details encryption_details
     *
     * @return $this
     */
    public function setEncryptionDetails($encryption_details)
    {
        $this->container['encryption_details'] = $encryption_details;

        return $this;
    }

    /**
     * Gets compression_algorithm.
     *
     * @return string
     */
    public function getCompressionAlgorithm()
    {
        return $this->container['compression_algorithm'];
    }

    /**
     * Sets compression_algorithm.
     *
     * @param string $compression_algorithm if present, the report document contents have been compressed with the provided algorithm
     *
     * @return $this
     */
    public function setCompressionAlgorithm($compression_algorithm)
    {
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($compression_algorithm) && !in_array($compression_algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compression_algorithm', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['compression_algorithm'] = $compression_algorithm;

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
