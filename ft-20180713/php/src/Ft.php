<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Request;
use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Response;
use AlibabaCloud\SDK\Ft\V20180713\Models\FTApiAliasApiRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FTApiAliasApiResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressDubboRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressDubboResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressHsfRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressHsfResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtEagleEyeRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtEagleEyeResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtFlowSpecialRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtFlowSpecialResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtGatedLaunchPolicy4Request;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtGatedLaunchPolicy4Response;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtIpFlowControlRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtIpFlowControlResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtParamListRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtParamListResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestFlowStrategy01Request;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestFlowStrategy01Response;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestHttpApiRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestHttpApiResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ft extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'ft.aliyuncs.com',
            'ap-south-1'                  => 'ft.aliyuncs.com',
            'ap-southeast-1'              => 'ft.aliyuncs.com',
            'ap-southeast-2'              => 'ft.aliyuncs.com',
            'ap-southeast-3'              => 'ft.aliyuncs.com',
            'ap-southeast-5'              => 'ft.aliyuncs.com',
            'cn-beijing'                  => 'ft.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ft.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ft.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ft.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ft.aliyuncs.com',
            'cn-chengdu'                  => 'ft.aliyuncs.com',
            'cn-edge-1'                   => 'ft.aliyuncs.com',
            'cn-fujian'                   => 'ft.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ft.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ft.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ft.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ft.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ft.aliyuncs.com',
            'cn-huhehaote'                => 'ft.aliyuncs.com',
            'cn-qingdao'                  => 'ft.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ft.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ft.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ft.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ft.aliyuncs.com',
            'cn-shanghai-inner'           => 'ft.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ft.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ft.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ft.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ft.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ft.aliyuncs.com',
            'cn-wuhan'                    => 'ft.aliyuncs.com',
            'cn-yushanfang'               => 'ft.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ft.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ft.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ft.aliyuncs.com',
            'eu-central-1'                => 'ft.aliyuncs.com',
            'eu-west-1'                   => 'ft.aliyuncs.com',
            'eu-west-1-oxs'               => 'ft.aliyuncs.com',
            'me-east-1'                   => 'ft.aliyuncs.com',
            'rus-west-1-pop'              => 'ft.aliyuncs.com',
            'us-west-1'                   => 'ft.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ft', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return TestFlowStrategy01Response
     */
    public function testFlowStrategy01WithOptions(TestFlowStrategy01Request $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TestFlowStrategy01Response::fromMap($this->doRequest('TestFlowStrategy01', 'HTTPS', 'PUT', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TestFlowStrategy01Response
     */
    public function testFlowStrategy01(TestFlowStrategy01Request $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testFlowStrategy01WithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TestHttpApiResponse
     */
    public function testHttpApiWithOptions(TestHttpApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TestHttpApiResponse::fromMap($this->doRequest('TestHttpApi', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TestHttpApiResponse
     */
    public function testHttpApi(TestHttpApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testHttpApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BatchAuditTest01Response
     */
    public function batchAuditTest01WithOptions(BatchAuditTest01Request $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BatchAuditTest01Response::fromMap($this->doRequest('BatchAuditTest01', 'HTTPS', 'POST', '2018-07-13', 'Anonymous', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BatchAuditTest01Response
     */
    public function batchAuditTest01(BatchAuditTest01Request $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAuditTest01WithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FtIpFlowControlResponse
     */
    public function ftIpFlowControlWithOptions(FtIpFlowControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FtIpFlowControlResponse::fromMap($this->doRequest('FtIpFlowControl', 'HTTPS', 'POST', '2018-07-13', 'Anonymous', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FtIpFlowControlResponse
     */
    public function ftIpFlowControl(FtIpFlowControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftIpFlowControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FtDynamicAddressDubboResponse
     */
    public function ftDynamicAddressDubboWithOptions(FtDynamicAddressDubboRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FtDynamicAddressDubboResponse::fromMap($this->doRequest('FtDynamicAddressDubbo', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FtDynamicAddressDubboResponse
     */
    public function ftDynamicAddressDubbo(FtDynamicAddressDubboRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftDynamicAddressDubboWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FtDynamicAddressHsfResponse
     */
    public function ftDynamicAddressHsfWithOptions(FtDynamicAddressHsfRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FtDynamicAddressHsfResponse::fromMap($this->doRequest('FtDynamicAddressHsf', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FtDynamicAddressHsfResponse
     */
    public function ftDynamicAddressHsf(FtDynamicAddressHsfRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftDynamicAddressHsfWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FtFlowSpecialResponse
     */
    public function ftFlowSpecialWithOptions(FtFlowSpecialRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FtFlowSpecialResponse::fromMap($this->doRequest('FtFlowSpecial', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FtFlowSpecialResponse
     */
    public function ftFlowSpecial(FtFlowSpecialRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftFlowSpecialWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FTApiAliasApiResponse
     */
    public function FTApiAliasApiWithOptions(FTApiAliasApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FTApiAliasApiResponse::fromMap($this->doRequest('FTApiAliasApi', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FTApiAliasApiResponse
     */
    public function FTApiAliasApi(FTApiAliasApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->FTApiAliasApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FtEagleEyeResponse
     */
    public function ftEagleEyeWithOptions(FtEagleEyeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FtEagleEyeResponse::fromMap($this->doRequest('FtEagleEye', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FtEagleEyeResponse
     */
    public function ftEagleEye(FtEagleEyeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftEagleEyeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FtParamListResponse
     */
    public function ftParamListWithOptions(FtParamListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FtParamListResponse::fromMap($this->doRequest('FtParamList', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FtParamListResponse
     */
    public function ftParamList(FtParamListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftParamListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FtGatedLaunchPolicy4Response
     */
    public function ftGatedLaunchPolicy4WithOptions(FtGatedLaunchPolicy4Request $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return FtGatedLaunchPolicy4Response::fromMap($this->doRequest('FtGatedLaunchPolicy4', 'HTTPS', 'POST', '2018-07-13', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return FtGatedLaunchPolicy4Response
     */
    public function ftGatedLaunchPolicy4(FtGatedLaunchPolicy4Request $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftGatedLaunchPolicy4WithOptions($request, $runtime);
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
