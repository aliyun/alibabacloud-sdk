<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponse;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $physicalResourceId;

    /**
     * @var string
     */
    public $resourceType;

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

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @var string
     */
    public $driftDetectionTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'logicalResourceId'   => 'LogicalResourceId',
        'physicalResourceId'  => 'PhysicalResourceId',
        'resourceType'        => 'ResourceType',
        'stackId'             => 'StackId',
        'stackName'           => 'StackName',
        'status'              => 'Status',
        'statusReason'        => 'StatusReason',
        'updateTime'          => 'UpdateTime',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'driftDetectionTime'  => 'DriftDetectionTime',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
        Model::validateRequired('physicalResourceId', $this->physicalResourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('resourceDriftStatus', $this->resourceDriftStatus, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ResourceDriftStatus'])) {
            $model->resourceDriftStatus = $map['ResourceDriftStatus'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }

        return $model;
    }
}
