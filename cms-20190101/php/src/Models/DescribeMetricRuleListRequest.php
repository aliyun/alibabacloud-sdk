<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricRuleListRequest extends Model
{
    /**
     * @description metricName
     *
     * @var string
     */
    public $metricName;

    /**
     * @description enableState
     *
     * @var bool
     */
    public $enableState;

    /**
     * @description namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description page
     *
     * @var string
     */
    public $page;

    /**
     * @description pageSize
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description alertState
     *
     * @var string
     */
    public $alertState;

    /**
     * @description dimensions
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description displayName
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
     * @description alarmNames
     *
     * @var string
     */
    public $ruleIds;
    protected $_name = [
        'metricName'  => 'MetricName',
        'enableState' => 'EnableState',
        'namespace'   => 'Namespace',
        'page'        => 'Page',
        'pageSize'    => 'PageSize',
        'alertState'  => 'AlertState',
        'dimensions'  => 'Dimensions',
        'ruleName'    => 'RuleName',
        'groupId'     => 'GroupId',
        'ruleIds'     => 'RuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        return $model;
    }
}
