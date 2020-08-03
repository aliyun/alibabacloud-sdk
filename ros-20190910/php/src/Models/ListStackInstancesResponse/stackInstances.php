<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponse;

use AlibabaCloud\Tea\Model;

class stackInstances extends Model
{
    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $regionId;

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
    public $stackDriftStatus;

    /**
     * @var string
     */
    public $driftDetectionTime;
    protected $_name = [
        'stackGroupName'     => 'StackGroupName',
        'stackGroupId'       => 'StackGroupId',
        'stackId'            => 'StackId',
        'accountId'          => 'AccountId',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
        'statusReason'       => 'StatusReason',
        'stackDriftStatus'   => 'StackDriftStatus',
        'driftDetectionTime' => 'DriftDetectionTime',
    ];

    public function validate()
    {
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
        Model::validateRequired('stackGroupId', $this->stackGroupId, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
        Model::validateRequired('stackDriftStatus', $this->stackDriftStatus, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }

        return $model;
    }
}
