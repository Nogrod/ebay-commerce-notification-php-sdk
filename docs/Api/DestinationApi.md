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
createDestination($destination_request)
```



This method allows applications to create a destination. A destination is an endpoint that receives HTTP push notifications.<br><br>A single destination for all topics is valid, as is individual destinations for each topic.<br><br>To update a destination, use the <a href=\"/develop/api/sell/notification_api#sell-notification_api-destination-updatedestination\">updateDestination</a> call.<br><br>The destination created will need to be referenced while creating or updating a subscription to a topic.<br><br><span class=\"tablenote\"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully.

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
$destination_request = new \eBay\Commerce\Notification\Model\DestinationRequest(); // \eBay\Commerce\Notification\Model\DestinationRequest | The create destination request.

try {
    $apiInstance->createDestination($destination_request);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->createDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_request** | [**\eBay\Commerce\Notification\Model\DestinationRequest**](../Model/DestinationRequest.md)| The create destination request. | [optional] |

### Return type

void (empty response body)

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
deleteDestination($destination_id): \eBay\Commerce\Notification\Model\Error
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
$destination_id = 'destination_id_example'; // string | The unique identifier of the destination to delete. Only disabled or marked down destinations can be deleted, and enabled destinations cannot be deleted. Use <a href=\"/develop/api/sell/notification_api#sell-notification_api-destination-getdestination\">getDestination</a> or <a href=\"/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations\">getDestinations</a> to see the current status of a destination.

try {
    $result = $apiInstance->deleteDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_id** | **string**| The unique identifier of the destination to delete. Only disabled or marked down destinations can be deleted, and enabled destinations cannot be deleted. Use &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-destination-getdestination\&quot;&gt;getDestination&lt;/a&gt; or &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations\&quot;&gt;getDestinations&lt;/a&gt; to see the current status of a destination. | |

### Return type

[**\eBay\Commerce\Notification\Model\Error**](../Model/Error.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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
$destination_id = 'destination_id_example'; // string | The unique identifier of the destination to retrieve. Use <a href=\"/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations\">getDestinations</a> to retrieve destination IDs.

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
| **destination_id** | **string**| The unique identifier of the destination to retrieve. Use &lt;a href&#x3D;\&quot;/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations\&quot;&gt;getDestinations&lt;/a&gt; to retrieve destination IDs. | |

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
updateDestination($destination_id, $destination_request): \eBay\Commerce\Notification\Model\Error
```



This method allows applications to update a destination.<br><br><span class=\"tablenote\"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully.</span>

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
$destination_id = 'destination_id_example'; // string | The unique identifier for the destination.
$destination_request = new \eBay\Commerce\Notification\Model\DestinationRequest(); // \eBay\Commerce\Notification\Model\DestinationRequest | The create subscription request.

try {
    $result = $apiInstance->updateDestination($destination_id, $destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->updateDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_id** | **string**| The unique identifier for the destination. | |
| **destination_request** | [**\eBay\Commerce\Notification\Model\DestinationRequest**](../Model/DestinationRequest.md)| The create subscription request. | [optional] |

### Return type

[**\eBay\Commerce\Notification\Model\Error**](../Model/Error.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
