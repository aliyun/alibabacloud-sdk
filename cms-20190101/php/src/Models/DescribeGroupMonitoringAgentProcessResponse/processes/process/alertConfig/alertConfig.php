<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse\processes\process\alertConfig;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
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
     * @description webhook
     *
     * @var string
     */
    public $webhook;

    /**
     * @description escalationsLevel
     *
     * @var string
     */
    public $escalationsLevel;

    /**
     * @description comparisonOperator
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description statistics
     *
     * @var string
     */
    public $statistics;

    /**
     * @description threshold
     *
     * @var string
     */
    public $threshold;

    /**
     * @description times
     *
     * @var string
     */
    public $times;
    protected $_name = [
        'effectiveInterval'   => 'EffectiveInterval',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'silenceTime'         => 'SilenceTime',
        'webhook'             => 'Webhook',
        'escalationsLevel'    => 'EscalationsLevel',
        'comparisonOperator'  => 'ComparisonOperator',
        'statistics'          => 'Statistics',
        'threshold'           => 'Threshold',
        'times'               => 'Times',
    ];

    public function validate()
    {
        Model::validateRequired('effectiveInterval', $this->effectiveInterval, true);
        Model::validateRequired('noEffectiveInterval', $this->noEffectiveInterval, true);
        Model::validateRequired('silenceTime', $this->silenceTime, true);
        Model::validateRequired('webhook', $this->webhook, true);
        Model::validateRequired('escalationsLevel', $this->escalationsLevel, true);
        Model::validateRequired('comparisonOperator', $this->comparisonOperator, true);
        Model::validateRequired('statistics', $this->statistics, true);
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('times', $this->times, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->escalationsLevel) {
            $res['EscalationsLevel'] = $this->escalationsLevel;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['EscalationsLevel'])) {
            $model->escalationsLevel = $map['EscalationsLevel'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
