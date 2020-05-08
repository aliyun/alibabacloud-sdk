<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Dysmsapi extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-northeast-1'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-south-1'         => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'cn-beijing'         => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'eu-central-1'       => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'      => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'me-east-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'us-east-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'us-west-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return QuerySmsTemplateResponse
     */
    public function querySmsTemplate(QuerySmsTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QuerySmsTemplateResponse::fromMap($this->doRequest('QuerySmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSign(QuerySmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QuerySmsSignResponse::fromMap($this->doRequest('QuerySmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplate(ModifySmsTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySmsTemplateResponse::fromMap($this->doRequest('ModifySmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSign(ModifySmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySmsSignResponse::fromMap($this->doRequest('ModifySmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate(DeleteSmsTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSmsTemplateResponse::fromMap($this->doRequest('DeleteSmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSign(DeleteSmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSmsSignResponse::fromMap($this->doRequest('DeleteSmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplate(AddSmsTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddSmsTemplateResponse::fromMap($this->doRequest('AddSmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSign(AddSmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddSmsSignResponse::fromMap($this->doRequest('AddSmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSms(SendBatchSmsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SendBatchSmsResponse::fromMap($this->doRequest('SendBatchSms', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SendSmsResponse
     */
    public function sendSms(SendSmsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SendSmsResponse::fromMap($this->doRequest('SendSms', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetails(QuerySendDetailsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QuerySendDetailsResponse::fromMap($this->doRequest('QuerySendDetails', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime));
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
