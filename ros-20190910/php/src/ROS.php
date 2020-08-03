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
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponse;
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
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagValuesResponse;
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
     * @param ListStackOperationRisksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStackOperationRisksResponse
     */
    public function listStackOperationRisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackOperationRisksResponse::fromMap($this->doRequest('ListStackOperationRisks', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackOperationRisksRequest $request
     *
     * @return ListStackOperationRisksResponse
     */
    public function listStackOperationRisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackOperationRisksWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTemplateSummaryResponse
     */
    public function getTemplateSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTemplateSummaryResponse::fromMap($this->doRequest('GetTemplateSummary', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetTemplateSummaryRequest $request
     *
     * @return GetTemplateSummaryResponse
     */
    public function getTemplateSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateSummaryWithOptions($request, $runtime);
    }

    /**
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagValuesResponse::fromMap($this->doRequest('ListTagValues', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagKeysResponse::fromMap($this->doRequest('ListTagKeys', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetDeletionProtectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDeletionProtectionResponse::fromMap($this->doRequest('SetDeletionProtection', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param SetDeletionProtectionRequest $request
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackTemplateByResourcesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackTemplateByResourcesResponse::fromMap($this->doRequest('UpdateStackTemplateByResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateStackTemplateByResourcesRequest $request
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public function updateStackTemplateByResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackTemplateByResourcesWithOptions($request, $runtime);
    }

    /**
     * @param GetStackDriftDetectionStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStackDriftDetectionStatusResponse::fromMap($this->doRequest('GetStackDriftDetectionStatus', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetStackDriftDetectionStatusRequest $request
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public function getStackDriftDetectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackDriftDetectionStatusWithOptions($request, $runtime);
    }

    /**
     * @param DetectStackGroupDriftRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDriftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectStackGroupDriftResponse::fromMap($this->doRequest('DetectStackGroupDrift', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectStackGroupDriftRequest $request
     *
     * @return DetectStackGroupDriftResponse
     */
    public function detectStackGroupDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackGroupDriftWithOptions($request, $runtime);
    }

    /**
     * @param ListStackResourceDriftsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDriftsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackResourceDriftsResponse::fromMap($this->doRequest('ListStackResourceDrifts', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackResourceDriftsRequest $request
     *
     * @return ListStackResourceDriftsResponse
     */
    public function listStackResourceDrifts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourceDriftsWithOptions($request, $runtime);
    }

    /**
     * @param DetectStackResourceDriftRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDriftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectStackResourceDriftResponse::fromMap($this->doRequest('DetectStackResourceDrift', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectStackResourceDriftRequest $request
     *
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackResourceDriftWithOptions($request, $runtime);
    }

    /**
     * @param DetectStackDriftRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDriftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectStackDriftResponse::fromMap($this->doRequest('DetectStackDrift', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectStackDriftRequest $request
     *
     * @return DetectStackDriftResponse
     */
    public function detectStackDrift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectStackDriftWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackInstancesResponse::fromMap($this->doRequest('UpdateStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateStackInstancesRequest $request
     *
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListStackGroupOperationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackGroupOperationsResponse::fromMap($this->doRequest('ListStackGroupOperations', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackGroupOperationsRequest $request
     *
     * @return ListStackGroupOperationsResponse
     */
    public function listStackGroupOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationsWithOptions($request, $runtime);
    }

    /**
     * @param GetStackGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStackGroupResponse::fromMap($this->doRequest('GetStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetStackGroupRequest $request
     *
     * @return GetStackGroupResponse
     */
    public function getStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetStackGroupOperationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStackGroupOperationResponse::fromMap($this->doRequest('GetStackGroupOperation', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetStackGroupOperationRequest $request
     *
     * @return GetStackGroupOperationResponse
     */
    public function getStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @param ListStackGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackGroupsResponse::fromMap($this->doRequest('ListStackGroups', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackGroupsRequest $request
     *
     * @return ListStackGroupsResponse
     */
    public function listStackGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupsWithOptions($request, $runtime);
    }

    /**
     * @param CreateStackInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateStackInstancesResponse::fromMap($this->doRequest('CreateStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateStackInstancesRequest $request
     *
     * @return CreateStackInstancesResponse
     */
    public function createStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param CreateStackGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateStackGroupResponse::fromMap($this->doRequest('CreateStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateStackGroupRequest $request
     *
     * @return CreateStackGroupResponse
     */
    public function createStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetStackInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStackInstanceResponse::fromMap($this->doRequest('GetStackInstance', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetStackInstanceRequest $request
     *
     * @return GetStackInstanceResponse
     */
    public function getStackInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackGroupResponse::fromMap($this->doRequest('UpdateStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateStackGroupRequest $request
     *
     * @return UpdateStackGroupResponse
     */
    public function updateStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListStackInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackInstancesResponse::fromMap($this->doRequest('ListStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackInstancesRequest $request
     *
     * @return ListStackInstancesResponse
     */
    public function listStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListStackGroupOperationResultsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackGroupOperationResultsResponse::fromMap($this->doRequest('ListStackGroupOperationResults', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackGroupOperationResultsRequest $request
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public function listStackGroupOperationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackGroupOperationResultsWithOptions($request, $runtime);
    }

    /**
     * @param StopStackGroupOperationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopStackGroupOperationResponse::fromMap($this->doRequest('StopStackGroupOperation', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param StopStackGroupOperationRequest $request
     *
     * @return StopStackGroupOperationResponse
     */
    public function stopStackGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStackGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStackGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteStackGroupResponse::fromMap($this->doRequest('DeleteStackGroup', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteStackGroupRequest $request
     *
     * @return DeleteStackGroupResponse
     */
    public function deleteStackGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStackInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteStackInstancesResponse::fromMap($this->doRequest('DeleteStackInstances', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteStackInstancesRequest $request
     *
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackInstancesWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteTemplateResponse::fromMap($this->doRequest('DeleteTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTemplateResponse::fromMap($this->doRequest('UpdateTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTemplatesResponse::fromMap($this->doRequest('ListTemplates', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
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

        return CreateTemplateResponse::fromMap($this->doRequest('CreateTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
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
     * @param CreateStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStackResponse
     */
    public function createStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateStackResponse::fromMap($this->doRequest('CreateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateStackRequest $request
     *
     * @return CreateStackResponse
     */
    public function createStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStackWithOptions($request, $runtime);
    }

    /**
     * @param GetStackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStackResponse::fromMap($this->doRequest('GetStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetStackRequest $request
     *
     * @return GetStackResponse
     */
    public function getStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStackResponse
     */
    public function deleteStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteStackResponse::fromMap($this->doRequest('DeleteStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteStackRequest $request
     *
     * @return DeleteStackResponse
     */
    public function deleteStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStackResponse
     */
    public function updateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateStackResponse::fromMap($this->doRequest('UpdateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateStackRequest $request
     *
     * @return UpdateStackResponse
     */
    public function updateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStackWithOptions($request, $runtime);
    }

    /**
     * @param ListStacksRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListStacksResponse
     */
    public function listStacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStacksResponse::fromMap($this->doRequest('ListStacks', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStacksRequest $request
     *
     * @return ListStacksResponse
     */
    public function listStacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStacksWithOptions($request, $runtime);
    }

    /**
     * @param PreviewStackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PreviewStackResponse
     */
    public function previewStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PreviewStackResponse::fromMap($this->doRequest('PreviewStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param PreviewStackRequest $request
     *
     * @return PreviewStackResponse
     */
    public function previewStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewStackWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateEstimateCostRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTemplateEstimateCostResponse::fromMap($this->doRequest('GetTemplateEstimateCost', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetTemplateEstimateCostRequest $request
     *
     * @return GetTemplateEstimateCostResponse
     */
    public function getTemplateEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateEstimateCostWithOptions($request, $runtime);
    }

    /**
     * @param CancelUpdateStackRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelUpdateStackResponse::fromMap($this->doRequest('CancelUpdateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param CancelUpdateStackRequest $request
     *
     * @return CancelUpdateStackResponse
     */
    public function cancelUpdateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUpdateStackWithOptions($request, $runtime);
    }

    /**
     * @param ContinueCreateStackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ContinueCreateStackResponse::fromMap($this->doRequest('ContinueCreateStack', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ContinueCreateStackRequest $request
     *
     * @return ContinueCreateStackResponse
     */
    public function continueCreateStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueCreateStackWithOptions($request, $runtime);
    }

    /**
     * @param SetStackPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetStackPolicyResponse::fromMap($this->doRequest('SetStackPolicy', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param SetStackPolicyRequest $request
     *
     * @return SetStackPolicyResponse
     */
    public function setStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetStackPolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStackPolicyResponse::fromMap($this->doRequest('GetStackPolicy', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetStackPolicyRequest $request
     *
     * @return GetStackPolicyResponse
     */
    public function getStackPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ValidateTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ValidateTemplateResponse::fromMap($this->doRequest('ValidateTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ValidateTemplateRequest $request
     *
     * @return ValidateTemplateResponse
     */
    public function validateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTemplateResponse::fromMap($this->doRequest('GetTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetChangeSetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetChangeSetResponse::fromMap($this->doRequest('GetChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetChangeSetRequest $request
     *
     * @return GetChangeSetResponse
     */
    public function getChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param ListChangeSetsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListChangeSetsResponse::fromMap($this->doRequest('ListChangeSets', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListChangeSetsRequest $request
     *
     * @return ListChangeSetsResponse
     */
    public function listChangeSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChangeSetsWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteChangeSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExecuteChangeSetResponse::fromMap($this->doRequest('ExecuteChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ExecuteChangeSetRequest $request
     *
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChangeSetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteChangeSetResponse::fromMap($this->doRequest('DeleteChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteChangeSetRequest $request
     *
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param ListStackEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListStackEventsResponse
     */
    public function listStackEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackEventsResponse::fromMap($this->doRequest('ListStackEvents', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackEventsRequest $request
     *
     * @return ListStackEventsResponse
     */
    public function listStackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListStackResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStackResourcesResponse::fromMap($this->doRequest('ListStackResources', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListStackResourcesRequest $request
     *
     * @return ListStackResourcesResponse
     */
    public function listStackResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackResourcesWithOptions($request, $runtime);
    }

    /**
     * @param GetStackResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStackResourceResponse
     */
    public function getStackResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStackResourceResponse::fromMap($this->doRequest('GetStackResource', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetStackResourceRequest $request
     *
     * @return GetStackResourceResponse
     */
    public function getStackResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceTypeTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetResourceTypeTemplateResponse::fromMap($this->doRequest('GetResourceTypeTemplate', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetResourceTypeTemplateRequest $request
     *
     * @return GetResourceTypeTemplateResponse
     */
    public function getResourceTypeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetResourceTypeResponse::fromMap($this->doRequest('GetResourceType', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetResourceTypeRequest $request
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceTypesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListResourceTypesResponse::fromMap($this->doRequest('ListResourceTypes', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListResourceTypesRequest $request
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($request, $runtime);
    }

    /**
     * @param SignalResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SignalResourceResponse
     */
    public function signalResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SignalResourceResponse::fromMap($this->doRequest('SignalResource', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param SignalResourceRequest $request
     *
     * @return SignalResourceResponse
     */
    public function signalResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signalResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param CreateChangeSetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateChangeSetResponse
     */
    public function createChangeSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateChangeSetResponse::fromMap($this->doRequest('CreateChangeSet', 'HTTPS', 'POST', '2019-09-10', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateChangeSetRequest $request
     *
     * @return CreateChangeSetResponse
     */
    public function createChangeSet($request)
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
