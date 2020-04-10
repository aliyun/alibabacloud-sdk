<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\AddSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\AddSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\AddSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\AddSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\DeleteSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\DeleteSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\DeleteSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\DeleteSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\ModifySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\ModifySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\ModifySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\ModifySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\QuerySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\QuerySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\QuerySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\QuerySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\SendBatchSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\SendBatchSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\SendSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\SendSmsResponse;
use AlibabaCloud\Tea\Model;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Dysmsapi
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

        return Model::toModel($this->doRequest('QuerySmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new QuerySmsTemplateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSign(QuerySmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('QuerySmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new QuerySmsSignResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplate(ModifySmsTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('ModifySmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new ModifySmsTemplateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSign(ModifySmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('ModifySmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new ModifySmsSignResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate(DeleteSmsTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('DeleteSmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new DeleteSmsTemplateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSign(DeleteSmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('DeleteSmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new DeleteSmsSignResponse());
    }

    /**
     * @throws \Exception
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplate(AddSmsTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('AddSmsTemplate', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new AddSmsTemplateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSign(AddSmsSignRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('AddSmsSign', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new AddSmsSignResponse());
    }

    /**
     * @throws \Exception
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSms(SendBatchSmsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('SendBatchSms', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new SendBatchSmsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return SendSmsResponse
     */
    public function sendSms(SendSmsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('SendSms', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new SendSmsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetails(QuerySendDetailsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('QuerySendDetails', 'HTTPS', 'GET', '2017-05-25', 'AK', $request, null, $runtime), new QuerySendDetailsResponse());
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
        if (!Utils::emptyWithSuffix($endpoint)) {
            return $endpoint;
        }
        if (!Utils::emptyWithSuffix($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
