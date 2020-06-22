<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponse\data\promotions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description currency
     *
     * @var string
     */
    public $currency;

    /**
     * @description originalPrice
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description tradePrice
     *
     * @var float
     */
    public $tradePrice;

    /**
     * @description discountPrice
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description promotions
     *
     * @var promotions
     */
    public $promotions;
    protected $_name = [
        'currency'      => 'Currency',
        'originalPrice' => 'OriginalPrice',
        'tradePrice'    => 'TradePrice',
        'discountPrice' => 'DiscountPrice',
        'promotions'    => 'Promotions',
    ];

    public function validate()
    {
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('originalPrice', $this->originalPrice, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('discountPrice', $this->discountPrice, true);
        Model::validateRequired('promotions', $this->promotions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->promotions) {
            $res['Promotions'] = null !== $this->promotions ? $this->promotions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Promotions'])) {
            $model->promotions = promotions::fromMap($map['Promotions']);
        }

        return $model;
    }
}
