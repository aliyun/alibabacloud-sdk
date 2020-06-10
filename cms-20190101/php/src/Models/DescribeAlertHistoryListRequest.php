<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertHistoryListRequest extends Model
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
     * @description metricProject
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
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description ascending
     *
     * @var bool
     */
    public $ascending;

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
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description page
     *
     * @var int
     */
    public $page;
    protected $_name = [
        'ruleId'     => 'RuleId',
        'ruleName'   => 'RuleName',
        'namespace'  => 'Namespace',
        'metricName' => 'MetricName',
        'groupId'    => 'GroupId',
        'status'     => 'Status',
        'state'      => 'State',
        'ascending'  => 'Ascending',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'pageSize'   => 'PageSize',
        'page'       => 'Page',
    ];

    public function validate()
    {
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->ascending) {
            $res['Ascending'] = $this->ascending;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertHistoryListRequest
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Ascending'])) {
            $model->ascending = $map['Ascending'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        return $model;
    }
}
