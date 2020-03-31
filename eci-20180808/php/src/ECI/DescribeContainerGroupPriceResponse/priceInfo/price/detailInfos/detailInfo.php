<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupPriceResponse\priceInfo\price\detailInfos;

use AlibabaCloud\Tea\Model;

class detailInfo extends Model
{
    public $resource;
    public $originalPrice;
    public $discountPrice;
    public $tradePrice;
    public $rules;
    protected $_required = [
        'resource'      => true,
        'originalPrice' => true,
        'discountPrice' => true,
        'tradePrice'    => true,
        'rules'         => true,
    ];
    protected $_name = [
        'resource'      => 'Resource',
        'originalPrice' => 'OriginalPrice',
        'discountPrice' => 'DiscountPrice',
        'tradePrice'    => 'TradePrice',
        'rules'         => 'Rules',
    ];
    protected $_description = [
        'resource'      => 'resource',
        'originalPrice' => 'originalPrice',
        'discountPrice' => 'discountPrice',
        'tradePrice'    => 'tradePrice',
        'rules'         => 'rules',
    ];
}
