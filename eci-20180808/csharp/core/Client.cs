// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.ECI.Models;

namespace AlibabaCloud.SDK.ECI
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "";
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DescribeRegionsResponse DescribeRegionsEx(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsExAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeRegionsResponse DescribeRegions(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRegionsEx(request, runtime);
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsAsync(DescribeRegionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRegionsExAsync(request, runtime);
        }

        public DescribeImageCachesResponse DescribeImageCachesEx(DescribeImageCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageCachesResponse>(DoRequest("DescribeImageCaches", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeImageCachesResponse> DescribeImageCachesExAsync(DescribeImageCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeImageCachesResponse>(await DoRequestAsync("DescribeImageCaches", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeImageCachesResponse DescribeImageCaches(DescribeImageCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeImageCachesEx(request, runtime);
        }

        public async Task<DescribeImageCachesResponse> DescribeImageCachesAsync(DescribeImageCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeImageCachesExAsync(request, runtime);
        }

        public DeleteImageCacheResponse DeleteImageCacheEx(DeleteImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageCacheResponse>(DoRequest("DeleteImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteImageCacheResponse> DeleteImageCacheExAsync(DeleteImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageCacheResponse>(await DoRequestAsync("DeleteImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DeleteImageCacheResponse DeleteImageCache(DeleteImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteImageCacheEx(request, runtime);
        }

        public async Task<DeleteImageCacheResponse> DeleteImageCacheAsync(DeleteImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteImageCacheExAsync(request, runtime);
        }

        public CreateImageCacheResponse CreateImageCacheEx(CreateImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateImageCacheResponse>(DoRequest("CreateImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateImageCacheResponse> CreateImageCacheExAsync(CreateImageCacheRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateImageCacheResponse>(await DoRequestAsync("CreateImageCache", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public CreateImageCacheResponse CreateImageCache(CreateImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateImageCacheEx(request, runtime);
        }

        public async Task<CreateImageCacheResponse> CreateImageCacheAsync(CreateImageCacheRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateImageCacheExAsync(request, runtime);
        }

        public DescribeMultiContainerGroupMetricResponse DescribeMultiContainerGroupMetricEx(DescribeMultiContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMultiContainerGroupMetricResponse>(DoRequest("DescribeMultiContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeMultiContainerGroupMetricResponse> DescribeMultiContainerGroupMetricExAsync(DescribeMultiContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMultiContainerGroupMetricResponse>(await DoRequestAsync("DescribeMultiContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeMultiContainerGroupMetricResponse DescribeMultiContainerGroupMetric(DescribeMultiContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMultiContainerGroupMetricEx(request, runtime);
        }

        public async Task<DescribeMultiContainerGroupMetricResponse> DescribeMultiContainerGroupMetricAsync(DescribeMultiContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMultiContainerGroupMetricExAsync(request, runtime);
        }

        public DescribeContainerGroupMetricResponse DescribeContainerGroupMetricEx(DescribeContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupMetricResponse>(DoRequest("DescribeContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupMetricResponse> DescribeContainerGroupMetricExAsync(DescribeContainerGroupMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupMetricResponse>(await DoRequestAsync("DescribeContainerGroupMetric", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupMetricResponse DescribeContainerGroupMetric(DescribeContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerGroupMetricEx(request, runtime);
        }

        public async Task<DescribeContainerGroupMetricResponse> DescribeContainerGroupMetricAsync(DescribeContainerGroupMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerGroupMetricExAsync(request, runtime);
        }

        public UpdateContainerGroupByTemplateResponse UpdateContainerGroupByTemplateEx(UpdateContainerGroupByTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupByTemplateResponse>(DoRequest("UpdateContainerGroupByTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateContainerGroupByTemplateResponse> UpdateContainerGroupByTemplateExAsync(UpdateContainerGroupByTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupByTemplateResponse>(await DoRequestAsync("UpdateContainerGroupByTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public UpdateContainerGroupByTemplateResponse UpdateContainerGroupByTemplate(UpdateContainerGroupByTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateContainerGroupByTemplateEx(request, runtime);
        }

        public async Task<UpdateContainerGroupByTemplateResponse> UpdateContainerGroupByTemplateAsync(UpdateContainerGroupByTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateContainerGroupByTemplateExAsync(request, runtime);
        }

        public CreateContainerGroupFromTemplateResponse CreateContainerGroupFromTemplateEx(CreateContainerGroupFromTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupFromTemplateResponse>(DoRequest("CreateContainerGroupFromTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateContainerGroupFromTemplateResponse> CreateContainerGroupFromTemplateExAsync(CreateContainerGroupFromTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupFromTemplateResponse>(await DoRequestAsync("CreateContainerGroupFromTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public CreateContainerGroupFromTemplateResponse CreateContainerGroupFromTemplate(CreateContainerGroupFromTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateContainerGroupFromTemplateEx(request, runtime);
        }

        public async Task<CreateContainerGroupFromTemplateResponse> CreateContainerGroupFromTemplateAsync(CreateContainerGroupFromTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateContainerGroupFromTemplateExAsync(request, runtime);
        }

        public ExportContainerGroupTemplateResponse ExportContainerGroupTemplateEx(ExportContainerGroupTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportContainerGroupTemplateResponse>(DoRequest("ExportContainerGroupTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ExportContainerGroupTemplateResponse> ExportContainerGroupTemplateExAsync(ExportContainerGroupTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExportContainerGroupTemplateResponse>(await DoRequestAsync("ExportContainerGroupTemplate", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public ExportContainerGroupTemplateResponse ExportContainerGroupTemplate(ExportContainerGroupTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExportContainerGroupTemplateEx(request, runtime);
        }

        public async Task<ExportContainerGroupTemplateResponse> ExportContainerGroupTemplateAsync(ExportContainerGroupTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExportContainerGroupTemplateExAsync(request, runtime);
        }

        public RestartContainerGroupResponse RestartContainerGroupEx(RestartContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartContainerGroupResponse>(DoRequest("RestartContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<RestartContainerGroupResponse> RestartContainerGroupExAsync(RestartContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartContainerGroupResponse>(await DoRequestAsync("RestartContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public RestartContainerGroupResponse RestartContainerGroup(RestartContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestartContainerGroupEx(request, runtime);
        }

        public async Task<RestartContainerGroupResponse> RestartContainerGroupAsync(RestartContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestartContainerGroupExAsync(request, runtime);
        }

        public UpdateContainerGroupResponse UpdateContainerGroupEx(UpdateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupResponse>(DoRequest("UpdateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<UpdateContainerGroupResponse> UpdateContainerGroupExAsync(UpdateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateContainerGroupResponse>(await DoRequestAsync("UpdateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public UpdateContainerGroupResponse UpdateContainerGroup(UpdateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateContainerGroupEx(request, runtime);
        }

        public async Task<UpdateContainerGroupResponse> UpdateContainerGroupAsync(UpdateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateContainerGroupExAsync(request, runtime);
        }

        public DescribeContainerGroupPriceResponse DescribeContainerGroupPriceEx(DescribeContainerGroupPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupPriceResponse>(DoRequest("DescribeContainerGroupPrice", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupPriceResponse> DescribeContainerGroupPriceExAsync(DescribeContainerGroupPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupPriceResponse>(await DoRequestAsync("DescribeContainerGroupPrice", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupPriceResponse DescribeContainerGroupPrice(DescribeContainerGroupPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerGroupPriceEx(request, runtime);
        }

        public async Task<DescribeContainerGroupPriceResponse> DescribeContainerGroupPriceAsync(DescribeContainerGroupPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerGroupPriceExAsync(request, runtime);
        }

        public ExecContainerCommandResponse ExecContainerCommandEx(ExecContainerCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecContainerCommandResponse>(DoRequest("ExecContainerCommand", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ExecContainerCommandResponse> ExecContainerCommandExAsync(ExecContainerCommandRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecContainerCommandResponse>(await DoRequestAsync("ExecContainerCommand", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public ExecContainerCommandResponse ExecContainerCommand(ExecContainerCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExecContainerCommandEx(request, runtime);
        }

        public async Task<ExecContainerCommandResponse> ExecContainerCommandAsync(ExecContainerCommandRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExecContainerCommandExAsync(request, runtime);
        }

        public DescribeContainerLogResponse DescribeContainerLogEx(DescribeContainerLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerLogResponse>(DoRequest("DescribeContainerLog", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerLogResponse> DescribeContainerLogExAsync(DescribeContainerLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerLogResponse>(await DoRequestAsync("DescribeContainerLog", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerLogResponse DescribeContainerLog(DescribeContainerLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerLogEx(request, runtime);
        }

        public async Task<DescribeContainerLogResponse> DescribeContainerLogAsync(DescribeContainerLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerLogExAsync(request, runtime);
        }

        public CreateContainerGroupResponse CreateContainerGroupEx(CreateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupResponse>(DoRequest("CreateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<CreateContainerGroupResponse> CreateContainerGroupExAsync(CreateContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateContainerGroupResponse>(await DoRequestAsync("CreateContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public CreateContainerGroupResponse CreateContainerGroup(CreateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateContainerGroupEx(request, runtime);
        }

        public async Task<CreateContainerGroupResponse> CreateContainerGroupAsync(CreateContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateContainerGroupExAsync(request, runtime);
        }

        public DescribeContainerGroupsResponse DescribeContainerGroupsEx(DescribeContainerGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupsResponse>(DoRequest("DescribeContainerGroups", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeContainerGroupsResponse> DescribeContainerGroupsExAsync(DescribeContainerGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContainerGroupsResponse>(await DoRequestAsync("DescribeContainerGroups", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DescribeContainerGroupsResponse DescribeContainerGroups(DescribeContainerGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContainerGroupsEx(request, runtime);
        }

        public async Task<DescribeContainerGroupsResponse> DescribeContainerGroupsAsync(DescribeContainerGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContainerGroupsExAsync(request, runtime);
        }

        public DeleteContainerGroupResponse DeleteContainerGroupEx(DeleteContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContainerGroupResponse>(DoRequest("DeleteContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteContainerGroupResponse> DeleteContainerGroupExAsync(DeleteContainerGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContainerGroupResponse>(await DoRequestAsync("DeleteContainerGroup", "HTTPS", "POST", "2018-08-08", "AK", request.ToMap(), null, runtime));
        }

        public DeleteContainerGroupResponse DeleteContainerGroup(DeleteContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteContainerGroupEx(request, runtime);
        }

        public async Task<DeleteContainerGroupResponse> DeleteContainerGroupAsync(DeleteContainerGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteContainerGroupExAsync(request, runtime);
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
