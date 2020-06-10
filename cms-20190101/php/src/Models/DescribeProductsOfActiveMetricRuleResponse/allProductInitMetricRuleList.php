<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse\allProductInitMetricRuleList\allProductInitMetricRule;
use AlibabaCloud\Tea\Model;

class allProductInitMetricRuleList extends Model
{
    /**
     * @description AllProductInitMetricRule
     *
     * @var array
     */
    public $allProductInitMetricRule;
    protected $_name = [
        'allProductInitMetricRule' => 'AllProductInitMetricRule',
    ];

    public function validate()
    {
        Model::validateRequired('allProductInitMetricRule', $this->allProductInitMetricRule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allProductInitMetricRule) {
            $res['AllProductInitMetricRule'] = [];
            if (null !== $this->allProductInitMetricRule && \is_array($this->allProductInitMetricRule)) {
                $n = 0;
                foreach ($this->allProductInitMetricRule as $item) {
                    $res['AllProductInitMetricRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allProductInitMetricRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllProductInitMetricRule'])) {
            if (!empty($map['AllProductInitMetricRule'])) {
                $model->allProductInitMetricRule = [];
                $n                               = 0;
                foreach ($map['AllProductInitMetricRule'] as $item) {
                    $model->allProductInitMetricRule[$n++] = null !== $item ? allProductInitMetricRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
