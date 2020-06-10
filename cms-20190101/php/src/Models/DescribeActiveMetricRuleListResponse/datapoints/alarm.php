<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\datapoints;

use AlibabaCloud\Tea\Model;

class alarm extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $ruleId;

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
     * @description period
     *
     * @var string
     */
    public $period;

    /**
     * @description statistics
     *
     * @var string
     */
    public $statistics;

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
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description silenceTime
     *
     * @var string
     */
    public $silenceTime;

    /**
     * @description enable
     *
     * @var string
     */
    public $enable;

    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description contactGroups
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description webhook
     *
     * @var string
     */
    public $webhook;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'ruleId'             => 'RuleId',
        'namespace'          => 'Namespace',
        'metricName'         => 'MetricName',
        'period'             => 'Period',
        'statistics'         => 'Statistics',
        'comparisonOperator' => 'ComparisonOperator',
        'threshold'          => 'Threshold',
        'evaluationCount'    => 'EvaluationCount',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'silenceTime'        => 'SilenceTime',
        'enable'             => 'Enable',
        'state'              => 'State',
        'contactGroups'      => 'ContactGroups',
        'webhook'            => 'Webhook',
        'ruleName'           => 'RuleName',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('period', $this->period, true);
        Model::validateRequired('statistics', $this->statistics, true);
        Model::validateRequired('comparisonOperator', $this->comparisonOperator, true);
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('evaluationCount', $this->evaluationCount, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('silenceTime', $this->silenceTime, true);
        Model::validateRequired('enable', $this->enable, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('contactGroups', $this->contactGroups, true);
        Model::validateRequired('webhook', $this->webhook, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
