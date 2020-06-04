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


        public ListRobotTaskCallsResponse ListRobotTaskCallsWithOptions(ListRobotTaskCallsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRobotTaskCallsResponse>(DoRequest("ListRobotTaskCalls", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListRobotTaskCallsResponse> ListRobotTaskCallsWithOptionsAsync(ListRobotTaskCallsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRobotTaskCallsResponse>(await DoRequestAsync("ListRobotTaskCalls", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public ListRobotTaskCallsResponse ListRobotTaskCalls(ListRobotTaskCallsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListRobotTaskCallsWithOptions(request, runtime);
        }

        public async Task<ListRobotTaskCallsResponse> ListRobotTaskCallsAsync(ListRobotTaskCallsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListRobotTaskCallsWithOptionsAsync(request, runtime);
        }

        public DoRtcNumberAuthResponse DoRtcNumberAuthWithOptions(DoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DoRtcNumberAuthResponse>(DoRequest("DoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DoRtcNumberAuthResponse> DoRtcNumberAuthWithOptionsAsync(DoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DoRtcNumberAuthResponse>(await DoRequestAsync("DoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public DoRtcNumberAuthResponse DoRtcNumberAuth(DoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DoRtcNumberAuthWithOptions(request, runtime);
        }

        public async Task<DoRtcNumberAuthResponse> DoRtcNumberAuthAsync(DoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DoRtcNumberAuthWithOptionsAsync(request, runtime);
        }

        public UndoRtcNumberAuthResponse UndoRtcNumberAuthWithOptions(UndoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UndoRtcNumberAuthResponse>(DoRequest("UndoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UndoRtcNumberAuthResponse> UndoRtcNumberAuthWithOptionsAsync(UndoRtcNumberAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UndoRtcNumberAuthResponse>(await DoRequestAsync("UndoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public UndoRtcNumberAuthResponse UndoRtcNumberAuth(UndoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UndoRtcNumberAuthWithOptions(request, runtime);
        }

        public async Task<UndoRtcNumberAuthResponse> UndoRtcNumberAuthAsync(UndoRtcNumberAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UndoRtcNumberAuthWithOptionsAsync(request, runtime);
        }

        public QueryRtcNumberAuthStatusResponse QueryRtcNumberAuthStatusWithOptions(QueryRtcNumberAuthStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRtcNumberAuthStatusResponse>(DoRequest("QueryRtcNumberAuthStatus", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRtcNumberAuthStatusResponse> QueryRtcNumberAuthStatusWithOptionsAsync(QueryRtcNumberAuthStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRtcNumberAuthStatusResponse>(await DoRequestAsync("QueryRtcNumberAuthStatus", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryRtcNumberAuthStatusResponse QueryRtcNumberAuthStatus(QueryRtcNumberAuthStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRtcNumberAuthStatusWithOptions(request, runtime);
        }

        public async Task<QueryRtcNumberAuthStatusResponse> QueryRtcNumberAuthStatusAsync(QueryRtcNumberAuthStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRtcNumberAuthStatusWithOptionsAsync(request, runtime);
        }

        public ListOrderedNumbersResponse ListOrderedNumbersWithOptions(ListOrderedNumbersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOrderedNumbersResponse>(DoRequest("ListOrderedNumbers", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListOrderedNumbersResponse> ListOrderedNumbersWithOptionsAsync(ListOrderedNumbersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOrderedNumbersResponse>(await DoRequestAsync("ListOrderedNumbers", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public ListOrderedNumbersResponse ListOrderedNumbers(ListOrderedNumbersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListOrderedNumbersWithOptions(request, runtime);
        }

        public async Task<ListOrderedNumbersResponse> ListOrderedNumbersAsync(ListOrderedNumbersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListOrderedNumbersWithOptionsAsync(request, runtime);
        }

        public StartMicroOutboundResponse StartMicroOutboundWithOptions(StartMicroOutboundRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartMicroOutboundResponse>(DoRequest("StartMicroOutbound", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StartMicroOutboundResponse> StartMicroOutboundWithOptionsAsync(StartMicroOutboundRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartMicroOutboundResponse>(await DoRequestAsync("StartMicroOutbound", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public StartMicroOutboundResponse StartMicroOutbound(StartMicroOutboundRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartMicroOutboundWithOptions(request, runtime);
        }

        public async Task<StartMicroOutboundResponse> StartMicroOutboundAsync(StartMicroOutboundRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartMicroOutboundWithOptionsAsync(request, runtime);
        }

        public ListOutboundStrategiesResponse ListOutboundStrategiesWithOptions(ListOutboundStrategiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOutboundStrategiesResponse>(DoRequest("ListOutboundStrategies", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListOutboundStrategiesResponse> ListOutboundStrategiesWithOptionsAsync(ListOutboundStrategiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListOutboundStrategiesResponse>(await DoRequestAsync("ListOutboundStrategies", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public ListOutboundStrategiesResponse ListOutboundStrategies(ListOutboundStrategiesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListOutboundStrategiesWithOptions(request, runtime);
        }

        public async Task<ListOutboundStrategiesResponse> ListOutboundStrategiesAsync(ListOutboundStrategiesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListOutboundStrategiesWithOptionsAsync(request, runtime);
        }

        public DescribeRecordDataResponse DescribeRecordDataWithOptions(DescribeRecordDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordDataResponse>(DoRequest("DescribeRecordData", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRecordDataResponse> DescribeRecordDataWithOptionsAsync(DescribeRecordDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordDataResponse>(await DoRequestAsync("DescribeRecordData", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRecordDataResponse DescribeRecordData(DescribeRecordDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRecordDataWithOptions(request, runtime);
        }

        public async Task<DescribeRecordDataResponse> DescribeRecordDataAsync(DescribeRecordDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRecordDataWithOptionsAsync(request, runtime);
        }

        public QueryVoipNumberBindInfosResponse QueryVoipNumberBindInfosWithOptions(QueryVoipNumberBindInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryVoipNumberBindInfosResponse>(DoRequest("QueryVoipNumberBindInfos", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryVoipNumberBindInfosResponse> QueryVoipNumberBindInfosWithOptionsAsync(QueryVoipNumberBindInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryVoipNumberBindInfosResponse>(await DoRequestAsync("QueryVoipNumberBindInfos", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryVoipNumberBindInfosResponse QueryVoipNumberBindInfos(QueryVoipNumberBindInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryVoipNumberBindInfosWithOptions(request, runtime);
        }

        public async Task<QueryVoipNumberBindInfosResponse> QueryVoipNumberBindInfosAsync(QueryVoipNumberBindInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryVoipNumberBindInfosWithOptionsAsync(request, runtime);
        }

        public ReportVoipProblemsResponse ReportVoipProblemsWithOptions(ReportVoipProblemsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReportVoipProblemsResponse>(DoRequest("ReportVoipProblems", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ReportVoipProblemsResponse> ReportVoipProblemsWithOptionsAsync(ReportVoipProblemsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ReportVoipProblemsResponse>(await DoRequestAsync("ReportVoipProblems", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public ReportVoipProblemsResponse ReportVoipProblems(ReportVoipProblemsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ReportVoipProblemsWithOptions(request, runtime);
        }

        public async Task<ReportVoipProblemsResponse> ReportVoipProblemsAsync(ReportVoipProblemsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ReportVoipProblemsWithOptionsAsync(request, runtime);
        }

        public UnbindNumberAndVoipIdResponse UnbindNumberAndVoipIdWithOptions(UnbindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindNumberAndVoipIdResponse>(DoRequest("UnbindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnbindNumberAndVoipIdResponse> UnbindNumberAndVoipIdWithOptionsAsync(UnbindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindNumberAndVoipIdResponse>(await DoRequestAsync("UnbindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public UnbindNumberAndVoipIdResponse UnbindNumberAndVoipId(UnbindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnbindNumberAndVoipIdWithOptions(request, runtime);
        }

        public async Task<UnbindNumberAndVoipIdResponse> UnbindNumberAndVoipIdAsync(UnbindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnbindNumberAndVoipIdWithOptionsAsync(request, runtime);
        }

        public BindNumberAndVoipIdResponse BindNumberAndVoipIdWithOptions(BindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindNumberAndVoipIdResponse>(DoRequest("BindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<BindNumberAndVoipIdResponse> BindNumberAndVoipIdWithOptionsAsync(BindNumberAndVoipIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindNumberAndVoipIdResponse>(await DoRequestAsync("BindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public BindNumberAndVoipIdResponse BindNumberAndVoipId(BindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BindNumberAndVoipIdWithOptions(request, runtime);
        }

        public async Task<BindNumberAndVoipIdResponse> BindNumberAndVoipIdAsync(BindNumberAndVoipIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BindNumberAndVoipIdWithOptionsAsync(request, runtime);
        }

        public CancelRobotTaskResponse CancelRobotTaskWithOptions(CancelRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelRobotTaskResponse>(DoRequest("CancelRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelRobotTaskResponse> CancelRobotTaskWithOptionsAsync(CancelRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelRobotTaskResponse>(await DoRequestAsync("CancelRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public CancelRobotTaskResponse CancelRobotTask(CancelRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelRobotTaskWithOptions(request, runtime);
        }

        public async Task<CancelRobotTaskResponse> CancelRobotTaskAsync(CancelRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelRobotTaskWithOptionsAsync(request, runtime);
        }

        public UploadRobotTaskCalledFileResponse UploadRobotTaskCalledFileWithOptions(UploadRobotTaskCalledFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UploadRobotTaskCalledFileResponse>(DoRequest("UploadRobotTaskCalledFile", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UploadRobotTaskCalledFileResponse> UploadRobotTaskCalledFileWithOptionsAsync(UploadRobotTaskCalledFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UploadRobotTaskCalledFileResponse>(await DoRequestAsync("UploadRobotTaskCalledFile", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public UploadRobotTaskCalledFileResponse UploadRobotTaskCalledFile(UploadRobotTaskCalledFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UploadRobotTaskCalledFileWithOptions(request, runtime);
        }

        public async Task<UploadRobotTaskCalledFileResponse> UploadRobotTaskCalledFileAsync(UploadRobotTaskCalledFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UploadRobotTaskCalledFileWithOptionsAsync(request, runtime);
        }

        public DeleteRobotTaskResponse DeleteRobotTaskWithOptions(DeleteRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRobotTaskResponse>(DoRequest("DeleteRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRobotTaskResponse> DeleteRobotTaskWithOptionsAsync(DeleteRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRobotTaskResponse>(await DoRequestAsync("DeleteRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public DeleteRobotTaskResponse DeleteRobotTask(DeleteRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRobotTaskWithOptions(request, runtime);
        }

        public async Task<DeleteRobotTaskResponse> DeleteRobotTaskAsync(DeleteRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRobotTaskWithOptionsAsync(request, runtime);
        }

        public StopRobotTaskResponse StopRobotTaskWithOptions(StopRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopRobotTaskResponse>(DoRequest("StopRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopRobotTaskResponse> StopRobotTaskWithOptionsAsync(StopRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopRobotTaskResponse>(await DoRequestAsync("StopRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public StopRobotTaskResponse StopRobotTask(StopRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopRobotTaskWithOptions(request, runtime);
        }

        public async Task<StopRobotTaskResponse> StopRobotTaskAsync(StopRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopRobotTaskWithOptionsAsync(request, runtime);
        }

        public QueryRobotTaskCallDetailResponse QueryRobotTaskCallDetailWithOptions(QueryRobotTaskCallDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallDetailResponse>(DoRequest("QueryRobotTaskCallDetail", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRobotTaskCallDetailResponse> QueryRobotTaskCallDetailWithOptionsAsync(QueryRobotTaskCallDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallDetailResponse>(await DoRequestAsync("QueryRobotTaskCallDetail", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryRobotTaskCallDetailResponse QueryRobotTaskCallDetail(QueryRobotTaskCallDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskCallDetailWithOptions(request, runtime);
        }

        public async Task<QueryRobotTaskCallDetailResponse> QueryRobotTaskCallDetailAsync(QueryRobotTaskCallDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskCallDetailWithOptionsAsync(request, runtime);
        }

        public QueryRobotv2AllListResponse QueryRobotv2AllListWithOptions(QueryRobotv2AllListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotv2AllListResponse>(DoRequest("QueryRobotv2AllList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRobotv2AllListResponse> QueryRobotv2AllListWithOptionsAsync(QueryRobotv2AllListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotv2AllListResponse>(await DoRequestAsync("QueryRobotv2AllList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryRobotv2AllListResponse QueryRobotv2AllList(QueryRobotv2AllListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotv2AllListWithOptions(request, runtime);
        }

        public async Task<QueryRobotv2AllListResponse> QueryRobotv2AllListAsync(QueryRobotv2AllListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotv2AllListWithOptionsAsync(request, runtime);
        }

        public QueryRobotTaskDetailResponse QueryRobotTaskDetailWithOptions(QueryRobotTaskDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskDetailResponse>(DoRequest("QueryRobotTaskDetail", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRobotTaskDetailResponse> QueryRobotTaskDetailWithOptionsAsync(QueryRobotTaskDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskDetailResponse>(await DoRequestAsync("QueryRobotTaskDetail", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryRobotTaskDetailResponse QueryRobotTaskDetail(QueryRobotTaskDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskDetailWithOptions(request, runtime);
        }

        public async Task<QueryRobotTaskDetailResponse> QueryRobotTaskDetailAsync(QueryRobotTaskDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskDetailWithOptionsAsync(request, runtime);
        }

        public QueryRobotTaskCallListResponse QueryRobotTaskCallListWithOptions(QueryRobotTaskCallListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallListResponse>(DoRequest("QueryRobotTaskCallList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRobotTaskCallListResponse> QueryRobotTaskCallListWithOptionsAsync(QueryRobotTaskCallListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskCallListResponse>(await DoRequestAsync("QueryRobotTaskCallList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryRobotTaskCallListResponse QueryRobotTaskCallList(QueryRobotTaskCallListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskCallListWithOptions(request, runtime);
        }

        public async Task<QueryRobotTaskCallListResponse> QueryRobotTaskCallListAsync(QueryRobotTaskCallListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskCallListWithOptionsAsync(request, runtime);
        }

        public StartRobotTaskResponse StartRobotTaskWithOptions(StartRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartRobotTaskResponse>(DoRequest("StartRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StartRobotTaskResponse> StartRobotTaskWithOptionsAsync(StartRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartRobotTaskResponse>(await DoRequestAsync("StartRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public StartRobotTaskResponse StartRobotTask(StartRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartRobotTaskWithOptions(request, runtime);
        }

        public async Task<StartRobotTaskResponse> StartRobotTaskAsync(StartRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartRobotTaskWithOptionsAsync(request, runtime);
        }

        public QueryRobotTaskListResponse QueryRobotTaskListWithOptions(QueryRobotTaskListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskListResponse>(DoRequest("QueryRobotTaskList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRobotTaskListResponse> QueryRobotTaskListWithOptionsAsync(QueryRobotTaskListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotTaskListResponse>(await DoRequestAsync("QueryRobotTaskList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryRobotTaskListResponse QueryRobotTaskList(QueryRobotTaskListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotTaskListWithOptions(request, runtime);
        }

        public async Task<QueryRobotTaskListResponse> QueryRobotTaskListAsync(QueryRobotTaskListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotTaskListWithOptionsAsync(request, runtime);
        }

        public CreateRobotTaskResponse CreateRobotTaskWithOptions(CreateRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRobotTaskResponse>(DoRequest("CreateRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRobotTaskResponse> CreateRobotTaskWithOptionsAsync(CreateRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRobotTaskResponse>(await DoRequestAsync("CreateRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public CreateRobotTaskResponse CreateRobotTask(CreateRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRobotTaskWithOptions(request, runtime);
        }

        public async Task<CreateRobotTaskResponse> CreateRobotTaskAsync(CreateRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRobotTaskWithOptionsAsync(request, runtime);
        }

        public CancelOrderRobotTaskResponse CancelOrderRobotTaskWithOptions(CancelOrderRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelOrderRobotTaskResponse>(DoRequest("CancelOrderRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelOrderRobotTaskResponse> CancelOrderRobotTaskWithOptionsAsync(CancelOrderRobotTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelOrderRobotTaskResponse>(await DoRequestAsync("CancelOrderRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public CancelOrderRobotTaskResponse CancelOrderRobotTask(CancelOrderRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelOrderRobotTaskWithOptions(request, runtime);
        }

        public async Task<CancelOrderRobotTaskResponse> CancelOrderRobotTaskAsync(CancelOrderRobotTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelOrderRobotTaskWithOptionsAsync(request, runtime);
        }

        public SmartCallOperateResponse SmartCallOperateWithOptions(SmartCallOperateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallOperateResponse>(DoRequest("SmartCallOperate", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SmartCallOperateResponse> SmartCallOperateWithOptionsAsync(SmartCallOperateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallOperateResponse>(await DoRequestAsync("SmartCallOperate", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public SmartCallOperateResponse SmartCallOperate(SmartCallOperateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SmartCallOperateWithOptions(request, runtime);
        }

        public async Task<SmartCallOperateResponse> SmartCallOperateAsync(SmartCallOperateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SmartCallOperateWithOptionsAsync(request, runtime);
        }

        public QueryRobotInfoListResponse QueryRobotInfoListWithOptions(QueryRobotInfoListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotInfoListResponse>(DoRequest("QueryRobotInfoList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRobotInfoListResponse> QueryRobotInfoListWithOptionsAsync(QueryRobotInfoListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRobotInfoListResponse>(await DoRequestAsync("QueryRobotInfoList", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryRobotInfoListResponse QueryRobotInfoList(QueryRobotInfoListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRobotInfoListWithOptions(request, runtime);
        }

        public async Task<QueryRobotInfoListResponse> QueryRobotInfoListAsync(QueryRobotInfoListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRobotInfoListWithOptionsAsync(request, runtime);
        }

        public BatchRobotSmartCallResponse BatchRobotSmartCallWithOptions(BatchRobotSmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchRobotSmartCallResponse>(DoRequest("BatchRobotSmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<BatchRobotSmartCallResponse> BatchRobotSmartCallWithOptionsAsync(BatchRobotSmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchRobotSmartCallResponse>(await DoRequestAsync("BatchRobotSmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public BatchRobotSmartCallResponse BatchRobotSmartCall(BatchRobotSmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BatchRobotSmartCallWithOptions(request, runtime);
        }

        public async Task<BatchRobotSmartCallResponse> BatchRobotSmartCallAsync(BatchRobotSmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BatchRobotSmartCallWithOptionsAsync(request, runtime);
        }

        public QueryCallDetailByTaskIdResponse QueryCallDetailByTaskIdWithOptions(QueryCallDetailByTaskIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByTaskIdResponse>(DoRequest("QueryCallDetailByTaskId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryCallDetailByTaskIdResponse> QueryCallDetailByTaskIdWithOptionsAsync(QueryCallDetailByTaskIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByTaskIdResponse>(await DoRequestAsync("QueryCallDetailByTaskId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryCallDetailByTaskIdResponse QueryCallDetailByTaskId(QueryCallDetailByTaskIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCallDetailByTaskIdWithOptions(request, runtime);
        }

        public async Task<QueryCallDetailByTaskIdResponse> QueryCallDetailByTaskIdAsync(QueryCallDetailByTaskIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCallDetailByTaskIdWithOptionsAsync(request, runtime);
        }

        public GetRtcTokenResponse GetRtcTokenWithOptions(GetRtcTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRtcTokenResponse>(DoRequest("GetRtcToken", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetRtcTokenResponse> GetRtcTokenWithOptionsAsync(GetRtcTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRtcTokenResponse>(await DoRequestAsync("GetRtcToken", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public GetRtcTokenResponse GetRtcToken(GetRtcTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetRtcTokenWithOptions(request, runtime);
        }

        public async Task<GetRtcTokenResponse> GetRtcTokenAsync(GetRtcTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetRtcTokenWithOptionsAsync(request, runtime);
        }

        public AddRtcAccountResponse AddRtcAccountWithOptions(AddRtcAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddRtcAccountResponse>(DoRequest("AddRtcAccount", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddRtcAccountResponse> AddRtcAccountWithOptionsAsync(AddRtcAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddRtcAccountResponse>(await DoRequestAsync("AddRtcAccount", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public AddRtcAccountResponse AddRtcAccount(AddRtcAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddRtcAccountWithOptions(request, runtime);
        }

        public async Task<AddRtcAccountResponse> AddRtcAccountAsync(AddRtcAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddRtcAccountWithOptionsAsync(request, runtime);
        }

        public VoipAddAccountResponse VoipAddAccountWithOptions(VoipAddAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipAddAccountResponse>(DoRequest("VoipAddAccount", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<VoipAddAccountResponse> VoipAddAccountWithOptionsAsync(VoipAddAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipAddAccountResponse>(await DoRequestAsync("VoipAddAccount", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public VoipAddAccountResponse VoipAddAccount(VoipAddAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return VoipAddAccountWithOptions(request, runtime);
        }

        public async Task<VoipAddAccountResponse> VoipAddAccountAsync(VoipAddAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await VoipAddAccountWithOptionsAsync(request, runtime);
        }

        public VoipGetTokenResponse VoipGetTokenWithOptions(VoipGetTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipGetTokenResponse>(DoRequest("VoipGetToken", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<VoipGetTokenResponse> VoipGetTokenWithOptionsAsync(VoipGetTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<VoipGetTokenResponse>(await DoRequestAsync("VoipGetToken", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public VoipGetTokenResponse VoipGetToken(VoipGetTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return VoipGetTokenWithOptions(request, runtime);
        }

        public async Task<VoipGetTokenResponse> VoipGetTokenAsync(VoipGetTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await VoipGetTokenWithOptionsAsync(request, runtime);
        }

        public SmartCallResponse SmartCallWithOptions(SmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallResponse>(DoRequest("SmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SmartCallResponse> SmartCallWithOptionsAsync(SmartCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SmartCallResponse>(await DoRequestAsync("SmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public SmartCallResponse SmartCall(SmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SmartCallWithOptions(request, runtime);
        }

        public async Task<SmartCallResponse> SmartCallAsync(SmartCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SmartCallWithOptionsAsync(request, runtime);
        }

        public QueryCallDetailByCallIdResponse QueryCallDetailByCallIdWithOptions(QueryCallDetailByCallIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByCallIdResponse>(DoRequest("QueryCallDetailByCallId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryCallDetailByCallIdResponse> QueryCallDetailByCallIdWithOptionsAsync(QueryCallDetailByCallIdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCallDetailByCallIdResponse>(await DoRequestAsync("QueryCallDetailByCallId", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public QueryCallDetailByCallIdResponse QueryCallDetailByCallId(QueryCallDetailByCallIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCallDetailByCallIdWithOptions(request, runtime);
        }

        public async Task<QueryCallDetailByCallIdResponse> QueryCallDetailByCallIdAsync(QueryCallDetailByCallIdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCallDetailByCallIdWithOptionsAsync(request, runtime);
        }

        public CancelCallResponse CancelCallWithOptions(CancelCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCallResponse>(DoRequest("CancelCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelCallResponse> CancelCallWithOptionsAsync(CancelCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelCallResponse>(await DoRequestAsync("CancelCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public CancelCallResponse CancelCall(CancelCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelCallWithOptions(request, runtime);
        }

        public async Task<CancelCallResponse> CancelCallAsync(CancelCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelCallWithOptionsAsync(request, runtime);
        }

        public ClickToDialResponse ClickToDialWithOptions(ClickToDialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClickToDialResponse>(DoRequest("ClickToDial", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ClickToDialResponse> ClickToDialWithOptionsAsync(ClickToDialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ClickToDialResponse>(await DoRequestAsync("ClickToDial", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public ClickToDialResponse ClickToDial(ClickToDialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ClickToDialWithOptions(request, runtime);
        }

        public async Task<ClickToDialResponse> ClickToDialAsync(ClickToDialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ClickToDialWithOptionsAsync(request, runtime);
        }

        public IvrCallResponse IvrCallWithOptions(IvrCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<IvrCallResponse>(DoRequest("IvrCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<IvrCallResponse> IvrCallWithOptionsAsync(IvrCallRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<IvrCallResponse>(await DoRequestAsync("IvrCall", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public IvrCallResponse IvrCall(IvrCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return IvrCallWithOptions(request, runtime);
        }

        public async Task<IvrCallResponse> IvrCallAsync(IvrCallRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await IvrCallWithOptionsAsync(request, runtime);
        }

        public SingleCallByVoiceResponse SingleCallByVoiceWithOptions(SingleCallByVoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByVoiceResponse>(DoRequest("SingleCallByVoice", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SingleCallByVoiceResponse> SingleCallByVoiceWithOptionsAsync(SingleCallByVoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByVoiceResponse>(await DoRequestAsync("SingleCallByVoice", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public SingleCallByVoiceResponse SingleCallByVoice(SingleCallByVoiceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SingleCallByVoiceWithOptions(request, runtime);
        }

        public async Task<SingleCallByVoiceResponse> SingleCallByVoiceAsync(SingleCallByVoiceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SingleCallByVoiceWithOptionsAsync(request, runtime);
        }

        public SingleCallByTtsResponse SingleCallByTtsWithOptions(SingleCallByTtsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByTtsResponse>(DoRequest("SingleCallByTts", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SingleCallByTtsResponse> SingleCallByTtsWithOptionsAsync(SingleCallByTtsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SingleCallByTtsResponse>(await DoRequestAsync("SingleCallByTts", "HTTPS", "POST", "2017-05-25", "AK", null, request.ToMap(), runtime));
        }

        public SingleCallByTtsResponse SingleCallByTts(SingleCallByTtsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SingleCallByTtsWithOptions(request, runtime);
        }

        public async Task<SingleCallByTtsResponse> SingleCallByTtsAsync(SingleCallByTtsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SingleCallByTtsWithOptionsAsync(request, runtime);
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
