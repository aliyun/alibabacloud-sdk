<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponse\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponse\data\apiAuthorizationList\authorizationRecords;
use AlibabaCloud\Tea\Model;

class apiAuthorizationList extends Model
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

    /**
     * @description authorizationDetails
     *
     * @var array
     */
    public $authorizationRecords;
    protected $_name = [
        'apiId'                => 'ApiId',
        'apiName'              => 'ApiName',
        'apiPath'              => 'ApiPath',
        'apiStatus'            => 'ApiStatus',
        'createdTime'          => 'CreatedTime',
        'creatorId'            => 'CreatorId',
        'groupId'              => 'GroupId',
        'modifiedTime'         => 'ModifiedTime',
        'projectId'            => 'ProjectId',
        'tenantId'             => 'TenantId',
        'authorizationRecords' => 'AuthorizationRecords',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('apiPath', $this->apiPath, true);
        Model::validateRequired('apiStatus', $this->apiStatus, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('authorizationRecords', $this->authorizationRecords, true);
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
        if (null !== $this->authorizationRecords) {
            $res['AuthorizationRecords'] = [];
            if (null !== $this->authorizationRecords && \is_array($this->authorizationRecords)) {
                $n = 0;
                foreach ($this->authorizationRecords as $item) {
                    $res['AuthorizationRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiAuthorizationList
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
        if (isset($map['AuthorizationRecords'])) {
            if (!empty($map['AuthorizationRecords'])) {
                $model->authorizationRecords = [];
                $n                           = 0;
                foreach ($map['AuthorizationRecords'] as $item) {
                    $model->authorizationRecords[$n++] = null !== $item ? authorizationRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
