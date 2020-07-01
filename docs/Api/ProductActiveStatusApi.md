# EzzeSiftuz\ProductsV1\ProductActiveStatusApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActiveStatus**](ProductActiveStatusApi.md#getactivestatus) | **GET** /v1/products/active-status | Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.
[**getVariationActiveStatus**](ProductActiveStatusApi.md#getvariationactivestatus) | **GET** /v1/products/{sku}/active-status | Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated.
[**updateActiveStatus**](ProductActiveStatusApi.md#updateactivestatus) | **POST** /v1/products/active-status | Update the active status of your product variations and get a process-id to query results. Replaces corresponding online-status endpoint which now is marked as deprecated.

# **getActiveStatus**
> \EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse getActiveStatus($product_name, $category, $brand, $page, $limit)

Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductActiveStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_name = "product_name_example"; // string | search for product variations by their productName value
$category = "category_example"; // string | search for product variations by their category value
$brand = "brand_example"; // string | search for product variations by their brand value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of active status values per response page (at most 100)

try {
    $result = $apiInstance->getActiveStatus($product_name, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductActiveStatusApi->getActiveStatus: ', $e->getMessage(), PHP_EOL;
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
 **limit** | **int**| proposed limit for the number of active status values per response page (at most 100) | [optional]

### Return type

[**\EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse**](../Model/OnlineStatusListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariationActiveStatus**
> \EzzeSiftuz\ProductsV1\Model\ActiveStatus getVariationActiveStatus($sku)

Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductActiveStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->getVariationActiveStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductActiveStatusApi->getVariationActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\EzzeSiftuz\ProductsV1\Model\ActiveStatus**](../Model/ActiveStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActiveStatus**
> \EzzeSiftuz\ProductsV1\Model\ProductProcessProgress updateActiveStatus($body, $x_request_timestamp)

Update the active status of your product variations and get a process-id to query results. Replaces corresponding online-status endpoint which now is marked as deprecated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductActiveStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest(); // \EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest | 
$x_request_timestamp = "x_request_timestamp_example"; // string | Holds the optional client side update request timestamp, in ISO DateTime format

try {
    $result = $apiInstance->updateActiveStatus($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductActiveStatusApi->updateActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest**](../Model/ActiveStatusListRequest.md)|  | [optional]
 **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional]

### Return type

[**\EzzeSiftuz\ProductsV1\Model\ProductProcessProgress**](../Model/ProductProcessProgress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

