# CreateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_id** | **string** | The unique identifier of the destination endpoint that will receive notifications associated with this subscription. Use the &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations\&quot;&gt;getDestinations&lt;/a&gt;  method to retrieve destination IDs. | [optional]
**payload** | [**\eBay\Commerce\Notification\Model\SubscriptionPayloadDetail**](SubscriptionPayloadDetail.md) | The payload associated with the notification topic. Use &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-topic-gettopics\&quot;&gt;getTopics&lt;/a&gt; or &lt;a href&#x3D;\&quot;/api-docs/commerce/notification/resources/topic/methods/getTopic\&quot;&gt;getTopic&lt;/a&gt; to get the supported payload for the topic. | [optional]
**status** | [**\eBay\Commerce\Notification\Model\SubscriptionStatusEnum**](SubscriptionStatusEnum.md) | Set the status of the subscription to &lt;code&gt;ENABLED&lt;/code&gt; or &lt;code&gt;DISABLED&lt;/code&gt;. | [optional]
**topic_id** | **string** | The unique identifier of the notification topic to subscribe to. Use &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-topic-gettopics\&quot;&gt;getTopics&lt;/a&gt; to get topic IDs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
