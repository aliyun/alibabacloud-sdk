<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackDriftDetectionStatusResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description DriftDetectionId
     *
     * @var string
     */
    public $driftDetectionId;

    /**
     * @description DriftDetectionTime
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description DriftDetectionStatus
     *
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @description DriftDetectionStatusReason
     *
     * @var string
     */
    public $driftDetectionStatusReason;

    /**
     * @description StackDriftStatus
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description DriftedStackResourceCount
     *
     * @var int
     */
    public $driftedStackResourceCount;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'driftDetectionId'           => 'DriftDetectionId',
        'driftDetectionTime'         => 'DriftDetectionTime',
        'driftDetectionStatus'       => 'DriftDetectionStatus',
        'driftDetectionStatusReason' => 'DriftDetectionStatusReason',
        'stackDriftStatus'           => 'StackDriftStatus',
        'stackId'                    => 'StackId',
        'driftedStackResourceCount'  => 'DriftedStackResourceCount',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('driftDetectionId', $this->driftDetectionId, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
        Model::validateRequired('driftDetectionStatus', $this->driftDetectionStatus, true);
        Model::validateRequired('driftDetectionStatusReason', $this->driftDetectionStatusReason, true);
        Model::validateRequired('stackDriftStatus', $this->stackDriftStatus, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('driftedStackResourceCount', $this->driftedStackResourceCount, true);
    }

    public function toMap()
    {
        $res                               = [];
        $res['RequestId']                  = $this->requestId;
        $res['DriftDetectionId']           = $this->driftDetectionId;
        $res['DriftDetectionTime']         = $this->driftDetectionTime;
        $res['DriftDetectionStatus']       = $this->driftDetectionStatus;
        $res['DriftDetectionStatusReason'] = $this->driftDetectionStatusReason;
        $res['StackDriftStatus']           = $this->stackDriftStatus;
        $res['StackId']                    = $this->stackId;
        $res['DriftedStackResourceCount']  = $this->driftedStackResourceCount;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackDriftDetectionStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['DriftDetectionStatus'])) {
            $model->driftDetectionStatus = $map['DriftDetectionStatus'];
        }
        if (isset($map['DriftDetectionStatusReason'])) {
            $model->driftDetectionStatusReason = $map['DriftDetectionStatusReason'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['DriftedStackResourceCount'])) {
            $model->driftedStackResourceCount = $map['DriftedStackResourceCount'];
        }

        return $model;
    }
}
