# ShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#x27;s seller ID, which is included with every call to the Selling Partner API. | [optional] 
**order_item_id** | **string** | An Amazon-defined order item identifier. | [optional] 
**order_adjustment_item_id** | **string** | An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events. | [optional] 
**quantity_shipped** | **int** | The number of items shipped. | [optional] 
**item_charge_list** | [**\Swagger\Client\Models\ChargeComponentList**](ChargeComponentList.md) |  | [optional] 
**item_charge_adjustment_list** | [**\Swagger\Client\Models\ChargeComponentList**](ChargeComponentList.md) |  | [optional] 
**item_fee_list** | [**\Swagger\Client\Models\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**item_fee_adjustment_list** | [**\Swagger\Client\Models\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**item_tax_withheld_list** | [**\Swagger\Client\Models\TaxWithheldComponentList**](TaxWithheldComponentList.md) |  | [optional] 
**promotion_list** | [**\Swagger\Client\Models\PromotionList**](PromotionList.md) |  | [optional] 
**promotion_adjustment_list** | [**\Swagger\Client\Models\PromotionList**](PromotionList.md) |  | [optional] 
**cost_of_points_granted** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**cost_of_points_returned** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

