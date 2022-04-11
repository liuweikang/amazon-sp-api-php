<?php
/**
 * MessagingApi.
 *
 * @author   Sergey / ClouSale
 */

/**
 * Selling Partner API for Messaging Api.
 *
 * With the Messaging API you can build applications that send messages to buyers. You can get a list of message types that are available for an order that you specify, then call an operation that sends a message to the buyer for that order.
 *
 * OpenAPI spec version: v1
 *
 * @link https://github.com/amzn/selling-partner-api-docs/blob/main/references/messaging-api/messaging.md
 *
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\Messaging\CreateNegativeFeedbackRemovalResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Messaging\CreateUnexpectedProblemResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use ClouSale\AmazonSellingPartnerAPI\ExceptionThrower;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * FeesApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
    class MessagingApi
{
    use SellingPartnerApiRequest;

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

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createDestination.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Messaging\CreateUnexpectedProblemRequest $body body (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationResponse
     */
    public function createUnexpectedProblem($order_id, $body)
    {
        list($response) = $this->createUnexpectedProblemWithHttpInfo($order_id, $body);

        return $response;
    }

    /**
     * Operation createDestinationWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Messaging\CreateUnexpectedProblemRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUnexpectedProblemWithHttpInfo($order_id, $body)
    {
        $request = $this->createUnexpectedProblemRequest($order_id, $body);

        return $this->sendRequest($request, CreateUnexpectedProblemResponse::class);
    }

    /**
     * Create request for operation 'createUnexpectedProblemRequest'.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Messaging\CreateUnexpectedProblemRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createUnexpectedProblemRequest($order_id, $body)
    {
        // verify the required parameter 'body' is set
        ExceptionThrower::throwIf(\InvalidArgumentException::class, null === $body || (is_array($body) && 0 === count($body)), 'Missing the required parameter $body when calling createUnexpectedProblem');

        $resourcePath = '/messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        if (isset($order_id)) {
            $resourcePath = str_replace(
                '{'.'amazonOrderId'.'}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }
        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
        
        /**
     * Operation createNegativeFeedbackRemoval.
     *
     * @param string   $amazon_order_id An Amazon order identifier. This specifies the order for which a negative feedback remove is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Messaging\CreateNegativeFeedbackRemovalResponse
     */
    public function createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids)
    {
        list($response) = $this->createNegativeFeedbackRemovalWithHttpInfo($amazon_order_id, $marketplace_ids);

        return $response;
    }

    /**
     * Operation createNegativeFeedbackRemovalWithHttpInfo.
     *
     * @param string   $amazon_order_id An Amazon order identifier. This specifies the order for which a negative feedback remove is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Messaging\CreateNegativeFeedbackRemovalResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNegativeFeedbackRemovalWithHttpInfo($amazon_order_id, $marketplace_ids)
    {
        $request = $this->createNegativeFeedbackRemovalRequest($amazon_order_id, $marketplace_ids);

        return $this->sendRequest($request, CreateNegativeFeedbackRemovalResponse::class);
    }
        
    /**
     * Create request for operation 'createNegativeFeedbackRemovalRequest'.
     *
     * @param string   $amazon_order_id An Amazon order identifier. This specifies the order for which a negative feedback remove is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createNegativeFeedbackRemovalRequest($amazon_order_id, $marketplace_ids)
    {
        // verify the required parameter 'amazon_order_id' is set
        if (null === $amazon_order_id || (is_array($amazon_order_id) && 0 === count($amazon_order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $amazon_order_id when calling createNegativeFeedbackRemoval');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_ids when calling createNegativeFeedbackRemoval');
        }

        $resourcePath = '/messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }

        // path params
        if (null !== $amazon_order_id) {
            $resourcePath = str_replace(
                '{'.'amazonOrderId'.'}',
                ObjectSerializer::toPathValue($amazon_order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}
