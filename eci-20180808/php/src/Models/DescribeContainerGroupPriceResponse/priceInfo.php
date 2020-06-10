<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\price;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\rules;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\spotPrices;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @description rules
     *
     * @var rules
     */
    public $rules;

    /**
     * @description spotPrices
     *
     * @var spotPrices
     */
    public $spotPrices;

    /**
     * @description price
     *
     * @var price
     */
    public $price;
    protected $_name = [
        'rules'      => 'Rules',
        'spotPrices' => 'SpotPrices',
        'price'      => 'Price',
    ];

    public function validate()
    {
        Model::validateRequired('rules', $this->rules, true);
        Model::validateRequired('spotPrices', $this->spotPrices, true);
        Model::validateRequired('price', $this->price, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->spotPrices) {
            $res['SpotPrices'] = null !== $this->spotPrices ? $this->spotPrices->toMap() : null;
        }
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toMap() : null;
        }

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
        if (isset($map['SpotPrices'])) {
            $model->spotPrices = spotPrices::fromMap($map['SpotPrices']);
        }
        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }

        return $model;
    }
}
