<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class operationPreferences extends Model
{
    /**
     * @description FailureToleranceCount
     *
     * @var int
     */
    public $failureToleranceCount;

    /**
     * @description FailureTolerancePercentage
     *
     * @var int
     */
    public $failureTolerancePercentage;

    /**
     * @description MaxConcurrentCount
     *
     * @var int
     */
    public $maxConcurrentCount;

    /**
     * @description MaxConcurrentPercentage
     *
     * @var int
     */
    public $maxConcurrentPercentage;

    /**
     * @description RegionIdsOrder
     *
     * @var array
     */
    public $regionIdsOrder;
    protected $_name = [
        'failureToleranceCount'      => 'FailureToleranceCount',
        'failureTolerancePercentage' => 'FailureTolerancePercentage',
        'maxConcurrentCount'         => 'MaxConcurrentCount',
        'maxConcurrentPercentage'    => 'MaxConcurrentPercentage',
        'regionIdsOrder'             => 'RegionIdsOrder',
    ];

    public function validate()
    {
        Model::validateRequired('failureToleranceCount', $this->failureToleranceCount, true);
        Model::validateRequired('failureTolerancePercentage', $this->failureTolerancePercentage, true);
        Model::validateRequired('maxConcurrentCount', $this->maxConcurrentCount, true);
        Model::validateRequired('maxConcurrentPercentage', $this->maxConcurrentPercentage, true);
        Model::validateRequired('regionIdsOrder', $this->regionIdsOrder, true);
    }

    public function toMap()
    {
        $res                               = [];
        $res['FailureToleranceCount']      = $this->failureToleranceCount;
        $res['FailureTolerancePercentage'] = $this->failureTolerancePercentage;
        $res['MaxConcurrentCount']         = $this->maxConcurrentCount;
        $res['MaxConcurrentPercentage']    = $this->maxConcurrentPercentage;
        $res['RegionIdsOrder']             = [];
        if (null !== $this->regionIdsOrder) {
            $res['RegionIdsOrder'] = $this->regionIdsOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationPreferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureToleranceCount'])) {
            $model->failureToleranceCount = $map['FailureToleranceCount'];
        }
        if (isset($map['FailureTolerancePercentage'])) {
            $model->failureTolerancePercentage = $map['FailureTolerancePercentage'];
        }
        if (isset($map['MaxConcurrentCount'])) {
            $model->maxConcurrentCount = $map['MaxConcurrentCount'];
        }
        if (isset($map['MaxConcurrentPercentage'])) {
            $model->maxConcurrentPercentage = $map['MaxConcurrentPercentage'];
        }
        if (isset($map['RegionIdsOrder'])) {
            if (!empty($map['RegionIdsOrder'])) {
                $model->regionIdsOrder = [];
                $model->regionIdsOrder = $map['RegionIdsOrder'];
            }
        }

        return $model;
    }
}
