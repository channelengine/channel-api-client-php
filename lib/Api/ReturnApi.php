<?php
/**
 * ReturnApi
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine Channel API
 *
 * ChannelEngine API for channels
 *
 * OpenAPI spec version: 2.5.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\Channel\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChannelEngine\Channel\ApiClient\ApiException;
use ChannelEngine\Channel\ApiClient\Configuration;
use ChannelEngine\Channel\ApiClient\HeaderSelector;
use ChannelEngine\Channel\ApiClient\ObjectSerializer;

/**
 * ReturnApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnApi
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
     * Operation returnDeclareForChannel
     *
     * Create Return
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $model  (required)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Channel\ApiClient\Model\ApiResponse
     */
    public function returnDeclareForChannel($model)
    {
        list($response) = $this->returnDeclareForChannelWithHttpInfo($model);
        return $response;
    }

    /**
     * Operation returnDeclareForChannelWithHttpInfo
     *
     * Create Return
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $model  (required)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Channel\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnDeclareForChannelWithHttpInfo($model)
    {
        $returnType = '\ChannelEngine\Channel\ApiClient\Model\ApiResponse';
        $request = $this->returnDeclareForChannelRequest($model);

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
                if ($returnType !== 'string') {
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChannelEngine\Channel\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChannelEngine\Channel\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChannelEngine\Channel\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChannelEngine\Channel\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation returnDeclareForChannelAsync
     *
     * Create Return
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $model  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnDeclareForChannelAsync($model)
    {
        return $this->returnDeclareForChannelAsyncWithHttpInfo($model)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation returnDeclareForChannelAsyncWithHttpInfo
     *
     * Create Return
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $model  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnDeclareForChannelAsyncWithHttpInfo($model)
    {
        $returnType = '\ChannelEngine\Channel\ApiClient\Model\ApiResponse';
        $request = $this->returnDeclareForChannelRequest($model);

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
     * Create request for operation 'returnDeclareForChannel'
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $model  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function returnDeclareForChannelRequest($model)
    {
        // verify the required parameter 'model' is set
        if ($model === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $model when calling returnDeclareForChannel'
            );
        }

        $resourcePath = '/v2/returns/channel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($model)) {
            $_tempBody = $model;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json'],
                ['application/json', 'text/json', 'application/x-www-form-urlencoded']
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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
     * Operation returnGetDeclaredByMerchant
     *
     * Get Returns
     *
     * @param  \DateTime $createdSince  (required)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse
     */
    public function returnGetDeclaredByMerchant($createdSince)
    {
        list($response) = $this->returnGetDeclaredByMerchantWithHttpInfo($createdSince);
        return $response;
    }

    /**
     * Operation returnGetDeclaredByMerchantWithHttpInfo
     *
     * Get Returns
     *
     * @param  \DateTime $createdSince  (required)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnGetDeclaredByMerchantWithHttpInfo($createdSince)
    {
        $returnType = '\ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse';
        $request = $this->returnGetDeclaredByMerchantRequest($createdSince);

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
                if ($returnType !== 'string') {
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
                        '\ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation returnGetDeclaredByMerchantAsync
     *
     * Get Returns
     *
     * @param  \DateTime $createdSince  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnGetDeclaredByMerchantAsync($createdSince)
    {
        return $this->returnGetDeclaredByMerchantAsyncWithHttpInfo($createdSince)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation returnGetDeclaredByMerchantAsyncWithHttpInfo
     *
     * Get Returns
     *
     * @param  \DateTime $createdSince  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnGetDeclaredByMerchantAsyncWithHttpInfo($createdSince)
    {
        $returnType = '\ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse';
        $request = $this->returnGetDeclaredByMerchantRequest($createdSince);

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
     * Create request for operation 'returnGetDeclaredByMerchant'
     *
     * @param  \DateTime $createdSince  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function returnGetDeclaredByMerchantRequest($createdSince)
    {
        // verify the required parameter 'createdSince' is set
        if ($createdSince === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $createdSince when calling returnGetDeclaredByMerchant'
            );
        }

        $resourcePath = '/v2/returns/channel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($createdSince !== null) {
            $queryParams['createdSince'] = ObjectSerializer::toQueryValue($createdSince);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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
