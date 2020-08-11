<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponse\taskSet;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $supportCancel;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishedTime;
    protected $_name = [
        'taskId'        => 'TaskId',
        'taskAction'    => 'TaskAction',
        'taskStatus'    => 'TaskStatus',
        'supportCancel' => 'SupportCancel',
        'creationTime'  => 'CreationTime',
        'finishedTime'  => 'FinishedTime',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskAction', $this->taskAction, true);
        Model::validateRequired('taskStatus', $this->taskStatus, true);
        Model::validateRequired('supportCancel', $this->supportCancel, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('finishedTime', $this->finishedTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }

        return $model;
    }
}
