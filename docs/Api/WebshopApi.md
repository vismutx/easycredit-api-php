# Vismutx\EasycreditApiPhp\WebshopApi

All URIs are relative to *https://ratenkauf.easycredit.de/ratenkauf-ws/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**abfrageRestbetragAnkaufobergrenze**](WebshopApi.md#abfrageRestbetragAnkaufobergrenze) | **GET** /webshop/{webshopkennung}/restbetragankaufobergrenze | Loads the remaining amount of the purchase limit for the webshop


# **abfrageRestbetragAnkaufobergrenze**
> \Vismutx\EasycreditApiPhp\Model\RestbetragAnkaufobergrenzeResponse abfrageRestbetragAnkaufobergrenze($tbk_rk_shop, $tbk_rk_token, $webshopkennung)

Loads the remaining amount of the purchase limit for the webshop

The contractually agreed “purchase limit” is the amount to which the TeamBank can offer ratenkauf by easyCredit and take over the receivables from the customer.   The resource retrieves the remaining amount from the agreed purchase limit for the webshop. If the remaining amount is less than the total amount of the shopping basket, no installment purchase can be offered for the shopping basket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\WebshopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$webshopkennung = "webshopkennung_example"; // string | A valid Webshop-ID

try {
    $result = $apiInstance->abfrageRestbetragAnkaufobergrenze($tbk_rk_shop, $tbk_rk_token, $webshopkennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebshopApi->abfrageRestbetragAnkaufobergrenze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **webshopkennung** | **string**| A valid Webshop-ID |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\RestbetragAnkaufobergrenzeResponse**](../Model/RestbetragAnkaufobergrenzeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

