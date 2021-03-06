<?php
/**
 * ProductActiveStatusApi
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
 * ProductActiveStatusApi Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\ProductsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductActiveStatusApi
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
     * Operation getActiveStatus
     *
     * Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $product_name search for product variations by their productName value (optional)
     * @param  string $category search for product variations by their category value (optional)
     * @param  string $brand search for product variations by their brand value (optional)
     * @param  int $page page (optional)
     * @param  int $limit proposed limit for the number of active status values per response page (at most 100) (optional)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse
     */
    public function getActiveStatus($product_name = null, $category = null, $brand = null, $page = null, $limit = null)
    {
        list($response) = $this->getActiveStatusWithHttpInfo($product_name, $category, $brand, $page, $limit);
        return $response;
    }

    /**
     * Operation getActiveStatusWithHttpInfo
     *
     * Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $product_name search for product variations by their productName value (optional)
     * @param  string $category search for product variations by their category value (optional)
     * @param  string $brand search for product variations by their brand value (optional)
     * @param  int $page (optional)
     * @param  int $limit proposed limit for the number of active status values per response page (at most 100) (optional)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getActiveStatusWithHttpInfo($product_name = null, $category = null, $brand = null, $page = null, $limit = null)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse';
        $request = $this->getActiveStatusRequest($product_name, $category, $brand, $page, $limit);

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
                        '\EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getActiveStatusAsync
     *
     * Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $product_name search for product variations by their productName value (optional)
     * @param  string $category search for product variations by their category value (optional)
     * @param  string $brand search for product variations by their brand value (optional)
     * @param  int $page (optional)
     * @param  int $limit proposed limit for the number of active status values per response page (at most 100) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getActiveStatusAsync($product_name = null, $category = null, $brand = null, $page = null, $limit = null)
    {
        return $this->getActiveStatusAsyncWithHttpInfo($product_name, $category, $brand, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getActiveStatusAsyncWithHttpInfo
     *
     * Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $product_name search for product variations by their productName value (optional)
     * @param  string $category search for product variations by their category value (optional)
     * @param  string $brand search for product variations by their brand value (optional)
     * @param  int $page (optional)
     * @param  int $limit proposed limit for the number of active status values per response page (at most 100) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getActiveStatusAsyncWithHttpInfo($product_name = null, $category = null, $brand = null, $page = null, $limit = null)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\OnlineStatusListResponse';
        $request = $this->getActiveStatusRequest($product_name, $category, $brand, $page, $limit);

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
     * Create request for operation 'getActiveStatus'
     *
     * @param  string $product_name search for product variations by their productName value (optional)
     * @param  string $category search for product variations by their category value (optional)
     * @param  string $brand search for product variations by their brand value (optional)
     * @param  int $page (optional)
     * @param  int $limit proposed limit for the number of active status values per response page (at most 100) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getActiveStatusRequest($product_name = null, $category = null, $brand = null, $page = null, $limit = null)
    {

        $resourcePath = '/v1/products/active-status';
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
     * Operation getVariationActiveStatus
     *
     * Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $sku search for a product variation by its SKU value (required)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EzzeSiftuz\ProductsV1\Model\ActiveStatus
     */
    public function getVariationActiveStatus($sku)
    {
        list($response) = $this->getVariationActiveStatusWithHttpInfo($sku);
        return $response;
    }

    /**
     * Operation getVariationActiveStatusWithHttpInfo
     *
     * Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $sku search for a product variation by its SKU value (required)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EzzeSiftuz\ProductsV1\Model\ActiveStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVariationActiveStatusWithHttpInfo($sku)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\ActiveStatus';
        $request = $this->getVariationActiveStatusRequest($sku);

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
                        '\EzzeSiftuz\ProductsV1\Model\ActiveStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getVariationActiveStatusAsync
     *
     * Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $sku search for a product variation by its SKU value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariationActiveStatusAsync($sku)
    {
        return $this->getVariationActiveStatusAsyncWithHttpInfo($sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVariationActiveStatusAsyncWithHttpInfo
     *
     * Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  string $sku search for a product variation by its SKU value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariationActiveStatusAsyncWithHttpInfo($sku)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\ActiveStatus';
        $request = $this->getVariationActiveStatusRequest($sku);

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
     * Create request for operation 'getVariationActiveStatus'
     *
     * @param  string $sku search for a product variation by its SKU value (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getVariationActiveStatusRequest($sku)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling getVariationActiveStatus'
            );
        }

        $resourcePath = '/v1/products/{sku}/active-status';
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
     * Operation updateActiveStatus
     *
     * Update the active status of your product variations and get a process-id to query results. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  \EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest $body body (optional)
     * @param  string $x_request_timestamp Holds the optional client side update request timestamp, in ISO DateTime format (optional)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EzzeSiftuz\ProductsV1\Model\ProductProcessProgress
     */
    public function updateActiveStatus($body = null, $x_request_timestamp = null)
    {
        list($response) = $this->updateActiveStatusWithHttpInfo($body, $x_request_timestamp);
        return $response;
    }

    /**
     * Operation updateActiveStatusWithHttpInfo
     *
     * Update the active status of your product variations and get a process-id to query results. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  \EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest $body (optional)
     * @param  string $x_request_timestamp Holds the optional client side update request timestamp, in ISO DateTime format (optional)
     *
     * @throws \EzzeSiftuz\ProductsV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EzzeSiftuz\ProductsV1\Model\ProductProcessProgress, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateActiveStatusWithHttpInfo($body = null, $x_request_timestamp = null)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\ProductProcessProgress';
        $request = $this->updateActiveStatusRequest($body, $x_request_timestamp);

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
                        '\EzzeSiftuz\ProductsV1\Model\ProductProcessProgress',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateActiveStatusAsync
     *
     * Update the active status of your product variations and get a process-id to query results. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  \EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest $body (optional)
     * @param  string $x_request_timestamp Holds the optional client side update request timestamp, in ISO DateTime format (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateActiveStatusAsync($body = null, $x_request_timestamp = null)
    {
        return $this->updateActiveStatusAsyncWithHttpInfo($body, $x_request_timestamp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateActiveStatusAsyncWithHttpInfo
     *
     * Update the active status of your product variations and get a process-id to query results. Replaces corresponding online-status endpoint which now is marked as deprecated.
     *
     * @param  \EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest $body (optional)
     * @param  string $x_request_timestamp Holds the optional client side update request timestamp, in ISO DateTime format (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateActiveStatusAsyncWithHttpInfo($body = null, $x_request_timestamp = null)
    {
        $returnType = '\EzzeSiftuz\ProductsV1\Model\ProductProcessProgress';
        $request = $this->updateActiveStatusRequest($body, $x_request_timestamp);

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
     * Create request for operation 'updateActiveStatus'
     *
     * @param  \EzzeSiftuz\ProductsV1\Model\ActiveStatusListRequest $body (optional)
     * @param  string $x_request_timestamp Holds the optional client side update request timestamp, in ISO DateTime format (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateActiveStatusRequest($body = null, $x_request_timestamp = null)
    {

        $resourcePath = '/v1/products/active-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_request_timestamp !== null) {
            $headerParams['X-Request-Timestamp'] = ObjectSerializer::toHeaderValue($x_request_timestamp);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            'POST',
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
