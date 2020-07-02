<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse\data;

use AlibabaCloud\Tea\Model;

class lastInstance extends Model
{
    /**
     * @description instanceId
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description nodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description finishTime
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description endCast
     *
     * @var int
     */
    public $endCast;

    /**
     * @description nodeName
     *
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'status'     => 'Status',
        'projectId'  => 'ProjectId',
        'owner'      => 'Owner',
        'nodeId'     => 'NodeId',
        'finishTime' => 'FinishTime',
        'endCast'    => 'EndCast',
        'nodeName'   => 'NodeName',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('endCast', $this->endCast, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lastInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
