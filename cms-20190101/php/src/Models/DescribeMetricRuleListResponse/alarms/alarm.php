<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponse\alarms;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponse\alarms\alarm\escalations;
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
     * @var string
     */
    public $silenceTime;

    /**
     * @description enable
     *
     * @var bool
     */
    public $enableState;

    /**
     * @description state
     *
     * @var string
     */
    public $alertState;

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
     * @description subject
     *
     * @var string
     */
    public $mailSubject;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description resources
     *
     * @var string
     */
    public $resources;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description dimensions
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description sourceType
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description escalations
     *
     * @var escalations
     */
    public $escalations;
    protected $_name = [
        'ruleId'              => 'RuleId',
        'namespace'           => 'Namespace',
        'metricName'          => 'MetricName',
        'period'              => 'Period',
        'effectiveInterval'   => 'EffectiveInterval',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'silenceTime'         => 'SilenceTime',
        'enableState'         => 'EnableState',
        'alertState'          => 'AlertState',
        'contactGroups'       => 'ContactGroups',
        'webhook'             => 'Webhook',
        'mailSubject'         => 'MailSubject',
        'ruleName'            => 'RuleName',
        'resources'           => 'Resources',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'dimensions'          => 'Dimensions',
        'sourceType'          => 'SourceType',
        'escalations'         => 'Escalations',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('period', $this->period, true);
        Model::validateRequired('effectiveInterval', $this->effectiveInterval, true);
        Model::validateRequired('noEffectiveInterval', $this->noEffectiveInterval, true);
        Model::validateRequired('silenceTime', $this->silenceTime, true);
        Model::validateRequired('enableState', $this->enableState, true);
        Model::validateRequired('alertState', $this->alertState, true);
        Model::validateRequired('contactGroups', $this->contactGroups, true);
        Model::validateRequired('webhook', $this->webhook, true);
        Model::validateRequired('mailSubject', $this->mailSubject, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('resources', $this->resources, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('dimensions', $this->dimensions, true);
        Model::validateRequired('sourceType', $this->sourceType, true);
        Model::validateRequired('escalations', $this->escalations, true);
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
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->mailSubject) {
            $res['MailSubject'] = $this->mailSubject;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
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
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['MailSubject'])) {
            $model->mailSubject = $map['MailSubject'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }

        return $model;
    }
}
