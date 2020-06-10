<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesResponse\apiHisItems;

use AlibabaCloud\Tea\Model;

class apiHisItem extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description apiUid
     *
     * @var string
     */
    public $apiId;

    /**
     * @description apiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description version
     *
     * @var string
     */
    public $historyVersion;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $deployedTime;
    protected $_name = [
        'regionId'       => 'RegionId',
        'apiId'          => 'ApiId',
        'apiName'        => 'ApiName',
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'stageName'      => 'StageName',
        'historyVersion' => 'HistoryVersion',
        'status'         => 'Status',
        'description'    => 'Description',
        'deployedTime'   => 'DeployedTime',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('historyVersion', $this->historyVersion, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('deployedTime', $this->deployedTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiHisItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }

        return $model;
    }
}
