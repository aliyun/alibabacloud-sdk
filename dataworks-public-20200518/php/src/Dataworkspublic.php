<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AbolishDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AbolishDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddToMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\AddToMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaPartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CheckMetaTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateNodeComplementRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateNodeComplementResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateNodeTestRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateNodeTestResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRelativeNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRelativeNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateUdfFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateUdfFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFromMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteFromMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRelativeNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRelativeNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\EstablishRelationTableToBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineConfigResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableColumnRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableColumnResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableListByCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableListByCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeCodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeOnBaselineResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApplicationsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApplicationsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIORequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeIOResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\PublishDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SetSuccessInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SubmitFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SuspendInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBusinessResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateConnectionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDataServiceApiResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaCategoryRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateMetaCategoryResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityFollowerResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateQualityRuleResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateRemindResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateUdfFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateUdfFileResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Dataworkspublic extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'dataworks.ap-northeast-1.aliyuncs.com',
            'ap-south-1'            => 'dataworks.ap-south-1.aliyuncs.com',
            'ap-southeast-1'        => 'dataworks.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dataworks.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dataworks.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dataworks.ap-southeast-5.aliyuncs.com',
            'cn-beijing'            => 'dataworks.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'dataworks.cn-chengdu.aliyuncs.com',
            'cn-hangzhou'           => 'dataworks.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dataworks.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'          => 'dataworks.aliyuncs.com',
            'cn-qingdao'            => 'dataworks.aliyuncs.com',
            'cn-shanghai'           => 'dataworks.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'dataworks.cn-shenzhen.aliyuncs.com',
            'cn-zhangjiakou'        => 'dataworks.aliyuncs.com',
            'eu-central-1'          => 'dataworks.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'dataworks.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dataworks.me-east-1.aliyuncs.com',
            'us-east-1'             => 'dataworks.us-east-1.aliyuncs.com',
            'us-west-1'             => 'dataworks.us-west-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dataworks.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dataworks.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dataworks.aliyuncs.com',
            'cn-north-2-gov-1'      => 'dataworks.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dataworks-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEnginesWithOptions(ListCalcEnginesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListCalcEnginesResponse::fromMap($this->doRequest('ListCalcEngines', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListCalcEnginesResponse
     */
    public function listCalcEngines(ListCalcEnginesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalcEnginesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListConnectionsResponse
     */
    public function listConnectionsWithOptions(ListConnectionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListConnectionsResponse::fromMap($this->doRequest('ListConnections', 'HTTPS', 'GET', '2020-05-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListConnectionsResponse
     */
    public function listConnections(ListConnectionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnectionWithOptions(UpdateConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateConnectionResponse::fromMap($this->doRequest('UpdateConnection', 'HTTPS', 'PUT', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnection(UpdateConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnectionWithOptions(DeleteConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteConnectionResponse::fromMap($this->doRequest('DeleteConnection', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteConnectionResponse
     */
    public function deleteConnection(DeleteConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetailWithOptions(GetProjectDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetProjectDetailResponse::fromMap($this->doRequest('GetProjectDetail', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetProjectDetailResponse
     */
    public function getProjectDetail(GetProjectDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions(ListResourceGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListResourceGroupsResponse::fromMap($this->doRequest('ListResourceGroups', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroups(ListResourceGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateConnectionResponse
     */
    public function createConnectionWithOptions(CreateConnectionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateConnectionResponse::fromMap($this->doRequest('CreateConnection', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateConnectionResponse
     */
    public function createConnection(CreateConnectionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplicationWithOptions(GetDataServiceApplicationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceApplicationResponse::fromMap($this->doRequest('GetDataServiceApplication', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetDataServiceApplicationResponse
     */
    public function getDataServiceApplication(GetDataServiceApplicationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApplicationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplicationsWithOptions(ListDataServiceApplicationsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApplicationsResponse::fromMap($this->doRequest('ListDataServiceApplications', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceApplicationsResponse
     */
    public function listDataServiceApplications(ListDataServiceApplicationsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApplicationsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaselineWithOptions(GetNodeOnBaselineRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetNodeOnBaselineResponse::fromMap($this->doRequest('GetNodeOnBaseline', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetNodeOnBaselineResponse
     */
    public function getNodeOnBaseline(GetNodeOnBaselineRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeOnBaselineWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigsWithOptions(ListBaselineConfigsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListBaselineConfigsResponse::fromMap($this->doRequest('ListBaselineConfigs', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListBaselineConfigsResponse
     */
    public function listBaselineConfigs(ListBaselineConfigsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineConfigsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLogWithOptions(GetMetaTableChangeLogRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableChangeLogResponse::fromMap($this->doRequest('GetMetaTableChangeLog', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableChangeLogResponse
     */
    public function getMetaTableChangeLog(GetMetaTableChangeLogRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableChangeLogWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutputWithOptions(GetMetaTableOutputRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableOutputResponse::fromMap($this->doRequest('GetMetaTableOutput', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableOutputResponse
     */
    public function getMetaTableOutput(GetMetaTableOutputRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableOutputWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartitionWithOptions(GetMetaTablePartitionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTablePartitionResponse::fromMap($this->doRequest('GetMetaTablePartition', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTablePartitionResponse
     */
    public function getMetaTablePartition(GetMetaTablePartitionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTablePartitionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfoWithOptions(GetMetaTableFullInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableFullInfoResponse::fromMap($this->doRequest('GetMetaTableFullInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableFullInfoResponse
     */
    public function getMetaTableFullInfo(GetMetaTableFullInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableFullInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersionWithOptions(GetFileVersionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetFileVersionResponse::fromMap($this->doRequest('GetFileVersion', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetFileVersionResponse
     */
    public function getFileVersion(GetFileVersionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileVersionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfoWithOptions(GetMetaTableBasicInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableBasicInfoResponse::fromMap($this->doRequest('GetMetaTableBasicInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableBasicInfoResponse
     */
    public function getMetaTableBasicInfo(GetMetaTableBasicInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumnWithOptions(GetMetaTableColumnRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableColumnResponse::fromMap($this->doRequest('GetMetaTableColumn', 'HTTPS', 'GET', '2020-05-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableColumnResponse
     */
    public function getMetaTableColumn(GetMetaTableColumnRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableColumnWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfoWithOptions(GetMetaDBInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaDBInfoResponse::fromMap($this->doRequest('GetMetaDBInfo', 'HTTPS', 'GET', '2020-05-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaDBInfoResponse
     */
    public function getMetaDBInfo(GetMetaDBInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategoryWithOptions(GetMetaCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaCategoryResponse::fromMap($this->doRequest('GetMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaCategoryResponse
     */
    public function getMetaCategory(GetMetaCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessagesWithOptions(ListAlertMessagesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAlertMessagesResponse::fromMap($this->doRequest('ListAlertMessages', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAlertMessagesResponse
     */
    public function listAlertMessages(ListAlertMessagesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertMessagesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfigWithOptions(GetBaselineConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineConfigResponse::fromMap($this->doRequest('GetBaselineConfig', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetBaselineConfigResponse
     */
    public function getBaselineConfig(GetBaselineConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTablesWithOptions(SearchMetaTablesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchMetaTablesResponse::fromMap($this->doRequest('SearchMetaTables', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchMetaTablesResponse
     */
    public function searchMetaTables(SearchMetaTablesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMetaTablesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateNodeTestResponse
     */
    public function createNodeTestWithOptions(CreateNodeTestRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateNodeTestResponse::fromMap($this->doRequest('CreateNodeTest', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateNodeTestResponse
     */
    public function createNodeTest(CreateNodeTestRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeTestWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategoryWithOptions(GetMetaTableListByCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableListByCategoryResponse::fromMap($this->doRequest('GetMetaTableListByCategory', 'HTTPS', 'GET', '2020-05-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableListByCategoryResponse
     */
    public function getMetaTableListByCategory(GetMetaTableListByCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableListByCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategoryWithOptions(DeleteMetaCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMetaCategoryResponse::fromMap($this->doRequest('DeleteMetaCategory', 'HTTPS', 'GET', '2020-05-18', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMetaCategoryResponse
     */
    public function deleteMetaCategory(DeleteMetaCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategoryWithOptions(UpdateMetaCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateMetaCategoryResponse::fromMap($this->doRequest('UpdateMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateMetaCategoryResponse
     */
    public function updateMetaCategory(UpdateMetaCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateNodeComplementResponse
     */
    public function createNodeComplementWithOptions(CreateNodeComplementRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateNodeComplementResponse::fromMap($this->doRequest('CreateNodeComplement', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateNodeComplementResponse
     */
    public function createNodeComplement(CreateNodeComplementRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeComplementWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTopicsResponse
     */
    public function listTopicsWithOptions(ListTopicsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTopicsResponse::fromMap($this->doRequest('ListTopics', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTopicsResponse
     */
    public function listTopics(ListTopicsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersionsWithOptions(ListFileVersionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListFileVersionsResponse::fromMap($this->doRequest('ListFileVersions', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListFileVersionsResponse
     */
    public function listFileVersions(ListFileVersionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileVersionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategoryWithOptions(CreateMetaCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateMetaCategoryResponse::fromMap($this->doRequest('CreateMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateMetaCategoryResponse
     */
    public function createMetaCategory(CreateMetaCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIOWithOptions(ListNodeIORequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListNodeIOResponse::fromMap($this->doRequest('ListNodeIO', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListNodeIOResponse
     */
    public function listNodeIO(ListNodeIORequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeIOWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluenceWithOptions(GetTopicInfluenceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTopicInfluenceResponse::fromMap($this->doRequest('GetTopicInfluence', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTopicInfluenceResponse
     */
    public function getTopicInfluence(GetTopicInfluenceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicInfluenceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTopicResponse
     */
    public function getTopicWithOptions(GetTopicRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTopicResponse::fromMap($this->doRequest('GetTopic', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTopicResponse
     */
    public function getTopic(GetTopicRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategoryWithOptions(DeleteFromMetaCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteFromMetaCategoryResponse::fromMap($this->doRequest('DeleteFromMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFromMetaCategoryResponse
     */
    public function deleteFromMetaCategory(DeleteFromMetaCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFromMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetNodeResponse
     */
    public function getNodeWithOptions(GetNodeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetNodeResponse::fromMap($this->doRequest('GetNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetNodeResponse
     */
    public function getNode(GetNodeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions(ListNodesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListNodesResponse::fromMap($this->doRequest('ListNodes', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListNodesResponse
     */
    public function listNodes(ListNodesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCodeWithOptions(GetNodeCodeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetNodeCodeResponse::fromMap($this->doRequest('GetNodeCode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetNodeCodeResponse
     */
    public function getNodeCode(GetNodeCodeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeCodeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusinessWithOptions(EstablishRelationTableToBusinessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EstablishRelationTableToBusinessResponse::fromMap($this->doRequest('EstablishRelationTableToBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EstablishRelationTableToBusinessResponse
     */
    public function establishRelationTableToBusiness(EstablishRelationTableToBusinessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->establishRelationTableToBusinessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApiWithOptions(UpdateDataServiceApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateDataServiceApiResponse::fromMap($this->doRequest('UpdateDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateDataServiceApiResponse
     */
    public function updateDataServiceApi(UpdateDataServiceApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFileWithOptions(UpdateUdfFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateUdfFileResponse::fromMap($this->doRequest('UpdateUdfFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateUdfFileResponse
     */
    public function updateUdfFile(UpdateUdfFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUdfFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFileWithOptions(CreateUdfFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateUdfFileResponse::fromMap($this->doRequest('CreateUdfFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateUdfFileResponse
     */
    public function createUdfFile(CreateUdfFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUdfFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListFilesResponse
     */
    public function listFilesWithOptions(ListFilesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListFilesResponse::fromMap($this->doRequest('ListFiles', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListFilesResponse
     */
    public function listFiles(ListFilesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApisWithOptions(ListDataServiceAuthorizedApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceAuthorizedApisResponse::fromMap($this->doRequest('ListDataServiceAuthorizedApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceAuthorizedApisResponse
     */
    public function listDataServiceAuthorizedApis(ListDataServiceAuthorizedApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceAuthorizedApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateFileResponse
     */
    public function updateFileWithOptions(UpdateFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateFileResponse::fromMap($this->doRequest('UpdateFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateFileResponse
     */
    public function updateFile(UpdateFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderWithOptions(DeleteFolderRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteFolderResponse::fromMap($this->doRequest('DeleteFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolder(DeleteFolderRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFolderWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListFoldersResponse
     */
    public function listFoldersWithOptions(ListFoldersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListFoldersResponse::fromMap($this->doRequest('ListFolders', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListFoldersResponse
     */
    public function listFolders(ListFoldersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoldersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartitionWithOptions(CheckMetaPartitionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckMetaPartitionResponse::fromMap($this->doRequest('CheckMetaPartition', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckMetaPartitionResponse
     */
    public function checkMetaPartition(CheckMetaPartitionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaPartitionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateFolderResponse
     */
    public function updateFolderWithOptions(UpdateFolderRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateFolderResponse::fromMap($this->doRequest('UpdateFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateFolderResponse
     */
    public function updateFolder(UpdateFolderRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFolderWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemindWithOptions(DeleteRemindRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteRemindResponse::fromMap($this->doRequest('DeleteRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteRemindResponse
     */
    public function deleteRemind(DeleteRemindRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemindWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategoryWithOptions(AddToMetaCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddToMetaCategoryResponse::fromMap($this->doRequest('AddToMetaCategory', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddToMetaCategoryResponse
     */
    public function addToMetaCategory(AddToMetaCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addToMetaCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions(ListInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListInstancesResponse::fromMap($this->doRequest('ListInstances', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListInstancesResponse
     */
    public function listInstances(ListInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstanceWithOptions(SetSuccessInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetSuccessInstanceResponse::fromMap($this->doRequest('SetSuccessInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetSuccessInstanceResponse
     */
    public function setSuccessInstance(SetSuccessInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuccessInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions(CreateFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateFileResponse::fromMap($this->doRequest('CreateFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateFileResponse
     */
    public function createFile(CreateFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions(StopInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return StopInstanceResponse::fromMap($this->doRequest('StopInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return StopInstanceResponse
     */
    public function stopInstance(StopInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions(ResumeInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResumeInstanceResponse::fromMap($this->doRequest('ResumeInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance(ResumeInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstanceWithOptions(SuspendInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SuspendInstanceResponse::fromMap($this->doRequest('SuspendInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SuspendInstanceResponse
     */
    public function suspendInstance(SuspendInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions(RestartInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RestartInstanceResponse::fromMap($this->doRequest('RestartInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance(RestartInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthoritiesWithOptions(ListDataServiceApiAuthoritiesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApiAuthoritiesResponse::fromMap($this->doRequest('ListDataServiceApiAuthorities', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceApiAuthoritiesResponse
     */
    public function listDataServiceApiAuthorities(ListDataServiceApiAuthoritiesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApiAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApisWithOptions(ListDataServicePublishedApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListDataServicePublishedApisResponse::fromMap($this->doRequest('ListDataServicePublishedApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServicePublishedApisResponse
     */
    public function listDataServicePublishedApis(ListDataServicePublishedApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServicePublishedApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLogWithOptions(GetInstanceLogRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceLogResponse::fromMap($this->doRequest('GetInstanceLog', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLog(GetInstanceLogRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceLogWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions(CreateFolderRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateFolderResponse::fromMap($this->doRequest('CreateFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateFolderResponse
     */
    public function createFolder(CreateFolderRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFolderWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetBusinessResponse
     */
    public function getBusinessWithOptions(GetBusinessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetBusinessResponse::fromMap($this->doRequest('GetBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetBusinessResponse
     */
    public function getBusiness(GetBusinessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions(GetInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceResponse::fromMap($this->doRequest('GetInstance', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetInstanceResponse
     */
    public function getInstance(GetInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetFileResponse
     */
    public function getFileWithOptions(GetFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetFileResponse::fromMap($this->doRequest('GetFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetFileResponse
     */
    public function getFile(GetFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListBusinessResponse
     */
    public function listBusinessWithOptions(ListBusinessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListBusinessResponse::fromMap($this->doRequest('ListBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListBusinessResponse
     */
    public function listBusiness(ListBusinessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBusinessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableListWithOptions(GetMetaDBTableListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaDBTableListResponse::fromMap($this->doRequest('GetMetaDBTableList', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaDBTableListResponse
     */
    public function getMetaDBTableList(GetMetaDBTableListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaDBTableListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTableWithOptions(CheckMetaTableRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CheckMetaTableResponse::fromMap($this->doRequest('CheckMetaTable', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CheckMetaTableResponse
     */
    public function checkMetaTable(CheckMetaTableRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMetaTableWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetFolderResponse
     */
    public function getFolderWithOptions(GetFolderRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetFolderResponse::fromMap($this->doRequest('GetFolder', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetFolderResponse
     */
    public function getFolder(GetFolderRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFolderWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeployFileResponse
     */
    public function deployFileWithOptions(DeployFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeployFileResponse::fromMap($this->doRequest('DeployFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeployFileResponse
     */
    public function deployFile(DeployFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusinessWithOptions(DeleteBusinessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteBusinessResponse::fromMap($this->doRequest('DeleteBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBusinessResponse
     */
    public function deleteBusiness(DeleteBusinessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBusinessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions(DeleteFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteFileResponse::fromMap($this->doRequest('DeleteFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFileResponse
     */
    public function deleteFile(DeleteFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRulesWithOptions(ListQualityRulesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListQualityRulesResponse::fromMap($this->doRequest('ListQualityRules', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListQualityRulesResponse
     */
    public function listQualityRules(ListQualityRulesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualityRulesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateRemindResponse
     */
    public function createRemindWithOptions(CreateRemindRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateRemindResponse::fromMap($this->doRequest('CreateRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateRemindResponse
     */
    public function createRemind(CreateRemindRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemindWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRuleWithOptions(GetQualityRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetQualityRuleResponse::fromMap($this->doRequest('GetQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetQualityRuleResponse
     */
    public function getQualityRule(GetQualityRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions(GetDeploymentRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetDeploymentResponse::fromMap($this->doRequest('GetDeployment', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment(GetDeploymentRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeploymentWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRemindResponse
     */
    public function updateRemindWithOptions(UpdateRemindRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateRemindResponse::fromMap($this->doRequest('UpdateRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateRemindResponse
     */
    public function updateRemind(UpdateRemindRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRemindWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineageWithOptions(GetMetaColumnLineageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaColumnLineageResponse::fromMap($this->doRequest('GetMetaColumnLineage', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaColumnLineageResponse
     */
    public function getMetaColumnLineage(GetMetaColumnLineageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaColumnLineageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusinessWithOptions(UpdateBusinessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateBusinessResponse::fromMap($this->doRequest('UpdateBusiness', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateBusinessResponse
     */
    public function updateBusiness(UpdateBusinessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBusinessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRuleWithOptions(UpdateQualityRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateQualityRuleResponse::fromMap($this->doRequest('UpdateQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateQualityRuleResponse
     */
    public function updateQualityRule(UpdateQualityRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRuleWithOptions(DeleteQualityRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityRuleResponse::fromMap($this->doRequest('DeleteQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRule(DeleteQualityRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitFileResponse
     */
    public function submitFileWithOptions(SubmitFileRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitFileResponse::fromMap($this->doRequest('SubmitFile', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitFileResponse
     */
    public function submitFile(SubmitFileRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFileWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApiWithOptions(GetDataServiceApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetDataServiceApiResponse::fromMap($this->doRequest('GetDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetDataServiceApiResponse
     */
    public function getDataServiceApi(GetDataServiceApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApisWithOptions(ListDataServiceApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListDataServiceApisResponse::fromMap($this->doRequest('ListDataServiceApis', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListDataServiceApisResponse
     */
    public function listDataServiceApis(ListDataServiceApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataServiceApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApiWithOptions(GetDataServicePublishedApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetDataServicePublishedApiResponse::fromMap($this->doRequest('GetDataServicePublishedApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetDataServicePublishedApiResponse
     */
    public function getDataServicePublishedApi(GetDataServicePublishedApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServicePublishedApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPathWithOptions(GetBaselineKeyPathRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineKeyPathResponse::fromMap($this->doRequest('GetBaselineKeyPath', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetBaselineKeyPathResponse
     */
    public function getBaselineKeyPath(GetBaselineKeyPathRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineKeyPathWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetRemindResponse
     */
    public function getRemindWithOptions(GetRemindRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetRemindResponse::fromMap($this->doRequest('GetRemind', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetRemindResponse
     */
    public function getRemind(GetRemindRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemindWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWikiWithOptions(GetMetaTableIntroWikiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableIntroWikiResponse::fromMap($this->doRequest('GetMetaTableIntroWiki', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableIntroWikiResponse
     */
    public function getMetaTableIntroWiki(GetMetaTableIntroWikiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableIntroWikiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatusWithOptions(GetBaselineStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetBaselineStatusResponse::fromMap($this->doRequest('GetBaselineStatus', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetBaselineStatusResponse
     */
    public function getBaselineStatus(GetBaselineStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaselineStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApiWithOptions(DeleteDataServiceApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataServiceApiResponse::fromMap($this->doRequest('DeleteDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDataServiceApiResponse
     */
    public function deleteDataServiceApi(DeleteDataServiceApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApiWithOptions(PublishDataServiceApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PublishDataServiceApiResponse::fromMap($this->doRequest('PublishDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PublishDataServiceApiResponse
     */
    public function publishDataServiceApi(PublishDataServiceApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineageWithOptions(GetMetaTableLineageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMetaTableLineageResponse::fromMap($this->doRequest('GetMetaTableLineage', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMetaTableLineageResponse
     */
    public function getMetaTableLineage(GetMetaTableLineageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetaTableLineageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatusesWithOptions(ListBaselineStatusesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListBaselineStatusesResponse::fromMap($this->doRequest('ListBaselineStatuses', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListBaselineStatusesResponse
     */
    public function listBaselineStatuses(ListBaselineStatusesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBaselineStatusesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListRemindsResponse
     */
    public function listRemindsWithOptions(ListRemindsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListRemindsResponse::fromMap($this->doRequest('ListReminds', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListRemindsResponse
     */
    public function listReminds(ListRemindsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemindsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntityWithOptions(DeleteQualityEntityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityEntityResponse::fromMap($this->doRequest('DeleteQualityEntity', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityEntityResponse
     */
    public function deleteQualityEntity(DeleteQualityEntityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollowerWithOptions(CreateQualityFollowerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityFollowerResponse::fromMap($this->doRequest('CreateQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityFollowerResponse
     */
    public function createQualityFollower(CreateQualityFollowerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApiWithOptions(CreateDataServiceApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateDataServiceApiResponse::fromMap($this->doRequest('CreateDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateDataServiceApiResponse
     */
    public function createDataServiceApi(CreateDataServiceApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApiWithOptions(AbolishDataServiceApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AbolishDataServiceApiResponse::fromMap($this->doRequest('AbolishDataServiceApi', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AbolishDataServiceApiResponse
     */
    public function abolishDataServiceApi(AbolishDataServiceApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishDataServiceApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntityWithOptions(GetQualityEntityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetQualityEntityResponse::fromMap($this->doRequest('GetQualityEntity', 'HTTP', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetQualityEntityResponse
     */
    public function getQualityEntity(GetQualityEntityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollowerWithOptions(GetQualityFollowerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetQualityFollowerResponse::fromMap($this->doRequest('GetQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetQualityFollowerResponse
     */
    public function getQualityFollower(GetQualityFollowerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollowerWithOptions(DeleteQualityFollowerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityFollowerResponse::fromMap($this->doRequest('DeleteQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityFollowerResponse
     */
    public function deleteQualityFollower(DeleteQualityFollowerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntityWithOptions(CreateQualityEntityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityEntityResponse::fromMap($this->doRequest('CreateQualityEntity', 'HTTP', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityEntityResponse
     */
    public function createQualityEntity(CreateQualityEntityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityEntityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRuleWithOptions(CreateQualityRuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityRuleResponse::fromMap($this->doRequest('CreateQualityRule', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRule(CreateQualityRuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollowerWithOptions(UpdateQualityFollowerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateQualityFollowerResponse::fromMap($this->doRequest('UpdateQualityFollower', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateQualityFollowerResponse
     */
    public function updateQualityFollower(UpdateQualityFollowerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQualityFollowerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNodeWithOptions(CreateQualityRelativeNodeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateQualityRelativeNodeResponse::fromMap($this->doRequest('CreateQualityRelativeNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateQualityRelativeNodeResponse
     */
    public function createQualityRelativeNode(CreateQualityRelativeNodeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRelativeNodeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNodeWithOptions(DeleteQualityRelativeNodeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteQualityRelativeNodeResponse::fromMap($this->doRequest('DeleteQualityRelativeNode', 'HTTPS', 'POST', '2020-05-18', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteQualityRelativeNodeResponse
     */
    public function deleteQualityRelativeNode(DeleteQualityRelativeNodeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRelativeNodeWithOptions($request, $runtime);
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
