<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\PTS\V20190810\Models\AdjustJMeterSpeedRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\AdjustJMeterSpeedResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\AdjustRelationSpeedRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\AdjustRelationSpeedResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\AdjustSceneSpeedRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\AdjustSceneSpeedResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\CloneJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\CloneJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentCpuInfoRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentCpuInfoResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentGCInfoRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentGCInfoResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentLoadInfoRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentLoadInfoResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentMemoryInfoRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentMemoryInfoResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentNetTrafficRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeAgentNetTrafficResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterChainDetailRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterChainDetailResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterLogsRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterLogsResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterPlanRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterPlanResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSampleSummaryRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSampleSummaryResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSamplingLogsRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSamplingLogsResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneRunningStatusRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneRunningStatusResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterTaskListRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterTaskListResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainDetailRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainDetailResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainSummaryRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainSummaryResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSampleMetricRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSampleMetricResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSamplingLogRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSamplingLogResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\ListReceiversRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\ListReceiversResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\ListReportsRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\ListReportsResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\ListScenesRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\ListScenesResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\RemoveInstanceFromGroupRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\RemoveInstanceFromGroupResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\RemoveReportsRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\RemoveReportsResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\RemoveScenesRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\RemoveScenesResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\ReplaceOssFileRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\ReplaceOssFileResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\StartDebuggingRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\StartDebuggingResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\StartJMeterTestingRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\StartJMeterTestingResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\StartTestingRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\StartTestingResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\StopDebuggingRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\StopDebuggingResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\StopJMeterTestingRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\StopJMeterTestingResponse;
use AlibabaCloud\SDK\PTS\V20190810\Models\StopTestingRequest;
use AlibabaCloud\SDK\PTS\V20190810\Models\StopTestingResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class PTS extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSampleSummaryResponse
     */
    public function describeJMeterSampleSummaryWithOptions(DescribeJMeterSampleSummaryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterSampleSummaryResponse::fromMap($this->doRequest('DescribeJMeterSampleSummary', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSampleSummaryResponse
     */
    public function describeJMeterSampleSummary(DescribeJMeterSampleSummaryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterSampleSummaryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CloneJMeterSceneResponse
     */
    public function cloneJMeterSceneWithOptions(CloneJMeterSceneRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CloneJMeterSceneResponse::fromMap($this->doRequest('CloneJMeterScene', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CloneJMeterSceneResponse
     */
    public function cloneJMeterScene(CloneJMeterSceneRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AdjustJMeterSpeedResponse
     */
    public function adjustJMeterSpeedWithOptions(AdjustJMeterSpeedRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AdjustJMeterSpeedResponse::fromMap($this->doRequest('AdjustJMeterSpeed', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AdjustJMeterSpeedResponse
     */
    public function adjustJMeterSpeed(AdjustJMeterSpeedRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustJMeterSpeedWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSamplingLogsResponse
     */
    public function describeJMeterSamplingLogsWithOptions(DescribeJMeterSamplingLogsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterSamplingLogsResponse::fromMap($this->doRequest('DescribeJMeterSamplingLogs', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSamplingLogsResponse
     */
    public function describeJMeterSamplingLogs(DescribeJMeterSamplingLogsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterSamplingLogsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentNetTrafficResponse
     */
    public function describeAgentNetTrafficWithOptions(DescribeAgentNetTrafficRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAgentNetTrafficResponse::fromMap($this->doRequest('DescribeAgentNetTraffic', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentNetTrafficResponse
     */
    public function describeAgentNetTraffic(DescribeAgentNetTrafficRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgentNetTrafficWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentCpuInfoResponse
     */
    public function describeAgentCpuInfoWithOptions(DescribeAgentCpuInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAgentCpuInfoResponse::fromMap($this->doRequest('DescribeAgentCpuInfo', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentCpuInfoResponse
     */
    public function describeAgentCpuInfo(DescribeAgentCpuInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgentCpuInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentGCInfoResponse
     */
    public function describeAgentGCInfoWithOptions(DescribeAgentGCInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAgentGCInfoResponse::fromMap($this->doRequest('DescribeAgentGCInfo', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentGCInfoResponse
     */
    public function describeAgentGCInfo(DescribeAgentGCInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgentGCInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentMemoryInfoResponse
     */
    public function describeAgentMemoryInfoWithOptions(DescribeAgentMemoryInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAgentMemoryInfoResponse::fromMap($this->doRequest('DescribeAgentMemoryInfo', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentMemoryInfoResponse
     */
    public function describeAgentMemoryInfo(DescribeAgentMemoryInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgentMemoryInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentLoadInfoResponse
     */
    public function describeAgentLoadInfoWithOptions(DescribeAgentLoadInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAgentLoadInfoResponse::fromMap($this->doRequest('DescribeAgentLoadInfo', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAgentLoadInfoResponse
     */
    public function describeAgentLoadInfo(DescribeAgentLoadInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgentLoadInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterPlanResponse
     */
    public function describeJMeterPlanWithOptions(DescribeJMeterPlanRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterPlanResponse::fromMap($this->doRequest('DescribeJMeterPlan', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterPlanResponse
     */
    public function describeJMeterPlan(DescribeJMeterPlanRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterPlanWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSceneResponse
     */
    public function describeJMeterSceneWithOptions(DescribeJMeterSceneRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterSceneResponse::fromMap($this->doRequest('DescribeJMeterScene', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSceneResponse
     */
    public function describeJMeterScene(DescribeJMeterSceneRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSceneRunningStatusResponse
     */
    public function describeJMeterSceneRunningStatusWithOptions(DescribeJMeterSceneRunningStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterSceneRunningStatusResponse::fromMap($this->doRequest('DescribeJMeterSceneRunningStatus', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterSceneRunningStatusResponse
     */
    public function describeJMeterSceneRunningStatus(DescribeJMeterSceneRunningStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterSceneRunningStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterTaskListResponse
     */
    public function describeJMeterTaskListWithOptions(DescribeJMeterTaskListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterTaskListResponse::fromMap($this->doRequest('DescribeJMeterTaskList', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterTaskListResponse
     */
    public function describeJMeterTaskList(DescribeJMeterTaskListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterTaskListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterLogsResponse
     */
    public function describeJMeterLogsWithOptions(DescribeJMeterLogsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterLogsResponse::fromMap($this->doRequest('DescribeJMeterLogs', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterLogsResponse
     */
    public function describeJMeterLogs(DescribeJMeterLogsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterLogsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopJMeterTestingResponse
     */
    public function stopJMeterTestingWithOptions(StopJMeterTestingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopJMeterTestingResponse::fromMap($this->doRequest('StopJMeterTesting', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopJMeterTestingResponse
     */
    public function stopJMeterTesting(StopJMeterTestingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopJMeterTestingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSampleMetricResponse
     */
    public function describeSampleMetricWithOptions(DescribeSampleMetricRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSampleMetricResponse::fromMap($this->doRequest('DescribeSampleMetric', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSampleMetricResponse
     */
    public function describeSampleMetric(DescribeSampleMetricRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleMetricWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterChainDetailResponse
     */
    public function describeJMeterChainDetailWithOptions(DescribeJMeterChainDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeJMeterChainDetailResponse::fromMap($this->doRequest('DescribeJMeterChainDetail', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeJMeterChainDetailResponse
     */
    public function describeJMeterChainDetail(DescribeJMeterChainDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJMeterChainDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartJMeterTestingResponse
     */
    public function startJMeterTestingWithOptions(StartJMeterTestingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartJMeterTestingResponse::fromMap($this->doRequest('StartJMeterTesting', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartJMeterTestingResponse
     */
    public function startJMeterTesting(StartJMeterTestingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startJMeterTestingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveInstanceFromGroupResponse
     */
    public function removeInstanceFromGroupWithOptions(RemoveInstanceFromGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveInstanceFromGroupResponse::fromMap($this->doRequest('RemoveInstanceFromGroup', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveInstanceFromGroupResponse
     */
    public function removeInstanceFromGroup(RemoveInstanceFromGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstanceFromGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListReceiversResponse
     */
    public function listReceiversWithOptions(ListReceiversRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListReceiversResponse::fromMap($this->doRequest('ListReceivers', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListReceiversResponse
     */
    public function listReceivers(ListReceiversRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReceiversWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReplaceOssFileResponse
     */
    public function replaceOssFileWithOptions(ReplaceOssFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReplaceOssFileResponse::fromMap($this->doRequest('ReplaceOssFile', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReplaceOssFileResponse
     */
    public function replaceOssFile(ReplaceOssFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceOssFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartDebuggingResponse
     */
    public function startDebuggingWithOptions(StartDebuggingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartDebuggingResponse::fromMap($this->doRequest('StartDebugging', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartDebuggingResponse
     */
    public function startDebugging(StartDebuggingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDebuggingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopDebuggingResponse
     */
    public function stopDebuggingWithOptions(StopDebuggingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopDebuggingResponse::fromMap($this->doRequest('StopDebugging', 'HTTPS', 'POST', '2019-08-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopDebuggingResponse
     */
    public function stopDebugging(StopDebuggingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDebuggingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartTestingResponse
     */
    public function startTestingWithOptions(StartTestingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StartTestingResponse::fromMap($this->doRequest('StartTesting', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartTestingResponse
     */
    public function startTesting(StartTestingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTestingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopTestingResponse
     */
    public function stopTestingWithOptions(StopTestingRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopTestingResponse::fromMap($this->doRequest('StopTesting', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopTestingResponse
     */
    public function stopTesting(StopTestingRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTestingWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListReportsResponse
     */
    public function listReportsWithOptions(ListReportsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListReportsResponse::fromMap($this->doRequest('ListReports', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListReportsResponse
     */
    public function listReports(ListReportsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReportsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReportChainDetailResponse
     */
    public function describeReportChainDetailWithOptions(DescribeReportChainDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeReportChainDetailResponse::fromMap($this->doRequest('DescribeReportChainDetail', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReportChainDetailResponse
     */
    public function describeReportChainDetail(DescribeReportChainDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReportChainDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReportChainSummaryResponse
     */
    public function describeReportChainSummaryWithOptions(DescribeReportChainSummaryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeReportChainSummaryResponse::fromMap($this->doRequest('DescribeReportChainSummary', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReportChainSummaryResponse
     */
    public function describeReportChainSummary(DescribeReportChainSummaryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReportChainSummaryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveScenesResponse
     */
    public function removeScenesWithOptions(RemoveScenesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveScenesResponse::fromMap($this->doRequest('RemoveScenes', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveScenesResponse
     */
    public function removeScenes(RemoveScenesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeScenesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReportResponse
     */
    public function describeReportWithOptions(DescribeReportRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeReportResponse::fromMap($this->doRequest('DescribeReport', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeReportResponse
     */
    public function describeReport(DescribeReportRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReportWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListScenesResponse
     */
    public function listScenesWithOptions(ListScenesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListScenesResponse::fromMap($this->doRequest('ListScenes', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListScenesResponse
     */
    public function listScenes(ListScenesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSceneResponse
     */
    public function describeSceneWithOptions(DescribeSceneRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSceneResponse::fromMap($this->doRequest('DescribeScene', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSceneResponse
     */
    public function describeScene(DescribeSceneRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSceneRunningStatusResponse
     */
    public function describeSceneRunningStatusWithOptions(DescribeSceneRunningStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSceneRunningStatusResponse::fromMap($this->doRequest('DescribeSceneRunningStatus', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSceneRunningStatusResponse
     */
    public function describeSceneRunningStatus(DescribeSceneRunningStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneRunningStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AdjustSceneSpeedResponse
     */
    public function adjustSceneSpeedWithOptions(AdjustSceneSpeedRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AdjustSceneSpeedResponse::fromMap($this->doRequest('AdjustSceneSpeed', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AdjustSceneSpeedResponse
     */
    public function adjustSceneSpeed(AdjustSceneSpeedRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustSceneSpeedWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AdjustRelationSpeedResponse
     */
    public function adjustRelationSpeedWithOptions(AdjustRelationSpeedRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AdjustRelationSpeedResponse::fromMap($this->doRequest('AdjustRelationSpeed', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AdjustRelationSpeedResponse
     */
    public function adjustRelationSpeed(AdjustRelationSpeedRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustRelationSpeedWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSamplingLogResponse
     */
    public function describeSamplingLogWithOptions(DescribeSamplingLogRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSamplingLogResponse::fromMap($this->doRequest('DescribeSamplingLog', 'HTTPS', 'POST', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSamplingLogResponse
     */
    public function describeSamplingLog(DescribeSamplingLogRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSamplingLogWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveReportsResponse
     */
    public function removeReportsWithOptions(RemoveReportsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveReportsResponse::fromMap($this->doRequest('RemoveReports', 'HTTPS', 'GET', '2019-08-10', 'AK,APP,PrivateKey,BearerToken', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveReportsResponse
     */
    public function removeReports(RemoveReportsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeReportsWithOptions($request, $runtime);
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
