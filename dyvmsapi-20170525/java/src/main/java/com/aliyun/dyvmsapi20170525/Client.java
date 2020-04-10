// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.dyvmsapi20170525;

import com.aliyun.tea.*;
import com.aliyun.dyvmsapi20170525.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "central";
        this.checkConfig(config);
        this._endpoint = this.getEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public ListRobotTaskCallsResponse listRobotTaskCallsEx(ListRobotTaskCallsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListRobotTaskCalls", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new ListRobotTaskCallsResponse());
    }

    public ListRobotTaskCallsResponse listRobotTaskCalls(ListRobotTaskCallsRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listRobotTaskCallsEx(request, runtime);
    }

    public DoRtcNumberAuthResponse doRtcNumberAuthEx(DoRtcNumberAuthRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new DoRtcNumberAuthResponse());
    }

    public DoRtcNumberAuthResponse doRtcNumberAuth(DoRtcNumberAuthRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.doRtcNumberAuthEx(request, runtime);
    }

    public UndoRtcNumberAuthResponse undoRtcNumberAuthEx(UndoRtcNumberAuthRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UndoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new UndoRtcNumberAuthResponse());
    }

    public UndoRtcNumberAuthResponse undoRtcNumberAuth(UndoRtcNumberAuthRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.undoRtcNumberAuthEx(request, runtime);
    }

    public QueryRtcNumberAuthStatusResponse queryRtcNumberAuthStatusEx(QueryRtcNumberAuthStatusRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryRtcNumberAuthStatus", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryRtcNumberAuthStatusResponse());
    }

    public QueryRtcNumberAuthStatusResponse queryRtcNumberAuthStatus(QueryRtcNumberAuthStatusRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryRtcNumberAuthStatusEx(request, runtime);
    }

    public ListOrderedNumbersResponse listOrderedNumbersEx(ListOrderedNumbersRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListOrderedNumbers", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new ListOrderedNumbersResponse());
    }

    public ListOrderedNumbersResponse listOrderedNumbers(ListOrderedNumbersRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listOrderedNumbersEx(request, runtime);
    }

    public StartMicroOutboundResponse startMicroOutboundEx(StartMicroOutboundRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StartMicroOutbound", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new StartMicroOutboundResponse());
    }

    public StartMicroOutboundResponse startMicroOutbound(StartMicroOutboundRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.startMicroOutboundEx(request, runtime);
    }

    public ListOutboundStrategiesResponse listOutboundStrategiesEx(ListOutboundStrategiesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListOutboundStrategies", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new ListOutboundStrategiesResponse());
    }

    public ListOutboundStrategiesResponse listOutboundStrategies(ListOutboundStrategiesRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listOutboundStrategiesEx(request, runtime);
    }

    public DescribeRecordDataResponse describeRecordDataEx(DescribeRecordDataRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeRecordData", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new DescribeRecordDataResponse());
    }

    public DescribeRecordDataResponse describeRecordData(DescribeRecordDataRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeRecordDataEx(request, runtime);
    }

    public QueryVoipNumberBindInfosResponse queryVoipNumberBindInfosEx(QueryVoipNumberBindInfosRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryVoipNumberBindInfos", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryVoipNumberBindInfosResponse());
    }

    public QueryVoipNumberBindInfosResponse queryVoipNumberBindInfos(QueryVoipNumberBindInfosRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryVoipNumberBindInfosEx(request, runtime);
    }

    public ReportVoipProblemsResponse reportVoipProblemsEx(ReportVoipProblemsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ReportVoipProblems", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new ReportVoipProblemsResponse());
    }

    public ReportVoipProblemsResponse reportVoipProblems(ReportVoipProblemsRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.reportVoipProblemsEx(request, runtime);
    }

    public UnbindNumberAndVoipIdResponse unbindNumberAndVoipIdEx(UnbindNumberAndVoipIdRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UnbindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new UnbindNumberAndVoipIdResponse());
    }

    public UnbindNumberAndVoipIdResponse unbindNumberAndVoipId(UnbindNumberAndVoipIdRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.unbindNumberAndVoipIdEx(request, runtime);
    }

    public BindNumberAndVoipIdResponse bindNumberAndVoipIdEx(BindNumberAndVoipIdRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("BindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new BindNumberAndVoipIdResponse());
    }

    public BindNumberAndVoipIdResponse bindNumberAndVoipId(BindNumberAndVoipIdRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.bindNumberAndVoipIdEx(request, runtime);
    }

    public CancelRobotTaskResponse cancelRobotTaskEx(CancelRobotTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CancelRobotTask", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new CancelRobotTaskResponse());
    }

    public CancelRobotTaskResponse cancelRobotTask(CancelRobotTaskRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.cancelRobotTaskEx(request, runtime);
    }

    public UploadRobotTaskCalledFileResponse uploadRobotTaskCalledFileEx(UploadRobotTaskCalledFileRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UploadRobotTaskCalledFile", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new UploadRobotTaskCalledFileResponse());
    }

    public UploadRobotTaskCalledFileResponse uploadRobotTaskCalledFile(UploadRobotTaskCalledFileRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.uploadRobotTaskCalledFileEx(request, runtime);
    }

    public DeleteRobotTaskResponse deleteRobotTaskEx(DeleteRobotTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DeleteRobotTask", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new DeleteRobotTaskResponse());
    }

    public DeleteRobotTaskResponse deleteRobotTask(DeleteRobotTaskRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.deleteRobotTaskEx(request, runtime);
    }

    public StopRobotTaskResponse stopRobotTaskEx(StopRobotTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StopRobotTask", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new StopRobotTaskResponse());
    }

    public StopRobotTaskResponse stopRobotTask(StopRobotTaskRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.stopRobotTaskEx(request, runtime);
    }

    public QueryRobotTaskCallDetailResponse queryRobotTaskCallDetailEx(QueryRobotTaskCallDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryRobotTaskCallDetail", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryRobotTaskCallDetailResponse());
    }

    public QueryRobotTaskCallDetailResponse queryRobotTaskCallDetail(QueryRobotTaskCallDetailRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryRobotTaskCallDetailEx(request, runtime);
    }

    public QueryRobotv2AllListResponse queryRobotv2AllListEx(QueryRobotv2AllListRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryRobotv2AllList", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryRobotv2AllListResponse());
    }

    public QueryRobotv2AllListResponse queryRobotv2AllList(QueryRobotv2AllListRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryRobotv2AllListEx(request, runtime);
    }

    public QueryRobotTaskDetailResponse queryRobotTaskDetailEx(QueryRobotTaskDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryRobotTaskDetail", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryRobotTaskDetailResponse());
    }

    public QueryRobotTaskDetailResponse queryRobotTaskDetail(QueryRobotTaskDetailRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryRobotTaskDetailEx(request, runtime);
    }

    public QueryRobotTaskCallListResponse queryRobotTaskCallListEx(QueryRobotTaskCallListRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryRobotTaskCallList", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryRobotTaskCallListResponse());
    }

    public QueryRobotTaskCallListResponse queryRobotTaskCallList(QueryRobotTaskCallListRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryRobotTaskCallListEx(request, runtime);
    }

    public StartRobotTaskResponse startRobotTaskEx(StartRobotTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("StartRobotTask", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new StartRobotTaskResponse());
    }

    public StartRobotTaskResponse startRobotTask(StartRobotTaskRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.startRobotTaskEx(request, runtime);
    }

    public QueryRobotTaskListResponse queryRobotTaskListEx(QueryRobotTaskListRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryRobotTaskList", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryRobotTaskListResponse());
    }

    public QueryRobotTaskListResponse queryRobotTaskList(QueryRobotTaskListRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryRobotTaskListEx(request, runtime);
    }

    public CreateRobotTaskResponse createRobotTaskEx(CreateRobotTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateRobotTask", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new CreateRobotTaskResponse());
    }

    public CreateRobotTaskResponse createRobotTask(CreateRobotTaskRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createRobotTaskEx(request, runtime);
    }

    public CancelOrderRobotTaskResponse cancelOrderRobotTaskEx(CancelOrderRobotTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CancelOrderRobotTask", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new CancelOrderRobotTaskResponse());
    }

    public CancelOrderRobotTaskResponse cancelOrderRobotTask(CancelOrderRobotTaskRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.cancelOrderRobotTaskEx(request, runtime);
    }

    public SmartCallOperateResponse smartCallOperateEx(SmartCallOperateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("SmartCallOperate", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new SmartCallOperateResponse());
    }

    public SmartCallOperateResponse smartCallOperate(SmartCallOperateRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.smartCallOperateEx(request, runtime);
    }

    public QueryRobotInfoListResponse queryRobotInfoListEx(QueryRobotInfoListRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryRobotInfoList", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryRobotInfoListResponse());
    }

    public QueryRobotInfoListResponse queryRobotInfoList(QueryRobotInfoListRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryRobotInfoListEx(request, runtime);
    }

    public BatchRobotSmartCallResponse batchRobotSmartCallEx(BatchRobotSmartCallRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("BatchRobotSmartCall", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new BatchRobotSmartCallResponse());
    }

    public BatchRobotSmartCallResponse batchRobotSmartCall(BatchRobotSmartCallRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.batchRobotSmartCallEx(request, runtime);
    }

    public QueryCallDetailByTaskIdResponse queryCallDetailByTaskIdEx(QueryCallDetailByTaskIdRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryCallDetailByTaskId", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryCallDetailByTaskIdResponse());
    }

    public QueryCallDetailByTaskIdResponse queryCallDetailByTaskId(QueryCallDetailByTaskIdRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryCallDetailByTaskIdEx(request, runtime);
    }

    public GetRtcTokenResponse getRtcTokenEx(GetRtcTokenRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetRtcToken", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new GetRtcTokenResponse());
    }

    public GetRtcTokenResponse getRtcToken(GetRtcTokenRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getRtcTokenEx(request, runtime);
    }

    public AddRtcAccountResponse addRtcAccountEx(AddRtcAccountRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddRtcAccount", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new AddRtcAccountResponse());
    }

    public AddRtcAccountResponse addRtcAccount(AddRtcAccountRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.addRtcAccountEx(request, runtime);
    }

    public VoipAddAccountResponse voipAddAccountEx(VoipAddAccountRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("VoipAddAccount", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new VoipAddAccountResponse());
    }

    public VoipAddAccountResponse voipAddAccount(VoipAddAccountRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.voipAddAccountEx(request, runtime);
    }

    public VoipGetTokenResponse voipGetTokenEx(VoipGetTokenRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("VoipGetToken", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new VoipGetTokenResponse());
    }

    public VoipGetTokenResponse voipGetToken(VoipGetTokenRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.voipGetTokenEx(request, runtime);
    }

    public SmartCallResponse smartCallEx(SmartCallRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("SmartCall", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new SmartCallResponse());
    }

    public SmartCallResponse smartCall(SmartCallRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.smartCallEx(request, runtime);
    }

    public QueryCallDetailByCallIdResponse queryCallDetailByCallIdEx(QueryCallDetailByCallIdRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryCallDetailByCallId", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new QueryCallDetailByCallIdResponse());
    }

    public QueryCallDetailByCallIdResponse queryCallDetailByCallId(QueryCallDetailByCallIdRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryCallDetailByCallIdEx(request, runtime);
    }

    public CancelCallResponse cancelCallEx(CancelCallRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CancelCall", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new CancelCallResponse());
    }

    public CancelCallResponse cancelCall(CancelCallRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.cancelCallEx(request, runtime);
    }

    public ClickToDialResponse clickToDialEx(ClickToDialRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ClickToDial", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new ClickToDialResponse());
    }

    public ClickToDialResponse clickToDial(ClickToDialRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.clickToDialEx(request, runtime);
    }

    public IvrCallResponse ivrCallEx(IvrCallRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("IvrCall", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new IvrCallResponse());
    }

    public IvrCallResponse ivrCall(IvrCallRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.ivrCallEx(request, runtime);
    }

    public SingleCallByVoiceResponse singleCallByVoiceEx(SingleCallByVoiceRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("SingleCallByVoice", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new SingleCallByVoiceResponse());
    }

    public SingleCallByVoiceResponse singleCallByVoice(SingleCallByVoiceRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.singleCallByVoiceEx(request, runtime);
    }

    public SingleCallByTtsResponse singleCallByTtsEx(SingleCallByTtsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("SingleCallByTts", "HTTPS", "GET", "2017-05-25", "AK", TeaModel.buildMap(request), null, runtime), new SingleCallByTtsResponse());
    }

    public SingleCallByTtsResponse singleCallByTts(SingleCallByTtsRequest request) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.singleCallByTtsEx(request, runtime);
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
