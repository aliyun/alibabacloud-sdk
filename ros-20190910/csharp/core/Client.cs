// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.ROS20190910.Models;

namespace AlibabaCloud.SDK.ROS20190910
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "central";
            CheckConfig(config);
            this._endpoint = GetEndpoint("ros", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public ListStackOperationRisksResponse ListStackOperationRisksWithOptions(ListStackOperationRisksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackOperationRisksResponse>(DoRequest("ListStackOperationRisks", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackOperationRisksResponse> ListStackOperationRisksWithOptionsAsync(ListStackOperationRisksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackOperationRisksResponse>(await DoRequestAsync("ListStackOperationRisks", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackOperationRisksResponse ListStackOperationRisks(ListStackOperationRisksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackOperationRisksWithOptions(request, runtime);
        }

        public async Task<ListStackOperationRisksResponse> ListStackOperationRisksAsync(ListStackOperationRisksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackOperationRisksWithOptionsAsync(request, runtime);
        }

        public GetTemplateSummaryResponse GetTemplateSummaryWithOptions(GetTemplateSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTemplateSummaryResponse>(DoRequest("GetTemplateSummary", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTemplateSummaryResponse> GetTemplateSummaryWithOptionsAsync(GetTemplateSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTemplateSummaryResponse>(await DoRequestAsync("GetTemplateSummary", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetTemplateSummaryResponse GetTemplateSummary(GetTemplateSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTemplateSummaryWithOptions(request, runtime);
        }

        public async Task<GetTemplateSummaryResponse> GetTemplateSummaryAsync(GetTemplateSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTemplateSummaryWithOptionsAsync(request, runtime);
        }

        public ListTagValuesResponse ListTagValuesWithOptions(ListTagValuesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagValuesResponse>(DoRequest("ListTagValues", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagValuesResponse> ListTagValuesWithOptionsAsync(ListTagValuesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagValuesResponse>(await DoRequestAsync("ListTagValues", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListTagValuesResponse ListTagValues(ListTagValuesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTagValuesWithOptions(request, runtime);
        }

        public async Task<ListTagValuesResponse> ListTagValuesAsync(ListTagValuesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTagValuesWithOptionsAsync(request, runtime);
        }

        public ListTagKeysResponse ListTagKeysWithOptions(ListTagKeysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagKeysResponse>(DoRequest("ListTagKeys", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagKeysResponse> ListTagKeysWithOptionsAsync(ListTagKeysRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagKeysResponse>(await DoRequestAsync("ListTagKeys", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListTagKeysResponse ListTagKeys(ListTagKeysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTagKeysWithOptions(request, runtime);
        }

        public async Task<ListTagKeysResponse> ListTagKeysAsync(ListTagKeysRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTagKeysWithOptionsAsync(request, runtime);
        }

        public SetDeletionProtectionResponse SetDeletionProtectionWithOptions(SetDeletionProtectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDeletionProtectionResponse>(DoRequest("SetDeletionProtection", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDeletionProtectionResponse> SetDeletionProtectionWithOptionsAsync(SetDeletionProtectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDeletionProtectionResponse>(await DoRequestAsync("SetDeletionProtection", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public SetDeletionProtectionResponse SetDeletionProtection(SetDeletionProtectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDeletionProtectionWithOptions(request, runtime);
        }

        public async Task<SetDeletionProtectionResponse> SetDeletionProtectionAsync(SetDeletionProtectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDeletionProtectionWithOptionsAsync(request, runtime);
        }

        public UpdateStackTemplateByResourcesResponse UpdateStackTemplateByResourcesWithOptions(UpdateStackTemplateByResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackTemplateByResourcesResponse>(DoRequest("UpdateStackTemplateByResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateStackTemplateByResourcesResponse> UpdateStackTemplateByResourcesWithOptionsAsync(UpdateStackTemplateByResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackTemplateByResourcesResponse>(await DoRequestAsync("UpdateStackTemplateByResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public UpdateStackTemplateByResourcesResponse UpdateStackTemplateByResources(UpdateStackTemplateByResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateStackTemplateByResourcesWithOptions(request, runtime);
        }

        public async Task<UpdateStackTemplateByResourcesResponse> UpdateStackTemplateByResourcesAsync(UpdateStackTemplateByResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateStackTemplateByResourcesWithOptionsAsync(request, runtime);
        }

        public GetStackDriftDetectionStatusResponse GetStackDriftDetectionStatusWithOptions(GetStackDriftDetectionStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackDriftDetectionStatusResponse>(DoRequest("GetStackDriftDetectionStatus", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackDriftDetectionStatusResponse> GetStackDriftDetectionStatusWithOptionsAsync(GetStackDriftDetectionStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackDriftDetectionStatusResponse>(await DoRequestAsync("GetStackDriftDetectionStatus", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetStackDriftDetectionStatusResponse GetStackDriftDetectionStatus(GetStackDriftDetectionStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackDriftDetectionStatusWithOptions(request, runtime);
        }

        public async Task<GetStackDriftDetectionStatusResponse> GetStackDriftDetectionStatusAsync(GetStackDriftDetectionStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackDriftDetectionStatusWithOptionsAsync(request, runtime);
        }

        public DetectStackGroupDriftResponse DetectStackGroupDriftWithOptions(DetectStackGroupDriftRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectStackGroupDriftResponse>(DoRequest("DetectStackGroupDrift", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetectStackGroupDriftResponse> DetectStackGroupDriftWithOptionsAsync(DetectStackGroupDriftRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectStackGroupDriftResponse>(await DoRequestAsync("DetectStackGroupDrift", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DetectStackGroupDriftResponse DetectStackGroupDrift(DetectStackGroupDriftRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetectStackGroupDriftWithOptions(request, runtime);
        }

        public async Task<DetectStackGroupDriftResponse> DetectStackGroupDriftAsync(DetectStackGroupDriftRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetectStackGroupDriftWithOptionsAsync(request, runtime);
        }

        public ListStackResourceDriftsResponse ListStackResourceDriftsWithOptions(ListStackResourceDriftsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackResourceDriftsResponse>(DoRequest("ListStackResourceDrifts", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackResourceDriftsResponse> ListStackResourceDriftsWithOptionsAsync(ListStackResourceDriftsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackResourceDriftsResponse>(await DoRequestAsync("ListStackResourceDrifts", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackResourceDriftsResponse ListStackResourceDrifts(ListStackResourceDriftsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackResourceDriftsWithOptions(request, runtime);
        }

        public async Task<ListStackResourceDriftsResponse> ListStackResourceDriftsAsync(ListStackResourceDriftsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackResourceDriftsWithOptionsAsync(request, runtime);
        }

        public DetectStackResourceDriftResponse DetectStackResourceDriftWithOptions(DetectStackResourceDriftRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectStackResourceDriftResponse>(DoRequest("DetectStackResourceDrift", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetectStackResourceDriftResponse> DetectStackResourceDriftWithOptionsAsync(DetectStackResourceDriftRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectStackResourceDriftResponse>(await DoRequestAsync("DetectStackResourceDrift", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DetectStackResourceDriftResponse DetectStackResourceDrift(DetectStackResourceDriftRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetectStackResourceDriftWithOptions(request, runtime);
        }

        public async Task<DetectStackResourceDriftResponse> DetectStackResourceDriftAsync(DetectStackResourceDriftRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetectStackResourceDriftWithOptionsAsync(request, runtime);
        }

        public DetectStackDriftResponse DetectStackDriftWithOptions(DetectStackDriftRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectStackDriftResponse>(DoRequest("DetectStackDrift", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetectStackDriftResponse> DetectStackDriftWithOptionsAsync(DetectStackDriftRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectStackDriftResponse>(await DoRequestAsync("DetectStackDrift", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DetectStackDriftResponse DetectStackDrift(DetectStackDriftRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetectStackDriftWithOptions(request, runtime);
        }

        public async Task<DetectStackDriftResponse> DetectStackDriftAsync(DetectStackDriftRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetectStackDriftWithOptionsAsync(request, runtime);
        }

        public UpdateStackInstancesResponse UpdateStackInstancesWithOptions(UpdateStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackInstancesResponse>(DoRequest("UpdateStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateStackInstancesResponse> UpdateStackInstancesWithOptionsAsync(UpdateStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackInstancesResponse>(await DoRequestAsync("UpdateStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public UpdateStackInstancesResponse UpdateStackInstances(UpdateStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateStackInstancesWithOptions(request, runtime);
        }

        public async Task<UpdateStackInstancesResponse> UpdateStackInstancesAsync(UpdateStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateStackInstancesWithOptionsAsync(request, runtime);
        }

        public ListStackGroupOperationsResponse ListStackGroupOperationsWithOptions(ListStackGroupOperationsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackGroupOperationsResponse>(DoRequest("ListStackGroupOperations", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackGroupOperationsResponse> ListStackGroupOperationsWithOptionsAsync(ListStackGroupOperationsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackGroupOperationsResponse>(await DoRequestAsync("ListStackGroupOperations", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackGroupOperationsResponse ListStackGroupOperations(ListStackGroupOperationsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackGroupOperationsWithOptions(request, runtime);
        }

        public async Task<ListStackGroupOperationsResponse> ListStackGroupOperationsAsync(ListStackGroupOperationsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackGroupOperationsWithOptionsAsync(request, runtime);
        }

        public GetStackGroupResponse GetStackGroupWithOptions(GetStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackGroupResponse>(DoRequest("GetStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackGroupResponse> GetStackGroupWithOptionsAsync(GetStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackGroupResponse>(await DoRequestAsync("GetStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetStackGroupResponse GetStackGroup(GetStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackGroupWithOptions(request, runtime);
        }

        public async Task<GetStackGroupResponse> GetStackGroupAsync(GetStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackGroupWithOptionsAsync(request, runtime);
        }

        public GetStackGroupOperationResponse GetStackGroupOperationWithOptions(GetStackGroupOperationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackGroupOperationResponse>(DoRequest("GetStackGroupOperation", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackGroupOperationResponse> GetStackGroupOperationWithOptionsAsync(GetStackGroupOperationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackGroupOperationResponse>(await DoRequestAsync("GetStackGroupOperation", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetStackGroupOperationResponse GetStackGroupOperation(GetStackGroupOperationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackGroupOperationWithOptions(request, runtime);
        }

        public async Task<GetStackGroupOperationResponse> GetStackGroupOperationAsync(GetStackGroupOperationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackGroupOperationWithOptionsAsync(request, runtime);
        }

        public ListStackGroupsResponse ListStackGroupsWithOptions(ListStackGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackGroupsResponse>(DoRequest("ListStackGroups", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackGroupsResponse> ListStackGroupsWithOptionsAsync(ListStackGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackGroupsResponse>(await DoRequestAsync("ListStackGroups", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackGroupsResponse ListStackGroups(ListStackGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackGroupsWithOptions(request, runtime);
        }

        public async Task<ListStackGroupsResponse> ListStackGroupsAsync(ListStackGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackGroupsWithOptionsAsync(request, runtime);
        }

        public CreateStackInstancesResponse CreateStackInstancesWithOptions(CreateStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStackInstancesResponse>(DoRequest("CreateStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateStackInstancesResponse> CreateStackInstancesWithOptionsAsync(CreateStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStackInstancesResponse>(await DoRequestAsync("CreateStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public CreateStackInstancesResponse CreateStackInstances(CreateStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateStackInstancesWithOptions(request, runtime);
        }

        public async Task<CreateStackInstancesResponse> CreateStackInstancesAsync(CreateStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateStackInstancesWithOptionsAsync(request, runtime);
        }

        public CreateStackGroupResponse CreateStackGroupWithOptions(CreateStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStackGroupResponse>(DoRequest("CreateStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateStackGroupResponse> CreateStackGroupWithOptionsAsync(CreateStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStackGroupResponse>(await DoRequestAsync("CreateStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public CreateStackGroupResponse CreateStackGroup(CreateStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateStackGroupWithOptions(request, runtime);
        }

        public async Task<CreateStackGroupResponse> CreateStackGroupAsync(CreateStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateStackGroupWithOptionsAsync(request, runtime);
        }

        public GetStackInstanceResponse GetStackInstanceWithOptions(GetStackInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackInstanceResponse>(DoRequest("GetStackInstance", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackInstanceResponse> GetStackInstanceWithOptionsAsync(GetStackInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackInstanceResponse>(await DoRequestAsync("GetStackInstance", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetStackInstanceResponse GetStackInstance(GetStackInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackInstanceWithOptions(request, runtime);
        }

        public async Task<GetStackInstanceResponse> GetStackInstanceAsync(GetStackInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackInstanceWithOptionsAsync(request, runtime);
        }

        public UpdateStackGroupResponse UpdateStackGroupWithOptions(UpdateStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackGroupResponse>(DoRequest("UpdateStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateStackGroupResponse> UpdateStackGroupWithOptionsAsync(UpdateStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackGroupResponse>(await DoRequestAsync("UpdateStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public UpdateStackGroupResponse UpdateStackGroup(UpdateStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateStackGroupWithOptions(request, runtime);
        }

        public async Task<UpdateStackGroupResponse> UpdateStackGroupAsync(UpdateStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateStackGroupWithOptionsAsync(request, runtime);
        }

        public ListStackInstancesResponse ListStackInstancesWithOptions(ListStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackInstancesResponse>(DoRequest("ListStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackInstancesResponse> ListStackInstancesWithOptionsAsync(ListStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackInstancesResponse>(await DoRequestAsync("ListStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackInstancesResponse ListStackInstances(ListStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackInstancesWithOptions(request, runtime);
        }

        public async Task<ListStackInstancesResponse> ListStackInstancesAsync(ListStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackInstancesWithOptionsAsync(request, runtime);
        }

        public ListStackGroupOperationResultsResponse ListStackGroupOperationResultsWithOptions(ListStackGroupOperationResultsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackGroupOperationResultsResponse>(DoRequest("ListStackGroupOperationResults", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackGroupOperationResultsResponse> ListStackGroupOperationResultsWithOptionsAsync(ListStackGroupOperationResultsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackGroupOperationResultsResponse>(await DoRequestAsync("ListStackGroupOperationResults", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackGroupOperationResultsResponse ListStackGroupOperationResults(ListStackGroupOperationResultsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackGroupOperationResultsWithOptions(request, runtime);
        }

        public async Task<ListStackGroupOperationResultsResponse> ListStackGroupOperationResultsAsync(ListStackGroupOperationResultsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackGroupOperationResultsWithOptionsAsync(request, runtime);
        }

        public StopStackGroupOperationResponse StopStackGroupOperationWithOptions(StopStackGroupOperationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopStackGroupOperationResponse>(DoRequest("StopStackGroupOperation", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopStackGroupOperationResponse> StopStackGroupOperationWithOptionsAsync(StopStackGroupOperationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopStackGroupOperationResponse>(await DoRequestAsync("StopStackGroupOperation", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public StopStackGroupOperationResponse StopStackGroupOperation(StopStackGroupOperationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopStackGroupOperationWithOptions(request, runtime);
        }

        public async Task<StopStackGroupOperationResponse> StopStackGroupOperationAsync(StopStackGroupOperationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopStackGroupOperationWithOptionsAsync(request, runtime);
        }

        public DeleteStackGroupResponse DeleteStackGroupWithOptions(DeleteStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackGroupResponse>(DoRequest("DeleteStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteStackGroupResponse> DeleteStackGroupWithOptionsAsync(DeleteStackGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackGroupResponse>(await DoRequestAsync("DeleteStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DeleteStackGroupResponse DeleteStackGroup(DeleteStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteStackGroupWithOptions(request, runtime);
        }

        public async Task<DeleteStackGroupResponse> DeleteStackGroupAsync(DeleteStackGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteStackGroupWithOptionsAsync(request, runtime);
        }

        public DeleteStackInstancesResponse DeleteStackInstancesWithOptions(DeleteStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackInstancesResponse>(DoRequest("DeleteStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteStackInstancesResponse> DeleteStackInstancesWithOptionsAsync(DeleteStackInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackInstancesResponse>(await DoRequestAsync("DeleteStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DeleteStackInstancesResponse DeleteStackInstances(DeleteStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteStackInstancesWithOptions(request, runtime);
        }

        public async Task<DeleteStackInstancesResponse> DeleteStackInstancesAsync(DeleteStackInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteStackInstancesWithOptionsAsync(request, runtime);
        }

        public ListTagResourcesResponse ListTagResourcesWithOptions(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(DoRequest("ListTagResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesWithOptionsAsync(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(await DoRequestAsync("ListTagResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListTagResourcesResponse ListTagResources(ListTagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTagResourcesWithOptions(request, runtime);
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesAsync(ListTagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTagResourcesWithOptionsAsync(request, runtime);
        }

        public UntagResourcesResponse UntagResourcesWithOptions(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(DoRequest("UntagResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UntagResourcesResponse> UntagResourcesWithOptionsAsync(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(await DoRequestAsync("UntagResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public UntagResourcesResponse UntagResources(UntagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UntagResourcesWithOptions(request, runtime);
        }

        public async Task<UntagResourcesResponse> UntagResourcesAsync(UntagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UntagResourcesWithOptionsAsync(request, runtime);
        }

        public TagResourcesResponse TagResourcesWithOptions(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(DoRequest("TagResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TagResourcesResponse> TagResourcesWithOptionsAsync(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(await DoRequestAsync("TagResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public TagResourcesResponse TagResources(TagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TagResourcesWithOptions(request, runtime);
        }

        public async Task<TagResourcesResponse> TagResourcesAsync(TagResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TagResourcesWithOptionsAsync(request, runtime);
        }

        public DeleteTemplateResponse DeleteTemplateWithOptions(DeleteTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTemplateResponse>(DoRequest("DeleteTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteTemplateResponse> DeleteTemplateWithOptionsAsync(DeleteTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTemplateResponse>(await DoRequestAsync("DeleteTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DeleteTemplateResponse DeleteTemplate(DeleteTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteTemplateWithOptions(request, runtime);
        }

        public async Task<DeleteTemplateResponse> DeleteTemplateAsync(DeleteTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteTemplateWithOptionsAsync(request, runtime);
        }

        public UpdateTemplateResponse UpdateTemplateWithOptions(UpdateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateTemplateResponse>(DoRequest("UpdateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateTemplateResponse> UpdateTemplateWithOptionsAsync(UpdateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateTemplateResponse>(await DoRequestAsync("UpdateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public UpdateTemplateResponse UpdateTemplate(UpdateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateTemplateWithOptions(request, runtime);
        }

        public async Task<UpdateTemplateResponse> UpdateTemplateAsync(UpdateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateTemplateWithOptionsAsync(request, runtime);
        }

        public ListTemplatesResponse ListTemplatesWithOptions(ListTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTemplatesResponse>(DoRequest("ListTemplates", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTemplatesResponse> ListTemplatesWithOptionsAsync(ListTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTemplatesResponse>(await DoRequestAsync("ListTemplates", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListTemplatesResponse ListTemplates(ListTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTemplatesWithOptions(request, runtime);
        }

        public async Task<ListTemplatesResponse> ListTemplatesAsync(ListTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTemplatesWithOptionsAsync(request, runtime);
        }

        public CreateTemplateResponse CreateTemplateWithOptions(CreateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTemplateResponse>(DoRequest("CreateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateTemplateResponse> CreateTemplateWithOptionsAsync(CreateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTemplateResponse>(await DoRequestAsync("CreateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public CreateTemplateResponse CreateTemplate(CreateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateTemplateWithOptions(request, runtime);
        }

        public async Task<CreateTemplateResponse> CreateTemplateAsync(CreateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateTemplateWithOptionsAsync(request, runtime);
        }

        public CreateStackResponse CreateStackWithOptions(CreateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStackResponse>(DoRequest("CreateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateStackResponse> CreateStackWithOptionsAsync(CreateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStackResponse>(await DoRequestAsync("CreateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public CreateStackResponse CreateStack(CreateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateStackWithOptions(request, runtime);
        }

        public async Task<CreateStackResponse> CreateStackAsync(CreateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateStackWithOptionsAsync(request, runtime);
        }

        public GetStackResponse GetStackWithOptions(GetStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackResponse>(DoRequest("GetStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackResponse> GetStackWithOptionsAsync(GetStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackResponse>(await DoRequestAsync("GetStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
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

        public DeleteStackResponse DeleteStackWithOptions(DeleteStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackResponse>(DoRequest("DeleteStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteStackResponse> DeleteStackWithOptionsAsync(DeleteStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackResponse>(await DoRequestAsync("DeleteStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DeleteStackResponse DeleteStack(DeleteStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteStackWithOptions(request, runtime);
        }

        public async Task<DeleteStackResponse> DeleteStackAsync(DeleteStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteStackWithOptionsAsync(request, runtime);
        }

        public UpdateStackResponse UpdateStackWithOptions(UpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackResponse>(DoRequest("UpdateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateStackResponse> UpdateStackWithOptionsAsync(UpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackResponse>(await DoRequestAsync("UpdateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public UpdateStackResponse UpdateStack(UpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateStackWithOptions(request, runtime);
        }

        public async Task<UpdateStackResponse> UpdateStackAsync(UpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateStackWithOptionsAsync(request, runtime);
        }

        public ListStacksResponse ListStacksWithOptions(ListStacksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStacksResponse>(DoRequest("ListStacks", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStacksResponse> ListStacksWithOptionsAsync(ListStacksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStacksResponse>(await DoRequestAsync("ListStacks", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStacksResponse ListStacks(ListStacksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStacksWithOptions(request, runtime);
        }

        public async Task<ListStacksResponse> ListStacksAsync(ListStacksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStacksWithOptionsAsync(request, runtime);
        }

        public PreviewStackResponse PreviewStackWithOptions(PreviewStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreviewStackResponse>(DoRequest("PreviewStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PreviewStackResponse> PreviewStackWithOptionsAsync(PreviewStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreviewStackResponse>(await DoRequestAsync("PreviewStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public PreviewStackResponse PreviewStack(PreviewStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PreviewStackWithOptions(request, runtime);
        }

        public async Task<PreviewStackResponse> PreviewStackAsync(PreviewStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PreviewStackWithOptionsAsync(request, runtime);
        }

        public GetTemplateEstimateCostResponse GetTemplateEstimateCostWithOptions(GetTemplateEstimateCostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTemplateEstimateCostResponse>(DoRequest("GetTemplateEstimateCost", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTemplateEstimateCostResponse> GetTemplateEstimateCostWithOptionsAsync(GetTemplateEstimateCostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTemplateEstimateCostResponse>(await DoRequestAsync("GetTemplateEstimateCost", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetTemplateEstimateCostResponse GetTemplateEstimateCost(GetTemplateEstimateCostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTemplateEstimateCostWithOptions(request, runtime);
        }

        public async Task<GetTemplateEstimateCostResponse> GetTemplateEstimateCostAsync(GetTemplateEstimateCostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTemplateEstimateCostWithOptionsAsync(request, runtime);
        }

        public CancelUpdateStackResponse CancelUpdateStackWithOptions(CancelUpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelUpdateStackResponse>(DoRequest("CancelUpdateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelUpdateStackResponse> CancelUpdateStackWithOptionsAsync(CancelUpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelUpdateStackResponse>(await DoRequestAsync("CancelUpdateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public CancelUpdateStackResponse CancelUpdateStack(CancelUpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelUpdateStackWithOptions(request, runtime);
        }

        public async Task<CancelUpdateStackResponse> CancelUpdateStackAsync(CancelUpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelUpdateStackWithOptionsAsync(request, runtime);
        }

        public ContinueCreateStackResponse ContinueCreateStackWithOptions(ContinueCreateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ContinueCreateStackResponse>(DoRequest("ContinueCreateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ContinueCreateStackResponse> ContinueCreateStackWithOptionsAsync(ContinueCreateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ContinueCreateStackResponse>(await DoRequestAsync("ContinueCreateStack", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ContinueCreateStackResponse ContinueCreateStack(ContinueCreateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ContinueCreateStackWithOptions(request, runtime);
        }

        public async Task<ContinueCreateStackResponse> ContinueCreateStackAsync(ContinueCreateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ContinueCreateStackWithOptionsAsync(request, runtime);
        }

        public SetStackPolicyResponse SetStackPolicyWithOptions(SetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetStackPolicyResponse>(DoRequest("SetStackPolicy", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetStackPolicyResponse> SetStackPolicyWithOptionsAsync(SetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetStackPolicyResponse>(await DoRequestAsync("SetStackPolicy", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public SetStackPolicyResponse SetStackPolicy(SetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetStackPolicyWithOptions(request, runtime);
        }

        public async Task<SetStackPolicyResponse> SetStackPolicyAsync(SetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetStackPolicyWithOptionsAsync(request, runtime);
        }

        public GetStackPolicyResponse GetStackPolicyWithOptions(GetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackPolicyResponse>(DoRequest("GetStackPolicy", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackPolicyResponse> GetStackPolicyWithOptionsAsync(GetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackPolicyResponse>(await DoRequestAsync("GetStackPolicy", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetStackPolicyResponse GetStackPolicy(GetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackPolicyWithOptions(request, runtime);
        }

        public async Task<GetStackPolicyResponse> GetStackPolicyAsync(GetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackPolicyWithOptionsAsync(request, runtime);
        }

        public ValidateTemplateResponse ValidateTemplateWithOptions(ValidateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ValidateTemplateResponse>(DoRequest("ValidateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ValidateTemplateResponse> ValidateTemplateWithOptionsAsync(ValidateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ValidateTemplateResponse>(await DoRequestAsync("ValidateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ValidateTemplateResponse ValidateTemplate(ValidateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ValidateTemplateWithOptions(request, runtime);
        }

        public async Task<ValidateTemplateResponse> ValidateTemplateAsync(ValidateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ValidateTemplateWithOptionsAsync(request, runtime);
        }

        public GetTemplateResponse GetTemplateWithOptions(GetTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTemplateResponse>(DoRequest("GetTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTemplateResponse> GetTemplateWithOptionsAsync(GetTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTemplateResponse>(await DoRequestAsync("GetTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetTemplateResponse GetTemplate(GetTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTemplateWithOptions(request, runtime);
        }

        public async Task<GetTemplateResponse> GetTemplateAsync(GetTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTemplateWithOptionsAsync(request, runtime);
        }

        public GetChangeSetResponse GetChangeSetWithOptions(GetChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetChangeSetResponse>(DoRequest("GetChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetChangeSetResponse> GetChangeSetWithOptionsAsync(GetChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetChangeSetResponse>(await DoRequestAsync("GetChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetChangeSetResponse GetChangeSet(GetChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetChangeSetWithOptions(request, runtime);
        }

        public async Task<GetChangeSetResponse> GetChangeSetAsync(GetChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetChangeSetWithOptionsAsync(request, runtime);
        }

        public ListChangeSetsResponse ListChangeSetsWithOptions(ListChangeSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListChangeSetsResponse>(DoRequest("ListChangeSets", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListChangeSetsResponse> ListChangeSetsWithOptionsAsync(ListChangeSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListChangeSetsResponse>(await DoRequestAsync("ListChangeSets", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListChangeSetsResponse ListChangeSets(ListChangeSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListChangeSetsWithOptions(request, runtime);
        }

        public async Task<ListChangeSetsResponse> ListChangeSetsAsync(ListChangeSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListChangeSetsWithOptionsAsync(request, runtime);
        }

        public ExecuteChangeSetResponse ExecuteChangeSetWithOptions(ExecuteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecuteChangeSetResponse>(DoRequest("ExecuteChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ExecuteChangeSetResponse> ExecuteChangeSetWithOptionsAsync(ExecuteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecuteChangeSetResponse>(await DoRequestAsync("ExecuteChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ExecuteChangeSetResponse ExecuteChangeSet(ExecuteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExecuteChangeSetWithOptions(request, runtime);
        }

        public async Task<ExecuteChangeSetResponse> ExecuteChangeSetAsync(ExecuteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExecuteChangeSetWithOptionsAsync(request, runtime);
        }

        public DeleteChangeSetResponse DeleteChangeSetWithOptions(DeleteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteChangeSetResponse>(DoRequest("DeleteChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteChangeSetResponse> DeleteChangeSetWithOptionsAsync(DeleteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteChangeSetResponse>(await DoRequestAsync("DeleteChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public DeleteChangeSetResponse DeleteChangeSet(DeleteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteChangeSetWithOptions(request, runtime);
        }

        public async Task<DeleteChangeSetResponse> DeleteChangeSetAsync(DeleteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteChangeSetWithOptionsAsync(request, runtime);
        }

        public ListStackEventsResponse ListStackEventsWithOptions(ListStackEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackEventsResponse>(DoRequest("ListStackEvents", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackEventsResponse> ListStackEventsWithOptionsAsync(ListStackEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackEventsResponse>(await DoRequestAsync("ListStackEvents", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackEventsResponse ListStackEvents(ListStackEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackEventsWithOptions(request, runtime);
        }

        public async Task<ListStackEventsResponse> ListStackEventsAsync(ListStackEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackEventsWithOptionsAsync(request, runtime);
        }

        public ListStackResourcesResponse ListStackResourcesWithOptions(ListStackResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackResourcesResponse>(DoRequest("ListStackResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListStackResourcesResponse> ListStackResourcesWithOptionsAsync(ListStackResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListStackResourcesResponse>(await DoRequestAsync("ListStackResources", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListStackResourcesResponse ListStackResources(ListStackResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListStackResourcesWithOptions(request, runtime);
        }

        public async Task<ListStackResourcesResponse> ListStackResourcesAsync(ListStackResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListStackResourcesWithOptionsAsync(request, runtime);
        }

        public GetStackResourceResponse GetStackResourceWithOptions(GetStackResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackResourceResponse>(DoRequest("GetStackResource", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetStackResourceResponse> GetStackResourceWithOptionsAsync(GetStackResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackResourceResponse>(await DoRequestAsync("GetStackResource", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetStackResourceResponse GetStackResource(GetStackResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackResourceWithOptions(request, runtime);
        }

        public async Task<GetStackResourceResponse> GetStackResourceAsync(GetStackResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackResourceWithOptionsAsync(request, runtime);
        }

        public GetResourceTypeTemplateResponse GetResourceTypeTemplateWithOptions(GetResourceTypeTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetResourceTypeTemplateResponse>(DoRequest("GetResourceTypeTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetResourceTypeTemplateResponse> GetResourceTypeTemplateWithOptionsAsync(GetResourceTypeTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetResourceTypeTemplateResponse>(await DoRequestAsync("GetResourceTypeTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetResourceTypeTemplateResponse GetResourceTypeTemplate(GetResourceTypeTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetResourceTypeTemplateWithOptions(request, runtime);
        }

        public async Task<GetResourceTypeTemplateResponse> GetResourceTypeTemplateAsync(GetResourceTypeTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetResourceTypeTemplateWithOptionsAsync(request, runtime);
        }

        public GetResourceTypeResponse GetResourceTypeWithOptions(GetResourceTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetResourceTypeResponse>(DoRequest("GetResourceType", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetResourceTypeResponse> GetResourceTypeWithOptionsAsync(GetResourceTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetResourceTypeResponse>(await DoRequestAsync("GetResourceType", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public GetResourceTypeResponse GetResourceType(GetResourceTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetResourceTypeWithOptions(request, runtime);
        }

        public async Task<GetResourceTypeResponse> GetResourceTypeAsync(GetResourceTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetResourceTypeWithOptionsAsync(request, runtime);
        }

        public ListResourceTypesResponse ListResourceTypesWithOptions(ListResourceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListResourceTypesResponse>(DoRequest("ListResourceTypes", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListResourceTypesResponse> ListResourceTypesWithOptionsAsync(ListResourceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListResourceTypesResponse>(await DoRequestAsync("ListResourceTypes", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public ListResourceTypesResponse ListResourceTypes(ListResourceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListResourceTypesWithOptions(request, runtime);
        }

        public async Task<ListResourceTypesResponse> ListResourceTypesAsync(ListResourceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListResourceTypesWithOptionsAsync(request, runtime);
        }

        public SignalResourceResponse SignalResourceWithOptions(SignalResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SignalResourceResponse>(DoRequest("SignalResource", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SignalResourceResponse> SignalResourceWithOptionsAsync(SignalResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SignalResourceResponse>(await DoRequestAsync("SignalResource", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public SignalResourceResponse SignalResource(SignalResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SignalResourceWithOptions(request, runtime);
        }

        public async Task<SignalResourceResponse> SignalResourceAsync(SignalResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SignalResourceWithOptionsAsync(request, runtime);
        }

        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
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

        public CreateChangeSetResponse CreateChangeSetWithOptions(CreateChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateChangeSetResponse>(DoRequest("CreateChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateChangeSetResponse> CreateChangeSetWithOptionsAsync(CreateChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateChangeSetResponse>(await DoRequestAsync("CreateChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, request.ToMap(), runtime));
        }

        public CreateChangeSetResponse CreateChangeSet(CreateChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateChangeSetWithOptions(request, runtime);
        }

        public async Task<CreateChangeSetResponse> CreateChangeSetAsync(CreateChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateChangeSetWithOptionsAsync(request, runtime);
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
