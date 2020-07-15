<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\DAS\V20200116\Models\AccessHDMInstanceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\AccessHDMInstanceResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateDiagnosticReportRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateDiagnosticReportResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeDiagnosticReportListRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeDiagnosticReportListResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEndpointSwitchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEndpointSwitchTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\SyncHDMAliyunResourceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\SyncHDMAliyunResourceResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class DAS extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('das', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeDiagnosticReportListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDiagnosticReportListResponse::fromMap($this->doRequest('DescribeDiagnosticReportList', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeDiagnosticReportListRequest $request
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportListWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiagnosticReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDiagnosticReportResponse::fromMap($this->doRequest('CreateDiagnosticReport', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateDiagnosticReportRequest $request
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * @param AccessHDMInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AccessHDMInstanceResponse
     */
    public function accessHDMInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AccessHDMInstanceResponse::fromMap($this->doRequest('AccessHDMInstance', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param AccessHDMInstanceRequest $request
     *
     * @return AccessHDMInstanceResponse
     */
    public function accessHDMInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accessHDMInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SyncHDMAliyunResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SyncHDMAliyunResourceResponse
     */
    public function syncHDMAliyunResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SyncHDMAliyunResourceResponse::fromMap($this->doRequest('SyncHDMAliyunResource', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param SyncHDMAliyunResourceRequest $request
     *
     * @return SyncHDMAliyunResourceResponse
     */
    public function syncHDMAliyunResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncHDMAliyunResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetHDMLastAliyunResourceSyncResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetHDMLastAliyunResourceSyncResultResponse::fromMap($this->doRequest('GetHDMLastAliyunResourceSyncResult', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetHDMLastAliyunResourceSyncResultRequest $request
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMLastAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * @param GetEndpointSwitchTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEndpointSwitchTaskResponse::fromMap($this->doRequest('GetEndpointSwitchTask', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetEndpointSwitchTaskRequest $request
     *
     * @return GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndpointSwitchTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetHDMAliyunResourceSyncResultRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetHDMAliyunResourceSyncResultResponse::fromMap($this->doRequest('GetHDMAliyunResourceSyncResult', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetHDMAliyunResourceSyncResultRequest $request
     *
     * @return GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * @param AddHDMInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddHDMInstanceResponse
     */
    public function addHDMInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddHDMInstanceResponse::fromMap($this->doRequest('AddHDMInstance', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddHDMInstanceRequest $request
     *
     * @return AddHDMInstanceResponse
     */
    public function addHDMInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHDMInstanceWithOptions($request, $runtime);
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
