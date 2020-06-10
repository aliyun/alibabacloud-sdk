<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SwitchApiRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

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
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description version
     *
     * @var string
     */
    public $historyVersion;
    protected $_name = [
        'securityToken'  => 'SecurityToken',
        'accessKeyId'    => 'AccessKeyId',
        'groupId'        => 'GroupId',
        'apiId'          => 'ApiId',
        'stageName'      => 'StageName',
        'description'    => 'Description',
        'historyVersion' => 'HistoryVersion',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('historyVersion', $this->historyVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }

        return $model;
    }
}
