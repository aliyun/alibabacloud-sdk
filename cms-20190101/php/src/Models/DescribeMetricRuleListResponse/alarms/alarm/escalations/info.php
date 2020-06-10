<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponse\alarms\alarm\escalations;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @description comparisonOperator
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description statistics
     *
     * @var string
     */
    public $statistics;

    /**
     * @description threshold
     *
     * @var string
     */
    public $threshold;

    /**
     * @description times
     *
     * @var string
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'times'              => 'Times',
    ];

    public function validate()
    {
        Model::validateRequired('comparisonOperator', $this->comparisonOperator, true);
        Model::validateRequired('statistics', $this->statistics, true);
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('times', $this->times, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
