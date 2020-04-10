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


    public ResumeComponentUpgradeResponse resumeComponentUpgrade(String clusterid, String componentid, ResumeComponentUpgradeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/resume", null, request.headers, null, runtime), new ResumeComponentUpgradeResponse());
    }

    public PauseComponentUpgradeResponse pauseComponentUpgrade(String clusterid, String componentid, PauseComponentUpgradeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/pause", null, request.headers, null, runtime), new PauseComponentUpgradeResponse());
    }

    public CancelComponentUpgradeResponse cancelComponentUpgrade(String clusterid, String componentid, CancelComponentUpgradeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterid + "/components/" + componentid + "/cancel", null, request.headers, null, runtime), new CancelComponentUpgradeResponse());
    }

    public CancelWorkflowResponse cancelWorkflow(String workflowName, CancelWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" + workflowName + "", null, request.headers, null, runtime), new CancelWorkflowResponse());
    }

    public DescirbeWorkflowResponse descirbeWorkflow(String workflowName, DescirbeWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" + workflowName + "", null, request.headers, null, runtime), new DescirbeWorkflowResponse());
    }

    public RemoveWorkflowResponse removeWorkflow(String workflowName, RemoveWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" + workflowName + "", null, request.headers, null, runtime), new RemoveWorkflowResponse());
    }

    public DescribeWorkflowsResponse describeWorkflows(DescribeWorkflowsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, request.headers, null, runtime), new DescribeWorkflowsResponse());
    }

    public StartWorkflowResponse startWorkflow(StartWorkflowRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, request.headers, null, runtime), new StartWorkflowResponse());
    }

    public CreateServiceMeshResponse createServiceMesh(CreateServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh", null, request.headers, null, runtime), new CreateServiceMeshResponse());
    }

    public ServiceMeshAddClusterResponse serviceMeshAddCluster(String serviceMeshId, ServiceMeshAddClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/add/clusters", null, request.headers, null, runtime), new ServiceMeshAddClusterResponse());
    }

    public ServiceMeshRemoveClusterResponse serviceMeshRemoveCluster(String serviceMeshId, ServiceMeshRemoveClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "/remove/clusters", null, request.headers, null, runtime), new ServiceMeshRemoveClusterResponse());
    }

    public UpdateServiceMeshResponse updateServiceMesh(String serviceMeshId, UpdateServiceMeshRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/servicemesh/" + serviceMeshId + "", null, request.headers, null, runtime), new UpdateServiceMeshResponse());
    }

    public ServiceMeshApiServerResponse serviceMeshApiServer(String serviceMeshId, ServiceMeshApiServerRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/servicemesh/" + serviceMeshId + "/api_proxy", null, request.headers, null, runtime), new ServiceMeshApiServerResponse());
    }

    public UnInstallClusterAddonsResponse unInstallClusterAddons(String clusterId, UnInstallClusterAddonsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/components/uninstall", null, request.headers, TeaModel.buildMap(request.body), runtime), new UnInstallClusterAddonsResponse());
    }

    public DescribeAddonsResponse describeAddons(DescribeAddonsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeAddonsResponse());
    }

    public UpdateK8sClusterUserConfigExpireResponse updateK8sClusterUserConfigExpire(String clusterId, UpdateK8sClusterUserConfigExpireRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/k8s/" + clusterId + "/user_config/expire", null, request.headers, null, runtime), new UpdateK8sClusterUserConfigExpireResponse());
    }

    public DescribeClusterV2UserKubeconfigResponse describeClusterV2UserKubeconfig(String clusterId, DescribeClusterV2UserKubeconfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" + clusterId + "/user_config", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeClusterV2UserKubeconfigResponse());
    }

    public ModifyClusterTagsResponse modifyClusterTags(String clusterId, ModifyClusterTagsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/tags", null, request.headers, TeaModel.buildMap(request.body), runtime), new ModifyClusterTagsResponse());
    }

    public ScaleOutClusterResponse scaleOutCluster(String clusterId, ScaleOutClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" + clusterId + "", null, request.headers, TeaModel.buildMap(request.body), runtime), new ScaleOutClusterResponse());
    }

    public DescribeClusterAddonsVersionResponse describeClusterAddonsVersion(String clusterId, DescribeClusterAddonsVersionRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/version", null, request.headers, null, runtime), new DescribeClusterAddonsVersionResponse());
    }

    public DescribeClusterAddonUpgradeStatusResponse describeClusterAddonUpgradeStatus(String clusterId, String componentId, DescribeClusterAddonUpgradeStatusRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/components/" + componentId + "/upgradestatus", null, request.headers, null, runtime), new DescribeClusterAddonUpgradeStatusResponse());
    }

    public DescribeEdgeClusterAttachScriptsResponse describeEdgeClusterAttachScripts(String clusterId, DescribeEdgeClusterAttachScriptsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "/attachscript", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeEdgeClusterAttachScriptsResponse());
    }

    public DeleteClusterNodesResponse deleteClusterNodes(String clusterId, DeleteClusterNodesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/nodes", null, request.headers, TeaModel.buildMap(request.body), runtime), new DeleteClusterNodesResponse());
    }

    public DescribeClusterUserKubeconfigResponse describeClusterUserKubeconfig(String clusterId, DescribeClusterUserKubeconfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" + clusterId + "/user_config", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeClusterUserKubeconfigResponse());
    }

    public AttachInstancesResponse attachInstances(String clusterId, AttachInstancesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" + clusterId + "/attach", null, request.headers, TeaModel.buildMap(request.body), runtime), new AttachInstancesResponse());
    }

    public CreateClusterResponse createCluster(CreateClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, request.headers, TeaModel.buildMap(request.body), runtime), new CreateClusterResponse());
    }

    public ScaleClusterResponse scaleCluster(String clusterId, ScaleClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" + clusterId + "", null, request.headers, null, runtime), new ScaleClusterResponse());
    }

    public DescribeClustersResponse describeClusters(DescribeClustersRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters", com.aliyun.teautil.Common.stringifyMapValue(TeaModel.buildMap(request.query)), request.headers, null, runtime), new DescribeClustersResponse());
    }

    public DescribeClusterDetailResponse describeClusterDetail(String clusterId, DescribeClusterDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" + clusterId + "", null, request.headers, null, runtime), new DescribeClusterDetailResponse());
    }

    public DeleteClusterResponse deleteCluster(String clusterId, DeleteClusterRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" + clusterId + "", null, request.headers, null, runtime), new DeleteClusterResponse());
    }

    public String getEndpoint(String productId, String regionId, String endpointRule, String network, String suffix, java.util.Map<String, String> endpointMap, String endpoint) throws Exception {
        if (!com.aliyun.teautil.Common.empty(endpoint)) {
            return endpoint;
        }

        if (!com.aliyun.teautil.Common.empty(endpointMap.get("regionId"))) {
            return endpointMap.get("regionId");
        }

        return com.aliyun.endpointutil.Client.getEndpointRules(productId, regionId, endpointRule, network, suffix);
    }
}
