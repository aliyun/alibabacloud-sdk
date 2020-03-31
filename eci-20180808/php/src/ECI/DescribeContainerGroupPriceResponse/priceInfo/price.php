<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupPriceResponse\priceInfo;

use AlibabaCloud\Tea\Model;

class price extends Model
{
    public $originalPrice;
    public $discountPrice;
    public $tradePrice;
    public $currency;
    public $detailInfos;
    protected $_required = [
        'originalPrice' => true,
        'discountPrice' => true,
        'tradePrice'    => true,
        'currency'      => true,
        'detailInfos'   => true,
    ];
    protected $_name = [
        'originalPrice' => 'OriginalPrice',
        'discountPrice' => 'DiscountPrice',
        'tradePrice'    => 'TradePrice',
        'currency'      => 'Currency',
        'detailInfos'   => 'DetailInfos',
    ];
    protected $_description = [
        'originalPrice' => 'originalPrice',
        'discountPrice' => 'discountPrice',
        'tradePrice'    => 'tradePrice',
        'currency'      => 'currency',
        'detailInfos'   => 'detailInfos',
    ];
}
