// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Dyvmsapi20170525.Models;

namespace AlibabaCloud.SDK.Dyvmsapi20170525
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "central";
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public ListRobotTaskCallsResponse ListRobotTaskCallsEx(ListRobotTaskCallsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRobotTaskCallsResponse>(DoRequest("ListRobotTaskCalls", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListRobotTaskCallsResponse> ListRobotTaskCallsExAsync(ListRobotTaskCallsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRobotTaskCallsResponse>(await DoRequestAsync("ListRobotTaskCalls", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public ListRobotTaskCallsResponse ListRobotTaskCalls(ListRobotTaskCallsRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListRobotTaskCallsEx(request, runtime);
        }

        public async Task<ListRobotTaskCallsResponse> ListRobotTaskCallsAsync(ListRobotTaskCallsRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListRobotTaskCallsExAsync(request, runtime);
        }

        public DoRtcNumberAuthResponse DoRtcNumberAuthEx(DoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DoRtcNumberAuthResponse>(DoRequest("DoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DoRtcNumberAuthResponse> DoRtcNumberAuthExAsync(DoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DoRtcNumberAuthResponse>(await DoRequestAsync("DoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public DoRtcNumberAuthResponse DoRtcNumberAuth(DoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DoRtcNumberAuthEx(request, runtime);
        }

        public async Task<DoRtcNumberAuthResponse> DoRtcNumberAuthAsync(DoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DoRtcNumberAuthExAsync(request, runtime);
        }

        public UndoRtcNumberAuthResponse UndoRtcNumberAuthEx(UndoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UndoRtcNumberAuthResponse>(DoRequest("UndoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UndoRtcNumberAuthResponse> UndoRtcNumberAuthExAsync(UndoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UndoRtcNumberAuthResponse>(await DoRequestAsync("UndoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public UndoRtcNumberAuthResponse UndoRtcNumberAuth(UndoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UndoRtcNumberAuthEx(request, runtime);
        }

        public async Task<UndoRtcNumberAuthResponse> UndoRtcNumberAuthAsync(UndoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UndoRtcNumberAuthExAsync(request, runtime);
        }

        public QueryRtcNumberAuthStatusResponse QueryRtcNumberAuthStatusEx(QueryRtcNumberAuthStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRtcNumberAuthStatusResponse>(DoRequest("QueryRtcNumberAuthStatus", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRtcNumberAuthStatusResponse> QueryRtcNumberAuthStatusExAsync(QueryRtcNumberAuthStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRtcNumberAuthStatusResponse>(await DoRequestAsync("QueryRtcNumberAuthStatus", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryRtcNumberAuthStatusResponse QueryRtcNumberAuthStatus(QueryRtcNumberAuthStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRtcNumberAuthStatusEx(request, runtime);
        }

        public async Task<QueryRtcNumberAuthStatusResponse> QueryRtcNumberAuthStatusAsync(QueryRtcNumberAuthStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRtcNumberAuthStatusExAsync(request, runtime);
        }

        public ListOrderedNumbersResponse ListOrderedNumbersEx(ListOrderedNumbersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOrderedNumbersResponse>(DoRequest("ListOrderedNumbers", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListOrderedNumbersResponse> ListOrderedNumbersExAsync(ListOrderedNumbersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOrderedNumbersResponse>(await DoRequestAsync("ListOrderedNumbers", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public ListOrderedNumbersResponse ListOrderedNumbers(ListOrderedNumbersRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListOrderedNumbersEx(request, runtime);
        }

        public async Task<ListOrderedNumbersResponse> ListOrderedNumbersAsync(ListOrderedNumbersRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListOrderedNumbersExAsync(request, runtime);
        }

        public StartMicroOutboundResponse StartMicroOutboundEx(StartMicroOutboundRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartMicroOutboundResponse>(DoRequest("StartMicroOutbound", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<StartMicroOutboundResponse> StartMicroOutboundExAsync(StartMicroOutboundRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartMicroOutboundResponse>(await DoRequestAsync("StartMicroOutbound", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public StartMicroOutboundResponse StartMicroOutbound(StartMicroOutboundRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartMicroOutboundEx(request, runtime);
        }

        public async Task<StartMicroOutboundResponse> StartMicroOutboundAsync(StartMicroOutboundRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartMicroOutboundExAsync(request, runtime);
        }

        public ListOutboundStrategiesResponse ListOutboundStrategiesEx(ListOutboundStrategiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOutboundStrategiesResponse>(DoRequest("ListOutboundStrategies", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListOutboundStrategiesResponse> ListOutboundStrategiesExAsync(ListOutboundStrategiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOutboundStrategiesResponse>(await DoRequestAsync("ListOutboundStrategies", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public ListOutboundStrategiesResponse ListOutboundStrategies(ListOutboundStrategiesRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListOutboundStrategiesEx(request, runtime);
        }

        public async Task<ListOutboundStrategiesResponse> ListOutboundStrategiesAsync(ListOutboundStrategiesRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListOutboundStrategiesExAsync(request, runtime);
        }

        public DescribeRecordDataResponse DescribeRecordDataEx(DescribeRecordDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordDataResponse>(DoRequest("DescribeRecordData", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeRecordDataResponse> DescribeRecordDataExAsync(DescribeRecordDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordDataResponse>(await DoRequestAsync("DescribeRecordData", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public DescribeRecordDataResponse DescribeRecordData(DescribeRecordDataRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRecordDataEx(request, runtime);
        }

        public async Task<DescribeRecordDataResponse> DescribeRecordDataAsync(DescribeRecordDataRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRecordDataExAsync(request, runtime);
        }

        public QueryVoipNumberBindInfosResponse QueryVoipNumberBindInfosEx(QueryVoipNumberBindInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryVoipNumberBindInfosResponse>(DoRequest("QueryVoipNumberBindInfos", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryVoipNumberBindInfosResponse> QueryVoipNumberBindInfosExAsync(QueryVoipNumberBindInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryVoipNumberBindInfosResponse>(await DoRequestAsync("QueryVoipNumberBindInfos", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryVoipNumberBindInfosResponse QueryVoipNumberBindInfos(QueryVoipNumberBindInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryVoipNumberBindInfosEx(request, runtime);
        }

        public async Task<QueryVoipNumberBindInfosResponse> QueryVoipNumberBindInfosAsync(QueryVoipNumberBindInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryVoipNumberBindInfosExAsync(request, runtime);
        }

        public ReportVoipProblemsResponse ReportVoipProblemsEx(ReportVoipProblemsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReportVoipProblemsResponse>(DoRequest("ReportVoipProblems", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ReportVoipProblemsResponse> ReportVoipProblemsExAsync(ReportVoipProblemsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReportVoipProblemsResponse>(await DoRequestAsync("ReportVoipProblems", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public ReportVoipProblemsResponse ReportVoipProblems(ReportVoipProblemsRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReportVoipProblemsEx(request, runtime);
        }

        public async Task<ReportVoipProblemsResponse> ReportVoipProblemsAsync(ReportVoipProblemsRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReportVoipProblemsExAsync(request, runtime);
        }

        public UnbindNumberAndVoipIdResponse UnbindNumberAndVoipIdEx(UnbindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindNumberAndVoipIdResponse>(DoRequest("UnbindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UnbindNumberAndVoipIdResponse> UnbindNumberAndVoipIdExAsync(UnbindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindNumberAndVoipIdResponse>(await DoRequestAsync("UnbindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public UnbindNumberAndVoipIdResponse UnbindNumberAndVoipId(UnbindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnbindNumberAndVoipIdEx(request, runtime);
        }

        public async Task<UnbindNumberAndVoipIdResponse> UnbindNumberAndVoipIdAsync(UnbindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnbindNumberAndVoipIdExAsync(request, runtime);
        }

        public BindNumberAndVoipIdResponse BindNumberAndVoipIdEx(BindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindNumberAndVoipIdResponse>(DoRequest("BindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<BindNumberAndVoipIdResponse> BindNumberAndVoipIdExAsync(BindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindNumberAndVoipIdResponse>(await DoRequestAsync("BindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public BindNumberAndVoipIdResponse BindNumberAndVoipId(BindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BindNumberAndVoipIdEx(request, runtime);
        }

        public async Task<BindNumberAndVoipIdResponse> BindNumberAndVoipIdAsync(BindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BindNumberAndVoipIdExAsync(request, runtime);
        }

        public CancelRobotTaskResponse CancelRobotTaskEx(CancelRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelRobotTaskResponse>(DoRequest("CancelRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CancelRobotTaskResponse> CancelRobotTaskExAsync(CancelRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelRobotTaskResponse>(await DoRequestAsync("CancelRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public CancelRobotTaskResponse CancelRobotTask(CancelRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelRobotTaskEx(request, runtime);
        }

        public async Task<CancelRobotTaskResponse> CancelRobotTaskAsync(CancelRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelRobotTaskExAsync(request, runtime);
        }

        public UploadRobotTaskCalledFileResponse UploadRobotTaskCalledFileEx(UploadRobotTaskCalledFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UploadRobotTaskCalledFileResponse>(DoRequest("UploadRobotTaskCalledFile", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UploadRobotTaskCalledFileResponse> UploadRobotTaskCalledFileExAsync(UploadRobotTaskCalledFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UploadRobotTaskCalledFileResponse>(await DoRequestAsync("UploadRobotTaskCalledFile", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public UploadRobotTaskCalledFileResponse UploadRobotTaskCalledFile(UploadRobotTaskCalledFileRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UploadRobotTaskCalledFileEx(request, runtime);
        }

        public async Task<UploadRobotTaskCalledFileResponse> UploadRobotTaskCalledFileAsync(UploadRobotTaskCalledFileRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UploadRobotTaskCalledFileExAsync(request, runtime);
        }

        public DeleteRobotTaskResponse DeleteRobotTaskEx(DeleteRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRobotTaskResponse>(DoRequest("DeleteRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteRobotTaskResponse> DeleteRobotTaskExAsync(DeleteRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRobotTaskResponse>(await DoRequestAsync("DeleteRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public DeleteRobotTaskResponse DeleteRobotTask(DeleteRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRobotTaskEx(request, runtime);
        }

        public async Task<DeleteRobotTaskResponse> DeleteRobotTaskAsync(DeleteRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRobotTaskExAsync(request, runtime);
        }

        public StopRobotTaskResponse StopRobotTaskEx(StopRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopRobotTaskResponse>(DoRequest("StopRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<StopRobotTaskResponse> StopRobotTaskExAsync(StopRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopRobotTaskResponse>(await DoRequestAsync("StopRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public StopRobotTaskResponse StopRobotTask(StopRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopRobotTaskEx(request, runtime);
        }

        public async Task<StopRobotTaskResponse> StopRobotTaskAsync(StopRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopRobotTaskExAsync(request, runtime);
        }

        public QueryRobotTaskCallDetailResponse QueryRobotTaskCallDetailEx(QueryRobotTaskCallDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallDetailResponse>(DoRequest("QueryRobotTaskCallDetail", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRobotTaskCallDetailResponse> QueryRobotTaskCallDetailExAsync(QueryRobotTaskCallDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallDetailResponse>(await DoRequestAsync("QueryRobotTaskCallDetail", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryRobotTaskCallDetailResponse QueryRobotTaskCallDetail(QueryRobotTaskCallDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskCallDetailEx(request, runtime);
        }

        public async Task<QueryRobotTaskCallDetailResponse> QueryRobotTaskCallDetailAsync(QueryRobotTaskCallDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskCallDetailExAsync(request, runtime);
        }

        public QueryRobotv2AllListResponse QueryRobotv2AllListEx(QueryRobotv2AllListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotv2AllListResponse>(DoRequest("QueryRobotv2AllList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRobotv2AllListResponse> QueryRobotv2AllListExAsync(QueryRobotv2AllListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotv2AllListResponse>(await DoRequestAsync("QueryRobotv2AllList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryRobotv2AllListResponse QueryRobotv2AllList(QueryRobotv2AllListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotv2AllListEx(request, runtime);
        }

        public async Task<QueryRobotv2AllListResponse> QueryRobotv2AllListAsync(QueryRobotv2AllListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotv2AllListExAsync(request, runtime);
        }

        public QueryRobotTaskDetailResponse QueryRobotTaskDetailEx(QueryRobotTaskDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskDetailResponse>(DoRequest("QueryRobotTaskDetail", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRobotTaskDetailResponse> QueryRobotTaskDetailExAsync(QueryRobotTaskDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskDetailResponse>(await DoRequestAsync("QueryRobotTaskDetail", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryRobotTaskDetailResponse QueryRobotTaskDetail(QueryRobotTaskDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskDetailEx(request, runtime);
        }

        public async Task<QueryRobotTaskDetailResponse> QueryRobotTaskDetailAsync(QueryRobotTaskDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskDetailExAsync(request, runtime);
        }

        public QueryRobotTaskCallListResponse QueryRobotTaskCallListEx(QueryRobotTaskCallListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallListResponse>(DoRequest("QueryRobotTaskCallList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRobotTaskCallListResponse> QueryRobotTaskCallListExAsync(QueryRobotTaskCallListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallListResponse>(await DoRequestAsync("QueryRobotTaskCallList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryRobotTaskCallListResponse QueryRobotTaskCallList(QueryRobotTaskCallListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskCallListEx(request, runtime);
        }

        public async Task<QueryRobotTaskCallListResponse> QueryRobotTaskCallListAsync(QueryRobotTaskCallListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskCallListExAsync(request, runtime);
        }

        public StartRobotTaskResponse StartRobotTaskEx(StartRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartRobotTaskResponse>(DoRequest("StartRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<StartRobotTaskResponse> StartRobotTaskExAsync(StartRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartRobotTaskResponse>(await DoRequestAsync("StartRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public StartRobotTaskResponse StartRobotTask(StartRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartRobotTaskEx(request, runtime);
        }

        public async Task<StartRobotTaskResponse> StartRobotTaskAsync(StartRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartRobotTaskExAsync(request, runtime);
        }

        public QueryRobotTaskListResponse QueryRobotTaskListEx(QueryRobotTaskListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskListResponse>(DoRequest("QueryRobotTaskList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRobotTaskListResponse> QueryRobotTaskListExAsync(QueryRobotTaskListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskListResponse>(await DoRequestAsync("QueryRobotTaskList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryRobotTaskListResponse QueryRobotTaskList(QueryRobotTaskListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskListEx(request, runtime);
        }

        public async Task<QueryRobotTaskListResponse> QueryRobotTaskListAsync(QueryRobotTaskListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskListExAsync(request, runtime);
        }

        public CreateRobotTaskResponse CreateRobotTaskEx(CreateRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRobotTaskResponse>(DoRequest("CreateRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateRobotTaskResponse> CreateRobotTaskExAsync(CreateRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRobotTaskResponse>(await DoRequestAsync("CreateRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public CreateRobotTaskResponse CreateRobotTask(CreateRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRobotTaskEx(request, runtime);
        }

        public async Task<CreateRobotTaskResponse> CreateRobotTaskAsync(CreateRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRobotTaskExAsync(request, runtime);
        }

        public CancelOrderRobotTaskResponse CancelOrderRobotTaskEx(CancelOrderRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelOrderRobotTaskResponse>(DoRequest("CancelOrderRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CancelOrderRobotTaskResponse> CancelOrderRobotTaskExAsync(CancelOrderRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelOrderRobotTaskResponse>(await DoRequestAsync("CancelOrderRobotTask", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public CancelOrderRobotTaskResponse CancelOrderRobotTask(CancelOrderRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelOrderRobotTaskEx(request, runtime);
        }

        public async Task<CancelOrderRobotTaskResponse> CancelOrderRobotTaskAsync(CancelOrderRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelOrderRobotTaskExAsync(request, runtime);
        }

        public SmartCallOperateResponse SmartCallOperateEx(SmartCallOperateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallOperateResponse>(DoRequest("SmartCallOperate", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<SmartCallOperateResponse> SmartCallOperateExAsync(SmartCallOperateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallOperateResponse>(await DoRequestAsync("SmartCallOperate", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public SmartCallOperateResponse SmartCallOperate(SmartCallOperateRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SmartCallOperateEx(request, runtime);
        }

        public async Task<SmartCallOperateResponse> SmartCallOperateAsync(SmartCallOperateRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SmartCallOperateExAsync(request, runtime);
        }

        public QueryRobotInfoListResponse QueryRobotInfoListEx(QueryRobotInfoListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotInfoListResponse>(DoRequest("QueryRobotInfoList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRobotInfoListResponse> QueryRobotInfoListExAsync(QueryRobotInfoListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotInfoListResponse>(await DoRequestAsync("QueryRobotInfoList", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryRobotInfoListResponse QueryRobotInfoList(QueryRobotInfoListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotInfoListEx(request, runtime);
        }

        public async Task<QueryRobotInfoListResponse> QueryRobotInfoListAsync(QueryRobotInfoListRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotInfoListExAsync(request, runtime);
        }

        public BatchRobotSmartCallResponse BatchRobotSmartCallEx(BatchRobotSmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchRobotSmartCallResponse>(DoRequest("BatchRobotSmartCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<BatchRobotSmartCallResponse> BatchRobotSmartCallExAsync(BatchRobotSmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchRobotSmartCallResponse>(await DoRequestAsync("BatchRobotSmartCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public BatchRobotSmartCallResponse BatchRobotSmartCall(BatchRobotSmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BatchRobotSmartCallEx(request, runtime);
        }

        public async Task<BatchRobotSmartCallResponse> BatchRobotSmartCallAsync(BatchRobotSmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BatchRobotSmartCallExAsync(request, runtime);
        }

        public QueryCallDetailByTaskIdResponse QueryCallDetailByTaskIdEx(QueryCallDetailByTaskIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByTaskIdResponse>(DoRequest("QueryCallDetailByTaskId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryCallDetailByTaskIdResponse> QueryCallDetailByTaskIdExAsync(QueryCallDetailByTaskIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByTaskIdResponse>(await DoRequestAsync("QueryCallDetailByTaskId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryCallDetailByTaskIdResponse QueryCallDetailByTaskId(QueryCallDetailByTaskIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCallDetailByTaskIdEx(request, runtime);
        }

        public async Task<QueryCallDetailByTaskIdResponse> QueryCallDetailByTaskIdAsync(QueryCallDetailByTaskIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCallDetailByTaskIdExAsync(request, runtime);
        }

        public GetRtcTokenResponse GetRtcTokenEx(GetRtcTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRtcTokenResponse>(DoRequest("GetRtcToken", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetRtcTokenResponse> GetRtcTokenExAsync(GetRtcTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRtcTokenResponse>(await DoRequestAsync("GetRtcToken", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public GetRtcTokenResponse GetRtcToken(GetRtcTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetRtcTokenEx(request, runtime);
        }

        public async Task<GetRtcTokenResponse> GetRtcTokenAsync(GetRtcTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetRtcTokenExAsync(request, runtime);
        }

        public AddRtcAccountResponse AddRtcAccountEx(AddRtcAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddRtcAccountResponse>(DoRequest("AddRtcAccount", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<AddRtcAccountResponse> AddRtcAccountExAsync(AddRtcAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddRtcAccountResponse>(await DoRequestAsync("AddRtcAccount", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public AddRtcAccountResponse AddRtcAccount(AddRtcAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddRtcAccountEx(request, runtime);
        }

        public async Task<AddRtcAccountResponse> AddRtcAccountAsync(AddRtcAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddRtcAccountExAsync(request, runtime);
        }

        public VoipAddAccountResponse VoipAddAccountEx(VoipAddAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipAddAccountResponse>(DoRequest("VoipAddAccount", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<VoipAddAccountResponse> VoipAddAccountExAsync(VoipAddAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipAddAccountResponse>(await DoRequestAsync("VoipAddAccount", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public VoipAddAccountResponse VoipAddAccount(VoipAddAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return VoipAddAccountEx(request, runtime);
        }

        public async Task<VoipAddAccountResponse> VoipAddAccountAsync(VoipAddAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await VoipAddAccountExAsync(request, runtime);
        }

        public VoipGetTokenResponse VoipGetTokenEx(VoipGetTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipGetTokenResponse>(DoRequest("VoipGetToken", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<VoipGetTokenResponse> VoipGetTokenExAsync(VoipGetTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipGetTokenResponse>(await DoRequestAsync("VoipGetToken", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public VoipGetTokenResponse VoipGetToken(VoipGetTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return VoipGetTokenEx(request, runtime);
        }

        public async Task<VoipGetTokenResponse> VoipGetTokenAsync(VoipGetTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await VoipGetTokenExAsync(request, runtime);
        }

        public SmartCallResponse SmartCallEx(SmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallResponse>(DoRequest("SmartCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<SmartCallResponse> SmartCallExAsync(SmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallResponse>(await DoRequestAsync("SmartCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public SmartCallResponse SmartCall(SmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SmartCallEx(request, runtime);
        }

        public async Task<SmartCallResponse> SmartCallAsync(SmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SmartCallExAsync(request, runtime);
        }

        public QueryCallDetailByCallIdResponse QueryCallDetailByCallIdEx(QueryCallDetailByCallIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByCallIdResponse>(DoRequest("QueryCallDetailByCallId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryCallDetailByCallIdResponse> QueryCallDetailByCallIdExAsync(QueryCallDetailByCallIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByCallIdResponse>(await DoRequestAsync("QueryCallDetailByCallId", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public QueryCallDetailByCallIdResponse QueryCallDetailByCallId(QueryCallDetailByCallIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCallDetailByCallIdEx(request, runtime);
        }

        public async Task<QueryCallDetailByCallIdResponse> QueryCallDetailByCallIdAsync(QueryCallDetailByCallIdRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCallDetailByCallIdExAsync(request, runtime);
        }

        public CancelCallResponse CancelCallEx(CancelCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCallResponse>(DoRequest("CancelCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CancelCallResponse> CancelCallExAsync(CancelCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCallResponse>(await DoRequestAsync("CancelCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public CancelCallResponse CancelCall(CancelCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelCallEx(request, runtime);
        }

        public async Task<CancelCallResponse> CancelCallAsync(CancelCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelCallExAsync(request, runtime);
        }

        public ClickToDialResponse ClickToDialEx(ClickToDialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClickToDialResponse>(DoRequest("ClickToDial", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ClickToDialResponse> ClickToDialExAsync(ClickToDialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClickToDialResponse>(await DoRequestAsync("ClickToDial", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public ClickToDialResponse ClickToDial(ClickToDialRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ClickToDialEx(request, runtime);
        }

        public async Task<ClickToDialResponse> ClickToDialAsync(ClickToDialRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ClickToDialExAsync(request, runtime);
        }

        public IvrCallResponse IvrCallEx(IvrCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<IvrCallResponse>(DoRequest("IvrCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<IvrCallResponse> IvrCallExAsync(IvrCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<IvrCallResponse>(await DoRequestAsync("IvrCall", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public IvrCallResponse IvrCall(IvrCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return IvrCallEx(request, runtime);
        }

        public async Task<IvrCallResponse> IvrCallAsync(IvrCallRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await IvrCallExAsync(request, runtime);
        }

        public SingleCallByVoiceResponse SingleCallByVoiceEx(SingleCallByVoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByVoiceResponse>(DoRequest("SingleCallByVoice", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<SingleCallByVoiceResponse> SingleCallByVoiceExAsync(SingleCallByVoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByVoiceResponse>(await DoRequestAsync("SingleCallByVoice", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public SingleCallByVoiceResponse SingleCallByVoice(SingleCallByVoiceRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SingleCallByVoiceEx(request, runtime);
        }

        public async Task<SingleCallByVoiceResponse> SingleCallByVoiceAsync(SingleCallByVoiceRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SingleCallByVoiceExAsync(request, runtime);
        }

        public SingleCallByTtsResponse SingleCallByTtsEx(SingleCallByTtsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByTtsResponse>(DoRequest("SingleCallByTts", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public async Task<SingleCallByTtsResponse> SingleCallByTtsExAsync(SingleCallByTtsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByTtsResponse>(await DoRequestAsync("SingleCallByTts", "HTTPS", "GET", "2017-05-25", "AK", request.ToMap(), null, runtime));
        }

        public SingleCallByTtsResponse SingleCallByTts(SingleCallByTtsRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SingleCallByTtsEx(request, runtime);
        }

        public async Task<SingleCallByTtsResponse> SingleCallByTtsAsync(SingleCallByTtsRequest request)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SingleCallByTtsExAsync(request, runtime);
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.IsUnset(endpointMap) && !AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}
