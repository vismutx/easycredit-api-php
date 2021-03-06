<?php
/**
 * ApiException
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

namespace Vismutx\EasycreditApiPhp;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Vismutx\EasycreditApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiException extends Exception
{

    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var mixed
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var $responseObject;
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string        $message         Error message
     * @param int           $code            HTTP status code
     * @param string[]|null $responseHeaders HTTP response header
     * @param mixed         $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return mixed HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
