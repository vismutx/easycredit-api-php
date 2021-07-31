# Vismutx\EasycreditApiPhp\TransactionApi

All URIs are relative to *https://ratenkauf.easycredit.de/ratenkauf-ws/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeAllgemeineVorgangsdatenLaden**](TransactionApi.md#executeAllgemeineVorgangsdatenLaden) | **GET** /vorgang/{vorgangskennung} | Loads the general transaction data
[**executeEntscheidungDurchfuehren**](TransactionApi.md#executeEntscheidungDurchfuehren) | **POST** /vorgang/{vorgangskennung}/entscheiden | Executes the decision
[**executeMtanValidieren**](TransactionApi.md#executeMtanValidieren) | **POST** /vorgang/{vorgangskennung}/mTAN | Verify mTAN
[**executeVorgangInitialisieren**](TransactionApi.md#executeVorgangInitialisieren) | **POST** /vorgang | Initializes the transaction
[**executeVorgangSpeichern**](TransactionApi.md#executeVorgangSpeichern) | **POST** /vorgang/{vorgangskennung} | Saves the transaction


# **executeAllgemeineVorgangsdatenLaden**
> \Vismutx\EasycreditApiPhp\Model\AllgemeineVorgangsdatenLadenResponse executeAllgemeineVorgangsdatenLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Loads the general transaction data

After a transaction has been initialized, the technical transaction id (tbVorgangskennung) can be used to reload the operation. After the decision has been made and before the transaction has been confirmed, the pre-contractual information and a redemption schedule must be displayed to the customer. You can find this in the attributes allgemeineVorgangsdaten.urlVorvertraglicheInformationen and tilgungsplanText.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $result = $apiInstance->executeAllgemeineVorgangsdatenLaden($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->executeAllgemeineVorgangsdatenLaden: ', $e->getMessage(), PHP_EOL;
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

[**\Vismutx\EasycreditApiPhp\Model\AllgemeineVorgangsdatenLadenResponse**](../Model/AllgemeineVorgangsdatenLadenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeEntscheidungDurchfuehren**
> \Vismutx\EasycreditApiPhp\Model\EntscheidungDurchfuehrenResponse executeEntscheidungDurchfuehren($tbk_rk_shop, $tbk_rk_token, $vorgangskennung)

Executes the decision

After the transaction has been initialized and the declaration of consent for the transaction has been saved, a decision can be triggered.  The result of the decision can be either GRUEN (positive) or ROT (negative). ROT means that the customer cannot be offered a ratenkauf by easycredit on the basis of various criteria, such as personal details, creditworthiness, etc. GRUEN means that a ratenkauf by easyCredit is possible for the shopping basket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id

try {
    $result = $apiInstance->executeEntscheidungDurchfuehren($tbk_rk_shop, $tbk_rk_token, $vorgangskennung);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->executeEntscheidungDurchfuehren: ', $e->getMessage(), PHP_EOL;
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

[**\Vismutx\EasycreditApiPhp\Model\EntscheidungDurchfuehrenResponse**](../Model/EntscheidungDurchfuehrenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeMtanValidieren**
> executeMtanValidieren($vorgangskennung, $tbk_rk_shop, $tbk_rk_token, $body)

Verify mTAN

Verifies if the transferred mTAN is correct. The customer has a total of 10 attempts. After the tenth attempt, the transaction is no longer available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vorgangskennung = "vorgangskennung_example"; // string | Technical transaction id
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$body = new \Vismutx\EasycreditApiPhp\Model\MtanRequest(); // \Vismutx\EasycreditApiPhp\Model\MtanRequest | 

try {
    $apiInstance->executeMtanValidieren($vorgangskennung, $tbk_rk_shop, $tbk_rk_token, $body);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->executeMtanValidieren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vorgangskennung** | **string**| Technical transaction id |
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **body** | [**\Vismutx\EasycreditApiPhp\Model\MtanRequest**](../Model/MtanRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeVorgangInitialisieren**
> \Vismutx\EasycreditApiPhp\Model\VorgangInitialisierenResponse executeVorgangInitialisieren($tbk_rk_shop, $tbk_rk_token, $body)

Initializes the transaction

Initializing a transaction is the first step to purchase a shopping basket by the means of ratenkauf by easyCredit.   When you initialize the installment purchase, you should always transmit all the information the customer has already entered (such as e-mail address and postal address). This means that the customer does not have to enter this information again. It is also possible to fully integrate the transaction completion process into your web shop.   The customer details (delivery address, billing address, e-mail address, mobile phone number, bank details) are validated technically. If the technical validation fails (e.g. non-existent address), this is answered with a corresponding 4xx HTTP status code. Details on the reasons are provided in the HTTP response in the WsMessages attribute. If an HTTP status code other than 2xx is delivered, the process was not initialized.   Each transaction receives a unique technical transaction id (tbVorgangskennung) and a commercial id (fachlicheVorgangskennung). For all further operations (save, decide, confirm) on the transaction, the technical transaction id must be specified. The commercial id is used for communication with the customer and the TeamBank.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$body = new \Vismutx\EasycreditApiPhp\Model\VorgangInitialisierenRequest(); // \Vismutx\EasycreditApiPhp\Model\VorgangInitialisierenRequest | Request data

try {
    $result = $apiInstance->executeVorgangInitialisieren($tbk_rk_shop, $tbk_rk_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->executeVorgangInitialisieren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **body** | [**\Vismutx\EasycreditApiPhp\Model\VorgangInitialisierenRequest**](../Model/VorgangInitialisierenRequest.md)| Request data |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\VorgangInitialisierenResponse**](../Model/VorgangInitialisierenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeVorgangSpeichern**
> \Vismutx\EasycreditApiPhp\Model\VorgangSpeichernResponse executeVorgangSpeichern($tbk_rk_shop, $tbk_rk_token, $vorgangskennung, $body)

Saves the transaction

With a POST on an initialized transaction, data that was not yet available at the time of initialization can be subsequently transferred to ratenkauf by easyCredit. This includes, for example, the customer's declaration of consent. This must be transmitted before  calling the resource vorgang/{tbVorgangskennung}/entscheiden.   The texts for the declarations of consent are available via the text resource (texte/zustimmung). Since the texts can change due to legal regulations, we recommend that you integrate them dynamically. This ensures that no obsolete or invalid consent declaration texts are displayed.   If this resource is called after POST /vorgang/entscheiden, the decision becomes invalid. This means that POST /vorgang/entscheiden must be called again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vismutx\EasycreditApiPhp\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tbk_rk_shop = "tbk_rk_shop_example"; // string | Webshop-ID
$tbk_rk_token = "tbk_rk_token_example"; // string | API-Password
$vorgangskennung = "vorgangskennung_example"; // string | A valid technical transaction id
$body = new \Vismutx\EasycreditApiPhp\Model\VorgangSpeichernRequest(); // \Vismutx\EasycreditApiPhp\Model\VorgangSpeichernRequest | Transaction data to be saved

try {
    $result = $apiInstance->executeVorgangSpeichern($tbk_rk_shop, $tbk_rk_token, $vorgangskennung, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->executeVorgangSpeichern: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tbk_rk_shop** | **string**| Webshop-ID |
 **tbk_rk_token** | **string**| API-Password |
 **vorgangskennung** | **string**| A valid technical transaction id |
 **body** | [**\Vismutx\EasycreditApiPhp\Model\VorgangSpeichernRequest**](../Model/VorgangSpeichernRequest.md)| Transaction data to be saved |

### Return type

[**\Vismutx\EasycreditApiPhp\Model\VorgangSpeichernResponse**](../Model/VorgangSpeichernResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

