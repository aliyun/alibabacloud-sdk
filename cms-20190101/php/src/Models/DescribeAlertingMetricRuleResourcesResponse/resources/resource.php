<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponse\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description alertName
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
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description dimensions
     *
     * @var string
     */
    public $resource;

    /**
     * @description enable
     *
     * @var string
     */
    public $enable;

    /**
     * @description lastAlertTime
     *
     * @var string
     */
    public $lastAlertTime;

    /**
     * @description lstModTime
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description metricValues
     *
     * @var string
     */
    public $metricValues;

    /**
     * @description retryTimes
     *
     * @var string
     */
    public $retryTimes;

    /**
     * @description threshold
     *
     * @var string
     */
    public $threshold;
    protected $_name = [
        'ruleId'         => 'RuleId',
        'ruleName'       => 'RuleName',
        'groupId'        => 'GroupId',
        'resource'       => 'Resource',
        'enable'         => 'Enable',
        'lastAlertTime'  => 'LastAlertTime',
        'lastModifyTime' => 'LastModifyTime',
        'startTime'      => 'StartTime',
        'metricValues'   => 'MetricValues',
        'retryTimes'     => 'RetryTimes',
        'threshold'      => 'Threshold',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('enable', $this->enable, true);
        Model::validateRequired('lastAlertTime', $this->lastAlertTime, true);
        Model::validateRequired('lastModifyTime', $this->lastModifyTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('metricValues', $this->metricValues, true);
        Model::validateRequired('retryTimes', $this->retryTimes, true);
        Model::validateRequired('threshold', $this->threshold, true);
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->lastAlertTime) {
            $res['LastAlertTime'] = $this->lastAlertTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->metricValues) {
            $res['MetricValues'] = $this->metricValues;
        }
        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['LastAlertTime'])) {
            $model->lastAlertTime = $map['LastAlertTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['MetricValues'])) {
            $model->metricValues = $map['MetricValues'];
        }
        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
