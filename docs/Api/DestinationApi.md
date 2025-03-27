# eBay\Commerce\Notification\DestinationApi

All URIs are relative to https://api.ebay.com/commerce/notification/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDestination()**](DestinationApi.md#createDestination) | **POST** /destination |  |
| [**deleteDestination()**](DestinationApi.md#deleteDestination) | **DELETE** /destination/{destination_id} |  |
| [**getDestination()**](DestinationApi.md#getDestination) | **GET** /destination/{destination_id} |  |
| [**getDestinations()**](DestinationApi.md#getDestinations) | **GET** /destination |  |
| [**updateDestination()**](DestinationApi.md#updateDestination) | **PUT** /destination/{destination_id} |  |


## `createDestination()`

```php
createDestination($content_type, $destination_request): object
```



This method allows applications to create a destination. A destination is an endpoint that receives HTTP push notifications.<br><br>A single destination for all topics is valid, as is individual destinations for each topic.<br><br>To update a destination, use the <strong>updateDestination</strong> call.<br><br>The destination created will need to be referenced while creating or updating a subscription to a topic.<br><br><span class=\"tablenote\"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href=\"/api-docs/commerce/notification/overview.html\">Notification API overview</a> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$destination_request = new \eBay\Commerce\Notification\Model\DestinationRequest(); // \eBay\Commerce\Notification\Model\DestinationRequest | The create destination request.

try {
    $result = $apiInstance->createDestination($content_type, $destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->createDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **destination_request** | [**\eBay\Commerce\Notification\Model\DestinationRequest**](../Model/DestinationRequest.md)| The create destination request. | [optional] |

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

## `deleteDestination()`

```php
deleteDestination($destination_id)
```



This method provides applications a way to delete a destination.<br><br>The same destination ID can be used by many destinations.<br><br>Trying to delete an active destination results in an error. You can disable a subscription, and when the destination is no longer in use, you can delete it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = 'destination_id_example'; // string | The unique identifier of the destination to delete. Only disabled or marked down destinations can be deleted, and enabled destinations cannot be deleted. Use <b>getDestination</b> or <b>getDestinations</b> to see the current status of a destination.

try {
    $apiInstance->deleteDestination($destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_id** | **string**| The unique identifier of the destination to delete. Only disabled or marked down destinations can be deleted, and enabled destinations cannot be deleted. Use &lt;b&gt;getDestination&lt;/b&gt; or &lt;b&gt;getDestinations&lt;/b&gt; to see the current status of a destination. | |

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

## `getDestination()`

```php
getDestination($destination_id): \eBay\Commerce\Notification\Model\Destination
```



This method allows applications to fetch the details for a destination. The details include the destination name, status, and configuration, including the endpoint and verification token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = 'destination_id_example'; // string | The unique identifier of the destination to retrieve. Use <b>getDestinations</b> to retrieve destination IDs.

try {
    $result = $apiInstance->getDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->getDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_id** | **string**| The unique identifier of the destination to retrieve. Use &lt;b&gt;getDestinations&lt;/b&gt; to retrieve destination IDs. | |

### Return type

[**\eBay\Commerce\Notification\Model\Destination**](../Model/Destination.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDestinations()`

```php
getDestinations($continuation_token, $limit): \eBay\Commerce\Notification\Model\DestinationSearchResponse
```



This method allows applications to retrieve a paginated collection of destination resources and related details. The details include the destination names, statuses, and configurations, including the endpoints and verification tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = 'continuation_token_example'; // string | This string value can be used to return the next page in the result set. The string to use here is returned in the <b>next</b> field of the current page of results.
$limit = 'limit_example'; // string | The maximum number of destinations to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20

try {
    $result = $apiInstance->getDestinations($continuation_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->getDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**| This string value can be used to return the next page in the result set. The string to use here is returned in the &lt;b&gt;next&lt;/b&gt; field of the current page of results. | [optional] |
| **limit** | **string**| The maximum number of destinations to return per page from the result set.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min:&lt;/b&gt; 10&lt;br&gt;&lt;br&gt;&lt;b&gt;Max:&lt;/b&gt; 100&lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 20 | [optional] |

### Return type

[**\eBay\Commerce\Notification\Model\DestinationSearchResponse**](../Model/DestinationSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDestination()`

```php
updateDestination($content_type, $destination_id, $destination_request)
```



This method allows applications to update a destination.<br><br><span class=\"tablenote\"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href=\"/api-docs/commerce/notification/overview.html\">Notification API overview</a> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$destination_id = 'destination_id_example'; // string | The unique identifier for the destination.
$destination_request = new \eBay\Commerce\Notification\Model\DestinationRequest(); // \eBay\Commerce\Notification\Model\DestinationRequest | The create subscription request.

try {
    $apiInstance->updateDestination($content_type, $destination_id, $destination_request);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->updateDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **destination_id** | **string**| The unique identifier for the destination. | |
| **destination_request** | [**\eBay\Commerce\Notification\Model\DestinationRequest**](../Model/DestinationRequest.md)| The create subscription request. | [optional] |

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
