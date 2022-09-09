<?php
/**
 * ReturnApi
 * PHP version 7.3
 *
 * @category Class
 * @package  ChannelEngine\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Channel API
 *
 * ChannelEngine API for channels
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Channel\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
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
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
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
     * Create Return.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $channelReturnRequest channelReturnRequest (optional)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Channel\ApiClient\Model\ApiResponse|\ChannelEngine\Channel\ApiClient\Model\ApiResponse|\ChannelEngine\Channel\ApiClient\Model\ApiResponse|\ChannelEngine\Channel\ApiClient\Model\ApiResponse
     */
    public function returnDeclareForChannel($channelReturnRequest = null)
    {
        list($response) = $this->returnDeclareForChannelWithHttpInfo($channelReturnRequest);
        return $response;
    }

    /**
     * Operation returnDeclareForChannelWithHttpInfo
     *
     * Create Return.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $channelReturnRequest (optional)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Channel\ApiClient\Model\ApiResponse|\ChannelEngine\Channel\ApiClient\Model\ApiResponse|\ChannelEngine\Channel\ApiClient\Model\ApiResponse|\ChannelEngine\Channel\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnDeclareForChannelWithHttpInfo($channelReturnRequest = null)
    {
        $request = $this->returnDeclareForChannelRequest($channelReturnRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\ChannelEngine\Channel\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Channel\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\ChannelEngine\Channel\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Channel\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\ChannelEngine\Channel\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Channel\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\ChannelEngine\Channel\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Channel\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChannelEngine\Channel\ApiClient\Model\ApiResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
     * Create Return.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $channelReturnRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnDeclareForChannelAsync($channelReturnRequest = null)
    {
        return $this->returnDeclareForChannelAsyncWithHttpInfo($channelReturnRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation returnDeclareForChannelAsyncWithHttpInfo
     *
     * Create Return.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $channelReturnRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnDeclareForChannelAsyncWithHttpInfo($channelReturnRequest = null)
    {
        $returnType = '\ChannelEngine\Channel\ApiClient\Model\ApiResponse';
        $request = $this->returnDeclareForChannelRequest($channelReturnRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'returnDeclareForChannel'
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ChannelReturnRequest $channelReturnRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function returnDeclareForChannelRequest($channelReturnRequest = null)
    {

        $resourcePath = '/v2/returns/channel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json-patch+json', 'application/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($channelReturnRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($channelReturnRequest));
            } else {
                $httpBody = $channelReturnRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
     * Get Returns.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnStatus[] $statuses Return status(es) to filter on. (optional)
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnReason[] $reasons Return reason(s) to filter on. (optional)
     * @param  \DateTime $fromDate Filter on the creation date, starting from this date. This date is inclusive. (optional)
     * @param  \DateTime $toDate Filter on the creation date, until this date. This date is exclusive. (optional)
     * @param  bool $isAcknowledged Filters based on acknowledgements (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse
     */
    public function returnGetDeclaredByMerchant($statuses = null, $reasons = null, $fromDate = null, $toDate = null, $isAcknowledged = null, $page = null)
    {
        list($response) = $this->returnGetDeclaredByMerchantWithHttpInfo($statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page);
        return $response;
    }

    /**
     * Operation returnGetDeclaredByMerchantWithHttpInfo
     *
     * Get Returns.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnStatus[] $statuses Return status(es) to filter on. (optional)
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnReason[] $reasons Return reason(s) to filter on. (optional)
     * @param  \DateTime $fromDate Filter on the creation date, starting from this date. This date is inclusive. (optional)
     * @param  \DateTime $toDate Filter on the creation date, until this date. This date is exclusive. (optional)
     * @param  bool $isAcknowledged Filters based on acknowledgements (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \ChannelEngine\Channel\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function returnGetDeclaredByMerchantWithHttpInfo($statuses = null, $reasons = null, $fromDate = null, $toDate = null, $isAcknowledged = null, $page = null)
    {
        $request = $this->returnGetDeclaredByMerchantRequest($statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
     * Get Returns.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnStatus[] $statuses Return status(es) to filter on. (optional)
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnReason[] $reasons Return reason(s) to filter on. (optional)
     * @param  \DateTime $fromDate Filter on the creation date, starting from this date. This date is inclusive. (optional)
     * @param  \DateTime $toDate Filter on the creation date, until this date. This date is exclusive. (optional)
     * @param  bool $isAcknowledged Filters based on acknowledgements (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnGetDeclaredByMerchantAsync($statuses = null, $reasons = null, $fromDate = null, $toDate = null, $isAcknowledged = null, $page = null)
    {
        return $this->returnGetDeclaredByMerchantAsyncWithHttpInfo($statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation returnGetDeclaredByMerchantAsyncWithHttpInfo
     *
     * Get Returns.
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnStatus[] $statuses Return status(es) to filter on. (optional)
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnReason[] $reasons Return reason(s) to filter on. (optional)
     * @param  \DateTime $fromDate Filter on the creation date, starting from this date. This date is inclusive. (optional)
     * @param  \DateTime $toDate Filter on the creation date, until this date. This date is exclusive. (optional)
     * @param  bool $isAcknowledged Filters based on acknowledgements (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function returnGetDeclaredByMerchantAsyncWithHttpInfo($statuses = null, $reasons = null, $fromDate = null, $toDate = null, $isAcknowledged = null, $page = null)
    {
        $returnType = '\ChannelEngine\Channel\ApiClient\Model\CollectionOfChannelReturnResponse';
        $request = $this->returnGetDeclaredByMerchantRequest($statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'returnGetDeclaredByMerchant'
     *
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnStatus[] $statuses Return status(es) to filter on. (optional)
     * @param  \ChannelEngine\Channel\ApiClient\Model\ReturnReason[] $reasons Return reason(s) to filter on. (optional)
     * @param  \DateTime $fromDate Filter on the creation date, starting from this date. This date is inclusive. (optional)
     * @param  \DateTime $toDate Filter on the creation date, until this date. This date is exclusive. (optional)
     * @param  bool $isAcknowledged Filters based on acknowledgements (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function returnGetDeclaredByMerchantRequest($statuses = null, $reasons = null, $fromDate = null, $toDate = null, $isAcknowledged = null, $page = null)
    {

        $resourcePath = '/v2/returns/channel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($statuses !== null) {
            if('form' === 'form' && is_array($statuses)) {
                foreach($statuses as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['statuses'] = $statuses;
            }
        }
        // query params
        if ($reasons !== null) {
            if('form' === 'form' && is_array($reasons)) {
                foreach($reasons as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['reasons'] = $reasons;
            }
        }
        // query params
        if ($fromDate !== null) {
            if('form' === 'form' && is_array($fromDate)) {
                foreach($fromDate as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['fromDate'] = $fromDate;
            }
        }
        // query params
        if ($toDate !== null) {
            if('form' === 'form' && is_array($toDate)) {
                foreach($toDate as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['toDate'] = $toDate;
            }
        }
        // query params
        if ($isAcknowledged !== null) {
            if('form' === 'form' && is_array($isAcknowledged)) {
                foreach($isAcknowledged as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['isAcknowledged'] = $isAcknowledged;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }




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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
