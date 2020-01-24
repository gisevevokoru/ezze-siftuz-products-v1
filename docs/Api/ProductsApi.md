# EzzeSiftuz\ProductsV1\ProductsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateProductVariations**](ProductsApi.md#createorupdateproductvariations) | **POST** /v1/products | Create or update your product variations and get a process-id to query results. The limit for the number of product variations in one request is 500.
[**getPartnerProducts**](ProductsApi.md#getpartnerproducts) | **GET** /v1/products | Read your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
[**getProductVariation**](ProductsApi.md#getproductvariation) | **GET** /v1/products/{sku} | Read a single product variation.

# **createOrUpdateProductVariations**
> \EzzeSiftuz\ProductsV1\Model\ProductProcessProgress createOrUpdateProductVariations($body, $x_request_timestamp)

Create or update your product variations and get a process-id to query results. The limit for the number of product variations in one request is 500.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \EzzeSiftuz\ProductsV1\Model\ProductVariation()); // \EzzeSiftuz\ProductsV1\Model\ProductVariation[] | 
$x_request_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Holds the client side update request timestamp

try {
    $result = $apiInstance->createOrUpdateProductVariations($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EzzeSiftuz\ProductsV1\Model\ProductVariation[]**](../Model/ProductVariation.md)|  | [optional]
 **x_request_timestamp** | **\DateTime**| Holds the client side update request timestamp | [optional]

### Return type

[**\EzzeSiftuz\ProductsV1\Model\ProductProcessProgress**](../Model/ProductProcessProgress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerProducts**
> \EzzeSiftuz\ProductsV1\Model\ProductVariationApiResult getPartnerProducts($product_name, $category, $brand, $page, $limit)

Read your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_name = "product_name_example"; // string | search for product variations by their productName value
$category = "category_example"; // string | search for product variations by their category value
$brand = "brand_example"; // string | search for product variations by their brand value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->getPartnerProducts($product_name, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPartnerProducts: ', $e->getMessage(), PHP_EOL;
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
 **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional]

### Return type

[**\EzzeSiftuz\ProductsV1\Model\ProductVariationApiResult**](../Model/ProductVariationApiResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductVariation**
> \EzzeSiftuz\ProductsV1\Model\ProductVariation getProductVariation($sku)

Read a single product variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\ProductsV1\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->getProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\EzzeSiftuz\ProductsV1\Model\ProductVariation**](../Model/ProductVariation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

