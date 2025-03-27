# # SubscriptionPayloadDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_protocol** | **string** | The supported delivery protocol of the notification topic.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;HTTPS&lt;/code&gt; is currently the only supported delivery protocol of all notification topics. &lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**format** | **string** | The supported data format of the payload.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; JSON is currently the only supported format for all notification topics.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/notification/types/api:FormatTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**schema_version** | **string** | The supported schema version for the notification topic. See the &lt;b&gt;supportedPayloads.schemaVersion&lt;/b&gt; field for the topic in &lt;b&gt;getTopics&lt;/b&gt; or &lt;b&gt;getTopic&lt;/b&gt; response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
