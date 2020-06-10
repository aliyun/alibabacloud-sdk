<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest\escalations;
use AlibabaCloud\Tea\Model;

class PutGroupMetricRuleRequest extends Model
{
    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description alertName
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description displayName
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
     * @description dimensions
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description effectiveInterval
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description noEffectiveInterval
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description silenceTime
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description period
     *
     * @var string
     */
    public $period;

    /**
     * @description interval
     *
     * @var string
     */
    public $interval;

    /**
     * @description webhook
     *
     * @var string
     */
    public $webhook;

    /**
     * @description subject
     *
     * @var string
     */
    public $emailSubject;

    /**
     * @description Escalations
     *
     * @var escalations
     */
    public $escalations;
    protected $_name = [
        'groupId'             => 'GroupId',
        'ruleId'              => 'RuleId',
        'category'            => 'Category',
        'ruleName'            => 'RuleName',
        'namespace'           => 'Namespace',
        'metricName'          => 'MetricName',
        'dimensions'          => 'Dimensions',
        'effectiveInterval'   => 'EffectiveInterval',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'silenceTime'         => 'SilenceTime',
        'period'              => 'Period',
        'interval'            => 'Interval',
        'webhook'             => 'Webhook',
        'emailSubject'        => 'EmailSubject',
        'escalations'         => 'Escalations',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('escalations', $this->escalations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutGroupMetricRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }

        return $model;
    }
}
