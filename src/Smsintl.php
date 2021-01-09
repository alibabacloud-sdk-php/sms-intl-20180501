<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smsintl\V20180501;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\BatchSendMessageToGlobeRequest;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\BatchSendMessageToGlobeResponse;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\QueryMessageRequest;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\QueryMessageResponse;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\SendMessageToGlobeRequest;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\SendMessageToGlobeResponse;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\SendMessageWithTemplateRequest;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\SendMessageWithTemplateResponse;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\SmsConversionRequest;
use AlibabaCloud\SDK\Smsintl\V20180501\Models\SmsConversionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Smsintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sms-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param BatchSendMessageToGlobeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSendMessageToGlobeResponse
     */
    public function batchSendMessageToGlobeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSendMessageToGlobeResponse::fromMap($this->doRPCRequest('BatchSendMessageToGlobe', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchSendMessageToGlobeRequest $request
     *
     * @return BatchSendMessageToGlobeResponse
     */
    public function batchSendMessageToGlobe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSendMessageToGlobeWithOptions($request, $runtime);
    }

    /**
     * @param QueryMessageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMessageResponse
     */
    public function queryMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMessageResponse::fromMap($this->doRPCRequest('QueryMessage', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMessageRequest $request
     *
     * @return QueryMessageResponse
     */
    public function queryMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageToGlobeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SendMessageToGlobeResponse
     */
    public function sendMessageToGlobeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendMessageToGlobeResponse::fromMap($this->doRPCRequest('SendMessageToGlobe', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendMessageToGlobeRequest $request
     *
     * @return SendMessageToGlobeResponse
     */
    public function sendMessageToGlobe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageToGlobeWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageWithTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SendMessageWithTemplateResponse
     */
    public function sendMessageWithTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendMessageWithTemplateResponse::fromMap($this->doRPCRequest('SendMessageWithTemplate', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendMessageWithTemplateRequest $request
     *
     * @return SendMessageWithTemplateResponse
     */
    public function sendMessageWithTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SmsConversionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SmsConversionResponse
     */
    public function smsConversionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SmsConversionResponse::fromMap($this->doRPCRequest('SmsConversion', '2018-05-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SmsConversionRequest $request
     *
     * @return SmsConversionResponse
     */
    public function smsConversion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smsConversionWithOptions($request, $runtime);
    }
}
