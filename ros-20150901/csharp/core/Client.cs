// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.ROS20150901.Models;

namespace AlibabaCloud.SDK.ROS20150901
{
    public class Client : AlibabaCloud.ROAClient.Client
    {

        public Client(AlibabaCloud.ROAClient.Models.Config config): base(config)
        {
            this._endpointRule = "central";
            CheckConfig(config);
            this._endpointHost = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpointHost);
        }


        public CreateChangeSetResponse CreateChangeSetWithOptions(CreateChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateChangeSetResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/changeSets", null, request.Headers, null, runtime));
        }

        public async Task<CreateChangeSetResponse> CreateChangeSetWithOptionsAsync(CreateChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateChangeSetResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/changeSets", null, request.Headers, null, runtime));
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

        public DescribeChangeSetDetailResponse DescribeChangeSetDetailWithOptions(string stackName, string stackId, string changeSetName, DescribeChangeSetDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeChangeSetDetailResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets/" + changeSetName, null, request.Headers, null, runtime));
        }

        public async Task<DescribeChangeSetDetailResponse> DescribeChangeSetDetailWithOptionsAsync(string stackName, string stackId, string changeSetName, DescribeChangeSetDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeChangeSetDetailResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets/" + changeSetName, null, request.Headers, null, runtime));
        }

        public DescribeChangeSetDetailResponse DescribeChangeSetDetail(string stackName, string stackId, string changeSetName, DescribeChangeSetDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeChangeSetDetailWithOptions(stackName, stackId, changeSetName, request, runtime);
        }

        public async Task<DescribeChangeSetDetailResponse> DescribeChangeSetDetailAsync(string stackName, string stackId, string changeSetName, DescribeChangeSetDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeChangeSetDetailWithOptionsAsync(stackName, stackId, changeSetName, request, runtime);
        }

        public DescribeChangeSetsResponse DescribeChangeSetsWithOptions(string stackName, string stackId, DescribeChangeSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeChangeSetsResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets", null, request.Headers, null, runtime));
        }

        public async Task<DescribeChangeSetsResponse> DescribeChangeSetsWithOptionsAsync(string stackName, string stackId, DescribeChangeSetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeChangeSetsResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets", null, request.Headers, null, runtime));
        }

        public DescribeChangeSetsResponse DescribeChangeSets(string stackName, string stackId, DescribeChangeSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeChangeSetsWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<DescribeChangeSetsResponse> DescribeChangeSetsAsync(string stackName, string stackId, DescribeChangeSetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeChangeSetsWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public ExecuteChangeSetResponse ExecuteChangeSetWithOptions(string stackName, string stackId, string changeSetName, ExecuteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecuteChangeSetResponse>(DoRequest("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets/" + changeSetName + "/execute", null, request.Headers, null, runtime));
        }

        public async Task<ExecuteChangeSetResponse> ExecuteChangeSetWithOptionsAsync(string stackName, string stackId, string changeSetName, ExecuteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecuteChangeSetResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets/" + changeSetName + "/execute", null, request.Headers, null, runtime));
        }

        public ExecuteChangeSetResponse ExecuteChangeSet(string stackName, string stackId, string changeSetName, ExecuteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExecuteChangeSetWithOptions(stackName, stackId, changeSetName, request, runtime);
        }

        public async Task<ExecuteChangeSetResponse> ExecuteChangeSetAsync(string stackName, string stackId, string changeSetName, ExecuteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExecuteChangeSetWithOptionsAsync(stackName, stackId, changeSetName, request, runtime);
        }

        public DeleteChangeSetResponse DeleteChangeSetWithOptions(string stackName, string stackId, string changeSetName, DeleteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteChangeSetResponse>(DoRequest("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets/" + changeSetName, null, request.Headers, null, runtime));
        }

        public async Task<DeleteChangeSetResponse> DeleteChangeSetWithOptionsAsync(string stackName, string stackId, string changeSetName, DeleteChangeSetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteChangeSetResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + stackName + "/" + stackId + "/changeSets/" + changeSetName, null, request.Headers, null, runtime));
        }

        public DeleteChangeSetResponse DeleteChangeSet(string stackName, string stackId, string changeSetName, DeleteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteChangeSetWithOptions(stackName, stackId, changeSetName, request, runtime);
        }

        public async Task<DeleteChangeSetResponse> DeleteChangeSetAsync(string stackName, string stackId, string changeSetName, DeleteChangeSetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteChangeSetWithOptionsAsync(stackName, stackId, changeSetName, request, runtime);
        }

        public ContinueCreateStackResponse ContinueCreateStackWithOptions(string stackName, string stackId, ContinueCreateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ContinueCreateStackResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + stackName + "/" + stackId + "/continue", null, request.Headers, null, runtime));
        }

        public async Task<ContinueCreateStackResponse> ContinueCreateStackWithOptionsAsync(string stackName, string stackId, ContinueCreateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ContinueCreateStackResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + stackName + "/" + stackId + "/continue", null, request.Headers, null, runtime));
        }

        public ContinueCreateStackResponse ContinueCreateStack(string stackName, string stackId, ContinueCreateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ContinueCreateStackWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<ContinueCreateStackResponse> ContinueCreateStackAsync(string stackName, string stackId, ContinueCreateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ContinueCreateStackWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public CancelUpdateStackResponse CancelUpdateStackWithOptions(string stackName, string stackId, CancelUpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelUpdateStackResponse>(DoRequest("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + stackName + "/" + stackId + "/cancel", null, request.Headers, null, runtime));
        }

        public async Task<CancelUpdateStackResponse> CancelUpdateStackWithOptionsAsync(string stackName, string stackId, CancelUpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelUpdateStackResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + stackName + "/" + stackId + "/cancel", null, request.Headers, null, runtime));
        }

        public CancelUpdateStackResponse CancelUpdateStack(string stackName, string stackId, CancelUpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelUpdateStackWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<CancelUpdateStackResponse> CancelUpdateStackAsync(string stackName, string stackId, CancelUpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelUpdateStackWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public GetStackPolicyResponse GetStackPolicyWithOptions(string stackName, string stackId, GetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackPolicyResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/policy", null, request.Headers, null, runtime));
        }

        public async Task<GetStackPolicyResponse> GetStackPolicyWithOptionsAsync(string stackName, string stackId, GetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetStackPolicyResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/policy", null, request.Headers, null, runtime));
        }

        public GetStackPolicyResponse GetStackPolicy(string stackName, string stackId, GetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetStackPolicyWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<GetStackPolicyResponse> GetStackPolicyAsync(string stackName, string stackId, GetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetStackPolicyWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public SetStackPolicyResponse SetStackPolicyWithOptions(string stackName, string stackId, SetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetStackPolicyResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + stackName + "/" + stackId + "/policy", null, request.Headers, null, runtime));
        }

        public async Task<SetStackPolicyResponse> SetStackPolicyWithOptionsAsync(string stackName, string stackId, SetStackPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetStackPolicyResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + stackName + "/" + stackId + "/policy", null, request.Headers, null, runtime));
        }

        public SetStackPolicyResponse SetStackPolicy(string stackName, string stackId, SetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetStackPolicyWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<SetStackPolicyResponse> SetStackPolicyAsync(string stackName, string stackId, SetStackPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetStackPolicyWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public UpdateStackResponse UpdateStackWithOptions(string stackName, string stackId, UpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackResponse>(DoRequest("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + stackName + "/" + stackId, null, request.Headers, null, runtime));
        }

        public async Task<UpdateStackResponse> UpdateStackWithOptionsAsync(string stackName, string stackId, UpdateStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateStackResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" + stackName + "/" + stackId, null, request.Headers, null, runtime));
        }

        public UpdateStackResponse UpdateStack(string stackName, string stackId, UpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateStackWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<UpdateStackResponse> UpdateStackAsync(string stackName, string stackId, UpdateStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateStackWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public WaitConditionsResponse WaitConditionsWithOptions(WaitConditionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<WaitConditionsResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "Anonymous", "/waitcondition", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<WaitConditionsResponse> WaitConditionsWithOptionsAsync(WaitConditionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<WaitConditionsResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "Anonymous", "/waitcondition", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public WaitConditionsResponse WaitConditions(WaitConditionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return WaitConditionsWithOptions(request, runtime);
        }

        public async Task<WaitConditionsResponse> WaitConditionsAsync(WaitConditionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await WaitConditionsWithOptionsAsync(request, runtime);
        }

        public InquiryStackResponse InquiryStackWithOptions(InquiryStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InquiryStackResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/inquiry", null, request.Headers, null, runtime));
        }

        public async Task<InquiryStackResponse> InquiryStackWithOptionsAsync(InquiryStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InquiryStackResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/stacks/inquiry", null, request.Headers, null, runtime));
        }

        public InquiryStackResponse InquiryStack(InquiryStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return InquiryStackWithOptions(request, runtime);
        }

        public async Task<InquiryStackResponse> InquiryStackAsync(InquiryStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await InquiryStackWithOptionsAsync(request, runtime);
        }

        public PreviewStackResponse PreviewStackWithOptions(PreviewStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreviewStackResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/preview", null, request.Headers, null, runtime));
        }

        public async Task<PreviewStackResponse> PreviewStackWithOptionsAsync(PreviewStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreviewStackResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/stacks/preview", null, request.Headers, null, runtime));
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

        public DoActionsResponse DoActionsWithOptions(string stackName, string stackId, DoActionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DoActionsResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + stackName + "/" + stackId + "/actions", null, request.Headers, null, runtime));
        }

        public async Task<DoActionsResponse> DoActionsWithOptionsAsync(string stackName, string stackId, DoActionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DoActionsResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" + stackName + "/" + stackId + "/actions", null, request.Headers, null, runtime));
        }

        public DoActionsResponse DoActions(string stackName, string stackId, DoActionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DoActionsWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<DoActionsResponse> DoActionsAsync(string stackName, string stackId, DoActionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DoActionsWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/regions", null, request.Headers, null, runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/regions", null, request.Headers, null, runtime));
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

        public DescribeEventsResponse DescribeEventsWithOptions(string stackName, string stackId, DescribeEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventsResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/events", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeEventsResponse> DescribeEventsWithOptionsAsync(string stackName, string stackId, DescribeEventsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEventsResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/events", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeEventsResponse DescribeEvents(string stackName, string stackId, DescribeEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeEventsWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<DescribeEventsResponse> DescribeEventsAsync(string stackName, string stackId, DescribeEventsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeEventsWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public DeleteStackResponse DeleteStackWithOptions(string stackName, string stackId, DeleteStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackResponse>(DoRequest("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + stackName + "/" + stackId, AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DeleteStackResponse> DeleteStackWithOptionsAsync(string stackName, string stackId, DeleteStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStackResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + stackName + "/" + stackId, AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DeleteStackResponse DeleteStack(string stackName, string stackId, DeleteStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteStackWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<DeleteStackResponse> DeleteStackAsync(string stackName, string stackId, DeleteStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteStackWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public CreateStacksResponse CreateStacksWithOptions(CreateStacksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStacksResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks", null, request.Headers, null, runtime));
        }

        public async Task<CreateStacksResponse> CreateStacksWithOptionsAsync(CreateStacksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateStacksResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/stacks", null, request.Headers, null, runtime));
        }

        public CreateStacksResponse CreateStacks(CreateStacksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateStacksWithOptions(request, runtime);
        }

        public async Task<CreateStacksResponse> CreateStacksAsync(CreateStacksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateStacksWithOptionsAsync(request, runtime);
        }

        public AbandonStackResponse AbandonStackWithOptions(string stackName, string stackId, AbandonStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AbandonStackResponse>(DoRequest("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + stackName + "/" + stackId + "/abandon", null, request.Headers, null, runtime));
        }

        public async Task<AbandonStackResponse> AbandonStackWithOptionsAsync(string stackName, string stackId, AbandonStackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AbandonStackResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" + stackName + "/" + stackId + "/abandon", null, request.Headers, null, runtime));
        }

        public AbandonStackResponse AbandonStack(string stackName, string stackId, AbandonStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AbandonStackWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<AbandonStackResponse> AbandonStackAsync(string stackName, string stackId, AbandonStackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AbandonStackWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public DescribeResourceTypesResponse DescribeResourceTypesWithOptions(DescribeResourceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceTypesResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/resource_types", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeResourceTypesResponse> DescribeResourceTypesWithOptionsAsync(DescribeResourceTypesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceTypesResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/resource_types", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeResourceTypesResponse DescribeResourceTypes(DescribeResourceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourceTypesWithOptions(request, runtime);
        }

        public async Task<DescribeResourceTypesResponse> DescribeResourceTypesAsync(DescribeResourceTypesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourceTypesWithOptionsAsync(request, runtime);
        }

        public DescribeResourceTypeDetailResponse DescribeResourceTypeDetailWithOptions(string typeName, DescribeResourceTypeDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceTypeDetailResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" + typeName, null, request.Headers, null, runtime));
        }

        public async Task<DescribeResourceTypeDetailResponse> DescribeResourceTypeDetailWithOptionsAsync(string typeName, DescribeResourceTypeDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceTypeDetailResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" + typeName, null, request.Headers, null, runtime));
        }

        public DescribeResourceTypeDetailResponse DescribeResourceTypeDetail(string typeName, DescribeResourceTypeDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourceTypeDetailWithOptions(typeName, request, runtime);
        }

        public async Task<DescribeResourceTypeDetailResponse> DescribeResourceTypeDetailAsync(string typeName, DescribeResourceTypeDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourceTypeDetailWithOptionsAsync(typeName, request, runtime);
        }

        public DescribeResourcesResponse DescribeResourcesWithOptions(string stackName, string stackId, DescribeResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourcesResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/resources", null, request.Headers, null, runtime));
        }

        public async Task<DescribeResourcesResponse> DescribeResourcesWithOptionsAsync(string stackName, string stackId, DescribeResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourcesResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/resources", null, request.Headers, null, runtime));
        }

        public DescribeResourcesResponse DescribeResources(string stackName, string stackId, DescribeResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourcesWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<DescribeResourcesResponse> DescribeResourcesAsync(string stackName, string stackId, DescribeResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourcesWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public DescribeResourceDetailResponse DescribeResourceDetailWithOptions(string stackName, string stackId, string resourceName, DescribeResourceDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceDetailResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/resources/" + resourceName, null, request.Headers, null, runtime));
        }

        public async Task<DescribeResourceDetailResponse> DescribeResourceDetailWithOptionsAsync(string stackName, string stackId, string resourceName, DescribeResourceDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceDetailResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/resources/" + resourceName, null, request.Headers, null, runtime));
        }

        public DescribeResourceDetailResponse DescribeResourceDetail(string stackName, string stackId, string resourceName, DescribeResourceDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourceDetailWithOptions(stackName, stackId, resourceName, request, runtime);
        }

        public async Task<DescribeResourceDetailResponse> DescribeResourceDetailAsync(string stackName, string stackId, string resourceName, DescribeResourceDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourceDetailWithOptionsAsync(stackName, stackId, resourceName, request, runtime);
        }

        public DescribeResourceTypeTemplateResponse DescribeResourceTypeTemplateWithOptions(string typeName, DescribeResourceTypeTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceTypeTemplateResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" + typeName + "/template", null, request.Headers, null, runtime));
        }

        public async Task<DescribeResourceTypeTemplateResponse> DescribeResourceTypeTemplateWithOptionsAsync(string typeName, DescribeResourceTypeTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourceTypeTemplateResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" + typeName + "/template", null, request.Headers, null, runtime));
        }

        public DescribeResourceTypeTemplateResponse DescribeResourceTypeTemplate(string typeName, DescribeResourceTypeTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourceTypeTemplateWithOptions(typeName, request, runtime);
        }

        public async Task<DescribeResourceTypeTemplateResponse> DescribeResourceTypeTemplateAsync(string typeName, DescribeResourceTypeTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourceTypeTemplateWithOptionsAsync(typeName, request, runtime);
        }

        public DescribeStacksResponse DescribeStacksWithOptions(DescribeStacksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStacksResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeStacksResponse> DescribeStacksWithOptionsAsync(DescribeStacksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStacksResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeStacksResponse DescribeStacks(DescribeStacksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeStacksWithOptions(request, runtime);
        }

        public async Task<DescribeStacksResponse> DescribeStacksAsync(DescribeStacksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeStacksWithOptionsAsync(request, runtime);
        }

        public DescribeStackDetailResponse DescribeStackDetailWithOptions(string stackName, string stackId, DescribeStackDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStackDetailResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId, null, request.Headers, null, runtime));
        }

        public async Task<DescribeStackDetailResponse> DescribeStackDetailWithOptionsAsync(string stackName, string stackId, DescribeStackDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStackDetailResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId, null, request.Headers, null, runtime));
        }

        public DescribeStackDetailResponse DescribeStackDetail(string stackName, string stackId, DescribeStackDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeStackDetailWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<DescribeStackDetailResponse> DescribeStackDetailAsync(string stackName, string stackId, DescribeStackDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeStackDetailWithOptionsAsync(stackName, stackId, request, runtime);
        }

        public ValidateTemplateResponse ValidateTemplateWithOptions(ValidateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ValidateTemplateResponse>(DoRequest("2015-09-01", "HTTPS", "POST", "AK", "/validate", null, request.Headers, null, runtime));
        }

        public async Task<ValidateTemplateResponse> ValidateTemplateWithOptionsAsync(ValidateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ValidateTemplateResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "POST", "AK", "/validate", null, request.Headers, null, runtime));
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

        public DescribeTemplateResponse DescribeTemplateWithOptions(string stackName, string stackId, DescribeTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTemplateResponse>(DoRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/template", null, request.Headers, null, runtime));
        }

        public async Task<DescribeTemplateResponse> DescribeTemplateWithOptionsAsync(string stackName, string stackId, DescribeTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTemplateResponse>(await DoRequestAsync("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" + stackName + "/" + stackId + "/template", null, request.Headers, null, runtime));
        }

        public DescribeTemplateResponse DescribeTemplate(string stackName, string stackId, DescribeTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTemplateWithOptions(stackName, stackId, request, runtime);
        }

        public async Task<DescribeTemplateResponse> DescribeTemplateAsync(string stackName, string stackId, DescribeTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTemplateWithOptionsAsync(stackName, stackId, request, runtime);
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
