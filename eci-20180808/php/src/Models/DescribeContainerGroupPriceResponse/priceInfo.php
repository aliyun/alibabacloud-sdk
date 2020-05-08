<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupPriceResponse;

use AlibabaCloud\SDK\ECI\V20180808\Models\priceInfo\price;
use AlibabaCloud\SDK\ECI\V20180808\Models\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @description rules
     *
     * @var priceInfo.rules
     */
    public $rules;

    /**
     * @description price
     *
     * @var priceInfo.price
     */
    public $price;
    protected $_name = [
        'rules' => 'Rules',
        'price' => 'Price',
    ];

    public function validate()
    {
        Model::validateRequired('rules', $this->rules, true);
        Model::validateRequired('price', $this->price, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        $res['Price'] = null !== $this->price ? $this->price->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }

        return $model;
    }
}
