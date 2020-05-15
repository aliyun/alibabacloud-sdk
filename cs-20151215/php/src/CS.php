<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateServiceMeshRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateServiceMeshResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTriggerHookRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTriggerHookResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTriggerHookRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTriggerHookResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescirbeWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescirbeWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeApiVersionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeApiVersionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeWorkflowsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeWorkflowsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseClusterUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeUpgradeClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeUpgradeClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ServiceMeshAddClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ServiceMeshAddClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ServiceMeshApiServerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ServiceMeshApiServerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ServiceMeshRemoveClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ServiceMeshRemoveClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateServiceMeshRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateServiceMeshResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterResponse;
use AlibabaCloud\Tea\Roa\Roa;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class CS extends Roa
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

        return ResumeComponentUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/resume', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return PauseComponentUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/pause', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return CancelComponentUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/cancel', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return CancelWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return DescirbeWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return RemoveWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return DescribeWorkflowsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/gs/workflows', null, $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeWorkflowsResponse
     */
    public function describeWorkflows(DescribeWorkflowsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

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

        return StartWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/gs/workflow', null, $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflow(StartWorkflowRequest $request)
    {
        $runtime = new RuntimeOptions([]);

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

        return CreateServiceMeshResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/servicemesh', null, $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateServiceMeshResponse
     */
    public function createServiceMesh(CreateServiceMeshRequest $request)
    {
        $runtime = new RuntimeOptions([]);

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

        return ServiceMeshAddClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/servicemesh/' . $serviceMeshId . '/add/clusters', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return ServiceMeshRemoveClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/servicemesh/' . $serviceMeshId . '/remove/clusters', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return UpdateServiceMeshResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/servicemesh/' . $serviceMeshId . '', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return ServiceMeshApiServerResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/servicemesh/' . $serviceMeshId . '/api_proxy', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return UnInstallClusterAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/components/uninstall', null, $request->headers, $request->body->toMap(), $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return DescribeAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/components/metadata', Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddons(DescribeAddonsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddonsEx($request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgradeEx($clusterId, CancelClusterUpgradeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelClusterUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/cancel', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgrade($clusterId, CancelClusterUpgradeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelClusterUpgradeEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuotaEx(DescribeUserQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserQuotaResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/quota', null, $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuota(DescribeUserQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserQuotaEx($request, $runtime);
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

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/k8s/' . $clusterId . '/user_config', Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterV2UserKubeconfigEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodesEx($clusterId, RemoveClusterNodesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveClusterNodesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/nodes/remove', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodes($clusterId, RemoveClusterNodesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClusterNodesEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterEx($clusterId, UpgradeClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($clusterId, UpgradeClusterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgradeEx($clusterId, PauseClusterUpgradeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PauseClusterUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/pause', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgrade($clusterId, PauseClusterUpgradeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseClusterUpgradeEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeClusterEx($clusterId, ResumeUpgradeClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResumeUpgradeClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/resume', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeCluster($clusterId, ResumeUpgradeClusterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeUpgradeClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatusEx($clusterId, GetUpgradeStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetUpgradeStatusResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/status', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatus($clusterId, GetUpgradeStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUpgradeStatusEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ModifyClusterResponse
     */
    public function modifyClusterEx($clusterId, ModifyClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/api/v2/clusters/' . $clusterId . '', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return ModifyClusterResponse
     */
    public function modifyCluster($clusterId, ModifyClusterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddonsEx($clusterId, InstallClusterAddonsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return InstallClusterAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/components/install', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddons($clusterId, InstallClusterAddonsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installClusterAddonsEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTriggerHookResponse
     */
    public function deleteTriggerHookEx(DeleteTriggerHookRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteTriggerHookResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/hook/trigger', null, $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTriggerHookResponse
     */
    public function deleteTriggerHook(DeleteTriggerHookRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTriggerHookEx($request, $runtime);
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

        return ModifyClusterTagsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/tags', null, $request->headers, $request->body->toMap(), $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterTagsEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgentEx($clusterId, DescribeExternalAgentRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeExternalAgentResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $clusterId . '/external/agent/deployment', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgent($clusterId, DescribeExternalAgentRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExternalAgentEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScriptsEx($clusterId, DescribeClusterAttachScriptsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterAttachScriptsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/attachscript', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScripts($clusterId, DescribeClusterAttachScriptsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAttachScriptsEx($clusterId, $request, $runtime);
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

        return ScaleOutClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '', null, $request->headers, $request->body->toMap(), $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->scaleOutClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateTriggerHookResponse
     */
    public function createTriggerHookEx(CreateTriggerHookRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateTriggerHookResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/hook/trigger', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateTriggerHookResponse
     */
    public function createTriggerHook(CreateTriggerHookRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTriggerHookEx($request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddonsEx($clusterId, UpgradeClusterAddonsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeClusterAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/components/upgrade', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddons($clusterId, UpgradeClusterAddonsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterAddonsEx($clusterId, $request, $runtime);
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

        return DescribeClusterAddonsVersionResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/components/version', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/components/' . $componentId . '/upgradestatus', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAddonUpgradeStatusEx($clusterId, $componentId, $request, $runtime);
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

        return DeleteClusterNodesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/nodes', null, $request->headers, $request->body->toMap(), $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterNodesEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $templateId
     *
     * @throws \Exception
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateEx($templateId, DeleteTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteTemplateResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/templates/' . $templateId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $templateId
     *
     * @throws \Exception
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($templateId, DeleteTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateEx($templateId, $request, $runtime);
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

        return DescribeClusterUserKubeconfigResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $clusterId . '/user_config', Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterUserKubeconfigEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodesEx($clusterId, DescribeClusterNodesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterNodesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/nodes', Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodes($clusterId, DescribeClusterNodesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNodesEx($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogsEx($clusterId, DescribeClusterLogsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterLogsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/logs', null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     *
     * @throws \Exception
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogs($clusterId, DescribeClusterLogsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterLogsEx($clusterId, $request, $runtime);
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

        return AttachInstancesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/attach', null, $request->headers, $request->body->toMap(), $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->attachInstancesEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesEx(DescribeTemplatesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTemplatesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/templates', Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates(DescribeTemplatesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatesEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateEx(CreateTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateTemplateResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/templates', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate(CreateTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateEx($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateClusterResponse
     */
    public function createClusterEx(CreateClusterRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters', null, $request->headers, $request->body->toMap(), $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateClusterResponse
     */
    public function createCluster(CreateClusterRequest $request)
    {
        $runtime = new RuntimeOptions([]);

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

        return ScaleClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return DescribeClustersResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters', Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters(DescribeClustersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

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

        return DescribeClusterDetailResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

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

        return DeleteClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
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
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterEx($clusterId, $request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiVersionResponse
     */
    public function describeApiVersionEx(DescribeApiVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiVersionResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/version', null, $request->headers, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiVersionResponse
     */
    public function describeApiVersion(DescribeApiVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiVersionEx($request, $runtime);
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
