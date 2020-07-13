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
     * @throws \Exception
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportListWithOptions(DescribeDiagnosticReportListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDiagnosticReportListResponse::fromMap($this->doRequest('DescribeDiagnosticReportList', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportList(DescribeDiagnosticReportListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions(CreateDiagnosticReportRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDiagnosticReportResponse::fromMap($this->doRequest('CreateDiagnosticReport', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport(CreateDiagnosticReportRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AccessHDMInstanceResponse
     */
    public function accessHDMInstanceWithOptions(AccessHDMInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AccessHDMInstanceResponse::fromMap($this->doRequest('AccessHDMInstance', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AccessHDMInstanceResponse
     */
    public function accessHDMInstance(AccessHDMInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accessHDMInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SyncHDMAliyunResourceResponse
     */
    public function syncHDMAliyunResourceWithOptions(SyncHDMAliyunResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SyncHDMAliyunResourceResponse::fromMap($this->doRequest('SyncHDMAliyunResource', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SyncHDMAliyunResourceResponse
     */
    public function syncHDMAliyunResource(SyncHDMAliyunResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncHDMAliyunResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResultWithOptions(GetHDMLastAliyunResourceSyncResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetHDMLastAliyunResourceSyncResultResponse::fromMap($this->doRequest('GetHDMLastAliyunResourceSyncResult', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResult(GetHDMLastAliyunResourceSyncResultRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMLastAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTaskWithOptions(GetEndpointSwitchTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetEndpointSwitchTaskResponse::fromMap($this->doRequest('GetEndpointSwitchTask', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTask(GetEndpointSwitchTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndpointSwitchTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResultWithOptions(GetHDMAliyunResourceSyncResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetHDMAliyunResourceSyncResultResponse::fromMap($this->doRequest('GetHDMAliyunResourceSyncResult', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResult(GetHDMAliyunResourceSyncResultRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddHDMInstanceResponse
     */
    public function addHDMInstanceWithOptions(AddHDMInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddHDMInstanceResponse::fromMap($this->doRequest('AddHDMInstance', 'HTTPS', 'POST', '2020-01-16', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddHDMInstanceResponse
     */
    public function addHDMInstance(AddHDMInstanceRequest $request)
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
