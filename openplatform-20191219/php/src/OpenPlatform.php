<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenPlatform\V20191219;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class OpenPlatform extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('openplatform', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return AuthorizeFileUploadResponse
     */
    public function authorizeFileUploadWithOptions(AuthorizeFileUploadRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AuthorizeFileUploadResponse::fromMap($this->doRequest('AuthorizeFileUpload', 'HTTPS', 'GET', '2019-12-19', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AuthorizeFileUploadResponse
     */
    public function authorizeFileUpload(AuthorizeFileUploadRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeFileUploadWithOptions($request, $runtime);
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
