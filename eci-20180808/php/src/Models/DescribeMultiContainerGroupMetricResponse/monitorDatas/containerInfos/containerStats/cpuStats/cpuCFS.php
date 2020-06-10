<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\cpuStats;

use AlibabaCloud\Tea\Model;

class cpuCFS extends Model
{
    /**
     * @description periods
     *
     * @var int
     */
    public $periods;

    /**
     * @description throttledPeriods
     *
     * @var int
     */
    public $throttledPeriods;

    /**
     * @description throttledTime
     *
     * @var int
     */
    public $throttledTime;
    protected $_name = [
        'periods'          => 'Periods',
        'throttledPeriods' => 'ThrottledPeriods',
        'throttledTime'    => 'ThrottledTime',
    ];

    public function validate()
    {
        Model::validateRequired('periods', $this->periods, true);
        Model::validateRequired('throttledPeriods', $this->throttledPeriods, true);
        Model::validateRequired('throttledTime', $this->throttledTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periods) {
            $res['Periods'] = $this->periods;
        }
        if (null !== $this->throttledPeriods) {
            $res['ThrottledPeriods'] = $this->throttledPeriods;
        }
        if (null !== $this->throttledTime) {
            $res['ThrottledTime'] = $this->throttledTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuCFS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Periods'])) {
            $model->periods = $map['Periods'];
        }
        if (isset($map['ThrottledPeriods'])) {
            $model->throttledPeriods = $map['ThrottledPeriods'];
        }
        if (isset($map['ThrottledTime'])) {
            $model->throttledTime = $map['ThrottledTime'];
        }

        return $model;
    }
}
