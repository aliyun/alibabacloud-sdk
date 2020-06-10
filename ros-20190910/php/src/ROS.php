<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CancelUpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackGroupDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ExecuteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ExecuteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetResourceTypeTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackDriftDetectionStatusRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackDriftDetectionStatusResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResourceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResourceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackEventsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetDeletionProtectionRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetDeletionProtectionResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\SignalResourceRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\SignalResourceResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopStackGroupOperationRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\StopStackGroupOperationResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackTemplateByResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackTemplateByResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class ROS extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ros', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtectionWithOptions(SetDeletionProtectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDeletionProtectionResponse::fromMap($this->doRequest('SetDeletionProtection', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtection(SetDeletionProtectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResourcesWithOptions(UpdateStackTemplateByResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackTemplateByResourcesResponse::fromMap($this->doRequest('UpdateStackTemplateByResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResources(UpdateStackTemplateByResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackTemplateByResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatusWithOptions(GetStackDriftDetectionStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackDriftDetectionStatusResponse::fromMap($this->doRequest('GetStackDriftDetectionStatus', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatus(GetStackDriftDetectionStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackDriftDetectionStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDriftWithOptions(DetectStackGroupDriftRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetectStackGroupDriftResponse::fromMap($this->doRequest('DetectStackGroupDrift', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDrift(DetectStackGroupDriftRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackGroupDriftWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDriftsWithOptions(ListStackResourceDriftsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStackResourceDriftsResponse::fromMap($this->doRequest('ListStackResourceDrifts', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDrifts(ListStackResourceDriftsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourceDriftsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDriftWithOptions(DetectStackResourceDriftRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetectStackResourceDriftResponse::fromMap($this->doRequest('DetectStackResourceDrift', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDrift(DetectStackResourceDriftRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackResourceDriftWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDriftWithOptions(DetectStackDriftRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetectStackDriftResponse::fromMap($this->doRequest('DetectStackDrift', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDrift(DetectStackDriftRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackDriftWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstancesWithOptions(UpdateStackInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackInstancesResponse::fromMap($this->doRequest('UpdateStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstances(UpdateStackInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperationsWithOptions(ListStackGroupOperationsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStackGroupOperationsResponse::fromMap($this->doRequest('ListStackGroupOperations', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperations(ListStackGroupOperationsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroupWithOptions(GetStackGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackGroupResponse::fromMap($this->doRequest('GetStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroup(GetStackGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperationWithOptions(GetStackGroupOperationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackGroupOperationResponse::fromMap($this->doRequest('GetStackGroupOperation', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperation(GetStackGroupOperationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroupsWithOptions(ListStackGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStackGroupsResponse::fromMap($this->doRequest('ListStackGroups', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroups(ListStackGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstancesWithOptions(CreateStackInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateStackInstancesResponse::fromMap($this->doRequest('CreateStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstances(CreateStackInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroupWithOptions(CreateStackGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateStackGroupResponse::fromMap($this->doRequest('CreateStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroup(CreateStackGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstanceWithOptions(GetStackInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackInstanceResponse::fromMap($this->doRequest('GetStackInstance', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstance(GetStackInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroupWithOptions(UpdateStackGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackGroupResponse::fromMap($this->doRequest('UpdateStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroup(UpdateStackGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstancesWithOptions(ListStackInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStackInstancesResponse::fromMap($this->doRequest('ListStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstances(ListStackInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResultsWithOptions(ListStackGroupOperationResultsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStackGroupOperationResultsResponse::fromMap($this->doRequest('ListStackGroupOperationResults', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResults(ListStackGroupOperationResultsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationResultsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperationWithOptions(StopStackGroupOperationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopStackGroupOperationResponse::fromMap($this->doRequest('StopStackGroupOperation', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperation(StopStackGroupOperationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroupWithOptions(DeleteStackGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteStackGroupResponse::fromMap($this->doRequest('DeleteStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroup(DeleteStackGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstancesWithOptions(DeleteStackInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteStackInstancesResponse::fromMap($this->doRequest('DeleteStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstances(DeleteStackInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions(ListTagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources(ListTagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions(UntagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResources(UntagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions(TagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResources(TagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions(DeleteTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteTemplateResponse::fromMap($this->doRequest('DeleteTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate(DeleteTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions(UpdateTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateTemplateResponse::fromMap($this->doRequest('UpdateTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate(UpdateTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions(ListTemplatesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTemplatesResponse::fromMap($this->doRequest('ListTemplates', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates(ListTemplatesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions(CreateTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateTemplateResponse::fromMap($this->doRequest('CreateTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate(CreateTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateStackResponse
     */
    public function createStackWithOptions(CreateStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateStackResponse::fromMap($this->doRequest('CreateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateStackResponse
     */
    public function createStack(CreateStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions(GetStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackResponse::fromMap($this->doRequest('GetStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackResponse
     */
    public function getStack(GetStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStackResponse
     */
    public function deleteStackWithOptions(DeleteStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteStackResponse::fromMap($this->doRequest('DeleteStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStackResponse
     */
    public function deleteStack(DeleteStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackResponse
     */
    public function updateStackWithOptions(UpdateStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackResponse::fromMap($this->doRequest('UpdateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateStackResponse
     */
    public function updateStack(UpdateStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStacksResponse
     */
    public function listStacksWithOptions(ListStacksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStacksResponse::fromMap($this->doRequest('ListStacks', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStacksResponse
     */
    public function listStacks(ListStacksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStacksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PreviewStackResponse
     */
    public function previewStackWithOptions(PreviewStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PreviewStackResponse::fromMap($this->doRequest('PreviewStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PreviewStackResponse
     */
    public function previewStack(PreviewStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCostWithOptions(GetTemplateEstimateCostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTemplateEstimateCostResponse::fromMap($this->doRequest('GetTemplateEstimateCost', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCost(GetTemplateEstimateCostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateEstimateCostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStackWithOptions(CancelUpdateStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelUpdateStackResponse::fromMap($this->doRequest('CancelUpdateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStack(CancelUpdateStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUpdateStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStackWithOptions(ContinueCreateStackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ContinueCreateStackResponse::fromMap($this->doRequest('ContinueCreateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStack(ContinueCreateStackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueCreateStackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicyWithOptions(SetStackPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetStackPolicyResponse::fromMap($this->doRequest('SetStackPolicy', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicy(SetStackPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicyWithOptions(GetStackPolicyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackPolicyResponse::fromMap($this->doRequest('GetStackPolicy', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicy(GetStackPolicyRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplateWithOptions(ValidateTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ValidateTemplateResponse::fromMap($this->doRequest('ValidateTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplate(ValidateTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions(GetTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTemplateResponse::fromMap($this->doRequest('GetTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTemplateResponse
     */
    public function getTemplate(GetTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSetWithOptions(GetChangeSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetChangeSetResponse::fromMap($this->doRequest('GetChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSet(GetChangeSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChangeSetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSetsWithOptions(ListChangeSetsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListChangeSetsResponse::fromMap($this->doRequest('ListChangeSets', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSets(ListChangeSetsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChangeSetsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSetWithOptions(ExecuteChangeSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ExecuteChangeSetResponse::fromMap($this->doRequest('ExecuteChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSet(ExecuteChangeSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeChangeSetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSetWithOptions(DeleteChangeSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteChangeSetResponse::fromMap($this->doRequest('DeleteChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSet(DeleteChangeSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChangeSetWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStackEventsResponse
     */
    public function listStackEventsWithOptions(ListStackEventsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStackEventsResponse::fromMap($this->doRequest('ListStackEvents', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStackEventsResponse
     */
    public function listStackEvents(ListStackEventsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackEventsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResourcesWithOptions(ListStackResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListStackResourcesResponse::fromMap($this->doRequest('ListStackResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResources(ListStackResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetStackResourceResponse
     */
    public function getStackResourceWithOptions(GetStackResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetStackResourceResponse::fromMap($this->doRequest('GetStackResource', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetStackResourceResponse
     */
    public function getStackResource(GetStackResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplateWithOptions(GetResourceTypeTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetResourceTypeTemplateResponse::fromMap($this->doRequest('GetResourceTypeTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplate(GetResourceTypeTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions(GetResourceTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetResourceTypeResponse::fromMap($this->doRequest('GetResourceType', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceType(GetResourceTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions(ListResourceTypesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListResourceTypesResponse::fromMap($this->doRequest('ListResourceTypes', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes(ListResourceTypesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SignalResourceResponse
     */
    public function signalResourceWithOptions(SignalResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SignalResourceResponse::fromMap($this->doRequest('SignalResource', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SignalResourceResponse
     */
    public function signalResource(SignalResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signalResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
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
     * @return CreateChangeSetResponse
     */
    public function createChangeSetWithOptions(CreateChangeSetRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateChangeSetResponse::fromMap($this->doRequest('CreateChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateChangeSetResponse
     */
    public function createChangeSet(CreateChangeSetRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChangeSetWithOptions($request, $runtime);
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
