<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse\performanceKeys;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse\performanceKeys\performanceItem\points;
use AlibabaCloud\Tea\Model;

class performanceItem extends Model
{
    /**
     * @description metricName
     *
     * @var string
     */
    public $metricName;

    /**
     * @description measurement
     *
     * @var string
     */
    public $measurement;

    /**
     * @description points
     *
     * @var points
     */
    public $points;
    protected $_name = [
        'metricName'  => 'MetricName',
        'measurement' => 'Measurement',
        'points'      => 'Points',
    ];

    public function validate()
    {
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('measurement', $this->measurement, true);
        Model::validateRequired('points', $this->points, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->measurement) {
            $res['Measurement'] = $this->measurement;
        }
        if (null !== $this->points) {
            $res['Points'] = null !== $this->points ? $this->points->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Measurement'])) {
            $model->measurement = $map['Measurement'];
        }
        if (isset($map['Points'])) {
            $model->points = points::fromMap($map['Points']);
        }

        return $model;
    }
}
