// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.CS20151215.Models;

namespace AlibabaCloud.SDK.CS20151215
{
    public class Client : AlibabaCloud.ROAClient.Client
    {

        public Client(AlibabaCloud.ROAClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"ap-northeast-2-pop", "cs.aliyuncs.com"},
                {"cn-beijing-finance-1", "cs.aliyuncs.com"},
                {"cn-beijing-finance-pop", "cs.aliyuncs.com"},
                {"cn-beijing-gov-1", "cs.aliyuncs.com"},
                {"cn-beijing-nu16-b01", "cs.aliyuncs.com"},
                {"cn-edge-1", "cs.aliyuncs.com"},
                {"cn-fujian", "cs.aliyuncs.com"},
                {"cn-haidian-cm12-c01", "cs.aliyuncs.com"},
                {"cn-hangzhou-bj-b01", "cs.aliyuncs.com"},
                {"cn-hangzhou-finance", "cs.aliyuncs.com"},
                {"cn-hangzhou-internal-prod-1", "cs.aliyuncs.com"},
                {"cn-hangzhou-internal-test-1", "cs.aliyuncs.com"},
                {"cn-hangzhou-internal-test-2", "cs.aliyuncs.com"},
                {"cn-hangzhou-internal-test-3", "cs.aliyuncs.com"},
                {"cn-hangzhou-test-306", "cs.aliyuncs.com"},
                {"cn-hongkong-finance-pop", "cs.aliyuncs.com"},
                {"cn-huhehaote-nebula-1", "cs.aliyuncs.com"},
                {"cn-qingdao-nebula", "cs.aliyuncs.com"},
                {"cn-shanghai-et15-b01", "cs.aliyuncs.com"},
                {"cn-shanghai-et2-b01", "cs.aliyuncs.com"},
                {"cn-shanghai-finance-1", "cs.aliyuncs.com"},
                {"cn-shanghai-inner", "cs.aliyuncs.com"},
                {"cn-shanghai-internal-test-1", "cs.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "cs.aliyuncs.com"},
                {"cn-shenzhen-inner", "cs.aliyuncs.com"},
                {"cn-shenzhen-st4-d01", "cs.aliyuncs.com"},
                {"cn-shenzhen-su18-b01", "cs.aliyuncs.com"},
                {"cn-wuhan", "cs.aliyuncs.com"},
                {"cn-wulanchabu", "cs.aliyuncs.com"},
                {"cn-yushanfang", "cs.aliyuncs.com"},
                {"cn-zhangbei-na61-b01", "cs.aliyuncs.com"},
                {"cn-zhangjiakou-na62-a01", "cs.aliyuncs.com"},
                {"cn-zhengzhou-nebula-1", "cs.aliyuncs.com"},
                {"eu-west-1-oxs", "cs.aliyuncs.com"},
                {"rus-west-1-pop", "cs.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpointHost = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpointHost);
        }


        public ResumeComponentUpgradeResponse ResumeComponentUpgradeWithOptions(string clusterid, string componentid, ResumeComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.Headers, null, runtime));
        }

