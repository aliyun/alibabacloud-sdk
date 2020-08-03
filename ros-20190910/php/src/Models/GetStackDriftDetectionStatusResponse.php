<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackDriftDetectionStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $driftDetectionId;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @var string
     */
    public $driftDetectionStatusReason;

    /**
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @var string
     */
    public $stackId;

    /**
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
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->driftDetectionStatus) {
            $res['DriftDetectionStatus'] = $this->driftDetectionStatus;
        }
        if (null !== $this->driftDetectionStatusReason) {
            $res['DriftDetectionStatusReason'] = $this->driftDetectionStatusReason;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->driftedStackResourceCount) {
            $res['DriftedStackResourceCount'] = $this->driftedStackResourceCount;
        }

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
