<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageprocess extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageprocess', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNoduleWithOptions(DetectLungNoduleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetectLungNoduleResponse::fromMap($this->doRequest('DetectLungNodule', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNodule(DetectLungNoduleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectLungNoduleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19CadWithOptions(DetectCovid19CadRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetectCovid19CadResponse::fromMap($this->doRequest('DetectCovid19Cad', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19Cad(DetectCovid19CadRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectCovid19CadWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions(GetAsyncJobResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult(GetAsyncJobResultRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResultWithOptions($request, $runtime);
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
