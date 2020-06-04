// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810;

import com.aliyun.tea.*;
import com.aliyun.pts20190810.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "central";
        this.checkConfig(config);
        this._endpoint = this.getEndpoint("pts", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public DescribeJMeterSampleSummaryResponse describeJMeterSampleSummaryWithOptions(DescribeJMeterSampleSummaryRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterSampleSummary", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new DescribeJMeterSampleSummaryResponse());
    }

    public DescribeJMeterSampleSummaryResponse describeJMeterSampleSummary(DescribeJMeterSampleSummaryRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterSampleSummaryWithOptions(request, runtime);
    }

    public CloneJMeterSceneResponse cloneJMeterSceneWithOptions(CloneJMeterSceneRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CloneJMeterScene", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new CloneJMeterSceneResponse());
    }

    public CloneJMeterSceneResponse cloneJMeterScene(CloneJMeterSceneRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.cloneJMeterSceneWithOptions(request, runtime);
    }

    public AdjustJMeterSpeedResponse adjustJMeterSpeedWithOptions(AdjustJMeterSpeedRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AdjustJMeterSpeed", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new AdjustJMeterSpeedResponse());
    }

    public AdjustJMeterSpeedResponse adjustJMeterSpeed(AdjustJMeterSpeedRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.adjustJMeterSpeedWithOptions(request, runtime);
    }

    public DescribeJMeterSamplingLogsResponse describeJMeterSamplingLogsWithOptions(DescribeJMeterSamplingLogsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterSamplingLogs", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new DescribeJMeterSamplingLogsResponse());
    }

    public DescribeJMeterSamplingLogsResponse describeJMeterSamplingLogs(DescribeJMeterSamplingLogsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterSamplingLogsWithOptions(request, runtime);
    }

    public DescribeAgentNetTrafficResponse describeAgentNetTrafficWithOptions(DescribeAgentNetTrafficRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeAgentNetTraffic", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeAgentNetTrafficResponse());
    }

    public DescribeAgentNetTrafficResponse describeAgentNetTraffic(DescribeAgentNetTrafficRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeAgentNetTrafficWithOptions(request, runtime);
    }

    public DescribeAgentCpuInfoResponse describeAgentCpuInfoWithOptions(DescribeAgentCpuInfoRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeAgentCpuInfo", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey", null, TeaModel.buildMap(request), runtime), new DescribeAgentCpuInfoResponse());
    }

    public DescribeAgentCpuInfoResponse describeAgentCpuInfo(DescribeAgentCpuInfoRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeAgentCpuInfoWithOptions(request, runtime);
    }

    public DescribeAgentGCInfoResponse describeAgentGCInfoWithOptions(DescribeAgentGCInfoRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeAgentGCInfo", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeAgentGCInfoResponse());
    }

    public DescribeAgentGCInfoResponse describeAgentGCInfo(DescribeAgentGCInfoRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeAgentGCInfoWithOptions(request, runtime);
    }

    public DescribeAgentMemoryInfoResponse describeAgentMemoryInfoWithOptions(DescribeAgentMemoryInfoRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeAgentMemoryInfo", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new DescribeAgentMemoryInfoResponse());
    }

    public DescribeAgentMemoryInfoResponse describeAgentMemoryInfo(DescribeAgentMemoryInfoRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeAgentMemoryInfoWithOptions(request, runtime);
    }

    public DescribeAgentLoadInfoResponse describeAgentLoadInfoWithOptions(DescribeAgentLoadInfoRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeAgentLoadInfo", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new DescribeAgentLoadInfoResponse());
    }

    public DescribeAgentLoadInfoResponse describeAgentLoadInfo(DescribeAgentLoadInfoRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeAgentLoadInfoWithOptions(request, runtime);
    }

    public DescribeJMeterPlanResponse describeJMeterPlanWithOptions(DescribeJMeterPlanRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterPlan", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeJMeterPlanResponse());
    }

    public DescribeJMeterPlanResponse describeJMeterPlan(DescribeJMeterPlanRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterPlanWithOptions(request, runtime);
    }

    public DescribeJMeterSceneResponse describeJMeterSceneWithOptions(DescribeJMeterSceneRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterScene", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeJMeterSceneResponse());
    }

    public DescribeJMeterSceneResponse describeJMeterScene(DescribeJMeterSceneRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterSceneWithOptions(request, runtime);
    }

    public DescribeJMeterSceneRunningStatusResponse describeJMeterSceneRunningStatusWithOptions(DescribeJMeterSceneRunningStatusRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterSceneRunningStatus", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeJMeterSceneRunningStatusResponse());
    }

    public DescribeJMeterSceneRunningStatusResponse describeJMeterSceneRunningStatus(DescribeJMeterSceneRunningStatusRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterSceneRunningStatusWithOptions(request, runtime);
    }

    public DescribeJMeterTaskListResponse describeJMeterTaskListWithOptions(DescribeJMeterTaskListRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterTaskList", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeJMeterTaskListResponse());
    }

    public DescribeJMeterTaskListResponse describeJMeterTaskList(DescribeJMeterTaskListRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterTaskListWithOptions(request, runtime);
    }

    public DescribeJMeterLogsResponse describeJMeterLogsWithOptions(DescribeJMeterLogsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterLogs", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeJMeterLogsResponse());
    }

    public DescribeJMeterLogsResponse describeJMeterLogs(DescribeJMeterLogsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterLogsWithOptions(request, runtime);
    }

    public StopJMeterTestingResponse stopJMeterTestingWithOptions(StopJMeterTestingRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StopJMeterTesting", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new StopJMeterTestingResponse());
    }

    public StopJMeterTestingResponse stopJMeterTesting(StopJMeterTestingRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.stopJMeterTestingWithOptions(request, runtime);
    }

    public DescribeSampleMetricResponse describeSampleMetricWithOptions(DescribeSampleMetricRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeSampleMetric", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeSampleMetricResponse());
    }

    public DescribeSampleMetricResponse describeSampleMetric(DescribeSampleMetricRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeSampleMetricWithOptions(request, runtime);
    }

    public DescribeJMeterChainDetailResponse describeJMeterChainDetailWithOptions(DescribeJMeterChainDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeJMeterChainDetail", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeJMeterChainDetailResponse());
    }

    public DescribeJMeterChainDetailResponse describeJMeterChainDetail(DescribeJMeterChainDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeJMeterChainDetailWithOptions(request, runtime);
    }

    public StartJMeterTestingResponse startJMeterTestingWithOptions(StartJMeterTestingRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StartJMeterTesting", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new StartJMeterTestingResponse());
    }

    public StartJMeterTestingResponse startJMeterTesting(StartJMeterTestingRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.startJMeterTestingWithOptions(request, runtime);
    }

    public RemoveInstanceFromGroupResponse removeInstanceFromGroupWithOptions(RemoveInstanceFromGroupRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("RemoveInstanceFromGroup", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new RemoveInstanceFromGroupResponse());
    }

    public RemoveInstanceFromGroupResponse removeInstanceFromGroup(RemoveInstanceFromGroupRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.removeInstanceFromGroupWithOptions(request, runtime);
    }

    public ListReceiversResponse listReceiversWithOptions(ListReceiversRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListReceivers", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new ListReceiversResponse());
    }

    public ListReceiversResponse listReceivers(ListReceiversRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listReceiversWithOptions(request, runtime);
    }

    public ReplaceOssFileResponse replaceOssFileWithOptions(ReplaceOssFileRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ReplaceOssFile", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new ReplaceOssFileResponse());
    }

    public ReplaceOssFileResponse replaceOssFile(ReplaceOssFileRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.replaceOssFileWithOptions(request, runtime);
    }

    public StartDebuggingResponse startDebuggingWithOptions(StartDebuggingRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StartDebugging", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new StartDebuggingResponse());
    }

    public StartDebuggingResponse startDebugging(StartDebuggingRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.startDebuggingWithOptions(request, runtime);
    }

    public StopDebuggingResponse stopDebuggingWithOptions(StopDebuggingRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StopDebugging", "HTTPS", "POST", "2019-08-10", "AK", null, TeaModel.buildMap(request), runtime), new StopDebuggingResponse());
    }

    public StopDebuggingResponse stopDebugging(StopDebuggingRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.stopDebuggingWithOptions(request, runtime);
    }

    public StartTestingResponse startTestingWithOptions(StartTestingRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StartTesting", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new StartTestingResponse());
    }

    public StartTestingResponse startTesting(StartTestingRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.startTestingWithOptions(request, runtime);
    }

    public StopTestingResponse stopTestingWithOptions(StopTestingRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StopTesting", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new StopTestingResponse());
    }

    public StopTestingResponse stopTesting(StopTestingRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.stopTestingWithOptions(request, runtime);
    }

    public ListReportsResponse listReportsWithOptions(ListReportsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListReports", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new ListReportsResponse());
    }

    public ListReportsResponse listReports(ListReportsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listReportsWithOptions(request, runtime);
    }

    public DescribeReportChainDetailResponse describeReportChainDetailWithOptions(DescribeReportChainDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeReportChainDetail", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeReportChainDetailResponse());
    }

    public DescribeReportChainDetailResponse describeReportChainDetail(DescribeReportChainDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeReportChainDetailWithOptions(request, runtime);
    }

    public DescribeReportChainSummaryResponse describeReportChainSummaryWithOptions(DescribeReportChainSummaryRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeReportChainSummary", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeReportChainSummaryResponse());
    }

    public DescribeReportChainSummaryResponse describeReportChainSummary(DescribeReportChainSummaryRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeReportChainSummaryWithOptions(request, runtime);
    }

    public RemoveScenesResponse removeScenesWithOptions(RemoveScenesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("RemoveScenes", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new RemoveScenesResponse());
    }

    public RemoveScenesResponse removeScenes(RemoveScenesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.removeScenesWithOptions(request, runtime);
    }

    public DescribeReportResponse describeReportWithOptions(DescribeReportRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeReport", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeReportResponse());
    }

    public DescribeReportResponse describeReport(DescribeReportRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeReportWithOptions(request, runtime);
    }

    public ListScenesResponse listScenesWithOptions(ListScenesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListScenes", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new ListScenesResponse());
    }

    public ListScenesResponse listScenes(ListScenesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listScenesWithOptions(request, runtime);
    }

    public DescribeSceneResponse describeSceneWithOptions(DescribeSceneRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeScene", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeSceneResponse());
    }

    public DescribeSceneResponse describeScene(DescribeSceneRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeSceneWithOptions(request, runtime);
    }

    public DescribeSceneRunningStatusResponse describeSceneRunningStatusWithOptions(DescribeSceneRunningStatusRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeSceneRunningStatus", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeSceneRunningStatusResponse());
    }

    public DescribeSceneRunningStatusResponse describeSceneRunningStatus(DescribeSceneRunningStatusRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeSceneRunningStatusWithOptions(request, runtime);
    }

    public AdjustSceneSpeedResponse adjustSceneSpeedWithOptions(AdjustSceneSpeedRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AdjustSceneSpeed", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new AdjustSceneSpeedResponse());
    }

    public AdjustSceneSpeedResponse adjustSceneSpeed(AdjustSceneSpeedRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.adjustSceneSpeedWithOptions(request, runtime);
    }

    public AdjustRelationSpeedResponse adjustRelationSpeedWithOptions(AdjustRelationSpeedRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AdjustRelationSpeed", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new AdjustRelationSpeedResponse());
    }

    public AdjustRelationSpeedResponse adjustRelationSpeed(AdjustRelationSpeedRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.adjustRelationSpeedWithOptions(request, runtime);
    }

    public DescribeSamplingLogResponse describeSamplingLogWithOptions(DescribeSamplingLogRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeSamplingLog", "HTTPS", "POST", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new DescribeSamplingLogResponse());
    }

    public DescribeSamplingLogResponse describeSamplingLog(DescribeSamplingLogRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeSamplingLogWithOptions(request, runtime);
    }

    public RemoveReportsResponse removeReportsWithOptions(RemoveReportsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("RemoveReports", "HTTPS", "GET", "2019-08-10", "AK,APP,PrivateKey,BearerToken", null, TeaModel.buildMap(request), runtime), new RemoveReportsResponse());
    }

    public RemoveReportsResponse removeReports(RemoveReportsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.removeReportsWithOptions(request, runtime);
    }

    public String getEndpoint(String productId, String regionId, String endpointRule, String network, String suffix, java.util.Map<String, String> endpointMap, String endpoint) throws Exception {
        if (!com.aliyun.teautil.Common.empty(endpoint)) {
            return endpoint;
        }

        if (!com.aliyun.teautil.Common.isUnset(endpointMap) && !com.aliyun.teautil.Common.empty(endpointMap.get("regionId"))) {
            return endpointMap.get("regionId");
        }

        return com.aliyun.endpointutil.Client.getEndpointRules(productId, regionId, endpointRule, network, suffix);
    }
}
