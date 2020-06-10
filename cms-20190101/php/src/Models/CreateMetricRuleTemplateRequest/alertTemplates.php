<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateRequest\alertTemplates\escalations;
use AlibabaCloud\Tea\Model;

class alertTemplates extends Model
{
    /**
     * @description metricName
     *
     * @var string
     */
    public $metricName;

    /**
     * @description displayName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description selectorJson
     *
     * @var string
     */
    public $selector;

    /**
     * @description webhook
     *
     * @var string
     */
    public $webhook;

    /**
     * @description Escalations
     *
     * @var escalations
     */
    public $escalations;
    protected $_name = [
        'metricName'  => 'MetricName',
        'ruleName'    => 'RuleName',
        'category'    => 'Category',
        'namespace'   => 'Namespace',
        'period'      => 'Period',
        'selector'    => 'Selector',
        'webhook'     => 'Webhook',
        'escalations' => 'Escalations',
    ];

    public function validate()
    {
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('period', $this->period, true);
        Model::validateRequired('selector', $this->selector, true);
        Model::validateRequired('webhook', $this->webhook, true);
        Model::validateRequired('escalations', $this->escalations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }

        return $model;
    }
}
