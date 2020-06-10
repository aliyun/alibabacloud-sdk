<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList;

use AlibabaCloud\Tea\Model;

class alertInitConfig extends Model
{
    /**
     * @description namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description metricName
     *
     * @var string
     */
    public $metricName;

    /**
     * @description statistics
     *
     * @var string
     */
    public $statistics;

    /**
     * @description evaluationCount
     *
     * @var string
     */
    public $evaluationCount;

    /**
     * @description threshold
     *
     * @var string
     */
    public $threshold;

    /**
     * @description period
     *
     * @var string
     */
    public $period;
    protected $_name = [
        'namespace'       => 'Namespace',
        'metricName'      => 'MetricName',
        'statistics'      => 'Statistics',
        'evaluationCount' => 'EvaluationCount',
        'threshold'       => 'Threshold',
        'period'          => 'Period',
    ];

    public function validate()
    {
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('statistics', $this->statistics, true);
        Model::validateRequired('evaluationCount', $this->evaluationCount, true);
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('period', $this->period, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertInitConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
