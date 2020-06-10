<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse\metricRules\metricRule;
use AlibabaCloud\Tea\Model;

class metricRules extends Model
{
    /**
     * @description MetricRule
     *
     * @var array
     */
    public $metricRule;
    protected $_name = [
        'metricRule' => 'MetricRule',
    ];

    public function validate()
    {
        Model::validateRequired('metricRule', $this->metricRule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricRule) {
            $res['MetricRule'] = [];
            if (null !== $this->metricRule && \is_array($this->metricRule)) {
                $n = 0;
                foreach ($this->metricRule as $item) {
                    $res['MetricRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricRule'])) {
            if (!empty($map['MetricRule'])) {
                $model->metricRule = [];
                $n                 = 0;
                foreach ($map['MetricRule'] as $item) {
                    $model->metricRule[$n++] = null !== $item ? metricRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
