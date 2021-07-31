# Vismutx\EasycreditApiPhp\ModellrechnungApi

All URIs are relative to *https://ratenkauf.easycredit.de/ratenkauf-ws/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeBeispielrechnungDurchfuehren**](ModellrechnungApi.md#executeBeispielrechnungDurchfuehren) | **GET** /modellrechnung/guenstigsterRatenplan | Calculates the installment plan with the lowest rate for a product or shopping cart.
[**executeModellrechnungDurchfuehren**](ModellrechnungApi.md#executeModellrechnungDurchfuehren) | **GET** /modellrechnung/durchfuehren | Performing an example calculation for a product or shopping cart


# **executeBeispielrechnungDurchfuehren**
> \Vismutx\EasycreditApiPhp\Model\KurzBeispielrechnungResponse executeBeispielrechnungDurchfuehren($webshop_id, $finanzierungsbetrag)

Calculates the installment plan with the lowest rate for a product or shopping cart.

Calculates the installment plan based on the individual webshop configurations and the financing amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\ModellrechnungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webshop_id = "webshop_id_example"; // string | Webshop-ID
$finanzierungsbetrag = 8.14; // float | Financing amount

try {
    $result = $apiInstance->executeBeispielrechnungDurchfuehren($webshop_id, $finanzierungsbetrag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModellrechnungApi->executeBeispielrechnungDurchfuehren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webshop_id** | **string**| Webshop-ID |
 **finanzierungsbetrag** | **float**| Financing amount |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\KurzBeispielrechnungResponse**](../Model/KurzBeispielrechnungResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeModellrechnungDurchfuehren**
> \Vismutx\EasycreditApiPhp\Model\ModellrechnungDurchfuehrenResponse executeModellrechnungDurchfuehren($webshop_id, $finanzierungsbetrag)

Performing an example calculation for a product or shopping cart

With the example calculation, the possible installment plans can be calculated on the basis of the individual webshop configurations and the financing amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\ModellrechnungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webshop_id = "webshop_id_example"; // string | Webshop-ID
$finanzierungsbetrag = 8.14; // float | Financing amount

try {
    $result = $apiInstance->executeModellrechnungDurchfuehren($webshop_id, $finanzierungsbetrag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModellrechnungApi->executeModellrechnungDurchfuehren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webshop_id** | **string**| Webshop-ID |
 **finanzierungsbetrag** | **float**| Financing amount |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\ModellrechnungDurchfuehrenResponse**](../Model/ModellrechnungDurchfuehrenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

