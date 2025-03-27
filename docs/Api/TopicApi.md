# eBay\Commerce\Notification\TopicApi

All URIs are relative to https://api.ebay.com/commerce/notification/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTopic()**](TopicApi.md#getTopic) | **GET** /topic/{topic_id} |  |
| [**getTopics()**](TopicApi.md#getTopics) | **GET** /topic |  |


## `getTopic()`

```php
getTopic($topic_id): \eBay\Commerce\Notification\Model\Topic
```



This method allows applications to retrieve details for the specified topic. This information includes supported schema versions, formats, and other metadata for the topic.<br><br>Applications can subscribe to any of the topics for a supported schema version and format, limited by the authorization scopes required to subscribe to the topic.<br><br>A topic specifies the type of information to be received and the data types associated with an event. An event occurs in the eBay system, such as when a user requests deletion or revokes access for an application. An event is an instance of an event type (topic).<br><br>Specify the topic to retrieve using the <b>topic_id</b> URI parameter.<br><br><span class=\"tablenote\"><b>Note:</b> Use the <a href=\"/api-docs/commerce/notification/resources/topic/methods/getTopics\">getTopics</a> method to find a topic if you do not know the topic ID.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\TopicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topic_id = 'topic_id_example'; // string | The unique identifier of the notification topic for which the details are retrieved. Use <b>getTopics</b> to retrieve the topic ID.

try {
    $result = $apiInstance->getTopic($topic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicApi->getTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topic_id** | **string**| The unique identifier of the notification topic for which the details are retrieved. Use &lt;b&gt;getTopics&lt;/b&gt; to retrieve the topic ID. | |

### Return type

[**\eBay\Commerce\Notification\Model\Topic**](../Model/Topic.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopics()`

```php
getTopics($continuation_token, $limit): \eBay\Commerce\Notification\Model\TopicSearchResponse
```



This method returns a paginated collection of all supported topics, along with the details for the topics. This information includes supported schema versions, formats, and other metadata for the topics.<br><br>Applications can subscribe to any of the topics for a supported schema version and format, limited by the authorization scopes required to subscribe to the topic.<br><br>A topic specifies the type of information to be received and the data types associated with an event. An event occurs in the eBay system, such as when a user requests deletion or revokes access for an application. An event is an instance of an event type (topic).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\TopicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = 'continuation_token_example'; // string | This string value can be used to return the next page in the result set. The string to use here is returned in the <b>next</b> field of the current page of results.
$limit = 'limit_example'; // string | The maximum number of notification topics to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20

try {
    $result = $apiInstance->getTopics($continuation_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicApi->getTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**| This string value can be used to return the next page in the result set. The string to use here is returned in the &lt;b&gt;next&lt;/b&gt; field of the current page of results. | [optional] |
| **limit** | **string**| The maximum number of notification topics to return per page from the result set.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min:&lt;/b&gt; 10&lt;br&gt;&lt;br&gt;&lt;b&gt;Max:&lt;/b&gt; 100&lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 20 | [optional] |

### Return type

[**\eBay\Commerce\Notification\Model\TopicSearchResponse**](../Model/TopicSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
