<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Tea\Roa\Roa;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescirbeWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescirbeWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeWorkflowsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeWorkflowsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\StartWorkflowResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateK8sClusterUserConfigExpireResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseClusterUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeUpgradeClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeUpgradeClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTriggerHookRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTriggerHookResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTriggerHookRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTriggerHookResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeApiVersionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeApiVersionResponse;

class CS extends Roa {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "regional";
        $this->_endpointMap = [
            "ap-northeast-2-pop" => "cs.aliyuncs.com",
            "cn-beijing-finance-1" => "cs.aliyuncs.com",
            "cn-beijing-finance-pop" => "cs.aliyuncs.com",
            "cn-beijing-gov-1" => "cs.aliyuncs.com",
            "cn-beijing-nu16-b01" => "cs.aliyuncs.com",
            "cn-edge-1" => "cs.aliyuncs.com",
            "cn-fujian" => "cs.aliyuncs.com",
            "cn-haidian-cm12-c01" => "cs.aliyuncs.com",
            "cn-hangzhou-bj-b01" => "cs.aliyuncs.com",
            "cn-hangzhou-finance" => "cs.aliyuncs.com",
            "cn-hangzhou-internal-prod-1" => "cs.aliyuncs.com",
            "cn-hangzhou-internal-test-1" => "cs.aliyuncs.com",
            "cn-hangzhou-internal-test-2" => "cs.aliyuncs.com",
            "cn-hangzhou-internal-test-3" => "cs.aliyuncs.com",
            "cn-hangzhou-test-306" => "cs.aliyuncs.com",
            "cn-hongkong-finance-pop" => "cs.aliyuncs.com",
            "cn-huhehaote-nebula-1" => "cs.aliyuncs.com",
            "cn-qingdao-nebula" => "cs.aliyuncs.com",
            "cn-shanghai-et15-b01" => "cs.aliyuncs.com",
            "cn-shanghai-et2-b01" => "cs.aliyuncs.com",
            "cn-shanghai-finance-1" => "cs.aliyuncs.com",
            "cn-shanghai-inner" => "cs.aliyuncs.com",
            "cn-shanghai-internal-test-1" => "cs.aliyuncs.com",
            "cn-shenzhen-finance-1" => "cs.aliyuncs.com",
            "cn-shenzhen-inner" => "cs.aliyuncs.com",
            "cn-shenzhen-st4-d01" => "cs.aliyuncs.com",
            "cn-shenzhen-su18-b01" => "cs.aliyuncs.com",
            "cn-wuhan" => "cs.aliyuncs.com",
            "cn-wulanchabu" => "cs.aliyuncs.com",
            "cn-yushanfang" => "cs.aliyuncs.com",
            "cn-zhangbei-na61-b01" => "cs.aliyuncs.com",
            "cn-zhangjiakou-na62-a01" => "cs.aliyuncs.com",
            "cn-zhengzhou-nebula-1" => "cs.aliyuncs.com",
            "eu-west-1-oxs" => "cs.aliyuncs.com",
            "rus-west-1-pop" => "cs.aliyuncs.com"
            ];
        $this->checkConfig($config);
        $this->_endpointHost = $this->getEndpoint("cs", $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpointHost);
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     * @param ResumeComponentUpgradeRequest $request
     * @param RuntimeOptions $runtime
     * @return ResumeComponentUpgradeResponse
     * @throws \Exception
     */
    public function resumeComponentUpgradeWithOptions($clusterid, $componentid, ResumeComponentUpgradeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ResumeComponentUpgradeResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterid . "/components/" . $componentid . "/resume", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     * @param ResumeComponentUpgradeRequest $request
     * @return ResumeComponentUpgradeResponse
     * @throws \Exception
     */
    public function resumeComponentUpgrade($clusterid, $componentid, ResumeComponentUpgradeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->resumeComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     * @param PauseComponentUpgradeRequest $request
     * @param RuntimeOptions $runtime
     * @return PauseComponentUpgradeResponse
     * @throws \Exception
     */
    public function pauseComponentUpgradeWithOptions($clusterid, $componentid, PauseComponentUpgradeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return PauseComponentUpgradeResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterid . "/components/" . $componentid . "/pause", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     * @param PauseComponentUpgradeRequest $request
     * @return PauseComponentUpgradeResponse
     * @throws \Exception
     */
    public function pauseComponentUpgrade($clusterid, $componentid, PauseComponentUpgradeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->pauseComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     * @param CancelComponentUpgradeRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelComponentUpgradeResponse
     * @throws \Exception
     */
    public function cancelComponentUpgradeWithOptions($clusterid, $componentid, CancelComponentUpgradeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelComponentUpgradeResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterid . "/components/" . $componentid . "/cancel", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     * @param CancelComponentUpgradeRequest $request
     * @return CancelComponentUpgradeResponse
     * @throws \Exception
     */
    public function cancelComponentUpgrade($clusterid, $componentid, CancelComponentUpgradeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelComponentUpgradeWithOptions($clusterid, $componentid, $request, $runtime);
    }

    /**
     * @param string $workflowName
     * @param CancelWorkflowRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelWorkflowResponse
     * @throws \Exception
     */
    public function cancelWorkflowWithOptions($workflowName, CancelWorkflowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelWorkflowResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/gs/workflow/" . $workflowName . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $workflowName
     * @param CancelWorkflowRequest $request
     * @return CancelWorkflowResponse
     * @throws \Exception
     */
    public function cancelWorkflow($workflowName, CancelWorkflowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelWorkflowWithOptions($workflowName, $request, $runtime);
    }

    /**
     * @param string $workflowName
     * @param DescirbeWorkflowRequest $request
     * @param RuntimeOptions $runtime
     * @return DescirbeWorkflowResponse
     * @throws \Exception
     */
    public function descirbeWorkflowWithOptions($workflowName, DescirbeWorkflowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescirbeWorkflowResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflow/" . $workflowName . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $workflowName
     * @param DescirbeWorkflowRequest $request
     * @return DescirbeWorkflowResponse
     * @throws \Exception
     */
    public function descirbeWorkflow($workflowName, DescirbeWorkflowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->descirbeWorkflowWithOptions($workflowName, $request, $runtime);
    }

    /**
     * @param string $workflowName
     * @param RemoveWorkflowRequest $request
     * @param RuntimeOptions $runtime
     * @return RemoveWorkflowResponse
     * @throws \Exception
     */
    public function removeWorkflowWithOptions($workflowName, RemoveWorkflowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RemoveWorkflowResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/gs/workflow/" . $workflowName . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $workflowName
     * @param RemoveWorkflowRequest $request
     * @return RemoveWorkflowResponse
     * @throws \Exception
     */
    public function removeWorkflow($workflowName, RemoveWorkflowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->removeWorkflowWithOptions($workflowName, $request, $runtime);
    }

    /**
     * @param DescribeWorkflowsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeWorkflowsResponse
     * @throws \Exception
     */
    public function describeWorkflowsWithOptions(DescribeWorkflowsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeWorkflowsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/gs/workflows", null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeWorkflowsRequest $request
     * @return DescribeWorkflowsResponse
     * @throws \Exception
     */
    public function describeWorkflows(DescribeWorkflowsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeWorkflowsWithOptions($request, $runtime);
    }

    /**
     * @param StartWorkflowRequest $request
     * @param RuntimeOptions $runtime
     * @return StartWorkflowResponse
     * @throws \Exception
     */
    public function startWorkflowWithOptions(StartWorkflowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return StartWorkflowResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/gs/workflow", null, $request->headers, null, $runtime));
    }

    /**
     * @param StartWorkflowRequest $request
     * @return StartWorkflowResponse
     * @throws \Exception
     */
    public function startWorkflow(StartWorkflowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->startWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param UnInstallClusterAddonsRequest $request
     * @param RuntimeOptions $runtime
     * @return UnInstallClusterAddonsResponse
     * @throws \Exception
     */
    public function unInstallClusterAddonsWithOptions($clusterId, UnInstallClusterAddonsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UnInstallClusterAddonsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterId . "/components/uninstall", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param UnInstallClusterAddonsRequest $request
     * @return UnInstallClusterAddonsResponse
     * @throws \Exception
     */
    public function unInstallClusterAddons($clusterId, UnInstallClusterAddonsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->unInstallClusterAddonsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeAddonsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeAddonsResponse
     * @throws \Exception
     */
    public function describeAddonsWithOptions(DescribeAddonsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeAddonsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/components/metadata", Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeAddonsRequest $request
     * @return DescribeAddonsResponse
     * @throws \Exception
     */
    public function describeAddons(DescribeAddonsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeAddonsWithOptions($request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateK8sClusterUserConfigExpireResponse
     * @throws \Exception
     */
    public function updateK8sClusterUserConfigExpireWithOptions($clusterId, UpdateK8sClusterUserConfigExpireRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateK8sClusterUserConfigExpireResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/k8s/" . $clusterId . "/user_config/expire", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param UpdateK8sClusterUserConfigExpireRequest $request
     * @return UpdateK8sClusterUserConfigExpireResponse
     * @throws \Exception
     */
    public function updateK8sClusterUserConfigExpire($clusterId, UpdateK8sClusterUserConfigExpireRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateK8sClusterUserConfigExpireWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param CancelClusterUpgradeRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelClusterUpgradeResponse
     * @throws \Exception
     */
    public function cancelClusterUpgradeWithOptions($clusterId, CancelClusterUpgradeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelClusterUpgradeResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" . $clusterId . "/upgrade/cancel", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param CancelClusterUpgradeRequest $request
     * @return CancelClusterUpgradeResponse
     * @throws \Exception
     */
    public function cancelClusterUpgrade($clusterId, CancelClusterUpgradeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelClusterUpgradeWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeUserQuotaRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserQuotaResponse
     * @throws \Exception
     */
    public function describeUserQuotaWithOptions(DescribeUserQuotaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserQuotaResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/quota", null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeUserQuotaRequest $request
     * @return DescribeUserQuotaResponse
     * @throws \Exception
     */
    public function describeUserQuota(DescribeUserQuotaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterV2UserKubeconfigResponse
     * @throws \Exception
     */
    public function describeClusterV2UserKubeconfigWithOptions($clusterId, DescribeClusterV2UserKubeconfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/k8s/" . $clusterId . "/user_config", Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     * @return DescribeClusterV2UserKubeconfigResponse
     * @throws \Exception
     */
    public function describeClusterV2UserKubeconfig($clusterId, DescribeClusterV2UserKubeconfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterV2UserKubeconfigWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param RemoveClusterNodesRequest $request
     * @param RuntimeOptions $runtime
     * @return RemoveClusterNodesResponse
     * @throws \Exception
     */
    public function removeClusterNodesWithOptions($clusterId, RemoveClusterNodesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RemoveClusterNodesResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" . $clusterId . "/nodes/remove", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param RemoveClusterNodesRequest $request
     * @return RemoveClusterNodesResponse
     * @throws \Exception
     */
    public function removeClusterNodes($clusterId, RemoveClusterNodesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->removeClusterNodesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param UpgradeClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return UpgradeClusterResponse
     * @throws \Exception
     */
    public function upgradeClusterWithOptions($clusterId, UpgradeClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpgradeClusterResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" . $clusterId . "/upgrade", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param UpgradeClusterRequest $request
     * @return UpgradeClusterResponse
     * @throws \Exception
     */
    public function upgradeCluster($clusterId, UpgradeClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->upgradeClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param PauseClusterUpgradeRequest $request
     * @param RuntimeOptions $runtime
     * @return PauseClusterUpgradeResponse
     * @throws \Exception
     */
    public function pauseClusterUpgradeWithOptions($clusterId, PauseClusterUpgradeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return PauseClusterUpgradeResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" . $clusterId . "/upgrade/pause", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param PauseClusterUpgradeRequest $request
     * @return PauseClusterUpgradeResponse
     * @throws \Exception
     */
    public function pauseClusterUpgrade($clusterId, PauseClusterUpgradeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->pauseClusterUpgradeWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param ResumeUpgradeClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return ResumeUpgradeClusterResponse
     * @throws \Exception
     */
    public function resumeUpgradeClusterWithOptions($clusterId, ResumeUpgradeClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ResumeUpgradeClusterResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" . $clusterId . "/upgrade/resume", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param ResumeUpgradeClusterRequest $request
     * @return ResumeUpgradeClusterResponse
     * @throws \Exception
     */
    public function resumeUpgradeCluster($clusterId, ResumeUpgradeClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->resumeUpgradeClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param GetUpgradeStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return GetUpgradeStatusResponse
     * @throws \Exception
     */
    public function getUpgradeStatusWithOptions($clusterId, GetUpgradeStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetUpgradeStatusResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/api/v2/clusters/" . $clusterId . "/upgrade/status", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param GetUpgradeStatusRequest $request
     * @return GetUpgradeStatusResponse
     * @throws \Exception
     */
    public function getUpgradeStatus($clusterId, GetUpgradeStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getUpgradeStatusWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param ModifyClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyClusterResponse
     * @throws \Exception
     */
    public function modifyClusterWithOptions($clusterId, ModifyClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyClusterResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/api/v2/clusters/" . $clusterId . "", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param ModifyClusterRequest $request
     * @return ModifyClusterResponse
     * @throws \Exception
     */
    public function modifyCluster($clusterId, ModifyClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param InstallClusterAddonsRequest $request
     * @param RuntimeOptions $runtime
     * @return InstallClusterAddonsResponse
     * @throws \Exception
     */
    public function installClusterAddonsWithOptions($clusterId, InstallClusterAddonsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return InstallClusterAddonsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterId . "/components/install", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param InstallClusterAddonsRequest $request
     * @return InstallClusterAddonsResponse
     * @throws \Exception
     */
    public function installClusterAddons($clusterId, InstallClusterAddonsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->installClusterAddonsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DeleteTriggerHookRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteTriggerHookResponse
     * @throws \Exception
     */
    public function deleteTriggerHookWithOptions(DeleteTriggerHookRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteTriggerHookResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/hook/trigger", null, $request->headers, null, $runtime));
    }

    /**
     * @param DeleteTriggerHookRequest $request
     * @return DeleteTriggerHookResponse
     * @throws \Exception
     */
    public function deleteTriggerHook(DeleteTriggerHookRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteTriggerHookWithOptions($request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param ModifyClusterTagsRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyClusterTagsResponse
     * @throws \Exception
     */
    public function modifyClusterTagsWithOptions($clusterId, ModifyClusterTagsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyClusterTagsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterId . "/tags", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param ModifyClusterTagsRequest $request
     * @return ModifyClusterTagsResponse
     * @throws \Exception
     */
    public function modifyClusterTags($clusterId, ModifyClusterTagsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyClusterTagsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeExternalAgentRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeExternalAgentResponse
     * @throws \Exception
     */
    public function describeExternalAgentWithOptions($clusterId, DescribeExternalAgentRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeExternalAgentResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" . $clusterId . "/external/agent/deployment", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeExternalAgentRequest $request
     * @return DescribeExternalAgentResponse
     * @throws \Exception
     */
    public function describeExternalAgent($clusterId, DescribeExternalAgentRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeExternalAgentWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterAttachScriptsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterAttachScriptsResponse
     * @throws \Exception
     */
    public function describeClusterAttachScriptsWithOptions($clusterId, DescribeClusterAttachScriptsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterAttachScriptsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterId . "/attachscript", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterAttachScriptsRequest $request
     * @return DescribeClusterAttachScriptsResponse
     * @throws \Exception
     */
    public function describeClusterAttachScripts($clusterId, DescribeClusterAttachScriptsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterAttachScriptsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param ScaleOutClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return ScaleOutClusterResponse
     * @throws \Exception
     */
    public function scaleOutClusterWithOptions($clusterId, ScaleOutClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ScaleOutClusterResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/api/v2/clusters/" . $clusterId . "", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param ScaleOutClusterRequest $request
     * @return ScaleOutClusterResponse
     * @throws \Exception
     */
    public function scaleOutCluster($clusterId, ScaleOutClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->scaleOutClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterResourcesResponse
     * @throws \Exception
     */
    public function describeClusterResourcesWithOptions($clusterId, DescribeClusterResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterResourcesResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" . $clusterId . "/resources", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterResourcesRequest $request
     * @return DescribeClusterResourcesResponse
     * @throws \Exception
     */
    public function describeClusterResources($clusterId, DescribeClusterResourcesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterResourcesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param CreateTriggerHookRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateTriggerHookResponse
     * @throws \Exception
     */
    public function createTriggerHookWithOptions(CreateTriggerHookRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateTriggerHookResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/hook/trigger", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param CreateTriggerHookRequest $request
     * @return CreateTriggerHookResponse
     * @throws \Exception
     */
    public function createTriggerHook(CreateTriggerHookRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createTriggerHookWithOptions($request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param UpgradeClusterAddonsRequest $request
     * @param RuntimeOptions $runtime
     * @return UpgradeClusterAddonsResponse
     * @throws \Exception
     */
    public function upgradeClusterAddonsWithOptions($clusterId, UpgradeClusterAddonsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpgradeClusterAddonsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterId . "/components/upgrade", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param UpgradeClusterAddonsRequest $request
     * @return UpgradeClusterAddonsResponse
     * @throws \Exception
     */
    public function upgradeClusterAddons($clusterId, UpgradeClusterAddonsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->upgradeClusterAddonsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterAddonsVersionRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterAddonsVersionResponse
     * @throws \Exception
     */
    public function describeClusterAddonsVersionWithOptions($clusterId, DescribeClusterAddonsVersionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterAddonsVersionResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" . $clusterId . "/components/version", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterAddonsVersionRequest $request
     * @return DescribeClusterAddonsVersionResponse
     * @throws \Exception
     */
    public function describeClusterAddonsVersion($clusterId, DescribeClusterAddonsVersionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterAddonsVersionWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param string $componentId
     * @param DescribeClusterAddonUpgradeStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterAddonUpgradeStatusResponse
     * @throws \Exception
     */
    public function describeClusterAddonUpgradeStatusWithOptions($clusterId, $componentId, DescribeClusterAddonUpgradeStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" . $clusterId . "/components/" . $componentId . "/upgradestatus", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param string $componentId
     * @param DescribeClusterAddonUpgradeStatusRequest $request
     * @return DescribeClusterAddonUpgradeStatusResponse
     * @throws \Exception
     */
    public function describeClusterAddonUpgradeStatus($clusterId, $componentId, DescribeClusterAddonUpgradeStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterAddonUpgradeStatusWithOptions($clusterId, $componentId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DeleteClusterNodesRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteClusterNodesResponse
     * @throws \Exception
     */
    public function deleteClusterNodesWithOptions($clusterId, DeleteClusterNodesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteClusterNodesResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterId . "/nodes", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DeleteClusterNodesRequest $request
     * @return DeleteClusterNodesResponse
     * @throws \Exception
     */
    public function deleteClusterNodes($clusterId, DeleteClusterNodesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteClusterNodesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $templateId
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteTemplateResponse
     * @throws \Exception
     */
    public function deleteTemplateWithOptions($templateId, DeleteTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteTemplateResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/templates/" . $templateId . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $templateId
     * @param DeleteTemplateRequest $request
     * @return DeleteTemplateResponse
     * @throws \Exception
     */
    public function deleteTemplate($templateId, DeleteTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteTemplateWithOptions($templateId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterUserKubeconfigResponse
     * @throws \Exception
     */
    public function describeClusterUserKubeconfigWithOptions($clusterId, DescribeClusterUserKubeconfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterUserKubeconfigResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/k8s/" . $clusterId . "/user_config", Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     * @return DescribeClusterUserKubeconfigResponse
     * @throws \Exception
     */
    public function describeClusterUserKubeconfig($clusterId, DescribeClusterUserKubeconfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterUserKubeconfigWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterNodesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterNodesResponse
     * @throws \Exception
     */
    public function describeClusterNodesWithOptions($clusterId, DescribeClusterNodesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterNodesResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" . $clusterId . "/nodes", Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterNodesRequest $request
     * @return DescribeClusterNodesResponse
     * @throws \Exception
     */
    public function describeClusterNodes($clusterId, DescribeClusterNodesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterNodesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterLogsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterLogsResponse
     * @throws \Exception
     */
    public function describeClusterLogsWithOptions($clusterId, DescribeClusterLogsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterLogsResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" . $clusterId . "/logs", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterLogsRequest $request
     * @return DescribeClusterLogsResponse
     * @throws \Exception
     */
    public function describeClusterLogs($clusterId, DescribeClusterLogsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterLogsWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param AttachInstancesRequest $request
     * @param RuntimeOptions $runtime
     * @return AttachInstancesResponse
     * @throws \Exception
     */
    public function attachInstancesWithOptions($clusterId, AttachInstancesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AttachInstancesResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters/" . $clusterId . "/attach", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param string $clusterId
     * @param AttachInstancesRequest $request
     * @return AttachInstancesResponse
     * @throws \Exception
     */
    public function attachInstances($clusterId, AttachInstancesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->attachInstancesWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeTemplatesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeTemplatesResponse
     * @throws \Exception
     */
    public function describeTemplatesWithOptions(DescribeTemplatesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeTemplatesResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/templates", Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeTemplatesRequest $request
     * @return DescribeTemplatesResponse
     * @throws \Exception
     */
    public function describeTemplates(DescribeTemplatesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateTemplateResponse
     * @throws \Exception
     */
    public function createTemplateWithOptions(CreateTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateTemplateResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/templates", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     * @return CreateTemplateResponse
     * @throws \Exception
     */
    public function createTemplate(CreateTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateClusterResponse
     * @throws \Exception
     */
    public function createClusterWithOptions(CreateClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateClusterResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "POST", "AK", "/clusters", null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     * @return CreateClusterResponse
     * @throws \Exception
     */
    public function createCluster(CreateClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param ScaleClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return ScaleClusterResponse
     * @throws \Exception
     */
    public function scaleClusterWithOptions($clusterId, ScaleClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ScaleClusterResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "PUT", "AK", "/clusters/" . $clusterId . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param ScaleClusterRequest $request
     * @return ScaleClusterResponse
     * @throws \Exception
     */
    public function scaleCluster($clusterId, ScaleClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->scaleClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClustersResponse
     * @throws \Exception
     */
    public function describeClustersWithOptions(DescribeClustersRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClustersResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters", Utils::stringifyMapValue($request->query), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request
     * @return DescribeClustersResponse
     * @throws \Exception
     */
    public function describeClusters(DescribeClustersRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClustersWithOptions($request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeClusterDetailResponse
     * @throws \Exception
     */
    public function describeClusterDetailWithOptions($clusterId, DescribeClusterDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeClusterDetailResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/clusters/" . $clusterId . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DescribeClusterDetailRequest $request
     * @return DescribeClusterDetailResponse
     * @throws \Exception
     */
    public function describeClusterDetail($clusterId, DescribeClusterDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeClusterDetailWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param string $clusterId
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteClusterResponse
     * @throws \Exception
     */
    public function deleteClusterWithOptions($clusterId, DeleteClusterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteClusterResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "DELETE", "AK", "/clusters/" . $clusterId . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $clusterId
     * @param DeleteClusterRequest $request
     * @return DeleteClusterResponse
     * @throws \Exception
     */
    public function deleteCluster($clusterId, DeleteClusterRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteClusterWithOptions($clusterId, $request, $runtime);
    }

    /**
     * @param DescribeApiVersionRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeApiVersionResponse
     * @throws \Exception
     */
    public function describeApiVersionWithOptions(DescribeApiVersionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeApiVersionResponse::fromMap($this->doRequest("2015-12-15", "HTTPS", "GET", "AK", "/version", null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeApiVersionRequest $request
     * @return DescribeApiVersionResponse
     * @throws \Exception
     */
    public function describeApiVersion(DescribeApiVersionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeApiVersionWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
