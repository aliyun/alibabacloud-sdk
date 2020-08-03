<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponse;

use AlibabaCloud\Tea\Model;

class changeSets extends Model
{
    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string
     */
    public $changeSetName;

    /**
     * @var string
     */
    public $changeSetType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'changeSetId'     => 'ChangeSetId',
        'changeSetName'   => 'ChangeSetName',
        'changeSetType'   => 'ChangeSetType',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'executionStatus' => 'ExecutionStatus',
        'regionId'        => 'RegionId',
        'stackId'         => 'StackId',
        'stackName'       => 'StackName',
        'status'          => 'Status',
        'statusReason'    => 'StatusReason',
    ];

    public function validate()
    {
        Model::validateRequired('changeSetId', $this->changeSetId, true);
        Model::validateRequired('changeSetName', $this->changeSetName, true);
        Model::validateRequired('changeSetType', $this->changeSetType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('executionStatus', $this->executionStatus, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->changeSetType) {
            $res['ChangeSetType'] = $this->changeSetType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['ChangeSetName'])) {
            $model->changeSetName = $map['ChangeSetName'];
        }
        if (isset($map['ChangeSetType'])) {
            $model->changeSetType = $map['ChangeSetType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
