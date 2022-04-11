<?php

namespace ClouSale\AmazonSellingPartnerAPI\Models\Notifications\Enums;

/**
 * @link https://github.com/amzn/selling-partner-api-docs/blob/main/references/notifications-api/notifications.md#notificationtype
 *
 */
class NotificationType
{
    const REPORT_PROCESSING_FINISHED = 'REPORT_PROCESSING_FINISHED';
    const FULFILLMENT_ORDER_STATUS = 'FULFILLMENT_ORDER_STATUS';
    const FEE_PROMOTION = 'FEE_PROMOTION';
    const FBA_OUTBOUND_SHIPMENT_STATUS = 'FBA_OUTBOUND_SHIPMENT_STATUS';
    const FEED_PROCESSING_FINISHED = 'FEED_PROCESSING_FINISHED';
    const ANY_OFFER_CHANGED = 'ANY_OFFER_CHANGED';
    const BRANDED_ITEM_CONTENT_CHANGE = 'BRANDED_ITEM_CONTENT_CHANGE';
    const ITEM_PRODUCT_TYPE_CHANGE = 'ITEM_PRODUCT_TYPE_CHANGE';
    const MFN_ORDER_STATUS_CHANGE = 'MFN_ORDER_STATUS_CHANGE';
    const B2B_ANY_OFFER_CHANGED = 'B2B_ANY_OFFER_CHANGED';
}
