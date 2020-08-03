<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse\stackGroup;

use AlibabaCloud\Tea\Model;

class stackGroupDriftDetectionDetail extends Model
{
    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @var int
     */
    public $driftedStackInstancesCount;

    /**
     * @var int
     */
    public $failedStackInstancesCount;

    /**
     * @var int
     */
    public $cancelledStackInstancesCount;

    /**
     * @var int
     */
    public $inProgressStackInstancesCount;

    /**
     * @var int
     */
    public $inSyncStackInstancesCount;

    /**
     * @var int
     */
    public $totalStackInstancesCount;
    protected $_name = [
        'driftDetectionTime'            => 'DriftDetectionTime',
        'stackGroupDriftStatus'         => 'StackGroupDriftStatus',
        'driftDetectionStatus'          => 'DriftDetectionStatus',
        'driftedStackInstancesCount'    => 'DriftedStackInstancesCount',
        'failedStackInstancesCount'     => 'FailedStackInstancesCount',
        'cancelledStackInstancesCount'  => 'CancelledStackInstancesCount',
        'inProgressStackInstancesCount' => 'InProgressStackInstancesCount',
        'inSyncStackInstancesCount'     => 'InSyncStackInstancesCount',
        'totalStackInstancesCount'      => 'TotalStackInstancesCount',
    ];

    public function validate()
    {
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
        Model::validateRequired('stackGroupDriftStatus', $this->stackGroupDriftStatus, true);
        Model::validateRequired('driftDetectionStatus', $this->driftDetectionStatus, true);
        Model::validateRequired('driftedStackInstancesCount', $this->driftedStackInstancesCount, true);
        Model::validateRequired('failedStackInstancesCount', $this->failedStackInstancesCount, true);
        Model::validateRequired('cancelledStackInstancesCount', $this->cancelledStackInstancesCount, true);
        Model::validateRequired('inProgressStackInstancesCount', $this->inProgressStackInstancesCount, true);
        Model::validateRequired('inSyncStackInstancesCount', $this->inSyncStackInstancesCount, true);
        Model::validateRequired('totalStackInstancesCount', $this->totalStackInstancesCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->stackGroupDriftStatus) {
            $res['StackGroupDriftStatus'] = $this->stackGroupDriftStatus;
        }
        if (null !== $this->driftDetectionStatus) {
            $res['DriftDetectionStatus'] = $this->driftDetectionStatus;
        }
        if (null !== $this->driftedStackInstancesCount) {
            $res['DriftedStackInstancesCount'] = $this->driftedStackInstancesCount;
        }
        if (null !== $this->failedStackInstancesCount) {
            $res['FailedStackInstancesCount'] = $this->failedStackInstancesCount;
        }
        if (null !== $this->cancelledStackInstancesCount) {
            $res['CancelledStackInstancesCount'] = $this->cancelledStackInstancesCount;
        }
        if (null !== $this->inProgressStackInstancesCount) {
            $res['InProgressStackInstancesCount'] = $this->inProgressStackInstancesCount;
        }
        if (null !== $this->inSyncStackInstancesCount) {
            $res['InSyncStackInstancesCount'] = $this->inSyncStackInstancesCount;
        }
        if (null !== $this->totalStackInstancesCount) {
            $res['TotalStackInstancesCount'] = $this->totalStackInstancesCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupDriftDetectionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['StackGroupDriftStatus'])) {
            $model->stackGroupDriftStatus = $map['StackGroupDriftStatus'];
        }
        if (isset($map['DriftDetectionStatus'])) {
            $model->driftDetectionStatus = $map['DriftDetectionStatus'];
        }
        if (isset($map['DriftedStackInstancesCount'])) {
            $model->driftedStackInstancesCount = $map['DriftedStackInstancesCount'];
        }
        if (isset($map['FailedStackInstancesCount'])) {
            $model->failedStackInstancesCount = $map['FailedStackInstancesCount'];
        }
        if (isset($map['CancelledStackInstancesCount'])) {
            $model->cancelledStackInstancesCount = $map['CancelledStackInstancesCount'];
        }
        if (isset($map['InProgressStackInstancesCount'])) {
            $model->inProgressStackInstancesCount = $map['InProgressStackInstancesCount'];
        }
        if (isset($map['InSyncStackInstancesCount'])) {
            $model->inSyncStackInstancesCount = $map['InSyncStackInstancesCount'];
        }
        if (isset($map['TotalStackInstancesCount'])) {
            $model->totalStackInstancesCount = $map['TotalStackInstancesCount'];
        }

        return $model;
    }
}
