# eBay\Commerce\Notification\PublicKeyApi

All URIs are relative to https://api.ebay.com/commerce/notification/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPublicKey()**](PublicKeyApi.md#getPublicKey) | **GET** /public_key/{public_key_id} |  |


## `getPublicKey()`

```php
getPublicKey($public_key_id): \eBay\Commerce\Notification\Model\PublicKey
```



This method allows users to retrieve a public key using a specified key ID. The public key that is returned in the response payload is used to process and validate eBay notifications.<br><br>The public key ID, which is a required request parameter for this method, is retrieved from the Base64-encoded <b>X-EBAY-SIGNATURE</b> header that is included in the eBay notification.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> The retrieved public key value should be cached for a temporary — but reasonable — amount of time (e.g., one-hour is recommended.) This key should not be requested for every notification since doing so can result in exceeding <a href=\"/develop/apis/api-call-limits\" target=\"_blank\">API call limits</a> if a large number of notification requests is received.</p></div><br><span class=\"tablenote\"><b>Note:</b> For more details about how to process eBay push notifications and validate notification message payloads, see the <a href=\"/api-docs/commerce/notification/overview.html\">Notification API overview</a>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Commerce\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Commerce\Notification\Api\PublicKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_key_id = 'public_key_id_example'; // string | The unique key ID that is used to retrieve the public key.<br><br><span class=\"tablenote\"><b>Note: </b>This is retrieved from the <b>X-EBAY-SIGNATURE</b> header that is included with the push notification.</span>

try {
    $result = $apiInstance->getPublicKey($public_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicKeyApi->getPublicKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_key_id** | **string**| The unique key ID that is used to retrieve the public key.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt;This is retrieved from the &lt;b&gt;X-EBAY-SIGNATURE&lt;/b&gt; header that is included with the push notification.&lt;/span&gt; | |

### Return type

[**\eBay\Commerce\Notification\Model\PublicKey**](../Model/PublicKey.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
