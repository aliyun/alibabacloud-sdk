// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Alidns20150109.Models;

namespace AlibabaCloud.SDK.Alidns20150109
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "central";
            CheckConfig(config);
            this._endpoint = GetEndpoint("alidns", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public ListTagResourcesResponse ListTagResourcesWithOptions(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(DoRequest("ListTagResources", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTagResourcesResponse> ListTagResourcesWithOptionsAsync(ListTagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTagResourcesResponse>(await DoRequestAsync("ListTagResources", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
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

        public TagResourcesResponse TagResourcesWithOptions(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(DoRequest("TagResources", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TagResourcesResponse> TagResourcesWithOptionsAsync(TagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TagResourcesResponse>(await DoRequestAsync("TagResources", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
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

        public UntagResourcesResponse UntagResourcesWithOptions(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(DoRequest("UntagResources", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UntagResourcesResponse> UntagResourcesWithOptionsAsync(UntagResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UntagResourcesResponse>(await DoRequestAsync("UntagResources", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
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

        public DescribeTagsResponse DescribeTagsWithOptions(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(DoRequest("DescribeTags", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTagsResponse> DescribeTagsWithOptionsAsync(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(await DoRequestAsync("DescribeTags", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTagsResponse DescribeTags(DescribeTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTagsWithOptions(request, runtime);
        }

        public async Task<DescribeTagsResponse> DescribeTagsAsync(DescribeTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTagsWithOptionsAsync(request, runtime);
        }

        public CopyGtmConfigResponse CopyGtmConfigWithOptions(CopyGtmConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyGtmConfigResponse>(DoRequest("CopyGtmConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CopyGtmConfigResponse> CopyGtmConfigWithOptionsAsync(CopyGtmConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CopyGtmConfigResponse>(await DoRequestAsync("CopyGtmConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public CopyGtmConfigResponse CopyGtmConfig(CopyGtmConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CopyGtmConfigWithOptions(request, runtime);
        }

        public async Task<CopyGtmConfigResponse> CopyGtmConfigAsync(CopyGtmConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CopyGtmConfigWithOptionsAsync(request, runtime);
        }

        public DescribeDomainDnssecInfoResponse DescribeDomainDnssecInfoWithOptions(DescribeDomainDnssecInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainDnssecInfoResponse>(DoRequest("DescribeDomainDnssecInfo", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainDnssecInfoResponse> DescribeDomainDnssecInfoWithOptionsAsync(DescribeDomainDnssecInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainDnssecInfoResponse>(await DoRequestAsync("DescribeDomainDnssecInfo", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDomainDnssecInfoResponse DescribeDomainDnssecInfo(DescribeDomainDnssecInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainDnssecInfoWithOptions(request, runtime);
        }

        public async Task<DescribeDomainDnssecInfoResponse> DescribeDomainDnssecInfoAsync(DescribeDomainDnssecInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainDnssecInfoWithOptionsAsync(request, runtime);
        }

        public SetDomainDnssecStatusResponse SetDomainDnssecStatusWithOptions(SetDomainDnssecStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDomainDnssecStatusResponse>(DoRequest("SetDomainDnssecStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDomainDnssecStatusResponse> SetDomainDnssecStatusWithOptionsAsync(SetDomainDnssecStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDomainDnssecStatusResponse>(await DoRequestAsync("SetDomainDnssecStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public SetDomainDnssecStatusResponse SetDomainDnssecStatus(SetDomainDnssecStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDomainDnssecStatusWithOptions(request, runtime);
        }

        public async Task<SetDomainDnssecStatusResponse> SetDomainDnssecStatusAsync(SetDomainDnssecStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDomainDnssecStatusWithOptionsAsync(request, runtime);
        }

        public TransferDomainResponse TransferDomainWithOptions(TransferDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TransferDomainResponse>(DoRequest("TransferDomain", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TransferDomainResponse> TransferDomainWithOptionsAsync(TransferDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TransferDomainResponse>(await DoRequestAsync("TransferDomain", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public TransferDomainResponse TransferDomain(TransferDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TransferDomainWithOptions(request, runtime);
        }

        public async Task<TransferDomainResponse> TransferDomainAsync(TransferDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TransferDomainWithOptionsAsync(request, runtime);
        }

        public DescribeTransferDomainsResponse DescribeTransferDomainsWithOptions(DescribeTransferDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTransferDomainsResponse>(DoRequest("DescribeTransferDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTransferDomainsResponse> DescribeTransferDomainsWithOptionsAsync(DescribeTransferDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTransferDomainsResponse>(await DoRequestAsync("DescribeTransferDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeTransferDomainsResponse DescribeTransferDomains(DescribeTransferDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTransferDomainsWithOptions(request, runtime);
        }

        public async Task<DescribeTransferDomainsResponse> DescribeTransferDomainsAsync(DescribeTransferDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTransferDomainsWithOptionsAsync(request, runtime);
        }

        public AddDomainBackupResponse AddDomainBackupWithOptions(AddDomainBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainBackupResponse>(DoRequest("AddDomainBackup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddDomainBackupResponse> AddDomainBackupWithOptionsAsync(AddDomainBackupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainBackupResponse>(await DoRequestAsync("AddDomainBackup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public AddDomainBackupResponse AddDomainBackup(AddDomainBackupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddDomainBackupWithOptions(request, runtime);
        }

        public async Task<AddDomainBackupResponse> AddDomainBackupAsync(AddDomainBackupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddDomainBackupWithOptionsAsync(request, runtime);
        }

        public RetrieveDomainResponse RetrieveDomainWithOptions(RetrieveDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RetrieveDomainResponse>(DoRequest("RetrieveDomain", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RetrieveDomainResponse> RetrieveDomainWithOptionsAsync(RetrieveDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RetrieveDomainResponse>(await DoRequestAsync("RetrieveDomain", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public RetrieveDomainResponse RetrieveDomain(RetrieveDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RetrieveDomainWithOptions(request, runtime);
        }

        public async Task<RetrieveDomainResponse> RetrieveDomainAsync(RetrieveDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RetrieveDomainWithOptionsAsync(request, runtime);
        }

        public DescribeGtmRecoveryPlanResponse DescribeGtmRecoveryPlanWithOptions(DescribeGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmRecoveryPlanResponse>(DoRequest("DescribeGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmRecoveryPlanResponse> DescribeGtmRecoveryPlanWithOptionsAsync(DescribeGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmRecoveryPlanResponse>(await DoRequestAsync("DescribeGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmRecoveryPlanResponse DescribeGtmRecoveryPlan(DescribeGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmRecoveryPlanWithOptions(request, runtime);
        }

        public async Task<DescribeGtmRecoveryPlanResponse> DescribeGtmRecoveryPlanAsync(DescribeGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmRecoveryPlanWithOptionsAsync(request, runtime);
        }

        public AddGtmRecoveryPlanResponse AddGtmRecoveryPlanWithOptions(AddGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmRecoveryPlanResponse>(DoRequest("AddGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddGtmRecoveryPlanResponse> AddGtmRecoveryPlanWithOptionsAsync(AddGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmRecoveryPlanResponse>(await DoRequestAsync("AddGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public AddGtmRecoveryPlanResponse AddGtmRecoveryPlan(AddGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddGtmRecoveryPlanWithOptions(request, runtime);
        }

        public async Task<AddGtmRecoveryPlanResponse> AddGtmRecoveryPlanAsync(AddGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddGtmRecoveryPlanWithOptionsAsync(request, runtime);
        }

        public UpdateGtmRecoveryPlanResponse UpdateGtmRecoveryPlanWithOptions(UpdateGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmRecoveryPlanResponse>(DoRequest("UpdateGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateGtmRecoveryPlanResponse> UpdateGtmRecoveryPlanWithOptionsAsync(UpdateGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmRecoveryPlanResponse>(await DoRequestAsync("UpdateGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateGtmRecoveryPlanResponse UpdateGtmRecoveryPlan(UpdateGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateGtmRecoveryPlanWithOptions(request, runtime);
        }

        public async Task<UpdateGtmRecoveryPlanResponse> UpdateGtmRecoveryPlanAsync(UpdateGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateGtmRecoveryPlanWithOptionsAsync(request, runtime);
        }

        public DeleteGtmRecoveryPlanResponse DeleteGtmRecoveryPlanWithOptions(DeleteGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGtmRecoveryPlanResponse>(DoRequest("DeleteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteGtmRecoveryPlanResponse> DeleteGtmRecoveryPlanWithOptionsAsync(DeleteGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGtmRecoveryPlanResponse>(await DoRequestAsync("DeleteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DeleteGtmRecoveryPlanResponse DeleteGtmRecoveryPlan(DeleteGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteGtmRecoveryPlanWithOptions(request, runtime);
        }

        public async Task<DeleteGtmRecoveryPlanResponse> DeleteGtmRecoveryPlanAsync(DeleteGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteGtmRecoveryPlanWithOptionsAsync(request, runtime);
        }

        public DescribeGtmRecoveryPlansResponse DescribeGtmRecoveryPlansWithOptions(DescribeGtmRecoveryPlansRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmRecoveryPlansResponse>(DoRequest("DescribeGtmRecoveryPlans", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmRecoveryPlansResponse> DescribeGtmRecoveryPlansWithOptionsAsync(DescribeGtmRecoveryPlansRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmRecoveryPlansResponse>(await DoRequestAsync("DescribeGtmRecoveryPlans", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmRecoveryPlansResponse DescribeGtmRecoveryPlans(DescribeGtmRecoveryPlansRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmRecoveryPlansWithOptions(request, runtime);
        }

        public async Task<DescribeGtmRecoveryPlansResponse> DescribeGtmRecoveryPlansAsync(DescribeGtmRecoveryPlansRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmRecoveryPlansWithOptionsAsync(request, runtime);
        }

        public DescribeGtmRecoveryPlanAvailableConfigResponse DescribeGtmRecoveryPlanAvailableConfigWithOptions(DescribeGtmRecoveryPlanAvailableConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmRecoveryPlanAvailableConfigResponse>(DoRequest("DescribeGtmRecoveryPlanAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmRecoveryPlanAvailableConfigResponse> DescribeGtmRecoveryPlanAvailableConfigWithOptionsAsync(DescribeGtmRecoveryPlanAvailableConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmRecoveryPlanAvailableConfigResponse>(await DoRequestAsync("DescribeGtmRecoveryPlanAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmRecoveryPlanAvailableConfigResponse DescribeGtmRecoveryPlanAvailableConfig(DescribeGtmRecoveryPlanAvailableConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmRecoveryPlanAvailableConfigWithOptions(request, runtime);
        }

        public async Task<DescribeGtmRecoveryPlanAvailableConfigResponse> DescribeGtmRecoveryPlanAvailableConfigAsync(DescribeGtmRecoveryPlanAvailableConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmRecoveryPlanAvailableConfigWithOptionsAsync(request, runtime);
        }

        public ExecuteGtmRecoveryPlanResponse ExecuteGtmRecoveryPlanWithOptions(ExecuteGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecuteGtmRecoveryPlanResponse>(DoRequest("ExecuteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ExecuteGtmRecoveryPlanResponse> ExecuteGtmRecoveryPlanWithOptionsAsync(ExecuteGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ExecuteGtmRecoveryPlanResponse>(await DoRequestAsync("ExecuteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public ExecuteGtmRecoveryPlanResponse ExecuteGtmRecoveryPlan(ExecuteGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ExecuteGtmRecoveryPlanWithOptions(request, runtime);
        }

        public async Task<ExecuteGtmRecoveryPlanResponse> ExecuteGtmRecoveryPlanAsync(ExecuteGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ExecuteGtmRecoveryPlanWithOptionsAsync(request, runtime);
        }

        public RollbackGtmRecoveryPlanResponse RollbackGtmRecoveryPlanWithOptions(RollbackGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RollbackGtmRecoveryPlanResponse>(DoRequest("RollbackGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RollbackGtmRecoveryPlanResponse> RollbackGtmRecoveryPlanWithOptionsAsync(RollbackGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RollbackGtmRecoveryPlanResponse>(await DoRequestAsync("RollbackGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public RollbackGtmRecoveryPlanResponse RollbackGtmRecoveryPlan(RollbackGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RollbackGtmRecoveryPlanWithOptions(request, runtime);
        }

        public async Task<RollbackGtmRecoveryPlanResponse> RollbackGtmRecoveryPlanAsync(RollbackGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RollbackGtmRecoveryPlanWithOptionsAsync(request, runtime);
        }

        public PreviewGtmRecoveryPlanResponse PreviewGtmRecoveryPlanWithOptions(PreviewGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreviewGtmRecoveryPlanResponse>(DoRequest("PreviewGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PreviewGtmRecoveryPlanResponse> PreviewGtmRecoveryPlanWithOptionsAsync(PreviewGtmRecoveryPlanRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreviewGtmRecoveryPlanResponse>(await DoRequestAsync("PreviewGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public PreviewGtmRecoveryPlanResponse PreviewGtmRecoveryPlan(PreviewGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PreviewGtmRecoveryPlanWithOptions(request, runtime);
        }

        public async Task<PreviewGtmRecoveryPlanResponse> PreviewGtmRecoveryPlanAsync(PreviewGtmRecoveryPlanRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PreviewGtmRecoveryPlanWithOptionsAsync(request, runtime);
        }

        public GetTxtRecordForVerifyResponse GetTxtRecordForVerifyWithOptions(GetTxtRecordForVerifyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTxtRecordForVerifyResponse>(DoRequest("GetTxtRecordForVerify", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<GetTxtRecordForVerifyResponse> GetTxtRecordForVerifyWithOptionsAsync(GetTxtRecordForVerifyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTxtRecordForVerifyResponse>(await DoRequestAsync("GetTxtRecordForVerify", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public GetTxtRecordForVerifyResponse GetTxtRecordForVerify(GetTxtRecordForVerifyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTxtRecordForVerifyWithOptions(request, runtime);
        }

        public async Task<GetTxtRecordForVerifyResponse> GetTxtRecordForVerifyAsync(GetTxtRecordForVerifyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTxtRecordForVerifyWithOptionsAsync(request, runtime);
        }

        public DescribeDomainStatisticsResponse DescribeDomainStatisticsWithOptions(DescribeDomainStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainStatisticsResponse>(DoRequest("DescribeDomainStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainStatisticsResponse> DescribeDomainStatisticsWithOptionsAsync(DescribeDomainStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainStatisticsResponse>(await DoRequestAsync("DescribeDomainStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDomainStatisticsResponse DescribeDomainStatistics(DescribeDomainStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainStatisticsWithOptions(request, runtime);
        }

        public async Task<DescribeDomainStatisticsResponse> DescribeDomainStatisticsAsync(DescribeDomainStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainStatisticsWithOptionsAsync(request, runtime);
        }

        public DescribeRecordStatisticsResponse DescribeRecordStatisticsWithOptions(DescribeRecordStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordStatisticsResponse>(DoRequest("DescribeRecordStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRecordStatisticsResponse> DescribeRecordStatisticsWithOptionsAsync(DescribeRecordStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordStatisticsResponse>(await DoRequestAsync("DescribeRecordStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRecordStatisticsResponse DescribeRecordStatistics(DescribeRecordStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRecordStatisticsWithOptions(request, runtime);
        }

        public async Task<DescribeRecordStatisticsResponse> DescribeRecordStatisticsAsync(DescribeRecordStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRecordStatisticsWithOptionsAsync(request, runtime);
        }

        public DescribeGtmInstanceSystemCnameResponse DescribeGtmInstanceSystemCnameWithOptions(DescribeGtmInstanceSystemCnameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceSystemCnameResponse>(DoRequest("DescribeGtmInstanceSystemCname", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmInstanceSystemCnameResponse> DescribeGtmInstanceSystemCnameWithOptionsAsync(DescribeGtmInstanceSystemCnameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceSystemCnameResponse>(await DoRequestAsync("DescribeGtmInstanceSystemCname", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmInstanceSystemCnameResponse DescribeGtmInstanceSystemCname(DescribeGtmInstanceSystemCnameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmInstanceSystemCnameWithOptions(request, runtime);
        }

        public async Task<DescribeGtmInstanceSystemCnameResponse> DescribeGtmInstanceSystemCnameAsync(DescribeGtmInstanceSystemCnameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmInstanceSystemCnameWithOptionsAsync(request, runtime);
        }

        public DescribeInstanceDomainsResponse DescribeInstanceDomainsWithOptions(DescribeInstanceDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceDomainsResponse>(DoRequest("DescribeInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeInstanceDomainsResponse> DescribeInstanceDomainsWithOptionsAsync(DescribeInstanceDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeInstanceDomainsResponse>(await DoRequestAsync("DescribeInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeInstanceDomainsResponse DescribeInstanceDomains(DescribeInstanceDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeInstanceDomainsWithOptions(request, runtime);
        }

        public async Task<DescribeInstanceDomainsResponse> DescribeInstanceDomainsAsync(DescribeInstanceDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeInstanceDomainsWithOptionsAsync(request, runtime);
        }

        public BindInstanceDomainsResponse BindInstanceDomainsWithOptions(BindInstanceDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindInstanceDomainsResponse>(DoRequest("BindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<BindInstanceDomainsResponse> BindInstanceDomainsWithOptionsAsync(BindInstanceDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BindInstanceDomainsResponse>(await DoRequestAsync("BindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public BindInstanceDomainsResponse BindInstanceDomains(BindInstanceDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BindInstanceDomainsWithOptions(request, runtime);
        }

        public async Task<BindInstanceDomainsResponse> BindInstanceDomainsAsync(BindInstanceDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BindInstanceDomainsWithOptionsAsync(request, runtime);
        }

        public UnbindInstanceDomainsResponse UnbindInstanceDomainsWithOptions(UnbindInstanceDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindInstanceDomainsResponse>(DoRequest("UnbindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnbindInstanceDomainsResponse> UnbindInstanceDomainsWithOptionsAsync(UnbindInstanceDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnbindInstanceDomainsResponse>(await DoRequestAsync("UnbindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UnbindInstanceDomainsResponse UnbindInstanceDomains(UnbindInstanceDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnbindInstanceDomainsWithOptions(request, runtime);
        }

        public async Task<UnbindInstanceDomainsResponse> UnbindInstanceDomainsAsync(UnbindInstanceDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnbindInstanceDomainsWithOptionsAsync(request, runtime);
        }

        public UpdateCustomLineResponse UpdateCustomLineWithOptions(UpdateCustomLineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateCustomLineResponse>(DoRequest("UpdateCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateCustomLineResponse> UpdateCustomLineWithOptionsAsync(UpdateCustomLineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateCustomLineResponse>(await DoRequestAsync("UpdateCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateCustomLineResponse UpdateCustomLine(UpdateCustomLineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateCustomLineWithOptions(request, runtime);
        }

        public async Task<UpdateCustomLineResponse> UpdateCustomLineAsync(UpdateCustomLineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateCustomLineWithOptionsAsync(request, runtime);
        }

        public AddCustomLineResponse AddCustomLineWithOptions(AddCustomLineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddCustomLineResponse>(DoRequest("AddCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddCustomLineResponse> AddCustomLineWithOptionsAsync(AddCustomLineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddCustomLineResponse>(await DoRequestAsync("AddCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public AddCustomLineResponse AddCustomLine(AddCustomLineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddCustomLineWithOptions(request, runtime);
        }

        public async Task<AddCustomLineResponse> AddCustomLineAsync(AddCustomLineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddCustomLineWithOptionsAsync(request, runtime);
        }

        public DeleteCustomLinesResponse DeleteCustomLinesWithOptions(DeleteCustomLinesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCustomLinesResponse>(DoRequest("DeleteCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteCustomLinesResponse> DeleteCustomLinesWithOptionsAsync(DeleteCustomLinesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCustomLinesResponse>(await DoRequestAsync("DeleteCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DeleteCustomLinesResponse DeleteCustomLines(DeleteCustomLinesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteCustomLinesWithOptions(request, runtime);
        }

        public async Task<DeleteCustomLinesResponse> DeleteCustomLinesAsync(DeleteCustomLinesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteCustomLinesWithOptionsAsync(request, runtime);
        }

        public DescribeCustomLineResponse DescribeCustomLineWithOptions(DescribeCustomLineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomLineResponse>(DoRequest("DescribeCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomLineResponse> DescribeCustomLineWithOptionsAsync(DescribeCustomLineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomLineResponse>(await DoRequestAsync("DescribeCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomLineResponse DescribeCustomLine(DescribeCustomLineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomLineWithOptions(request, runtime);
        }

        public async Task<DescribeCustomLineResponse> DescribeCustomLineAsync(DescribeCustomLineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomLineWithOptionsAsync(request, runtime);
        }

        public DescribeCustomLinesResponse DescribeCustomLinesWithOptions(DescribeCustomLinesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomLinesResponse>(DoRequest("DescribeCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeCustomLinesResponse> DescribeCustomLinesWithOptionsAsync(DescribeCustomLinesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeCustomLinesResponse>(await DoRequestAsync("DescribeCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeCustomLinesResponse DescribeCustomLines(DescribeCustomLinesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeCustomLinesWithOptions(request, runtime);
        }

        public async Task<DescribeCustomLinesResponse> DescribeCustomLinesAsync(DescribeCustomLinesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeCustomLinesWithOptionsAsync(request, runtime);
        }

        public DescribeDomainStatisticsSummaryResponse DescribeDomainStatisticsSummaryWithOptions(DescribeDomainStatisticsSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainStatisticsSummaryResponse>(DoRequest("DescribeDomainStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainStatisticsSummaryResponse> DescribeDomainStatisticsSummaryWithOptionsAsync(DescribeDomainStatisticsSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainStatisticsSummaryResponse>(await DoRequestAsync("DescribeDomainStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDomainStatisticsSummaryResponse DescribeDomainStatisticsSummary(DescribeDomainStatisticsSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainStatisticsSummaryWithOptions(request, runtime);
        }

        public async Task<DescribeDomainStatisticsSummaryResponse> DescribeDomainStatisticsSummaryAsync(DescribeDomainStatisticsSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainStatisticsSummaryWithOptionsAsync(request, runtime);
        }

        public DescribeRecordStatisticsSummaryResponse DescribeRecordStatisticsSummaryWithOptions(DescribeRecordStatisticsSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordStatisticsSummaryResponse>(DoRequest("DescribeRecordStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRecordStatisticsSummaryResponse> DescribeRecordStatisticsSummaryWithOptionsAsync(DescribeRecordStatisticsSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordStatisticsSummaryResponse>(await DoRequestAsync("DescribeRecordStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRecordStatisticsSummaryResponse DescribeRecordStatisticsSummary(DescribeRecordStatisticsSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRecordStatisticsSummaryWithOptions(request, runtime);
        }

        public async Task<DescribeRecordStatisticsSummaryResponse> DescribeRecordStatisticsSummaryAsync(DescribeRecordStatisticsSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRecordStatisticsSummaryWithOptionsAsync(request, runtime);
        }

        public OperateBatchDomainResponse OperateBatchDomainWithOptions(OperateBatchDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<OperateBatchDomainResponse>(DoRequest("OperateBatchDomain", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<OperateBatchDomainResponse> OperateBatchDomainWithOptionsAsync(OperateBatchDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<OperateBatchDomainResponse>(await DoRequestAsync("OperateBatchDomain", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public OperateBatchDomainResponse OperateBatchDomain(OperateBatchDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return OperateBatchDomainWithOptions(request, runtime);
        }

        public async Task<OperateBatchDomainResponse> OperateBatchDomainAsync(OperateBatchDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await OperateBatchDomainWithOptionsAsync(request, runtime);
        }

        public DescribeBatchResultDetailResponse DescribeBatchResultDetailWithOptions(DescribeBatchResultDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBatchResultDetailResponse>(DoRequest("DescribeBatchResultDetail", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBatchResultDetailResponse> DescribeBatchResultDetailWithOptionsAsync(DescribeBatchResultDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBatchResultDetailResponse>(await DoRequestAsync("DescribeBatchResultDetail", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBatchResultDetailResponse DescribeBatchResultDetail(DescribeBatchResultDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBatchResultDetailWithOptions(request, runtime);
        }

        public async Task<DescribeBatchResultDetailResponse> DescribeBatchResultDetailAsync(DescribeBatchResultDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBatchResultDetailWithOptionsAsync(request, runtime);
        }

        public DescribeBatchResultCountResponse DescribeBatchResultCountWithOptions(DescribeBatchResultCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBatchResultCountResponse>(DoRequest("DescribeBatchResultCount", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBatchResultCountResponse> DescribeBatchResultCountWithOptionsAsync(DescribeBatchResultCountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBatchResultCountResponse>(await DoRequestAsync("DescribeBatchResultCount", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBatchResultCountResponse DescribeBatchResultCount(DescribeBatchResultCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBatchResultCountWithOptions(request, runtime);
        }

        public async Task<DescribeBatchResultCountResponse> DescribeBatchResultCountAsync(DescribeBatchResultCountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBatchResultCountWithOptionsAsync(request, runtime);
        }

        public SetGtmAccessModeResponse SetGtmAccessModeWithOptions(SetGtmAccessModeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetGtmAccessModeResponse>(DoRequest("SetGtmAccessMode", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetGtmAccessModeResponse> SetGtmAccessModeWithOptionsAsync(SetGtmAccessModeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetGtmAccessModeResponse>(await DoRequestAsync("SetGtmAccessMode", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public SetGtmAccessModeResponse SetGtmAccessMode(SetGtmAccessModeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetGtmAccessModeWithOptions(request, runtime);
        }

        public async Task<SetGtmAccessModeResponse> SetGtmAccessModeAsync(SetGtmAccessModeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetGtmAccessModeWithOptionsAsync(request, runtime);
        }

        public SetGtmMonitorStatusResponse SetGtmMonitorStatusWithOptions(SetGtmMonitorStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetGtmMonitorStatusResponse>(DoRequest("SetGtmMonitorStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetGtmMonitorStatusResponse> SetGtmMonitorStatusWithOptionsAsync(SetGtmMonitorStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetGtmMonitorStatusResponse>(await DoRequestAsync("SetGtmMonitorStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public SetGtmMonitorStatusResponse SetGtmMonitorStatus(SetGtmMonitorStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetGtmMonitorStatusWithOptions(request, runtime);
        }

        public async Task<SetGtmMonitorStatusResponse> SetGtmMonitorStatusAsync(SetGtmMonitorStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetGtmMonitorStatusWithOptionsAsync(request, runtime);
        }

        public UpdateGtmInstanceGlobalConfigResponse UpdateGtmInstanceGlobalConfigWithOptions(UpdateGtmInstanceGlobalConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmInstanceGlobalConfigResponse>(DoRequest("UpdateGtmInstanceGlobalConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateGtmInstanceGlobalConfigResponse> UpdateGtmInstanceGlobalConfigWithOptionsAsync(UpdateGtmInstanceGlobalConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmInstanceGlobalConfigResponse>(await DoRequestAsync("UpdateGtmInstanceGlobalConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateGtmInstanceGlobalConfigResponse UpdateGtmInstanceGlobalConfig(UpdateGtmInstanceGlobalConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateGtmInstanceGlobalConfigWithOptions(request, runtime);
        }

        public async Task<UpdateGtmInstanceGlobalConfigResponse> UpdateGtmInstanceGlobalConfigAsync(UpdateGtmInstanceGlobalConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateGtmInstanceGlobalConfigWithOptionsAsync(request, runtime);
        }

        public DescribeGtmLogsResponse DescribeGtmLogsWithOptions(DescribeGtmLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmLogsResponse>(DoRequest("DescribeGtmLogs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmLogsResponse> DescribeGtmLogsWithOptionsAsync(DescribeGtmLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmLogsResponse>(await DoRequestAsync("DescribeGtmLogs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmLogsResponse DescribeGtmLogs(DescribeGtmLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmLogsWithOptions(request, runtime);
        }

        public async Task<DescribeGtmLogsResponse> DescribeGtmLogsAsync(DescribeGtmLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmLogsWithOptionsAsync(request, runtime);
        }

        public DeleteGtmAccessStrategyResponse DeleteGtmAccessStrategyWithOptions(DeleteGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGtmAccessStrategyResponse>(DoRequest("DeleteGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteGtmAccessStrategyResponse> DeleteGtmAccessStrategyWithOptionsAsync(DeleteGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGtmAccessStrategyResponse>(await DoRequestAsync("DeleteGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DeleteGtmAccessStrategyResponse DeleteGtmAccessStrategy(DeleteGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteGtmAccessStrategyWithOptions(request, runtime);
        }

        public async Task<DeleteGtmAccessStrategyResponse> DeleteGtmAccessStrategyAsync(DeleteGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteGtmAccessStrategyWithOptionsAsync(request, runtime);
        }

        public AddGtmMonitorResponse AddGtmMonitorWithOptions(AddGtmMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmMonitorResponse>(DoRequest("AddGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddGtmMonitorResponse> AddGtmMonitorWithOptionsAsync(AddGtmMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmMonitorResponse>(await DoRequestAsync("AddGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public AddGtmMonitorResponse AddGtmMonitor(AddGtmMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddGtmMonitorWithOptions(request, runtime);
        }

        public async Task<AddGtmMonitorResponse> AddGtmMonitorAsync(AddGtmMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddGtmMonitorWithOptionsAsync(request, runtime);
        }

        public AddGtmAddressPoolResponse AddGtmAddressPoolWithOptions(AddGtmAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmAddressPoolResponse>(DoRequest("AddGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddGtmAddressPoolResponse> AddGtmAddressPoolWithOptionsAsync(AddGtmAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmAddressPoolResponse>(await DoRequestAsync("AddGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public AddGtmAddressPoolResponse AddGtmAddressPool(AddGtmAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddGtmAddressPoolWithOptions(request, runtime);
        }

        public async Task<AddGtmAddressPoolResponse> AddGtmAddressPoolAsync(AddGtmAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddGtmAddressPoolWithOptionsAsync(request, runtime);
        }

        public AddGtmAccessStrategyResponse AddGtmAccessStrategyWithOptions(AddGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmAccessStrategyResponse>(DoRequest("AddGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddGtmAccessStrategyResponse> AddGtmAccessStrategyWithOptionsAsync(AddGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddGtmAccessStrategyResponse>(await DoRequestAsync("AddGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public AddGtmAccessStrategyResponse AddGtmAccessStrategy(AddGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddGtmAccessStrategyWithOptions(request, runtime);
        }

        public async Task<AddGtmAccessStrategyResponse> AddGtmAccessStrategyAsync(AddGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddGtmAccessStrategyWithOptionsAsync(request, runtime);
        }

        public DescribeGtmInstancesResponse DescribeGtmInstancesWithOptions(DescribeGtmInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstancesResponse>(DoRequest("DescribeGtmInstances", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmInstancesResponse> DescribeGtmInstancesWithOptionsAsync(DescribeGtmInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstancesResponse>(await DoRequestAsync("DescribeGtmInstances", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmInstancesResponse DescribeGtmInstances(DescribeGtmInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeGtmInstancesResponse> DescribeGtmInstancesAsync(DescribeGtmInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmInstancesWithOptionsAsync(request, runtime);
        }

        public DeleteGtmAddressPoolResponse DeleteGtmAddressPoolWithOptions(DeleteGtmAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGtmAddressPoolResponse>(DoRequest("DeleteGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteGtmAddressPoolResponse> DeleteGtmAddressPoolWithOptionsAsync(DeleteGtmAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteGtmAddressPoolResponse>(await DoRequestAsync("DeleteGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DeleteGtmAddressPoolResponse DeleteGtmAddressPool(DeleteGtmAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteGtmAddressPoolWithOptions(request, runtime);
        }

        public async Task<DeleteGtmAddressPoolResponse> DeleteGtmAddressPoolAsync(DeleteGtmAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteGtmAddressPoolWithOptionsAsync(request, runtime);
        }

        public DescribeGtmAccessStrategiesResponse DescribeGtmAccessStrategiesWithOptions(DescribeGtmAccessStrategiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAccessStrategiesResponse>(DoRequest("DescribeGtmAccessStrategies", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmAccessStrategiesResponse> DescribeGtmAccessStrategiesWithOptionsAsync(DescribeGtmAccessStrategiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAccessStrategiesResponse>(await DoRequestAsync("DescribeGtmAccessStrategies", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmAccessStrategiesResponse DescribeGtmAccessStrategies(DescribeGtmAccessStrategiesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmAccessStrategiesWithOptions(request, runtime);
        }

        public async Task<DescribeGtmAccessStrategiesResponse> DescribeGtmAccessStrategiesAsync(DescribeGtmAccessStrategiesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmAccessStrategiesWithOptionsAsync(request, runtime);
        }

        public DescribeGtmAccessStrategyResponse DescribeGtmAccessStrategyWithOptions(DescribeGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAccessStrategyResponse>(DoRequest("DescribeGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmAccessStrategyResponse> DescribeGtmAccessStrategyWithOptionsAsync(DescribeGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAccessStrategyResponse>(await DoRequestAsync("DescribeGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmAccessStrategyResponse DescribeGtmAccessStrategy(DescribeGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmAccessStrategyWithOptions(request, runtime);
        }

        public async Task<DescribeGtmAccessStrategyResponse> DescribeGtmAccessStrategyAsync(DescribeGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmAccessStrategyWithOptionsAsync(request, runtime);
        }

        public DescribeGtmAccessStrategyAvailableConfigResponse DescribeGtmAccessStrategyAvailableConfigWithOptions(DescribeGtmAccessStrategyAvailableConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAccessStrategyAvailableConfigResponse>(DoRequest("DescribeGtmAccessStrategyAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmAccessStrategyAvailableConfigResponse> DescribeGtmAccessStrategyAvailableConfigWithOptionsAsync(DescribeGtmAccessStrategyAvailableConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAccessStrategyAvailableConfigResponse>(await DoRequestAsync("DescribeGtmAccessStrategyAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmAccessStrategyAvailableConfigResponse DescribeGtmAccessStrategyAvailableConfig(DescribeGtmAccessStrategyAvailableConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmAccessStrategyAvailableConfigWithOptions(request, runtime);
        }

        public async Task<DescribeGtmAccessStrategyAvailableConfigResponse> DescribeGtmAccessStrategyAvailableConfigAsync(DescribeGtmAccessStrategyAvailableConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmAccessStrategyAvailableConfigWithOptionsAsync(request, runtime);
        }

        public DescribeGtmAvailableAlertGroupResponse DescribeGtmAvailableAlertGroupWithOptions(DescribeGtmAvailableAlertGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAvailableAlertGroupResponse>(DoRequest("DescribeGtmAvailableAlertGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmAvailableAlertGroupResponse> DescribeGtmAvailableAlertGroupWithOptionsAsync(DescribeGtmAvailableAlertGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmAvailableAlertGroupResponse>(await DoRequestAsync("DescribeGtmAvailableAlertGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmAvailableAlertGroupResponse DescribeGtmAvailableAlertGroup(DescribeGtmAvailableAlertGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmAvailableAlertGroupWithOptions(request, runtime);
        }

        public async Task<DescribeGtmAvailableAlertGroupResponse> DescribeGtmAvailableAlertGroupAsync(DescribeGtmAvailableAlertGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmAvailableAlertGroupWithOptionsAsync(request, runtime);
        }

        public DescribeGtmInstanceResponse DescribeGtmInstanceWithOptions(DescribeGtmInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceResponse>(DoRequest("DescribeGtmInstance", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmInstanceResponse> DescribeGtmInstanceWithOptionsAsync(DescribeGtmInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceResponse>(await DoRequestAsync("DescribeGtmInstance", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmInstanceResponse DescribeGtmInstance(DescribeGtmInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmInstanceWithOptions(request, runtime);
        }

        public async Task<DescribeGtmInstanceResponse> DescribeGtmInstanceAsync(DescribeGtmInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmInstanceWithOptionsAsync(request, runtime);
        }

        public DescribeGtmInstanceAddressPoolResponse DescribeGtmInstanceAddressPoolWithOptions(DescribeGtmInstanceAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceAddressPoolResponse>(DoRequest("DescribeGtmInstanceAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmInstanceAddressPoolResponse> DescribeGtmInstanceAddressPoolWithOptionsAsync(DescribeGtmInstanceAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceAddressPoolResponse>(await DoRequestAsync("DescribeGtmInstanceAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmInstanceAddressPoolResponse DescribeGtmInstanceAddressPool(DescribeGtmInstanceAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmInstanceAddressPoolWithOptions(request, runtime);
        }

        public async Task<DescribeGtmInstanceAddressPoolResponse> DescribeGtmInstanceAddressPoolAsync(DescribeGtmInstanceAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmInstanceAddressPoolWithOptionsAsync(request, runtime);
        }

        public DescribeGtmInstanceAddressPoolsResponse DescribeGtmInstanceAddressPoolsWithOptions(DescribeGtmInstanceAddressPoolsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceAddressPoolsResponse>(DoRequest("DescribeGtmInstanceAddressPools", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmInstanceAddressPoolsResponse> DescribeGtmInstanceAddressPoolsWithOptionsAsync(DescribeGtmInstanceAddressPoolsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceAddressPoolsResponse>(await DoRequestAsync("DescribeGtmInstanceAddressPools", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmInstanceAddressPoolsResponse DescribeGtmInstanceAddressPools(DescribeGtmInstanceAddressPoolsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmInstanceAddressPoolsWithOptions(request, runtime);
        }

        public async Task<DescribeGtmInstanceAddressPoolsResponse> DescribeGtmInstanceAddressPoolsAsync(DescribeGtmInstanceAddressPoolsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmInstanceAddressPoolsWithOptionsAsync(request, runtime);
        }

        public DescribeGtmInstanceStatusResponse DescribeGtmInstanceStatusWithOptions(DescribeGtmInstanceStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceStatusResponse>(DoRequest("DescribeGtmInstanceStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmInstanceStatusResponse> DescribeGtmInstanceStatusWithOptionsAsync(DescribeGtmInstanceStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmInstanceStatusResponse>(await DoRequestAsync("DescribeGtmInstanceStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmInstanceStatusResponse DescribeGtmInstanceStatus(DescribeGtmInstanceStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmInstanceStatusWithOptions(request, runtime);
        }

        public async Task<DescribeGtmInstanceStatusResponse> DescribeGtmInstanceStatusAsync(DescribeGtmInstanceStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmInstanceStatusWithOptionsAsync(request, runtime);
        }

        public DescribeGtmMonitorAvailableConfigResponse DescribeGtmMonitorAvailableConfigWithOptions(DescribeGtmMonitorAvailableConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmMonitorAvailableConfigResponse>(DoRequest("DescribeGtmMonitorAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmMonitorAvailableConfigResponse> DescribeGtmMonitorAvailableConfigWithOptionsAsync(DescribeGtmMonitorAvailableConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmMonitorAvailableConfigResponse>(await DoRequestAsync("DescribeGtmMonitorAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmMonitorAvailableConfigResponse DescribeGtmMonitorAvailableConfig(DescribeGtmMonitorAvailableConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmMonitorAvailableConfigWithOptions(request, runtime);
        }

        public async Task<DescribeGtmMonitorAvailableConfigResponse> DescribeGtmMonitorAvailableConfigAsync(DescribeGtmMonitorAvailableConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmMonitorAvailableConfigWithOptionsAsync(request, runtime);
        }

        public DescribeGtmMonitorConfigResponse DescribeGtmMonitorConfigWithOptions(DescribeGtmMonitorConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmMonitorConfigResponse>(DoRequest("DescribeGtmMonitorConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeGtmMonitorConfigResponse> DescribeGtmMonitorConfigWithOptionsAsync(DescribeGtmMonitorConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeGtmMonitorConfigResponse>(await DoRequestAsync("DescribeGtmMonitorConfig", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeGtmMonitorConfigResponse DescribeGtmMonitorConfig(DescribeGtmMonitorConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeGtmMonitorConfigWithOptions(request, runtime);
        }

        public async Task<DescribeGtmMonitorConfigResponse> DescribeGtmMonitorConfigAsync(DescribeGtmMonitorConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeGtmMonitorConfigWithOptionsAsync(request, runtime);
        }

        public UpdateGtmAccessStrategyResponse UpdateGtmAccessStrategyWithOptions(UpdateGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmAccessStrategyResponse>(DoRequest("UpdateGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateGtmAccessStrategyResponse> UpdateGtmAccessStrategyWithOptionsAsync(UpdateGtmAccessStrategyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmAccessStrategyResponse>(await DoRequestAsync("UpdateGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateGtmAccessStrategyResponse UpdateGtmAccessStrategy(UpdateGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateGtmAccessStrategyWithOptions(request, runtime);
        }

        public async Task<UpdateGtmAccessStrategyResponse> UpdateGtmAccessStrategyAsync(UpdateGtmAccessStrategyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateGtmAccessStrategyWithOptionsAsync(request, runtime);
        }

        public UpdateGtmAddressPoolResponse UpdateGtmAddressPoolWithOptions(UpdateGtmAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmAddressPoolResponse>(DoRequest("UpdateGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateGtmAddressPoolResponse> UpdateGtmAddressPoolWithOptionsAsync(UpdateGtmAddressPoolRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmAddressPoolResponse>(await DoRequestAsync("UpdateGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateGtmAddressPoolResponse UpdateGtmAddressPool(UpdateGtmAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateGtmAddressPoolWithOptions(request, runtime);
        }

        public async Task<UpdateGtmAddressPoolResponse> UpdateGtmAddressPoolAsync(UpdateGtmAddressPoolRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateGtmAddressPoolWithOptionsAsync(request, runtime);
        }

        public UpdateGtmMonitorResponse UpdateGtmMonitorWithOptions(UpdateGtmMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmMonitorResponse>(DoRequest("UpdateGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateGtmMonitorResponse> UpdateGtmMonitorWithOptionsAsync(UpdateGtmMonitorRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateGtmMonitorResponse>(await DoRequestAsync("UpdateGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateGtmMonitorResponse UpdateGtmMonitor(UpdateGtmMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateGtmMonitorWithOptions(request, runtime);
        }

        public async Task<UpdateGtmMonitorResponse> UpdateGtmMonitorAsync(UpdateGtmMonitorRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateGtmMonitorWithOptionsAsync(request, runtime);
        }

        public UpdateDomainRemarkResponse UpdateDomainRemarkWithOptions(UpdateDomainRemarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainRemarkResponse>(DoRequest("UpdateDomainRemark", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDomainRemarkResponse> UpdateDomainRemarkWithOptionsAsync(UpdateDomainRemarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainRemarkResponse>(await DoRequestAsync("UpdateDomainRemark", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateDomainRemarkResponse UpdateDomainRemark(UpdateDomainRemarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDomainRemarkWithOptions(request, runtime);
        }

        public async Task<UpdateDomainRemarkResponse> UpdateDomainRemarkAsync(UpdateDomainRemarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDomainRemarkWithOptionsAsync(request, runtime);
        }

        public UpdateDomainRecordRemarkResponse UpdateDomainRecordRemarkWithOptions(UpdateDomainRecordRemarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainRecordRemarkResponse>(DoRequest("UpdateDomainRecordRemark", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDomainRecordRemarkResponse> UpdateDomainRecordRemarkWithOptionsAsync(UpdateDomainRecordRemarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainRecordRemarkResponse>(await DoRequestAsync("UpdateDomainRecordRemark", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateDomainRecordRemarkResponse UpdateDomainRecordRemark(UpdateDomainRecordRemarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDomainRecordRemarkWithOptions(request, runtime);
        }

        public async Task<UpdateDomainRecordRemarkResponse> UpdateDomainRecordRemarkAsync(UpdateDomainRecordRemarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDomainRecordRemarkWithOptionsAsync(request, runtime);
        }

        public DescribeSupportLinesResponse DescribeSupportLinesWithOptions(DescribeSupportLinesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSupportLinesResponse>(DoRequest("DescribeSupportLines", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSupportLinesResponse> DescribeSupportLinesWithOptionsAsync(DescribeSupportLinesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSupportLinesResponse>(await DoRequestAsync("DescribeSupportLines", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSupportLinesResponse DescribeSupportLines(DescribeSupportLinesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSupportLinesWithOptions(request, runtime);
        }

        public async Task<DescribeSupportLinesResponse> DescribeSupportLinesAsync(DescribeSupportLinesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSupportLinesWithOptionsAsync(request, runtime);
        }

        public DescribeDomainNsResponse DescribeDomainNsWithOptions(DescribeDomainNsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainNsResponse>(DoRequest("DescribeDomainNs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainNsResponse> DescribeDomainNsWithOptionsAsync(DescribeDomainNsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainNsResponse>(await DoRequestAsync("DescribeDomainNs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDomainNsResponse DescribeDomainNs(DescribeDomainNsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainNsWithOptions(request, runtime);
        }

        public async Task<DescribeDomainNsResponse> DescribeDomainNsAsync(DescribeDomainNsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainNsWithOptionsAsync(request, runtime);
        }

        public DescribeDnsProductInstanceResponse DescribeDnsProductInstanceWithOptions(DescribeDnsProductInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDnsProductInstanceResponse>(DoRequest("DescribeDnsProductInstance", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDnsProductInstanceResponse> DescribeDnsProductInstanceWithOptionsAsync(DescribeDnsProductInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDnsProductInstanceResponse>(await DoRequestAsync("DescribeDnsProductInstance", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDnsProductInstanceResponse DescribeDnsProductInstance(DescribeDnsProductInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDnsProductInstanceWithOptions(request, runtime);
        }

        public async Task<DescribeDnsProductInstanceResponse> DescribeDnsProductInstanceAsync(DescribeDnsProductInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDnsProductInstanceWithOptionsAsync(request, runtime);
        }

        public UpdateDomainRecordResponse UpdateDomainRecordWithOptions(UpdateDomainRecordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainRecordResponse>(DoRequest("UpdateDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDomainRecordResponse> UpdateDomainRecordWithOptionsAsync(UpdateDomainRecordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainRecordResponse>(await DoRequestAsync("UpdateDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public UpdateDomainRecordResponse UpdateDomainRecord(UpdateDomainRecordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDomainRecordWithOptions(request, runtime);
        }

        public async Task<UpdateDomainRecordResponse> UpdateDomainRecordAsync(UpdateDomainRecordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDomainRecordWithOptionsAsync(request, runtime);
        }

        public UpdateDomainGroupResponse UpdateDomainGroupWithOptions(UpdateDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainGroupResponse>(DoRequest("UpdateDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDomainGroupResponse> UpdateDomainGroupWithOptionsAsync(UpdateDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDomainGroupResponse>(await DoRequestAsync("UpdateDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateDomainGroupResponse UpdateDomainGroup(UpdateDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDomainGroupWithOptions(request, runtime);
        }

        public async Task<UpdateDomainGroupResponse> UpdateDomainGroupAsync(UpdateDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDomainGroupWithOptionsAsync(request, runtime);
        }

        public UpdateDNSSLBWeightResponse UpdateDNSSLBWeightWithOptions(UpdateDNSSLBWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDNSSLBWeightResponse>(DoRequest("UpdateDNSSLBWeight", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDNSSLBWeightResponse> UpdateDNSSLBWeightWithOptionsAsync(UpdateDNSSLBWeightRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDNSSLBWeightResponse>(await DoRequestAsync("UpdateDNSSLBWeight", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public UpdateDNSSLBWeightResponse UpdateDNSSLBWeight(UpdateDNSSLBWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDNSSLBWeightWithOptions(request, runtime);
        }

        public async Task<UpdateDNSSLBWeightResponse> UpdateDNSSLBWeightAsync(UpdateDNSSLBWeightRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDNSSLBWeightWithOptionsAsync(request, runtime);
        }

        public SetDomainRecordStatusResponse SetDomainRecordStatusWithOptions(SetDomainRecordStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDomainRecordStatusResponse>(DoRequest("SetDomainRecordStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDomainRecordStatusResponse> SetDomainRecordStatusWithOptionsAsync(SetDomainRecordStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDomainRecordStatusResponse>(await DoRequestAsync("SetDomainRecordStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public SetDomainRecordStatusResponse SetDomainRecordStatus(SetDomainRecordStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDomainRecordStatusWithOptions(request, runtime);
        }

        public async Task<SetDomainRecordStatusResponse> SetDomainRecordStatusAsync(SetDomainRecordStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDomainRecordStatusWithOptionsAsync(request, runtime);
        }

        public SetDNSSLBStatusResponse SetDNSSLBStatusWithOptions(SetDNSSLBStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDNSSLBStatusResponse>(DoRequest("SetDNSSLBStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDNSSLBStatusResponse> SetDNSSLBStatusWithOptionsAsync(SetDNSSLBStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDNSSLBStatusResponse>(await DoRequestAsync("SetDNSSLBStatus", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public SetDNSSLBStatusResponse SetDNSSLBStatus(SetDNSSLBStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDNSSLBStatusWithOptions(request, runtime);
        }

        public async Task<SetDNSSLBStatusResponse> SetDNSSLBStatusAsync(SetDNSSLBStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDNSSLBStatusWithOptionsAsync(request, runtime);
        }

        public ModifyHichinaDomainDNSResponse ModifyHichinaDomainDNSWithOptions(ModifyHichinaDomainDNSRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHichinaDomainDNSResponse>(DoRequest("ModifyHichinaDomainDNS", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyHichinaDomainDNSResponse> ModifyHichinaDomainDNSWithOptionsAsync(ModifyHichinaDomainDNSRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyHichinaDomainDNSResponse>(await DoRequestAsync("ModifyHichinaDomainDNS", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public ModifyHichinaDomainDNSResponse ModifyHichinaDomainDNS(ModifyHichinaDomainDNSRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyHichinaDomainDNSWithOptions(request, runtime);
        }

        public async Task<ModifyHichinaDomainDNSResponse> ModifyHichinaDomainDNSAsync(ModifyHichinaDomainDNSRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyHichinaDomainDNSWithOptionsAsync(request, runtime);
        }

        public GetMainDomainNameResponse GetMainDomainNameWithOptions(GetMainDomainNameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMainDomainNameResponse>(DoRequest("GetMainDomainName", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMainDomainNameResponse> GetMainDomainNameWithOptionsAsync(GetMainDomainNameRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMainDomainNameResponse>(await DoRequestAsync("GetMainDomainName", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public GetMainDomainNameResponse GetMainDomainName(GetMainDomainNameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMainDomainNameWithOptions(request, runtime);
        }

        public async Task<GetMainDomainNameResponse> GetMainDomainNameAsync(GetMainDomainNameRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMainDomainNameWithOptionsAsync(request, runtime);
        }

        public DescribeSubDomainRecordsResponse DescribeSubDomainRecordsWithOptions(DescribeSubDomainRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSubDomainRecordsResponse>(DoRequest("DescribeSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSubDomainRecordsResponse> DescribeSubDomainRecordsWithOptionsAsync(DescribeSubDomainRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSubDomainRecordsResponse>(await DoRequestAsync("DescribeSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSubDomainRecordsResponse DescribeSubDomainRecords(DescribeSubDomainRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSubDomainRecordsWithOptions(request, runtime);
        }

        public async Task<DescribeSubDomainRecordsResponse> DescribeSubDomainRecordsAsync(DescribeSubDomainRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSubDomainRecordsWithOptionsAsync(request, runtime);
        }

        public DescribeRecordLogsResponse DescribeRecordLogsWithOptions(DescribeRecordLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordLogsResponse>(DoRequest("DescribeRecordLogs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRecordLogsResponse> DescribeRecordLogsWithOptionsAsync(DescribeRecordLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRecordLogsResponse>(await DoRequestAsync("DescribeRecordLogs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeRecordLogsResponse DescribeRecordLogs(DescribeRecordLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeRecordLogsWithOptions(request, runtime);
        }

        public async Task<DescribeRecordLogsResponse> DescribeRecordLogsAsync(DescribeRecordLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeRecordLogsWithOptionsAsync(request, runtime);
        }

        public DescribeDomainsResponse DescribeDomainsWithOptions(DescribeDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainsResponse>(DoRequest("DescribeDomains", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainsResponse> DescribeDomainsWithOptionsAsync(DescribeDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainsResponse>(await DoRequestAsync("DescribeDomains", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public DescribeDomainsResponse DescribeDomains(DescribeDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainsWithOptions(request, runtime);
        }

        public async Task<DescribeDomainsResponse> DescribeDomainsAsync(DescribeDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainsWithOptionsAsync(request, runtime);
        }

        public DescribeDomainRecordsResponse DescribeDomainRecordsWithOptions(DescribeDomainRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainRecordsResponse>(DoRequest("DescribeDomainRecords", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainRecordsResponse> DescribeDomainRecordsWithOptionsAsync(DescribeDomainRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainRecordsResponse>(await DoRequestAsync("DescribeDomainRecords", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public DescribeDomainRecordsResponse DescribeDomainRecords(DescribeDomainRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainRecordsWithOptions(request, runtime);
        }

        public async Task<DescribeDomainRecordsResponse> DescribeDomainRecordsAsync(DescribeDomainRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainRecordsWithOptionsAsync(request, runtime);
        }

        public DescribeDomainRecordInfoResponse DescribeDomainRecordInfoWithOptions(DescribeDomainRecordInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainRecordInfoResponse>(DoRequest("DescribeDomainRecordInfo", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainRecordInfoResponse> DescribeDomainRecordInfoWithOptionsAsync(DescribeDomainRecordInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainRecordInfoResponse>(await DoRequestAsync("DescribeDomainRecordInfo", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public DescribeDomainRecordInfoResponse DescribeDomainRecordInfo(DescribeDomainRecordInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainRecordInfoWithOptions(request, runtime);
        }

        public async Task<DescribeDomainRecordInfoResponse> DescribeDomainRecordInfoAsync(DescribeDomainRecordInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainRecordInfoWithOptionsAsync(request, runtime);
        }

        public DescribeDomainLogsResponse DescribeDomainLogsWithOptions(DescribeDomainLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainLogsResponse>(DoRequest("DescribeDomainLogs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainLogsResponse> DescribeDomainLogsWithOptionsAsync(DescribeDomainLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainLogsResponse>(await DoRequestAsync("DescribeDomainLogs", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDomainLogsResponse DescribeDomainLogs(DescribeDomainLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainLogsWithOptions(request, runtime);
        }

        public async Task<DescribeDomainLogsResponse> DescribeDomainLogsAsync(DescribeDomainLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainLogsWithOptionsAsync(request, runtime);
        }

        public DescribeDomainInfoResponse DescribeDomainInfoWithOptions(DescribeDomainInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainInfoResponse>(DoRequest("DescribeDomainInfo", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainInfoResponse> DescribeDomainInfoWithOptionsAsync(DescribeDomainInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainInfoResponse>(await DoRequestAsync("DescribeDomainInfo", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDomainInfoResponse DescribeDomainInfo(DescribeDomainInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainInfoWithOptions(request, runtime);
        }

        public async Task<DescribeDomainInfoResponse> DescribeDomainInfoAsync(DescribeDomainInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainInfoWithOptionsAsync(request, runtime);
        }

        public DescribeDomainGroupsResponse DescribeDomainGroupsWithOptions(DescribeDomainGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainGroupsResponse>(DoRequest("DescribeDomainGroups", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDomainGroupsResponse> DescribeDomainGroupsWithOptionsAsync(DescribeDomainGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDomainGroupsResponse>(await DoRequestAsync("DescribeDomainGroups", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDomainGroupsResponse DescribeDomainGroups(DescribeDomainGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDomainGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeDomainGroupsResponse> DescribeDomainGroupsAsync(DescribeDomainGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDomainGroupsWithOptionsAsync(request, runtime);
        }

        public DescribeDNSSLBSubDomainsResponse DescribeDNSSLBSubDomainsWithOptions(DescribeDNSSLBSubDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDNSSLBSubDomainsResponse>(DoRequest("DescribeDNSSLBSubDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDNSSLBSubDomainsResponse> DescribeDNSSLBSubDomainsWithOptionsAsync(DescribeDNSSLBSubDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDNSSLBSubDomainsResponse>(await DoRequestAsync("DescribeDNSSLBSubDomains", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDNSSLBSubDomainsResponse DescribeDNSSLBSubDomains(DescribeDNSSLBSubDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDNSSLBSubDomainsWithOptions(request, runtime);
        }

        public async Task<DescribeDNSSLBSubDomainsResponse> DescribeDNSSLBSubDomainsAsync(DescribeDNSSLBSubDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDNSSLBSubDomainsWithOptionsAsync(request, runtime);
        }

        public DescribeDnsProductInstancesResponse DescribeDnsProductInstancesWithOptions(DescribeDnsProductInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDnsProductInstancesResponse>(DoRequest("DescribeDnsProductInstances", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDnsProductInstancesResponse> DescribeDnsProductInstancesWithOptionsAsync(DescribeDnsProductInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDnsProductInstancesResponse>(await DoRequestAsync("DescribeDnsProductInstances", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDnsProductInstancesResponse DescribeDnsProductInstances(DescribeDnsProductInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDnsProductInstancesWithOptions(request, runtime);
        }

        public async Task<DescribeDnsProductInstancesResponse> DescribeDnsProductInstancesAsync(DescribeDnsProductInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDnsProductInstancesWithOptionsAsync(request, runtime);
        }

        public DeleteSubDomainRecordsResponse DeleteSubDomainRecordsWithOptions(DeleteSubDomainRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSubDomainRecordsResponse>(DoRequest("DeleteSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSubDomainRecordsResponse> DeleteSubDomainRecordsWithOptionsAsync(DeleteSubDomainRecordsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSubDomainRecordsResponse>(await DoRequestAsync("DeleteSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSubDomainRecordsResponse DeleteSubDomainRecords(DeleteSubDomainRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSubDomainRecordsWithOptions(request, runtime);
        }

        public async Task<DeleteSubDomainRecordsResponse> DeleteSubDomainRecordsAsync(DeleteSubDomainRecordsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSubDomainRecordsWithOptionsAsync(request, runtime);
        }

        public DeleteDomainRecordResponse DeleteDomainRecordWithOptions(DeleteDomainRecordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDomainRecordResponse>(DoRequest("DeleteDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDomainRecordResponse> DeleteDomainRecordWithOptionsAsync(DeleteDomainRecordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDomainRecordResponse>(await DoRequestAsync("DeleteDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public DeleteDomainRecordResponse DeleteDomainRecord(DeleteDomainRecordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDomainRecordWithOptions(request, runtime);
        }

        public async Task<DeleteDomainRecordResponse> DeleteDomainRecordAsync(DeleteDomainRecordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDomainRecordWithOptionsAsync(request, runtime);
        }

        public DeleteDomainGroupResponse DeleteDomainGroupWithOptions(DeleteDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDomainGroupResponse>(DoRequest("DeleteDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDomainGroupResponse> DeleteDomainGroupWithOptionsAsync(DeleteDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDomainGroupResponse>(await DoRequestAsync("DeleteDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDomainGroupResponse DeleteDomainGroup(DeleteDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDomainGroupWithOptions(request, runtime);
        }

        public async Task<DeleteDomainGroupResponse> DeleteDomainGroupAsync(DeleteDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDomainGroupWithOptionsAsync(request, runtime);
        }

        public DeleteDomainResponse DeleteDomainWithOptions(DeleteDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDomainResponse>(DoRequest("DeleteDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDomainResponse> DeleteDomainWithOptionsAsync(DeleteDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDomainResponse>(await DoRequestAsync("DeleteDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public DeleteDomainResponse DeleteDomain(DeleteDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDomainWithOptions(request, runtime);
        }

        public async Task<DeleteDomainResponse> DeleteDomainAsync(DeleteDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDomainWithOptionsAsync(request, runtime);
        }

        public ChangeDomainOfDnsProductResponse ChangeDomainOfDnsProductWithOptions(ChangeDomainOfDnsProductRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangeDomainOfDnsProductResponse>(DoRequest("ChangeDomainOfDnsProduct", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ChangeDomainOfDnsProductResponse> ChangeDomainOfDnsProductWithOptionsAsync(ChangeDomainOfDnsProductRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangeDomainOfDnsProductResponse>(await DoRequestAsync("ChangeDomainOfDnsProduct", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public ChangeDomainOfDnsProductResponse ChangeDomainOfDnsProduct(ChangeDomainOfDnsProductRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ChangeDomainOfDnsProductWithOptions(request, runtime);
        }

        public async Task<ChangeDomainOfDnsProductResponse> ChangeDomainOfDnsProductAsync(ChangeDomainOfDnsProductRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ChangeDomainOfDnsProductWithOptionsAsync(request, runtime);
        }

        public ChangeDomainGroupResponse ChangeDomainGroupWithOptions(ChangeDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangeDomainGroupResponse>(DoRequest("ChangeDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ChangeDomainGroupResponse> ChangeDomainGroupWithOptionsAsync(ChangeDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangeDomainGroupResponse>(await DoRequestAsync("ChangeDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public ChangeDomainGroupResponse ChangeDomainGroup(ChangeDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ChangeDomainGroupWithOptions(request, runtime);
        }

        public async Task<ChangeDomainGroupResponse> ChangeDomainGroupAsync(ChangeDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ChangeDomainGroupWithOptionsAsync(request, runtime);
        }

        public AddDomainRecordResponse AddDomainRecordWithOptions(AddDomainRecordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainRecordResponse>(DoRequest("AddDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<AddDomainRecordResponse> AddDomainRecordWithOptionsAsync(AddDomainRecordRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainRecordResponse>(await DoRequestAsync("AddDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public AddDomainRecordResponse AddDomainRecord(AddDomainRecordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddDomainRecordWithOptions(request, runtime);
        }

        public async Task<AddDomainRecordResponse> AddDomainRecordAsync(AddDomainRecordRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddDomainRecordWithOptionsAsync(request, runtime);
        }

        public AddDomainGroupResponse AddDomainGroupWithOptions(AddDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainGroupResponse>(DoRequest("AddDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddDomainGroupResponse> AddDomainGroupWithOptionsAsync(AddDomainGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainGroupResponse>(await DoRequestAsync("AddDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, request.ToMap(), runtime));
        }

        public AddDomainGroupResponse AddDomainGroup(AddDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddDomainGroupWithOptions(request, runtime);
        }

        public async Task<AddDomainGroupResponse> AddDomainGroupAsync(AddDomainGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddDomainGroupWithOptionsAsync(request, runtime);
        }

        public AddDomainResponse AddDomainWithOptions(AddDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainResponse>(DoRequest("AddDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public async Task<AddDomainResponse> AddDomainWithOptionsAsync(AddDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddDomainResponse>(await DoRequestAsync("AddDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, request.ToMap(), runtime));
        }

        public AddDomainResponse AddDomain(AddDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddDomainWithOptions(request, runtime);
        }

        public async Task<AddDomainResponse> AddDomainAsync(AddDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddDomainWithOptionsAsync(request, runtime);
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
