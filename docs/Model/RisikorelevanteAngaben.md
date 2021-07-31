# RisikorelevanteAngaben

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bestellung_erfolgt_ueber_login** | **bool** | Order with login or without. If the customer has a login in the webshop, kundeSeit and anzahlBestellungen must be submitted. | 
**kunde_seit** | [**\DateTime**](\DateTime.md) | Date of first order of the customer in this webshop. Doesn&#39;t need to be provided if the customer has no login. | 
**anzahl_bestellungen** | **int** | Total amount of previous orders in this webshop. Doesn&#39;t need to be provided if the customer has no login. | 
**kundenstatus** | **string** | Type of customer. NEUKUNDE (new Customer), BESTANDSKUNDE (returning customer) or PREMIUMKUNDE (premium customer) | [optional] 
**anzahl_produkte_im_warenkorb** | **int** | number of products in shopping cart | [optional] 
**negative_zahlungsinformation** | **string** | can be ignored | [optional] 
**risikoartikel_im_warenkorb** | **bool** | can be ignored | [optional] [default to false]
**logistik_dienstleister** | **string** | logistics service provider | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


