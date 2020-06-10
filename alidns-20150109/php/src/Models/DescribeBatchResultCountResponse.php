<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultCountResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.status
     *
     * @var int
     */
    public $status;

    /**
     * @description module.totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description module.successCount
     *
     * @var int
     */
    public $successCount;

    /**
     * @description module.failedCount
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description module.reason
     *
     * @var string
     */
    public $reason;

    /**
     * @description module.batchType
     *
     * @var string
     */
    public $batchType;

    /**
     * @description module.taskId
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'status'       => 'Status',
        'totalCount'   => 'TotalCount',
        'successCount' => 'SuccessCount',
        'failedCount'  => 'FailedCount',
        'reason'       => 'Reason',
        'batchType'    => 'BatchType',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('successCount', $this->successCount, true);
        Model::validateRequired('failedCount', $this->failedCount, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('batchType', $this->batchType, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchResultCountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
