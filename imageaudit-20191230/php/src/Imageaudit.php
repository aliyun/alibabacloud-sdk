<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponse;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageaudit extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return ScanTextResponse
     */
    public function scanTextEx(ScanTextRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ScanTextResponse::fromMap($this->doRequest('ScanText', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ScanTextResponse
     */
    public function scanText(ScanTextRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanTextEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ScanImageResponse
     */
    public function scanImageEx(ScanImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ScanImageResponse::fromMap($this->doRequest('ScanImage', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ScanImageResponse
     */
    public function scanImage(ScanImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanImageEx($request, $runtime);
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
