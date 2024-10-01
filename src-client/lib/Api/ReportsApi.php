<?php
/**
 * ReportsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NoFrixion MoneyMoov API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Nofrixion\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Nofrixion\Client\ApiException;
use Nofrixion\Client\Configuration;
use Nofrixion\Client\HeaderSelector;
use Nofrixion\Client\ObjectSerializer;

/**
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportsApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'apiV1ReportsIdInitiatePut' => [
            'application/json',
        ],
        'apiV1ReportsIdResultStatementNumberGet' => [
            'application/json',
        ],
    ];

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
     * Operation apiV1ReportsIdInitiatePut
     *
     * Initiates the execution of a merchant report.
     *
     * @param  string $id The ID of the merchant report to execute. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdInitiatePut'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1ReportsIdInitiatePut($id, string $contentType = self::contentTypes['apiV1ReportsIdInitiatePut'][0])
    {
        $this->apiV1ReportsIdInitiatePutWithHttpInfo($id, $contentType);
    }

    /**
     * Operation apiV1ReportsIdInitiatePutWithHttpInfo
     *
     * Initiates the execution of a merchant report.
     *
     * @param  string $id The ID of the merchant report to execute. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdInitiatePut'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1ReportsIdInitiatePutWithHttpInfo($id, string $contentType = self::contentTypes['apiV1ReportsIdInitiatePut'][0])
    {
        $request = $this->apiV1ReportsIdInitiatePutRequest($id, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1ReportsIdInitiatePutAsync
     *
     * Initiates the execution of a merchant report.
     *
     * @param  string $id The ID of the merchant report to execute. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdInitiatePut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ReportsIdInitiatePutAsync($id, string $contentType = self::contentTypes['apiV1ReportsIdInitiatePut'][0])
    {
        return $this->apiV1ReportsIdInitiatePutAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1ReportsIdInitiatePutAsyncWithHttpInfo
     *
     * Initiates the execution of a merchant report.
     *
     * @param  string $id The ID of the merchant report to execute. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdInitiatePut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ReportsIdInitiatePutAsyncWithHttpInfo($id, string $contentType = self::contentTypes['apiV1ReportsIdInitiatePut'][0])
    {
        $returnType = '';
        $request = $this->apiV1ReportsIdInitiatePutRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'apiV1ReportsIdInitiatePut'
     *
     * @param  string $id The ID of the merchant report to execute. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdInitiatePut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1ReportsIdInitiatePutRequest($id, string $contentType = self::contentTypes['apiV1ReportsIdInitiatePut'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiV1ReportsIdInitiatePut'
            );
        }


        $resourcePath = '/api/v1/reports/{id}/initiate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1ReportsIdResultStatementNumberGet
     *
     * Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned.
     *
     * @param  string $id The ID of the merchant report to get the result for. (required)
     * @param  int $statement_number Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdResultStatementNumberGet'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult
     */
    public function apiV1ReportsIdResultStatementNumberGet($id, $statement_number, string $contentType = self::contentTypes['apiV1ReportsIdResultStatementNumberGet'][0])
    {
        list($response) = $this->apiV1ReportsIdResultStatementNumberGetWithHttpInfo($id, $statement_number, $contentType);
        return $response;
    }

    /**
     * Operation apiV1ReportsIdResultStatementNumberGetWithHttpInfo
     *
     * Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned.
     *
     * @param  string $id The ID of the merchant report to get the result for. (required)
     * @param  int $statement_number Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdResultStatementNumberGet'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1ReportsIdResultStatementNumberGetWithHttpInfo($id, $statement_number, string $contentType = self::contentTypes['apiV1ReportsIdResultStatementNumberGet'][0])
    {
        $request = $this->apiV1ReportsIdResultStatementNumberGetRequest($id, $statement_number, $contentType);

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
                    if ('\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1ReportsIdResultStatementNumberGetAsync
     *
     * Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned.
     *
     * @param  string $id The ID of the merchant report to get the result for. (required)
     * @param  int $statement_number Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdResultStatementNumberGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ReportsIdResultStatementNumberGetAsync($id, $statement_number, string $contentType = self::contentTypes['apiV1ReportsIdResultStatementNumberGet'][0])
    {
        return $this->apiV1ReportsIdResultStatementNumberGetAsyncWithHttpInfo($id, $statement_number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1ReportsIdResultStatementNumberGetAsyncWithHttpInfo
     *
     * Attempts to get the aggregated results of report execution. If the   report is still in progress an accepted response will be returned.
     *
     * @param  string $id The ID of the merchant report to get the result for. (required)
     * @param  int $statement_number Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdResultStatementNumberGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ReportsIdResultStatementNumberGetAsyncWithHttpInfo($id, $statement_number, string $contentType = self::contentTypes['apiV1ReportsIdResultStatementNumberGet'][0])
    {
        $returnType = '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsReportResult';
        $request = $this->apiV1ReportsIdResultStatementNumberGetRequest($id, $statement_number, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1ReportsIdResultStatementNumberGet'
     *
     * @param  string $id The ID of the merchant report to get the result for. (required)
     * @param  int $statement_number Optional. If set the result for this statement number               will be returned. If not set the latest report will be returned. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ReportsIdResultStatementNumberGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1ReportsIdResultStatementNumberGetRequest($id, $statement_number, string $contentType = self::contentTypes['apiV1ReportsIdResultStatementNumberGet'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiV1ReportsIdResultStatementNumberGet'
            );
        }

        // verify the required parameter 'statement_number' is set
        if ($statement_number === null || (is_array($statement_number) && count($statement_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $statement_number when calling apiV1ReportsIdResultStatementNumberGet'
            );
        }


        $resourcePath = '/api/v1/reports/{id}/result/{statementNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($statement_number !== null) {
            $resourcePath = str_replace(
                '{' . 'statementNumber' . '}',
                ObjectSerializer::toPathValue($statement_number),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
