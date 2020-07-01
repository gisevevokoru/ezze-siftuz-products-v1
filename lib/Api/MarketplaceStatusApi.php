<?php
/**
 * MarketplaceStatusApi
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\ProductsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public Partner Product API
 *
 * Manage your product data, send images and                   much more.
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\ProductsV1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EzzeSiftuz\ProductsV1\ApiException;
use EzzeSiftuz\ProductsV1\Configuration;
use EzzeSiftuz\ProductsV1\HeaderSelector;
use EzzeSiftuz\ProductsV1\ObjectSerializer;

/**
 * MarketplaceStatusApi Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\ProductsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketplaceStatusApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getMarketPlaceStatus
     *
     * Read the marketplace status for a single product variation.
     *
     * @param  string $sku search for a marketplace status by its SKU value (required)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EzzeSiftuz\ProductsV1\Model\MarketPlaceStatus
     */
    public function getMarketPlaceStatus($sku)
    {
        list($response) = $this->getMarketPlaceStatusWithHttpInfo($sku);
        return $response;
    }

    /**
     * Operation getMarketPlaceStatusWithHttpInfo
     *
     * Read the marketplace status for a single product variation.
     *
     * @param  string $sku search for a marketplace status by its SKU value (required)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EzzeSiftuz\ProductsV1\Model\MarketPlaceStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMarketPlaceStatusWithHttpInfo($sku)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatus';
        $request = $this->getMarketPlaceStatusRequest($sku);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMarketPlaceStatusAsync
     *
     * Read the marketplace status for a single product variation.
     *
     * @param  string $sku search for a marketplace status by its SKU value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMarketPlaceStatusAsync($sku)
    {
        return $this->getMarketPlaceStatusAsyncWithHttpInfo($sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMarketPlaceStatusAsyncWithHttpInfo
     *
     * Read the marketplace status for a single product variation.
     *
     * @param  string $sku search for a marketplace status by its SKU value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMarketPlaceStatusAsyncWithHttpInfo($sku)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatus';
        $request = $this->getMarketPlaceStatusRequest($sku);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMarketPlaceStatus'
     *
     * @param  string $sku search for a marketplace status by its SKU value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMarketPlaceStatusRequest($sku)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling getMarketPlaceStatus'
            );
        }

        $resourcePath = '/v1/products/{sku}/marketplace-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMarketPlaceStatusList
     *
     * Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
     *
     * @param  string $product_name search marketplace status by the productName value of the related product variations (optional)
     * @param  string $category search marketplace status by the category value of the related product variations (optional)
     * @param  string $brand search marketplace status by the brand value of the related product variations (optional)
     * @param  int $page page to load (optional)
     * @param  int $limit proposed limit for the number of marketplace status per response page (at most 1000) (optional)
     * @param  string[] $market_place_status only include items that match any of the provided status (optional)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EzzeSiftuz\ProductsV1\Model\MarketPlaceStatusApiResult
     */
    public function getMarketPlaceStatusList($product_name = null, $category = null, $brand = null, $page = null, $limit = null, $market_place_status = null)
    {
        list($response) = $this->getMarketPlaceStatusListWithHttpInfo($product_name, $category, $brand, $page, $limit, $market_place_status);
        return $response;
    }

    /**
     * Operation getMarketPlaceStatusListWithHttpInfo
     *
     * Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
     *
     * @param  string $product_name search marketplace status by the productName value of the related product variations (optional)
     * @param  string $category search marketplace status by the category value of the related product variations (optional)
     * @param  string $brand search marketplace status by the brand value of the related product variations (optional)
     * @param  int $page page to load (optional)
     * @param  int $limit proposed limit for the number of marketplace status per response page (at most 1000) (optional)
     * @param  string[] $market_place_status only include items that match any of the provided status (optional)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EzzeSiftuz\ProductsV1\Model\MarketPlaceStatusApiResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMarketPlaceStatusListWithHttpInfo($product_name = null, $category = null, $brand = null, $page = null, $limit = null, $market_place_status = null)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatusApiResult';
        $request = $this->getMarketPlaceStatusListRequest($product_name, $category, $brand, $page, $limit, $market_place_status);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatusApiResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMarketPlaceStatusListAsync
     *
     * Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
     *
     * @param  string $product_name search marketplace status by the productName value of the related product variations (optional)
     * @param  string $category search marketplace status by the category value of the related product variations (optional)
     * @param  string $brand search marketplace status by the brand value of the related product variations (optional)
     * @param  int $page page to load (optional)
     * @param  int $limit proposed limit for the number of marketplace status per response page (at most 1000) (optional)
     * @param  string[] $market_place_status only include items that match any of the provided status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMarketPlaceStatusListAsync($product_name = null, $category = null, $brand = null, $page = null, $limit = null, $market_place_status = null)
    {
        return $this->getMarketPlaceStatusListAsyncWithHttpInfo($product_name, $category, $brand, $page, $limit, $market_place_status)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMarketPlaceStatusListAsyncWithHttpInfo
     *
     * Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
     *
     * @param  string $product_name search marketplace status by the productName value of the related product variations (optional)
     * @param  string $category search marketplace status by the category value of the related product variations (optional)
     * @param  string $brand search marketplace status by the brand value of the related product variations (optional)
     * @param  int $page page to load (optional)
     * @param  int $limit proposed limit for the number of marketplace status per response page (at most 1000) (optional)
     * @param  string[] $market_place_status only include items that match any of the provided status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMarketPlaceStatusListAsyncWithHttpInfo($product_name = null, $category = null, $brand = null, $page = null, $limit = null, $market_place_status = null)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\MarketPlaceStatusApiResult';
        $request = $this->getMarketPlaceStatusListRequest($product_name, $category, $brand, $page, $limit, $market_place_status);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMarketPlaceStatusList'
     *
     * @param  string $product_name search marketplace status by the productName value of the related product variations (optional)
     * @param  string $category search marketplace status by the category value of the related product variations (optional)
     * @param  string $brand search marketplace status by the brand value of the related product variations (optional)
     * @param  int $page page to load (optional)
     * @param  int $limit proposed limit for the number of marketplace status per response page (at most 1000) (optional)
     * @param  string[] $market_place_status only include items that match any of the provided status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMarketPlaceStatusListRequest($product_name = null, $category = null, $brand = null, $page = null, $limit = null, $market_place_status = null)
    {

        $resourcePath = '/v1/products/marketplace-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($product_name !== null) {
            $queryParams['productName'] = ObjectSerializer::toQueryValue($product_name);
        }
        // query params
        if ($category !== null) {
            $queryParams['category'] = ObjectSerializer::toQueryValue($category);
        }
        // query params
        if ($brand !== null) {
            $queryParams['brand'] = ObjectSerializer::toQueryValue($brand);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if (is_array($market_place_status)) {
            $market_place_status = ObjectSerializer::serializeCollection($market_place_status, 'multi', true);
        }
        if ($market_place_status !== null) {
            $queryParams['marketPlaceStatus'] = ObjectSerializer::toQueryValue($market_place_status);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
