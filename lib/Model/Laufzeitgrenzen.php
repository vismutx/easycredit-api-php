<?php
/**
 * Laufzeitgrenzen
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vismutx\EasycreditApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ratenkauf REST API
 *
 * Version: V2  With the help of the REST API, webshop operators or business partners can integrate the ratenkauf by easyCredit into a webshop. Thus you have the possibility to integrate the ratenkauf by easyCredit into your webshop according to your own needs.  To initialize and complete a Ratenkauf using the REST API,the webshop system must authenticate itself against the REST API installment purchase. To do this, the webshop ID and the API password must be entered in the respective attributes in the header of the request.  You will receive your personal webshop identification after conclusion of the contract with us.  Would you like to use installment purchase by easyCredit?  Register directly under: [Registration](https://www.easycredit.de/ratenkaufpartner/registrierung.htm) and we will get in touch with you.   On our Ratenkauf Partner Site [Ratenkauf Partner Site](https://www.easycredit-ratenkauf.de/einbindung.htm)  we provide many shop plugins and additional integration guides.  API Root URL: https://ratenkauf.easycredit.de/ratenkauf-ws/rest/v2
 *
 * OpenAPI spec version: V2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vismutx\EasycreditApiPhp\Model;

use \ArrayAccess;
use \Vismutx\EasycreditApiPhp\ObjectSerializer;

/**
 * Laufzeitgrenzen Class Doc Comment
 *
 * @category Class
 * @description term limits
 * @package  Vismutx\EasycreditApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Laufzeitgrenzen implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Laufzeitgrenzen';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'minimale_laufzeit' => 'int',
        'maximale_laufzeit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'minimale_laufzeit' => 'int32',
        'maximale_laufzeit' => 'int32'
    ];

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
        'minimale_laufzeit' => 'minimaleLaufzeit',
        'maximale_laufzeit' => 'maximaleLaufzeit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minimale_laufzeit' => 'setMinimaleLaufzeit',
        'maximale_laufzeit' => 'setMaximaleLaufzeit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minimale_laufzeit' => 'getMinimaleLaufzeit',
        'maximale_laufzeit' => 'getMaximaleLaufzeit'
    ];

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
        $this->container['minimale_laufzeit'] = isset($data['minimale_laufzeit']) ? $data['minimale_laufzeit'] : null;
        $this->container['maximale_laufzeit'] = isset($data['maximale_laufzeit']) ? $data['maximale_laufzeit'] : null;
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
     * Gets minimale_laufzeit
     *
     * @return int
     */
    public function getMinimaleLaufzeit()
    {
        return $this->container['minimale_laufzeit'];
    }

    /**
     * Sets minimale_laufzeit
     *
     * @param int $minimale_laufzeit minimale_laufzeit
     *
     * @return $this
     */
    public function setMinimaleLaufzeit($minimale_laufzeit)
    {
        $this->container['minimale_laufzeit'] = $minimale_laufzeit;

        return $this;
    }

    /**
     * Gets maximale_laufzeit
     *
     * @return int
     */
    public function getMaximaleLaufzeit()
    {
        return $this->container['maximale_laufzeit'];
    }

    /**
     * Sets maximale_laufzeit
     *
     * @param int $maximale_laufzeit maximale_laufzeit
     *
     * @return $this
     */
    public function setMaximaleLaufzeit($maximale_laufzeit)
    {
        $this->container['maximale_laufzeit'] = $maximale_laufzeit;

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


