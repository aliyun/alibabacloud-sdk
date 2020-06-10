<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponse\datapoints;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponse\datapoints\datapoint\dstName;
use AlibabaCloud\Tea\Model;

class datapoint extends Model
{
    /**
     * @description name
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
     * @description metric
     *
     * @var string
     */
    public $metricName;

    /**
     * @description enabled
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description targetWindows
     *
     * @var string
     */
    public $targetWindows;

    /**
     * @description desc
     *
     * @var string
     */
    public $describe;

    /**
     * @description dimension
     *
     * @var string
     */
    public $dimension;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description dstNames
     *
     * @var dstName
     */
    public $dstName;
    protected $_name = [
        'ruleName'      => 'RuleName',
        'namespace'     => 'Namespace',
        'metricName'    => 'MetricName',
        'enabled'       => 'Enabled',
        'targetWindows' => 'TargetWindows',
        'describe'      => 'Describe',
        'dimension'     => 'Dimension',
        'createTime'    => 'CreateTime',
        'dstName'       => 'DstName',
    ];

    public function validate()
    {
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('metricName', $this->metricName, true);
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('targetWindows', $this->targetWindows, true);
        Model::validateRequired('describe', $this->describe, true);
        Model::validateRequired('dimension', $this->dimension, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('dstName', $this->dstName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->targetWindows) {
            $res['TargetWindows'] = $this->targetWindows;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dstName) {
            $res['DstName'] = null !== $this->dstName ? $this->dstName->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datapoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['TargetWindows'])) {
            $model->targetWindows = $map['TargetWindows'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DstName'])) {
            $model->dstName = dstName::fromMap($map['DstName']);
        }

        return $model;
    }
}
