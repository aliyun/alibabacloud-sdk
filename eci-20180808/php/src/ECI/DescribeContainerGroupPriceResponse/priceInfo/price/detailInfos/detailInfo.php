<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupPriceResponse\priceInfo\price\detailInfos;

use AlibabaCloud\SDK\ECI\V20180808\ECI\detailInfo\rules;
use AlibabaCloud\Tea\Model;

class detailInfo extends Model
{
    /**
     * @description resource
     *
     * @var string
     */
    public $resource;

    /**
     * @description originalPrice
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description discountPrice
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description tradePrice
     *
     * @var float
     */
    public $tradePrice;

    /**
     * @description rules
     *
     * @var detailInfo.rules
     */
    public $rules;
    protected $_name = [
        'resource'      => 'Resource',
        'originalPrice' => 'OriginalPrice',
        'discountPrice' => 'DiscountPrice',
        'tradePrice'    => 'TradePrice',
        'rules'         => 'Rules',
    ];

    public function validate()
    {
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('originalPrice', $this->originalPrice, true);
        Model::validateRequired('discountPrice', $this->discountPrice, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('rules', $this->rules, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['Resource']      = $this->resource;
        $res['OriginalPrice'] = $this->originalPrice;
        $res['DiscountPrice'] = $this->discountPrice;
        $res['TradePrice']    = $this->tradePrice;
        $res['Rules']         = null !== $this->rules ? $this->rules->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['Rules'])) {
            $model->rules = detailInfo\rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
