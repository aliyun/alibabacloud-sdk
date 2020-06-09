<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultCountResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'status' => 'Status',
        'totalCount' => 'TotalCount',
        'successCount' => 'SuccessCount',
        'failedCount' => 'FailedCount',
        'reason' => 'Reason',
        'batchType' => 'BatchType',
        'taskId' => 'TaskId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('successCount', $this->successCount, true);
        Model::validateRequired('failedCount', $this->failedCount, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('batchType', $this->batchType, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Status'] = $this->status;
        $res['TotalCount'] = $this->totalCount;
        $res['SuccessCount'] = $this->successCount;
        $res['FailedCount'] = $this->failedCount;
        $res['Reason'] = $this->reason;
        $res['BatchType'] = $this->batchType;
        $res['TaskId'] = $this->taskId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeBatchResultCountResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['SuccessCount'])){
            $model->successCount = $map['SuccessCount'];
        }
        if(isset($map['FailedCount'])){
            $model->failedCount = $map['FailedCount'];
        }
        if(isset($map['Reason'])){
            $model->reason = $map['Reason'];
        }
        if(isset($map['BatchType'])){
            $model->batchType = $map['BatchType'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.status
     * @var integer
     */
    public $status;

    /**
     * @description module.totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description module.successCount
     * @var integer
     */
    public $successCount;

    /**
     * @description module.failedCount
     * @var integer
     */
    public $failedCount;

    /**
     * @description module.reason
     * @var string
     */
    public $reason;

    /**
     * @description module.batchType
     * @var string
     */
    public $batchType;

    /**
     * @description module.taskId
     * @var integer
     */
    public $taskId;

}
