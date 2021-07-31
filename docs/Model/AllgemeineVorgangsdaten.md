# AllgemeineVorgangsdaten

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop_kennung** | **string** | The Webshop-ID specific for ratenkauf by easyCredit | [optional] 
**tb_vorgangskennung** | **string** | Technical transaction id given by ratenkauf by easyCredit. | [optional] 
**shop_vorgangskennung** | **string** | The webshop-specific transaction identifier | [optional] 
**fachliche_vorgangskennung** | **string** | Commercial transaction id, which is also communicated to the customer. | [optional] 
**device_ident_token** | **string** | Token assigned by ratenkauf by easyCredit. This is used for fraud prevention. | [optional] 
**status** | **string** | Status | [optional] 
**url_vorvertragliche_informationen** | **string** | Contains the URL to the pre-contractual information. | [optional] 
**haendlerspezifischer_zinssatz** | **float** | Merchant specific interest rate | [optional] 
**moegliche_ratenplaene** | [**\Vismutx\EasycreditApiPhp\Model\Ratenplan[]**](Ratenplan.md) | Possible installment plans that can be offered to the customer to finance his shopping basket. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


