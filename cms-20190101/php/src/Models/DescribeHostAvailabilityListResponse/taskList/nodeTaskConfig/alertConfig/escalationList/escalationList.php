<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig\alertConfig\escalationList;

use AlibabaCloud\Tea\Model;

class escalationList extends Model
{
    /**
     * @description metric
     *
     * @var string
     */
    public $metricName;

    /**
     * @description aggregate
     *
     * @var string
     */
    public $aggregate;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description times
     *
     * @var string
     */
    public $times;
    protected $_name = [
        'metricName' => 'MetricName',
        'aggregate'  => 'Aggregate',
        'operator'   => 'Operator',
        'value'      => 'Value',
        'times'      => 'Times',
    ];

    public function validate()
    {
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('aggregate', $this->aggregate, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('times', $this->times, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->aggregate) {
            $res['Aggregate'] = $this->aggregate;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Aggregate'])) {
            $model->aggregate = $map['Aggregate'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
