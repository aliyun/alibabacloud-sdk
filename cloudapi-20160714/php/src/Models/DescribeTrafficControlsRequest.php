<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrafficControlsRequest extends Model
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
     * @description trafficControlId
     *
     * @var string
     */
    public $trafficControlId;

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
     * @description trafficControlName
     *
     * @var string
     */
    public $trafficControlName;

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
    protected $_name = [
        'securityToken'      => 'SecurityToken',
        'accessKeyId'        => 'AccessKeyId',
        'trafficControlId'   => 'TrafficControlId',
        'groupId'            => 'GroupId',
        'apiId'              => 'ApiId',
        'stageName'          => 'StageName',
        'trafficControlName' => 'TrafficControlName',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
    ];

    public function validate()
    {
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
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
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
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficControlsRequest
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
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
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
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
