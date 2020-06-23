<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckDataConsistencyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckDataConsistencyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceLinkedRoleForDeletingRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceLinkedRoleForDeletingResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLocationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLocationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetConsistencySnapshotRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetConsistencySnapshotResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusApiTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusApiTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportCustomAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportCustomAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPromClustersRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPromClustersResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTraceAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTraceAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryDatasetRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryDatasetResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SetRetcodeShareStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SetRetcodeShareStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartAlertRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartAlertResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class ARMS extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'arms.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'arms.aliyuncs.com',
            'cn-huhehaote'          => 'arms.aliyuncs.com',
            'eu-central-1'          => 'arms.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'arms.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'arms.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'arms.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'arms.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'arms.aliyuncs.com',
            'cn-shanghai-finance-1' => 'arms.aliyuncs.com',
            'cn-north-2-gov-1'      => 'arms.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('arms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return GetMultipleTraceResponse
     */
    public function getMultipleTraceWithOptions(GetMultipleTraceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMultipleTraceResponse::fromMap($this->doRequest('GetMultipleTrace', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMultipleTraceResponse
     */
    public function getMultipleTrace(GetMultipleTraceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultipleTraceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPageWithOptions(SearchTracesByPageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchTracesByPageResponse::fromMap($this->doRequest('SearchTracesByPage', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPage(SearchTracesByPageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesByPageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions(GetStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackResponse::fromMap($this->doRequest('GetStack', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackResponse
     */
    public function getStack(GetStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTraceLocationResponse
     */
    public function describeTraceLocationWithOptions(DescribeTraceLocationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTraceLocationResponse::fromMap($this->doRequest('DescribeTraceLocation', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTraceLocationResponse
     */
    public function describeTraceLocation(DescribeTraceLocationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceLocationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTraceAppResponse
     */
    public function deleteTraceAppWithOptions(DeleteTraceAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteTraceAppResponse::fromMap($this->doRequest('DeleteTraceApp', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTraceAppResponse
     */
    public function deleteTraceApp(DeleteTraceAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTraceAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKeyWithOptions(DescribeTraceLicenseKeyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTraceLicenseKeyResponse::fromMap($this->doRequest('DescribeTraceLicenseKey', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKey(DescribeTraceLicenseKeyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceLicenseKeyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeletingWithOptions(CheckServiceLinkedRoleForDeletingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckServiceLinkedRoleForDeletingResponse::fromMap($this->doRequest('CheckServiceLinkedRoleForDeleting', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeleting(CheckServiceLinkedRoleForDeletingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleForDeletingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListDashboardsResponse
     */
    public function listDashboardsWithOptions(ListDashboardsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListDashboardsResponse::fromMap($this->doRequest('ListDashboards', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListDashboardsResponse
     */
    public function listDashboards(ListDashboardsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDashboardsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetConsistencySnapshotResponse
     */
    public function getConsistencySnapshotWithOptions(GetConsistencySnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetConsistencySnapshotResponse::fromMap($this->doRequest('GetConsistencySnapshot', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetConsistencySnapshotResponse
     */
    public function getConsistencySnapshot(GetConsistencySnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsistencySnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckDataConsistencyResponse
     */
    public function checkDataConsistencyWithOptions(CheckDataConsistencyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckDataConsistencyResponse::fromMap($this->doRequest('CheckDataConsistency', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckDataConsistencyResponse
     */
    public function checkDataConsistency(CheckDataConsistencyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDataConsistencyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddGrafanaResponse
     */
    public function addGrafanaWithOptions(AddGrafanaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddGrafanaResponse::fromMap($this->doRequest('AddGrafana', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddGrafanaResponse
     */
    public function addGrafana(AddGrafanaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGrafanaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddIntegrationResponse
     */
    public function addIntegrationWithOptions(AddIntegrationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddIntegrationResponse::fromMap($this->doRequest('AddIntegration', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddIntegrationResponse
     */
    public function addIntegration(AddIntegrationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIntegrationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTraceResponse
     */
    public function getTraceWithOptions(GetTraceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTraceResponse::fromMap($this->doRequest('GetTrace', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTraceResponse
     */
    public function getTrace(GetTraceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafanaWithOptions(ListClusterFromGrafanaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListClusterFromGrafanaResponse::fromMap($this->doRequest('ListClusterFromGrafana', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafana(ListClusterFromGrafanaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterFromGrafanaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchTracesResponse
     */
    public function searchTracesWithOptions(SearchTracesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchTracesResponse::fromMap($this->doRequest('SearchTraces', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchTracesResponse
     */
    public function searchTraces(SearchTracesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiTokenWithOptions(GetPrometheusApiTokenRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPrometheusApiTokenResponse::fromMap($this->doRequest('GetPrometheusApiToken', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiToken(GetPrometheusApiTokenRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusApiTokenWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatusWithOptions(SetRetcodeShareStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetRetcodeShareStatusResponse::fromMap($this->doRequest('SetRetcodeShareStatus', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatus(SetRetcodeShareStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRetcodeShareStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrlWithOptions(GetRetcodeShareUrlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRetcodeShareUrlResponse::fromMap($this->doRequest('GetRetcodeShareUrl', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrl(GetRetcodeShareUrlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeShareUrlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListPromClustersResponse
     */
    public function listPromClustersWithOptions(ListPromClustersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListPromClustersResponse::fromMap($this->doRequest('ListPromClusters', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListPromClustersResponse
     */
    public function listPromClusters(ListPromClustersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPromClustersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRuleWithOptions(UpdateAlertRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAlertRuleResponse::fromMap($this->doRequest('UpdateAlertRule', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRule(UpdateAlertRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartAlertResponse
     */
    public function startAlertWithOptions(StartAlertRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartAlertResponse::fromMap($this->doRequest('StartAlert', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartAlertResponse
     */
    public function startAlert(StartAlertRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAlertWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopAlertResponse
     */
    public function stopAlertWithOptions(StopAlertRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopAlertResponse::fromMap($this->doRequest('StopAlert', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopAlertResponse
     */
    public function stopAlert(StopAlertRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAlertWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchEventsResponse
     */
    public function searchEventsWithOptions(SearchEventsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchEventsResponse::fromMap($this->doRequest('SearchEvents', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchEventsResponse
     */
    public function searchEvents(SearchEventsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEventsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertHistoriesResponse
     */
    public function searchAlertHistoriesWithOptions(SearchAlertHistoriesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchAlertHistoriesResponse::fromMap($this->doRequest('SearchAlertHistories', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertHistoriesResponse
     */
    public function searchAlertHistories(SearchAlertHistoriesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertHistoriesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAlertContactResponse
     */
    public function updateAlertContactWithOptions(UpdateAlertContactRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAlertContactResponse::fromMap($this->doRequest('UpdateAlertContact', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAlertContactResponse
     */
    public function updateAlertContact(UpdateAlertContactRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroupWithOptions(DeleteAlertContactGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAlertContactGroupResponse::fromMap($this->doRequest('DeleteAlertContactGroup', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroup(DeleteAlertContactGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContactWithOptions(DeleteAlertContactRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAlertContactResponse::fromMap($this->doRequest('DeleteAlertContact', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContact(DeleteAlertContactRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroupWithOptions(UpdateAlertContactGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAlertContactGroupResponse::fromMap($this->doRequest('UpdateAlertContactGroup', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroup(UpdateAlertContactGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportCustomAlertRulesResponse
     */
    public function importCustomAlertRulesWithOptions(ImportCustomAlertRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportCustomAlertRulesResponse::fromMap($this->doRequest('ImportCustomAlertRules', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportCustomAlertRulesResponse
     */
    public function importCustomAlertRules(ImportCustomAlertRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCustomAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertRulesResponse
     */
    public function searchAlertRulesWithOptions(SearchAlertRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchAlertRulesResponse::fromMap($this->doRequest('SearchAlertRules', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertRulesResponse
     */
    public function searchAlertRules(SearchAlertRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAlertRulesResponse
     */
    public function deleteAlertRulesWithOptions(DeleteAlertRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAlertRulesResponse::fromMap($this->doRequest('DeleteAlertRules', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAlertRulesResponse
     */
    public function deleteAlertRules(DeleteAlertRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeAppWithOptions(CreateRetcodeAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateRetcodeAppResponse::fromMap($this->doRequest('CreateRetcodeApp', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeApp(CreateRetcodeAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeAppWithOptions(DeleteRetcodeAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteRetcodeAppResponse::fromMap($this->doRequest('DeleteRetcodeApp', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeApp(DeleteRetcodeAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryDatasetResponse
     */
    public function queryDatasetWithOptions(QueryDatasetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryDatasetResponse::fromMap($this->doRequest('QueryDataset', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryDatasetResponse
     */
    public function queryDataset(QueryDatasetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryMetricResponse
     */
    public function queryMetricWithOptions(QueryMetricRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryMetricResponse::fromMap($this->doRequest('QueryMetric', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryMetricResponse
     */
    public function queryMetric(QueryMetricRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContactWithOptions(CreateAlertContactRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAlertContactResponse::fromMap($this->doRequest('CreateAlertContact', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContact(CreateAlertContactRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroupWithOptions(CreateAlertContactGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAlertContactGroupResponse::fromMap($this->doRequest('CreateAlertContactGroup', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroup(CreateAlertContactGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertContactResponse
     */
    public function searchAlertContactWithOptions(SearchAlertContactRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchAlertContactResponse::fromMap($this->doRequest('SearchAlertContact', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertContactResponse
     */
    public function searchAlertContact(SearchAlertContactRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroupWithOptions(SearchAlertContactGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchAlertContactGroupResponse::fromMap($this->doRequest('SearchAlertContactGroup', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroup(SearchAlertContactGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportAppAlertRulesResponse
     */
    public function importAppAlertRulesWithOptions(ImportAppAlertRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportAppAlertRulesResponse::fromMap($this->doRequest('ImportAppAlertRules', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportAppAlertRulesResponse
     */
    public function importAppAlertRules(ImportAppAlertRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAppAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPageWithOptions(SearchRetcodeAppByPageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchRetcodeAppByPageResponse::fromMap($this->doRequest('SearchRetcodeAppByPage', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPage(SearchRetcodeAppByPageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchRetcodeAppByPageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchTraceAppByNameResponse
     */
    public function searchTraceAppByNameWithOptions(SearchTraceAppByNameRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchTraceAppByNameResponse::fromMap($this->doRequest('SearchTraceAppByName', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchTraceAppByNameResponse
     */
    public function searchTraceAppByName(SearchTraceAppByNameRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByNameWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPageWithOptions(SearchTraceAppByPageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchTraceAppByPageResponse::fromMap($this->doRequest('SearchTraceAppByPage', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPage(SearchTraceAppByPageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByPageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeAppsWithOptions(ListRetcodeAppsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListRetcodeAppsResponse::fromMap($this->doRequest('ListRetcodeApps', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeApps(ListRetcodeAppsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRetcodeAppsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceAppsWithOptions(ListTraceAppsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTraceAppsResponse::fromMap($this->doRequest('ListTraceApps', 'HTTPS', 'POST', '2019-08-08', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceApps(ListTraceAppsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTraceAppsWithOptions($request, $runtime);
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
