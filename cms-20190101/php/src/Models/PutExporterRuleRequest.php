<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutExporterRuleRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description dstNameJson
     *
     * @var array
     */
    public $dstNames;

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
    protected $_name = [
        'ruleName'      => 'RuleName',
        'dstNames'      => 'DstNames',
        'namespace'     => 'Namespace',
        'metricName'    => 'MetricName',
        'targetWindows' => 'TargetWindows',
        'describe'      => 'Describe',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->dstNames) {
            $res['DstNames'] = [];
            if (null !== $this->dstNames) {
                $res['DstNames'] = $this->dstNames;
            }
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->targetWindows) {
            $res['TargetWindows'] = $this->targetWindows;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutExporterRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['DstNames'])) {
            if (!empty($map['DstNames'])) {
                $model->dstNames = [];
                $model->dstNames = $map['DstNames'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['TargetWindows'])) {
            $model->targetWindows = $map['TargetWindows'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }

        return $model;
    }
}
