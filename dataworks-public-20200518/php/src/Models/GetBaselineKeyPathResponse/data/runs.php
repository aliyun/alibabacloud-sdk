<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse\data;

use AlibabaCloud\Tea\Model;

class runs extends Model
{
    /**
     * @description absTime
     *
     * @var int
     */
    public $absTime;

    /**
     * @description beginCast
     *
     * @var int
     */
    public $beginCast;

    /**
     * @description beginRunningTim
     *
     * @var int
     */
    public $beginRunningTime;

    /**
     * @description beginWaitResTime
     *
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @description beginWaitTimeTime
     *
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @description bizdate
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description cycTime
     *
     * @var int
     */
    public $cycTime;

    /**
     * @description endCast
     *
     * @var int
     */
    public $endCast;

    /**
     * @description finishTime
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description inGroupId
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @description instanceId
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description nodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description nodeName
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'absTime'           => 'AbsTime',
        'beginCast'         => 'BeginCast',
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'bizdate'           => 'Bizdate',
        'cycTime'           => 'CycTime',
        'endCast'           => 'EndCast',
        'finishTime'        => 'FinishTime',
        'inGroupId'         => 'InGroupId',
        'instanceId'        => 'InstanceId',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'owner'             => 'Owner',
        'projectId'         => 'ProjectId',
        'status'            => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('absTime', $this->absTime, true);
        Model::validateRequired('beginCast', $this->beginCast, true);
        Model::validateRequired('beginRunningTime', $this->beginRunningTime, true);
        Model::validateRequired('beginWaitResTime', $this->beginWaitResTime, true);
        Model::validateRequired('beginWaitTimeTime', $this->beginWaitTimeTime, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('cycTime', $this->cycTime, true);
        Model::validateRequired('endCast', $this->endCast, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('inGroupId', $this->inGroupId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->absTime) {
            $res['AbsTime'] = $this->absTime;
        }
        if (null !== $this->beginCast) {
            $res['BeginCast'] = $this->beginCast;
        }
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->cycTime) {
            $res['CycTime'] = $this->cycTime;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbsTime'])) {
            $model->absTime = $map['AbsTime'];
        }
        if (isset($map['BeginCast'])) {
            $model->beginCast = $map['BeginCast'];
        }
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['CycTime'])) {
            $model->cycTime = $map['CycTime'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
