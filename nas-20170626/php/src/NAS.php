<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddTagsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveClientFromBlackListRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveClientFromBlackListResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveTagsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ResetFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ResetFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetDirQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetDirQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpgradeFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpgradeFileSystemResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class NAS extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-chengdu'          => 'nas.aliyuncs.com',
            'me-east-1'           => 'nas.ap-northeast-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'nas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicyWithOptions(DeleteLifecyclePolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteLifecyclePolicyResponse::fromMap($this->doRequest('DeleteLifecyclePolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicy(DeleteLifecyclePolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeFileSystemResponse
     */
    public function upgradeFileSystemWithOptions(UpgradeFileSystemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeFileSystemResponse::fromMap($this->doRequest('UpgradeFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeFileSystemResponse
     */
    public function upgradeFileSystem(UpgradeFileSystemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFileSystemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicyWithOptions(ModifyLifecyclePolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyLifecyclePolicyResponse::fromMap($this->doRequest('ModifyLifecyclePolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicy(ModifyLifecyclePolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicyWithOptions(CreateLifecyclePolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateLifecyclePolicyResponse::fromMap($this->doRequest('CreateLifecyclePolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicy(CreateLifecyclePolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePoliciesWithOptions(DescribeLifecyclePoliciesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLifecyclePoliciesResponse::fromMap($this->doRequest('DescribeLifecyclePolicies', 'HTTPS', 'GET', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePolicies(DescribeLifecyclePoliciesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecyclePoliciesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDirQuotasResponse
     */
    public function describeDirQuotasWithOptions(DescribeDirQuotasRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDirQuotasResponse::fromMap($this->doRequest('DescribeDirQuotas', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDirQuotasResponse
     */
    public function describeDirQuotas(DescribeDirQuotasRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirQuotasWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDirQuotaResponse
     */
    public function setDirQuotaWithOptions(SetDirQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDirQuotaResponse::fromMap($this->doRequest('SetDirQuota', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDirQuotaResponse
     */
    public function setDirQuota(SetDirQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDirQuotaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelDirQuotaResponse
     */
    public function cancelDirQuotaWithOptions(CancelDirQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelDirQuotaResponse::fromMap($this->doRequest('CancelDirQuota', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelDirQuotaResponse
     */
    public function cancelDirQuota(CancelDirQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDirQuotaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStoragePackagesResponse
     */
    public function describeStoragePackagesWithOptions(DescribeStoragePackagesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeStoragePackagesResponse::fromMap($this->doRequest('DescribeStoragePackages', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeStoragePackagesResponse
     */
    public function describeStoragePackages(DescribeStoragePackagesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoragePackagesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatisticsWithOptions(DescribeFileSystemStatisticsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeFileSystemStatisticsResponse::fromMap($this->doRequest('DescribeFileSystemStatistics', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatistics(DescribeFileSystemStatisticsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemStatisticsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLogAnalysisResponse
     */
    public function describeLogAnalysisWithOptions(DescribeLogAnalysisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLogAnalysisResponse::fromMap($this->doRequest('DescribeLogAnalysis', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLogAnalysisResponse
     */
    public function describeLogAnalysis(DescribeLogAnalysisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMountedClientsResponse
     */
    public function describeMountedClientsWithOptions(DescribeMountedClientsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMountedClientsResponse::fromMap($this->doRequest('DescribeMountedClients', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMountedClientsResponse
     */
    public function describeMountedClients(DescribeMountedClientsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountedClientsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasksWithOptions(DescribeAutoSnapshotTasksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoSnapshotTasksResponse::fromMap($this->doRequest('DescribeAutoSnapshotTasks', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasks(DescribeAutoSnapshotTasksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotTasksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackListWithOptions(RemoveClientFromBlackListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveClientFromBlackListResponse::fromMap($this->doRequest('RemoveClientFromBlackList', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackList(RemoveClientFromBlackListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClientFromBlackListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBlackListClientsResponse
     */
    public function describeBlackListClientsWithOptions(DescribeBlackListClientsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeBlackListClientsResponse::fromMap($this->doRequest('DescribeBlackListClients', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeBlackListClientsResponse
     */
    public function describeBlackListClients(DescribeBlackListClientsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlackListClientsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddClientToBlackListResponse
     */
    public function addClientToBlackListWithOptions(AddClientToBlackListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddClientToBlackListResponse::fromMap($this->doRequest('AddClientToBlackList', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddClientToBlackListResponse
     */
    public function addClientToBlackList(AddClientToBlackListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientToBlackListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLDAPConfigResponse
     */
    public function describeLDAPConfigWithOptions(DescribeLDAPConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLDAPConfigResponse::fromMap($this->doRequest('DescribeLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLDAPConfigResponse
     */
    public function describeLDAPConfig(DescribeLDAPConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfigWithOptions(ModifyLDAPConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyLDAPConfigResponse::fromMap($this->doRequest('ModifyLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfig(ModifyLDAPConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateLDAPConfigResponse
     */
    public function createLDAPConfigWithOptions(CreateLDAPConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateLDAPConfigResponse::fromMap($this->doRequest('CreateLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateLDAPConfigResponse
     */
    public function createLDAPConfig(CreateLDAPConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfigWithOptions(DeleteLDAPConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteLDAPConfigResponse::fromMap($this->doRequest('DeleteLDAPConfig', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfig(DeleteLDAPConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions(DescribeTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTagsResponse::fromMap($this->doRequest('DescribeTags', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTagsResponse
     */
    public function describeTags(DescribeTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTagsResponse
     */
    public function removeTagsWithOptions(RemoveTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveTagsResponse::fromMap($this->doRequest('RemoveTags', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTagsResponse
     */
    public function removeTags(RemoveTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsResponse
     */
    public function addTagsWithOptions(AddTagsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddTagsResponse::fromMap($this->doRequest('AddTags', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddTagsResponse
     */
    public function addTags(AddTagsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResetFileSystemResponse
     */
    public function resetFileSystemWithOptions(ResetFileSystemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResetFileSystemResponse::fromMap($this->doRequest('ResetFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResetFileSystemResponse
     */
    public function resetFileSystem(ResetFileSystemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetFileSystemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions(CreateAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->doRequest('CreateAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy(CreateAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPoliciesWithOptions(DescribeAutoSnapshotPoliciesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAutoSnapshotPoliciesResponse::fromMap($this->doRequest('DescribeAutoSnapshotPolicies', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPolicies(DescribeAutoSnapshotPoliciesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPoliciesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions(CancelAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->doRequest('CancelAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy(CancelAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions(ApplyAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->doRequest('ApplyAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy(ApplyAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions(ModifyAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->doRequest('ModifyAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy(ModifyAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions(DeleteAutoSnapshotPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->doRequest('DeleteAutoSnapshotPolicy', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy(DeleteAutoSnapshotPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions(DeleteSnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSnapshotResponse::fromMap($this->doRequest('DeleteSnapshot', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot(DeleteSnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions(CreateSnapshotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSnapshotResponse::fromMap($this->doRequest('CreateSnapshot', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot(CreateSnapshotRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions(DescribeSnapshotsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotsResponse::fromMap($this->doRequest('DescribeSnapshots', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots(DescribeSnapshotsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions(DescribeZonesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeZonesResponse::fromMap($this->doRequest('DescribeZones', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeZonesResponse
     */
    public function describeZones(DescribeZonesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccessGroupResponse
     */
    public function createAccessGroupWithOptions(CreateAccessGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAccessGroupResponse::fromMap($this->doRequest('CreateAccessGroup', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccessGroupResponse
     */
    public function createAccessGroup(CreateAccessGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTargetWithOptions(CreateMountTargetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMountTargetResponse::fromMap($this->doRequest('CreateMountTarget', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTarget(CreateMountTargetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountTargetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystemWithOptions(CreateFileSystemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateFileSystemResponse::fromMap($this->doRequest('CreateFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystem(CreateFileSystemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileSystemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccessRuleResponse
     */
    public function createAccessRuleWithOptions(CreateAccessRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAccessRuleResponse::fromMap($this->doRequest('CreateAccessRule', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAccessRuleResponse
     */
    public function createAccessRule(CreateAccessRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccessRulesResponse
     */
    public function describeAccessRulesWithOptions(DescribeAccessRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccessRulesResponse::fromMap($this->doRequest('DescribeAccessRules', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccessRulesResponse
     */
    public function describeAccessRules(DescribeAccessRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccessGroupsResponse
     */
    public function describeAccessGroupsWithOptions(DescribeAccessGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAccessGroupsResponse::fromMap($this->doRequest('DescribeAccessGroups', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAccessGroupsResponse
     */
    public function describeAccessGroups(DescribeAccessGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTargetWithOptions(DeleteMountTargetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMountTargetResponse::fromMap($this->doRequest('DeleteMountTarget', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTarget(DeleteMountTargetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountTargetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystemWithOptions(DeleteFileSystemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteFileSystemResponse::fromMap($this->doRequest('DeleteFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystem(DeleteFileSystemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileSystemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccessRuleResponse
     */
    public function deleteAccessRuleWithOptions(DeleteAccessRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccessRuleResponse::fromMap($this->doRequest('DeleteAccessRule', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccessRuleResponse
     */
    public function deleteAccessRule(DeleteAccessRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccessGroupResponse
     */
    public function deleteAccessGroupWithOptions(DeleteAccessGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccessGroupResponse::fromMap($this->doRequest('DeleteAccessGroup', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAccessGroupResponse
     */
    public function deleteAccessGroup(DeleteAccessGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAccessRuleResponse
     */
    public function modifyAccessRuleWithOptions(ModifyAccessRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAccessRuleResponse::fromMap($this->doRequest('ModifyAccessRule', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAccessRuleResponse
     */
    public function modifyAccessRule(ModifyAccessRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAccessGroupResponse
     */
    public function modifyAccessGroupWithOptions(ModifyAccessGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAccessGroupResponse::fromMap($this->doRequest('ModifyAccessGroup', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAccessGroupResponse
     */
    public function modifyAccessGroup(ModifyAccessGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions(DescribeRegionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargetsWithOptions(DescribeMountTargetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeMountTargetsResponse::fromMap($this->doRequest('DescribeMountTargets', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargets(DescribeMountTargetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountTargetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystemsWithOptions(DescribeFileSystemsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeFileSystemsResponse::fromMap($this->doRequest('DescribeFileSystems', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystems(DescribeFileSystemsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMountTargetResponse
     */
    public function modifyMountTargetWithOptions(ModifyMountTargetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyMountTargetResponse::fromMap($this->doRequest('ModifyMountTarget', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyMountTargetResponse
     */
    public function modifyMountTarget(ModifyMountTargetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMountTargetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions(ModifyFileSystemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyFileSystemResponse::fromMap($this->doRequest('ModifyFileSystem', 'HTTPS', 'POST', '2017-06-26', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystem(ModifyFileSystemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFileSystemWithOptions($request, $runtime);
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
