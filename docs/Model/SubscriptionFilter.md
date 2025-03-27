# # SubscriptionFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_date** | **string** | The creation date for this subscription filter. | [optional]
**filter_id** | **string** | The unique identifier for this subscription filter. | [optional]
**filter_schema** | **array<string,object>** | The content of this subscription filter as a valid &lt;a href&#x3D;\&quot;https://json-schema.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;JSON Schema Core document&lt;/a&gt; (version 2020-12 or later). The &lt;strong&gt;filterSchema&lt;/strong&gt; provided must describe the subscription&#39;s notification payload such that it supplies valid criteria to filter the subscription&#39;s notifications. | [optional]
**filter_status** | **string** | The status of this subscription filter. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/notification/types/api:SubscriptionFilterStatus&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**subscription_id** | **string** | The unique identifier for the subscription. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
