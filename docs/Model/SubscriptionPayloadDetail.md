# SubscriptionPayloadDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_protocol** | [**\eBay\Commerce\Notification\Model\ProtocolEnum**](ProtocolEnum.md) | The supported delivery protocol of the notification topic.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;HTTPS&lt;/code&gt; is currently the only supported delivery protocol of all notification topics. &lt;/span&gt; | [optional]
**format** | [**\eBay\Commerce\Notification\Model\FormatTypeEnum**](FormatTypeEnum.md) | The supported data format of the payload.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; JSON is currently the only supported format for all notification topics.&lt;/span&gt; | [optional]
**schema_version** | **string** | The supported schema version for the notification topic. See the &lt;b&gt;supportedPayloads.schemaVersion&lt;/b&gt; field for the topic in &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-topic-gettopics\&quot;&gt;getTopics&lt;/a&gt; or &lt;a href&#x3D;\&quot;/api-docs/commerce/notification/resources/topic/methods/getTopic\&quot;&gt;getTopic&lt;/a&gt; response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
