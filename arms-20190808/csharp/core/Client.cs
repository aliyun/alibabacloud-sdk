// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.ARMS20190808.Models;

namespace AlibabaCloud.SDK.ARMS20190808
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"ap-northeast-1", "arms.ap-southeast-1.aliyuncs.com"},
                {"ap-south-1", "arms.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-2", "arms.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-3", "arms.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-5", "arms.ap-southeast-1.aliyuncs.com"},
                {"cn-chengdu", "arms.aliyuncs.com"},
                {"cn-huhehaote", "arms.aliyuncs.com"},
                {"eu-central-1", "arms.ap-southeast-1.aliyuncs.com"},
                {"eu-west-1", "arms.ap-southeast-1.aliyuncs.com"},
                {"me-east-1", "arms.ap-southeast-1.aliyuncs.com"},
                {"us-east-1", "arms.ap-southeast-1.aliyuncs.com"},
                {"cn-hangzhou-finance", "arms.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "arms.aliyuncs.com"},
                {"cn-shanghai-finance-1", "arms.aliyuncs.com"},
                {"cn-north-2-gov-1", "arms.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("arms", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public GetMultipleTraceResponse GetMultipleTraceWithOptions(GetMultipleTraceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMultipleTraceResponse>(DoRequest("GetMultipleTrace", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMultipleTraceResponse> GetMultipleTraceWithOptionsAsync(GetMultipleTraceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMultipleTraceResponse>(await DoRequestAsync("GetMultipleTrace", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public GetMultipleTraceResponse GetMultipleTrace(GetMultipleTraceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMultipleTraceWithOptions(request, runtime);
        }

        public async Task<GetMultipleTraceResponse> GetMultipleTraceAsync(GetMultipleTraceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMultipleTraceWithOptionsAsync(request, runtime);
        }

        public SearchTracesByPageResponse SearchTracesByPageWithOptions(SearchTracesByPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTracesByPageResponse>(DoRequest("SearchTracesByPage", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchTracesByPageResponse> SearchTracesByPageWithOptionsAsync(SearchTracesByPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTracesByPageResponse>(await DoRequestAsync("SearchTracesByPage", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchTracesByPageResponse SearchTracesByPage(SearchTracesByPageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchTracesByPageWithOptions(request, runtime);
        }

        public async Task<SearchTracesByPageResponse> SearchTracesByPageAsync(SearchTracesByPageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchTracesByPageWithOptionsAsync(request, runtime);
        }

        public GetStackResponse GetStackWithOptions(GetStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackResponse>(DoRequest("GetStack", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackResponse> GetStackWithOptionsAsync(GetStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackResponse>(await DoRequestAsync("GetStack", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public GetStackResponse GetStack(GetStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackWithOptions(request, runtime);
        }

        public async Task<GetStackResponse> GetStackAsync(GetStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackWithOptionsAsync(request, runtime);
        }

        public DescribeTraceLocationResponse DescribeTraceLocationWithOptions(DescribeTraceLocationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTraceLocationResponse>(DoRequest("DescribeTraceLocation", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTraceLocationResponse> DescribeTraceLocationWithOptionsAsync(DescribeTraceLocationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTraceLocationResponse>(await DoRequestAsync("DescribeTraceLocation", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTraceLocationResponse DescribeTraceLocation(DescribeTraceLocationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTraceLocationWithOptions(request, runtime);
        }

        public async Task<DescribeTraceLocationResponse> DescribeTraceLocationAsync(DescribeTraceLocationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTraceLocationWithOptionsAsync(request, runtime);
        }

        public DeleteTraceAppResponse DeleteTraceAppWithOptions(DeleteTraceAppRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTraceAppResponse>(DoRequest("DeleteTraceApp", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteTraceAppResponse> DeleteTraceAppWithOptionsAsync(DeleteTraceAppRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTraceAppResponse>(await DoRequestAsync("DeleteTraceApp", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public DeleteTraceAppResponse DeleteTraceApp(DeleteTraceAppRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteTraceAppWithOptions(request, runtime);
        }

        public async Task<DeleteTraceAppResponse> DeleteTraceAppAsync(DeleteTraceAppRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteTraceAppWithOptionsAsync(request, runtime);
        }

        public DescribeTraceLicenseKeyResponse DescribeTraceLicenseKeyWithOptions(DescribeTraceLicenseKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTraceLicenseKeyResponse>(DoRequest("DescribeTraceLicenseKey", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTraceLicenseKeyResponse> DescribeTraceLicenseKeyWithOptionsAsync(DescribeTraceLicenseKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTraceLicenseKeyResponse>(await DoRequestAsync("DescribeTraceLicenseKey", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTraceLicenseKeyResponse DescribeTraceLicenseKey(DescribeTraceLicenseKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTraceLicenseKeyWithOptions(request, runtime);
        }

        public async Task<DescribeTraceLicenseKeyResponse> DescribeTraceLicenseKeyAsync(DescribeTraceLicenseKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTraceLicenseKeyWithOptionsAsync(request, runtime);
        }

        public CheckServiceLinkedRoleForDeletingResponse CheckServiceLinkedRoleForDeletingWithOptions(CheckServiceLinkedRoleForDeletingRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckServiceLinkedRoleForDeletingResponse>(DoRequest("CheckServiceLinkedRoleForDeleting", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckServiceLinkedRoleForDeletingResponse> CheckServiceLinkedRoleForDeletingWithOptionsAsync(CheckServiceLinkedRoleForDeletingRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckServiceLinkedRoleForDeletingResponse>(await DoRequestAsync("CheckServiceLinkedRoleForDeleting", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public CheckServiceLinkedRoleForDeletingResponse CheckServiceLinkedRoleForDeleting(CheckServiceLinkedRoleForDeletingRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckServiceLinkedRoleForDeletingWithOptions(request, runtime);
        }

        public async Task<CheckServiceLinkedRoleForDeletingResponse> CheckServiceLinkedRoleForDeletingAsync(CheckServiceLinkedRoleForDeletingRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckServiceLinkedRoleForDeletingWithOptionsAsync(request, runtime);
        }

        public ListDashboardsResponse ListDashboardsWithOptions(ListDashboardsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDashboardsResponse>(DoRequest("ListDashboards", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDashboardsResponse> ListDashboardsWithOptionsAsync(ListDashboardsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDashboardsResponse>(await DoRequestAsync("ListDashboards", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public ListDashboardsResponse ListDashboards(ListDashboardsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDashboardsWithOptions(request, runtime);
        }

        public async Task<ListDashboardsResponse> ListDashboardsAsync(ListDashboardsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDashboardsWithOptionsAsync(request, runtime);
        }

        public GetConsistencySnapshotResponse GetConsistencySnapshotWithOptions(GetConsistencySnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetConsistencySnapshotResponse>(DoRequest("GetConsistencySnapshot", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetConsistencySnapshotResponse> GetConsistencySnapshotWithOptionsAsync(GetConsistencySnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetConsistencySnapshotResponse>(await DoRequestAsync("GetConsistencySnapshot", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public GetConsistencySnapshotResponse GetConsistencySnapshot(GetConsistencySnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetConsistencySnapshotWithOptions(request, runtime);
        }

        public async Task<GetConsistencySnapshotResponse> GetConsistencySnapshotAsync(GetConsistencySnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetConsistencySnapshotWithOptionsAsync(request, runtime);
        }

        public CheckDataConsistencyResponse CheckDataConsistencyWithOptions(CheckDataConsistencyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckDataConsistencyResponse>(DoRequest("CheckDataConsistency", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckDataConsistencyResponse> CheckDataConsistencyWithOptionsAsync(CheckDataConsistencyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckDataConsistencyResponse>(await DoRequestAsync("CheckDataConsistency", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public CheckDataConsistencyResponse CheckDataConsistency(CheckDataConsistencyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckDataConsistencyWithOptions(request, runtime);
        }

        public async Task<CheckDataConsistencyResponse> CheckDataConsistencyAsync(CheckDataConsistencyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckDataConsistencyWithOptionsAsync(request, runtime);
        }

        public AddGrafanaResponse AddGrafanaWithOptions(AddGrafanaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGrafanaResponse>(DoRequest("AddGrafana", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddGrafanaResponse> AddGrafanaWithOptionsAsync(AddGrafanaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGrafanaResponse>(await DoRequestAsync("AddGrafana", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public AddGrafanaResponse AddGrafana(AddGrafanaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddGrafanaWithOptions(request, runtime);
        }

        public async Task<AddGrafanaResponse> AddGrafanaAsync(AddGrafanaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddGrafanaWithOptionsAsync(request, runtime);
        }

        public AddIntegrationResponse AddIntegrationWithOptions(AddIntegrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddIntegrationResponse>(DoRequest("AddIntegration", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddIntegrationResponse> AddIntegrationWithOptionsAsync(AddIntegrationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddIntegrationResponse>(await DoRequestAsync("AddIntegration", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public AddIntegrationResponse AddIntegration(AddIntegrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddIntegrationWithOptions(request, runtime);
        }

        public async Task<AddIntegrationResponse> AddIntegrationAsync(AddIntegrationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddIntegrationWithOptionsAsync(request, runtime);
        }

        public GetTraceResponse GetTraceWithOptions(GetTraceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTraceResponse>(DoRequest("GetTrace", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTraceResponse> GetTraceWithOptionsAsync(GetTraceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTraceResponse>(await DoRequestAsync("GetTrace", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public GetTraceResponse GetTrace(GetTraceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTraceWithOptions(request, runtime);
        }

        public async Task<GetTraceResponse> GetTraceAsync(GetTraceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTraceWithOptionsAsync(request, runtime);
        }

        public ListClusterFromGrafanaResponse ListClusterFromGrafanaWithOptions(ListClusterFromGrafanaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListClusterFromGrafanaResponse>(DoRequest("ListClusterFromGrafana", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListClusterFromGrafanaResponse> ListClusterFromGrafanaWithOptionsAsync(ListClusterFromGrafanaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListClusterFromGrafanaResponse>(await DoRequestAsync("ListClusterFromGrafana", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public ListClusterFromGrafanaResponse ListClusterFromGrafana(ListClusterFromGrafanaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListClusterFromGrafanaWithOptions(request, runtime);
        }

        public async Task<ListClusterFromGrafanaResponse> ListClusterFromGrafanaAsync(ListClusterFromGrafanaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListClusterFromGrafanaWithOptionsAsync(request, runtime);
        }

        public SearchTracesResponse SearchTracesWithOptions(SearchTracesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTracesResponse>(DoRequest("SearchTraces", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchTracesResponse> SearchTracesWithOptionsAsync(SearchTracesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTracesResponse>(await DoRequestAsync("SearchTraces", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchTracesResponse SearchTraces(SearchTracesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchTracesWithOptions(request, runtime);
        }

        public async Task<SearchTracesResponse> SearchTracesAsync(SearchTracesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchTracesWithOptionsAsync(request, runtime);
        }

        public GetPrometheusApiTokenResponse GetPrometheusApiTokenWithOptions(GetPrometheusApiTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPrometheusApiTokenResponse>(DoRequest("GetPrometheusApiToken", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetPrometheusApiTokenResponse> GetPrometheusApiTokenWithOptionsAsync(GetPrometheusApiTokenRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPrometheusApiTokenResponse>(await DoRequestAsync("GetPrometheusApiToken", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public GetPrometheusApiTokenResponse GetPrometheusApiToken(GetPrometheusApiTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetPrometheusApiTokenWithOptions(request, runtime);
        }

        public async Task<GetPrometheusApiTokenResponse> GetPrometheusApiTokenAsync(GetPrometheusApiTokenRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetPrometheusApiTokenWithOptionsAsync(request, runtime);
        }

        public SetRetcodeShareStatusResponse SetRetcodeShareStatusWithOptions(SetRetcodeShareStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetRetcodeShareStatusResponse>(DoRequest("SetRetcodeShareStatus", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetRetcodeShareStatusResponse> SetRetcodeShareStatusWithOptionsAsync(SetRetcodeShareStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetRetcodeShareStatusResponse>(await DoRequestAsync("SetRetcodeShareStatus", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SetRetcodeShareStatusResponse SetRetcodeShareStatus(SetRetcodeShareStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetRetcodeShareStatusWithOptions(request, runtime);
        }

        public async Task<SetRetcodeShareStatusResponse> SetRetcodeShareStatusAsync(SetRetcodeShareStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetRetcodeShareStatusWithOptionsAsync(request, runtime);
        }

        public GetRetcodeShareUrlResponse GetRetcodeShareUrlWithOptions(GetRetcodeShareUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRetcodeShareUrlResponse>(DoRequest("GetRetcodeShareUrl", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetRetcodeShareUrlResponse> GetRetcodeShareUrlWithOptionsAsync(GetRetcodeShareUrlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRetcodeShareUrlResponse>(await DoRequestAsync("GetRetcodeShareUrl", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public GetRetcodeShareUrlResponse GetRetcodeShareUrl(GetRetcodeShareUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetRetcodeShareUrlWithOptions(request, runtime);
        }

        public async Task<GetRetcodeShareUrlResponse> GetRetcodeShareUrlAsync(GetRetcodeShareUrlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetRetcodeShareUrlWithOptionsAsync(request, runtime);
        }

        public ListPromClustersResponse ListPromClustersWithOptions(ListPromClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPromClustersResponse>(DoRequest("ListPromClusters", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListPromClustersResponse> ListPromClustersWithOptionsAsync(ListPromClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListPromClustersResponse>(await DoRequestAsync("ListPromClusters", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public ListPromClustersResponse ListPromClusters(ListPromClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListPromClustersWithOptions(request, runtime);
        }

        public async Task<ListPromClustersResponse> ListPromClustersAsync(ListPromClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListPromClustersWithOptionsAsync(request, runtime);
        }

        public UpdateAlertRuleResponse UpdateAlertRuleWithOptions(UpdateAlertRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAlertRuleResponse>(DoRequest("UpdateAlertRule", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateAlertRuleResponse> UpdateAlertRuleWithOptionsAsync(UpdateAlertRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAlertRuleResponse>(await DoRequestAsync("UpdateAlertRule", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public UpdateAlertRuleResponse UpdateAlertRule(UpdateAlertRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAlertRuleWithOptions(request, runtime);
        }

        public async Task<UpdateAlertRuleResponse> UpdateAlertRuleAsync(UpdateAlertRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAlertRuleWithOptionsAsync(request, runtime);
        }

        public StartAlertResponse StartAlertWithOptions(StartAlertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartAlertResponse>(DoRequest("StartAlert", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StartAlertResponse> StartAlertWithOptionsAsync(StartAlertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartAlertResponse>(await DoRequestAsync("StartAlert", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public StartAlertResponse StartAlert(StartAlertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartAlertWithOptions(request, runtime);
        }

        public async Task<StartAlertResponse> StartAlertAsync(StartAlertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartAlertWithOptionsAsync(request, runtime);
        }

        public StopAlertResponse StopAlertWithOptions(StopAlertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopAlertResponse>(DoRequest("StopAlert", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopAlertResponse> StopAlertWithOptionsAsync(StopAlertRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopAlertResponse>(await DoRequestAsync("StopAlert", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public StopAlertResponse StopAlert(StopAlertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopAlertWithOptions(request, runtime);
        }

        public async Task<StopAlertResponse> StopAlertAsync(StopAlertRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopAlertWithOptionsAsync(request, runtime);
        }

        public SearchEventsResponse SearchEventsWithOptions(SearchEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchEventsResponse>(DoRequest("SearchEvents", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchEventsResponse> SearchEventsWithOptionsAsync(SearchEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchEventsResponse>(await DoRequestAsync("SearchEvents", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchEventsResponse SearchEvents(SearchEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchEventsWithOptions(request, runtime);
        }

        public async Task<SearchEventsResponse> SearchEventsAsync(SearchEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchEventsWithOptionsAsync(request, runtime);
        }

        public SearchAlertHistoriesResponse SearchAlertHistoriesWithOptions(SearchAlertHistoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertHistoriesResponse>(DoRequest("SearchAlertHistories", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchAlertHistoriesResponse> SearchAlertHistoriesWithOptionsAsync(SearchAlertHistoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertHistoriesResponse>(await DoRequestAsync("SearchAlertHistories", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchAlertHistoriesResponse SearchAlertHistories(SearchAlertHistoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchAlertHistoriesWithOptions(request, runtime);
        }

        public async Task<SearchAlertHistoriesResponse> SearchAlertHistoriesAsync(SearchAlertHistoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchAlertHistoriesWithOptionsAsync(request, runtime);
        }

        public UpdateAlertContactResponse UpdateAlertContactWithOptions(UpdateAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAlertContactResponse>(DoRequest("UpdateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateAlertContactResponse> UpdateAlertContactWithOptionsAsync(UpdateAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAlertContactResponse>(await DoRequestAsync("UpdateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public UpdateAlertContactResponse UpdateAlertContact(UpdateAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAlertContactWithOptions(request, runtime);
        }

        public async Task<UpdateAlertContactResponse> UpdateAlertContactAsync(UpdateAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAlertContactWithOptionsAsync(request, runtime);
        }

        public DeleteAlertContactGroupResponse DeleteAlertContactGroupWithOptions(DeleteAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAlertContactGroupResponse>(DoRequest("DeleteAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAlertContactGroupResponse> DeleteAlertContactGroupWithOptionsAsync(DeleteAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAlertContactGroupResponse>(await DoRequestAsync("DeleteAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAlertContactGroupResponse DeleteAlertContactGroup(DeleteAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAlertContactGroupWithOptions(request, runtime);
        }

        public async Task<DeleteAlertContactGroupResponse> DeleteAlertContactGroupAsync(DeleteAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAlertContactGroupWithOptionsAsync(request, runtime);
        }

        public DeleteAlertContactResponse DeleteAlertContactWithOptions(DeleteAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAlertContactResponse>(DoRequest("DeleteAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAlertContactResponse> DeleteAlertContactWithOptionsAsync(DeleteAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAlertContactResponse>(await DoRequestAsync("DeleteAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAlertContactResponse DeleteAlertContact(DeleteAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAlertContactWithOptions(request, runtime);
        }

        public async Task<DeleteAlertContactResponse> DeleteAlertContactAsync(DeleteAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAlertContactWithOptionsAsync(request, runtime);
        }

        public UpdateAlertContactGroupResponse UpdateAlertContactGroupWithOptions(UpdateAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAlertContactGroupResponse>(DoRequest("UpdateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateAlertContactGroupResponse> UpdateAlertContactGroupWithOptionsAsync(UpdateAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAlertContactGroupResponse>(await DoRequestAsync("UpdateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public UpdateAlertContactGroupResponse UpdateAlertContactGroup(UpdateAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAlertContactGroupWithOptions(request, runtime);
        }

        public async Task<UpdateAlertContactGroupResponse> UpdateAlertContactGroupAsync(UpdateAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAlertContactGroupWithOptionsAsync(request, runtime);
        }

        public ImportCustomAlertRulesResponse ImportCustomAlertRulesWithOptions(ImportCustomAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportCustomAlertRulesResponse>(DoRequest("ImportCustomAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ImportCustomAlertRulesResponse> ImportCustomAlertRulesWithOptionsAsync(ImportCustomAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportCustomAlertRulesResponse>(await DoRequestAsync("ImportCustomAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public ImportCustomAlertRulesResponse ImportCustomAlertRules(ImportCustomAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ImportCustomAlertRulesWithOptions(request, runtime);
        }

        public async Task<ImportCustomAlertRulesResponse> ImportCustomAlertRulesAsync(ImportCustomAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ImportCustomAlertRulesWithOptionsAsync(request, runtime);
        }

        public SearchAlertRulesResponse SearchAlertRulesWithOptions(SearchAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertRulesResponse>(DoRequest("SearchAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchAlertRulesResponse> SearchAlertRulesWithOptionsAsync(SearchAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertRulesResponse>(await DoRequestAsync("SearchAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchAlertRulesResponse SearchAlertRules(SearchAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchAlertRulesWithOptions(request, runtime);
        }

        public async Task<SearchAlertRulesResponse> SearchAlertRulesAsync(SearchAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchAlertRulesWithOptionsAsync(request, runtime);
        }

        public DeleteAlertRulesResponse DeleteAlertRulesWithOptions(DeleteAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAlertRulesResponse>(DoRequest("DeleteAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAlertRulesResponse> DeleteAlertRulesWithOptionsAsync(DeleteAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAlertRulesResponse>(await DoRequestAsync("DeleteAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAlertRulesResponse DeleteAlertRules(DeleteAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAlertRulesWithOptions(request, runtime);
        }

        public async Task<DeleteAlertRulesResponse> DeleteAlertRulesAsync(DeleteAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAlertRulesWithOptionsAsync(request, runtime);
        }

        public CreateRetcodeAppResponse CreateRetcodeAppWithOptions(CreateRetcodeAppRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRetcodeAppResponse>(DoRequest("CreateRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRetcodeAppResponse> CreateRetcodeAppWithOptionsAsync(CreateRetcodeAppRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRetcodeAppResponse>(await DoRequestAsync("CreateRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public CreateRetcodeAppResponse CreateRetcodeApp(CreateRetcodeAppRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRetcodeAppWithOptions(request, runtime);
        }

        public async Task<CreateRetcodeAppResponse> CreateRetcodeAppAsync(CreateRetcodeAppRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRetcodeAppWithOptionsAsync(request, runtime);
        }

        public DeleteRetcodeAppResponse DeleteRetcodeAppWithOptions(DeleteRetcodeAppRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRetcodeAppResponse>(DoRequest("DeleteRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRetcodeAppResponse> DeleteRetcodeAppWithOptionsAsync(DeleteRetcodeAppRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRetcodeAppResponse>(await DoRequestAsync("DeleteRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public DeleteRetcodeAppResponse DeleteRetcodeApp(DeleteRetcodeAppRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRetcodeAppWithOptions(request, runtime);
        }

        public async Task<DeleteRetcodeAppResponse> DeleteRetcodeAppAsync(DeleteRetcodeAppRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRetcodeAppWithOptionsAsync(request, runtime);
        }

        public QueryDatasetResponse QueryDatasetWithOptions(QueryDatasetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryDatasetResponse>(DoRequest("QueryDataset", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryDatasetResponse> QueryDatasetWithOptionsAsync(QueryDatasetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryDatasetResponse>(await DoRequestAsync("QueryDataset", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public QueryDatasetResponse QueryDataset(QueryDatasetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryDatasetWithOptions(request, runtime);
        }

        public async Task<QueryDatasetResponse> QueryDatasetAsync(QueryDatasetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryDatasetWithOptionsAsync(request, runtime);
        }

        public QueryMetricResponse QueryMetricWithOptions(QueryMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryMetricResponse>(DoRequest("QueryMetric", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryMetricResponse> QueryMetricWithOptionsAsync(QueryMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryMetricResponse>(await DoRequestAsync("QueryMetric", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public QueryMetricResponse QueryMetric(QueryMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryMetricWithOptions(request, runtime);
        }

        public async Task<QueryMetricResponse> QueryMetricAsync(QueryMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryMetricWithOptionsAsync(request, runtime);
        }

        public CreateAlertContactResponse CreateAlertContactWithOptions(CreateAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAlertContactResponse>(DoRequest("CreateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAlertContactResponse> CreateAlertContactWithOptionsAsync(CreateAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAlertContactResponse>(await DoRequestAsync("CreateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public CreateAlertContactResponse CreateAlertContact(CreateAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAlertContactWithOptions(request, runtime);
        }

        public async Task<CreateAlertContactResponse> CreateAlertContactAsync(CreateAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAlertContactWithOptionsAsync(request, runtime);
        }

        public CreateAlertContactGroupResponse CreateAlertContactGroupWithOptions(CreateAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAlertContactGroupResponse>(DoRequest("CreateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAlertContactGroupResponse> CreateAlertContactGroupWithOptionsAsync(CreateAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAlertContactGroupResponse>(await DoRequestAsync("CreateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public CreateAlertContactGroupResponse CreateAlertContactGroup(CreateAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAlertContactGroupWithOptions(request, runtime);
        }

        public async Task<CreateAlertContactGroupResponse> CreateAlertContactGroupAsync(CreateAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAlertContactGroupWithOptionsAsync(request, runtime);
        }

        public SearchAlertContactResponse SearchAlertContactWithOptions(SearchAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertContactResponse>(DoRequest("SearchAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchAlertContactResponse> SearchAlertContactWithOptionsAsync(SearchAlertContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertContactResponse>(await DoRequestAsync("SearchAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchAlertContactResponse SearchAlertContact(SearchAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchAlertContactWithOptions(request, runtime);
        }

        public async Task<SearchAlertContactResponse> SearchAlertContactAsync(SearchAlertContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchAlertContactWithOptionsAsync(request, runtime);
        }

        public SearchAlertContactGroupResponse SearchAlertContactGroupWithOptions(SearchAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertContactGroupResponse>(DoRequest("SearchAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchAlertContactGroupResponse> SearchAlertContactGroupWithOptionsAsync(SearchAlertContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchAlertContactGroupResponse>(await DoRequestAsync("SearchAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchAlertContactGroupResponse SearchAlertContactGroup(SearchAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchAlertContactGroupWithOptions(request, runtime);
        }

        public async Task<SearchAlertContactGroupResponse> SearchAlertContactGroupAsync(SearchAlertContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchAlertContactGroupWithOptionsAsync(request, runtime);
        }

        public ImportAppAlertRulesResponse ImportAppAlertRulesWithOptions(ImportAppAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportAppAlertRulesResponse>(DoRequest("ImportAppAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ImportAppAlertRulesResponse> ImportAppAlertRulesWithOptionsAsync(ImportAppAlertRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ImportAppAlertRulesResponse>(await DoRequestAsync("ImportAppAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public ImportAppAlertRulesResponse ImportAppAlertRules(ImportAppAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ImportAppAlertRulesWithOptions(request, runtime);
        }

        public async Task<ImportAppAlertRulesResponse> ImportAppAlertRulesAsync(ImportAppAlertRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ImportAppAlertRulesWithOptionsAsync(request, runtime);
        }

        public SearchRetcodeAppByPageResponse SearchRetcodeAppByPageWithOptions(SearchRetcodeAppByPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchRetcodeAppByPageResponse>(DoRequest("SearchRetcodeAppByPage", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchRetcodeAppByPageResponse> SearchRetcodeAppByPageWithOptionsAsync(SearchRetcodeAppByPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchRetcodeAppByPageResponse>(await DoRequestAsync("SearchRetcodeAppByPage", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchRetcodeAppByPageResponse SearchRetcodeAppByPage(SearchRetcodeAppByPageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchRetcodeAppByPageWithOptions(request, runtime);
        }

        public async Task<SearchRetcodeAppByPageResponse> SearchRetcodeAppByPageAsync(SearchRetcodeAppByPageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchRetcodeAppByPageWithOptionsAsync(request, runtime);
        }

        public SearchTraceAppByNameResponse SearchTraceAppByNameWithOptions(SearchTraceAppByNameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTraceAppByNameResponse>(DoRequest("SearchTraceAppByName", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchTraceAppByNameResponse> SearchTraceAppByNameWithOptionsAsync(SearchTraceAppByNameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTraceAppByNameResponse>(await DoRequestAsync("SearchTraceAppByName", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchTraceAppByNameResponse SearchTraceAppByName(SearchTraceAppByNameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchTraceAppByNameWithOptions(request, runtime);
        }

        public async Task<SearchTraceAppByNameResponse> SearchTraceAppByNameAsync(SearchTraceAppByNameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchTraceAppByNameWithOptionsAsync(request, runtime);
        }

        public SearchTraceAppByPageResponse SearchTraceAppByPageWithOptions(SearchTraceAppByPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTraceAppByPageResponse>(DoRequest("SearchTraceAppByPage", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchTraceAppByPageResponse> SearchTraceAppByPageWithOptionsAsync(SearchTraceAppByPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchTraceAppByPageResponse>(await DoRequestAsync("SearchTraceAppByPage", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public SearchTraceAppByPageResponse SearchTraceAppByPage(SearchTraceAppByPageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchTraceAppByPageWithOptions(request, runtime);
        }

        public async Task<SearchTraceAppByPageResponse> SearchTraceAppByPageAsync(SearchTraceAppByPageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchTraceAppByPageWithOptionsAsync(request, runtime);
        }

        public ListRetcodeAppsResponse ListRetcodeAppsWithOptions(ListRetcodeAppsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRetcodeAppsResponse>(DoRequest("ListRetcodeApps", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListRetcodeAppsResponse> ListRetcodeAppsWithOptionsAsync(ListRetcodeAppsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRetcodeAppsResponse>(await DoRequestAsync("ListRetcodeApps", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public ListRetcodeAppsResponse ListRetcodeApps(ListRetcodeAppsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListRetcodeAppsWithOptions(request, runtime);
        }

        public async Task<ListRetcodeAppsResponse> ListRetcodeAppsAsync(ListRetcodeAppsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListRetcodeAppsWithOptionsAsync(request, runtime);
        }

        public ListTraceAppsResponse ListTraceAppsWithOptions(ListTraceAppsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTraceAppsResponse>(DoRequest("ListTraceApps", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTraceAppsResponse> ListTraceAppsWithOptionsAsync(ListTraceAppsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTraceAppsResponse>(await DoRequestAsync("ListTraceApps", "HTTPS", "POST", "2019-08-08", "AK", null, request.ToMap(), runtime));
        }

        public ListTraceAppsResponse ListTraceApps(ListTraceAppsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTraceAppsWithOptions(request, runtime);
        }

        public async Task<ListTraceAppsResponse> ListTraceAppsAsync(ListTraceAppsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTraceAppsWithOptionsAsync(request, runtime);
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
