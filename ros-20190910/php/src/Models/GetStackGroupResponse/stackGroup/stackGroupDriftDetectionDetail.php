<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse\stackGroup;

use AlibabaCloud\Tea\Model;

class stackGroupDriftDetectionDetail extends Model
{
    /**
     * @description DriftDetectionTime
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description StackGroupDriftStatus
     *
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @description DriftDetectionStatus
     *
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @description DriftedStackInstancesCount
     *
     * @var int
     */
    public $driftedStackInstancesCount;

    /**
     * @description FailedStackInstancesCount
     *
     * @var int
     */
    public $failedStackInstancesCount;

    /**
     * @description CancelledStackInstancesCount
     *
     * @var int
     */
    public $cancelledStackInstancesCount;

    /**
     * @description InProgressStackInstancesCount
     *
     * @var int
     */
    public $inProgressStackInstancesCount;

    /**
     * @description InSyncStackInstancesCount
     *
     * @var int
     */
    public $inSyncStackInstancesCount;

    /**
     * @description TotalStackInstancesCount
     *
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
        $res                                  = [];
        $res['DriftDetectionTime']            = $this->driftDetectionTime;
        $res['StackGroupDriftStatus']         = $this->stackGroupDriftStatus;
        $res['DriftDetectionStatus']          = $this->driftDetectionStatus;
        $res['DriftedStackInstancesCount']    = $this->driftedStackInstancesCount;
        $res['FailedStackInstancesCount']     = $this->failedStackInstancesCount;
        $res['CancelledStackInstancesCount']  = $this->cancelledStackInstancesCount;
        $res['InProgressStackInstancesCount'] = $this->inProgressStackInstancesCount;
        $res['InSyncStackInstancesCount']     = $this->inSyncStackInstancesCount;
        $res['TotalStackInstancesCount']      = $this->totalStackInstancesCount;

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
