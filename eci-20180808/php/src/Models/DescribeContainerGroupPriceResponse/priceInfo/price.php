<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo;

use AlibabaCloud\SDK\ECI\V20180808\Models\price\detailInfos;
use AlibabaCloud\Tea\Model;

class price extends Model
{
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
     * @description currency
     *
     * @var string
     */
    public $currency;

    /**
     * @description detailInfos
     *
     * @var price.detailInfos
     */
    public $detailInfos;
    protected $_name = [
        'originalPrice' => 'OriginalPrice',
        'discountPrice' => 'DiscountPrice',
        'tradePrice'    => 'TradePrice',
        'currency'      => 'Currency',
        'detailInfos'   => 'DetailInfos',
    ];

    public function validate()
    {
        Model::validateRequired('originalPrice', $this->originalPrice, true);
        Model::validateRequired('discountPrice', $this->discountPrice, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('detailInfos', $this->detailInfos, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['OriginalPrice'] = $this->originalPrice;
        $res['DiscountPrice'] = $this->discountPrice;
        $res['TradePrice']    = $this->tradePrice;
        $res['Currency']      = $this->currency;
        $res['DetailInfos']   = null !== $this->detailInfos ? $this->detailInfos->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return price
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DetailInfos'])) {
            $model->detailInfos = detailInfos::fromMap($map['DetailInfos']);
        }

        return $model;
    }
}
