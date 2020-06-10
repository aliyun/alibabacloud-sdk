<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponse\operationProgressSet;
use AlibabaCloud\Tea\Model;

class DescribeTaskAttributeResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description data.regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.taskAction
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description data.taskStatus
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description data.taskProcess
     *
     * @var string
     */
    public $taskProcess;

    /**
     * @description data.supportCancel
     *
     * @var string
     */
    public $supportCancel;

    /**
     * @description data.totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description data.successCount
     *
     * @var int
     */
    public $successCount;

    /**
     * @description data.failedCount
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description data.creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description data.finishedTime
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description data.operationProgressSet
     *
     * @var operationProgressSet
     */
    public $operationProgressSet;
    protected $_name = [
        'requestId'            => 'RequestId',
        'taskId'               => 'TaskId',
        'regionId'             => 'RegionId',
        'taskAction'           => 'TaskAction',
        'taskStatus'           => 'TaskStatus',
        'taskProcess'          => 'TaskProcess',
        'supportCancel'        => 'SupportCancel',
        'totalCount'           => 'TotalCount',
        'successCount'         => 'SuccessCount',
        'failedCount'          => 'FailedCount',
        'creationTime'         => 'CreationTime',
        'finishedTime'         => 'FinishedTime',
        'operationProgressSet' => 'OperationProgressSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('taskAction', $this->taskAction, true);
        Model::validateRequired('taskStatus', $this->taskStatus, true);
        Model::validateRequired('taskProcess', $this->taskProcess, true);
        Model::validateRequired('supportCancel', $this->supportCancel, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('successCount', $this->successCount, true);
        Model::validateRequired('failedCount', $this->failedCount, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('finishedTime', $this->finishedTime, true);
        Model::validateRequired('operationProgressSet', $this->operationProgressSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->operationProgressSet) {
            $res['OperationProgressSet'] = null !== $this->operationProgressSet ? $this->operationProgressSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskAttributeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['OperationProgressSet'])) {
            $model->operationProgressSet = operationProgressSet::fromMap($map['OperationProgressSet']);
        }

        return $model;
    }
}
