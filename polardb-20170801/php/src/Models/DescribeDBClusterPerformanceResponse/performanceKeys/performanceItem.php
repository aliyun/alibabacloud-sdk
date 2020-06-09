<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse\performanceKeys;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse\performanceKeys\performanceItem\points;

class performanceItem extends Model {
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
        'measurement' => 'Measurement',
        'metricName' => 'MetricName',
        'points' => 'Points',
    ];
    public function validate() {
        Model::validateRequired('DBNodeId', $this->DBNodeId, true);
        Model::validateRequired('measurement', $this->measurement, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('points', $this->points, true);
    }
    public function toMap() {
        $res = [];
        $res['DBNodeId'] = $this->DBNodeId;
        $res['Measurement'] = $this->measurement;
        $res['MetricName'] = $this->metricName;
        $res['Points'] = null !== $this->points ? $this->points->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return performanceItem
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBNodeId'])){
            $model->DBNodeId = $map['DBNodeId'];
        }
        if(isset($map['Measurement'])){
            $model->measurement = $map['Measurement'];
        }
        if(isset($map['MetricName'])){
            $model->metricName = $map['MetricName'];
        }
        if(isset($map['Points'])){
            $model->points = points::fromMap($map['Points']);
        }
        return $model;
    }
    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBNodeId;

    /**
     * @description measurement
     * @var string
     */
    public $measurement;

    /**
     * @description metricName
     * @var string
     */
    public $metricName;

    /**
     * @description points
     * @var points
     */
    public $points;

}
