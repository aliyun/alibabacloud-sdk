// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.NAS20170626.Models;

namespace AlibabaCloud.SDK.NAS20170626
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"cn-chengdu", "nas.aliyuncs.com"},
                {"me-east-1", "nas.ap-northeast-1.aliyuncs.com"},
                {"cn-hangzhou-finance", "nas.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("nas", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DeleteLifecyclePolicyResponse DeleteLifecyclePolicyWithOptions(DeleteLifecyclePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLifecyclePolicyResponse>(DoRequest("DeleteLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteLifecyclePolicyResponse> DeleteLifecyclePolicyWithOptionsAsync(DeleteLifecyclePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLifecyclePolicyResponse>(await DoRequestAsync("DeleteLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteLifecyclePolicyResponse DeleteLifecyclePolicy(DeleteLifecyclePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteLifecyclePolicyWithOptions(request, runtime);
        }

        public async Task<DeleteLifecyclePolicyResponse> DeleteLifecyclePolicyAsync(DeleteLifecyclePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteLifecyclePolicyWithOptionsAsync(request, runtime);
        }

        public UpgradeFileSystemResponse UpgradeFileSystemWithOptions(UpgradeFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeFileSystemResponse>(DoRequest("UpgradeFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpgradeFileSystemResponse> UpgradeFileSystemWithOptionsAsync(UpgradeFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeFileSystemResponse>(await DoRequestAsync("UpgradeFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public UpgradeFileSystemResponse UpgradeFileSystem(UpgradeFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeFileSystemWithOptions(request, runtime);
        }

        public async Task<UpgradeFileSystemResponse> UpgradeFileSystemAsync(UpgradeFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeFileSystemWithOptionsAsync(request, runtime);
        }

        public ModifyLifecyclePolicyResponse ModifyLifecyclePolicyWithOptions(ModifyLifecyclePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLifecyclePolicyResponse>(DoRequest("ModifyLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyLifecyclePolicyResponse> ModifyLifecyclePolicyWithOptionsAsync(ModifyLifecyclePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLifecyclePolicyResponse>(await DoRequestAsync("ModifyLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyLifecyclePolicyResponse ModifyLifecyclePolicy(ModifyLifecyclePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyLifecyclePolicyWithOptions(request, runtime);
        }

        public async Task<ModifyLifecyclePolicyResponse> ModifyLifecyclePolicyAsync(ModifyLifecyclePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyLifecyclePolicyWithOptionsAsync(request, runtime);
        }

        public CreateLifecyclePolicyResponse CreateLifecyclePolicyWithOptions(CreateLifecyclePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLifecyclePolicyResponse>(DoRequest("CreateLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateLifecyclePolicyResponse> CreateLifecyclePolicyWithOptionsAsync(CreateLifecyclePolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLifecyclePolicyResponse>(await DoRequestAsync("CreateLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateLifecyclePolicyResponse CreateLifecyclePolicy(CreateLifecyclePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateLifecyclePolicyWithOptions(request, runtime);
        }

        public async Task<CreateLifecyclePolicyResponse> CreateLifecyclePolicyAsync(CreateLifecyclePolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateLifecyclePolicyWithOptionsAsync(request, runtime);
        }

        public DescribeLifecyclePoliciesResponse DescribeLifecyclePoliciesWithOptions(DescribeLifecyclePoliciesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLifecyclePoliciesResponse>(DoRequest("DescribeLifecyclePolicies", "HTTPS", "GET", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLifecyclePoliciesResponse> DescribeLifecyclePoliciesWithOptionsAsync(DescribeLifecyclePoliciesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLifecyclePoliciesResponse>(await DoRequestAsync("DescribeLifecyclePolicies", "HTTPS", "GET", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLifecyclePoliciesResponse DescribeLifecyclePolicies(DescribeLifecyclePoliciesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLifecyclePoliciesWithOptions(request, runtime);
        }

        public async Task<DescribeLifecyclePoliciesResponse> DescribeLifecyclePoliciesAsync(DescribeLifecyclePoliciesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLifecyclePoliciesWithOptionsAsync(request, runtime);
        }

        public DescribeDirQuotasResponse DescribeDirQuotasWithOptions(DescribeDirQuotasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDirQuotasResponse>(DoRequest("DescribeDirQuotas", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeDirQuotasResponse> DescribeDirQuotasWithOptionsAsync(DescribeDirQuotasRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeDirQuotasResponse>(await DoRequestAsync("DescribeDirQuotas", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeDirQuotasResponse DescribeDirQuotas(DescribeDirQuotasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeDirQuotasWithOptions(request, runtime);
        }

        public async Task<DescribeDirQuotasResponse> DescribeDirQuotasAsync(DescribeDirQuotasRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeDirQuotasWithOptionsAsync(request, runtime);
        }

        public SetDirQuotaResponse SetDirQuotaWithOptions(SetDirQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDirQuotaResponse>(DoRequest("SetDirQuota", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDirQuotaResponse> SetDirQuotaWithOptionsAsync(SetDirQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDirQuotaResponse>(await DoRequestAsync("SetDirQuota", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public SetDirQuotaResponse SetDirQuota(SetDirQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDirQuotaWithOptions(request, runtime);
        }

        public async Task<SetDirQuotaResponse> SetDirQuotaAsync(SetDirQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDirQuotaWithOptionsAsync(request, runtime);
        }

        public CancelDirQuotaResponse CancelDirQuotaWithOptions(CancelDirQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelDirQuotaResponse>(DoRequest("CancelDirQuota", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelDirQuotaResponse> CancelDirQuotaWithOptionsAsync(CancelDirQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelDirQuotaResponse>(await DoRequestAsync("CancelDirQuota", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CancelDirQuotaResponse CancelDirQuota(CancelDirQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelDirQuotaWithOptions(request, runtime);
        }

        public async Task<CancelDirQuotaResponse> CancelDirQuotaAsync(CancelDirQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelDirQuotaWithOptionsAsync(request, runtime);
        }

        public DescribeStoragePackagesResponse DescribeStoragePackagesWithOptions(DescribeStoragePackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStoragePackagesResponse>(DoRequest("DescribeStoragePackages", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeStoragePackagesResponse> DescribeStoragePackagesWithOptionsAsync(DescribeStoragePackagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeStoragePackagesResponse>(await DoRequestAsync("DescribeStoragePackages", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeStoragePackagesResponse DescribeStoragePackages(DescribeStoragePackagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeStoragePackagesWithOptions(request, runtime);
        }

        public async Task<DescribeStoragePackagesResponse> DescribeStoragePackagesAsync(DescribeStoragePackagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeStoragePackagesWithOptionsAsync(request, runtime);
        }

        public DescribeFileSystemStatisticsResponse DescribeFileSystemStatisticsWithOptions(DescribeFileSystemStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFileSystemStatisticsResponse>(DoRequest("DescribeFileSystemStatistics", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeFileSystemStatisticsResponse> DescribeFileSystemStatisticsWithOptionsAsync(DescribeFileSystemStatisticsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFileSystemStatisticsResponse>(await DoRequestAsync("DescribeFileSystemStatistics", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeFileSystemStatisticsResponse DescribeFileSystemStatistics(DescribeFileSystemStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeFileSystemStatisticsWithOptions(request, runtime);
        }

        public async Task<DescribeFileSystemStatisticsResponse> DescribeFileSystemStatisticsAsync(DescribeFileSystemStatisticsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeFileSystemStatisticsWithOptionsAsync(request, runtime);
        }

        public DescribeLogAnalysisResponse DescribeLogAnalysisWithOptions(DescribeLogAnalysisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLogAnalysisResponse>(DoRequest("DescribeLogAnalysis", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLogAnalysisResponse> DescribeLogAnalysisWithOptionsAsync(DescribeLogAnalysisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLogAnalysisResponse>(await DoRequestAsync("DescribeLogAnalysis", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLogAnalysisResponse DescribeLogAnalysis(DescribeLogAnalysisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLogAnalysisWithOptions(request, runtime);
        }

        public async Task<DescribeLogAnalysisResponse> DescribeLogAnalysisAsync(DescribeLogAnalysisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLogAnalysisWithOptionsAsync(request, runtime);
        }

        public DescribeMountedClientsResponse DescribeMountedClientsWithOptions(DescribeMountedClientsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMountedClientsResponse>(DoRequest("DescribeMountedClients", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMountedClientsResponse> DescribeMountedClientsWithOptionsAsync(DescribeMountedClientsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMountedClientsResponse>(await DoRequestAsync("DescribeMountedClients", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMountedClientsResponse DescribeMountedClients(DescribeMountedClientsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMountedClientsWithOptions(request, runtime);
        }

        public async Task<DescribeMountedClientsResponse> DescribeMountedClientsAsync(DescribeMountedClientsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMountedClientsWithOptionsAsync(request, runtime);
        }

        public DescribeAutoSnapshotTasksResponse DescribeAutoSnapshotTasksWithOptions(DescribeAutoSnapshotTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoSnapshotTasksResponse>(DoRequest("DescribeAutoSnapshotTasks", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAutoSnapshotTasksResponse> DescribeAutoSnapshotTasksWithOptionsAsync(DescribeAutoSnapshotTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoSnapshotTasksResponse>(await DoRequestAsync("DescribeAutoSnapshotTasks", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAutoSnapshotTasksResponse DescribeAutoSnapshotTasks(DescribeAutoSnapshotTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAutoSnapshotTasksWithOptions(request, runtime);
        }

        public async Task<DescribeAutoSnapshotTasksResponse> DescribeAutoSnapshotTasksAsync(DescribeAutoSnapshotTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAutoSnapshotTasksWithOptionsAsync(request, runtime);
        }

        public RemoveClientFromBlackListResponse RemoveClientFromBlackListWithOptions(RemoveClientFromBlackListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveClientFromBlackListResponse>(DoRequest("RemoveClientFromBlackList", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveClientFromBlackListResponse> RemoveClientFromBlackListWithOptionsAsync(RemoveClientFromBlackListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveClientFromBlackListResponse>(await DoRequestAsync("RemoveClientFromBlackList", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public RemoveClientFromBlackListResponse RemoveClientFromBlackList(RemoveClientFromBlackListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveClientFromBlackListWithOptions(request, runtime);
        }

        public async Task<RemoveClientFromBlackListResponse> RemoveClientFromBlackListAsync(RemoveClientFromBlackListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveClientFromBlackListWithOptionsAsync(request, runtime);
        }

        public DescribeBlackListClientsResponse DescribeBlackListClientsWithOptions(DescribeBlackListClientsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBlackListClientsResponse>(DoRequest("DescribeBlackListClients", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeBlackListClientsResponse> DescribeBlackListClientsWithOptionsAsync(DescribeBlackListClientsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeBlackListClientsResponse>(await DoRequestAsync("DescribeBlackListClients", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeBlackListClientsResponse DescribeBlackListClients(DescribeBlackListClientsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeBlackListClientsWithOptions(request, runtime);
        }

        public async Task<DescribeBlackListClientsResponse> DescribeBlackListClientsAsync(DescribeBlackListClientsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeBlackListClientsWithOptionsAsync(request, runtime);
        }

        public AddClientToBlackListResponse AddClientToBlackListWithOptions(AddClientToBlackListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddClientToBlackListResponse>(DoRequest("AddClientToBlackList", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddClientToBlackListResponse> AddClientToBlackListWithOptionsAsync(AddClientToBlackListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddClientToBlackListResponse>(await DoRequestAsync("AddClientToBlackList", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public AddClientToBlackListResponse AddClientToBlackList(AddClientToBlackListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddClientToBlackListWithOptions(request, runtime);
        }

        public async Task<AddClientToBlackListResponse> AddClientToBlackListAsync(AddClientToBlackListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddClientToBlackListWithOptionsAsync(request, runtime);
        }

        public DescribeLDAPConfigResponse DescribeLDAPConfigWithOptions(DescribeLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLDAPConfigResponse>(DoRequest("DescribeLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeLDAPConfigResponse> DescribeLDAPConfigWithOptionsAsync(DescribeLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeLDAPConfigResponse>(await DoRequestAsync("DescribeLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeLDAPConfigResponse DescribeLDAPConfig(DescribeLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeLDAPConfigWithOptions(request, runtime);
        }

        public async Task<DescribeLDAPConfigResponse> DescribeLDAPConfigAsync(DescribeLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeLDAPConfigWithOptionsAsync(request, runtime);
        }

        public ModifyLDAPConfigResponse ModifyLDAPConfigWithOptions(ModifyLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLDAPConfigResponse>(DoRequest("ModifyLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyLDAPConfigResponse> ModifyLDAPConfigWithOptionsAsync(ModifyLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyLDAPConfigResponse>(await DoRequestAsync("ModifyLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyLDAPConfigResponse ModifyLDAPConfig(ModifyLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyLDAPConfigWithOptions(request, runtime);
        }

        public async Task<ModifyLDAPConfigResponse> ModifyLDAPConfigAsync(ModifyLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyLDAPConfigWithOptionsAsync(request, runtime);
        }

        public CreateLDAPConfigResponse CreateLDAPConfigWithOptions(CreateLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLDAPConfigResponse>(DoRequest("CreateLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateLDAPConfigResponse> CreateLDAPConfigWithOptionsAsync(CreateLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateLDAPConfigResponse>(await DoRequestAsync("CreateLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateLDAPConfigResponse CreateLDAPConfig(CreateLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateLDAPConfigWithOptions(request, runtime);
        }

        public async Task<CreateLDAPConfigResponse> CreateLDAPConfigAsync(CreateLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateLDAPConfigWithOptionsAsync(request, runtime);
        }

        public DeleteLDAPConfigResponse DeleteLDAPConfigWithOptions(DeleteLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLDAPConfigResponse>(DoRequest("DeleteLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteLDAPConfigResponse> DeleteLDAPConfigWithOptionsAsync(DeleteLDAPConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteLDAPConfigResponse>(await DoRequestAsync("DeleteLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteLDAPConfigResponse DeleteLDAPConfig(DeleteLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteLDAPConfigWithOptions(request, runtime);
        }

        public async Task<DeleteLDAPConfigResponse> DeleteLDAPConfigAsync(DeleteLDAPConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteLDAPConfigWithOptionsAsync(request, runtime);
        }

        public DescribeTagsResponse DescribeTagsWithOptions(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(DoRequest("DescribeTags", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeTagsResponse> DescribeTagsWithOptionsAsync(DescribeTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTagsResponse>(await DoRequestAsync("DescribeTags", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
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

        public RemoveTagsResponse RemoveTagsWithOptions(RemoveTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsResponse>(DoRequest("RemoveTags", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RemoveTagsResponse> RemoveTagsWithOptionsAsync(RemoveTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveTagsResponse>(await DoRequestAsync("RemoveTags", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
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
            return TeaModel.ToObject<AddTagsResponse>(DoRequest("AddTags", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddTagsResponse> AddTagsWithOptionsAsync(AddTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTagsResponse>(await DoRequestAsync("AddTags", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
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

        public ResetFileSystemResponse ResetFileSystemWithOptions(ResetFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetFileSystemResponse>(DoRequest("ResetFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResetFileSystemResponse> ResetFileSystemWithOptionsAsync(ResetFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResetFileSystemResponse>(await DoRequestAsync("ResetFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ResetFileSystemResponse ResetFileSystem(ResetFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResetFileSystemWithOptions(request, runtime);
        }

        public async Task<ResetFileSystemResponse> ResetFileSystemAsync(ResetFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResetFileSystemWithOptionsAsync(request, runtime);
        }

        public CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyWithOptions(CreateAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAutoSnapshotPolicyResponse>(DoRequest("CreateAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAutoSnapshotPolicyResponse> CreateAutoSnapshotPolicyWithOptionsAsync(CreateAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAutoSnapshotPolicyResponse>(await DoRequestAsync("CreateAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicy(CreateAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<CreateAutoSnapshotPolicyResponse> CreateAutoSnapshotPolicyAsync(CreateAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public DescribeAutoSnapshotPoliciesResponse DescribeAutoSnapshotPoliciesWithOptions(DescribeAutoSnapshotPoliciesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoSnapshotPoliciesResponse>(DoRequest("DescribeAutoSnapshotPolicies", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAutoSnapshotPoliciesResponse> DescribeAutoSnapshotPoliciesWithOptionsAsync(DescribeAutoSnapshotPoliciesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAutoSnapshotPoliciesResponse>(await DoRequestAsync("DescribeAutoSnapshotPolicies", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAutoSnapshotPoliciesResponse DescribeAutoSnapshotPolicies(DescribeAutoSnapshotPoliciesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAutoSnapshotPoliciesWithOptions(request, runtime);
        }

        public async Task<DescribeAutoSnapshotPoliciesResponse> DescribeAutoSnapshotPoliciesAsync(DescribeAutoSnapshotPoliciesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAutoSnapshotPoliciesWithOptionsAsync(request, runtime);
        }

        public CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyWithOptions(CancelAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelAutoSnapshotPolicyResponse>(DoRequest("CancelAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelAutoSnapshotPolicyResponse> CancelAutoSnapshotPolicyWithOptionsAsync(CancelAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelAutoSnapshotPolicyResponse>(await DoRequestAsync("CancelAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicy(CancelAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<CancelAutoSnapshotPolicyResponse> CancelAutoSnapshotPolicyAsync(CancelAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyWithOptions(ApplyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyAutoSnapshotPolicyResponse>(DoRequest("ApplyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ApplyAutoSnapshotPolicyResponse> ApplyAutoSnapshotPolicyWithOptionsAsync(ApplyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyAutoSnapshotPolicyResponse>(await DoRequestAsync("ApplyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicy(ApplyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ApplyAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<ApplyAutoSnapshotPolicyResponse> ApplyAutoSnapshotPolicyAsync(ApplyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ApplyAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyWithOptions(ModifyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoSnapshotPolicyResponse>(DoRequest("ModifyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAutoSnapshotPolicyResponse> ModifyAutoSnapshotPolicyWithOptionsAsync(ModifyAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAutoSnapshotPolicyResponse>(await DoRequestAsync("ModifyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicy(ModifyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<ModifyAutoSnapshotPolicyResponse> ModifyAutoSnapshotPolicyAsync(ModifyAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyWithOptions(DeleteAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAutoSnapshotPolicyResponse>(DoRequest("DeleteAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAutoSnapshotPolicyResponse> DeleteAutoSnapshotPolicyWithOptionsAsync(DeleteAutoSnapshotPolicyRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAutoSnapshotPolicyResponse>(await DoRequestAsync("DeleteAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicy(DeleteAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAutoSnapshotPolicyWithOptions(request, runtime);
        }

        public async Task<DeleteAutoSnapshotPolicyResponse> DeleteAutoSnapshotPolicyAsync(DeleteAutoSnapshotPolicyRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAutoSnapshotPolicyWithOptionsAsync(request, runtime);
        }

        public DeleteSnapshotResponse DeleteSnapshotWithOptions(DeleteSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSnapshotResponse>(DoRequest("DeleteSnapshot", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteSnapshotResponse> DeleteSnapshotWithOptionsAsync(DeleteSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSnapshotResponse>(await DoRequestAsync("DeleteSnapshot", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteSnapshotResponse DeleteSnapshot(DeleteSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteSnapshotWithOptions(request, runtime);
        }

        public async Task<DeleteSnapshotResponse> DeleteSnapshotAsync(DeleteSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteSnapshotWithOptionsAsync(request, runtime);
        }

        public CreateSnapshotResponse CreateSnapshotWithOptions(CreateSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSnapshotResponse>(DoRequest("CreateSnapshot", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateSnapshotResponse> CreateSnapshotWithOptionsAsync(CreateSnapshotRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateSnapshotResponse>(await DoRequestAsync("CreateSnapshot", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateSnapshotResponse CreateSnapshot(CreateSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateSnapshotWithOptions(request, runtime);
        }

        public async Task<CreateSnapshotResponse> CreateSnapshotAsync(CreateSnapshotRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateSnapshotWithOptionsAsync(request, runtime);
        }

        public DescribeSnapshotsResponse DescribeSnapshotsWithOptions(DescribeSnapshotsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotsResponse>(DoRequest("DescribeSnapshots", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeSnapshotsResponse> DescribeSnapshotsWithOptionsAsync(DescribeSnapshotsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeSnapshotsResponse>(await DoRequestAsync("DescribeSnapshots", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeSnapshotsResponse DescribeSnapshots(DescribeSnapshotsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeSnapshotsWithOptions(request, runtime);
        }

        public async Task<DescribeSnapshotsResponse> DescribeSnapshotsAsync(DescribeSnapshotsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeSnapshotsWithOptionsAsync(request, runtime);
        }

        public DescribeZonesResponse DescribeZonesWithOptions(DescribeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeZonesResponse>(DoRequest("DescribeZones", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeZonesResponse> DescribeZonesWithOptionsAsync(DescribeZonesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeZonesResponse>(await DoRequestAsync("DescribeZones", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeZonesResponse DescribeZones(DescribeZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeZonesWithOptions(request, runtime);
        }

        public async Task<DescribeZonesResponse> DescribeZonesAsync(DescribeZonesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeZonesWithOptionsAsync(request, runtime);
        }

        public CreateAccessGroupResponse CreateAccessGroupWithOptions(CreateAccessGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccessGroupResponse>(DoRequest("CreateAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAccessGroupResponse> CreateAccessGroupWithOptionsAsync(CreateAccessGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccessGroupResponse>(await DoRequestAsync("CreateAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateAccessGroupResponse CreateAccessGroup(CreateAccessGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAccessGroupWithOptions(request, runtime);
        }

        public async Task<CreateAccessGroupResponse> CreateAccessGroupAsync(CreateAccessGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAccessGroupWithOptionsAsync(request, runtime);
        }

        public CreateMountTargetResponse CreateMountTargetWithOptions(CreateMountTargetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMountTargetResponse>(DoRequest("CreateMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMountTargetResponse> CreateMountTargetWithOptionsAsync(CreateMountTargetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMountTargetResponse>(await DoRequestAsync("CreateMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateMountTargetResponse CreateMountTarget(CreateMountTargetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMountTargetWithOptions(request, runtime);
        }

        public async Task<CreateMountTargetResponse> CreateMountTargetAsync(CreateMountTargetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMountTargetWithOptionsAsync(request, runtime);
        }

        public CreateFileSystemResponse CreateFileSystemWithOptions(CreateFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFileSystemResponse>(DoRequest("CreateFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateFileSystemResponse> CreateFileSystemWithOptionsAsync(CreateFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFileSystemResponse>(await DoRequestAsync("CreateFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateFileSystemResponse CreateFileSystem(CreateFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateFileSystemWithOptions(request, runtime);
        }

        public async Task<CreateFileSystemResponse> CreateFileSystemAsync(CreateFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateFileSystemWithOptionsAsync(request, runtime);
        }

        public CreateAccessRuleResponse CreateAccessRuleWithOptions(CreateAccessRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccessRuleResponse>(DoRequest("CreateAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAccessRuleResponse> CreateAccessRuleWithOptionsAsync(CreateAccessRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAccessRuleResponse>(await DoRequestAsync("CreateAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public CreateAccessRuleResponse CreateAccessRule(CreateAccessRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAccessRuleWithOptions(request, runtime);
        }

        public async Task<CreateAccessRuleResponse> CreateAccessRuleAsync(CreateAccessRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAccessRuleWithOptionsAsync(request, runtime);
        }

        public DescribeAccessRulesResponse DescribeAccessRulesWithOptions(DescribeAccessRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessRulesResponse>(DoRequest("DescribeAccessRules", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAccessRulesResponse> DescribeAccessRulesWithOptionsAsync(DescribeAccessRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessRulesResponse>(await DoRequestAsync("DescribeAccessRules", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAccessRulesResponse DescribeAccessRules(DescribeAccessRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAccessRulesWithOptions(request, runtime);
        }

        public async Task<DescribeAccessRulesResponse> DescribeAccessRulesAsync(DescribeAccessRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAccessRulesWithOptionsAsync(request, runtime);
        }

        public DescribeAccessGroupsResponse DescribeAccessGroupsWithOptions(DescribeAccessGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessGroupsResponse>(DoRequest("DescribeAccessGroups", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeAccessGroupsResponse> DescribeAccessGroupsWithOptionsAsync(DescribeAccessGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAccessGroupsResponse>(await DoRequestAsync("DescribeAccessGroups", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeAccessGroupsResponse DescribeAccessGroups(DescribeAccessGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAccessGroupsWithOptions(request, runtime);
        }

        public async Task<DescribeAccessGroupsResponse> DescribeAccessGroupsAsync(DescribeAccessGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAccessGroupsWithOptionsAsync(request, runtime);
        }

        public DeleteMountTargetResponse DeleteMountTargetWithOptions(DeleteMountTargetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMountTargetResponse>(DoRequest("DeleteMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMountTargetResponse> DeleteMountTargetWithOptionsAsync(DeleteMountTargetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMountTargetResponse>(await DoRequestAsync("DeleteMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMountTargetResponse DeleteMountTarget(DeleteMountTargetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMountTargetWithOptions(request, runtime);
        }

        public async Task<DeleteMountTargetResponse> DeleteMountTargetAsync(DeleteMountTargetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMountTargetWithOptionsAsync(request, runtime);
        }

        public DeleteFileSystemResponse DeleteFileSystemWithOptions(DeleteFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFileSystemResponse>(DoRequest("DeleteFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteFileSystemResponse> DeleteFileSystemWithOptionsAsync(DeleteFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFileSystemResponse>(await DoRequestAsync("DeleteFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteFileSystemResponse DeleteFileSystem(DeleteFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteFileSystemWithOptions(request, runtime);
        }

        public async Task<DeleteFileSystemResponse> DeleteFileSystemAsync(DeleteFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteFileSystemWithOptionsAsync(request, runtime);
        }

        public DeleteAccessRuleResponse DeleteAccessRuleWithOptions(DeleteAccessRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccessRuleResponse>(DoRequest("DeleteAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAccessRuleResponse> DeleteAccessRuleWithOptionsAsync(DeleteAccessRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccessRuleResponse>(await DoRequestAsync("DeleteAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAccessRuleResponse DeleteAccessRule(DeleteAccessRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAccessRuleWithOptions(request, runtime);
        }

        public async Task<DeleteAccessRuleResponse> DeleteAccessRuleAsync(DeleteAccessRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAccessRuleWithOptionsAsync(request, runtime);
        }

        public DeleteAccessGroupResponse DeleteAccessGroupWithOptions(DeleteAccessGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccessGroupResponse>(DoRequest("DeleteAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAccessGroupResponse> DeleteAccessGroupWithOptionsAsync(DeleteAccessGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAccessGroupResponse>(await DoRequestAsync("DeleteAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAccessGroupResponse DeleteAccessGroup(DeleteAccessGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAccessGroupWithOptions(request, runtime);
        }

        public async Task<DeleteAccessGroupResponse> DeleteAccessGroupAsync(DeleteAccessGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAccessGroupWithOptionsAsync(request, runtime);
        }

        public ModifyAccessRuleResponse ModifyAccessRuleWithOptions(ModifyAccessRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccessRuleResponse>(DoRequest("ModifyAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAccessRuleResponse> ModifyAccessRuleWithOptionsAsync(ModifyAccessRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccessRuleResponse>(await DoRequestAsync("ModifyAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAccessRuleResponse ModifyAccessRule(ModifyAccessRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAccessRuleWithOptions(request, runtime);
        }

        public async Task<ModifyAccessRuleResponse> ModifyAccessRuleAsync(ModifyAccessRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAccessRuleWithOptionsAsync(request, runtime);
        }

        public ModifyAccessGroupResponse ModifyAccessGroupWithOptions(ModifyAccessGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccessGroupResponse>(DoRequest("ModifyAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyAccessGroupResponse> ModifyAccessGroupWithOptionsAsync(ModifyAccessGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyAccessGroupResponse>(await DoRequestAsync("ModifyAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyAccessGroupResponse ModifyAccessGroup(ModifyAccessGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyAccessGroupWithOptions(request, runtime);
        }

        public async Task<ModifyAccessGroupResponse> ModifyAccessGroupAsync(ModifyAccessGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyAccessGroupWithOptionsAsync(request, runtime);
        }

        public DescribeRegionsResponse DescribeRegionsWithOptions(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(DoRequest("DescribeRegions", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeRegionsResponse> DescribeRegionsWithOptionsAsync(DescribeRegionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeRegionsResponse>(await DoRequestAsync("DescribeRegions", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
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

        public DescribeMountTargetsResponse DescribeMountTargetsWithOptions(DescribeMountTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMountTargetsResponse>(DoRequest("DescribeMountTargets", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeMountTargetsResponse> DescribeMountTargetsWithOptionsAsync(DescribeMountTargetsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeMountTargetsResponse>(await DoRequestAsync("DescribeMountTargets", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeMountTargetsResponse DescribeMountTargets(DescribeMountTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeMountTargetsWithOptions(request, runtime);
        }

        public async Task<DescribeMountTargetsResponse> DescribeMountTargetsAsync(DescribeMountTargetsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeMountTargetsWithOptionsAsync(request, runtime);
        }

        public DescribeFileSystemsResponse DescribeFileSystemsWithOptions(DescribeFileSystemsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFileSystemsResponse>(DoRequest("DescribeFileSystems", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeFileSystemsResponse> DescribeFileSystemsWithOptionsAsync(DescribeFileSystemsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeFileSystemsResponse>(await DoRequestAsync("DescribeFileSystems", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public DescribeFileSystemsResponse DescribeFileSystems(DescribeFileSystemsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeFileSystemsWithOptions(request, runtime);
        }

        public async Task<DescribeFileSystemsResponse> DescribeFileSystemsAsync(DescribeFileSystemsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeFileSystemsWithOptionsAsync(request, runtime);
        }

        public ModifyMountTargetResponse ModifyMountTargetWithOptions(ModifyMountTargetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMountTargetResponse>(DoRequest("ModifyMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyMountTargetResponse> ModifyMountTargetWithOptionsAsync(ModifyMountTargetRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyMountTargetResponse>(await DoRequestAsync("ModifyMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyMountTargetResponse ModifyMountTarget(ModifyMountTargetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyMountTargetWithOptions(request, runtime);
        }

        public async Task<ModifyMountTargetResponse> ModifyMountTargetAsync(ModifyMountTargetRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyMountTargetWithOptionsAsync(request, runtime);
        }

        public ModifyFileSystemResponse ModifyFileSystemWithOptions(ModifyFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyFileSystemResponse>(DoRequest("ModifyFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyFileSystemResponse> ModifyFileSystemWithOptionsAsync(ModifyFileSystemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyFileSystemResponse>(await DoRequestAsync("ModifyFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, request.ToMap(), runtime));
        }

        public ModifyFileSystemResponse ModifyFileSystem(ModifyFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyFileSystemWithOptions(request, runtime);
        }

        public async Task<ModifyFileSystemResponse> ModifyFileSystemAsync(ModifyFileSystemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyFileSystemWithOptionsAsync(request, runtime);
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
