<?php
/**
 * Report.
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
 * Report Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Report implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Report';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_ids' => 'string[]',
'report_id' => 'string',
'report_type' => 'string',
'data_start_time' => '\DateTime',
'data_end_time' => '\DateTime',
'report_schedule_id' => 'string',
'created_time' => '\DateTime',
'processing_status' => 'string',
'processing_start_time' => '\DateTime',
'processing_end_time' => '\DateTime',
'report_document_id' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_ids' => null,
'report_id' => null,
'report_type' => null,
'data_start_time' => 'date-time',
'data_end_time' => 'date-time',
'report_schedule_id' => null,
'created_time' => 'date-time',
'processing_status' => null,
'processing_start_time' => 'date-time',
'processing_end_time' => 'date-time',
'report_document_id' => null,    ];

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
        'marketplace_ids' => 'marketplaceIds',
'report_id' => 'reportId',
'report_type' => 'reportType',
'data_start_time' => 'dataStartTime',
'data_end_time' => 'dataEndTime',
'report_schedule_id' => 'reportScheduleId',
'created_time' => 'createdTime',
'processing_status' => 'processingStatus',
'processing_start_time' => 'processingStartTime',
'processing_end_time' => 'processingEndTime',
'report_document_id' => 'reportDocumentId',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_ids' => 'setMarketplaceIds',
'report_id' => 'setReportId',
'report_type' => 'setReportType',
'data_start_time' => 'setDataStartTime',
'data_end_time' => 'setDataEndTime',
'report_schedule_id' => 'setReportScheduleId',
'created_time' => 'setCreatedTime',
'processing_status' => 'setProcessingStatus',
'processing_start_time' => 'setProcessingStartTime',
'processing_end_time' => 'setProcessingEndTime',
'report_document_id' => 'setReportDocumentId',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_ids' => 'getMarketplaceIds',
'report_id' => 'getReportId',
'report_type' => 'getReportType',
'data_start_time' => 'getDataStartTime',
'data_end_time' => 'getDataEndTime',
'report_schedule_id' => 'getReportScheduleId',
'created_time' => 'getCreatedTime',
'processing_status' => 'getProcessingStatus',
'processing_start_time' => 'getProcessingStartTime',
'processing_end_time' => 'getProcessingEndTime',
'report_document_id' => 'getReportDocumentId',    ];

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

    const PROCESSING_STATUS_CANCELLED = 'CANCELLED';
    const PROCESSING_STATUS_DONE = 'DONE';
    const PROCESSING_STATUS_FATAL = 'FATAL';
    const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
self::PROCESSING_STATUS_DONE,
self::PROCESSING_STATUS_FATAL,
self::PROCESSING_STATUS_IN_PROGRESS,
self::PROCESSING_STATUS_IN_QUEUE,        ];
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
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['report_id'] = isset($data['report_id']) ? $data['report_id'] : null;
        $this->container['report_type'] = isset($data['report_type']) ? $data['report_type'] : null;
        $this->container['data_start_time'] = isset($data['data_start_time']) ? $data['data_start_time'] : null;
        $this->container['data_end_time'] = isset($data['data_end_time']) ? $data['data_end_time'] : null;
        $this->container['report_schedule_id'] = isset($data['report_schedule_id']) ? $data['report_schedule_id'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['processing_start_time'] = isset($data['processing_start_time']) ? $data['processing_start_time'] : null;
        $this->container['processing_end_time'] = isset($data['processing_end_time']) ? $data['processing_end_time'] : null;
        $this->container['report_document_id'] = isset($data['report_document_id']) ? $data['report_document_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['report_id']) {
            $invalidProperties[] = "'report_id' can't be null";
        }
        if (null === $this->container['report_type']) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        if (null === $this->container['created_time']) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if (null === $this->container['processing_status']) {
            $invalidProperties[] = "'processing_status' can't be null";
        }
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($this->container['processing_status']) && !in_array($this->container['processing_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'processing_status', must be one of '%s'",
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
     * @param string[] $marketplace_ids a list of marketplace identifiers for the report
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets report_id.
     *
     * @return string
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setReportId($report_id)
    {
        $this->container['report_id'] = $report_id;

        return $this;
    }

    /**
     * Gets report_type.
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string $report_type the report type
     *
     * @return $this
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets data_start_time.
     *
     * @return \DateTime
     */
    public function getDataStartTime()
    {
        return $this->container['data_start_time'];
    }

    /**
     * Sets data_start_time.
     *
     * @param \DateTime $data_start_time the start of a date and time range used for selecting the data to report
     *
     * @return $this
     */
    public function setDataStartTime($data_start_time)
    {
        $this->container['data_start_time'] = $data_start_time;

        return $this;
    }

    /**
     * Gets data_end_time.
     *
     * @return \DateTime
     */
    public function getDataEndTime()
    {
        return $this->container['data_end_time'];
    }

    /**
     * Sets data_end_time.
     *
     * @param \DateTime $data_end_time the end of a date and time range used for selecting the data to report
     *
     * @return $this
     */
    public function setDataEndTime($data_end_time)
    {
        $this->container['data_end_time'] = $data_end_time;

        return $this;
    }

    /**
     * Gets report_schedule_id.
     *
     * @return string
     */
    public function getReportScheduleId()
    {
        return $this->container['report_schedule_id'];
    }

    /**
     * Sets report_schedule_id.
     *
     * @param string $report_schedule_id The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setReportScheduleId($report_schedule_id)
    {
        $this->container['report_schedule_id'] = $report_schedule_id;

        return $this;
    }

    /**
     * Gets created_time.
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time.
     *
     * @param \DateTime $created_time the date and time when the report was created
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets processing_status.
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status.
     *
     * @param string $processing_status the processing status of the report
     *
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!in_array($processing_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'processing_status', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets processing_start_time.
     *
     * @return \DateTime
     */
    public function getProcessingStartTime()
    {
        return $this->container['processing_start_time'];
    }

    /**
     * Sets processing_start_time.
     *
     * @param \DateTime $processing_start_time the date and time when the report processing started, in ISO 8601 date time format
     *
     * @return $this
     */
    public function setProcessingStartTime($processing_start_time)
    {
        $this->container['processing_start_time'] = $processing_start_time;

        return $this;
    }

    /**
     * Gets processing_end_time.
     *
     * @return \DateTime
     */
    public function getProcessingEndTime()
    {
        return $this->container['processing_end_time'];
    }

    /**
     * Sets processing_end_time.
     *
     * @param \DateTime $processing_end_time the date and time when the report processing completed, in ISO 8601 date time format
     *
     * @return $this
     */
    public function setProcessingEndTime($processing_end_time)
    {
        $this->container['processing_end_time'] = $processing_end_time;

        return $this;
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
     * @param string $report_document_id The identifier for the report document. Pass this into the getReportDocument operation to get the information you will need to retrieve and decrypt the report document's contents.
     *
     * @return $this
     */
    public function setReportDocumentId($report_document_id)
    {
        $this->container['report_document_id'] = $report_document_id;

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
