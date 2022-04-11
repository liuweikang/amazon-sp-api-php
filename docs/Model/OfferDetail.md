# OfferDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**my_offer** | **bool** | When true, this is the seller&#x27;s offer. | [optional] 
**sub_condition** | **string** | The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. | 
**seller_feedback_rating** | [**\Swagger\Client\Models\SellerFeedbackType**](SellerFeedbackType.md) |  | [optional] 
**shipping_time** | [**\Swagger\Client\Models\DetailedShippingTimeType**](DetailedShippingTimeType.md) |  | 
**listing_price** | [**\Swagger\Client\Models\MoneyType**](MoneyType.md) |  | 
**points** | [**\Swagger\Client\Models\Points**](Points.md) |  | [optional] 
**shipping** | [**\Swagger\Client\Models\MoneyType**](MoneyType.md) |  | 
**ships_from** | [**\Swagger\Client\Models\ShipsFromType**](ShipsFromType.md) |  | [optional] 
**is_fulfilled_by_amazon** | **bool** | When true, the offer is fulfilled by Amazon. | 
**is_buy_box_winner** | **bool** | When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime. | [optional] 
**is_featured_merchant** | **bool** | When true, the seller of the item is eligible to win the Buy Box. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

