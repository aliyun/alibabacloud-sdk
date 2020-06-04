// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Eci20180808.Models;

namespace AlibabaCloud.SDK.Eci20180808
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "";
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeRegionsResponse DescribeRegions(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRegionsWithOptions(request, runtime);
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsAsync(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRegionsWithOptionsAsync(request, runtime);
        }

        public DescribeImageCachesResponse DescribeImageCachesWithOptions(DescribeImageCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageCachesResponse>(DoRequest("DescribeImageCaches", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeImageCachesResponse> DescribeImageCachesWithOptionsAsync(DescribeImageCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageCachesResponse>(await DoRequestAsync("DescribeImageCaches", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeImageCachesResponse DescribeImageCaches(DescribeImageCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeImageCachesWithOptions(request, runtime);
        }

        public async Task<DescribeImageCachesResponse> DescribeImageCachesAsync(DescribeImageCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeImageCachesWithOptionsAsync(request, runtime);
        }

        public DeleteImageCacheResponse DeleteImageCacheWithOptions(DeleteImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageCacheResponse>(DoRequest("DeleteImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteImageCacheResponse> DeleteImageCacheWithOptionsAsync(DeleteImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageCacheResponse>(await DoRequestAsync("DeleteImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DeleteImageCacheResponse DeleteImageCache(DeleteImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteImageCacheWithOptions(request, runtime);
        }

        public async Task<DeleteImageCacheResponse> DeleteImageCacheAsync(DeleteImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteImageCacheWithOptionsAsync(request, runtime);
        }

        public CreateImageCacheResponse CreateImageCacheWithOptions(CreateImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateImageCacheResponse>(DoRequest("CreateImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateImageCacheResponse> CreateImageCacheWithOptionsAsync(CreateImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateImageCacheResponse>(await DoRequestAsync("CreateImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public CreateImageCacheResponse CreateImageCache(CreateImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateImageCacheWithOptions(request, runtime);
        }

        public async Task<CreateImageCacheResponse> CreateImageCacheAsync(CreateImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateImageCacheWithOptionsAsync(request, runtime);
        }

        public DescribeMultiContainerGroupMetricResponse DescribeMultiContainerGroupMetricWithOptions(DescribeMultiContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMultiContainerGroupMetricResponse>(DoRequest("DescribeMultiContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeMultiContainerGroupMetricResponse> DescribeMultiContainerGroupMetricWithOptionsAsync(DescribeMultiContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMultiContainerGroupMetricResponse>(await DoRequestAsync("DescribeMultiContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeMultiContainerGroupMetricResponse DescribeMultiContainerGroupMetric(DescribeMultiContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMultiContainerGroupMetricWithOptions(request, runtime);
        }

        public async Task<DescribeMultiContainerGroupMetricResponse> DescribeMultiContainerGroupMetricAsync(DescribeMultiContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMultiContainerGroupMetricWithOptionsAsync(request, runtime);
        }

        public DescribeContainerGroupMetricResponse DescribeContainerGroupMetricWithOptions(DescribeContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupMetricResponse>(DoRequest("DescribeContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupMetricResponse> DescribeContainerGroupMetricWithOptionsAsync(DescribeContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupMetricResponse>(await DoRequestAsync("DescribeContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupMetricResponse DescribeContainerGroupMetric(DescribeContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerGroupMetricWithOptions(request, runtime);
        }

        public async Task<DescribeContainerGroupMetricResponse> DescribeContainerGroupMetricAsync(DescribeContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerGroupMetricWithOptionsAsync(request, runtime);
        }

        public UpdateContainerGroupByTemplateResponse UpdateContainerGroupByTemplateWithOptions(UpdateContainerGroupByTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupByTemplateResponse>(DoRequest("UpdateContainerGroupByTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateContainerGroupByTemplateResponse> UpdateContainerGroupByTemplateWithOptionsAsync(UpdateContainerGroupByTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupByTemplateResponse>(await DoRequestAsync("UpdateContainerGroupByTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public UpdateContainerGroupByTemplateResponse UpdateContainerGroupByTemplate(UpdateContainerGroupByTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateContainerGroupByTemplateWithOptions(request, runtime);
        }

        public async Task<UpdateContainerGroupByTemplateResponse> UpdateContainerGroupByTemplateAsync(UpdateContainerGroupByTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateContainerGroupByTemplateWithOptionsAsync(request, runtime);
        }

        public CreateContainerGroupFromTemplateResponse CreateContainerGroupFromTemplateWithOptions(CreateContainerGroupFromTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupFromTemplateResponse>(DoRequest("CreateContainerGroupFromTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateContainerGroupFromTemplateResponse> CreateContainerGroupFromTemplateWithOptionsAsync(CreateContainerGroupFromTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupFromTemplateResponse>(await DoRequestAsync("CreateContainerGroupFromTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public CreateContainerGroupFromTemplateResponse CreateContainerGroupFromTemplate(CreateContainerGroupFromTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateContainerGroupFromTemplateWithOptions(request, runtime);
        }

        public async Task<CreateContainerGroupFromTemplateResponse> CreateContainerGroupFromTemplateAsync(CreateContainerGroupFromTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateContainerGroupFromTemplateWithOptionsAsync(request, runtime);
        }

        public ExportContainerGroupTemplateResponse ExportContainerGroupTemplateWithOptions(ExportContainerGroupTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportContainerGroupTemplateResponse>(DoRequest("ExportContainerGroupTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ExportContainerGroupTemplateResponse> ExportContainerGroupTemplateWithOptionsAsync(ExportContainerGroupTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportContainerGroupTemplateResponse>(await DoRequestAsync("ExportContainerGroupTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public ExportContainerGroupTemplateResponse ExportContainerGroupTemplate(ExportContainerGroupTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExportContainerGroupTemplateWithOptions(request, runtime);
        }

        public async Task<ExportContainerGroupTemplateResponse> ExportContainerGroupTemplateAsync(ExportContainerGroupTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExportContainerGroupTemplateWithOptionsAsync(request, runtime);
        }

        public RestartContainerGroupResponse RestartContainerGroupWithOptions(RestartContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartContainerGroupResponse>(DoRequest("RestartContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<RestartContainerGroupResponse> RestartContainerGroupWithOptionsAsync(RestartContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartContainerGroupResponse>(await DoRequestAsync("RestartContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public RestartContainerGroupResponse RestartContainerGroup(RestartContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestartContainerGroupWithOptions(request, runtime);
        }

        public async Task<RestartContainerGroupResponse> RestartContainerGroupAsync(RestartContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestartContainerGroupWithOptionsAsync(request, runtime);
        }

        public UpdateContainerGroupResponse UpdateContainerGroupWithOptions(UpdateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupResponse>(DoRequest("UpdateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateContainerGroupResponse> UpdateContainerGroupWithOptionsAsync(UpdateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupResponse>(await DoRequestAsync("UpdateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public UpdateContainerGroupResponse UpdateContainerGroup(UpdateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateContainerGroupWithOptions(request, runtime);
        }

        public async Task<UpdateContainerGroupResponse> UpdateContainerGroupAsync(UpdateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateContainerGroupWithOptionsAsync(request, runtime);
        }

        public DescribeContainerGroupPriceResponse DescribeContainerGroupPriceWithOptions(DescribeContainerGroupPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupPriceResponse>(DoRequest("DescribeContainerGroupPrice", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupPriceResponse> DescribeContainerGroupPriceWithOptionsAsync(DescribeContainerGroupPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupPriceResponse>(await DoRequestAsync("DescribeContainerGroupPrice", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupPriceResponse DescribeContainerGroupPrice(DescribeContainerGroupPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerGroupPriceWithOptions(request, runtime);
        }

        public async Task<DescribeContainerGroupPriceResponse> DescribeContainerGroupPriceAsync(DescribeContainerGroupPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerGroupPriceWithOptionsAsync(request, runtime);
        }

        public ExecContainerCommandResponse ExecContainerCommandWithOptions(ExecContainerCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecContainerCommandResponse>(DoRequest("ExecContainerCommand", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ExecContainerCommandResponse> ExecContainerCommandWithOptionsAsync(ExecContainerCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecContainerCommandResponse>(await DoRequestAsync("ExecContainerCommand", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public ExecContainerCommandResponse ExecContainerCommand(ExecContainerCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExecContainerCommandWithOptions(request, runtime);
        }

        public async Task<ExecContainerCommandResponse> ExecContainerCommandAsync(ExecContainerCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExecContainerCommandWithOptionsAsync(request, runtime);
        }

        public DescribeContainerLogResponse DescribeContainerLogWithOptions(DescribeContainerLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerLogResponse>(DoRequest("DescribeContainerLog", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerLogResponse> DescribeContainerLogWithOptionsAsync(DescribeContainerLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerLogResponse>(await DoRequestAsync("DescribeContainerLog", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerLogResponse DescribeContainerLog(DescribeContainerLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerLogWithOptions(request, runtime);
        }

        public async Task<DescribeContainerLogResponse> DescribeContainerLogAsync(DescribeContainerLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerLogWithOptionsAsync(request, runtime);
        }

        public CreateContainerGroupResponse CreateContainerGroupWithOptions(CreateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupResponse>(DoRequest("CreateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateContainerGroupResponse> CreateContainerGroupWithOptionsAsync(CreateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupResponse>(await DoRequestAsync("CreateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public CreateContainerGroupResponse CreateContainerGroup(CreateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateContainerGroupWithOptions(request, runtime);
        }

        public async Task<CreateContainerGroupResponse> CreateContainerGroupAsync(CreateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateContainerGroupWithOptionsAsync(request, runtime);
        }

        public DescribeContainerGroupsResponse DescribeContainerGroupsWithOptions(DescribeContainerGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupsResponse>(DoRequest("DescribeContainerGroups", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupsResponse> DescribeContainerGroupsWithOptionsAsync(DescribeContainerGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupsResponse>(await DoRequestAsync("DescribeContainerGroups", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupsResponse DescribeContainerGroups(DescribeContainerGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeContainerGroupsResponse> DescribeContainerGroupsAsync(DescribeContainerGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerGroupsWithOptionsAsync(request, runtime);
        }

        public DeleteContainerGroupResponse DeleteContainerGroupWithOptions(DeleteContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContainerGroupResponse>(DoRequest("DeleteContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteContainerGroupResponse> DeleteContainerGroupWithOptionsAsync(DeleteContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContainerGroupResponse>(await DoRequestAsync("DeleteContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DeleteContainerGroupResponse DeleteContainerGroup(DeleteContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteContainerGroupWithOptions(request, runtime);
        }

        public async Task<DeleteContainerGroupResponse> DeleteContainerGroupAsync(DeleteContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteContainerGroupWithOptionsAsync(request, runtime);
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
