<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponse\items;

use AlibabaCloud\Tea\Model;

class taskProgressInfo extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description beginTime
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description progressInfo
     *
     * @var string
     */
    public $progressInfo;

    /**
     * @description finishTime
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description taskAction
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description progress
     *
     * @var string
     */
    public $progress;

    /**
     * @description expectedFinishTime
     *
     * @var string
     */
    public $expectedFinishTime;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description taskErrorCode
     *
     * @var string
     */
    public $taskErrorCode;

    /**
     * @description taskErrorMessage
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @description stepsInfo
     *
     * @var string
     */
    public $stepsInfo;

    /**
     * @description remain
     *
     * @var int
     */
    public $remain;

    /**
     * @description stepProgressInfo
     *
     * @var string
     */
    public $stepProgressInfo;

    /**
     * @description currentStepName
     *
     * @var string
     */
    public $currentStepName;
    protected $_name = [
        'DBName'             => 'DBName',
        'beginTime'          => 'BeginTime',
        'progressInfo'       => 'ProgressInfo',
        'finishTime'         => 'FinishTime',
        'taskAction'         => 'TaskAction',
        'taskId'             => 'TaskId',
        'progress'           => 'Progress',
        'expectedFinishTime' => 'ExpectedFinishTime',
        'status'             => 'Status',
        'taskErrorCode'      => 'TaskErrorCode',
        'taskErrorMessage'   => 'TaskErrorMessage',
        'stepsInfo'          => 'StepsInfo',
        'remain'             => 'Remain',
        'stepProgressInfo'   => 'StepProgressInfo',
        'currentStepName'    => 'CurrentStepName',
    ];

    public function validate()
    {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
        Model::validateRequired('progressInfo', $this->progressInfo, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('taskAction', $this->taskAction, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('expectedFinishTime', $this->expectedFinishTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('taskErrorCode', $this->taskErrorCode, true);
        Model::validateRequired('taskErrorMessage', $this->taskErrorMessage, true);
        Model::validateRequired('stepsInfo', $this->stepsInfo, true);
        Model::validateRequired('remain', $this->remain, true);
        Model::validateRequired('stepProgressInfo', $this->stepProgressInfo, true);
        Model::validateRequired('currentStepName', $this->currentStepName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->progressInfo) {
            $res['ProgressInfo'] = $this->progressInfo;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->expectedFinishTime) {
            $res['ExpectedFinishTime'] = $this->expectedFinishTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->stepsInfo) {
            $res['StepsInfo'] = $this->stepsInfo;
        }
        if (null !== $this->remain) {
            $res['Remain'] = $this->remain;
        }
        if (null !== $this->stepProgressInfo) {
            $res['StepProgressInfo'] = $this->stepProgressInfo;
        }
        if (null !== $this->currentStepName) {
            $res['CurrentStepName'] = $this->currentStepName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskProgressInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ProgressInfo'])) {
            $model->progressInfo = $map['ProgressInfo'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ExpectedFinishTime'])) {
            $model->expectedFinishTime = $map['ExpectedFinishTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['StepsInfo'])) {
            $model->stepsInfo = $map['StepsInfo'];
        }
        if (isset($map['Remain'])) {
            $model->remain = $map['Remain'];
        }
        if (isset($map['StepProgressInfo'])) {
            $model->stepProgressInfo = $map['StepProgressInfo'];
        }
        if (isset($map['CurrentStepName'])) {
            $model->currentStepName = $map['CurrentStepName'];
        }

        return $model;
    }
}
