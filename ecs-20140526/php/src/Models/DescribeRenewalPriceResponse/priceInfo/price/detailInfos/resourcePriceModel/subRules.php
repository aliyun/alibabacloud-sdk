<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse\priceInfo\price\detailInfos\resourcePriceModel;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse\priceInfo\price\detailInfos\resourcePriceModel\subRules\rule;
use AlibabaCloud\Tea\Model;

class subRules extends Model
{
    /**
     * @description Rule
     *
     * @var array
     */
    public $rule;
    protected $_name = [
        'rule' => 'Rule',
    ];

    public function validate()
    {
        Model::validateRequired('rule', $this->rule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rule) {
            $res['Rule'] = [];
            if (null !== $this->rule && \is_array($this->rule)) {
                $n = 0;
                foreach ($this->rule as $item) {
                    $res['Rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n           = 0;
                foreach ($map['Rule'] as $item) {
                    $model->rule[$n++] = null !== $item ? rule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
