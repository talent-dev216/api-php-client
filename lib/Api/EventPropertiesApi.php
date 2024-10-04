<?php
/**
 * EventPropertiesApi
 * PHP version 5
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@carecloud.cz
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.55
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CrmCareCloud\Webservice\RestApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CrmCareCloud\Webservice\RestApi\Client\ApiException;
use CrmCareCloud\Webservice\RestApi\Client\Configuration;
use CrmCareCloud\Webservice\RestApi\Client\HeaderSelector;
use CrmCareCloud\Webservice\RestApi\Client\ObjectSerializer;

/**
 * EventPropertiesApi Class Doc Comment
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventPropertiesApi
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
     * Operation getEventProperties
     *
     * Get all event properties
     *
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $name Search record by name or a part of the name. (optional)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20083
     */
    public function getEventProperties($accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $name = null)
    {
        list($response) = $this->getEventPropertiesWithHttpInfo($accept_language, $count, $offset, $sort_field, $sort_direction, $name);
        return $response;
    }

    /**
     * Operation getEventPropertiesWithHttpInfo
     *
     * Get all event properties
     *
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $name Search record by name or a part of the name. (optional)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20083, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEventPropertiesWithHttpInfo($accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $name = null)
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20083';
        $request = $this->getEventPropertiesRequest($accept_language, $count, $offset, $sort_field, $sort_direction, $name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
                $content = (string) $responseBody;
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
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20083',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEventPropertiesAsync
     *
     * Get all event properties
     *
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $name Search record by name or a part of the name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventPropertiesAsync($accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $name = null)
    {
        return $this->getEventPropertiesAsyncWithHttpInfo($accept_language, $count, $offset, $sort_field, $sort_direction, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEventPropertiesAsyncWithHttpInfo
     *
     * Get all event properties
     *
     * @param  string|null $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int|null $count The number of records to return. (optional, default to 100)
     * @param  int|null $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string|null $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string|null $sort_direction Direction of sorting the response list. (optional)
     * @param  string|null $name Search record by name or a part of the name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventPropertiesAsyncWithHttpInfo($accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $name = null)
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20083';
        $request = $this->getEventPropertiesRequest($accept_language, $count, $offset, $sort_field, $sort_direction, $name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'getEventProperties'
     *
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $name Search record by name or a part of the name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEventPropertiesRequest($accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $name = null)
    {

        $resourcePath = '/event-properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            $queryParams['count'] = ObjectSerializer::toQueryValue($count, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($sort_field !== null) {
            $queryParams['sort_field'] = ObjectSerializer::toQueryValue($sort_field, null);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = ObjectSerializer::toQueryValue($sort_direction, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
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

        // body params
        $_tempBody = null;

        // for model (json/xml)
        if ($_tempBody !== null) {
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->getConfig()->getBasicAuth() && ($this->getConfig()->getUsername() !== null || $this->getConfig()->getPassword() !== null)) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->getConfig()->getUsername() . ":" . $this->getConfig()->getPassword());
        }
        // this endpoint requires Bearer token
        if ($this->getConfig()->getBearerAuth() && ($this->getConfig()->getAccessToken() !== null)) {
            $headers['Authorization'] = 'Bearer ' . $this->getConfig()->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::customBuildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getEventProperty
     *
     * Get an event property
     *
     * @param  string $event_property_id The unique ID of the event property. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2008
     */
    public function getEventProperty($event_property_id, $accept_language = 'cs, en-gb;q=0.8')
    {
        list($response) = $this->getEventPropertyWithHttpInfo($event_property_id, $accept_language);
        return $response;
    }

    /**
     * Operation getEventPropertyWithHttpInfo
     *
     * Get an event property
     *
     * @param  string $event_property_id The unique ID of the event property. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEventPropertyWithHttpInfo($event_property_id, $accept_language = 'cs, en-gb;q=0.8')
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2008';
        $request = $this->getEventPropertyRequest($event_property_id, $accept_language);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
                $content = (string) $responseBody;
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
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2008',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEventPropertyAsync
     *
     * Get an event property
     *
     * @param  string $event_property_id The unique ID of the event property. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventPropertyAsync($event_property_id, $accept_language = 'cs, en-gb;q=0.8')
    {
        return $this->getEventPropertyAsyncWithHttpInfo($event_property_id, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEventPropertyAsyncWithHttpInfo
     *
     * Get an event property
     *
     * @param  string $event_property_id The unique ID of the event property. (required)
     * @param  string|null $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventPropertyAsyncWithHttpInfo($event_property_id, $accept_language = 'cs, en-gb;q=0.8')
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2008';
        $request = $this->getEventPropertyRequest($event_property_id, $accept_language);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'getEventProperty'
     *
     * @param  string $event_property_id The unique ID of the event property. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEventPropertyRequest($event_property_id, $accept_language = 'cs, en-gb;q=0.8')
    {
        // verify the required parameter 'event_property_id' is set
        if ($event_property_id === null || (is_array($event_property_id) && count($event_property_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $event_property_id when calling getEventProperty'
            );
        }

        $resourcePath = '/event-properties/{event_property_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }

        // path params
        if ($event_property_id !== null) {
            $resourcePath = str_replace(
                '{' . 'event_property_id' . '}',
                ObjectSerializer::toPathValue($event_property_id),
                $resourcePath
            );
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

        // body params
        $_tempBody = null;

        // for model (json/xml)
        if ($_tempBody !== null) {
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->getConfig()->getBasicAuth() && ($this->getConfig()->getUsername() !== null || $this->getConfig()->getPassword() !== null)) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->getConfig()->getUsername() . ":" . $this->getConfig()->getPassword());
        }
        // this endpoint requires Bearer token
        if ($this->getConfig()->getBearerAuth() && ($this->getConfig()->getAccessToken() !== null)) {
            $headers['Authorization'] = 'Bearer ' . $this->getConfig()->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::customBuildQuery($queryParams);
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
