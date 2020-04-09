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


        public ResumeComponentUpgradeResponse ResumeComponentUpgrade(string clusterid, string componentid, ResumeComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.Headers, null, runtime));
        }

        public async Task<ResumeComponentUpgradeResponse> ResumeComponentUpgradeAsync(string clusterid, string componentid, ResumeComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.Headers, null, runtime));
        }

        public PauseComponentUpgradeResponse PauseComponentUpgrade(string clusterid, string componentid, PauseComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.Headers, null, runtime));
        }

        public async Task<PauseComponentUpgradeResponse> PauseComponentUpgradeAsync(string clusterid, string componentid, PauseComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PauseComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.Headers, null, runtime));
        }

        public CancelComponentUpgradeResponse CancelComponentUpgrade(string clusterid, string componentid, CancelComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelComponentUpgradeResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.Headers, null, runtime));
        }

        public async Task<CancelComponentUpgradeResponse> CancelComponentUpgradeAsync(string clusterid, string componentid, CancelComponentUpgradeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelComponentUpgradeResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.Headers, null, runtime));
        }

        public CancelWorkflowResponse CancelWorkflow(string workflowName, CancelWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<CancelWorkflowResponse> CancelWorkflowAsync(string workflowName, CancelWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public DescirbeWorkflowResponse DescirbeWorkflow(string workflowName, DescirbeWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescirbeWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<DescirbeWorkflowResponse> DescirbeWorkflowAsync(string workflowName, DescirbeWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescirbeWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public RemoveWorkflowResponse RemoveWorkflow(string workflowName, RemoveWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public async Task<RemoveWorkflowResponse> RemoveWorkflowAsync(string workflowName, RemoveWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RemoveWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName, null, request.Headers, null, runtime));
        }

        public DescribeWorkflowsResponse DescribeWorkflows(DescribeWorkflowsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeWorkflowsResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.Headers, null, runtime));
        }

        public async Task<DescribeWorkflowsResponse> DescribeWorkflowsAsync(DescribeWorkflowsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeWorkflowsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.Headers, null, runtime));
        }

        public StartWorkflowResponse StartWorkflow(StartWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartWorkflowResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.Headers, null, runtime));
        }

        public async Task<StartWorkflowResponse> StartWorkflowAsync(StartWorkflowRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StartWorkflowResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.Headers, null, runtime));
        }

        public CreateServiceMeshResponse CreateServiceMesh(CreateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateServiceMeshResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh", null, request.Headers, null, runtime));
        }

        public async Task<CreateServiceMeshResponse> CreateServiceMeshAsync(CreateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateServiceMeshResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh", null, request.Headers, null, runtime));
        }

        public ServiceMeshAddClusterResponse ServiceMeshAddCluster(string serviceMeshId, ServiceMeshAddClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshAddClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/add/clusters", null, request.Headers, null, runtime));
        }

        public async Task<ServiceMeshAddClusterResponse> ServiceMeshAddClusterAsync(string serviceMeshId, ServiceMeshAddClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshAddClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/add/clusters", null, request.Headers, null, runtime));
        }

        public ServiceMeshRemoveClusterResponse ServiceMeshRemoveCluster(string serviceMeshId, ServiceMeshRemoveClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshRemoveClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/remove/clusters", null, request.Headers, null, runtime));
        }

        public async Task<ServiceMeshRemoveClusterResponse> ServiceMeshRemoveClusterAsync(string serviceMeshId, ServiceMeshRemoveClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshRemoveClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/remove/clusters", null, request.Headers, null, runtime));
        }

        public UpdateServiceMeshResponse UpdateServiceMesh(string serviceMeshId, UpdateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateServiceMeshResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId, null, request.Headers, null, runtime));
        }

        public async Task<UpdateServiceMeshResponse> UpdateServiceMeshAsync(string serviceMeshId, UpdateServiceMeshRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateServiceMeshResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId, null, request.Headers, null, runtime));
        }

        public ServiceMeshApiServerResponse ServiceMeshApiServer(string serviceMeshId, ServiceMeshApiServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshApiServerResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh/" + serviceMeshId + "/api_proxy", null, request.Headers, null, runtime));
        }

        public async Task<ServiceMeshApiServerResponse> ServiceMeshApiServerAsync(string serviceMeshId, ServiceMeshApiServerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ServiceMeshApiServerResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh/" + serviceMeshId + "/api_proxy", null, request.Headers, null, runtime));
        }

        public UnInstallClusterAddonsResponse UnInstallClusterAddons(string clusterId, UnInstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnInstallClusterAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<UnInstallClusterAddonsResponse> UnInstallClusterAddonsAsync(string clusterId, UnInstallClusterAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnInstallClusterAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public DescribeAddonsResponse DescribeAddons(DescribeAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAddonsResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeAddonsResponse> DescribeAddonsAsync(DescribeAddonsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeAddonsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public UpdateK8sClusterUserConfigExpireResponse UpdateK8sClusterUserConfigExpire(string clusterId, UpdateK8sClusterUserConfigExpireRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateK8sClusterUserConfigExpireResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/k8s/" + clusterId + "/user_config/expire", null, request.Headers, null, runtime));
        }

        public async Task<UpdateK8sClusterUserConfigExpireResponse> UpdateK8sClusterUserConfigExpireAsync(string clusterId, UpdateK8sClusterUserConfigExpireRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateK8sClusterUserConfigExpireResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/k8s/" + clusterId + "/user_config/expire", null, request.Headers, null, runtime));
        }

        public DescribeClusterV2UserKubeconfigResponse DescribeClusterV2UserKubeconfig(string clusterId, DescribeClusterV2UserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterV2UserKubeconfigResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterV2UserKubeconfigResponse> DescribeClusterV2UserKubeconfigAsync(string clusterId, DescribeClusterV2UserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterV2UserKubeconfigResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public ModifyClusterTagsResponse ModifyClusterTags(string clusterId, ModifyClusterTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterTagsResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<ModifyClusterTagsResponse> ModifyClusterTagsAsync(string clusterId, ModifyClusterTagsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyClusterTagsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public ScaleOutClusterResponse ScaleOutCluster(string clusterId, ScaleOutClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleOutClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<ScaleOutClusterResponse> ScaleOutClusterAsync(string clusterId, ScaleOutClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleOutClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId, null, request.Headers, request.Body.ToMap(), runtime));
        }

        public DescribeClusterAddonsVersionResponse DescribeClusterAddonsVersion(string clusterId, DescribeClusterAddonsVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonsVersionResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/version", null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterAddonsVersionResponse> DescribeClusterAddonsVersionAsync(string clusterId, DescribeClusterAddonsVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonsVersionResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/version", null, request.Headers, null, runtime));
        }

        public DescribeClusterAddonUpgradeStatusResponse DescribeClusterAddonUpgradeStatus(string clusterId, string componentId, DescribeClusterAddonUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonUpgradeStatusResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/" + componentId + "/upgradestatus", null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterAddonUpgradeStatusResponse> DescribeClusterAddonUpgradeStatusAsync(string clusterId, string componentId, DescribeClusterAddonUpgradeStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterAddonUpgradeStatusResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/" + componentId + "/upgradestatus", null, request.Headers, null, runtime));
        }

        public DescribeEdgeClusterAttachScriptsResponse DescribeEdgeClusterAttachScripts(string clusterId, DescribeEdgeClusterAttachScriptsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEdgeClusterAttachScriptsResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/attachscript", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeEdgeClusterAttachScriptsResponse> DescribeEdgeClusterAttachScriptsAsync(string clusterId, DescribeEdgeClusterAttachScriptsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeEdgeClusterAttachScriptsResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/attachscript", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DeleteClusterNodesResponse DeleteClusterNodes(string clusterId, DeleteClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterNodesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<DeleteClusterNodesResponse> DeleteClusterNodesAsync(string clusterId, DeleteClusterNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterNodesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public DescribeClusterUserKubeconfigResponse DescribeClusterUserKubeconfig(string clusterId, DescribeClusterUserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterUserKubeconfigResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClusterUserKubeconfigResponse> DescribeClusterUserKubeconfigAsync(string clusterId, DescribeClusterUserKubeconfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterUserKubeconfigResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public AttachInstancesResponse AttachInstances(string clusterId, AttachInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstancesResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<AttachInstancesResponse> AttachInstancesAsync(string clusterId, AttachInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachInstancesResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public CreateClusterResponse CreateCluster(CreateClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateClusterResponse>(DoRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public async Task<CreateClusterResponse> CreateClusterAsync(CreateClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.Headers, request.Body.ToMap(), runtime));
        }

        public ScaleClusterResponse ScaleCluster(string clusterId, ScaleClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleClusterResponse>(DoRequest("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<ScaleClusterResponse> ScaleClusterAsync(string clusterId, ScaleClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScaleClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public DescribeClustersResponse DescribeClusters(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public async Task<DescribeClustersResponse> DescribeClustersAsync(DescribeClustersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClustersResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters", AlibabaCloud.TeaUtil.Common.StringifyMapValue(request.Query.ToMap()), request.Headers, null, runtime));
        }

        public DescribeClusterDetailResponse DescribeClusterDetail(string clusterId, DescribeClusterDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterDetailResponse>(DoRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<DescribeClusterDetailResponse> DescribeClusterDetailAsync(string clusterId, DescribeClusterDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeClusterDetailResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public DeleteClusterResponse DeleteCluster(string clusterId, DeleteClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterResponse>(DoRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public async Task<DeleteClusterResponse> DeleteClusterAsync(string clusterId, DeleteClusterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteClusterResponse>(await DoRequestAsync("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId, null, request.Headers, null, runtime));
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}
