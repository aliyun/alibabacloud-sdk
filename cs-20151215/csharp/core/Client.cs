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
            this._endpointRule = "";
            CheckConfig(config);
            this._endpointHost = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpointHost);
        }


        public ResumeComponentUpgradeResponse ResumeComponentUpgradeEx(string clusterid, string componentid, ResumeComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.Headers, null, runtime));
        }

        public async Task<ResumeComponentUpgradeResponse> ResumeComponentUpgradeExAsync(string clusterid, string componentid, ResumeComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.Headers, null, runtime));
        }

        public ResumeComponentUpgradeResponse ResumeComponentUpgrade(string clusterid, string componentid, ResumeComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResumeComponentUpgradeEx(clusterid, componentid, request, runtime);
        }

        public async Task<ResumeComponentUpgradeResponse> ResumeComponentUpgradeAsync(string clusterid, string componentid, ResumeComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResumeComponentUpgradeExAsync(clusterid, componentid, request, runtime);
        }

        public PauseComponentUpgradeResponse PauseComponentUpgradeEx(string clusterid, string componentid, PauseComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.Headers, null, runtime));
        }

        public async Task<PauseComponentUpgradeResponse> PauseComponentUpgradeExAsync(string clusterid, string componentid, PauseComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.Headers, null, runtime));
        }

        public PauseComponentUpgradeResponse PauseComponentUpgrade(string clusterid, string componentid, PauseComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PauseComponentUpgradeEx(clusterid, componentid, request, runtime);
        }

        public async Task<PauseComponentUpgradeResponse> PauseComponentUpgradeAsync(string clusterid, string componentid, PauseComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PauseComponentUpgradeExAsync(clusterid, componentid, request, runtime);
        }

        public CancelComponentUpgradeResponse CancelComponentUpgradeEx(string clusterid, string componentid, CancelComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.Headers, null, runtime));
        }

        public async Task<CancelComponentUpgradeResponse> CancelComponentUpgradeExAsync(string clusterid, string componentid, CancelComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.Headers, null, runtime));
        }

        public CancelComponentUpgradeResponse CancelComponentUpgrade(string clusterid, string componentid, CancelComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelComponentUpgradeEx(clusterid, componentid, request, runtime);
        }

        public async Task<CancelComponentUpgradeResponse> CancelComponentUpgradeAsync(string clusterid, string componentid, CancelComponentUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelComponentUpgradeExAsync(clusterid, componentid, request, runtime);
        }

        public CancelWorkflowResponse CancelWorkflowEx(string workflowName, CancelWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<CancelWorkflowResponse> CancelWorkflowExAsync(string workflowName, CancelWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public CancelWorkflowResponse CancelWorkflow(string workflowName, CancelWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelWorkflowEx(workflowName, request, runtime);
        }

        public async Task<CancelWorkflowResponse> CancelWorkflowAsync(string workflowName, CancelWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelWorkflowExAsync(workflowName, request, runtime);
        }

        public DescirbeWorkflowResponse DescirbeWorkflowEx(string workflowName, DescirbeWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescirbeWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<DescirbeWorkflowResponse> DescirbeWorkflowExAsync(string workflowName, DescirbeWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescirbeWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public DescirbeWorkflowResponse DescirbeWorkflow(string workflowName, DescirbeWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescirbeWorkflowEx(workflowName, request, runtime);
        }

        public async Task<DescirbeWorkflowResponse> DescirbeWorkflowAsync(string workflowName, DescirbeWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescirbeWorkflowExAsync(workflowName, request, runtime);
        }

        public RemoveWorkflowResponse RemoveWorkflowEx(string workflowName, RemoveWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<RemoveWorkflowResponse> RemoveWorkflowExAsync(string workflowName, RemoveWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public RemoveWorkflowResponse RemoveWorkflow(string workflowName, RemoveWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveWorkflowEx(workflowName, request, runtime);
        }

        public async Task<RemoveWorkflowResponse> RemoveWorkflowAsync(string workflowName, RemoveWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveWorkflowExAsync(workflowName, request, runtime);
        }

        public DescribeWorkflowsResponse DescribeWorkflowsEx(DescribeWorkflowsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeWorkflowsResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.Headers, null, runtime));
        }

        public async Task<DescribeWorkflowsResponse> DescribeWorkflowsExAsync(DescribeWorkflowsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeWorkflowsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.Headers, null, runtime));
        }

        public DescribeWorkflowsResponse DescribeWorkflows(DescribeWorkflowsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeWorkflowsEx(request, runtime);
        }

        public async Task<DescribeWorkflowsResponse> DescribeWorkflowsAsync(DescribeWorkflowsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeWorkflowsExAsync(request, runtime);
        }

        public StartWorkflowResponse StartWorkflowEx(StartWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.Headers, null, runtime));
        }

        public async Task<StartWorkflowResponse> StartWorkflowExAsync(StartWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.Headers, null, runtime));
        }

        public StartWorkflowResponse StartWorkflow(StartWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StartWorkflowEx(request, runtime);
        }

        public async Task<StartWorkflowResponse> StartWorkflowAsync(StartWorkflowRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StartWorkflowExAsync(request, runtime);
        }

        public CreateServiceMeshResponse CreateServiceMeshEx(CreateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateServiceMeshResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh", null, request.Headers, null, runtime));
        }

        public async Task<CreateServiceMeshResponse> CreateServiceMeshExAsync(CreateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateServiceMeshResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh", null, request.Headers, null, runtime));
        }

        public CreateServiceMeshResponse CreateServiceMesh(CreateServiceMeshRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateServiceMeshEx(request, runtime);
        }

        public async Task<CreateServiceMeshResponse> CreateServiceMeshAsync(CreateServiceMeshRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateServiceMeshExAsync(request, runtime);
        }

        public ServiceMeshAddClusterResponse ServiceMeshAddClusterEx(string serviceMeshId, ServiceMeshAddClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshAddClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/add/clusters", null, request.Headers, null, runtime));
        }

        public async Task<ServiceMeshAddClusterResponse> ServiceMeshAddClusterExAsync(string serviceMeshId, ServiceMeshAddClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshAddClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/add/clusters", null, request.Headers, null, runtime));
        }

        public ServiceMeshAddClusterResponse ServiceMeshAddCluster(string serviceMeshId, ServiceMeshAddClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ServiceMeshAddClusterEx(serviceMeshId, request, runtime);
        }

        public async Task<ServiceMeshAddClusterResponse> ServiceMeshAddClusterAsync(string serviceMeshId, ServiceMeshAddClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ServiceMeshAddClusterExAsync(serviceMeshId, request, runtime);
        }

        public ServiceMeshRemoveClusterResponse ServiceMeshRemoveClusterEx(string serviceMeshId, ServiceMeshRemoveClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshRemoveClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/remove/clusters", null, request.Headers, null, runtime));
        }

        public async Task<ServiceMeshRemoveClusterResponse> ServiceMeshRemoveClusterExAsync(string serviceMeshId, ServiceMeshRemoveClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshRemoveClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/remove/clusters", null, request.Headers, null, runtime));
        }

        public ServiceMeshRemoveClusterResponse ServiceMeshRemoveCluster(string serviceMeshId, ServiceMeshRemoveClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ServiceMeshRemoveClusterEx(serviceMeshId, request, runtime);
        }

        public async Task<ServiceMeshRemoveClusterResponse> ServiceMeshRemoveClusterAsync(string serviceMeshId, ServiceMeshRemoveClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ServiceMeshRemoveClusterExAsync(serviceMeshId, request, runtime);
        }

        public UpdateServiceMeshResponse UpdateServiceMeshEx(string serviceMeshId, UpdateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateServiceMeshResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId, null, request.Headers, null, runtime));
        }

        public async Task<UpdateServiceMeshResponse> UpdateServiceMeshExAsync(string serviceMeshId, UpdateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateServiceMeshResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId, null, request.Headers, null, runtime));
        }

        public UpdateServiceMeshResponse UpdateServiceMesh(string serviceMeshId, UpdateServiceMeshRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateServiceMeshEx(serviceMeshId, request, runtime);
        }

        public async Task<UpdateServiceMeshResponse> UpdateServiceMeshAsync(string serviceMeshId, UpdateServiceMeshRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateServiceMeshExAsync(serviceMeshId, request, runtime);
        }

        public ServiceMeshApiServerResponse ServiceMeshApiServerEx(string serviceMeshId, ServiceMeshApiServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshApiServerResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh/" + serviceMeshId + "/api_proxy", null, request.Headers, null, runtime));
        }

        public async Task<ServiceMeshApiServerResponse> ServiceMeshApiServerExAsync(string serviceMeshId, ServiceMeshApiServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshApiServerResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh/" + serviceMeshId + "/api_proxy", null, request.Headers, null, runtime));
        }

        public ServiceMeshApiServerResponse ServiceMeshApiServer(string serviceMeshId, ServiceMeshApiServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ServiceMeshApiServerEx(serviceMeshId, request, runtime);
        }

        public async Task<ServiceMeshApiServerResponse> ServiceMeshApiServerAsync(string serviceMeshId, ServiceMeshApiServerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ServiceMeshApiServerExAsync(serviceMeshId, request, runtime);
        }

        public UnInstallClusterAddonsResponse UnInstallClusterAddonsEx(string clusterId, UnInstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnInstallClusterAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<UnInstallClusterAddonsResponse> UnInstallClusterAddonsExAsync(string clusterId, UnInstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnInstallClusterAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public UnInstallClusterAddonsResponse UnInstallClusterAddons(string clusterId, UnInstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnInstallClusterAddonsEx(clusterId, request, runtime);
        }

        public async Task<UnInstallClusterAddonsResponse> UnInstallClusterAddonsAsync(string clusterId, UnInstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnInstallClusterAddonsExAsync(clusterId, request, runtime);
        }

        public DescribeAddonsResponse DescribeAddonsEx(DescribeAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeAddonsResponse> DescribeAddonsExAsync(DescribeAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeAddonsResponse DescribeAddons(DescribeAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeAddonsEx(request, runtime);
        }

        public async Task<DescribeAddonsResponse> DescribeAddonsAsync(DescribeAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeAddonsExAsync(request, runtime);
        }

        public CancelClusterUpgradeResponse CancelClusterUpgradeEx(string clusterId, CancelClusterUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelClusterUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/cancel", null, request.Headers, null, runtime));
        }

        public async Task<CancelClusterUpgradeResponse> CancelClusterUpgradeExAsync(string clusterId, CancelClusterUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelClusterUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/cancel", null, request.Headers, null, runtime));
        }

        public CancelClusterUpgradeResponse CancelClusterUpgrade(string clusterId, CancelClusterUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelClusterUpgradeEx(clusterId, request, runtime);
        }

        public async Task<CancelClusterUpgradeResponse> CancelClusterUpgradeAsync(string clusterId, CancelClusterUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelClusterUpgradeExAsync(clusterId, request, runtime);
        }

        public DescribeUserQuotaResponse DescribeUserQuotaEx(DescribeUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserQuotaResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/quota", null, request.Headers, null, runtime));
        }

        public async Task<DescribeUserQuotaResponse> DescribeUserQuotaExAsync(DescribeUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeUserQuotaResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/quota", null, request.Headers, null, runtime));
        }

        public DescribeUserQuotaResponse DescribeUserQuota(DescribeUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeUserQuotaEx(request, runtime);
        }

        public async Task<DescribeUserQuotaResponse> DescribeUserQuotaAsync(DescribeUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeUserQuotaExAsync(request, runtime);
        }

        public DescribeClusterV2UserKubeconfigResponse DescribeClusterV2UserKubeconfigEx(string clusterId, DescribeClusterV2UserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterV2UserKubeconfigResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterV2UserKubeconfigResponse> DescribeClusterV2UserKubeconfigExAsync(string clusterId, DescribeClusterV2UserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterV2UserKubeconfigResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClusterV2UserKubeconfigResponse DescribeClusterV2UserKubeconfig(string clusterId, DescribeClusterV2UserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterV2UserKubeconfigEx(clusterId, request, runtime);
        }

        public async Task<DescribeClusterV2UserKubeconfigResponse> DescribeClusterV2UserKubeconfigAsync(string clusterId, DescribeClusterV2UserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterV2UserKubeconfigExAsync(clusterId, request, runtime);
        }

        public RemoveClusterNodesResponse RemoveClusterNodesEx(string clusterId, RemoveClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveClusterNodesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/nodes/remove", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<RemoveClusterNodesResponse> RemoveClusterNodesExAsync(string clusterId, RemoveClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveClusterNodesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/nodes/remove", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public RemoveClusterNodesResponse RemoveClusterNodes(string clusterId, RemoveClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RemoveClusterNodesEx(clusterId, request, runtime);
        }

        public async Task<RemoveClusterNodesResponse> RemoveClusterNodesAsync(string clusterId, RemoveClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RemoveClusterNodesExAsync(clusterId, request, runtime);
        }

        public UpgradeClusterResponse UpgradeClusterEx(string clusterId, UpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<UpgradeClusterResponse> UpgradeClusterExAsync(string clusterId, UpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public UpgradeClusterResponse UpgradeCluster(string clusterId, UpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeClusterEx(clusterId, request, runtime);
        }

        public async Task<UpgradeClusterResponse> UpgradeClusterAsync(string clusterId, UpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeClusterExAsync(clusterId, request, runtime);
        }

        public PauseClusterUpgradeResponse PauseClusterUpgradeEx(string clusterId, PauseClusterUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseClusterUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/pause", null, request.Headers, null, runtime));
        }

        public async Task<PauseClusterUpgradeResponse> PauseClusterUpgradeExAsync(string clusterId, PauseClusterUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseClusterUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/pause", null, request.Headers, null, runtime));
        }

        public PauseClusterUpgradeResponse PauseClusterUpgrade(string clusterId, PauseClusterUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PauseClusterUpgradeEx(clusterId, request, runtime);
        }

        public async Task<PauseClusterUpgradeResponse> PauseClusterUpgradeAsync(string clusterId, PauseClusterUpgradeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PauseClusterUpgradeExAsync(clusterId, request, runtime);
        }

        public ResumeUpgradeClusterResponse ResumeUpgradeClusterEx(string clusterId, ResumeUpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeUpgradeClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/resume", null, request.Headers, null, runtime));
        }

        public async Task<ResumeUpgradeClusterResponse> ResumeUpgradeClusterExAsync(string clusterId, ResumeUpgradeClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeUpgradeClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/resume", null, request.Headers, null, runtime));
        }

        public ResumeUpgradeClusterResponse ResumeUpgradeCluster(string clusterId, ResumeUpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResumeUpgradeClusterEx(clusterId, request, runtime);
        }

        public async Task<ResumeUpgradeClusterResponse> ResumeUpgradeClusterAsync(string clusterId, ResumeUpgradeClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResumeUpgradeClusterExAsync(clusterId, request, runtime);
        }

        public GetUpgradeStatusResponse GetUpgradeStatusEx(string clusterId, GetUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUpgradeStatusResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/status", null, request.Headers, null, runtime));
        }

        public async Task<GetUpgradeStatusResponse> GetUpgradeStatusExAsync(string clusterId, GetUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUpgradeStatusResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/clusters/" + clusterId + "/upgrade/status", null, request.Headers, null, runtime));
        }

        public GetUpgradeStatusResponse GetUpgradeStatus(string clusterId, GetUpgradeStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetUpgradeStatusEx(clusterId, request, runtime);
        }

        public async Task<GetUpgradeStatusResponse> GetUpgradeStatusAsync(string clusterId, GetUpgradeStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetUpgradeStatusExAsync(clusterId, request, runtime);
        }

        public ModifyClusterResponse ModifyClusterEx(string clusterId, ModifyClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<ModifyClusterResponse> ModifyClusterExAsync(string clusterId, ModifyClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public ModifyClusterResponse ModifyCluster(string clusterId, ModifyClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyClusterEx(clusterId, request, runtime);
        }

        public async Task<ModifyClusterResponse> ModifyClusterAsync(string clusterId, ModifyClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyClusterExAsync(clusterId, request, runtime);
        }

        public InstallClusterAddonsResponse InstallClusterAddonsEx(string clusterId, InstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallClusterAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/install", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<InstallClusterAddonsResponse> InstallClusterAddonsExAsync(string clusterId, InstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<InstallClusterAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/install", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public InstallClusterAddonsResponse InstallClusterAddons(string clusterId, InstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return InstallClusterAddonsEx(clusterId, request, runtime);
        }

        public async Task<InstallClusterAddonsResponse> InstallClusterAddonsAsync(string clusterId, InstallClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await InstallClusterAddonsExAsync(clusterId, request, runtime);
        }

        public DeleteTriggerHookResponse DeleteTriggerHookEx(DeleteTriggerHookRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTriggerHookResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/hook/trigger", null, request.Headers, null, runtime));
        }

        public async Task<DeleteTriggerHookResponse> DeleteTriggerHookExAsync(DeleteTriggerHookRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTriggerHookResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/hook/trigger", null, request.Headers, null, runtime));
        }

        public DeleteTriggerHookResponse DeleteTriggerHook(DeleteTriggerHookRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteTriggerHookEx(request, runtime);
        }

        public async Task<DeleteTriggerHookResponse> DeleteTriggerHookAsync(DeleteTriggerHookRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteTriggerHookExAsync(request, runtime);
        }

        public ModifyClusterTagsResponse ModifyClusterTagsEx(string clusterId, ModifyClusterTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterTagsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<ModifyClusterTagsResponse> ModifyClusterTagsExAsync(string clusterId, ModifyClusterTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterTagsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public ModifyClusterTagsResponse ModifyClusterTags(string clusterId, ModifyClusterTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyClusterTagsEx(clusterId, request, runtime);
        }

        public async Task<ModifyClusterTagsResponse> ModifyClusterTagsAsync(string clusterId, ModifyClusterTagsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyClusterTagsExAsync(clusterId, request, runtime);
        }

        public DescribeExternalAgentResponse DescribeExternalAgentEx(string clusterId, DescribeExternalAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExternalAgentResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/external/agent/deployment", null, request.Headers, null, runtime));
        }

        public async Task<DescribeExternalAgentResponse> DescribeExternalAgentExAsync(string clusterId, DescribeExternalAgentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeExternalAgentResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/external/agent/deployment", null, request.Headers, null, runtime));
        }

        public DescribeExternalAgentResponse DescribeExternalAgent(string clusterId, DescribeExternalAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeExternalAgentEx(clusterId, request, runtime);
        }

        public async Task<DescribeExternalAgentResponse> DescribeExternalAgentAsync(string clusterId, DescribeExternalAgentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeExternalAgentExAsync(clusterId, request, runtime);
        }

        public DescribeClusterAttachScriptsResponse DescribeClusterAttachScriptsEx(string clusterId, DescribeClusterAttachScriptsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAttachScriptsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attachscript", null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterAttachScriptsResponse> DescribeClusterAttachScriptsExAsync(string clusterId, DescribeClusterAttachScriptsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAttachScriptsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attachscript", null, request.Headers, null, runtime));
        }

        public DescribeClusterAttachScriptsResponse DescribeClusterAttachScripts(string clusterId, DescribeClusterAttachScriptsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterAttachScriptsEx(clusterId, request, runtime);
        }

        public async Task<DescribeClusterAttachScriptsResponse> DescribeClusterAttachScriptsAsync(string clusterId, DescribeClusterAttachScriptsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterAttachScriptsExAsync(clusterId, request, runtime);
        }

        public ScaleOutClusterResponse ScaleOutClusterEx(string clusterId, ScaleOutClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleOutClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<ScaleOutClusterResponse> ScaleOutClusterExAsync(string clusterId, ScaleOutClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleOutClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public ScaleOutClusterResponse ScaleOutCluster(string clusterId, ScaleOutClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ScaleOutClusterEx(clusterId, request, runtime);
        }

        public async Task<ScaleOutClusterResponse> ScaleOutClusterAsync(string clusterId, ScaleOutClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ScaleOutClusterExAsync(clusterId, request, runtime);
        }

        public CreateTriggerHookResponse CreateTriggerHookEx(CreateTriggerHookRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTriggerHookResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/hook/trigger", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<CreateTriggerHookResponse> CreateTriggerHookExAsync(CreateTriggerHookRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTriggerHookResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/hook/trigger", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public CreateTriggerHookResponse CreateTriggerHook(CreateTriggerHookRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateTriggerHookEx(request, runtime);
        }

        public async Task<CreateTriggerHookResponse> CreateTriggerHookAsync(CreateTriggerHookRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateTriggerHookExAsync(request, runtime);
        }

        public UpgradeClusterAddonsResponse UpgradeClusterAddonsEx(string clusterId, UpgradeClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeClusterAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/upgrade", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<UpgradeClusterAddonsResponse> UpgradeClusterAddonsExAsync(string clusterId, UpgradeClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeClusterAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/upgrade", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public UpgradeClusterAddonsResponse UpgradeClusterAddons(string clusterId, UpgradeClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeClusterAddonsEx(clusterId, request, runtime);
        }

        public async Task<UpgradeClusterAddonsResponse> UpgradeClusterAddonsAsync(string clusterId, UpgradeClusterAddonsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeClusterAddonsExAsync(clusterId, request, runtime);
        }

        public DescribeClusterAddonsVersionResponse DescribeClusterAddonsVersionEx(string clusterId, DescribeClusterAddonsVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonsVersionResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/version", null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterAddonsVersionResponse> DescribeClusterAddonsVersionExAsync(string clusterId, DescribeClusterAddonsVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonsVersionResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/version", null, request.Headers, null, runtime));
        }

        public DescribeClusterAddonsVersionResponse DescribeClusterAddonsVersion(string clusterId, DescribeClusterAddonsVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterAddonsVersionEx(clusterId, request, runtime);
        }

        public async Task<DescribeClusterAddonsVersionResponse> DescribeClusterAddonsVersionAsync(string clusterId, DescribeClusterAddonsVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterAddonsVersionExAsync(clusterId, request, runtime);
        }

        public DescribeClusterAddonUpgradeStatusResponse DescribeClusterAddonUpgradeStatusEx(string clusterId, string componentId, DescribeClusterAddonUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonUpgradeStatusResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/" + componentId + "/upgradestatus", null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterAddonUpgradeStatusResponse> DescribeClusterAddonUpgradeStatusExAsync(string clusterId, string componentId, DescribeClusterAddonUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonUpgradeStatusResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/" + componentId + "/upgradestatus", null, request.Headers, null, runtime));
        }

        public DescribeClusterAddonUpgradeStatusResponse DescribeClusterAddonUpgradeStatus(string clusterId, string componentId, DescribeClusterAddonUpgradeStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterAddonUpgradeStatusEx(clusterId, componentId, request, runtime);
        }

        public async Task<DescribeClusterAddonUpgradeStatusResponse> DescribeClusterAddonUpgradeStatusAsync(string clusterId, string componentId, DescribeClusterAddonUpgradeStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterAddonUpgradeStatusExAsync(clusterId, componentId, request, runtime);
        }

        public DeleteClusterNodesResponse DeleteClusterNodesEx(string clusterId, DeleteClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterNodesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<DeleteClusterNodesResponse> DeleteClusterNodesExAsync(string clusterId, DeleteClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterNodesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public DeleteClusterNodesResponse DeleteClusterNodes(string clusterId, DeleteClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteClusterNodesEx(clusterId, request, runtime);
        }

        public async Task<DeleteClusterNodesResponse> DeleteClusterNodesAsync(string clusterId, DeleteClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteClusterNodesExAsync(clusterId, request, runtime);
        }

        public DeleteTemplateResponse DeleteTemplateEx(string templateId, DeleteTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTemplateResponse>(DoRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/templates/" + templateId, null, request.Headers, null, runtime));
        }

        public async Task<DeleteTemplateResponse> DeleteTemplateExAsync(string templateId, DeleteTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTemplateResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "DELETE", "AK", "/templates/" + templateId, null, request.Headers, null, runtime));
        }

        public DeleteTemplateResponse DeleteTemplate(string templateId, DeleteTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteTemplateEx(templateId, request, runtime);
        }

        public async Task<DeleteTemplateResponse> DeleteTemplateAsync(string templateId, DeleteTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteTemplateExAsync(templateId, request, runtime);
        }

        public DescribeClusterUserKubeconfigResponse DescribeClusterUserKubeconfigEx(string clusterId, DescribeClusterUserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterUserKubeconfigResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterUserKubeconfigResponse> DescribeClusterUserKubeconfigExAsync(string clusterId, DescribeClusterUserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterUserKubeconfigResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClusterUserKubeconfigResponse DescribeClusterUserKubeconfig(string clusterId, DescribeClusterUserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterUserKubeconfigEx(clusterId, request, runtime);
        }

        public async Task<DescribeClusterUserKubeconfigResponse> DescribeClusterUserKubeconfigAsync(string clusterId, DescribeClusterUserKubeconfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterUserKubeconfigExAsync(clusterId, request, runtime);
        }

        public DescribeClusterNodesResponse DescribeClusterNodesEx(string clusterId, DescribeClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterNodesResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/nodes", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterNodesResponse> DescribeClusterNodesExAsync(string clusterId, DescribeClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterNodesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/nodes", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClusterNodesResponse DescribeClusterNodes(string clusterId, DescribeClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterNodesEx(clusterId, request, runtime);
        }

        public async Task<DescribeClusterNodesResponse> DescribeClusterNodesAsync(string clusterId, DescribeClusterNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterNodesExAsync(clusterId, request, runtime);
        }

        public DescribeClusterLogsResponse DescribeClusterLogsEx(string clusterId, DescribeClusterLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterLogsResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/logs", null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterLogsResponse> DescribeClusterLogsExAsync(string clusterId, DescribeClusterLogsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterLogsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/logs", null, request.Headers, null, runtime));
        }

        public DescribeClusterLogsResponse DescribeClusterLogs(string clusterId, DescribeClusterLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterLogsEx(clusterId, request, runtime);
        }

        public async Task<DescribeClusterLogsResponse> DescribeClusterLogsAsync(string clusterId, DescribeClusterLogsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterLogsExAsync(clusterId, request, runtime);
        }

        public AttachInstancesResponse AttachInstancesEx(string clusterId, AttachInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstancesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<AttachInstancesResponse> AttachInstancesExAsync(string clusterId, AttachInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstancesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public AttachInstancesResponse AttachInstances(string clusterId, AttachInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachInstancesEx(clusterId, request, runtime);
        }

        public async Task<AttachInstancesResponse> AttachInstancesAsync(string clusterId, AttachInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachInstancesExAsync(clusterId, request, runtime);
        }

        public DescribeTemplatesResponse DescribeTemplatesEx(DescribeTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTemplatesResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/templates", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeTemplatesResponse> DescribeTemplatesExAsync(DescribeTemplatesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeTemplatesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/templates", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeTemplatesResponse DescribeTemplates(DescribeTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeTemplatesEx(request, runtime);
        }

        public async Task<DescribeTemplatesResponse> DescribeTemplatesAsync(DescribeTemplatesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeTemplatesExAsync(request, runtime);
        }

        public CreateTemplateResponse CreateTemplateEx(CreateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTemplateResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/templates", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<CreateTemplateResponse> CreateTemplateExAsync(CreateTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateTemplateResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/templates", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public CreateTemplateResponse CreateTemplate(CreateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateTemplateEx(request, runtime);
        }

        public async Task<CreateTemplateResponse> CreateTemplateAsync(CreateTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateTemplateExAsync(request, runtime);
        }

        public CreateClusterResponse CreateClusterEx(CreateClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<CreateClusterResponse> CreateClusterExAsync(CreateClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public CreateClusterResponse CreateCluster(CreateClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateClusterEx(request, runtime);
        }

        public async Task<CreateClusterResponse> CreateClusterAsync(CreateClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateClusterExAsync(request, runtime);
        }

        public ScaleClusterResponse ScaleClusterEx(string clusterId, ScaleClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<ScaleClusterResponse> ScaleClusterExAsync(string clusterId, ScaleClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public ScaleClusterResponse ScaleCluster(string clusterId, ScaleClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ScaleClusterEx(clusterId, request, runtime);
        }

        public async Task<ScaleClusterResponse> ScaleClusterAsync(string clusterId, ScaleClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ScaleClusterExAsync(clusterId, request, runtime);
        }

        public DescribeClustersResponse DescribeClustersEx(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClustersResponse> DescribeClustersExAsync(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClustersResponse DescribeClusters(DescribeClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClustersEx(request, runtime);
        }

        public async Task<DescribeClustersResponse> DescribeClustersAsync(DescribeClustersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClustersExAsync(request, runtime);
        }

        public DescribeClusterDetailResponse DescribeClusterDetailEx(string clusterId, DescribeClusterDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterDetailResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterDetailResponse> DescribeClusterDetailExAsync(string clusterId, DescribeClusterDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterDetailResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public DescribeClusterDetailResponse DescribeClusterDetail(string clusterId, DescribeClusterDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeClusterDetailEx(clusterId, request, runtime);
        }

        public async Task<DescribeClusterDetailResponse> DescribeClusterDetailAsync(string clusterId, DescribeClusterDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeClusterDetailExAsync(clusterId, request, runtime);
        }

        public DeleteClusterResponse DeleteClusterEx(string clusterId, DeleteClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterResponse>(DoRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<DeleteClusterResponse> DeleteClusterExAsync(string clusterId, DeleteClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public DeleteClusterResponse DeleteCluster(string clusterId, DeleteClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteClusterEx(clusterId, request, runtime);
        }

        public async Task<DeleteClusterResponse> DeleteClusterAsync(string clusterId, DeleteClusterRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteClusterExAsync(clusterId, request, runtime);
        }

        public DescribeApiVersionResponse DescribeApiVersionEx(DescribeApiVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeApiVersionResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/version", null, request.Headers, null, runtime));
        }

        public async Task<DescribeApiVersionResponse> DescribeApiVersionExAsync(DescribeApiVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeApiVersionResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/version", null, request.Headers, null, runtime));
        }

        public DescribeApiVersionResponse DescribeApiVersion(DescribeApiVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeApiVersionEx(request, runtime);
        }

        public async Task<DescribeApiVersionResponse> DescribeApiVersionAsync(DescribeApiVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeApiVersionExAsync(request, runtime);
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
