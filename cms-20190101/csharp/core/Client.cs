// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Cms20190101.Models;

namespace AlibabaCloud.SDK.Cms20190101
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "";
            CheckConfig(config);
            this._endpoint = GetEndpoint("cms", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DescribeExporterOutputListResponse DescribeExporterOutputListWithOptions(DescribeExporterOutputListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExporterOutputListResponse>(DoRequest("DescribeExporterOutputList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeExporterOutputListResponse> DescribeExporterOutputListWithOptionsAsync(DescribeExporterOutputListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExporterOutputListResponse>(await DoRequestAsync("DescribeExporterOutputList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeExporterOutputListResponse DescribeExporterOutputList(DescribeExporterOutputListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeExporterOutputListWithOptions(request, runtime);
        }

        public async Task<DescribeExporterOutputListResponse> DescribeExporterOutputListAsync(DescribeExporterOutputListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeExporterOutputListWithOptionsAsync(request, runtime);
        }

        public DeleteExporterOutputResponse DeleteExporterOutputWithOptions(DeleteExporterOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExporterOutputResponse>(DoRequest("DeleteExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteExporterOutputResponse> DeleteExporterOutputWithOptionsAsync(DeleteExporterOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExporterOutputResponse>(await DoRequestAsync("DeleteExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteExporterOutputResponse DeleteExporterOutput(DeleteExporterOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteExporterOutputWithOptions(request, runtime);
        }

        public async Task<DeleteExporterOutputResponse> DeleteExporterOutputAsync(DeleteExporterOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteExporterOutputWithOptionsAsync(request, runtime);
        }

        public PutExporterOutputResponse PutExporterOutputWithOptions(PutExporterOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutExporterOutputResponse>(DoRequest("PutExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutExporterOutputResponse> PutExporterOutputWithOptionsAsync(PutExporterOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutExporterOutputResponse>(await DoRequestAsync("PutExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutExporterOutputResponse PutExporterOutput(PutExporterOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutExporterOutputWithOptions(request, runtime);
        }

        public async Task<PutExporterOutputResponse> PutExporterOutputAsync(PutExporterOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutExporterOutputWithOptionsAsync(request, runtime);
        }

        public DescribeFolderListResponse DescribeFolderListWithOptions(DescribeFolderListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFolderListResponse>(DoRequest("DescribeFolderList", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeFolderListResponse> DescribeFolderListWithOptionsAsync(DescribeFolderListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFolderListResponse>(await DoRequestAsync("DescribeFolderList", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeFolderListResponse DescribeFolderList(DescribeFolderListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeFolderListWithOptions(request, runtime);
        }

        public async Task<DescribeFolderListResponse> DescribeFolderListAsync(DescribeFolderListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeFolderListWithOptionsAsync(request, runtime);
        }

        public DeleteExporterRuleResponse DeleteExporterRuleWithOptions(DeleteExporterRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExporterRuleResponse>(DoRequest("DeleteExporterRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteExporterRuleResponse> DeleteExporterRuleWithOptionsAsync(DeleteExporterRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteExporterRuleResponse>(await DoRequestAsync("DeleteExporterRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteExporterRuleResponse DeleteExporterRule(DeleteExporterRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteExporterRuleWithOptions(request, runtime);
        }

        public async Task<DeleteExporterRuleResponse> DeleteExporterRuleAsync(DeleteExporterRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteExporterRuleWithOptionsAsync(request, runtime);
        }

        public DescribeExporterRuleListResponse DescribeExporterRuleListWithOptions(DescribeExporterRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExporterRuleListResponse>(DoRequest("DescribeExporterRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeExporterRuleListResponse> DescribeExporterRuleListWithOptionsAsync(DescribeExporterRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExporterRuleListResponse>(await DoRequestAsync("DescribeExporterRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeExporterRuleListResponse DescribeExporterRuleList(DescribeExporterRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeExporterRuleListWithOptions(request, runtime);
        }

        public async Task<DescribeExporterRuleListResponse> DescribeExporterRuleListAsync(DescribeExporterRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeExporterRuleListWithOptionsAsync(request, runtime);
        }

        public PutExporterRuleResponse PutExporterRuleWithOptions(PutExporterRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutExporterRuleResponse>(DoRequest("PutExporterRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutExporterRuleResponse> PutExporterRuleWithOptionsAsync(PutExporterRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutExporterRuleResponse>(await DoRequestAsync("PutExporterRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutExporterRuleResponse PutExporterRule(PutExporterRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutExporterRuleWithOptions(request, runtime);
        }

        public async Task<PutExporterRuleResponse> PutExporterRuleAsync(PutExporterRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutExporterRuleWithOptionsAsync(request, runtime);
        }

        public DescribeDynamicTagRuleListResponse DescribeDynamicTagRuleListWithOptions(DescribeDynamicTagRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDynamicTagRuleListResponse>(DoRequest("DescribeDynamicTagRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDynamicTagRuleListResponse> DescribeDynamicTagRuleListWithOptionsAsync(DescribeDynamicTagRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDynamicTagRuleListResponse>(await DoRequestAsync("DescribeDynamicTagRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDynamicTagRuleListResponse DescribeDynamicTagRuleList(DescribeDynamicTagRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDynamicTagRuleListWithOptions(request, runtime);
        }

        public async Task<DescribeDynamicTagRuleListResponse> DescribeDynamicTagRuleListAsync(DescribeDynamicTagRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDynamicTagRuleListWithOptionsAsync(request, runtime);
        }

        public DescribeProductResourceTagKeyListResponse DescribeProductResourceTagKeyListWithOptions(DescribeProductResourceTagKeyListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeProductResourceTagKeyListResponse>(DoRequest("DescribeProductResourceTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeProductResourceTagKeyListResponse> DescribeProductResourceTagKeyListWithOptionsAsync(DescribeProductResourceTagKeyListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeProductResourceTagKeyListResponse>(await DoRequestAsync("DescribeProductResourceTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeProductResourceTagKeyListResponse DescribeProductResourceTagKeyList(DescribeProductResourceTagKeyListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeProductResourceTagKeyListWithOptions(request, runtime);
        }

        public async Task<DescribeProductResourceTagKeyListResponse> DescribeProductResourceTagKeyListAsync(DescribeProductResourceTagKeyListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeProductResourceTagKeyListWithOptionsAsync(request, runtime);
        }

        public CreateDynamicTagGroupResponse CreateDynamicTagGroupWithOptions(CreateDynamicTagGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDynamicTagGroupResponse>(DoRequest("CreateDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDynamicTagGroupResponse> CreateDynamicTagGroupWithOptionsAsync(CreateDynamicTagGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDynamicTagGroupResponse>(await DoRequestAsync("CreateDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateDynamicTagGroupResponse CreateDynamicTagGroup(CreateDynamicTagGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDynamicTagGroupWithOptions(request, runtime);
        }

        public async Task<CreateDynamicTagGroupResponse> CreateDynamicTagGroupAsync(CreateDynamicTagGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDynamicTagGroupWithOptionsAsync(request, runtime);
        }

        public DeleteDynamicTagGroupResponse DeleteDynamicTagGroupWithOptions(DeleteDynamicTagGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDynamicTagGroupResponse>(DoRequest("DeleteDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDynamicTagGroupResponse> DeleteDynamicTagGroupWithOptionsAsync(DeleteDynamicTagGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDynamicTagGroupResponse>(await DoRequestAsync("DeleteDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDynamicTagGroupResponse DeleteDynamicTagGroup(DeleteDynamicTagGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDynamicTagGroupWithOptions(request, runtime);
        }

        public async Task<DeleteDynamicTagGroupResponse> DeleteDynamicTagGroupAsync(DeleteDynamicTagGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDynamicTagGroupWithOptionsAsync(request, runtime);
        }

        public ModifyGroupMonitoringAgentProcessResponse ModifyGroupMonitoringAgentProcessWithOptions(ModifyGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyGroupMonitoringAgentProcessResponse>(DoRequest("ModifyGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyGroupMonitoringAgentProcessResponse> ModifyGroupMonitoringAgentProcessWithOptionsAsync(ModifyGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyGroupMonitoringAgentProcessResponse>(await DoRequestAsync("ModifyGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyGroupMonitoringAgentProcessResponse ModifyGroupMonitoringAgentProcess(ModifyGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyGroupMonitoringAgentProcessWithOptions(request, runtime);
        }

        public async Task<ModifyGroupMonitoringAgentProcessResponse> ModifyGroupMonitoringAgentProcessAsync(ModifyGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyGroupMonitoringAgentProcessWithOptionsAsync(request, runtime);
        }

        public DeleteGroupMonitoringAgentProcessResponse DeleteGroupMonitoringAgentProcessWithOptions(DeleteGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGroupMonitoringAgentProcessResponse>(DoRequest("DeleteGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteGroupMonitoringAgentProcessResponse> DeleteGroupMonitoringAgentProcessWithOptionsAsync(DeleteGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGroupMonitoringAgentProcessResponse>(await DoRequestAsync("DeleteGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteGroupMonitoringAgentProcessResponse DeleteGroupMonitoringAgentProcess(DeleteGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteGroupMonitoringAgentProcessWithOptions(request, runtime);
        }

        public async Task<DeleteGroupMonitoringAgentProcessResponse> DeleteGroupMonitoringAgentProcessAsync(DeleteGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteGroupMonitoringAgentProcessWithOptionsAsync(request, runtime);
        }

        public CreateGroupMonitoringAgentProcessResponse CreateGroupMonitoringAgentProcessWithOptions(CreateGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGroupMonitoringAgentProcessResponse>(DoRequest("CreateGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateGroupMonitoringAgentProcessResponse> CreateGroupMonitoringAgentProcessWithOptionsAsync(CreateGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGroupMonitoringAgentProcessResponse>(await DoRequestAsync("CreateGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateGroupMonitoringAgentProcessResponse CreateGroupMonitoringAgentProcess(CreateGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateGroupMonitoringAgentProcessWithOptions(request, runtime);
        }

        public async Task<CreateGroupMonitoringAgentProcessResponse> CreateGroupMonitoringAgentProcessAsync(CreateGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateGroupMonitoringAgentProcessWithOptionsAsync(request, runtime);
        }

        public DescribeTagKeyListResponse DescribeTagKeyListWithOptions(DescribeTagKeyListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagKeyListResponse>(DoRequest("DescribeTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTagKeyListResponse> DescribeTagKeyListWithOptionsAsync(DescribeTagKeyListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagKeyListResponse>(await DoRequestAsync("DescribeTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTagKeyListResponse DescribeTagKeyList(DescribeTagKeyListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTagKeyListWithOptions(request, runtime);
        }

        public async Task<DescribeTagKeyListResponse> DescribeTagKeyListAsync(DescribeTagKeyListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTagKeyListWithOptionsAsync(request, runtime);
        }

        public DescribeTagValueListResponse DescribeTagValueListWithOptions(DescribeTagValueListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagValueListResponse>(DoRequest("DescribeTagValueList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTagValueListResponse> DescribeTagValueListWithOptionsAsync(DescribeTagValueListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagValueListResponse>(await DoRequestAsync("DescribeTagValueList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTagValueListResponse DescribeTagValueList(DescribeTagValueListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTagValueListWithOptions(request, runtime);
        }

        public async Task<DescribeTagValueListResponse> DescribeTagValueListAsync(DescribeTagValueListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTagValueListWithOptionsAsync(request, runtime);
        }

        public RemoveTagsResponse RemoveTagsWithOptions(RemoveTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsResponse>(DoRequest("RemoveTags", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveTagsResponse> RemoveTagsWithOptionsAsync(RemoveTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsResponse>(await DoRequestAsync("RemoveTags", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public RemoveTagsResponse RemoveTags(RemoveTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveTagsWithOptions(request, runtime);
        }

        public async Task<RemoveTagsResponse> RemoveTagsAsync(RemoveTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveTagsWithOptionsAsync(request, runtime);
        }

        public AddTagsResponse AddTagsWithOptions(AddTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTagsResponse>(DoRequest("AddTags", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddTagsResponse> AddTagsWithOptionsAsync(AddTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTagsResponse>(await DoRequestAsync("AddTags", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public AddTagsResponse AddTags(AddTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddTagsWithOptions(request, runtime);
        }

        public async Task<AddTagsResponse> AddTagsAsync(AddTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddTagsWithOptionsAsync(request, runtime);
        }

        public DescribeGroupMonitoringAgentProcessResponse DescribeGroupMonitoringAgentProcessWithOptions(DescribeGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGroupMonitoringAgentProcessResponse>(DoRequest("DescribeGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGroupMonitoringAgentProcessResponse> DescribeGroupMonitoringAgentProcessWithOptionsAsync(DescribeGroupMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGroupMonitoringAgentProcessResponse>(await DoRequestAsync("DescribeGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGroupMonitoringAgentProcessResponse DescribeGroupMonitoringAgentProcess(DescribeGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGroupMonitoringAgentProcessWithOptions(request, runtime);
        }

        public async Task<DescribeGroupMonitoringAgentProcessResponse> DescribeGroupMonitoringAgentProcessAsync(DescribeGroupMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGroupMonitoringAgentProcessWithOptionsAsync(request, runtime);
        }

        public PutResourceMetricRulesResponse PutResourceMetricRulesWithOptions(PutResourceMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutResourceMetricRulesResponse>(DoRequest("PutResourceMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutResourceMetricRulesResponse> PutResourceMetricRulesWithOptionsAsync(PutResourceMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutResourceMetricRulesResponse>(await DoRequestAsync("PutResourceMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutResourceMetricRulesResponse PutResourceMetricRules(PutResourceMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutResourceMetricRulesWithOptions(request, runtime);
        }

        public async Task<PutResourceMetricRulesResponse> PutResourceMetricRulesAsync(PutResourceMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutResourceMetricRulesWithOptionsAsync(request, runtime);
        }

        public CreateMetricRuleResourcesResponse CreateMetricRuleResourcesWithOptions(CreateMetricRuleResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMetricRuleResourcesResponse>(DoRequest("CreateMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMetricRuleResourcesResponse> CreateMetricRuleResourcesWithOptionsAsync(CreateMetricRuleResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMetricRuleResourcesResponse>(await DoRequestAsync("CreateMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateMetricRuleResourcesResponse CreateMetricRuleResources(CreateMetricRuleResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMetricRuleResourcesWithOptions(request, runtime);
        }

        public async Task<CreateMetricRuleResourcesResponse> CreateMetricRuleResourcesAsync(CreateMetricRuleResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMetricRuleResourcesWithOptionsAsync(request, runtime);
        }

        public DeleteMetricRuleResourcesResponse DeleteMetricRuleResourcesWithOptions(DeleteMetricRuleResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRuleResourcesResponse>(DoRequest("DeleteMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMetricRuleResourcesResponse> DeleteMetricRuleResourcesWithOptionsAsync(DeleteMetricRuleResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRuleResourcesResponse>(await DoRequestAsync("DeleteMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMetricRuleResourcesResponse DeleteMetricRuleResources(DeleteMetricRuleResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMetricRuleResourcesWithOptions(request, runtime);
        }

        public async Task<DeleteMetricRuleResourcesResponse> DeleteMetricRuleResourcesAsync(DeleteMetricRuleResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMetricRuleResourcesWithOptionsAsync(request, runtime);
        }

        public DeleteMetricRuleTargetsResponse DeleteMetricRuleTargetsWithOptions(DeleteMetricRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRuleTargetsResponse>(DoRequest("DeleteMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMetricRuleTargetsResponse> DeleteMetricRuleTargetsWithOptionsAsync(DeleteMetricRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRuleTargetsResponse>(await DoRequestAsync("DeleteMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMetricRuleTargetsResponse DeleteMetricRuleTargets(DeleteMetricRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMetricRuleTargetsWithOptions(request, runtime);
        }

        public async Task<DeleteMetricRuleTargetsResponse> DeleteMetricRuleTargetsAsync(DeleteMetricRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMetricRuleTargetsWithOptionsAsync(request, runtime);
        }

        public PutMetricRuleTargetsResponse PutMetricRuleTargetsWithOptions(PutMetricRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutMetricRuleTargetsResponse>(DoRequest("PutMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutMetricRuleTargetsResponse> PutMetricRuleTargetsWithOptionsAsync(PutMetricRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutMetricRuleTargetsResponse>(await DoRequestAsync("PutMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutMetricRuleTargetsResponse PutMetricRuleTargets(PutMetricRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutMetricRuleTargetsWithOptions(request, runtime);
        }

        public async Task<PutMetricRuleTargetsResponse> PutMetricRuleTargetsAsync(PutMetricRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutMetricRuleTargetsWithOptionsAsync(request, runtime);
        }

        public DescribeMetricRuleTargetsResponse DescribeMetricRuleTargetsWithOptions(DescribeMetricRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleTargetsResponse>(DoRequest("DescribeMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricRuleTargetsResponse> DescribeMetricRuleTargetsWithOptionsAsync(DescribeMetricRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleTargetsResponse>(await DoRequestAsync("DescribeMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricRuleTargetsResponse DescribeMetricRuleTargets(DescribeMetricRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricRuleTargetsWithOptions(request, runtime);
        }

        public async Task<DescribeMetricRuleTargetsResponse> DescribeMetricRuleTargetsAsync(DescribeMetricRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricRuleTargetsWithOptionsAsync(request, runtime);
        }

        public ModifyMonitorGroupInstancesResponse ModifyMonitorGroupInstancesWithOptions(ModifyMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMonitorGroupInstancesResponse>(DoRequest("ModifyMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyMonitorGroupInstancesResponse> ModifyMonitorGroupInstancesWithOptionsAsync(ModifyMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMonitorGroupInstancesResponse>(await DoRequestAsync("ModifyMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyMonitorGroupInstancesResponse ModifyMonitorGroupInstances(ModifyMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyMonitorGroupInstancesWithOptions(request, runtime);
        }

        public async Task<ModifyMonitorGroupInstancesResponse> ModifyMonitorGroupInstancesAsync(ModifyMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyMonitorGroupInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeMonitoringAgentStatusesResponse DescribeMonitoringAgentStatusesWithOptions(DescribeMonitoringAgentStatusesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentStatusesResponse>(DoRequest("DescribeMonitoringAgentStatuses", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitoringAgentStatusesResponse> DescribeMonitoringAgentStatusesWithOptionsAsync(DescribeMonitoringAgentStatusesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentStatusesResponse>(await DoRequestAsync("DescribeMonitoringAgentStatuses", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitoringAgentStatusesResponse DescribeMonitoringAgentStatuses(DescribeMonitoringAgentStatusesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitoringAgentStatusesWithOptions(request, runtime);
        }

        public async Task<DescribeMonitoringAgentStatusesResponse> DescribeMonitoringAgentStatusesAsync(DescribeMonitoringAgentStatusesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitoringAgentStatusesWithOptionsAsync(request, runtime);
        }

        public CreateMonitorAgentProcessResponse CreateMonitorAgentProcessWithOptions(CreateMonitorAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorAgentProcessResponse>(DoRequest("CreateMonitorAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMonitorAgentProcessResponse> CreateMonitorAgentProcessWithOptionsAsync(CreateMonitorAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorAgentProcessResponse>(await DoRequestAsync("CreateMonitorAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateMonitorAgentProcessResponse CreateMonitorAgentProcess(CreateMonitorAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMonitorAgentProcessWithOptions(request, runtime);
        }

        public async Task<CreateMonitorAgentProcessResponse> CreateMonitorAgentProcessAsync(CreateMonitorAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMonitorAgentProcessWithOptionsAsync(request, runtime);
        }

        public DescribeAlertHistoryListResponse DescribeAlertHistoryListWithOptions(DescribeAlertHistoryListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAlertHistoryListResponse>(DoRequest("DescribeAlertHistoryList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAlertHistoryListResponse> DescribeAlertHistoryListWithOptionsAsync(DescribeAlertHistoryListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAlertHistoryListResponse>(await DoRequestAsync("DescribeAlertHistoryList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAlertHistoryListResponse DescribeAlertHistoryList(DescribeAlertHistoryListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAlertHistoryListWithOptions(request, runtime);
        }

        public async Task<DescribeAlertHistoryListResponse> DescribeAlertHistoryListAsync(DescribeAlertHistoryListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAlertHistoryListWithOptionsAsync(request, runtime);
        }

        public DescribeAlertingMetricRuleResourcesResponse DescribeAlertingMetricRuleResourcesWithOptions(DescribeAlertingMetricRuleResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAlertingMetricRuleResourcesResponse>(DoRequest("DescribeAlertingMetricRuleResources", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAlertingMetricRuleResourcesResponse> DescribeAlertingMetricRuleResourcesWithOptionsAsync(DescribeAlertingMetricRuleResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAlertingMetricRuleResourcesResponse>(await DoRequestAsync("DescribeAlertingMetricRuleResources", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAlertingMetricRuleResourcesResponse DescribeAlertingMetricRuleResources(DescribeAlertingMetricRuleResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAlertingMetricRuleResourcesWithOptions(request, runtime);
        }

        public async Task<DescribeAlertingMetricRuleResourcesResponse> DescribeAlertingMetricRuleResourcesAsync(DescribeAlertingMetricRuleResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAlertingMetricRuleResourcesWithOptionsAsync(request, runtime);
        }

        public DisableActiveMetricRuleResponse DisableActiveMetricRuleWithOptions(DisableActiveMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableActiveMetricRuleResponse>(DoRequest("DisableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DisableActiveMetricRuleResponse> DisableActiveMetricRuleWithOptionsAsync(DisableActiveMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableActiveMetricRuleResponse>(await DoRequestAsync("DisableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DisableActiveMetricRuleResponse DisableActiveMetricRule(DisableActiveMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableActiveMetricRuleWithOptions(request, runtime);
        }

        public async Task<DisableActiveMetricRuleResponse> DisableActiveMetricRuleAsync(DisableActiveMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableActiveMetricRuleWithOptionsAsync(request, runtime);
        }

        public DescribeActiveMetricRuleListResponse DescribeActiveMetricRuleListWithOptions(DescribeActiveMetricRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeActiveMetricRuleListResponse>(DoRequest("DescribeActiveMetricRuleList", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeActiveMetricRuleListResponse> DescribeActiveMetricRuleListWithOptionsAsync(DescribeActiveMetricRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeActiveMetricRuleListResponse>(await DoRequestAsync("DescribeActiveMetricRuleList", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeActiveMetricRuleListResponse DescribeActiveMetricRuleList(DescribeActiveMetricRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeActiveMetricRuleListWithOptions(request, runtime);
        }

        public async Task<DescribeActiveMetricRuleListResponse> DescribeActiveMetricRuleListAsync(DescribeActiveMetricRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeActiveMetricRuleListWithOptionsAsync(request, runtime);
        }

        public DescribeProductsOfActiveMetricRuleResponse DescribeProductsOfActiveMetricRuleWithOptions(DescribeProductsOfActiveMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeProductsOfActiveMetricRuleResponse>(DoRequest("DescribeProductsOfActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeProductsOfActiveMetricRuleResponse> DescribeProductsOfActiveMetricRuleWithOptionsAsync(DescribeProductsOfActiveMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeProductsOfActiveMetricRuleResponse>(await DoRequestAsync("DescribeProductsOfActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeProductsOfActiveMetricRuleResponse DescribeProductsOfActiveMetricRule(DescribeProductsOfActiveMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeProductsOfActiveMetricRuleWithOptions(request, runtime);
        }

        public async Task<DescribeProductsOfActiveMetricRuleResponse> DescribeProductsOfActiveMetricRuleAsync(DescribeProductsOfActiveMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeProductsOfActiveMetricRuleWithOptionsAsync(request, runtime);
        }

        public EnableActiveMetricRuleResponse EnableActiveMetricRuleWithOptions(EnableActiveMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableActiveMetricRuleResponse>(DoRequest("EnableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableActiveMetricRuleResponse> EnableActiveMetricRuleWithOptionsAsync(EnableActiveMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableActiveMetricRuleResponse>(await DoRequestAsync("EnableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public EnableActiveMetricRuleResponse EnableActiveMetricRule(EnableActiveMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableActiveMetricRuleWithOptions(request, runtime);
        }

        public async Task<EnableActiveMetricRuleResponse> EnableActiveMetricRuleAsync(EnableActiveMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableActiveMetricRuleWithOptionsAsync(request, runtime);
        }

        public DescribeMonitorGroupInstanceAttributeResponse DescribeMonitorGroupInstanceAttributeWithOptions(DescribeMonitorGroupInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupInstanceAttributeResponse>(DoRequest("DescribeMonitorGroupInstanceAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitorGroupInstanceAttributeResponse> DescribeMonitorGroupInstanceAttributeWithOptionsAsync(DescribeMonitorGroupInstanceAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupInstanceAttributeResponse>(await DoRequestAsync("DescribeMonitorGroupInstanceAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitorGroupInstanceAttributeResponse DescribeMonitorGroupInstanceAttribute(DescribeMonitorGroupInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitorGroupInstanceAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeMonitorGroupInstanceAttributeResponse> DescribeMonitorGroupInstanceAttributeAsync(DescribeMonitorGroupInstanceAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitorGroupInstanceAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeMonitorGroupNotifyPolicyListResponse DescribeMonitorGroupNotifyPolicyListWithOptions(DescribeMonitorGroupNotifyPolicyListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupNotifyPolicyListResponse>(DoRequest("DescribeMonitorGroupNotifyPolicyList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitorGroupNotifyPolicyListResponse> DescribeMonitorGroupNotifyPolicyListWithOptionsAsync(DescribeMonitorGroupNotifyPolicyListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupNotifyPolicyListResponse>(await DoRequestAsync("DescribeMonitorGroupNotifyPolicyList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitorGroupNotifyPolicyListResponse DescribeMonitorGroupNotifyPolicyList(DescribeMonitorGroupNotifyPolicyListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitorGroupNotifyPolicyListWithOptions(request, runtime);
        }

        public async Task<DescribeMonitorGroupNotifyPolicyListResponse> DescribeMonitorGroupNotifyPolicyListAsync(DescribeMonitorGroupNotifyPolicyListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitorGroupNotifyPolicyListWithOptionsAsync(request, runtime);
        }

        public DeleteMonitorGroupResponse DeleteMonitorGroupWithOptions(DeleteMonitorGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupResponse>(DoRequest("DeleteMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMonitorGroupResponse> DeleteMonitorGroupWithOptionsAsync(DeleteMonitorGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupResponse>(await DoRequestAsync("DeleteMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMonitorGroupResponse DeleteMonitorGroup(DeleteMonitorGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMonitorGroupWithOptions(request, runtime);
        }

        public async Task<DeleteMonitorGroupResponse> DeleteMonitorGroupAsync(DeleteMonitorGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMonitorGroupWithOptionsAsync(request, runtime);
        }

        public CreateMonitorGroupResponse CreateMonitorGroupWithOptions(CreateMonitorGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorGroupResponse>(DoRequest("CreateMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMonitorGroupResponse> CreateMonitorGroupWithOptionsAsync(CreateMonitorGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorGroupResponse>(await DoRequestAsync("CreateMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateMonitorGroupResponse CreateMonitorGroup(CreateMonitorGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMonitorGroupWithOptions(request, runtime);
        }

        public async Task<CreateMonitorGroupResponse> CreateMonitorGroupAsync(CreateMonitorGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMonitorGroupWithOptionsAsync(request, runtime);
        }

        public DescribeMonitorGroupsResponse DescribeMonitorGroupsWithOptions(DescribeMonitorGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupsResponse>(DoRequest("DescribeMonitorGroups", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitorGroupsResponse> DescribeMonitorGroupsWithOptionsAsync(DescribeMonitorGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupsResponse>(await DoRequestAsync("DescribeMonitorGroups", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitorGroupsResponse DescribeMonitorGroups(DescribeMonitorGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitorGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeMonitorGroupsResponse> DescribeMonitorGroupsAsync(DescribeMonitorGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitorGroupsWithOptionsAsync(request, runtime);
        }

        public DeleteMonitorGroupNotifyPolicyResponse DeleteMonitorGroupNotifyPolicyWithOptions(DeleteMonitorGroupNotifyPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupNotifyPolicyResponse>(DoRequest("DeleteMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMonitorGroupNotifyPolicyResponse> DeleteMonitorGroupNotifyPolicyWithOptionsAsync(DeleteMonitorGroupNotifyPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupNotifyPolicyResponse>(await DoRequestAsync("DeleteMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMonitorGroupNotifyPolicyResponse DeleteMonitorGroupNotifyPolicy(DeleteMonitorGroupNotifyPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMonitorGroupNotifyPolicyWithOptions(request, runtime);
        }

        public async Task<DeleteMonitorGroupNotifyPolicyResponse> DeleteMonitorGroupNotifyPolicyAsync(DeleteMonitorGroupNotifyPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMonitorGroupNotifyPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeMonitorGroupDynamicRulesResponse DescribeMonitorGroupDynamicRulesWithOptions(DescribeMonitorGroupDynamicRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupDynamicRulesResponse>(DoRequest("DescribeMonitorGroupDynamicRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitorGroupDynamicRulesResponse> DescribeMonitorGroupDynamicRulesWithOptionsAsync(DescribeMonitorGroupDynamicRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupDynamicRulesResponse>(await DoRequestAsync("DescribeMonitorGroupDynamicRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitorGroupDynamicRulesResponse DescribeMonitorGroupDynamicRules(DescribeMonitorGroupDynamicRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitorGroupDynamicRulesWithOptions(request, runtime);
        }

        public async Task<DescribeMonitorGroupDynamicRulesResponse> DescribeMonitorGroupDynamicRulesAsync(DescribeMonitorGroupDynamicRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitorGroupDynamicRulesWithOptionsAsync(request, runtime);
        }

        public CreateMonitorGroupInstancesResponse CreateMonitorGroupInstancesWithOptions(CreateMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorGroupInstancesResponse>(DoRequest("CreateMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMonitorGroupInstancesResponse> CreateMonitorGroupInstancesWithOptionsAsync(CreateMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorGroupInstancesResponse>(await DoRequestAsync("CreateMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateMonitorGroupInstancesResponse CreateMonitorGroupInstances(CreateMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMonitorGroupInstancesWithOptions(request, runtime);
        }

        public async Task<CreateMonitorGroupInstancesResponse> CreateMonitorGroupInstancesAsync(CreateMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMonitorGroupInstancesWithOptionsAsync(request, runtime);
        }

        public CreateMonitorGroupNotifyPolicyResponse CreateMonitorGroupNotifyPolicyWithOptions(CreateMonitorGroupNotifyPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorGroupNotifyPolicyResponse>(DoRequest("CreateMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMonitorGroupNotifyPolicyResponse> CreateMonitorGroupNotifyPolicyWithOptionsAsync(CreateMonitorGroupNotifyPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitorGroupNotifyPolicyResponse>(await DoRequestAsync("CreateMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateMonitorGroupNotifyPolicyResponse CreateMonitorGroupNotifyPolicy(CreateMonitorGroupNotifyPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMonitorGroupNotifyPolicyWithOptions(request, runtime);
        }

        public async Task<CreateMonitorGroupNotifyPolicyResponse> CreateMonitorGroupNotifyPolicyAsync(CreateMonitorGroupNotifyPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMonitorGroupNotifyPolicyWithOptionsAsync(request, runtime);
        }

        public DeleteMonitorGroupInstancesResponse DeleteMonitorGroupInstancesWithOptions(DeleteMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupInstancesResponse>(DoRequest("DeleteMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMonitorGroupInstancesResponse> DeleteMonitorGroupInstancesWithOptionsAsync(DeleteMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupInstancesResponse>(await DoRequestAsync("DeleteMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMonitorGroupInstancesResponse DeleteMonitorGroupInstances(DeleteMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMonitorGroupInstancesWithOptions(request, runtime);
        }

        public async Task<DeleteMonitorGroupInstancesResponse> DeleteMonitorGroupInstancesAsync(DeleteMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMonitorGroupInstancesWithOptionsAsync(request, runtime);
        }

        public DeleteMonitorGroupDynamicRuleResponse DeleteMonitorGroupDynamicRuleWithOptions(DeleteMonitorGroupDynamicRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupDynamicRuleResponse>(DoRequest("DeleteMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMonitorGroupDynamicRuleResponse> DeleteMonitorGroupDynamicRuleWithOptionsAsync(DeleteMonitorGroupDynamicRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitorGroupDynamicRuleResponse>(await DoRequestAsync("DeleteMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMonitorGroupDynamicRuleResponse DeleteMonitorGroupDynamicRule(DeleteMonitorGroupDynamicRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMonitorGroupDynamicRuleWithOptions(request, runtime);
        }

        public async Task<DeleteMonitorGroupDynamicRuleResponse> DeleteMonitorGroupDynamicRuleAsync(DeleteMonitorGroupDynamicRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMonitorGroupDynamicRuleWithOptionsAsync(request, runtime);
        }

        public PutMonitorGroupDynamicRuleResponse PutMonitorGroupDynamicRuleWithOptions(PutMonitorGroupDynamicRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutMonitorGroupDynamicRuleResponse>(DoRequest("PutMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutMonitorGroupDynamicRuleResponse> PutMonitorGroupDynamicRuleWithOptionsAsync(PutMonitorGroupDynamicRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutMonitorGroupDynamicRuleResponse>(await DoRequestAsync("PutMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutMonitorGroupDynamicRuleResponse PutMonitorGroupDynamicRule(PutMonitorGroupDynamicRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutMonitorGroupDynamicRuleWithOptions(request, runtime);
        }

        public async Task<PutMonitorGroupDynamicRuleResponse> PutMonitorGroupDynamicRuleAsync(PutMonitorGroupDynamicRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutMonitorGroupDynamicRuleWithOptionsAsync(request, runtime);
        }

        public DescribeMonitorGroupInstancesResponse DescribeMonitorGroupInstancesWithOptions(DescribeMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupInstancesResponse>(DoRequest("DescribeMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitorGroupInstancesResponse> DescribeMonitorGroupInstancesWithOptionsAsync(DescribeMonitorGroupInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupInstancesResponse>(await DoRequestAsync("DescribeMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitorGroupInstancesResponse DescribeMonitorGroupInstances(DescribeMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitorGroupInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeMonitorGroupInstancesResponse> DescribeMonitorGroupInstancesAsync(DescribeMonitorGroupInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitorGroupInstancesWithOptionsAsync(request, runtime);
        }

        public DescribeMonitorGroupCategoriesResponse DescribeMonitorGroupCategoriesWithOptions(DescribeMonitorGroupCategoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupCategoriesResponse>(DoRequest("DescribeMonitorGroupCategories", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitorGroupCategoriesResponse> DescribeMonitorGroupCategoriesWithOptionsAsync(DescribeMonitorGroupCategoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitorGroupCategoriesResponse>(await DoRequestAsync("DescribeMonitorGroupCategories", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitorGroupCategoriesResponse DescribeMonitorGroupCategories(DescribeMonitorGroupCategoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitorGroupCategoriesWithOptions(request, runtime);
        }

        public async Task<DescribeMonitorGroupCategoriesResponse> DescribeMonitorGroupCategoriesAsync(DescribeMonitorGroupCategoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitorGroupCategoriesWithOptionsAsync(request, runtime);
        }

        public ModifyMonitorGroupResponse ModifyMonitorGroupWithOptions(ModifyMonitorGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMonitorGroupResponse>(DoRequest("ModifyMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyMonitorGroupResponse> ModifyMonitorGroupWithOptionsAsync(ModifyMonitorGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMonitorGroupResponse>(await DoRequestAsync("ModifyMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyMonitorGroupResponse ModifyMonitorGroup(ModifyMonitorGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyMonitorGroupWithOptions(request, runtime);
        }

        public async Task<ModifyMonitorGroupResponse> ModifyMonitorGroupAsync(ModifyMonitorGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyMonitorGroupWithOptionsAsync(request, runtime);
        }

        public DescribeMetricRuleListResponse DescribeMetricRuleListWithOptions(DescribeMetricRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleListResponse>(DoRequest("DescribeMetricRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricRuleListResponse> DescribeMetricRuleListWithOptionsAsync(DescribeMetricRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleListResponse>(await DoRequestAsync("DescribeMetricRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricRuleListResponse DescribeMetricRuleList(DescribeMetricRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricRuleListWithOptions(request, runtime);
        }

        public async Task<DescribeMetricRuleListResponse> DescribeMetricRuleListAsync(DescribeMetricRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricRuleListWithOptionsAsync(request, runtime);
        }

        public PutResourceMetricRuleResponse PutResourceMetricRuleWithOptions(PutResourceMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutResourceMetricRuleResponse>(DoRequest("PutResourceMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutResourceMetricRuleResponse> PutResourceMetricRuleWithOptionsAsync(PutResourceMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutResourceMetricRuleResponse>(await DoRequestAsync("PutResourceMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutResourceMetricRuleResponse PutResourceMetricRule(PutResourceMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutResourceMetricRuleWithOptions(request, runtime);
        }

        public async Task<PutResourceMetricRuleResponse> PutResourceMetricRuleAsync(PutResourceMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutResourceMetricRuleWithOptionsAsync(request, runtime);
        }

        public PutGroupMetricRuleResponse PutGroupMetricRuleWithOptions(PutGroupMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutGroupMetricRuleResponse>(DoRequest("PutGroupMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutGroupMetricRuleResponse> PutGroupMetricRuleWithOptionsAsync(PutGroupMetricRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutGroupMetricRuleResponse>(await DoRequestAsync("PutGroupMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutGroupMetricRuleResponse PutGroupMetricRule(PutGroupMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutGroupMetricRuleWithOptions(request, runtime);
        }

        public async Task<PutGroupMetricRuleResponse> PutGroupMetricRuleAsync(PutGroupMetricRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutGroupMetricRuleWithOptionsAsync(request, runtime);
        }

        public EnableMetricRulesResponse EnableMetricRulesWithOptions(EnableMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableMetricRulesResponse>(DoRequest("EnableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableMetricRulesResponse> EnableMetricRulesWithOptionsAsync(EnableMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableMetricRulesResponse>(await DoRequestAsync("EnableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public EnableMetricRulesResponse EnableMetricRules(EnableMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableMetricRulesWithOptions(request, runtime);
        }

        public async Task<EnableMetricRulesResponse> EnableMetricRulesAsync(EnableMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableMetricRulesWithOptionsAsync(request, runtime);
        }

        public DescribeMetricRuleCountResponse DescribeMetricRuleCountWithOptions(DescribeMetricRuleCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleCountResponse>(DoRequest("DescribeMetricRuleCount", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricRuleCountResponse> DescribeMetricRuleCountWithOptionsAsync(DescribeMetricRuleCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleCountResponse>(await DoRequestAsync("DescribeMetricRuleCount", "HTTPS", "GET", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricRuleCountResponse DescribeMetricRuleCount(DescribeMetricRuleCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricRuleCountWithOptions(request, runtime);
        }

        public async Task<DescribeMetricRuleCountResponse> DescribeMetricRuleCountAsync(DescribeMetricRuleCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricRuleCountWithOptionsAsync(request, runtime);
        }

        public CreateGroupMetricRulesResponse CreateGroupMetricRulesWithOptions(CreateGroupMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGroupMetricRulesResponse>(DoRequest("CreateGroupMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateGroupMetricRulesResponse> CreateGroupMetricRulesWithOptionsAsync(CreateGroupMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateGroupMetricRulesResponse>(await DoRequestAsync("CreateGroupMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateGroupMetricRulesResponse CreateGroupMetricRules(CreateGroupMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateGroupMetricRulesWithOptions(request, runtime);
        }

        public async Task<CreateGroupMetricRulesResponse> CreateGroupMetricRulesAsync(CreateGroupMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateGroupMetricRulesWithOptionsAsync(request, runtime);
        }

        public DisableMetricRulesResponse DisableMetricRulesWithOptions(DisableMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableMetricRulesResponse>(DoRequest("DisableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DisableMetricRulesResponse> DisableMetricRulesWithOptionsAsync(DisableMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableMetricRulesResponse>(await DoRequestAsync("DisableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DisableMetricRulesResponse DisableMetricRules(DisableMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableMetricRulesWithOptions(request, runtime);
        }

        public async Task<DisableMetricRulesResponse> DisableMetricRulesAsync(DisableMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableMetricRulesWithOptionsAsync(request, runtime);
        }

        public DeleteMetricRulesResponse DeleteMetricRulesWithOptions(DeleteMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRulesResponse>(DoRequest("DeleteMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMetricRulesResponse> DeleteMetricRulesWithOptionsAsync(DeleteMetricRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRulesResponse>(await DoRequestAsync("DeleteMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMetricRulesResponse DeleteMetricRules(DeleteMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMetricRulesWithOptions(request, runtime);
        }

        public async Task<DeleteMetricRulesResponse> DeleteMetricRulesAsync(DeleteMetricRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMetricRulesWithOptionsAsync(request, runtime);
        }

        public ModifyMetricRuleTemplateResponse ModifyMetricRuleTemplateWithOptions(ModifyMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMetricRuleTemplateResponse>(DoRequest("ModifyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyMetricRuleTemplateResponse> ModifyMetricRuleTemplateWithOptionsAsync(ModifyMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMetricRuleTemplateResponse>(await DoRequestAsync("ModifyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyMetricRuleTemplateResponse ModifyMetricRuleTemplate(ModifyMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyMetricRuleTemplateWithOptions(request, runtime);
        }

        public async Task<ModifyMetricRuleTemplateResponse> ModifyMetricRuleTemplateAsync(ModifyMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyMetricRuleTemplateWithOptionsAsync(request, runtime);
        }

        public ApplyMetricRuleTemplateResponse ApplyMetricRuleTemplateWithOptions(ApplyMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyMetricRuleTemplateResponse>(DoRequest("ApplyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ApplyMetricRuleTemplateResponse> ApplyMetricRuleTemplateWithOptionsAsync(ApplyMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyMetricRuleTemplateResponse>(await DoRequestAsync("ApplyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public ApplyMetricRuleTemplateResponse ApplyMetricRuleTemplate(ApplyMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ApplyMetricRuleTemplateWithOptions(request, runtime);
        }

        public async Task<ApplyMetricRuleTemplateResponse> ApplyMetricRuleTemplateAsync(ApplyMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ApplyMetricRuleTemplateWithOptionsAsync(request, runtime);
        }

        public DescribeMetricRuleTemplateAttributeResponse DescribeMetricRuleTemplateAttributeWithOptions(DescribeMetricRuleTemplateAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleTemplateAttributeResponse>(DoRequest("DescribeMetricRuleTemplateAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricRuleTemplateAttributeResponse> DescribeMetricRuleTemplateAttributeWithOptionsAsync(DescribeMetricRuleTemplateAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleTemplateAttributeResponse>(await DoRequestAsync("DescribeMetricRuleTemplateAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricRuleTemplateAttributeResponse DescribeMetricRuleTemplateAttribute(DescribeMetricRuleTemplateAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricRuleTemplateAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeMetricRuleTemplateAttributeResponse> DescribeMetricRuleTemplateAttributeAsync(DescribeMetricRuleTemplateAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricRuleTemplateAttributeWithOptionsAsync(request, runtime);
        }

        public CreateMetricRuleTemplateResponse CreateMetricRuleTemplateWithOptions(CreateMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMetricRuleTemplateResponse>(DoRequest("CreateMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMetricRuleTemplateResponse> CreateMetricRuleTemplateWithOptionsAsync(CreateMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMetricRuleTemplateResponse>(await DoRequestAsync("CreateMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateMetricRuleTemplateResponse CreateMetricRuleTemplate(CreateMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMetricRuleTemplateWithOptions(request, runtime);
        }

        public async Task<CreateMetricRuleTemplateResponse> CreateMetricRuleTemplateAsync(CreateMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMetricRuleTemplateWithOptionsAsync(request, runtime);
        }

        public DeleteMetricRuleTemplateResponse DeleteMetricRuleTemplateWithOptions(DeleteMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRuleTemplateResponse>(DoRequest("DeleteMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMetricRuleTemplateResponse> DeleteMetricRuleTemplateWithOptionsAsync(DeleteMetricRuleTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetricRuleTemplateResponse>(await DoRequestAsync("DeleteMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMetricRuleTemplateResponse DeleteMetricRuleTemplate(DeleteMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMetricRuleTemplateWithOptions(request, runtime);
        }

        public async Task<DeleteMetricRuleTemplateResponse> DeleteMetricRuleTemplateAsync(DeleteMetricRuleTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMetricRuleTemplateWithOptionsAsync(request, runtime);
        }

        public DescribeMetricRuleTemplateListResponse DescribeMetricRuleTemplateListWithOptions(DescribeMetricRuleTemplateListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleTemplateListResponse>(DoRequest("DescribeMetricRuleTemplateList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricRuleTemplateListResponse> DescribeMetricRuleTemplateListWithOptionsAsync(DescribeMetricRuleTemplateListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricRuleTemplateListResponse>(await DoRequestAsync("DescribeMetricRuleTemplateList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricRuleTemplateListResponse DescribeMetricRuleTemplateList(DescribeMetricRuleTemplateListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricRuleTemplateListWithOptions(request, runtime);
        }

        public async Task<DescribeMetricRuleTemplateListResponse> DescribeMetricRuleTemplateListAsync(DescribeMetricRuleTemplateListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricRuleTemplateListWithOptionsAsync(request, runtime);
        }

        public PutCustomEventResponse PutCustomEventWithOptions(PutCustomEventRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutCustomEventResponse>(DoRequest("PutCustomEvent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutCustomEventResponse> PutCustomEventWithOptionsAsync(PutCustomEventRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutCustomEventResponse>(await DoRequestAsync("PutCustomEvent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutCustomEventResponse PutCustomEvent(PutCustomEventRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutCustomEventWithOptions(request, runtime);
        }

        public async Task<PutCustomEventResponse> PutCustomEventAsync(PutCustomEventRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutCustomEventWithOptionsAsync(request, runtime);
        }

        public DescribeCustomEventCountResponse DescribeCustomEventCountWithOptions(DescribeCustomEventCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomEventCountResponse>(DoRequest("DescribeCustomEventCount", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomEventCountResponse> DescribeCustomEventCountWithOptionsAsync(DescribeCustomEventCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomEventCountResponse>(await DoRequestAsync("DescribeCustomEventCount", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomEventCountResponse DescribeCustomEventCount(DescribeCustomEventCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomEventCountWithOptions(request, runtime);
        }

        public async Task<DescribeCustomEventCountResponse> DescribeCustomEventCountAsync(DescribeCustomEventCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomEventCountWithOptionsAsync(request, runtime);
        }

        public DescribeCustomEventAttributeResponse DescribeCustomEventAttributeWithOptions(DescribeCustomEventAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomEventAttributeResponse>(DoRequest("DescribeCustomEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomEventAttributeResponse> DescribeCustomEventAttributeWithOptionsAsync(DescribeCustomEventAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomEventAttributeResponse>(await DoRequestAsync("DescribeCustomEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomEventAttributeResponse DescribeCustomEventAttribute(DescribeCustomEventAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomEventAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeCustomEventAttributeResponse> DescribeCustomEventAttributeAsync(DescribeCustomEventAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomEventAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeCustomEventHistogramResponse DescribeCustomEventHistogramWithOptions(DescribeCustomEventHistogramRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomEventHistogramResponse>(DoRequest("DescribeCustomEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomEventHistogramResponse> DescribeCustomEventHistogramWithOptionsAsync(DescribeCustomEventHistogramRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomEventHistogramResponse>(await DoRequestAsync("DescribeCustomEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomEventHistogramResponse DescribeCustomEventHistogram(DescribeCustomEventHistogramRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomEventHistogramWithOptions(request, runtime);
        }

        public async Task<DescribeCustomEventHistogramResponse> DescribeCustomEventHistogramAsync(DescribeCustomEventHistogramRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomEventHistogramWithOptionsAsync(request, runtime);
        }

        public DeleteCustomMetricResponse DeleteCustomMetricWithOptions(DeleteCustomMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCustomMetricResponse>(DoRequest("DeleteCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteCustomMetricResponse> DeleteCustomMetricWithOptionsAsync(DeleteCustomMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCustomMetricResponse>(await DoRequestAsync("DeleteCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteCustomMetricResponse DeleteCustomMetric(DeleteCustomMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteCustomMetricWithOptions(request, runtime);
        }

        public async Task<DeleteCustomMetricResponse> DeleteCustomMetricAsync(DeleteCustomMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteCustomMetricWithOptionsAsync(request, runtime);
        }

        public DescribeCustomMetricListResponse DescribeCustomMetricListWithOptions(DescribeCustomMetricListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomMetricListResponse>(DoRequest("DescribeCustomMetricList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomMetricListResponse> DescribeCustomMetricListWithOptionsAsync(DescribeCustomMetricListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomMetricListResponse>(await DoRequestAsync("DescribeCustomMetricList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomMetricListResponse DescribeCustomMetricList(DescribeCustomMetricListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomMetricListWithOptions(request, runtime);
        }

        public async Task<DescribeCustomMetricListResponse> DescribeCustomMetricListAsync(DescribeCustomMetricListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomMetricListWithOptionsAsync(request, runtime);
        }

        public PutCustomMetricResponse PutCustomMetricWithOptions(PutCustomMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutCustomMetricResponse>(DoRequest("PutCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutCustomMetricResponse> PutCustomMetricWithOptionsAsync(PutCustomMetricRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutCustomMetricResponse>(await DoRequestAsync("PutCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutCustomMetricResponse PutCustomMetric(PutCustomMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutCustomMetricWithOptions(request, runtime);
        }

        public async Task<PutCustomMetricResponse> PutCustomMetricAsync(PutCustomMetricRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutCustomMetricWithOptionsAsync(request, runtime);
        }

        public DescribeEventRuleAttributeResponse DescribeEventRuleAttributeWithOptions(DescribeEventRuleAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventRuleAttributeResponse>(DoRequest("DescribeEventRuleAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEventRuleAttributeResponse> DescribeEventRuleAttributeWithOptionsAsync(DescribeEventRuleAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventRuleAttributeResponse>(await DoRequestAsync("DescribeEventRuleAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEventRuleAttributeResponse DescribeEventRuleAttribute(DescribeEventRuleAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEventRuleAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeEventRuleAttributeResponse> DescribeEventRuleAttributeAsync(DescribeEventRuleAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEventRuleAttributeWithOptionsAsync(request, runtime);
        }

        public DeleteContactGroupResponse DeleteContactGroupWithOptions(DeleteContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContactGroupResponse>(DoRequest("DeleteContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteContactGroupResponse> DeleteContactGroupWithOptionsAsync(DeleteContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContactGroupResponse>(await DoRequestAsync("DeleteContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteContactGroupResponse DeleteContactGroup(DeleteContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteContactGroupWithOptions(request, runtime);
        }

        public async Task<DeleteContactGroupResponse> DeleteContactGroupAsync(DeleteContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteContactGroupWithOptionsAsync(request, runtime);
        }

        public DescribeContactListResponse DescribeContactListWithOptions(DescribeContactListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContactListResponse>(DoRequest("DescribeContactList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeContactListResponse> DescribeContactListWithOptionsAsync(DescribeContactListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContactListResponse>(await DoRequestAsync("DescribeContactList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeContactListResponse DescribeContactList(DescribeContactListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContactListWithOptions(request, runtime);
        }

        public async Task<DescribeContactListResponse> DescribeContactListAsync(DescribeContactListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContactListWithOptionsAsync(request, runtime);
        }

        public DescribeContactListByContactGroupResponse DescribeContactListByContactGroupWithOptions(DescribeContactListByContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContactListByContactGroupResponse>(DoRequest("DescribeContactListByContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeContactListByContactGroupResponse> DescribeContactListByContactGroupWithOptionsAsync(DescribeContactListByContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContactListByContactGroupResponse>(await DoRequestAsync("DescribeContactListByContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeContactListByContactGroupResponse DescribeContactListByContactGroup(DescribeContactListByContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContactListByContactGroupWithOptions(request, runtime);
        }

        public async Task<DescribeContactListByContactGroupResponse> DescribeContactListByContactGroupAsync(DescribeContactListByContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContactListByContactGroupWithOptionsAsync(request, runtime);
        }

        public DeleteContactResponse DeleteContactWithOptions(DeleteContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContactResponse>(DoRequest("DeleteContact", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteContactResponse> DeleteContactWithOptionsAsync(DeleteContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteContactResponse>(await DoRequestAsync("DeleteContact", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteContactResponse DeleteContact(DeleteContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteContactWithOptions(request, runtime);
        }

        public async Task<DeleteContactResponse> DeleteContactAsync(DeleteContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteContactWithOptionsAsync(request, runtime);
        }

        public PutContactGroupResponse PutContactGroupWithOptions(PutContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutContactGroupResponse>(DoRequest("PutContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutContactGroupResponse> PutContactGroupWithOptionsAsync(PutContactGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutContactGroupResponse>(await DoRequestAsync("PutContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutContactGroupResponse PutContactGroup(PutContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutContactGroupWithOptions(request, runtime);
        }

        public async Task<PutContactGroupResponse> PutContactGroupAsync(PutContactGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutContactGroupWithOptionsAsync(request, runtime);
        }

        public PutContactResponse PutContactWithOptions(PutContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutContactResponse>(DoRequest("PutContact", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutContactResponse> PutContactWithOptionsAsync(PutContactRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutContactResponse>(await DoRequestAsync("PutContact", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutContactResponse PutContact(PutContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutContactWithOptions(request, runtime);
        }

        public async Task<PutContactResponse> PutContactAsync(PutContactRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutContactWithOptionsAsync(request, runtime);
        }

        public DescribeContactGroupListResponse DescribeContactGroupListWithOptions(DescribeContactGroupListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContactGroupListResponse>(DoRequest("DescribeContactGroupList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeContactGroupListResponse> DescribeContactGroupListWithOptionsAsync(DescribeContactGroupListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeContactGroupListResponse>(await DoRequestAsync("DescribeContactGroupList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeContactGroupListResponse DescribeContactGroupList(DescribeContactGroupListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeContactGroupListWithOptions(request, runtime);
        }

        public async Task<DescribeContactGroupListResponse> DescribeContactGroupListAsync(DescribeContactGroupListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeContactGroupListWithOptionsAsync(request, runtime);
        }

        public PutEventRuleTargetsResponse PutEventRuleTargetsWithOptions(PutEventRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutEventRuleTargetsResponse>(DoRequest("PutEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutEventRuleTargetsResponse> PutEventRuleTargetsWithOptionsAsync(PutEventRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutEventRuleTargetsResponse>(await DoRequestAsync("PutEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutEventRuleTargetsResponse PutEventRuleTargets(PutEventRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutEventRuleTargetsWithOptions(request, runtime);
        }

        public async Task<PutEventRuleTargetsResponse> PutEventRuleTargetsAsync(PutEventRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutEventRuleTargetsWithOptionsAsync(request, runtime);
        }

        public DeleteEventRuleTargetsResponse DeleteEventRuleTargetsWithOptions(DeleteEventRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteEventRuleTargetsResponse>(DoRequest("DeleteEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteEventRuleTargetsResponse> DeleteEventRuleTargetsWithOptionsAsync(DeleteEventRuleTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteEventRuleTargetsResponse>(await DoRequestAsync("DeleteEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteEventRuleTargetsResponse DeleteEventRuleTargets(DeleteEventRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteEventRuleTargetsWithOptions(request, runtime);
        }

        public async Task<DeleteEventRuleTargetsResponse> DeleteEventRuleTargetsAsync(DeleteEventRuleTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteEventRuleTargetsWithOptionsAsync(request, runtime);
        }

        public DisableEventRulesResponse DisableEventRulesWithOptions(DisableEventRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableEventRulesResponse>(DoRequest("DisableEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DisableEventRulesResponse> DisableEventRulesWithOptionsAsync(DisableEventRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableEventRulesResponse>(await DoRequestAsync("DisableEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DisableEventRulesResponse DisableEventRules(DisableEventRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableEventRulesWithOptions(request, runtime);
        }

        public async Task<DisableEventRulesResponse> DisableEventRulesAsync(DisableEventRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableEventRulesWithOptionsAsync(request, runtime);
        }

        public DescribeEventRuleTargetListResponse DescribeEventRuleTargetListWithOptions(DescribeEventRuleTargetListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventRuleTargetListResponse>(DoRequest("DescribeEventRuleTargetList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEventRuleTargetListResponse> DescribeEventRuleTargetListWithOptionsAsync(DescribeEventRuleTargetListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventRuleTargetListResponse>(await DoRequestAsync("DescribeEventRuleTargetList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEventRuleTargetListResponse DescribeEventRuleTargetList(DescribeEventRuleTargetListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEventRuleTargetListWithOptions(request, runtime);
        }

        public async Task<DescribeEventRuleTargetListResponse> DescribeEventRuleTargetListAsync(DescribeEventRuleTargetListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEventRuleTargetListWithOptionsAsync(request, runtime);
        }

        public DeleteEventRulesResponse DeleteEventRulesWithOptions(DeleteEventRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteEventRulesResponse>(DoRequest("DeleteEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteEventRulesResponse> DeleteEventRulesWithOptionsAsync(DeleteEventRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteEventRulesResponse>(await DoRequestAsync("DeleteEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteEventRulesResponse DeleteEventRules(DeleteEventRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteEventRulesWithOptions(request, runtime);
        }

        public async Task<DeleteEventRulesResponse> DeleteEventRulesAsync(DeleteEventRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteEventRulesWithOptionsAsync(request, runtime);
        }

        public EnableEventRulesResponse EnableEventRulesWithOptions(EnableEventRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableEventRulesResponse>(DoRequest("EnableEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableEventRulesResponse> EnableEventRulesWithOptionsAsync(EnableEventRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableEventRulesResponse>(await DoRequestAsync("EnableEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public EnableEventRulesResponse EnableEventRules(EnableEventRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableEventRulesWithOptions(request, runtime);
        }

        public async Task<EnableEventRulesResponse> EnableEventRulesAsync(EnableEventRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableEventRulesWithOptionsAsync(request, runtime);
        }

        public PutEventRuleResponse PutEventRuleWithOptions(PutEventRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutEventRuleResponse>(DoRequest("PutEventRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutEventRuleResponse> PutEventRuleWithOptionsAsync(PutEventRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutEventRuleResponse>(await DoRequestAsync("PutEventRule", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutEventRuleResponse PutEventRule(PutEventRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutEventRuleWithOptions(request, runtime);
        }

        public async Task<PutEventRuleResponse> PutEventRuleAsync(PutEventRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutEventRuleWithOptionsAsync(request, runtime);
        }

        public DescribeEventRuleListResponse DescribeEventRuleListWithOptions(DescribeEventRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventRuleListResponse>(DoRequest("DescribeEventRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeEventRuleListResponse> DescribeEventRuleListWithOptionsAsync(DescribeEventRuleListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventRuleListResponse>(await DoRequestAsync("DescribeEventRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeEventRuleListResponse DescribeEventRuleList(DescribeEventRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEventRuleListWithOptions(request, runtime);
        }

        public async Task<DescribeEventRuleListResponse> DescribeEventRuleListAsync(DescribeEventRuleListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEventRuleListWithOptionsAsync(request, runtime);
        }

        public DescribeSystemEventAttributeResponse DescribeSystemEventAttributeWithOptions(DescribeSystemEventAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventAttributeResponse>(DoRequest("DescribeSystemEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSystemEventAttributeResponse> DescribeSystemEventAttributeWithOptionsAsync(DescribeSystemEventAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventAttributeResponse>(await DoRequestAsync("DescribeSystemEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSystemEventAttributeResponse DescribeSystemEventAttribute(DescribeSystemEventAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSystemEventAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeSystemEventAttributeResponse> DescribeSystemEventAttributeAsync(DescribeSystemEventAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSystemEventAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeSystemEventHistogramResponse DescribeSystemEventHistogramWithOptions(DescribeSystemEventHistogramRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventHistogramResponse>(DoRequest("DescribeSystemEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSystemEventHistogramResponse> DescribeSystemEventHistogramWithOptionsAsync(DescribeSystemEventHistogramRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventHistogramResponse>(await DoRequestAsync("DescribeSystemEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSystemEventHistogramResponse DescribeSystemEventHistogram(DescribeSystemEventHistogramRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSystemEventHistogramWithOptions(request, runtime);
        }

        public async Task<DescribeSystemEventHistogramResponse> DescribeSystemEventHistogramAsync(DescribeSystemEventHistogramRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSystemEventHistogramWithOptionsAsync(request, runtime);
        }

        public DescribeSystemEventCountResponse DescribeSystemEventCountWithOptions(DescribeSystemEventCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventCountResponse>(DoRequest("DescribeSystemEventCount", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSystemEventCountResponse> DescribeSystemEventCountWithOptionsAsync(DescribeSystemEventCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventCountResponse>(await DoRequestAsync("DescribeSystemEventCount", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSystemEventCountResponse DescribeSystemEventCount(DescribeSystemEventCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSystemEventCountWithOptions(request, runtime);
        }

        public async Task<DescribeSystemEventCountResponse> DescribeSystemEventCountAsync(DescribeSystemEventCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSystemEventCountWithOptionsAsync(request, runtime);
        }

        public DescribeSystemEventMetaListResponse DescribeSystemEventMetaListWithOptions(DescribeSystemEventMetaListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventMetaListResponse>(DoRequest("DescribeSystemEventMetaList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSystemEventMetaListResponse> DescribeSystemEventMetaListWithOptionsAsync(DescribeSystemEventMetaListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSystemEventMetaListResponse>(await DoRequestAsync("DescribeSystemEventMetaList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSystemEventMetaListResponse DescribeSystemEventMetaList(DescribeSystemEventMetaListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSystemEventMetaListWithOptions(request, runtime);
        }

        public async Task<DescribeSystemEventMetaListResponse> DescribeSystemEventMetaListAsync(DescribeSystemEventMetaListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSystemEventMetaListWithOptionsAsync(request, runtime);
        }

        public DescribeMonitoringAgentProcessesResponse DescribeMonitoringAgentProcessesWithOptions(DescribeMonitoringAgentProcessesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentProcessesResponse>(DoRequest("DescribeMonitoringAgentProcesses", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitoringAgentProcessesResponse> DescribeMonitoringAgentProcessesWithOptionsAsync(DescribeMonitoringAgentProcessesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentProcessesResponse>(await DoRequestAsync("DescribeMonitoringAgentProcesses", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitoringAgentProcessesResponse DescribeMonitoringAgentProcesses(DescribeMonitoringAgentProcessesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitoringAgentProcessesWithOptions(request, runtime);
        }

        public async Task<DescribeMonitoringAgentProcessesResponse> DescribeMonitoringAgentProcessesAsync(DescribeMonitoringAgentProcessesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitoringAgentProcessesWithOptionsAsync(request, runtime);
        }

        public UninstallMonitoringAgentResponse UninstallMonitoringAgentWithOptions(UninstallMonitoringAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UninstallMonitoringAgentResponse>(DoRequest("UninstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UninstallMonitoringAgentResponse> UninstallMonitoringAgentWithOptionsAsync(UninstallMonitoringAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UninstallMonitoringAgentResponse>(await DoRequestAsync("UninstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public UninstallMonitoringAgentResponse UninstallMonitoringAgent(UninstallMonitoringAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UninstallMonitoringAgentWithOptions(request, runtime);
        }

        public async Task<UninstallMonitoringAgentResponse> UninstallMonitoringAgentAsync(UninstallMonitoringAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UninstallMonitoringAgentWithOptionsAsync(request, runtime);
        }

        public DescribeMonitoringAgentAccessKeyResponse DescribeMonitoringAgentAccessKeyWithOptions(DescribeMonitoringAgentAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentAccessKeyResponse>(DoRequest("DescribeMonitoringAgentAccessKey", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitoringAgentAccessKeyResponse> DescribeMonitoringAgentAccessKeyWithOptionsAsync(DescribeMonitoringAgentAccessKeyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentAccessKeyResponse>(await DoRequestAsync("DescribeMonitoringAgentAccessKey", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitoringAgentAccessKeyResponse DescribeMonitoringAgentAccessKey(DescribeMonitoringAgentAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitoringAgentAccessKeyWithOptions(request, runtime);
        }

        public async Task<DescribeMonitoringAgentAccessKeyResponse> DescribeMonitoringAgentAccessKeyAsync(DescribeMonitoringAgentAccessKeyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitoringAgentAccessKeyWithOptionsAsync(request, runtime);
        }

        public InstallMonitoringAgentResponse InstallMonitoringAgentWithOptions(InstallMonitoringAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallMonitoringAgentResponse>(DoRequest("InstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<InstallMonitoringAgentResponse> InstallMonitoringAgentWithOptionsAsync(InstallMonitoringAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallMonitoringAgentResponse>(await DoRequestAsync("InstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public InstallMonitoringAgentResponse InstallMonitoringAgent(InstallMonitoringAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return InstallMonitoringAgentWithOptions(request, runtime);
        }

        public async Task<InstallMonitoringAgentResponse> InstallMonitoringAgentAsync(InstallMonitoringAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await InstallMonitoringAgentWithOptionsAsync(request, runtime);
        }

        public SendDryRunSystemEventResponse SendDryRunSystemEventWithOptions(SendDryRunSystemEventRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SendDryRunSystemEventResponse>(DoRequest("SendDryRunSystemEvent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SendDryRunSystemEventResponse> SendDryRunSystemEventWithOptionsAsync(SendDryRunSystemEventRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SendDryRunSystemEventResponse>(await DoRequestAsync("SendDryRunSystemEvent", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public SendDryRunSystemEventResponse SendDryRunSystemEvent(SendDryRunSystemEventRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SendDryRunSystemEventWithOptions(request, runtime);
        }

        public async Task<SendDryRunSystemEventResponse> SendDryRunSystemEventAsync(SendDryRunSystemEventRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SendDryRunSystemEventWithOptionsAsync(request, runtime);
        }

        public CreateMonitoringAgentProcessResponse CreateMonitoringAgentProcessWithOptions(CreateMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitoringAgentProcessResponse>(DoRequest("CreateMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMonitoringAgentProcessResponse> CreateMonitoringAgentProcessWithOptionsAsync(CreateMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMonitoringAgentProcessResponse>(await DoRequestAsync("CreateMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateMonitoringAgentProcessResponse CreateMonitoringAgentProcess(CreateMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMonitoringAgentProcessWithOptions(request, runtime);
        }

        public async Task<CreateMonitoringAgentProcessResponse> CreateMonitoringAgentProcessAsync(CreateMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMonitoringAgentProcessWithOptionsAsync(request, runtime);
        }

        public DescribeMonitoringAgentConfigResponse DescribeMonitoringAgentConfigWithOptions(DescribeMonitoringAgentConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentConfigResponse>(DoRequest("DescribeMonitoringAgentConfig", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitoringAgentConfigResponse> DescribeMonitoringAgentConfigWithOptionsAsync(DescribeMonitoringAgentConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentConfigResponse>(await DoRequestAsync("DescribeMonitoringAgentConfig", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitoringAgentConfigResponse DescribeMonitoringAgentConfig(DescribeMonitoringAgentConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitoringAgentConfigWithOptions(request, runtime);
        }

        public async Task<DescribeMonitoringAgentConfigResponse> DescribeMonitoringAgentConfigAsync(DescribeMonitoringAgentConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitoringAgentConfigWithOptionsAsync(request, runtime);
        }

        public DeleteMonitoringAgentProcessResponse DeleteMonitoringAgentProcessWithOptions(DeleteMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitoringAgentProcessResponse>(DoRequest("DeleteMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMonitoringAgentProcessResponse> DeleteMonitoringAgentProcessWithOptionsAsync(DeleteMonitoringAgentProcessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMonitoringAgentProcessResponse>(await DoRequestAsync("DeleteMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMonitoringAgentProcessResponse DeleteMonitoringAgentProcess(DeleteMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMonitoringAgentProcessWithOptions(request, runtime);
        }

        public async Task<DeleteMonitoringAgentProcessResponse> DeleteMonitoringAgentProcessAsync(DeleteMonitoringAgentProcessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMonitoringAgentProcessWithOptionsAsync(request, runtime);
        }

        public DescribeMonitoringAgentHostsResponse DescribeMonitoringAgentHostsWithOptions(DescribeMonitoringAgentHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentHostsResponse>(DoRequest("DescribeMonitoringAgentHosts", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitoringAgentHostsResponse> DescribeMonitoringAgentHostsWithOptionsAsync(DescribeMonitoringAgentHostsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringAgentHostsResponse>(await DoRequestAsync("DescribeMonitoringAgentHosts", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitoringAgentHostsResponse DescribeMonitoringAgentHosts(DescribeMonitoringAgentHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitoringAgentHostsWithOptions(request, runtime);
        }

        public async Task<DescribeMonitoringAgentHostsResponse> DescribeMonitoringAgentHostsAsync(DescribeMonitoringAgentHostsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitoringAgentHostsWithOptionsAsync(request, runtime);
        }

        public DescribeSiteMonitorDataResponse DescribeSiteMonitorDataWithOptions(DescribeSiteMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorDataResponse>(DoRequest("DescribeSiteMonitorData", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSiteMonitorDataResponse> DescribeSiteMonitorDataWithOptionsAsync(DescribeSiteMonitorDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorDataResponse>(await DoRequestAsync("DescribeSiteMonitorData", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSiteMonitorDataResponse DescribeSiteMonitorData(DescribeSiteMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSiteMonitorDataWithOptions(request, runtime);
        }

        public async Task<DescribeSiteMonitorDataResponse> DescribeSiteMonitorDataAsync(DescribeSiteMonitorDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSiteMonitorDataWithOptionsAsync(request, runtime);
        }

        public ModifySiteMonitorResponse ModifySiteMonitorWithOptions(ModifySiteMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySiteMonitorResponse>(DoRequest("ModifySiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifySiteMonitorResponse> ModifySiteMonitorWithOptionsAsync(ModifySiteMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySiteMonitorResponse>(await DoRequestAsync("ModifySiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifySiteMonitorResponse ModifySiteMonitor(ModifySiteMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifySiteMonitorWithOptions(request, runtime);
        }

        public async Task<ModifySiteMonitorResponse> ModifySiteMonitorAsync(ModifySiteMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifySiteMonitorWithOptionsAsync(request, runtime);
        }

        public DescribeSiteMonitorISPCityListResponse DescribeSiteMonitorISPCityListWithOptions(DescribeSiteMonitorISPCityListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorISPCityListResponse>(DoRequest("DescribeSiteMonitorISPCityList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSiteMonitorISPCityListResponse> DescribeSiteMonitorISPCityListWithOptionsAsync(DescribeSiteMonitorISPCityListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorISPCityListResponse>(await DoRequestAsync("DescribeSiteMonitorISPCityList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSiteMonitorISPCityListResponse DescribeSiteMonitorISPCityList(DescribeSiteMonitorISPCityListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSiteMonitorISPCityListWithOptions(request, runtime);
        }

        public async Task<DescribeSiteMonitorISPCityListResponse> DescribeSiteMonitorISPCityListAsync(DescribeSiteMonitorISPCityListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSiteMonitorISPCityListWithOptionsAsync(request, runtime);
        }

        public DescribeSiteMonitorQuotaResponse DescribeSiteMonitorQuotaWithOptions(DescribeSiteMonitorQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorQuotaResponse>(DoRequest("DescribeSiteMonitorQuota", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSiteMonitorQuotaResponse> DescribeSiteMonitorQuotaWithOptionsAsync(DescribeSiteMonitorQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorQuotaResponse>(await DoRequestAsync("DescribeSiteMonitorQuota", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSiteMonitorQuotaResponse DescribeSiteMonitorQuota(DescribeSiteMonitorQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSiteMonitorQuotaWithOptions(request, runtime);
        }

        public async Task<DescribeSiteMonitorQuotaResponse> DescribeSiteMonitorQuotaAsync(DescribeSiteMonitorQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSiteMonitorQuotaWithOptionsAsync(request, runtime);
        }

        public DescribeSiteMonitorStatisticsResponse DescribeSiteMonitorStatisticsWithOptions(DescribeSiteMonitorStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorStatisticsResponse>(DoRequest("DescribeSiteMonitorStatistics", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSiteMonitorStatisticsResponse> DescribeSiteMonitorStatisticsWithOptionsAsync(DescribeSiteMonitorStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorStatisticsResponse>(await DoRequestAsync("DescribeSiteMonitorStatistics", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSiteMonitorStatisticsResponse DescribeSiteMonitorStatistics(DescribeSiteMonitorStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSiteMonitorStatisticsWithOptions(request, runtime);
        }

        public async Task<DescribeSiteMonitorStatisticsResponse> DescribeSiteMonitorStatisticsAsync(DescribeSiteMonitorStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSiteMonitorStatisticsWithOptionsAsync(request, runtime);
        }

        public EnableSiteMonitorsResponse EnableSiteMonitorsWithOptions(EnableSiteMonitorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableSiteMonitorsResponse>(DoRequest("EnableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableSiteMonitorsResponse> EnableSiteMonitorsWithOptionsAsync(EnableSiteMonitorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableSiteMonitorsResponse>(await DoRequestAsync("EnableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public EnableSiteMonitorsResponse EnableSiteMonitors(EnableSiteMonitorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableSiteMonitorsWithOptions(request, runtime);
        }

        public async Task<EnableSiteMonitorsResponse> EnableSiteMonitorsAsync(EnableSiteMonitorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableSiteMonitorsWithOptionsAsync(request, runtime);
        }

        public DescribeSiteMonitorAttributeResponse DescribeSiteMonitorAttributeWithOptions(DescribeSiteMonitorAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorAttributeResponse>(DoRequest("DescribeSiteMonitorAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSiteMonitorAttributeResponse> DescribeSiteMonitorAttributeWithOptionsAsync(DescribeSiteMonitorAttributeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorAttributeResponse>(await DoRequestAsync("DescribeSiteMonitorAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSiteMonitorAttributeResponse DescribeSiteMonitorAttribute(DescribeSiteMonitorAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSiteMonitorAttributeWithOptions(request, runtime);
        }

        public async Task<DescribeSiteMonitorAttributeResponse> DescribeSiteMonitorAttributeAsync(DescribeSiteMonitorAttributeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSiteMonitorAttributeWithOptionsAsync(request, runtime);
        }

        public DescribeSiteMonitorListResponse DescribeSiteMonitorListWithOptions(DescribeSiteMonitorListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorListResponse>(DoRequest("DescribeSiteMonitorList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSiteMonitorListResponse> DescribeSiteMonitorListWithOptionsAsync(DescribeSiteMonitorListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSiteMonitorListResponse>(await DoRequestAsync("DescribeSiteMonitorList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSiteMonitorListResponse DescribeSiteMonitorList(DescribeSiteMonitorListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSiteMonitorListWithOptions(request, runtime);
        }

        public async Task<DescribeSiteMonitorListResponse> DescribeSiteMonitorListAsync(DescribeSiteMonitorListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSiteMonitorListWithOptionsAsync(request, runtime);
        }

        public DeleteSiteMonitorsResponse DeleteSiteMonitorsWithOptions(DeleteSiteMonitorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSiteMonitorsResponse>(DoRequest("DeleteSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSiteMonitorsResponse> DeleteSiteMonitorsWithOptionsAsync(DeleteSiteMonitorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSiteMonitorsResponse>(await DoRequestAsync("DeleteSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSiteMonitorsResponse DeleteSiteMonitors(DeleteSiteMonitorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSiteMonitorsWithOptions(request, runtime);
        }

        public async Task<DeleteSiteMonitorsResponse> DeleteSiteMonitorsAsync(DeleteSiteMonitorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSiteMonitorsWithOptionsAsync(request, runtime);
        }

        public DisableSiteMonitorsResponse DisableSiteMonitorsWithOptions(DisableSiteMonitorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableSiteMonitorsResponse>(DoRequest("DisableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DisableSiteMonitorsResponse> DisableSiteMonitorsWithOptionsAsync(DisableSiteMonitorsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableSiteMonitorsResponse>(await DoRequestAsync("DisableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DisableSiteMonitorsResponse DisableSiteMonitors(DisableSiteMonitorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableSiteMonitorsWithOptions(request, runtime);
        }

        public async Task<DisableSiteMonitorsResponse> DisableSiteMonitorsAsync(DisableSiteMonitorsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableSiteMonitorsWithOptionsAsync(request, runtime);
        }

        public CreateSiteMonitorResponse CreateSiteMonitorWithOptions(CreateSiteMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSiteMonitorResponse>(DoRequest("CreateSiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSiteMonitorResponse> CreateSiteMonitorWithOptionsAsync(CreateSiteMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSiteMonitorResponse>(await DoRequestAsync("CreateSiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateSiteMonitorResponse CreateSiteMonitor(CreateSiteMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSiteMonitorWithOptions(request, runtime);
        }

        public async Task<CreateSiteMonitorResponse> CreateSiteMonitorAsync(CreateSiteMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSiteMonitorWithOptionsAsync(request, runtime);
        }

        public DescribeProjectMetaResponse DescribeProjectMetaWithOptions(DescribeProjectMetaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeProjectMetaResponse>(DoRequest("DescribeProjectMeta", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeProjectMetaResponse> DescribeProjectMetaWithOptionsAsync(DescribeProjectMetaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeProjectMetaResponse>(await DoRequestAsync("DescribeProjectMeta", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeProjectMetaResponse DescribeProjectMeta(DescribeProjectMetaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeProjectMetaWithOptions(request, runtime);
        }

        public async Task<DescribeProjectMetaResponse> DescribeProjectMetaAsync(DescribeProjectMetaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeProjectMetaWithOptionsAsync(request, runtime);
        }

        public DescribeMetricListResponse DescribeMetricListWithOptions(DescribeMetricListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricListResponse>(DoRequest("DescribeMetricList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricListResponse> DescribeMetricListWithOptionsAsync(DescribeMetricListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricListResponse>(await DoRequestAsync("DescribeMetricList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricListResponse DescribeMetricList(DescribeMetricListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricListWithOptions(request, runtime);
        }

        public async Task<DescribeMetricListResponse> DescribeMetricListAsync(DescribeMetricListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricListWithOptionsAsync(request, runtime);
        }

        public DescribeMetricMetaListResponse DescribeMetricMetaListWithOptions(DescribeMetricMetaListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricMetaListResponse>(DoRequest("DescribeMetricMetaList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricMetaListResponse> DescribeMetricMetaListWithOptionsAsync(DescribeMetricMetaListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricMetaListResponse>(await DoRequestAsync("DescribeMetricMetaList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricMetaListResponse DescribeMetricMetaList(DescribeMetricMetaListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricMetaListWithOptions(request, runtime);
        }

        public async Task<DescribeMetricMetaListResponse> DescribeMetricMetaListAsync(DescribeMetricMetaListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricMetaListWithOptionsAsync(request, runtime);
        }

        public DescribeMetricTopResponse DescribeMetricTopWithOptions(DescribeMetricTopRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricTopResponse>(DoRequest("DescribeMetricTop", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricTopResponse> DescribeMetricTopWithOptionsAsync(DescribeMetricTopRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricTopResponse>(await DoRequestAsync("DescribeMetricTop", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricTopResponse DescribeMetricTop(DescribeMetricTopRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricTopWithOptions(request, runtime);
        }

        public async Task<DescribeMetricTopResponse> DescribeMetricTopAsync(DescribeMetricTopRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricTopWithOptionsAsync(request, runtime);
        }

        public DescribeMetricDataResponse DescribeMetricDataWithOptions(DescribeMetricDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricDataResponse>(DoRequest("DescribeMetricData", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricDataResponse> DescribeMetricDataWithOptionsAsync(DescribeMetricDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricDataResponse>(await DoRequestAsync("DescribeMetricData", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricDataResponse DescribeMetricData(DescribeMetricDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricDataWithOptions(request, runtime);
        }

        public async Task<DescribeMetricDataResponse> DescribeMetricDataAsync(DescribeMetricDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricDataWithOptionsAsync(request, runtime);
        }

        public DescribeMetricLastResponse DescribeMetricLastWithOptions(DescribeMetricLastRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricLastResponse>(DoRequest("DescribeMetricLast", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMetricLastResponse> DescribeMetricLastWithOptionsAsync(DescribeMetricLastRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMetricLastResponse>(await DoRequestAsync("DescribeMetricLast", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMetricLastResponse DescribeMetricLast(DescribeMetricLastRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMetricLastWithOptions(request, runtime);
        }

        public async Task<DescribeMetricLastResponse> DescribeMetricLastAsync(DescribeMetricLastRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMetricLastWithOptionsAsync(request, runtime);
        }

        public EnableHostAvailabilityResponse EnableHostAvailabilityWithOptions(EnableHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableHostAvailabilityResponse>(DoRequest("EnableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableHostAvailabilityResponse> EnableHostAvailabilityWithOptionsAsync(EnableHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableHostAvailabilityResponse>(await DoRequestAsync("EnableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public EnableHostAvailabilityResponse EnableHostAvailability(EnableHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableHostAvailabilityWithOptions(request, runtime);
        }

        public async Task<EnableHostAvailabilityResponse> EnableHostAvailabilityAsync(EnableHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableHostAvailabilityWithOptionsAsync(request, runtime);
        }

        public ModifyHostAvailabilityResponse ModifyHostAvailabilityWithOptions(ModifyHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHostAvailabilityResponse>(DoRequest("ModifyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyHostAvailabilityResponse> ModifyHostAvailabilityWithOptionsAsync(ModifyHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHostAvailabilityResponse>(await DoRequestAsync("ModifyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public ModifyHostAvailabilityResponse ModifyHostAvailability(ModifyHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyHostAvailabilityWithOptions(request, runtime);
        }

        public async Task<ModifyHostAvailabilityResponse> ModifyHostAvailabilityAsync(ModifyHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyHostAvailabilityWithOptionsAsync(request, runtime);
        }

        public DisableHostAvailabilityResponse DisableHostAvailabilityWithOptions(DisableHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableHostAvailabilityResponse>(DoRequest("DisableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DisableHostAvailabilityResponse> DisableHostAvailabilityWithOptionsAsync(DisableHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DisableHostAvailabilityResponse>(await DoRequestAsync("DisableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DisableHostAvailabilityResponse DisableHostAvailability(DisableHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DisableHostAvailabilityWithOptions(request, runtime);
        }

        public async Task<DisableHostAvailabilityResponse> DisableHostAvailabilityAsync(DisableHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DisableHostAvailabilityWithOptionsAsync(request, runtime);
        }

        public DescribeUnhealthyHostAvailabilityResponse DescribeUnhealthyHostAvailabilityWithOptions(DescribeUnhealthyHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUnhealthyHostAvailabilityResponse>(DoRequest("DescribeUnhealthyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeUnhealthyHostAvailabilityResponse> DescribeUnhealthyHostAvailabilityWithOptionsAsync(DescribeUnhealthyHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUnhealthyHostAvailabilityResponse>(await DoRequestAsync("DescribeUnhealthyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeUnhealthyHostAvailabilityResponse DescribeUnhealthyHostAvailability(DescribeUnhealthyHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeUnhealthyHostAvailabilityWithOptions(request, runtime);
        }

        public async Task<DescribeUnhealthyHostAvailabilityResponse> DescribeUnhealthyHostAvailabilityAsync(DescribeUnhealthyHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeUnhealthyHostAvailabilityWithOptionsAsync(request, runtime);
        }

        public CreateHostAvailabilityResponse CreateHostAvailabilityWithOptions(CreateHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHostAvailabilityResponse>(DoRequest("CreateHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateHostAvailabilityResponse> CreateHostAvailabilityWithOptionsAsync(CreateHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateHostAvailabilityResponse>(await DoRequestAsync("CreateHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public CreateHostAvailabilityResponse CreateHostAvailability(CreateHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateHostAvailabilityWithOptions(request, runtime);
        }

        public async Task<CreateHostAvailabilityResponse> CreateHostAvailabilityAsync(CreateHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateHostAvailabilityWithOptionsAsync(request, runtime);
        }

        public DescribeHostAvailabilityListResponse DescribeHostAvailabilityListWithOptions(DescribeHostAvailabilityListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHostAvailabilityListResponse>(DoRequest("DescribeHostAvailabilityList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeHostAvailabilityListResponse> DescribeHostAvailabilityListWithOptionsAsync(DescribeHostAvailabilityListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeHostAvailabilityListResponse>(await DoRequestAsync("DescribeHostAvailabilityList", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeHostAvailabilityListResponse DescribeHostAvailabilityList(DescribeHostAvailabilityListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeHostAvailabilityListWithOptions(request, runtime);
        }

        public async Task<DescribeHostAvailabilityListResponse> DescribeHostAvailabilityListAsync(DescribeHostAvailabilityListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeHostAvailabilityListWithOptionsAsync(request, runtime);
        }

        public DeleteHostAvailabilityResponse DeleteHostAvailabilityWithOptions(DeleteHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHostAvailabilityResponse>(DoRequest("DeleteHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteHostAvailabilityResponse> DeleteHostAvailabilityWithOptionsAsync(DeleteHostAvailabilityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteHostAvailabilityResponse>(await DoRequestAsync("DeleteHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DeleteHostAvailabilityResponse DeleteHostAvailability(DeleteHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteHostAvailabilityWithOptions(request, runtime);
        }

        public async Task<DeleteHostAvailabilityResponse> DeleteHostAvailabilityAsync(DeleteHostAvailabilityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteHostAvailabilityWithOptionsAsync(request, runtime);
        }

        public DescribeMonitoringConfigResponse DescribeMonitoringConfigWithOptions(DescribeMonitoringConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringConfigResponse>(DoRequest("DescribeMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMonitoringConfigResponse> DescribeMonitoringConfigWithOptionsAsync(DescribeMonitoringConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMonitoringConfigResponse>(await DoRequestAsync("DescribeMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMonitoringConfigResponse DescribeMonitoringConfig(DescribeMonitoringConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMonitoringConfigWithOptions(request, runtime);
        }

        public async Task<DescribeMonitoringConfigResponse> DescribeMonitoringConfigAsync(DescribeMonitoringConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMonitoringConfigWithOptionsAsync(request, runtime);
        }

        public PutMonitoringConfigResponse PutMonitoringConfigWithOptions(PutMonitoringConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutMonitoringConfigResponse>(DoRequest("PutMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PutMonitoringConfigResponse> PutMonitoringConfigWithOptionsAsync(PutMonitoringConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PutMonitoringConfigResponse>(await DoRequestAsync("PutMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", null, request.ToMap(), runtime));
        }

        public PutMonitoringConfigResponse PutMonitoringConfig(PutMonitoringConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PutMonitoringConfigWithOptions(request, runtime);
        }

        public async Task<PutMonitoringConfigResponse> PutMonitoringConfigAsync(PutMonitoringConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PutMonitoringConfigWithOptionsAsync(request, runtime);
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
