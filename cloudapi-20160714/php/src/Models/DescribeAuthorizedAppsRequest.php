<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuthorizedAppsRequest extends Model
{
    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description apiUid
     *
     * @var string
     */
    public $apiId;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description appId
     *
     * @var int
     */
    public $appId;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description appOwnerId
     *
     * @var int
     */
    public $appOwnerId;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'securityToken' => 'SecurityToken',
        'groupId'       => 'GroupId',
        'stageName'     => 'StageName',
        'apiId'         => 'ApiId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'appId'         => 'AppId',
        'appName'       => 'AppName',
        'appOwnerId'    => 'AppOwnerId',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appOwnerId) {
            $res['AppOwnerId'] = $this->appOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuthorizedAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppOwnerId'])) {
            $model->appOwnerId = $map['AppOwnerId'];
        }

        return $model;
    }
}