        public async Task<ResumeComponentUpgradeResponse> ResumeComponentUpgradeWithOptionsAsync(string clusterid, string componentid, ResumeComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.Headers, null, runtime));
        }

        public ResumeComponentUpgradeResponse ResumeComponentUpgrade(string clusterid, string componentid, ResumeComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResumeComponentUpgradeWithOptions(clusterid, componentid, request, runtime);
        }

        public async Task<ResumeComponentUpgradeResponse> ResumeComponentUpgradeAsync(string clusterid, string componentid, ResumeComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResumeComponentUpgradeWithOptionsAsync(clusterid, componentid, request, runtime);
        }

        public PauseComponentUpgradeResponse PauseComponentUpgradeWithOptions(string clusterid, string componentid, PauseComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.Headers, null, runtime));
        }

        public async Task<PauseComponentUpgradeResponse> PauseComponentUpgradeWithOptionsAsync(string clusterid, string componentid, PauseComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.Headers, null, runtime));
        }

        public PauseComponentUpgradeResponse PauseComponentUpgrade(string clusterid, string componentid, PauseComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PauseComponentUpgradeWithOptions(clusterid, componentid, request, runtime);
        }

        public async Task<PauseComponentUpgradeResponse> PauseComponentUpgradeAsync(string clusterid, string componentid, PauseComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PauseComponentUpgradeWithOptionsAsync(clusterid, componentid, request, runtime);
        }

        public CancelComponentUpgradeResponse CancelComponentUpgradeWithOptions(string clusterid, string componentid, CancelComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.Headers, null, runtime));
        }

        public async Task<CancelComponentUpgradeResponse> CancelComponentUpgradeWithOptionsAsync(string clusterid, string componentid, CancelComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.Headers, null, runtime));
        }

        public CancelComponentUpgradeResponse CancelComponentUpgrade(string clusterid, string componentid, CancelComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelComponentUpgradeWithOptions(clusterid, componentid, request, runtime);
        }

        public async Task<CancelComponentUpgradeResponse> CancelComponentUpgradeAsync(string clusterid, string componentid, CancelComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelComponentUpgradeWithOptionsAsync(clusterid, componentid, request, runtime);
        }

        public CancelWorkflowResponse CancelWorkflowWithOptions(string workflowName, CancelWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<CancelWorkflowResponse> CancelWorkflowWithOptionsAsync(string workflowName, CancelWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public CancelWorkflowResponse CancelWorkflow(string workflowName, CancelWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelWorkflowWithOptions(workflowName, request, runtime);
        }

        public async Task<CancelWorkflowResponse> CancelWorkflowAsync(string workflowName, CancelWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelWorkflowWithOptionsAsync(workflowName, request, runtime);
        }

        public DescirbeWorkflowResponse DescirbeWorkflowWithOptions(string workflowName, DescirbeWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescirbeWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<DescirbeWorkflowResponse> DescirbeWorkflowWithOptionsAsync(string workflowName, DescirbeWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescirbeWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public DescirbeWorkflowResponse DescirbeWorkflow(string workflowName, DescirbeWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescirbeWorkflowWithOptions(workflowName, request, runtime);
        }

        public async Task<DescirbeWorkflowResponse> DescirbeWorkflowAsync(string workflowName, DescirbeWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescirbeWorkflowWithOptionsAsync(workflowName, request, runtime);
        }

        public RemoveWorkflowResponse RemoveWorkflowWithOptions(string workflowName, RemoveWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<RemoveWorkflowResponse> RemoveWorkflowWithOptionsAsync(string workflowName, RemoveWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public RemoveWorkflowResponse RemoveWorkflow(string workflowName, RemoveWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveWorkflowWithOptions(workflowName, request, runtime);
        }

        public async Task<RemoveWorkflowResponse> RemoveWorkflowAsync(string workflowName, RemoveWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveWorkflowWithOptionsAsync(workflowName, request, runtime);
        }

        public DescribeWorkflowsResponse DescribeWorkflowsWithOptions(DescribeWorkflowsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeWorkflowsResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.Headers, null, runtime));
        }

        public async Task<DescribeWorkflowsResponse> DescribeWorkflowsWithOptionsAsync(DescribeWorkflowsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeWorkflowsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.Headers, null, runtime));
        }

        public DescribeWorkflowsResponse DescribeWorkflows(DescribeWorkflowsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeWorkflowsWithOptions(request, runtime);
        }

        public async Task<DescribeWorkflowsResponse> DescribeWorkflowsAsync(DescribeWorkflowsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeWorkflowsWithOptionsAsync(request, runtime);
        }

        public StartWorkflowResponse StartWorkflowWithOptions(StartWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.Headers, null, runtime));
        }

        public async Task<StartWorkflowResponse> StartWorkflowWithOptionsAsync(StartWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.Headers, null, runtime));
        }

        public StartWorkflowResponse StartWorkflow(StartWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartWorkflowWithOptions(request, runtime);
        }

        public async Task<StartWorkflowResponse> StartWorkflowAsync(StartWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartWorkflowWithOptionsAsync(request, runtime);
        }

        public UnInstallClusterAddonsResponse UnInstallClusterAddonsWithOptions(string clusterId, UnInstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnInstallClusterAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<UnInstallClusterAddonsResponse> UnInstallClusterAddonsWithOptionsAsync(string clusterId, UnInstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnInstallClusterAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public UnInstallClusterAddonsResponse UnInstallClusterAddons(string clusterId, UnInstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnInstallClusterAddonsWithOptions(clusterId, request, runtime);
        }

        public async Task<UnInstallClusterAddonsResponse> UnInstallClusterAddonsAsync(string clusterId, UnInstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnInstallClusterAddonsWithOptionsAsync(clusterId, request, runtime);
        }

        public UpdateK8sClusterUserConfigExpireResponse UpdateK8sClusterUserConfigExpireWithOptions(string clusterId, UpdateK8sClusterUserConfigExpireRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateK8sClusterUserConfigExpireResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/k8s/" + clusterId + "/user_config/expire", null, request.Headers, null, runtime));
        }

        public async Task<UpdateK8sClusterUserConfigExpireResponse> UpdateK8sClusterUserConfigExpireWithOptionsAsync(string clusterId, UpdateK8sClusterUserConfigExpireRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateK8sClusterUserConfigExpireResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/k8s/" + clusterId + "/user_config/expire", null, request.Headers, null, runtime));
        }

        public UpdateK8sClusterUserConfigExpireResponse UpdateK8sClusterUserConfigExpire(string clusterId, UpdateK8sClusterUserConfigExpireRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateK8sClusterUserConfigExpireWithOptions(clusterId, request, runtime);
        }

        public async Task<UpdateK8sClusterUserConfigExpireResponse> UpdateK8sClusterUserConfigExpireAsync(string clusterId, UpdateK8sClusterUserConfigExpireRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateK8sClusterUserConfigExpireWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeUserQuotaResponse DescribeUserQuotaWithOptions(DescribeUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserQuotaResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/quota", null, request.Headers, null, runtime));
        }

        public async Task<DescribeUserQuotaResponse> DescribeUserQuotaWithOptionsAsync(DescribeUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserQuotaResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/quota", null, request.Headers, null, runtime));
        }

        public DescribeUserQuotaResponse DescribeUserQuota(DescribeUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeUserQuotaWithOptions(request, runtime);
        }

        public async Task<DescribeUserQuotaResponse> DescribeUserQuotaAsync(DescribeUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeUserQuotaWithOptionsAsync(request, runtime);
        }

        public DescribeClusterV2UserKubeconfigResponse DescribeClusterV2UserKubeconfigWithOptions(string clusterId, DescribeClusterV2UserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterV2UserKubeconfigResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterV2UserKubeconfigResponse> DescribeClusterV2UserKubeconfigWithOptionsAsync(string clusterId, DescribeClusterV2UserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterV2UserKubeconfigResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClusterV2UserKubeconfigResponse DescribeClusterV2UserKubeconfig(string clusterId, DescribeClusterV2UserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterV2UserKubeconfigWithOptions(clusterId, request, runtime);
        }

        public async Task<DescribeClusterV2UserKubeconfigResponse> DescribeClusterV2UserKubeconfigAsync(string clusterId, DescribeClusterV2UserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterV2UserKubeconfigWithOptionsAsync(clusterId, request, runtime);
        }

        public RemoveClusterNodesResponse RemoveClusterNodesWithOptions(string clusterId, RemoveClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveClusterNodesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/nodes/remove", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<RemoveClusterNodesResponse> RemoveClusterNodesWithOptionsAsync(string clusterId, RemoveClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveClusterNodesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/nodes/remove", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public RemoveClusterNodesResponse RemoveClusterNodes(string clusterId, RemoveClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveClusterNodesWithOptions(clusterId, request, runtime);
        }

        public async Task<RemoveClusterNodesResponse> RemoveClusterNodesAsync(string clusterId, RemoveClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveClusterNodesWithOptionsAsync(clusterId, request, runtime);
        }

        public UpgradeClusterResponse UpgradeClusterWithOptions(string clusterId, UpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<UpgradeClusterResponse> UpgradeClusterWithOptionsAsync(string clusterId, UpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public UpgradeClusterResponse UpgradeCluster(string clusterId, UpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeClusterWithOptions(clusterId, request, runtime);
        }

        public async Task<UpgradeClusterResponse> UpgradeClusterAsync(string clusterId, UpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeClusterWithOptionsAsync(clusterId, request, runtime);
        }

        public PauseClusterUpgradeResponse PauseClusterUpgradeWithOptions(string clusterId, PauseClusterUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseClusterUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/pause", null, request.Headers, null, runtime));
        }

        public async Task<PauseClusterUpgradeResponse> PauseClusterUpgradeWithOptionsAsync(string clusterId, PauseClusterUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseClusterUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/pause", null, request.Headers, null, runtime));
        }

        public PauseClusterUpgradeResponse PauseClusterUpgrade(string clusterId, PauseClusterUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PauseClusterUpgradeWithOptions(clusterId, request, runtime);
        }

        public async Task<PauseClusterUpgradeResponse> PauseClusterUpgradeAsync(string clusterId, PauseClusterUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PauseClusterUpgradeWithOptionsAsync(clusterId, request, runtime);
        }

        public ResumeUpgradeClusterResponse ResumeUpgradeClusterWithOptions(string clusterId, ResumeUpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeUpgradeClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/resume", null, request.Headers, null, runtime));
        }

        public async Task<ResumeUpgradeClusterResponse> ResumeUpgradeClusterWithOptionsAsync(string clusterId, ResumeUpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeUpgradeClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/resume", null, request.Headers, null, runtime));
        }

        public ResumeUpgradeClusterResponse ResumeUpgradeCluster(string clusterId, ResumeUpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResumeUpgradeClusterWithOptions(clusterId, request, runtime);
        }

        public async Task<ResumeUpgradeClusterResponse> ResumeUpgradeClusterAsync(string clusterId, ResumeUpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResumeUpgradeClusterWithOptionsAsync(clusterId, request, runtime);
        }

        public GetUpgradeStatusResponse GetUpgradeStatusWithOptions(string clusterId, GetUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUpgradeStatusResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/status", null, request.Headers, null, runtime));
        }

        public async Task<GetUpgradeStatusResponse> GetUpgradeStatusWithOptionsAsync(string clusterId, GetUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUpgradeStatusResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/status", null, request.Headers, null, runtime));
        }

        public GetUpgradeStatusResponse GetUpgradeStatus(string clusterId, GetUpgradeStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetUpgradeStatusWithOptions(clusterId, request, runtime);
        }

        public async Task<GetUpgradeStatusResponse> GetUpgradeStatusAsync(string clusterId, GetUpgradeStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetUpgradeStatusWithOptionsAsync(clusterId, request, runtime);
        }

        public ModifyClusterResponse ModifyClusterWithOptions(string clusterId, ModifyClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<ModifyClusterResponse> ModifyClusterWithOptionsAsync(string clusterId, ModifyClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public ModifyClusterResponse ModifyCluster(string clusterId, ModifyClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyClusterWithOptions(clusterId, request, runtime);
        }

        public async Task<ModifyClusterResponse> ModifyClusterAsync(string clusterId, ModifyClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyClusterWithOptionsAsync(clusterId, request, runtime);
        }

        public InstallClusterAddonsResponse InstallClusterAddonsWithOptions(string clusterId, InstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallClusterAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/install", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<InstallClusterAddonsResponse> InstallClusterAddonsWithOptionsAsync(string clusterId, InstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallClusterAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/install", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public InstallClusterAddonsResponse InstallClusterAddons(string clusterId, InstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return InstallClusterAddonsWithOptions(clusterId, request, runtime);
        }

        public async Task<InstallClusterAddonsResponse> InstallClusterAddonsAsync(string clusterId, InstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await InstallClusterAddonsWithOptionsAsync(clusterId, request, runtime);
        }

        public ModifyClusterTagsResponse ModifyClusterTagsWithOptions(string clusterId, ModifyClusterTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterTagsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<ModifyClusterTagsResponse> ModifyClusterTagsWithOptionsAsync(string clusterId, ModifyClusterTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterTagsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public ModifyClusterTagsResponse ModifyClusterTags(string clusterId, ModifyClusterTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyClusterTagsWithOptions(clusterId, request, runtime);
        }

        public async Task<ModifyClusterTagsResponse> ModifyClusterTagsAsync(string clusterId, ModifyClusterTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyClusterTagsWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeExternalAgentResponse DescribeExternalAgentWithOptions(string clusterId, DescribeExternalAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExternalAgentResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/external/agent/deployment", null, request.Headers, null, runtime));
        }

        public async Task<DescribeExternalAgentResponse> DescribeExternalAgentWithOptionsAsync(string clusterId, DescribeExternalAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExternalAgentResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/external/agent/deployment", null, request.Headers, null, runtime));
        }

        public DescribeExternalAgentResponse DescribeExternalAgent(string clusterId, DescribeExternalAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeExternalAgentWithOptions(clusterId, request, runtime);
        }

        public async Task<DescribeExternalAgentResponse> DescribeExternalAgentAsync(string clusterId, DescribeExternalAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeExternalAgentWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeClusterResourcesResponse DescribeClusterResourcesWithOptions(string clusterId, DescribeClusterResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterResourcesResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/resources", null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterResourcesResponse> DescribeClusterResourcesWithOptionsAsync(string clusterId, DescribeClusterResourcesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterResourcesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/resources", null, request.Headers, null, runtime));
        }

        public DescribeClusterResourcesResponse DescribeClusterResources(string clusterId, DescribeClusterResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterResourcesWithOptions(clusterId, request, runtime);
        }

        public async Task<DescribeClusterResourcesResponse> DescribeClusterResourcesAsync(string clusterId, DescribeClusterResourcesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterResourcesWithOptionsAsync(clusterId, request, runtime);
        }

        public DeleteClusterNodesResponse DeleteClusterNodesWithOptions(string clusterId, DeleteClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterNodesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<DeleteClusterNodesResponse> DeleteClusterNodesWithOptionsAsync(string clusterId, DeleteClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterNodesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public DeleteClusterNodesResponse DeleteClusterNodes(string clusterId, DeleteClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteClusterNodesWithOptions(clusterId, request, runtime);
        }

        public async Task<DeleteClusterNodesResponse> DeleteClusterNodesAsync(string clusterId, DeleteClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteClusterNodesWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeClusterUserKubeconfigResponse DescribeClusterUserKubeconfigWithOptions(string clusterId, DescribeClusterUserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterUserKubeconfigResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterUserKubeconfigResponse> DescribeClusterUserKubeconfigWithOptionsAsync(string clusterId, DescribeClusterUserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterUserKubeconfigResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClusterUserKubeconfigResponse DescribeClusterUserKubeconfig(string clusterId, DescribeClusterUserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterUserKubeconfigWithOptions(clusterId, request, runtime);
        }

        public async Task<DescribeClusterUserKubeconfigResponse> DescribeClusterUserKubeconfigAsync(string clusterId, DescribeClusterUserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterUserKubeconfigWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeClusterNodesResponse DescribeClusterNodesWithOptions(string clusterId, DescribeClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterNodesResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/nodes", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterNodesResponse> DescribeClusterNodesWithOptionsAsync(string clusterId, DescribeClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterNodesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/nodes", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClusterNodesResponse DescribeClusterNodes(string clusterId, DescribeClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterNodesWithOptions(clusterId, request, runtime);
        }

        public async Task<DescribeClusterNodesResponse> DescribeClusterNodesAsync(string clusterId, DescribeClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterNodesWithOptionsAsync(clusterId, request, runtime);
        }

        public AttachInstancesResponse AttachInstancesWithOptions(string clusterId, AttachInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstancesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<AttachInstancesResponse> AttachInstancesWithOptionsAsync(string clusterId, AttachInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstancesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public AttachInstancesResponse AttachInstances(string clusterId, AttachInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachInstancesWithOptions(clusterId, request, runtime);
        }

        public async Task<AttachInstancesResponse> AttachInstancesAsync(string clusterId, AttachInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachInstancesWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeTemplatesResponse DescribeTemplatesWithOptions(DescribeTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTemplatesResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/templates", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeTemplatesResponse> DescribeTemplatesWithOptionsAsync(DescribeTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTemplatesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/templates", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeTemplatesResponse DescribeTemplates(DescribeTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTemplatesWithOptions(request, runtime);
        }

        public async Task<DescribeTemplatesResponse> DescribeTemplatesAsync(DescribeTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTemplatesWithOptionsAsync(request, runtime);
        }

        public CreateClusterResponse CreateClusterWithOptions(CreateClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<CreateClusterResponse> CreateClusterWithOptionsAsync(CreateClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public CreateClusterResponse CreateCluster(CreateClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateClusterWithOptions(request, runtime);
        }

        public async Task<CreateClusterResponse> CreateClusterAsync(CreateClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateClusterWithOptionsAsync(request, runtime);
        }

        public ScaleClusterResponse ScaleClusterWithOptions(string clusterId, ScaleClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<ScaleClusterResponse> ScaleClusterWithOptionsAsync(string clusterId, ScaleClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public ScaleClusterResponse ScaleCluster(string clusterId, ScaleClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ScaleClusterWithOptions(clusterId, request, runtime);
        }

        public async Task<ScaleClusterResponse> ScaleClusterAsync(string clusterId, ScaleClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ScaleClusterWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeClustersResponse DescribeClustersWithOptions(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClustersResponse> DescribeClustersWithOptionsAsync(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClustersResponse DescribeClusters(DescribeClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClustersWithOptions(request, runtime);
        }

        public async Task<DescribeClustersResponse> DescribeClustersAsync(DescribeClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClustersWithOptionsAsync(request, runtime);
        }

        public DeleteClusterResponse DeleteClusterWithOptions(string clusterId, DeleteClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterResponse>(DoRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<DeleteClusterResponse> DeleteClusterWithOptionsAsync(string clusterId, DeleteClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public DeleteClusterResponse DeleteCluster(string clusterId, DeleteClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteClusterWithOptions(clusterId, request, runtime);
        }

        public async Task<DeleteClusterResponse> DeleteClusterAsync(string clusterId, DeleteClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteClusterWithOptionsAsync(clusterId, request, runtime);
        }

        public DescribeApiVersionResponse DescribeApiVersionWithOptions(DescribeApiVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeApiVersionResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/version", null, request.Headers, null, runtime));
        }

        public async Task<DescribeApiVersionResponse> DescribeApiVersionWithOptionsAsync(DescribeApiVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeApiVersionResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/version", null, request.Headers, null, runtime));
        }

        public DescribeApiVersionResponse DescribeApiVersion(DescribeApiVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeApiVersionWithOptions(request, runtime);
        }

        public async Task<DescribeApiVersionResponse> DescribeApiVersionAsync(DescribeApiVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeApiVersionWithOptionsAsync(request, runtime);
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
