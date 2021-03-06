<?php
/**
 * Personendaten
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
 * Personendaten Class Doc Comment
 *
 * @category Class
 * @description personal data
 * @package  Vismutx\EasycreditApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Personendaten implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Personendaten';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'anrede' => 'string',
        'vorname' => 'string',
        'nachname' => 'string',
        'geburtsdatum' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'anrede' => null,
        'vorname' => null,
        'nachname' => null,
        'geburtsdatum' => 'date'
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
        'anrede' => 'anrede',
        'vorname' => 'vorname',
        'nachname' => 'nachname',
        'geburtsdatum' => 'geburtsdatum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anrede' => 'setAnrede',
        'vorname' => 'setVorname',
        'nachname' => 'setNachname',
        'geburtsdatum' => 'setGeburtsdatum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anrede' => 'getAnrede',
        'vorname' => 'getVorname',
        'nachname' => 'getNachname',
        'geburtsdatum' => 'getGeburtsdatum'
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

    const ANREDE_HERR = 'HERR';
    const ANREDE_FRAU = 'FRAU';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnredeAllowableValues()
    {
        return [
            self::ANREDE_HERR,
            self::ANREDE_FRAU,
        ];
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
        $this->container['anrede'] = isset($data['anrede']) ? $data['anrede'] : null;
        $this->container['vorname'] = isset($data['vorname']) ? $data['vorname'] : null;
        $this->container['nachname'] = isset($data['nachname']) ? $data['nachname'] : null;
        $this->container['geburtsdatum'] = isset($data['geburtsdatum']) ? $data['geburtsdatum'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['anrede'] === null) {
            $invalidProperties[] = "'anrede' can't be null";
        }
        $allowedValues = $this->getAnredeAllowableValues();
        if (!is_null($this->container['anrede']) && !in_array($this->container['anrede'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'anrede', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['vorname'] === null) {
            $invalidProperties[] = "'vorname' can't be null";
        }
        if ($this->container['nachname'] === null) {
            $invalidProperties[] = "'nachname' can't be null";
        }
        if ($this->container['geburtsdatum'] === null) {
            $invalidProperties[] = "'geburtsdatum' can't be null";
        }
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
     * Gets anrede
     *
     * @return string
     */
    public function getAnrede()
    {
        return $this->container['anrede'];
    }

    /**
     * Sets anrede
     *
     * @param string $anrede Salutation. HERR (male) or FRAU (female)
     *
     * @return $this
     */
    public function setAnrede($anrede)
    {
        $allowedValues = $this->getAnredeAllowableValues();
        if (!in_array($anrede, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'anrede', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['anrede'] = $anrede;

        return $this;
    }

    /**
     * Gets vorname
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->container['vorname'];
    }

    /**
     * Sets vorname
     *
     * @param string $vorname first name
     *
     * @return $this
     */
    public function setVorname($vorname)
    {
        $this->container['vorname'] = $vorname;

        return $this;
    }

    /**
     * Gets nachname
     *
     * @return string
     */
    public function getNachname()
    {
        return $this->container['nachname'];
    }

    /**
     * Sets nachname
     *
     * @param string $nachname last name
     *
     * @return $this
     */
    public function setNachname($nachname)
    {
        $this->container['nachname'] = $nachname;

        return $this;
    }

    /**
     * Gets geburtsdatum
     *
     * @return \DateTime
     */
    public function getGeburtsdatum()
    {
        return $this->container['geburtsdatum'];
    }

    /**
     * Sets geburtsdatum
     *
     * @param \DateTime $geburtsdatum date of birth. Format YYYY-MM-DD
     *
     * @return $this
     */
    public function setGeburtsdatum($geburtsdatum)
    {
        $this->container['geburtsdatum'] = $geburtsdatum;

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


