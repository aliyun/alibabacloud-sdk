// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215;

import com.aliyun.tea.*;
import com.aliyun.cs20151215.models.*;

public class Client extends com.aliyun.tearoa.Client {
    public Client(com.aliyun.tearoa.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "";
        this.checkConfig(config);
        this._endpointHost = this.getEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpointHost);
    }


    public ResumeComponentUpgradeResponse resumeComponentUpgradeEx(String clusterid, String componentid, ResumeComponentUpgradeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.headers, null, runtime), new ResumeComponentUpgradeResponse());
    }

    public ResumeComponentUpgradeResponse resumeComponentUpgrade(String clusterid, String componentid, ResumeComponentUpgradeRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.resumeComponentUpgradeEx(clusterid, componentid, request, runtime);
    }

    public PauseComponentUpgradeResponse pauseComponentUpgradeEx(String clusterid, String componentid, PauseComponentUpgradeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.headers, null, runtime), new PauseComponentUpgradeResponse());
    }

    public PauseComponentUpgradeResponse pauseComponentUpgrade(String clusterid, String componentid, PauseComponentUpgradeRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.pauseComponentUpgradeEx(clusterid, componentid, request, runtime);
    }

    public CancelComponentUpgradeResponse cancelComponentUpgradeEx(String clusterid, String componentid, CancelComponentUpgradeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.headers, null, runtime), new CancelComponentUpgradeResponse());
    }

    public CancelComponentUpgradeResponse cancelComponentUpgrade(String clusterid, String componentid, CancelComponentUpgradeRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.cancelComponentUpgradeEx(clusterid, componentid, request, runtime);
    }

    public CancelWorkflowResponse cancelWorkflowEx(String workflowName, CancelWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName + "", null, request.headers, null, runtime), new CancelWorkflowResponse());
    }

    public CancelWorkflowResponse cancelWorkflow(String workflowName, CancelWorkflowRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.cancelWorkflowEx(workflowName, request, runtime);
    }

    public DescirbeWorkflowResponse descirbeWorkflowEx(String workflowName, DescirbeWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName + "", null, request.headers, null, runtime), new DescirbeWorkflowResponse());
    }

    public DescirbeWorkflowResponse descirbeWorkflow(String workflowName, DescirbeWorkflowRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.descirbeWorkflowEx(workflowName, request, runtime);
    }

    public RemoveWorkflowResponse removeWorkflowEx(String workflowName, RemoveWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName + "", null, request.headers, null, runtime), new RemoveWorkflowResponse());
    }

    public RemoveWorkflowResponse removeWorkflow(String workflowName, RemoveWorkflowRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.removeWorkflowEx(workflowName, request, runtime);
    }

    public DescribeWorkflowsResponse describeWorkflowsEx(DescribeWorkflowsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.headers, null, runtime), new DescribeWorkflowsResponse());
    }

    public DescribeWorkflowsResponse describeWorkflows(DescribeWorkflowsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeWorkflowsEx(request, runtime);
    }

    public StartWorkflowResponse startWorkflowEx(StartWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.headers, null, runtime), new StartWorkflowResponse());
    }

    public StartWorkflowResponse startWorkflow(StartWorkflowRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.startWorkflowEx(request, runtime);
    }

    public CreateServiceMeshResponse createServiceMeshEx(CreateServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh", null, request.headers, null, runtime), new CreateServiceMeshResponse());
    }

    public CreateServiceMeshResponse createServiceMesh(CreateServiceMeshRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createServiceMeshEx(request, runtime);
    }

    public ServiceMeshAddClusterResponse serviceMeshAddClusterEx(String serviceMeshId, ServiceMeshAddClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/add/clusters", null, request.headers, null, runtime), new ServiceMeshAddClusterResponse());
    }

    public ServiceMeshAddClusterResponse serviceMeshAddCluster(String serviceMeshId, ServiceMeshAddClusterRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.serviceMeshAddClusterEx(serviceMeshId, request, runtime);
    }

    public ServiceMeshRemoveClusterResponse serviceMeshRemoveClusterEx(String serviceMeshId, ServiceMeshRemoveClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/remove/clusters", null, request.headers, null, runtime), new ServiceMeshRemoveClusterResponse());
    }

    public ServiceMeshRemoveClusterResponse serviceMeshRemoveCluster(String serviceMeshId, ServiceMeshRemoveClusterRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.serviceMeshRemoveClusterEx(serviceMeshId, request, runtime);
    }

    public UpdateServiceMeshResponse updateServiceMeshEx(String serviceMeshId, UpdateServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "", null, request.headers, null, runtime), new UpdateServiceMeshResponse());
    }

    public UpdateServiceMeshResponse updateServiceMesh(String serviceMeshId, UpdateServiceMeshRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.updateServiceMeshEx(serviceMeshId, request, runtime);
    }

    public ServiceMeshApiServerResponse serviceMeshApiServerEx(String serviceMeshId, ServiceMeshApiServerRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh/" + serviceMeshId + "/api_proxy", null, request.headers, null, runtime), new ServiceMeshApiServerResponse());
    }

    public ServiceMeshApiServerResponse serviceMeshApiServer(String serviceMeshId, ServiceMeshApiServerRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.serviceMeshApiServerEx(serviceMeshId, request, runtime);
    }

    public UnInstallClusterAddonsResponse unInstallClusterAddonsEx(String clusterId, UnInstallClusterAddonsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.headers, TeaModel.buildMap(request.body), runtime), new UnInstallClusterAddonsResponse());
    }

    public UnInstallClusterAddonsResponse unInstallClusterAddons(String clusterId, UnInstallClusterAddonsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.unInstallClusterAddonsEx(clusterId, request, runtime);
    }

    public DescribeAddonsResponse describeAddonsEx(DescribeAddonsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeAddonsResponse());
    }

    public DescribeAddonsResponse describeAddons(DescribeAddonsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeAddonsEx(request, runtime);
    }

    public UpdateK8sClusterUserConfigExpireResponse updateK8sClusterUserConfigExpireEx(String clusterId, UpdateK8sClusterUserConfigExpireRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/k8s/" + clusterId + "/user_config/expire", null, request.headers, null, runtime), new UpdateK8sClusterUserConfigExpireResponse());
    }

    public UpdateK8sClusterUserConfigExpireResponse updateK8sClusterUserConfigExpire(String clusterId, UpdateK8sClusterUserConfigExpireRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.updateK8sClusterUserConfigExpireEx(clusterId, request, runtime);
    }

    public DescribeClusterV2UserKubeconfigResponse describeClusterV2UserKubeconfigEx(String clusterId, DescribeClusterV2UserKubeconfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeClusterV2UserKubeconfigResponse());
    }

    public DescribeClusterV2UserKubeconfigResponse describeClusterV2UserKubeconfig(String clusterId, DescribeClusterV2UserKubeconfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClusterV2UserKubeconfigEx(clusterId, request, runtime);
    }

    public ModifyClusterTagsResponse modifyClusterTagsEx(String clusterId, ModifyClusterTagsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.headers, TeaModel.buildMap(request.body), runtime), new ModifyClusterTagsResponse());
    }

    public ModifyClusterTagsResponse modifyClusterTags(String clusterId, ModifyClusterTagsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.modifyClusterTagsEx(clusterId, request, runtime);
    }

    public ScaleOutClusterResponse scaleOutClusterEx(String clusterId, ScaleOutClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "", null, request.headers, TeaModel.buildMap(request.body), runtime), new ScaleOutClusterResponse());
    }

    public ScaleOutClusterResponse scaleOutCluster(String clusterId, ScaleOutClusterRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.scaleOutClusterEx(clusterId, request, runtime);
    }

    public DescribeClusterAddonsVersionResponse describeClusterAddonsVersionEx(String clusterId, DescribeClusterAddonsVersionRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/version", null, request.headers, null, runtime), new DescribeClusterAddonsVersionResponse());
    }

    public DescribeClusterAddonsVersionResponse describeClusterAddonsVersion(String clusterId, DescribeClusterAddonsVersionRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClusterAddonsVersionEx(clusterId, request, runtime);
    }

    public DescribeClusterAddonUpgradeStatusResponse describeClusterAddonUpgradeStatusEx(String clusterId, String componentId, DescribeClusterAddonUpgradeStatusRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/" + componentId + "/upgradestatus", null, request.headers, null, runtime), new DescribeClusterAddonUpgradeStatusResponse());
    }

    public DescribeClusterAddonUpgradeStatusResponse describeClusterAddonUpgradeStatus(String clusterId, String componentId, DescribeClusterAddonUpgradeStatusRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClusterAddonUpgradeStatusEx(clusterId, componentId, request, runtime);
    }

    public DescribeEdgeClusterAttachScriptsResponse describeEdgeClusterAttachScriptsEx(String clusterId, DescribeEdgeClusterAttachScriptsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/attachscript", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeEdgeClusterAttachScriptsResponse());
    }

    public DescribeEdgeClusterAttachScriptsResponse describeEdgeClusterAttachScripts(String clusterId, DescribeEdgeClusterAttachScriptsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeEdgeClusterAttachScriptsEx(clusterId, request, runtime);
    }

    public DeleteClusterNodesResponse deleteClusterNodesEx(String clusterId, DeleteClusterNodesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.headers, TeaModel.buildMap(request.body), runtime), new DeleteClusterNodesResponse());
    }

    public DeleteClusterNodesResponse deleteClusterNodes(String clusterId, DeleteClusterNodesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.deleteClusterNodesEx(clusterId, request, runtime);
    }

    public DescribeClusterUserKubeconfigResponse describeClusterUserKubeconfigEx(String clusterId, DescribeClusterUserKubeconfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeClusterUserKubeconfigResponse());
    }

    public DescribeClusterUserKubeconfigResponse describeClusterUserKubeconfig(String clusterId, DescribeClusterUserKubeconfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClusterUserKubeconfigEx(clusterId, request, runtime);
    }

    public AttachInstancesResponse attachInstancesEx(String clusterId, AttachInstancesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.headers, TeaModel.buildMap(request.body), runtime), new AttachInstancesResponse());
    }

    public AttachInstancesResponse attachInstances(String clusterId, AttachInstancesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.attachInstancesEx(clusterId, request, runtime);
    }

    public CreateClusterResponse createClusterEx(CreateClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.headers, TeaModel.buildMap(request.body), runtime), new CreateClusterResponse());
    }

    public CreateClusterResponse createCluster(CreateClusterRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createClusterEx(request, runtime);
    }

    public ScaleClusterResponse scaleClusterEx(String clusterId, ScaleClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId + "", null, request.headers, null, runtime), new ScaleClusterResponse());
    }

    public ScaleClusterResponse scaleCluster(String clusterId, ScaleClusterRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.scaleClusterEx(clusterId, request, runtime);
    }

    public DescribeClustersResponse describeClustersEx(DescribeClustersRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeClustersResponse());
    }

    public DescribeClustersResponse describeClusters(DescribeClustersRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClustersEx(request, runtime);
    }

    public DescribeClusterDetailResponse describeClusterDetailEx(String clusterId, DescribeClusterDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "", null, request.headers, null, runtime), new DescribeClusterDetailResponse());
    }

    public DescribeClusterDetailResponse describeClusterDetail(String clusterId, DescribeClusterDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeClusterDetailEx(clusterId, request, runtime);
    }

    public DeleteClusterResponse deleteClusterEx(String clusterId, DeleteClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId + "", null, request.headers, null, runtime), new DeleteClusterResponse());
    }

    public DeleteClusterResponse deleteCluster(String clusterId, DeleteClusterRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.deleteClusterEx(clusterId, request, runtime);
    }

    public String getEndpoint(String productId, String regionId, String endpointRule, String network, String suffix, java.util.Map<String, String> endpointMap, String endpoint) throws Exception {
        if (!com.aliyun.teautil.Common.empty(endpoint)) {
            return endpoint;
        }

        if (!com.aliyun.teautil.Common.isUnset(endpointMap) && !com.aliyun.teautil.Common.empty(endpointMap.get("regionId"))) {
            return endpointMap.get("regionId");
        }

        return com.aliyun.endpointutil.Client.getEndpointRules(productId, regionId, endpointRule, network, suffix);
    }
}
