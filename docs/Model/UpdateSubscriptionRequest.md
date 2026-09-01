# UpdateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_id** | **string** | The unique identifier of the destination endpoint that will receive notifications associated with this subscription. Use &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations\&quot;&gt;getDestinations&lt;/a&gt; to retrieve destination IDs. | [optional]
**payload** | [**\eBay\Commerce\Notification\Model\SubscriptionPayloadDetail**](SubscriptionPayloadDetail.md) | The payload associated with this subscription. | [optional]
**status** | **string** | Set the status of the subscription being updated to &lt;code&gt;ENABLED&lt;/code&gt; or &lt;code&gt;DISABLED&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
