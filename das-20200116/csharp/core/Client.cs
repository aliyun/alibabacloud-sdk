// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.DAS20200116.Models;

namespace AlibabaCloud.SDK.DAS20200116
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "";
            CheckConfig(config);
            this._endpoint = GetEndpoint("das", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DescribeDiagnosticReportListResponse DescribeDiagnosticReportListWithOptions(DescribeDiagnosticReportListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDiagnosticReportListResponse>(DoRequest("DescribeDiagnosticReportList", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDiagnosticReportListResponse> DescribeDiagnosticReportListWithOptionsAsync(DescribeDiagnosticReportListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDiagnosticReportListResponse>(await DoRequestAsync("DescribeDiagnosticReportList", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDiagnosticReportListResponse DescribeDiagnosticReportList(DescribeDiagnosticReportListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDiagnosticReportListWithOptions(request, runtime);
        }

        public async Task<DescribeDiagnosticReportListResponse> DescribeDiagnosticReportListAsync(DescribeDiagnosticReportListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDiagnosticReportListWithOptionsAsync(request, runtime);
        }

        public CreateDiagnosticReportResponse CreateDiagnosticReportWithOptions(CreateDiagnosticReportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDiagnosticReportResponse>(DoRequest("CreateDiagnosticReport", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDiagnosticReportResponse> CreateDiagnosticReportWithOptionsAsync(CreateDiagnosticReportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDiagnosticReportResponse>(await DoRequestAsync("CreateDiagnosticReport", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public CreateDiagnosticReportResponse CreateDiagnosticReport(CreateDiagnosticReportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDiagnosticReportWithOptions(request, runtime);
        }

        public async Task<CreateDiagnosticReportResponse> CreateDiagnosticReportAsync(CreateDiagnosticReportRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDiagnosticReportWithOptionsAsync(request, runtime);
        }

        public AccessHDMInstanceResponse AccessHDMInstanceWithOptions(AccessHDMInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AccessHDMInstanceResponse>(DoRequest("AccessHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AccessHDMInstanceResponse> AccessHDMInstanceWithOptionsAsync(AccessHDMInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AccessHDMInstanceResponse>(await DoRequestAsync("AccessHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public AccessHDMInstanceResponse AccessHDMInstance(AccessHDMInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AccessHDMInstanceWithOptions(request, runtime);
        }

        public async Task<AccessHDMInstanceResponse> AccessHDMInstanceAsync(AccessHDMInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AccessHDMInstanceWithOptionsAsync(request, runtime);
        }

        public SyncHDMAliyunResourceResponse SyncHDMAliyunResourceWithOptions(SyncHDMAliyunResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SyncHDMAliyunResourceResponse>(DoRequest("SyncHDMAliyunResource", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SyncHDMAliyunResourceResponse> SyncHDMAliyunResourceWithOptionsAsync(SyncHDMAliyunResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SyncHDMAliyunResourceResponse>(await DoRequestAsync("SyncHDMAliyunResource", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public SyncHDMAliyunResourceResponse SyncHDMAliyunResource(SyncHDMAliyunResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SyncHDMAliyunResourceWithOptions(request, runtime);
        }

        public async Task<SyncHDMAliyunResourceResponse> SyncHDMAliyunResourceAsync(SyncHDMAliyunResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SyncHDMAliyunResourceWithOptionsAsync(request, runtime);
        }

        public GetHDMLastAliyunResourceSyncResultResponse GetHDMLastAliyunResourceSyncResultWithOptions(GetHDMLastAliyunResourceSyncResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetHDMLastAliyunResourceSyncResultResponse>(DoRequest("GetHDMLastAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetHDMLastAliyunResourceSyncResultResponse> GetHDMLastAliyunResourceSyncResultWithOptionsAsync(GetHDMLastAliyunResourceSyncResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetHDMLastAliyunResourceSyncResultResponse>(await DoRequestAsync("GetHDMLastAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public GetHDMLastAliyunResourceSyncResultResponse GetHDMLastAliyunResourceSyncResult(GetHDMLastAliyunResourceSyncResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetHDMLastAliyunResourceSyncResultWithOptions(request, runtime);
        }

        public async Task<GetHDMLastAliyunResourceSyncResultResponse> GetHDMLastAliyunResourceSyncResultAsync(GetHDMLastAliyunResourceSyncResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetHDMLastAliyunResourceSyncResultWithOptionsAsync(request, runtime);
        }

        public GetEndpointSwitchTaskResponse GetEndpointSwitchTaskWithOptions(GetEndpointSwitchTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetEndpointSwitchTaskResponse>(DoRequest("GetEndpointSwitchTask", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetEndpointSwitchTaskResponse> GetEndpointSwitchTaskWithOptionsAsync(GetEndpointSwitchTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetEndpointSwitchTaskResponse>(await DoRequestAsync("GetEndpointSwitchTask", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public GetEndpointSwitchTaskResponse GetEndpointSwitchTask(GetEndpointSwitchTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetEndpointSwitchTaskWithOptions(request, runtime);
        }

        public async Task<GetEndpointSwitchTaskResponse> GetEndpointSwitchTaskAsync(GetEndpointSwitchTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetEndpointSwitchTaskWithOptionsAsync(request, runtime);
        }

        public GetHDMAliyunResourceSyncResultResponse GetHDMAliyunResourceSyncResultWithOptions(GetHDMAliyunResourceSyncResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetHDMAliyunResourceSyncResultResponse>(DoRequest("GetHDMAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetHDMAliyunResourceSyncResultResponse> GetHDMAliyunResourceSyncResultWithOptionsAsync(GetHDMAliyunResourceSyncResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetHDMAliyunResourceSyncResultResponse>(await DoRequestAsync("GetHDMAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public GetHDMAliyunResourceSyncResultResponse GetHDMAliyunResourceSyncResult(GetHDMAliyunResourceSyncResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetHDMAliyunResourceSyncResultWithOptions(request, runtime);
        }

        public async Task<GetHDMAliyunResourceSyncResultResponse> GetHDMAliyunResourceSyncResultAsync(GetHDMAliyunResourceSyncResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetHDMAliyunResourceSyncResultWithOptionsAsync(request, runtime);
        }

        public AddHDMInstanceResponse AddHDMInstanceWithOptions(AddHDMInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddHDMInstanceResponse>(DoRequest("AddHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddHDMInstanceResponse> AddHDMInstanceWithOptionsAsync(AddHDMInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddHDMInstanceResponse>(await DoRequestAsync("AddHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", null, request.ToMap(), runtime));
        }

        public AddHDMInstanceResponse AddHDMInstance(AddHDMInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddHDMInstanceWithOptions(request, runtime);
        }

        public async Task<AddHDMInstanceResponse> AddHDMInstanceAsync(AddHDMInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddHDMInstanceWithOptionsAsync(request, runtime);
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
