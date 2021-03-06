<?php
/**
 * VorgangInitialisierenResponse
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
 * VorgangInitialisierenResponse Class Doc Comment
 *
 * @category Class
 * @package  Vismutx\EasycreditApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VorgangInitialisierenResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VorgangInitialisierenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ws_messages' => '\Vismutx\EasycreditApiPhp\Model\WsMessages',
        'uuid' => 'string',
        'tb_vorgangskennung' => 'string',
        'webshopkennung' => 'string',
        'timestamp' => 'int',
        'device_ident_token' => 'string',
        'fachliche_vorgangskennung' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ws_messages' => null,
        'uuid' => null,
        'tb_vorgangskennung' => null,
        'webshopkennung' => null,
        'timestamp' => 'int64',
        'device_ident_token' => null,
        'fachliche_vorgangskennung' => null
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
        'ws_messages' => 'wsMessages',
        'uuid' => 'uuid',
        'tb_vorgangskennung' => 'tbVorgangskennung',
        'webshopkennung' => 'webshopkennung',
        'timestamp' => 'timestamp',
        'device_ident_token' => 'deviceIdentToken',
        'fachliche_vorgangskennung' => 'fachlicheVorgangskennung'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ws_messages' => 'setWsMessages',
        'uuid' => 'setUuid',
        'tb_vorgangskennung' => 'setTbVorgangskennung',
        'webshopkennung' => 'setWebshopkennung',
        'timestamp' => 'setTimestamp',
        'device_ident_token' => 'setDeviceIdentToken',
        'fachliche_vorgangskennung' => 'setFachlicheVorgangskennung'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ws_messages' => 'getWsMessages',
        'uuid' => 'getUuid',
        'tb_vorgangskennung' => 'getTbVorgangskennung',
        'webshopkennung' => 'getWebshopkennung',
        'timestamp' => 'getTimestamp',
        'device_ident_token' => 'getDeviceIdentToken',
        'fachliche_vorgangskennung' => 'getFachlicheVorgangskennung'
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
        $this->container['ws_messages'] = isset($data['ws_messages']) ? $data['ws_messages'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['tb_vorgangskennung'] = isset($data['tb_vorgangskennung']) ? $data['tb_vorgangskennung'] : null;
        $this->container['webshopkennung'] = isset($data['webshopkennung']) ? $data['webshopkennung'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['device_ident_token'] = isset($data['device_ident_token']) ? $data['device_ident_token'] : null;
        $this->container['fachliche_vorgangskennung'] = isset($data['fachliche_vorgangskennung']) ? $data['fachliche_vorgangskennung'] : null;
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
     * Gets ws_messages
     *
     * @return \Vismutx\EasycreditApiPhp\Model\WsMessages
     */
    public function getWsMessages()
    {
        return $this->container['ws_messages'];
    }

    /**
     * Sets ws_messages
     *
     * @param \Vismutx\EasycreditApiPhp\Model\WsMessages $ws_messages ws_messages
     *
     * @return $this
     */
    public function setWsMessages($ws_messages)
    {
        $this->container['ws_messages'] = $ws_messages;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets tb_vorgangskennung
     *
     * @return string
     */
    public function getTbVorgangskennung()
    {
        return $this->container['tb_vorgangskennung'];
    }

    /**
     * Sets tb_vorgangskennung
     *
     * @param string $tb_vorgangskennung technical transaction id
     *
     * @return $this
     */
    public function setTbVorgangskennung($tb_vorgangskennung)
    {
        $this->container['tb_vorgangskennung'] = $tb_vorgangskennung;

        return $this;
    }

    /**
     * Gets webshopkennung
     *
     * @return string
     */
    public function getWebshopkennung()
    {
        return $this->container['webshopkennung'];
    }

    /**
     * Sets webshopkennung
     *
     * @param string $webshopkennung webshopkennung
     *
     * @return $this
     */
    public function setWebshopkennung($webshopkennung)
    {
        $this->container['webshopkennung'] = $webshopkennung;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets device_ident_token
     *
     * @return string
     */
    public function getDeviceIdentToken()
    {
        return $this->container['device_ident_token'];
    }

    /**
     * Sets device_ident_token
     *
     * @param string $device_ident_token device_ident_token
     *
     * @return $this
     */
    public function setDeviceIdentToken($device_ident_token)
    {
        $this->container['device_ident_token'] = $device_ident_token;

        return $this;
    }

    /**
     * Gets fachliche_vorgangskennung
     *
     * @return string
     */
    public function getFachlicheVorgangskennung()
    {
        return $this->container['fachliche_vorgangskennung'];
    }

    /**
     * Sets fachliche_vorgangskennung
     *
     * @param string $fachliche_vorgangskennung commercial transaction id
     *
     * @return $this
     */
    public function setFachlicheVorgangskennung($fachliche_vorgangskennung)
    {
        $this->container['fachliche_vorgangskennung'] = $fachliche_vorgangskennung;

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


