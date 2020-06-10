<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse\resource\alertTemplates;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponse\resource\alertTemplates\alertTemplate\escalations;
use AlibabaCloud\Tea\Model;

class alertTemplate extends Model
{
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
     * @description metricName
     *
     * @var string
     */
    public $metricName;

    /**
     * @description selector
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
     * @description escalations
     *
     * @var escalations
     */
    public $escalations;
    protected $_name = [
        'ruleName'    => 'RuleName',
        'category'    => 'Category',
        'namespace'   => 'Namespace',
        'metricName'  => 'MetricName',
        'selector'    => 'Selector',
        'webhook'     => 'Webhook',
        'escalations' => 'Escalations',
    ];

    public function validate()
    {
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('selector', $this->selector, true);
        Model::validateRequired('webhook', $this->webhook, true);
        Model::validateRequired('escalations', $this->escalations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
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
     * @return alertTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
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
