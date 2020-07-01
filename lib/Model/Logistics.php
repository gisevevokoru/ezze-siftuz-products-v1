<?php
/**
 * Logistics
 *
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\ProductsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public Partner Product API
 *
 * Manage your product data, send images and                   much more.
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\ProductsV1\Model;

use \ArrayAccess;
use \EzzeSiftuz\ProductsV1\ObjectSerializer;

/**
 * Logistics Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\ProductsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Logistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Logistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packing_unit_count' => 'int',
'packing_units' => '\EzzeSiftuz\ProductsV1\Model\PackingUnit[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packing_unit_count' => 'int32',
'packing_units' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'packing_unit_count' => 'packingUnitCount',
'packing_units' => 'packingUnits'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packing_unit_count' => 'setPackingUnitCount',
'packing_units' => 'setPackingUnits'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packing_unit_count' => 'getPackingUnitCount',
'packing_units' => 'getPackingUnits'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['packing_unit_count'] = isset($data['packing_unit_count']) ? $data['packing_unit_count'] : null;
        $this->container['packing_units'] = isset($data['packing_units']) ? $data['packing_units'] : null;
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
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets packing_unit_count
     *
     * @return int
     */
    public function getPackingUnitCount()
    {
        return $this->container['packing_unit_count'];
    }

    /**
     * Sets packing_unit_count
     *
     * @param int $packing_unit_count The number of packing units.
     *
     * @return $this
     */
    public function setPackingUnitCount($packing_unit_count)
    {
        $this->container['packing_unit_count'] = $packing_unit_count;

        return $this;
    }

    /**
     * Gets packing_units
     *
     * @return \EzzeSiftuz\ProductsV1\Model\PackingUnit[]
     */
    public function getPackingUnits()
    {
        return $this->container['packing_units'];
    }

    /**
     * Sets packing_units
     *
     * @param \EzzeSiftuz\ProductsV1\Model\PackingUnit[] $packing_units The measurements of the packing units in g and mm.
     *
     * @return $this
     */
    public function setPackingUnits($packing_units)
    {
        $this->container['packing_units'] = $packing_units;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
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
