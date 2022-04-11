# UpdateFulfillmentOrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. | [optional] 
**seller_fulfillment_order_item_id** | **string** | Identifies the fulfillment order item to update. Created with a previous call to the createFulfillmentOrder operation. | 
**quantity** | [**\Swagger\Client\Models\Quantity**](Quantity.md) |  | 
**gift_message** | **string** | A message to the gift recipient, if applicable. | [optional] 
**displayable_comment** | **string** | Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip. | [optional] 
**fulfillment_network_sku** | **string** | Amazon&#x27;s fulfillment network SKU of the item. | [optional] 
**order_item_disposition** | **string** | Indicates whether the item is sellable or unsellable. | [optional] 
**per_unit_declared_value** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**per_unit_price** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**per_unit_tax** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

