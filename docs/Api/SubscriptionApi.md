# eBay\Commerce\Notification\SubscriptionApi

All URIs are relative to https://api.ebay.com/commerce/notification/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscription()**](SubscriptionApi.md#createSubscription) | **POST** /subscription |  |
| [**createSubscriptionFilter()**](SubscriptionApi.md#createSubscriptionFilter) | **POST** /subscription/{subscription_id}/filter |  |
| [**deleteSubscription()**](SubscriptionApi.md#deleteSubscription) | **DELETE** /subscription/{subscription_id} |  |
| [**deleteSubscriptionFilter()**](SubscriptionApi.md#deleteSubscriptionFilter) | **DELETE** /subscription/{subscription_id}/filter/{filter_id} |  |
| [**disableSubscription()**](SubscriptionApi.md#disableSubscription) | **POST** /subscription/{subscription_id}/disable |  |
| [**enableSubscription()**](SubscriptionApi.md#enableSubscription) | **POST** /subscription/{subscription_id}/enable |  |
| [**getSubscription()**](SubscriptionApi.md#getSubscription) | **GET** /subscription/{subscription_id} |  |
| [**getSubscriptionFilter()**](SubscriptionApi.md#getSubscriptionFilter) | **GET** /subscription/{subscription_id}/filter/{filter_id} |  |
| [**getSubscriptions()**](SubscriptionApi.md#getSubscriptions) | **GET** /subscription |  |
| [**testSubscription()**](SubscriptionApi.md#testSubscription) | **POST** /subscription/{subscription_id}/test |  |
| [**updateSubscription()**](SubscriptionApi.md#updateSubscription) | **PUT** /subscription/{subscription_id} |  |


## `createSubscription()`

```php
createSubscription($content_type, $create_subscription_request): object
```



This method allows applications to create a subscription for a topic and supported schema version. Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.<br><br>Each application and topic-schema pairing to a subscription should have a 1:1 cardinality.<br><br>You can create the subscription in disabled mode, test it (see the <b>test</b> method), and when everything is ready, you can enable the subscription (see the <b>enableSubscription</b> method).<br><br><span class=\"tablenote\"><b>Note:</b> If an application is not authorized to subscribe to a topic, for example, if your authorization does not include the list of scopes required for the topic, an error code of 195011 is returned.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$create_subscription_request = new \eBay\Commerce\Notification\Model\CreateSubscriptionRequest(); // \eBay\Commerce\Notification\Model\CreateSubscriptionRequest | The create subscription request.

try {
    $result = $apiInstance->createSubscription($content_type, $create_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **create_subscription_request** | [**\eBay\Commerce\Notification\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)| The create subscription request. | [optional] |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscriptionFilter()`

```php
createSubscriptionFilter($content_type, $subscription_id, $create_subscription_filter_request): object
```



This method allows applications to create a filter for a subscription. Filters allow applications to only be sent notifications that match a provided criteria. Notifications that do not match this criteria will not be sent to the destination.<br><br>The <strong>filterSchema</strong> value must be a valid <a href=\"https://json-schema.org \" target=\"_blank\">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications. The user does not need to provide <code>$schema</code> and <code>$id</code> definitions.<br><br>When a filter is first created, it is not immediately active on the subscription. If the request has a valid JSON body, the successful call returns the HTTP status code <b>201&nbsp;Created</b>. Newly created filters are in <code>PENDING</code> status until they are reviewed. If a filter is valid, it will move from <code>PENDING</code> status to <code>ENABLED</code> status. You can find the status of a filter using the <a href=\"/api-docs/commerce/notification/resources/subscription/methods/getSubscriptionFilter\">getSubscriptionFilter</a> method. See <a href=\"/api-docs/commerce/notification/overview.html#create-filter\" target=\"_blank\">Creating a subscription filter for a topic</a> for additional information.<br><br><span class=\"tablenote\"><b>Note:</b> Only one filter can be in <strong>ENABLED</strong> (which means active) status on a subscription at a time. If an <strong>ENABLED</strong> filter is overwritten by a new call to <strong>CREATE</strong> a filter for the subscription, it stays in <strong>ENABLED</strong> status until the new <strong>PENDING</strong> filter becomes the <strong>ENABLED</strong> filter, and the existing filter then becomes <strong>DISABLED</strong>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$subscription_id = 'subscription_id_example'; // string | The unique identifier of the subscription for which a filter will be created.
$create_subscription_filter_request = new \eBay\Commerce\Notification\Model\CreateSubscriptionFilterRequest(); // \eBay\Commerce\Notification\Model\CreateSubscriptionFilterRequest | The create subscription filter request.

try {
    $result = $apiInstance->createSubscriptionFilter($content_type, $subscription_id, $create_subscription_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscriptionFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **subscription_id** | **string**| The unique identifier of the subscription for which a filter will be created. | |
| **create_subscription_filter_request** | [**\eBay\Commerce\Notification\Model\CreateSubscriptionFilterRequest**](../Model/CreateSubscriptionFilterRequest.md)| The create subscription filter request. | [optional] |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscription()`

```php
deleteSubscription($subscription_id)
```



This method allows applications to delete a subscription. Subscriptions can be deleted regardless of status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | The unique identifier of the subscription to delete. Use <b>getSubscriptions</b> to retrieve subscription IDs.

try {
    $apiInstance->deleteSubscription($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| The unique identifier of the subscription to delete. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscriptionFilter()`

```php
deleteSubscriptionFilter($filter_id, $subscription_id)
```



This method allows applications to disable the active filter on a subscription, so that a new subscription filter may be added.<br><br><span class=\"tablenote\"><b>Note:</b> Subscription filters in <strong>PENDING</strong> status can not be disabled. However, a new filter can be created instead with the <strong>createSubscriptionFilter</strong> method and this new filter will override the <strong>PENDING</strong> filter.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_id = 'filter_id_example'; // string | The unique identifier of the subscription filter to delete.  Filter ID values, if configured for a subscription, will be shown in the <b>subscriptions.filterId</b> field in <b>getSubscription</b> and <b>getSubscription</b> responses. The filter ID value is also returned in the Location response header when a filter is created with <b>createSubscriptionFilter</b>.
$subscription_id = 'subscription_id_example'; // string | The unique identifier of the subscription associated with the filter to delete. Use <b>getSubscriptions</b> to retrieve subscription IDs.

try {
    $apiInstance->deleteSubscriptionFilter($filter_id, $subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deleteSubscriptionFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter_id** | **string**| The unique identifier of the subscription filter to delete.  Filter ID values, if configured for a subscription, will be shown in the &lt;b&gt;subscriptions.filterId&lt;/b&gt; field in &lt;b&gt;getSubscription&lt;/b&gt; and &lt;b&gt;getSubscription&lt;/b&gt; responses. The filter ID value is also returned in the Location response header when a filter is created with &lt;b&gt;createSubscriptionFilter&lt;/b&gt;. | |
| **subscription_id** | **string**| The unique identifier of the subscription associated with the filter to delete. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableSubscription()`

```php
disableSubscription($subscription_id)
```



This method disables a subscription, which prevents the subscription from providing notifications. To restart a subscription, call <strong>enableSubscription</strong>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | The unique identifier of an enabled subscription that will be disabled. Use <b>getSubscriptions</b> to retrieve subscription IDs.

try {
    $apiInstance->disableSubscription($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->disableSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| The unique identifier of an enabled subscription that will be disabled. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableSubscription()`

```php
enableSubscription($subscription_id)
```



This method allows applications to enable a disabled subscription. To pause (or disable) an enabled subscription, call <strong>disableSubscription</strong>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | The unique identifier of a disabled subscription that will be enabled. Use <b>getSubscriptions</b> to retrieve subscription IDs.

try {
    $apiInstance->enableSubscription($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->enableSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| The unique identifier of a disabled subscription that will be enabled. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscription()`

```php
getSubscription($subscription_id): \eBay\Commerce\Notification\Model\Subscription
```



This method allows applications to retrieve subscription details for the specified subscription.<br><br>Specify the subscription to retrieve using the <strong>subscription_id</strong>. Use the <strong>getSubscriptions</strong> method to browse all subscriptions if you do not know the <strong>subscription_id</strong>.<br><br>Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | The unique identifier of the subscription to retrieve. Use <b>getSubscriptions</b> to retrieve subscription IDs.

try {
    $result = $apiInstance->getSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| The unique identifier of the subscription to retrieve. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |

### Return type

[**\eBay\Commerce\Notification\Model\Subscription**](../Model/Subscription.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionFilter()`

```php
getSubscriptionFilter($filter_id, $subscription_id): \eBay\Commerce\Notification\Model\SubscriptionFilter
```



This method allows applications to retrieve the filter details for the specified subscription filter.<br><br>Specify the subscription filter to retrieve by using the <strong>subscription_id</strong> and the <strong>filter_id</strong> associated with the subscription filter. The <strong>filter_id</strong> can be found in the response body for the <strong>getSubscription</strong> method, if there is a filter applied on the subscription.<br><br>Filters allow applications to only be sent notifications that match a provided criteria. Notifications that do not match this criteria will not be sent to the destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_id = 'filter_id_example'; // string | The unique identifier of the subscription filter.  Filter ID values, if configured for a subscription, will be shown in the <b>subscriptions.filterId</b> field in <b>getSubscription</b> and <b>getSubscription</b> responses. The filter ID value is also returned in the Location response header when a filter is created with <b>createSubscriptionFilter</b>.
$subscription_id = 'subscription_id_example'; // string | The unique identifier of the subscription associated with the filter. Use <b>getSubscriptions</b> to retrieve subscription IDs.

try {
    $result = $apiInstance->getSubscriptionFilter($filter_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter_id** | **string**| The unique identifier of the subscription filter.  Filter ID values, if configured for a subscription, will be shown in the &lt;b&gt;subscriptions.filterId&lt;/b&gt; field in &lt;b&gt;getSubscription&lt;/b&gt; and &lt;b&gt;getSubscription&lt;/b&gt; responses. The filter ID value is also returned in the Location response header when a filter is created with &lt;b&gt;createSubscriptionFilter&lt;/b&gt;. | |
| **subscription_id** | **string**| The unique identifier of the subscription associated with the filter. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |

### Return type

[**\eBay\Commerce\Notification\Model\SubscriptionFilter**](../Model/SubscriptionFilter.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptions()`

```php
getSubscriptions($continuation_token, $limit): \eBay\Commerce\Notification\Model\SubscriptionSearchResponse
```



This method allows applications to retrieve a list of all subscriptions. The list returned is a paginated collection of subscription resources.<br><br>Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = 'continuation_token_example'; // string | This string value can be used to return the next page in the result set. The string to use here is returned in the next field of the current page of results.
$limit = 'limit_example'; // string | The maximum number of subscriptions to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20

try {
    $result = $apiInstance->getSubscriptions($continuation_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**| This string value can be used to return the next page in the result set. The string to use here is returned in the next field of the current page of results. | [optional] |
| **limit** | **string**| The maximum number of subscriptions to return per page from the result set.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min:&lt;/b&gt; 10&lt;br&gt;&lt;br&gt;&lt;b&gt;Max:&lt;/b&gt; 100&lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 20 | [optional] |

### Return type

[**\eBay\Commerce\Notification\Model\SubscriptionSearchResponse**](../Model/SubscriptionSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testSubscription()`

```php
testSubscription($subscription_id)
```



This method triggers a mocked test payload that includes a notification ID, publish date, and so on. Use this method to test your subscription end-to-end.<br><br>You can create the subscription in disabled mode, test it using this method, and when everything is ready, you can enable the subscription (see the <strong>enableSubscription</strong> method).<br><br><span class=\"tablenote\"><b>Note:</b> Use the <strong>notificationId</strong> to tell the difference between a test payload and a real payload.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | The unique identifier of the subscription to test. Use <b>getSubscriptions</b> to retrieve subscription IDs.

try {
    $apiInstance->testSubscription($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->testSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| The unique identifier of the subscription to test. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($content_type, $subscription_id, $update_subscription_request)
```



This method allows applications to update a subscription. Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.<br><br><span class=\"tablenote\"><b>Note:</b> This call returns an error if an application is not authorized to subscribe to a topic.</span><br><br>You can pause and restart a subscription. See the <b>disableSubscription</b> and <b>enableSubscription</b> methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$subscription_id = 'subscription_id_example'; // string | The unique identifier for the subscription to update. Use <b>getSubscriptions</b> to retrieve subscription IDs.
$update_subscription_request = new \eBay\Commerce\Notification\Model\UpdateSubscriptionRequest(); // \eBay\Commerce\Notification\Model\UpdateSubscriptionRequest | The create subscription request.

try {
    $apiInstance->updateSubscription($content_type, $subscription_id, $update_subscription_request);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **subscription_id** | **string**| The unique identifier for the subscription to update. Use &lt;b&gt;getSubscriptions&lt;/b&gt; to retrieve subscription IDs. | |
| **update_subscription_request** | [**\eBay\Commerce\Notification\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)| The create subscription request. | [optional] |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
