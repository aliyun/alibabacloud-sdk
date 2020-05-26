<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponse;

use AlibabaCloud\Tea\Model;

class stacks extends Model
{
    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description DisableRollback
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description StackName
     *
     * @var string
     */
    public $stackName;

    /**
     * @description Status
     *
     * @var string
     */
    public $status;

    /**
     * @description StatusReason
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description TimeoutInMinutes
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description ParentStackId
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @description UpdateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description StackDriftStatus
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @description DriftDetectionTime
     *
     * @var string
     */
    public $driftDetectionTime;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'disableRollback'    => 'DisableRollback',
        'regionId'           => 'RegionId',
        'stackId'            => 'StackId',
        'stackName'          => 'StackName',
        'status'             => 'Status',
        'statusReason'       => 'StatusReason',
        'timeoutInMinutes'   => 'TimeoutInMinutes',
        'parentStackId'      => 'ParentStackId',
        'updateTime'         => 'UpdateTime',
        'stackDriftStatus'   => 'StackDriftStatus',
        'driftDetectionTime' => 'DriftDetectionTime',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('disableRollback', $this->disableRollback, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('stackName', $this->stackName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
        Model::validateRequired('timeoutInMinutes', $this->timeoutInMinutes, true);
        Model::validateRequired('parentStackId', $this->parentStackId, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('stackDriftStatus', $this->stackDriftStatus, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
    }

    public function toMap()
    {
        $res                       = [];
        $res['CreateTime']         = $this->createTime;
        $res['DisableRollback']    = $this->disableRollback;
        $res['RegionId']           = $this->regionId;
        $res['StackId']            = $this->stackId;
        $res['StackName']          = $this->stackName;
        $res['Status']             = $this->status;
        $res['StatusReason']       = $this->statusReason;
        $res['TimeoutInMinutes']   = $this->timeoutInMinutes;
        $res['ParentStackId']      = $this->parentStackId;
        $res['UpdateTime']         = $this->updateTime;
        $res['StackDriftStatus']   = $this->stackDriftStatus;
        $res['DriftDetectionTime'] = $this->driftDetectionTime;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
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
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['ParentStackId'])) {
            $model->parentStackId = $map['ParentStackId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
