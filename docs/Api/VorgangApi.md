# Vismutx\EasycreditApiPhp\VorgangApi

All URIs are relative to *https://ratenkauf.easycredit.de/ratenkauf-ws/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeBestellungBestaetigen**](VorgangApi.md#executeBestellungBestaetigen) | **POST** /vorgang/{vorgangskennung}/bestaetigen | Confirms the transaction
[**executeEntscheidungLaden**](VorgangApi.md#executeEntscheidungLaden) | **GET** /vorgang/{vorgangskennung}/entscheidung | Loads the decision result
[**executeFinanzierungLaden**](VorgangApi.md#executeFinanzierungLaden) | **GET** /vorgang/{vorgangskennung}/finanzierung | Loads financing data
[**executePersonLaden**](VorgangApi.md#executePersonLaden) | **GET** /vorgang/{vorgangskennung}/person | Loads personal customer data
[**executeZustimmungSepa**](VorgangApi.md#executeZustimmungSepa) | **GET** /vorgang/{vorgangskennung}/zustimmung/sepa | Retrieving the approval text for the SEPA scheme
[**mTanVersenden**](VorgangApi.md#mTanVersenden) | **POST** /vorgang/{vorgangskennung}/mTANversenden | Triggers the sending of an mTAN again.


# **executeBestellungBestaetigen**
> executeBestellungBestaetigen($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Confirms the transaction

In case of a positive GRUEN decision, the transaction can be completed by confirming. All legally required elements must be displayed in advance on the Webshop's final order confirmation page.   These include: - Number of installments (see also: vorgang/{vorgangskennung}/finanzierung) - Redemption schedule (see also: vorgang/{vorgangskennung}) - Pre-contractual information (see also: vorgang/{vorgangskennung}) - Total (interest included) (see also: vorgang/{vorgangskennung}/finanzierung)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\VorgangApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $apiInstance->executeBestellungBestaetigen($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
} catch (Exception $e) {
    echo 'Exception when calling VorgangApi->executeBestellungBestaetigen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **vorgangskennung** | **string**| A valid technical transaction id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeEntscheidungLaden**
> \Vismutx\EasycreditApiPhp\Model\EntscheidungLadenResponse executeEntscheidungLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Loads the decision result

The result of the decision can be retrieved after executing a decision.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\VorgangApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $result = $apiInstance->executeEntscheidungLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VorgangApi->executeEntscheidungLaden: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **vorgangskennung** | **string**| A valid technical transaction id |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\EntscheidungLadenResponse**](../Model/EntscheidungLadenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeFinanzierungLaden**
> \Vismutx\EasycreditApiPhp\Model\FinanzierungLadenResponse executeFinanzierungLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Loads financing data

In the case of a GRUEN decision, this resource can be used to call up all relevant financing data that must be displayed to the customer before the Ratenkauf is confirmed. These include the attributes ratenplan.gesamtsumme (installment plan.total) and ratenplan.anfallendeZinsen (installment plan.interest accrued).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\VorgangApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | 
$tbk_rk_token = "tbk_rk_token_example"; // string | 
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $result = $apiInstance->executeFinanzierungLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VorgangApi->executeFinanzierungLaden: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**|  |
 **tbk_rk_token** | **string**|  |
 **vorgangskennung** | **string**| A valid technical transaction id |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\FinanzierungLadenResponse**](../Model/FinanzierungLadenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executePersonLaden**
> \Vismutx\EasycreditApiPhp\Model\PersonLadenResponse executePersonLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Loads personal customer data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\VorgangApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $result = $apiInstance->executePersonLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VorgangApi->executePersonLaden: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **vorgangskennung** | **string**| A valid technical transaction id |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\PersonLadenResponse**](../Model/PersonLadenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeZustimmungSepa**
> \Vismutx\EasycreditApiPhp\Model\ZustimmungSepaResponse executeZustimmungSepa($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Retrieving the approval text for the SEPA scheme

Retrieve the approval text for the SEPA scheme. Can also be queried via the text resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\VorgangApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $result = $apiInstance->executeZustimmungSepa($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VorgangApi->executeZustimmungSepa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **vorgangskennung** | **string**| A valid technical transaction id |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\ZustimmungSepaResponse**](../Model/ZustimmungSepaResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mTanVersenden**
> object mTanVersenden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Triggers the sending of an mTAN again.

With the call of /vorgang/{vorgangskennung}/entscheiden an SMS is sent to the customer in case of a GRUEN decision. If a new sending should be necessary, it can be triggered with this.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\VorgangApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | 
$tbk_rk_token = "tbk_rk_token_example"; // string | 
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $result = $apiInstance->mTanVersenden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VorgangApi->mTanVersenden: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**|  |
 **tbk_rk_token** | **string**|  |
 **vorgangskennung** | **string**| A valid technical transaction id |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

