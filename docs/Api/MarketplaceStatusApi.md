# EzzeSiftuz\ProductsV1\MarketplaceStatusApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketPlaceStatus**](MarketplaceStatusApi.md#getmarketplacestatus) | **GET** /v1/products/{sku}/marketplace-status | Read the marketplace status for a single product variation.
[**getMarketPlaceStatusList**](MarketplaceStatusApi.md#getmarketplacestatuslist) | **GET** /v1/products/marketplace-status | Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resultingmarketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

# **getMarketPlaceStatus**
> \EzzeSiftuz\ProductsV1\Model\MarketPlaceStatus getMarketPlaceStatus($sku)

Read the marketplace status for a single product variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\MarketplaceStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->getMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceStatusApi->getMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a marketplace status by its SKU value |

### Return type

[**\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatus**](../Model/MarketPlaceStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketPlaceStatusList**
> \EzzeSiftuz\ProductsV1\Model\MarketPlaceStatusApiResult getMarketPlaceStatusList($product_name, $category, $brand, $page, $limit)

Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resultingmarketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\MarketplaceStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_name = "product_name_example"; // string | search marketplace status by the productName value of the related product variations
$category = "category_example"; // string | search marketplace status by the category value of the related product variations
$brand = "brand_example"; // string | search marketplace status by the brand value of the related product variations
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of marketplace status per response page (at most 100)

try {
    $result = $apiInstance->getMarketPlaceStatusList($product_name, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceStatusApi->getMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_name** | **string**| search marketplace status by the productName value of the related product variations | [optional]
 **category** | **string**| search marketplace status by the category value of the related product variations | [optional]
 **brand** | **string**| search marketplace status by the brand value of the related product variations | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of marketplace status per response page (at most 100) | [optional]

### Return type

[**\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatusApiResult**](../Model/MarketPlaceStatusApiResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

