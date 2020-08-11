<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse\priceInfo\price\detailInfos;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse\priceInfo\price\detailInfos\resourcePriceModel\subRules;
use AlibabaCloud\Tea\Model;

class resourcePriceModel extends Model
{
    /**
     * @var string
     */
    public $resource;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var subRules
     */
    public $subRules;
    protected $_name = [
        'resource'      => 'Resource',
        'originalPrice' => 'OriginalPrice',
        'discountPrice' => 'DiscountPrice',
        'tradePrice'    => 'TradePrice',
        'subRules'      => 'SubRules',
    ];

    public function validate()
    {
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('originalPrice', $this->originalPrice, true);
        Model::validateRequired('discountPrice', $this->discountPrice, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('subRules', $this->subRules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->subRules) {
            $res['SubRules'] = null !== $this->subRules ? $this->subRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePriceModel
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
        if (isset($map['SubRules'])) {
            $model->subRules = subRules::fromMap($map['SubRules']);
        }

        return $model;
    }
}
