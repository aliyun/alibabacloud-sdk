<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory\contactALIIMs;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory\contactGroups;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory\contactMails;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory\contacts;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory\contactSmses;
use AlibabaCloud\Tea\Model;

class alarmHistory extends Model
{
    /**
     * @description alertName
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

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
     * @description expression
     *
     * @var string
     */
    public $expression;

    /**
     * @description evaluationCount
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description alertTime
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description lastTime
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description level
     *
     * @var string
     */
    public $level;

    /**
     * @description preLevel
     *
     * @var string
     */
    public $preLevel;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description notifyStatus
     *
     * @var int
     */
    public $status;

    /**
     * @description webhook
     *
     * @var string
     */
    public $webhooks;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description contactGroups
     *
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @description contacts
     *
     * @var contacts
     */
    public $contacts;

    /**
     * @description contactALIIM
     *
     * @var contactALIIMs
     */
    public $contactALIIMs;

    /**
     * @description contactSms
     *
     * @var contactSmses
     */
    public $contactSmses;

    /**
     * @description contactMail
     *
     * @var contactMails
     */
    public $contactMails;
    protected $_name = [
        'ruleId'          => 'RuleId',
        'groupId'         => 'GroupId',
        'namespace'       => 'Namespace',
        'metricName'      => 'MetricName',
        'dimensions'      => 'Dimensions',
        'expression'      => 'Expression',
        'evaluationCount' => 'EvaluationCount',
        'value'           => 'Value',
        'alertTime'       => 'AlertTime',
        'lastTime'        => 'LastTime',
        'level'           => 'Level',
        'preLevel'        => 'PreLevel',
        'ruleName'        => 'RuleName',
        'state'           => 'State',
        'status'          => 'Status',
        'webhooks'        => 'Webhooks',
        'instanceName'    => 'InstanceName',
        'contactGroups'   => 'ContactGroups',
        'contacts'        => 'Contacts',
        'contactALIIMs'   => 'ContactALIIMs',
        'contactSmses'    => 'ContactSmses',
        'contactMails'    => 'ContactMails',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('dimensions', $this->dimensions, true);
        Model::validateRequired('expression', $this->expression, true);
        Model::validateRequired('evaluationCount', $this->evaluationCount, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('alertTime', $this->alertTime, true);
        Model::validateRequired('lastTime', $this->lastTime, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('preLevel', $this->preLevel, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('webhooks', $this->webhooks, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('contactGroups', $this->contactGroups, true);
        Model::validateRequired('contacts', $this->contacts, true);
        Model::validateRequired('contactALIIMs', $this->contactALIIMs, true);
        Model::validateRequired('contactSmses', $this->contactSmses, true);
        Model::validateRequired('contactMails', $this->contactMails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->preLevel) {
            $res['PreLevel'] = $this->preLevel;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }
        if (null !== $this->contactALIIMs) {
            $res['ContactALIIMs'] = null !== $this->contactALIIMs ? $this->contactALIIMs->toMap() : null;
        }
        if (null !== $this->contactSmses) {
            $res['ContactSmses'] = null !== $this->contactSmses ? $this->contactSmses->toMap() : null;
        }
        if (null !== $this->contactMails) {
            $res['ContactMails'] = null !== $this->contactMails ? $this->contactMails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PreLevel'])) {
            $model->preLevel = $map['PreLevel'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }
        if (isset($map['ContactALIIMs'])) {
            $model->contactALIIMs = contactALIIMs::fromMap($map['ContactALIIMs']);
        }
        if (isset($map['ContactSmses'])) {
            $model->contactSmses = contactSmses::fromMap($map['ContactSmses']);
        }
        if (isset($map['ContactMails'])) {
            $model->contactMails = contactMails::fromMap($map['ContactMails']);
        }

        return $model;
    }
}
