<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetAppsAuthoritiesRequest extends Model
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
     * @description apiUid
     *
     * @var string
     */
    public $apiId;

    /**
     * @description stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description appIdStr
     *
     * @var string
     */
    public $appIds;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description authValidTime
     *
     * @var string
     */
    public $authValidTime;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'securityToken' => 'SecurityToken',
        'groupId'       => 'GroupId',
        'apiId'         => 'ApiId',
        'stageName'     => 'StageName',
        'appIds'        => 'AppIds',
        'description'   => 'Description',
        'authValidTime' => 'AuthValidTime',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('appIds', $this->appIds, true);
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
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->authValidTime) {
            $res['AuthValidTime'] = $this->authValidTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAppsAuthoritiesRequest
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AuthValidTime'])) {
            $model->authValidTime = $map['AuthValidTime'];
        }

        return $model;
    }
}
