<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponse\data;

use AlibabaCloud\Tea\Model;

class apiAuthorizedList extends Model
{
    /**
     * @description apiId
     *
     * @var int
     */
    public $apiId;

    /**
     * @description apiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description apiPath
     *
     * @var string
     */
    public $apiPath;

    /**
     * @description apiStatus
     *
     * @var int
     */
    public $apiStatus;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description creator
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description grantBeginTime
     *
     * @var string
     */
    public $grantCreatedTime;

    /**
     * @description grantEndTime
     *
     * @var string
     */
    public $grantEndTime;

    /**
     * @description grantOperator
     *
     * @var string
     */
    public $grantOperatorId;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiId'            => 'ApiId',
        'apiName'          => 'ApiName',
        'apiPath'          => 'ApiPath',
        'apiStatus'        => 'ApiStatus',
        'createdTime'      => 'CreatedTime',
        'creatorId'        => 'CreatorId',
        'grantCreatedTime' => 'GrantCreatedTime',
        'grantEndTime'     => 'GrantEndTime',
        'grantOperatorId'  => 'GrantOperatorId',
        'groupId'          => 'GroupId',
        'modifiedTime'     => 'ModifiedTime',
        'projectId'        => 'ProjectId',
        'tenantId'         => 'TenantId',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('apiPath', $this->apiPath, true);
        Model::validateRequired('apiStatus', $this->apiStatus, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('grantCreatedTime', $this->grantCreatedTime, true);
        Model::validateRequired('grantEndTime', $this->grantEndTime, true);
        Model::validateRequired('grantOperatorId', $this->grantOperatorId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->grantCreatedTime) {
            $res['GrantCreatedTime'] = $this->grantCreatedTime;
        }
        if (null !== $this->grantEndTime) {
            $res['GrantEndTime'] = $this->grantEndTime;
        }
        if (null !== $this->grantOperatorId) {
            $res['GrantOperatorId'] = $this->grantOperatorId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiAuthorizedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['GrantCreatedTime'])) {
            $model->grantCreatedTime = $map['GrantCreatedTime'];
        }
        if (isset($map['GrantEndTime'])) {
            $model->grantEndTime = $map['GrantEndTime'];
        }
        if (isset($map['GrantOperatorId'])) {
            $model->grantOperatorId = $map['GrantOperatorId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
