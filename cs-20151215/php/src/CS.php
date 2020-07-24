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
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTemplateResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponse;
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
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'cs.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cs.aliyuncs.com',
            'cn-edge-1'                   => 'cs.aliyuncs.com',
            'cn-fujian'                   => 'cs.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cs.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cs.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cs.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cs.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cs.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'cs.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cs.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cs.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cs.aliyuncs.com',
            'cn-shanghai-inner'           => 'cs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cs.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cs.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cs.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cs.aliyuncs.com',
            'cn-wuhan'                    => 'cs.aliyuncs.com',
            'cn-wulanchabu'               => 'cs.aliyuncs.com',
            'cn-yushanfang'               => 'cs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cs.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cs.aliyuncs.com',
            'eu-west-1-oxs'               => 'cs.aliyuncs.com',
            'rus-west-1-pop'              => 'cs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpointHost = $this->getEndpoint('cs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpointHost);
    }

    /**
     * @param string                         $id
     * @param DeleteKubernetesTriggerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTriggerWithOptions($id, $request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteKubernetesTriggerResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/triggers/revoke/' . $id . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                         $id
     * @param DeleteKubernetesTriggerRequest $request
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTrigger($id, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKubernetesTriggerWithOptions($id, $request, $runtime);
    }

    /**
     * @param CreateKubernetesTriggerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateKubernetesTriggerResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/triggers', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param CreateKubernetesTriggerRequest $request
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKubernetesTriggerWithOptions($request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param GetKubernetesTriggerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTriggerWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return GetKubernetesTriggerResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/triggers/' . $clusterId . '', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param GetKubernetesTriggerRequest $request
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTrigger($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKubernetesTriggerWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/tags', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param ResumeComponentUpgradeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime)
    {
        Utils::validateModel($request);

        return ResumeComponentUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/resume', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param ResumeComponentUpgradeRequest $request
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgrade($clusterid, $componentid, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string                       $clusterid
     * @param string                       $componentid
     * @param PauseComponentUpgradeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime)
    {
        Utils::validateModel($request);

        return PauseComponentUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/pause', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                       $clusterid
     * @param string                       $componentid
     * @param PauseComponentUpgradeRequest $request
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgrade($clusterid, $componentid, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param CancelComponentUpgradeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime)
    {
        Utils::validateModel($request);

        return CancelComponentUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/' . $componentid . '/cancel', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param CancelComponentUpgradeRequest $request
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgrade($clusterid, $componentid, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string                $workflowName
     * @param CancelWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CancelWorkflowResponse
     */
    public function cancelWorkflowWithOptions($workflowName, $request, $runtime)
    {
        Utils::validateModel($request);

        return CancelWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                $workflowName
     * @param CancelWorkflowRequest $request
     *
     * @return CancelWorkflowResponse
     */
    public function cancelWorkflow($workflowName, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelWorkflowWithOptions($workflowName, $request, $runtime);
    }

    /**
     * @param string                  $workflowName
     * @param DescirbeWorkflowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescirbeWorkflowResponse
     */
    public function descirbeWorkflowWithOptions($workflowName, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescirbeWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                  $workflowName
     * @param DescirbeWorkflowRequest $request
     *
     * @return DescirbeWorkflowResponse
     */
    public function descirbeWorkflow($workflowName, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descirbeWorkflowWithOptions($workflowName, $request, $runtime);
    }

    /**
     * @param string                $workflowName
     * @param RemoveWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RemoveWorkflowResponse
     */
    public function removeWorkflowWithOptions($workflowName, $request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/gs/workflow/' . $workflowName . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                $workflowName
     * @param RemoveWorkflowRequest $request
     *
     * @return RemoveWorkflowResponse
     */
    public function removeWorkflow($workflowName, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeWorkflowWithOptions($workflowName, $request, $runtime);
    }

    /**
     * @param DescribeWorkflowsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeWorkflowsResponse
     */
    public function describeWorkflowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeWorkflowsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/gs/workflows', null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeWorkflowsRequest $request
     *
     * @return DescribeWorkflowsResponse
     */
    public function describeWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkflowsWithOptions($request, $runtime);
    }

    /**
     * @param StartWorkflowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartWorkflowResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/gs/workflow', null, $request->headers, null, $runtime));
    }

    /**
     * @param StartWorkflowRequest $request
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param string                        $clusterId
     * @param UnInstallClusterAddonsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddonsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return UnInstallClusterAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/components/uninstall', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                        $clusterId
     * @param UnInstallClusterAddonsRequest $request
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddons($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unInstallClusterAddonsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeAddonsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddonsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/components/metadata', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeAddonsRequest $request
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddonsWithOptions($request, $runtime);
    }

    /**
     * @param string                                  $clusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpireWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/k8s/' . $clusterId . '/user_config/expire', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                                  $clusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request
     *
     * @return UpdateK8sClusterUserConfigExpireResponse
     */
    public function updateK8sClusterUserConfigExpire($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateK8sClusterUserConfigExpireWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param CancelClusterUpgradeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgradeWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return CancelClusterUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/cancel', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param CancelClusterUpgradeRequest $request
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgrade($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelClusterUpgradeWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeUserQuotaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserQuotaResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/quota', null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeUserQuotaRequest $request
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @param string                                 $clusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfigWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/k8s/' . $clusterId . '/user_config', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string                                 $clusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfig($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterV2UserKubeconfigWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                    $clusterId
     * @param RemoveClusterNodesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodesWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveClusterNodesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/nodes/remove', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                    $clusterId
     * @param RemoveClusterNodesRequest $request
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodes($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClusterNodesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                $clusterId
     * @param UpgradeClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                $clusterId
     * @param UpgradeClusterRequest $request
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                     $clusterId
     * @param PauseClusterUpgradeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgradeWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return PauseClusterUpgradeResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/pause', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                     $clusterId
     * @param PauseClusterUpgradeRequest $request
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgrade($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseClusterUpgradeWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param ResumeUpgradeClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeClusterWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return ResumeUpgradeClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/resume', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param ResumeUpgradeClusterRequest $request
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeUpgradeClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                  $clusterId
     * @param GetUpgradeStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatusWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return GetUpgradeStatusResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/clusters/' . $clusterId . '/upgrade/status', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                  $clusterId
     * @param GetUpgradeStatusRequest $request
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatus($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUpgradeStatusWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string               $clusterId
     * @param ModifyClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyClusterResponse
     */
    public function modifyClusterWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/api/v2/clusters/' . $clusterId . '', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string               $clusterId
     * @param ModifyClusterRequest $request
     *
     * @return ModifyClusterResponse
     */
    public function modifyCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param InstallClusterAddonsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddonsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return InstallClusterAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/components/install', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param InstallClusterAddonsRequest $request
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddons($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installClusterAddonsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                   $clusterId
     * @param ModifyClusterTagsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTagsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyClusterTagsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/tags', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                   $clusterId
     * @param ModifyClusterTagsRequest $request
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTags($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterTagsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                       $clusterId
     * @param DescribeExternalAgentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgentWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeExternalAgentResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $clusterId . '/external/agent/deployment', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                       $clusterId
     * @param DescribeExternalAgentRequest $request
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgent($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExternalAgentWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                              $clusterId
     * @param DescribeClusterAttachScriptsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScriptsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterAttachScriptsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/attachscript', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                              $clusterId
     * @param DescribeClusterAttachScriptsRequest $request
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScripts($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAttachScriptsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                 $clusterId
     * @param ScaleOutClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutClusterWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return ScaleOutClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $clusterId . '', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                 $clusterId
     * @param ScaleOutClusterRequest $request
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scaleOutClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                          $clusterId
     * @param DescribeClusterResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResourcesWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterResourcesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/resources', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                          $clusterId
     * @param DescribeClusterResourcesRequest $request
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResources($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterResourcesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param UpgradeClusterAddonsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddonsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeClusterAddonsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/components/upgrade', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param UpgradeClusterAddonsRequest $request
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddons($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterAddonsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                              $clusterId
     * @param DescribeClusterAddonsVersionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersionWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterAddonsVersionResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/components/version', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                              $clusterId
     * @param DescribeClusterAddonsVersionRequest $request
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersion($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAddonsVersionWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                                   $clusterId
     * @param string                                   $componentId
     * @param DescribeClusterAddonUpgradeStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatusWithOptions($clusterId, $componentId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/components/' . $componentId . '/upgradestatus', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                                   $clusterId
     * @param string                                   $componentId
     * @param DescribeClusterAddonUpgradeStatusRequest $request
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatus($clusterId, $componentId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAddonUpgradeStatusWithOptions($clusterId, $componentId, $request, $runtime);
    }

    /**
     * @param string                    $clusterId
     * @param DeleteClusterNodesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodesWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteClusterNodesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/nodes', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                    $clusterId
     * @param DeleteClusterNodesRequest $request
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodes($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterNodesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                $templateId
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($templateId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTemplateResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/templates/' . $templateId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                $templateId
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($templateId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($templateId, $request, $runtime);
    }

    /**
     * @param string                               $clusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfigWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterUserKubeconfigResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $clusterId . '/user_config', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string                               $clusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfig($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterUserKubeconfigWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterNodesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodesWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterNodesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/nodes', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string                      $clusterId
     * @param DescribeClusterNodesRequest $request
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodes($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNodesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                     $clusterId
     * @param DescribeClusterLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogsWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterLogsResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '/logs', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                     $clusterId
     * @param DescribeClusterLogsRequest $request
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogs($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterLogsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string                 $clusterId
     * @param AttachInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AttachInstancesResponse
     */
    public function attachInstancesWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return AttachInstancesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterId . '/attach', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string                 $clusterId
     * @param AttachInstancesRequest $request
     *
     * @return AttachInstancesResponse
     */
    public function attachInstances($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachInstancesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeTemplatesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTemplatesResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/templates', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateTemplateResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/templates', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param string              $clusterId
     * @param ScaleClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ScaleClusterResponse
     */
    public function scaleClusterWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return ScaleClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string              $clusterId
     * @param ScaleClusterRequest $request
     *
     * @return ScaleClusterResponse
     */
    public function scaleCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scaleClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClustersResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters', Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersWithOptions($request, $runtime);
    }

    /**
     * @param string                       $clusterId
     * @param DescribeClusterDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetailWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClusterDetailResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string                       $clusterId
     * @param DescribeClusterDetailRequest $request
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetail($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterDetailWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string               $clusterId
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($clusterId, $request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteClusterResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $clusterId . '', null, $request->headers, null, $runtime));
    }

    /**
     * @param string               $clusterId
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeApiVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiVersionResponse
     */
    public function describeApiVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiVersionResponse::fromMap($this->doRequest('2015-12-15', 'HTTPS', 'GET', 'AK', '/version', null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeApiVersionRequest $request
     *
     * @return DescribeApiVersionResponse
     */
    public function describeApiVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiVersionWithOptions($request, $runtime);
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
