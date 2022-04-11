<?php
/**
 * RelationshipType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Catalog;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * RelationshipType Class Doc Comment.
 *

 * @description Specific variations of the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class RelationshipType extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RelationshipType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'color' => 'string',
'edition' => 'string',
'flavor' => 'string',
'gem_type' => 'string[]',
'golf_club_flex' => 'string',
'hand_orientation' => 'string',
'hardware_platform' => 'string',
'material_type' => 'string[]',
'metal_type' => 'string',
'model' => 'string',
'operating_system' => 'string[]',
'product_type_subcategory' => 'string',
'ring_size' => 'string',
'shaft_material' => 'string',
'scent' => 'string',
'size' => 'string',
'size_per_pearl' => 'string',
'golf_club_loft' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'total_diamond_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'total_gem_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'package_quantity' => 'int',
'item_dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'color' => null,
'edition' => null,
'flavor' => null,
'gem_type' => null,
'golf_club_flex' => null,
'hand_orientation' => null,
'hardware_platform' => null,
'material_type' => null,
'metal_type' => null,
'model' => null,
'operating_system' => null,
'product_type_subcategory' => null,
'ring_size' => null,
'shaft_material' => null,
'scent' => null,
'size' => null,
'size_per_pearl' => null,
'golf_club_loft' => null,
'total_diamond_weight' => null,
'total_gem_weight' => null,
'package_quantity' => null,
'item_dimensions' => null,    ];

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
        'color' => 'Color',
'edition' => 'Edition',
'flavor' => 'Flavor',
'gem_type' => 'GemType',
'golf_club_flex' => 'GolfClubFlex',
'hand_orientation' => 'HandOrientation',
'hardware_platform' => 'HardwarePlatform',
'material_type' => 'MaterialType',
'metal_type' => 'MetalType',
'model' => 'Model',
'operating_system' => 'OperatingSystem',
'product_type_subcategory' => 'ProductTypeSubcategory',
'ring_size' => 'RingSize',
'shaft_material' => 'ShaftMaterial',
'scent' => 'Scent',
'size' => 'Size',
'size_per_pearl' => 'SizePerPearl',
'golf_club_loft' => 'GolfClubLoft',
'total_diamond_weight' => 'TotalDiamondWeight',
'total_gem_weight' => 'TotalGemWeight',
'package_quantity' => 'PackageQuantity',
'item_dimensions' => 'ItemDimensions',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'color' => 'setColor',
'edition' => 'setEdition',
'flavor' => 'setFlavor',
'gem_type' => 'setGemType',
'golf_club_flex' => 'setGolfClubFlex',
'hand_orientation' => 'setHandOrientation',
'hardware_platform' => 'setHardwarePlatform',
'material_type' => 'setMaterialType',
'metal_type' => 'setMetalType',
'model' => 'setModel',
'operating_system' => 'setOperatingSystem',
'product_type_subcategory' => 'setProductTypeSubcategory',
'ring_size' => 'setRingSize',
'shaft_material' => 'setShaftMaterial',
'scent' => 'setScent',
'size' => 'setSize',
'size_per_pearl' => 'setSizePerPearl',
'golf_club_loft' => 'setGolfClubLoft',
'total_diamond_weight' => 'setTotalDiamondWeight',
'total_gem_weight' => 'setTotalGemWeight',
'package_quantity' => 'setPackageQuantity',
'item_dimensions' => 'setItemDimensions',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'color' => 'getColor',
'edition' => 'getEdition',
'flavor' => 'getFlavor',
'gem_type' => 'getGemType',
'golf_club_flex' => 'getGolfClubFlex',
'hand_orientation' => 'getHandOrientation',
'hardware_platform' => 'getHardwarePlatform',
'material_type' => 'getMaterialType',
'metal_type' => 'getMetalType',
'model' => 'getModel',
'operating_system' => 'getOperatingSystem',
'product_type_subcategory' => 'getProductTypeSubcategory',
'ring_size' => 'getRingSize',
'shaft_material' => 'getShaftMaterial',
'scent' => 'getScent',
'size' => 'getSize',
'size_per_pearl' => 'getSizePerPearl',
'golf_club_loft' => 'getGolfClubLoft',
'total_diamond_weight' => 'getTotalDiamondWeight',
'total_gem_weight' => 'getTotalGemWeight',
'package_quantity' => 'getPackageQuantity',
'item_dimensions' => 'getItemDimensions',    ];

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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['edition'] = isset($data['edition']) ? $data['edition'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['gem_type'] = isset($data['gem_type']) ? $data['gem_type'] : null;
        $this->container['golf_club_flex'] = isset($data['golf_club_flex']) ? $data['golf_club_flex'] : null;
        $this->container['hand_orientation'] = isset($data['hand_orientation']) ? $data['hand_orientation'] : null;
        $this->container['hardware_platform'] = isset($data['hardware_platform']) ? $data['hardware_platform'] : null;
        $this->container['material_type'] = isset($data['material_type']) ? $data['material_type'] : null;
        $this->container['metal_type'] = isset($data['metal_type']) ? $data['metal_type'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['operating_system'] = isset($data['operating_system']) ? $data['operating_system'] : null;
        $this->container['product_type_subcategory'] = isset($data['product_type_subcategory']) ? $data['product_type_subcategory'] : null;
        $this->container['ring_size'] = isset($data['ring_size']) ? $data['ring_size'] : null;
        $this->container['shaft_material'] = isset($data['shaft_material']) ? $data['shaft_material'] : null;
        $this->container['scent'] = isset($data['scent']) ? $data['scent'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['size_per_pearl'] = isset($data['size_per_pearl']) ? $data['size_per_pearl'] : null;
        $this->container['golf_club_loft'] = isset($data['golf_club_loft']) ? $data['golf_club_loft'] : null;
        $this->container['total_diamond_weight'] = isset($data['total_diamond_weight']) ? $data['total_diamond_weight'] : null;
        $this->container['total_gem_weight'] = isset($data['total_gem_weight']) ? $data['total_gem_weight'] : null;
        $this->container['package_quantity'] = isset($data['package_quantity']) ? $data['package_quantity'] : null;
        $this->container['item_dimensions'] = isset($data['item_dimensions']) ? $data['item_dimensions'] : null;
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
     * Gets color.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param string $color the color variation of the item
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets edition.
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->container['edition'];
    }

    /**
     * Sets edition.
     *
     * @param string $edition the edition variation of the item
     *
     * @return $this
     */
    public function setEdition($edition)
    {
        $this->container['edition'] = $edition;

        return $this;
    }

    /**
     * Gets flavor.
     *
     * @return string
     */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
     * Sets flavor.
     *
     * @param string $flavor the flavor variation of the item
     *
     * @return $this
     */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;

        return $this;
    }

    /**
     * Gets gem_type.
     *
     * @return string[]
     */
    public function getGemType()
    {
        return $this->container['gem_type'];
    }

    /**
     * Sets gem_type.
     *
     * @param string[] $gem_type the gem type variations of the item
     *
     * @return $this
     */
    public function setGemType($gem_type)
    {
        $this->container['gem_type'] = $gem_type;

        return $this;
    }

    /**
     * Gets golf_club_flex.
     *
     * @return string
     */
    public function getGolfClubFlex()
    {
        return $this->container['golf_club_flex'];
    }

    /**
     * Sets golf_club_flex.
     *
     * @param string $golf_club_flex the golf club flex variation of an item
     *
     * @return $this
     */
    public function setGolfClubFlex($golf_club_flex)
    {
        $this->container['golf_club_flex'] = $golf_club_flex;

        return $this;
    }

    /**
     * Gets hand_orientation.
     *
     * @return string
     */
    public function getHandOrientation()
    {
        return $this->container['hand_orientation'];
    }

    /**
     * Sets hand_orientation.
     *
     * @param string $hand_orientation the hand orientation variation of an item
     *
     * @return $this
     */
    public function setHandOrientation($hand_orientation)
    {
        $this->container['hand_orientation'] = $hand_orientation;

        return $this;
    }

    /**
     * Gets hardware_platform.
     *
     * @return string
     */
    public function getHardwarePlatform()
    {
        return $this->container['hardware_platform'];
    }

    /**
     * Sets hardware_platform.
     *
     * @param string $hardware_platform the hardware platform variation of an item
     *
     * @return $this
     */
    public function setHardwarePlatform($hardware_platform)
    {
        $this->container['hardware_platform'] = $hardware_platform;

        return $this;
    }

    /**
     * Gets material_type.
     *
     * @return string[]
     */
    public function getMaterialType()
    {
        return $this->container['material_type'];
    }

    /**
     * Sets material_type.
     *
     * @param string[] $material_type the material type variations of an item
     *
     * @return $this
     */
    public function setMaterialType($material_type)
    {
        $this->container['material_type'] = $material_type;

        return $this;
    }

    /**
     * Gets metal_type.
     *
     * @return string
     */
    public function getMetalType()
    {
        return $this->container['metal_type'];
    }

    /**
     * Sets metal_type.
     *
     * @param string $metal_type the metal type variation of an item
     *
     * @return $this
     */
    public function setMetalType($metal_type)
    {
        $this->container['metal_type'] = $metal_type;

        return $this;
    }

    /**
     * Gets model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model.
     *
     * @param string $model the model variation of an item
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets operating_system.
     *
     * @return string[]
     */
    public function getOperatingSystem()
    {
        return $this->container['operating_system'];
    }

    /**
     * Sets operating_system.
     *
     * @param string[] $operating_system the operating system variations of an item
     *
     * @return $this
     */
    public function setOperatingSystem($operating_system)
    {
        $this->container['operating_system'] = $operating_system;

        return $this;
    }

    /**
     * Gets product_type_subcategory.
     *
     * @return string
     */
    public function getProductTypeSubcategory()
    {
        return $this->container['product_type_subcategory'];
    }

    /**
     * Sets product_type_subcategory.
     *
     * @param string $product_type_subcategory the product type subcategory variation of an item
     *
     * @return $this
     */
    public function setProductTypeSubcategory($product_type_subcategory)
    {
        $this->container['product_type_subcategory'] = $product_type_subcategory;

        return $this;
    }

    /**
     * Gets ring_size.
     *
     * @return string
     */
    public function getRingSize()
    {
        return $this->container['ring_size'];
    }

    /**
     * Sets ring_size.
     *
     * @param string $ring_size the ring size variation of an item
     *
     * @return $this
     */
    public function setRingSize($ring_size)
    {
        $this->container['ring_size'] = $ring_size;

        return $this;
    }

    /**
     * Gets shaft_material.
     *
     * @return string
     */
    public function getShaftMaterial()
    {
        return $this->container['shaft_material'];
    }

    /**
     * Sets shaft_material.
     *
     * @param string $shaft_material the shaft material variation of an item
     *
     * @return $this
     */
    public function setShaftMaterial($shaft_material)
    {
        $this->container['shaft_material'] = $shaft_material;

        return $this;
    }

    /**
     * Gets scent.
     *
     * @return string
     */
    public function getScent()
    {
        return $this->container['scent'];
    }

    /**
     * Sets scent.
     *
     * @param string $scent the scent variation of an item
     *
     * @return $this
     */
    public function setScent($scent)
    {
        $this->container['scent'] = $scent;

        return $this;
    }

    /**
     * Gets size.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param string $size the size variation of an item
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets size_per_pearl.
     *
     * @return string
     */
    public function getSizePerPearl()
    {
        return $this->container['size_per_pearl'];
    }

    /**
     * Sets size_per_pearl.
     *
     * @param string $size_per_pearl the size per pearl variation of an item
     *
     * @return $this
     */
    public function setSizePerPearl($size_per_pearl)
    {
        $this->container['size_per_pearl'] = $size_per_pearl;

        return $this;
    }

    /**
     * Gets golf_club_loft.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getGolfClubLoft()
    {
        return $this->container['golf_club_loft'];
    }

    /**
     * Sets golf_club_loft.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $golf_club_loft golf_club_loft
     *
     * @return $this
     */
    public function setGolfClubLoft($golf_club_loft)
    {
        $this->container['golf_club_loft'] = $golf_club_loft;

        return $this;
    }

    /**
     * Gets total_diamond_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getTotalDiamondWeight()
    {
        return $this->container['total_diamond_weight'];
    }

    /**
     * Sets total_diamond_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $total_diamond_weight total_diamond_weight
     *
     * @return $this
     */
    public function setTotalDiamondWeight($total_diamond_weight)
    {
        $this->container['total_diamond_weight'] = $total_diamond_weight;

        return $this;
    }

    /**
     * Gets total_gem_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getTotalGemWeight()
    {
        return $this->container['total_gem_weight'];
    }

    /**
     * Sets total_gem_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $total_gem_weight total_gem_weight
     *
     * @return $this
     */
    public function setTotalGemWeight($total_gem_weight)
    {
        $this->container['total_gem_weight'] = $total_gem_weight;

        return $this;
    }

    /**
     * Gets package_quantity.
     *
     * @return int
     */
    public function getPackageQuantity()
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity.
     *
     * @param int $package_quantity the package quantity variation of an item
     *
     * @return $this
     */
    public function setPackageQuantity($package_quantity)
    {
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets item_dimensions.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType
     */
    public function getItemDimensions()
    {
        return $this->container['item_dimensions'];
    }

    /**
     * Sets item_dimensions.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType $item_dimensions item_dimensions
     *
     * @return $this
     */
    public function setItemDimensions($item_dimensions)
    {
        $this->container['item_dimensions'] = $item_dimensions;

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
