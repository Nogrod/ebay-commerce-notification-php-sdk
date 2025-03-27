# # CreateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_id** | **string** | The unique identifier of the destination endpoint that will receive notifications associated with this subscription. Use the &lt;b&gt;getDestinations&lt;/b&gt; method to retrieve destination IDs. | [optional]
**payload** | [**\eBay\Commerce\Notification\Model\SubscriptionPayloadDetail**](SubscriptionPayloadDetail.md) |  | [optional]
**status** | **string** | Set the status of the subscription to &lt;code&gt;ENABLED&lt;/code&gt; or &lt;code&gt;DISABLED&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/notification/types/api:SubscriptionStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**topic_id** | **string** | The unique identifier of the notification topic to subscribe to. Use &lt;b&gt;getTopics&lt;/b&gt; to get topic IDs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
