<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse\allProductInitMetricRuleList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponse\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList;
use AlibabaCloud\Tea\Model;

class allProductInitMetricRule extends Model
{
    /**
     * @description productId
     *
     * @var string
     */
    public $product;

    /**
     * @description alertConfigs
     *
     * @var alertInitConfigList
     */
    public $alertInitConfigList;
    protected $_name = [
        'product'             => 'Product',
        'alertInitConfigList' => 'AlertInitConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('alertInitConfigList', $this->alertInitConfigList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->alertInitConfigList) {
            $res['AlertInitConfigList'] = null !== $this->alertInitConfigList ? $this->alertInitConfigList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allProductInitMetricRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['AlertInitConfigList'])) {
            $model->alertInitConfigList = alertInitConfigList::fromMap($map['AlertInitConfigList']);
        }

        return $model;
    }
}
