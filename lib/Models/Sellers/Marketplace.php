<?php
/**
 * Marketplace.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Sellers.
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Sellers;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Marketplace Class Doc Comment.
 *

 * @description Detailed information about an Amazon market where a seller can list items for sale and customers can view and purchase items.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Marketplace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Marketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'country_code' => 'string',
'default_currency_code' => 'string',
'default_language_code' => 'string',
'domain_name' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'country_code' => null,
'default_currency_code' => null,
'default_language_code' => null,
'domain_name' => null,    ];

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
        'id' => 'id',
'name' => 'name',
'country_code' => 'countryCode',
'default_currency_code' => 'defaultCurrencyCode',
'default_language_code' => 'defaultLanguageCode',
'domain_name' => 'domainName',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'country_code' => 'setCountryCode',
'default_currency_code' => 'setDefaultCurrencyCode',
'default_language_code' => 'setDefaultLanguageCode',
'domain_name' => 'setDomainName',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'country_code' => 'getCountryCode',
'default_currency_code' => 'getDefaultCurrencyCode',
'default_language_code' => 'getDefaultLanguageCode',
'domain_name' => 'getDomainName',    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['default_currency_code'] = isset($data['default_currency_code']) ? $data['default_currency_code'] : null;
        $this->container['default_language_code'] = isset($data['default_language_code']) ? $data['default_language_code'] : null;
        $this->container['domain_name'] = isset($data['domain_name']) ? $data['domain_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['id']) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (null === $this->container['name']) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (null === $this->container['country_code']) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if (null === $this->container['default_currency_code']) {
            $invalidProperties[] = "'default_currency_code' can't be null";
        }
        if (null === $this->container['default_language_code']) {
            $invalidProperties[] = "'default_language_code' can't be null";
        }
        if (null === $this->container['domain_name']) {
            $invalidProperties[] = "'domain_name' can't be null";
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
     * Gets id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id the encrypted marketplace value
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name marketplace name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets country_code.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param string $country_code the ISO 3166-1 alpha-2 format country code of the marketplace
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets default_currency_code.
     *
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['default_currency_code'];
    }

    /**
     * Sets default_currency_code.
     *
     * @param string $default_currency_code the ISO 4217 format currency code of the marketplace
     *
     * @return $this
     */
    public function setDefaultCurrencyCode($default_currency_code)
    {
        $this->container['default_currency_code'] = $default_currency_code;

        return $this;
    }

    /**
     * Gets default_language_code.
     *
     * @return string
     */
    public function getDefaultLanguageCode()
    {
        return $this->container['default_language_code'];
    }

    /**
     * Sets default_language_code.
     *
     * @param string $default_language_code the ISO 639-1 format language code of the marketplace
     *
     * @return $this
     */
    public function setDefaultLanguageCode($default_language_code)
    {
        $this->container['default_language_code'] = $default_language_code;

        return $this;
    }

    /**
     * Gets domain_name.
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name.
     *
     * @param string $domain_name the domain name of the marketplace
     *
     * @return $this
     */
    public function setDomainName($domain_name)
    {
        $this->container['domain_name'] = $domain_name;

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
