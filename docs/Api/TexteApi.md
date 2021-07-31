# Vismutx\EasycreditApiPhp\TexteApi

All URIs are relative to *https://ratenkauf.easycredit.de/ratenkauf-ws/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeZustimmung**](TexteApi.md#executeZustimmung) | **GET** /texte/zustimmung/{webshopkennung} | Loads the texts for the declaration of consent
[**representativesBeispiel**](TexteApi.md#representativesBeispiel) | **GET** /texte/repraesentativesBeispiel/{webshopkennung} | Loads a general representative example of an installment purchase


# **executeZustimmung**
> \Vismutx\EasycreditApiPhp\Model\ZustimmungResponse executeZustimmung($webshopkennung)

Loads the texts for the declaration of consent

The resource provides all the texts for the declaration of consent that a customer must agree to before completing an installment purchase.   Before a process can be initialized (POST /vorgang), the customer must agree to the transmission of his data. Depending on the type of integration (self integration or payment page), the texts for the declaration of consent can be dynamically loaded and integrated via the attributes zustimmungDatenuebertragungPaymentPage and ZustimmungDatenuebertragungServiceIntegration   If you integrate ratenkauf by easyCredit not via the Payment Page but completely into the website, the following declarations of consent must be obtained before calculating a decision:   - einwilligungsErklaerungServiceIntegration (declaration of consent service integration)   - zustimmungEmailWerbung (consent for Email Advertising)   - zustimmungZurHandlungInEigenemNamen (consent that the customer acts in his own name)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\TexteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webshopkennung = "webshopkennung_example"; // string | A valid webshop-ID

try {
    $result = $apiInstance->executeZustimmung($webshopkennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TexteApi->executeZustimmung: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webshopkennung** | **string**| A valid webshop-ID |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\ZustimmungResponse**](../Model/ZustimmungResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **representativesBeispiel**
> \Vismutx\EasycreditApiPhp\Model\TexteResponse representativesBeispiel($webshopkennung)

Loads a general representative example of an installment purchase

Loads a general representative example and the product details for ratenkauf by easyCredit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\TexteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webshopkennung = "webshopkennung_example"; // string | 

try {
    $result = $apiInstance->representativesBeispiel($webshopkennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TexteApi->representativesBeispiel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webshopkennung** | **string**|  |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\TexteResponse**](../Model/TexteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

