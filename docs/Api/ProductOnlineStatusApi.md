# EzzeSiftuz\ProductsV1\ProductOnlineStatusApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOnlineStatus**](ProductOnlineStatusApi.md#getonlinestatus) | **GET** /v1/products/online-status | Read the online status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting online status values will be paginated. The default page length is 100 online status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.
[**getVariationOnlineStatus**](ProductOnlineStatusApi.md#getvariationonlinestatus) | **GET** /v1/products/{sku}/online-status | Read the online status of a single product variation.
[**updateOnlineStatus**](ProductOnlineStatusApi.md#updateonlinestatus) | **POST** /v1/products/online-status | Update the online status of your product variations and get a process-id to query results

# **getOnlineStatus**
> \EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse getOnlineStatus($product_name, $category, $brand, $page, $limit)

Read the online status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting online status values will be paginated. The default page length is 100 online status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductOnlineStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_name = "product_name_example"; // string | search for product variations by their productName value
$category = "category_example"; // string | search for product variations by their category value
$brand = "brand_example"; // string | search for product variations by their brand value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of online status values per response page (at most 100)

try {
    $result = $apiInstance->getOnlineStatus($product_name, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOnlineStatusApi->getOnlineStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_name** | **string**| search for product variations by their productName value | [optional]
 **category** | **string**| search for product variations by their category value | [optional]
 **brand** | **string**| search for product variations by their brand value | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of online status values per response page (at most 100) | [optional]

### Return type

[**\EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse**](../Model/OnlineStatusListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariationOnlineStatus**
> \EzzeSiftuz\ProductsV1\Model\OnlineStatus getVariationOnlineStatus($sku)

Read the online status of a single product variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductOnlineStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->getVariationOnlineStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOnlineStatusApi->getVariationOnlineStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\EzzeSiftuz\ProductsV1\Model\OnlineStatus**](../Model/OnlineStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOnlineStatus**
> \EzzeSiftuz\ProductsV1\Model\ProductProcessProgress updateOnlineStatus($body, $x_request_timestamp)

Update the online status of your product variations and get a process-id to query results

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductOnlineStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \EzzeSiftuz\ProductsV1\Model\OnlineStatusListRequest(); // \EzzeSiftuz\ProductsV1\Model\OnlineStatusListRequest | 
$x_request_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Holds the client side update request timestamp

try {
    $result = $apiInstance->updateOnlineStatus($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOnlineStatusApi->updateOnlineStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EzzeSiftuz\ProductsV1\Model\OnlineStatusListRequest**](../Model/OnlineStatusListRequest.md)|  | [optional]
 **x_request_timestamp** | **\DateTime**| Holds the client side update request timestamp | [optional]

### Return type

[**\EzzeSiftuz\ProductsV1\Model\ProductProcessProgress**](../Model/ProductProcessProgress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

