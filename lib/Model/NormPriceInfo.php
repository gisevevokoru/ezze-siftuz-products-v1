<?php
/**
 * NormPriceInfo
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
 * NormPriceInfo Class Doc Comment
 *
 * @category Class
 * @description The information about normed prices, must be provided completely, or not at all.
 * @package  EzzeSiftuz\ProductsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NormPriceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NormPriceInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'norm_amount' => 'int',
'norm_unit' => 'string',
'sales_amount' => 'float',
'sales_unit' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'norm_amount' => 'int32',
'norm_unit' => null,
'sales_amount' => null,
'sales_unit' => null    ];

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
        'norm_amount' => 'normAmount',
'norm_unit' => 'normUnit',
'sales_amount' => 'salesAmount',
'sales_unit' => 'salesUnit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'norm_amount' => 'setNormAmount',
'norm_unit' => 'setNormUnit',
'sales_amount' => 'setSalesAmount',
'sales_unit' => 'setSalesUnit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'norm_amount' => 'getNormAmount',
'norm_unit' => 'getNormUnit',
'sales_amount' => 'getSalesAmount',
'sales_unit' => 'getSalesUnit'    ];

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
        $this->container['norm_amount'] = isset($data['norm_amount']) ? $data['norm_amount'] : null;
        $this->container['norm_unit'] = isset($data['norm_unit']) ? $data['norm_unit'] : null;
        $this->container['sales_amount'] = isset($data['sales_amount']) ? $data['sales_amount'] : null;
        $this->container['sales_unit'] = isset($data['sales_unit']) ? $data['sales_unit'] : null;
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
     * Gets norm_amount
     *
     * @return int
     */
    public function getNormAmount()
    {
        return $this->container['norm_amount'];
    }

    /**
     * Sets norm_amount
     *
     * @param int $norm_amount The norm packaging size.
     *
     * @return $this
     */
    public function setNormAmount($norm_amount)
    {
        $this->container['norm_amount'] = $norm_amount;

        return $this;
    }

    /**
     * Gets norm_unit
     *
     * @return string
     */
    public function getNormUnit()
    {
        return $this->container['norm_unit'];
    }

    /**
     * Sets norm_unit
     *
     * @param string $norm_unit The name of the unit the norm price is based on.
     *
     * @return $this
     */
    public function setNormUnit($norm_unit)
    {
        $this->container['norm_unit'] = $norm_unit;

        return $this;
    }

    /**
     * Gets sales_amount
     *
     * @return float
     */
    public function getSalesAmount()
    {
        return $this->container['sales_amount'];
    }

    /**
     * Sets sales_amount
     *
     * @param float $sales_amount The packaging size of the sales unit.
     *
     * @return $this
     */
    public function setSalesAmount($sales_amount)
    {
        $this->container['sales_amount'] = $sales_amount;

        return $this;
    }

    /**
     * Gets sales_unit
     *
     * @return string
     */
    public function getSalesUnit()
    {
        return $this->container['sales_unit'];
    }

    /**
     * Sets sales_unit
     *
     * @param string $sales_unit The name of the unit the sales price is based on.
     *
     * @return $this
     */
    public function setSalesUnit($sales_unit)
    {
        $this->container['sales_unit'] = $sales_unit;

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
