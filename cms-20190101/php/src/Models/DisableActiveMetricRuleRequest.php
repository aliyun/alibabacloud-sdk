<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DisableActiveMetricRuleRequest extends Model
{
    /**
     * @description product
     *
     * @var string
     */
    public $product;
    protected $_name = [
        'product' => 'Product',
    ];

    public function validate()
    {
        Model::validateRequired('product', $this->product, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableActiveMetricRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
