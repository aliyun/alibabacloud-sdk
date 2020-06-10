<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse\metricRules;

use AlibabaCloud\Tea\Model;

class metricRule extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;

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
     * @description okActions
     *
     * @var string
     */
    public $okActions;

    /**
     * @description alarmActions
     *
     * @var string
     */
    public $alarmActions;

    /**
     * @description statistics
     *
     * @var string
     */
    public $statistics;

    /**
     * @description actionEnable
     *
     * @var string
     */
    public $actionEnable;

    /**
     * @description period
     *
     * @var string
     */
    public $period;

    /**
     * @description comparisonOperator
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description threshold
     *
     * @var string
     */
    public $threshold;

    /**
     * @description evaluationCount
     *
     * @var string
     */
    public $evaluationCount;

    /**
     * @description level
     *
     * @var string
     */
    public $level;

    /**
     * @description expression
     *
     * @var string
     */
    public $expression;

    /**
     * @description stateValue
     *
     * @var string
     */
    public $stateValue;

    /**
     * @description dimensions
     *
     * @var string
     */
    public $dimensions;
    protected $_name = [
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'namespace'          => 'Namespace',
        'metricName'         => 'MetricName',
        'okActions'          => 'OkActions',
        'alarmActions'       => 'AlarmActions',
        'statistics'         => 'Statistics',
        'actionEnable'       => 'ActionEnable',
        'period'             => 'Period',
        'comparisonOperator' => 'ComparisonOperator',
        'threshold'          => 'Threshold',
        'evaluationCount'    => 'EvaluationCount',
        'level'              => 'Level',
        'expression'         => 'Expression',
        'stateValue'         => 'StateValue',
        'dimensions'         => 'Dimensions',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('okActions', $this->okActions, true);
        Model::validateRequired('alarmActions', $this->alarmActions, true);
        Model::validateRequired('statistics', $this->statistics, true);
        Model::validateRequired('actionEnable', $this->actionEnable, true);
        Model::validateRequired('period', $this->period, true);
        Model::validateRequired('comparisonOperator', $this->comparisonOperator, true);
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('evaluationCount', $this->evaluationCount, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('expression', $this->expression, true);
        Model::validateRequired('stateValue', $this->stateValue, true);
        Model::validateRequired('dimensions', $this->dimensions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->okActions) {
            $res['OkActions'] = $this->okActions;
        }
        if (null !== $this->alarmActions) {
            $res['AlarmActions'] = $this->alarmActions;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->actionEnable) {
            $res['ActionEnable'] = $this->actionEnable;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->stateValue) {
            $res['StateValue'] = $this->stateValue;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['OkActions'])) {
            $model->okActions = $map['OkActions'];
        }
        if (isset($map['AlarmActions'])) {
            $model->alarmActions = $map['AlarmActions'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['ActionEnable'])) {
            $model->actionEnable = $map['ActionEnable'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['StateValue'])) {
            $model->stateValue = $map['StateValue'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }

        return $model;
    }
}
