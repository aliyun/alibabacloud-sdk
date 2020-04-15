<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CS\V20151215\CS\AttachInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\AttachInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\CancelComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\CancelComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\CancelWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\CancelWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\CreateServiceMeshRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\CreateServiceMeshResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DeleteClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DeleteClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescirbeWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescirbeWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterAddonsVersionRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterAddonsVersionResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterAddonUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterAddonUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterDetailRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClustersRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClustersResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterUserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterUserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterV2UserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterV2UserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeEdgeClusterAttachScriptsRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeEdgeClusterAttachScriptsResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeWorkflowsRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\DescribeWorkflowsResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\ModifyClusterTagsRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\ModifyClusterTagsResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\PauseComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\PauseComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\RemoveWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\RemoveWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\ResumeComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\ResumeComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\ScaleClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\ScaleClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\ScaleOutClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\ScaleOutClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\ServiceMeshAddClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\ServiceMeshAddClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\ServiceMeshApiServerRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\ServiceMeshApiServerResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\ServiceMeshRemoveClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\ServiceMeshRemoveClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\StartWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\StartWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\UnInstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\UnInstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\UpdateK8sClusterUserConfigExpireRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\UpdateK8sClusterUserConfigExpireResponse;
use AlibabaCloud\SDK\CS\V20151215\CS\UpdateServiceMeshRequest;
use AlibabaCloud\SDK\CS\V20151215\CS\UpdateServiceMeshResponse;
use AlibabaCloud\Tea\Model;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class CS
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpointHost = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpointHost);
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @throws \Exception
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgradeEx($clusterid, $componentid, ResumeComponentUpgradeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/resume', null, $request->headers, null, $runtime), new ResumeComponentUpgradeResponse());
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @throws \Exception
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgrade($clusterid, $componentid, ResumeComponentUpgradeRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->resumeComponentUpgradeEx($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @throws \Exception
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgradeEx($clusterid, $componentid, PauseComponentUpgradeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/pause', null, $request->headers, null, $runtime), new PauseComponentUpgradeResponse());
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @throws \Exception
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgrade($clusterid, $componentid, PauseComponentUpgradeRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->pauseComponentUpgradeEx($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @throws \Exception
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgradeEx($clusterid, $componentid, CancelComponentUpgradeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/cancel', null, $request->headers, null, $runtime), new CancelComponentUpgradeResponse());
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @throws \Exception
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgrade($clusterid, $componentid, CancelComponentUpgradeRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->cancelComponentUpgradeEx($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string $workflowName
     *
     * @throws \Exception
     *
     * @return CancelWorkflowResponse
     */
    public function cancelWorkflowEx($workflowName, CancelWorkflowRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime), new CancelWorkflowResponse());
    }

    /**
     * @param string $workflowName
     *
     * @throws \Exception
     *
     * @return CancelWorkflowResponse
     */
    public function cancelWorkflow($workflowName, CancelWorkflowRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->cancelWorkflowEx($workflowName, $request, $runtime);
    }

    /**
     * @param string $workflowName
     *
     * @throws \Exception
     *
     * @return DescirbeWorkflowResponse
     */
    public function descirbeWorkflowEx($workflowName, DescirbeWorkflowRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime), new DescirbeWorkflowResponse());
    }

    /**
     * @param string $workflowName
     *
     * @throws \Exception
     *
     * @return DescirbeWorkflowResponse
     */
    public function descirbeWorkflow($workflowName, DescirbeWorkflowRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->descirbeWorkflowEx($workflowName, $request, $runtime);
    }

    /**
     * @param string $workflowName
     *
     * @throws \Exception
     *
     * @return RemoveWorkflowResponse
     */
    public function removeWorkflowEx($workflowName, RemoveWorkflowRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime), new RemoveWorkflowResponse());
    }

    /**
     * @param string $workflowName
     *
     * @throws \Exception
     *
     * @return RemoveWorkflowResponse
     */
    public function removeWorkflow($workflowName, RemoveWorkflowRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->removeWorkflowEx($workflowName, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeWorkflowsResponse
     */
    public function describeWorkflowsEx(DescribeWorkflowsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/gs/workflows', null, $request->headers, null, $runtime), new DescribeWorkflowsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeWorkflowsResponse
     */
    public function describeWorkflows(DescribeWorkflowsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeWorkflowsEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflowEx(StartWorkflowRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/gs/workflow', null, $request->headers, null, $runtime), new StartWorkflowResponse());
    }

    /**
     * @throws \Exception
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflow(StartWorkflowRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->startWorkflowEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMeshEx(CreateServiceMeshRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/servicemesh', null, $request->headers, null, $runtime), new CreateServiceMeshResponse());
    }

    /**
     * @throws \Exception
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMesh(CreateServiceMeshRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->createServiceMeshEx($request, $runtime);
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return ServiceMeshAddClusterResponse
     */
    public function serviceMeshAddClusterEx($serviceMeshId, ServiceMeshAddClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/servicemesh/' . $serviceMeshId . '/add/clusters', null, $request->headers, null, $runtime), new ServiceMeshAddClusterResponse());
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return ServiceMeshAddClusterResponse
     */
    public function serviceMeshAddCluster($serviceMeshId, ServiceMeshAddClusterRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->serviceMeshAddClusterEx($serviceMeshId, $request, $runtime);
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return ServiceMeshRemoveClusterResponse
     */
    public function serviceMeshRemoveClusterEx($serviceMeshId, ServiceMeshRemoveClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/servicemesh/' . $serviceMeshId . '/remove/clusters', null, $request->headers, null, $runtime), new ServiceMeshRemoveClusterResponse());
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return ServiceMeshRemoveClusterResponse
     */
    public function serviceMeshRemoveCluster($serviceMeshId, ServiceMeshRemoveClusterRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->serviceMeshRemoveClusterEx($serviceMeshId, $request, $runtime);
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return UpdateServiceMeshResponse
     */
    public function updateServiceMeshEx($serviceMeshId, UpdateServiceMeshRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/servicemesh/' . $serviceMeshId . '', null, $request->headers, null, $runtime), new UpdateServiceMeshResponse());
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return UpdateServiceMeshResponse
     */
    public function updateServiceMesh($serviceMeshId, UpdateServiceMeshRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->updateServiceMeshEx($serviceMeshId, $request, $runtime);
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return ServiceMeshApiServerResponse
     */
    public function serviceMeshApiServerEx($serviceMeshId, ServiceMeshApiServerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/servicemesh/' . $serviceMeshId . '/api_proxy', null, $request->headers, null, $runtime), new ServiceMeshApiServerResponse());
    }

    /**
     * @param string $serviceMeshId
     *
     * @throws \Exception
     *
     * @return ServiceMeshApiServerResponse
     */
    public function serviceMeshApiServer($serviceMeshId, ServiceMeshApiServerRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->serviceMeshApiServerEx($serviceMeshId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddonsEx($clusterId, UnInstallClusterAddonsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/components/uninstall', null, $request->headers, $request->body, $runtime), new UnInstallClusterAddonsResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddons($clusterId, UnInstallClusterAddonsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->unInstallClusterAddonsEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddonsEx(DescribeAddonsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/components/metadata', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime), new DescribeAddonsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddons(DescribeAddonsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeAddonsEx($request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpireEx($clusterId, UpdateK8sClusterUserConfigExpireRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/k8s/' . $clusterId . '/user_config/expire', null, $request->headers, null, $runtime), new UpdateK8sClusterUserConfigExpireResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpire($clusterId, UpdateK8sClusterUserConfigExpireRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->updateK8sClusterUserConfigExpireEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfigEx($clusterId, DescribeClusterV2UserKubeconfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/k8s/' . $clusterId . '/user_config', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime), new DescribeClusterV2UserKubeconfigResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfig($clusterId, DescribeClusterV2UserKubeconfigRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeClusterV2UserKubeconfigEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTagsEx($clusterId, ModifyClusterTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/tags', null, $request->headers, $request->body, $runtime), new ModifyClusterTagsResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTags($clusterId, ModifyClusterTagsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->modifyClusterTagsEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutClusterEx($clusterId, ScaleOutClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '', null, $request->headers, $request->body, $runtime), new ScaleOutClusterResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutCluster($clusterId, ScaleOutClusterRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->scaleOutClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersionEx($clusterId, DescribeClusterAddonsVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/components/version', null, $request->headers, null, $runtime), new DescribeClusterAddonsVersionResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersion($clusterId, DescribeClusterAddonsVersionRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeClusterAddonsVersionEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param string $componentId
     *
     * @throws \Exception
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatusEx($clusterId, $componentId, DescribeClusterAddonUpgradeStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/components/' . $componentId . '/upgradestatus', null, $request->headers, null, $runtime), new DescribeClusterAddonUpgradeStatusResponse());
    }

    /**
     * @param string $clusterId
     * @param string $componentId
     *
     * @throws \Exception
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatus($clusterId, $componentId, DescribeClusterAddonUpgradeStatusRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeClusterAddonUpgradeStatusEx($clusterId, $componentId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeEdgeClusterAttachScriptsResponse
     */
    public function describeEdgeClusterAttachScriptsEx($clusterId, DescribeEdgeClusterAttachScriptsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/attachscript', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime), new DescribeEdgeClusterAttachScriptsResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeEdgeClusterAttachScriptsResponse
     */
    public function describeEdgeClusterAttachScripts($clusterId, DescribeEdgeClusterAttachScriptsRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeEdgeClusterAttachScriptsEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodesEx($clusterId, DeleteClusterNodesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/nodes', null, $request->headers, $request->body, $runtime), new DeleteClusterNodesResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodes($clusterId, DeleteClusterNodesRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->deleteClusterNodesEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfigEx($clusterId, DescribeClusterUserKubeconfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $clusterId . '/user_config', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime), new DescribeClusterUserKubeconfigResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfig($clusterId, DescribeClusterUserKubeconfigRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeClusterUserKubeconfigEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return AttachInstancesResponse
     */
    public function attachInstancesEx($clusterId, AttachInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/attach', null, $request->headers, $request->body, $runtime), new AttachInstancesResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return AttachInstancesResponse
     */
    public function attachInstances($clusterId, AttachInstancesRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->attachInstancesEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateClusterResponse
     */
    public function createClusterEx(CreateClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters', null, $request->headers, $request->body, $runtime), new CreateClusterResponse());
    }

    /**
     * @throws \Exception
     *
     * @return CreateClusterResponse
     */
    public function createCluster(CreateClusterRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->createClusterEx($request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ScaleClusterResponse
     */
    public function scaleClusterEx($clusterId, ScaleClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime), new ScaleClusterResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ScaleClusterResponse
     */
    public function scaleCluster($clusterId, ScaleClusterRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->scaleClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersEx(DescribeClustersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime), new DescribeClustersResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters(DescribeClustersRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeClustersEx($request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetailEx($clusterId, DescribeClusterDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime), new DescribeClusterDetailResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetail($clusterId, DescribeClusterDetailRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->describeClusterDetailEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterEx($clusterId, DeleteClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime), new DeleteClusterResponse());
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($clusterId, DeleteClusterRequest $request)
    {
        $runtime = new \AlibabaCloud\Tea\Utils\Utils\RuntimeOptions([]);

        return $this->deleteClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
