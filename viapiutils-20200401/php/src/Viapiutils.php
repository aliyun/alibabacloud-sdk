<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiutils\V20200401;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Viapiutils\V20200401\Models\GetOssStsTokenRequest;
use AlibabaCloud\SDK\Viapiutils\V20200401\Models\GetOssStsTokenResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Viapiutils extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('viapiutils', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return GetOssStsTokenResponse
     */
    public function getOssStsTokenWithOptions(GetOssStsTokenRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetOssStsTokenResponse::fromMap($this->doRequest('GetOssStsToken', 'HTTPS', 'POST', '2020-04-01', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetOssStsTokenResponse
     */
    public function getOssStsToken(GetOssStsTokenRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssStsTokenWithOptions($request, $runtime);
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
