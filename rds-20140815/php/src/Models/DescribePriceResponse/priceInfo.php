<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse\priceInfo\coupons;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse\priceInfo\activityInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse\priceInfo\ruleIds;

class priceInfo extends Model {
    protected $_name = [
        'currency' => 'Currency',
        'originalPrice' => 'OriginalPrice',
        'tradePrice' => 'TradePrice',
        'discountPrice' => 'DiscountPrice',
        'coupons' => 'Coupons',
        'activityInfo' => 'ActivityInfo',
        'ruleIds' => 'RuleIds',
    ];
    public function validate() {
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('originalPrice', $this->originalPrice, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('discountPrice', $this->discountPrice, true);
        Model::validateRequired('coupons', $this->coupons, true);
        Model::validateRequired('activityInfo', $this->activityInfo, true);
        Model::validateRequired('ruleIds', $this->ruleIds, true);
    }
    public function toMap() {
        $res = [];
        $res['Currency'] = $this->currency;
        $res['OriginalPrice'] = $this->originalPrice;
        $res['TradePrice'] = $this->tradePrice;
        $res['DiscountPrice'] = $this->discountPrice;
        $res['Coupons'] = null !== $this->coupons ? $this->coupons->toMap() : null;
        $res['ActivityInfo'] = null !== $this->activityInfo ? $this->activityInfo->toMap() : null;
        $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return priceInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        if(isset($map['OriginalPrice'])){
            $model->originalPrice = $map['OriginalPrice'];
        }
        if(isset($map['TradePrice'])){
            $model->tradePrice = $map['TradePrice'];
        }
        if(isset($map['DiscountPrice'])){
            $model->discountPrice = $map['DiscountPrice'];
        }
        if(isset($map['Coupons'])){
            $model->coupons = coupons::fromMap($map['Coupons']);
        }
        if(isset($map['ActivityInfo'])){
            $model->activityInfo = activityInfo::fromMap($map['ActivityInfo']);
        }
        if(isset($map['RuleIds'])){
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        return $model;
    }
    /**
     * @description currency
     * @var string
     */
    public $currency;

    /**
     * @description originalAmount
     * @var float
     */
    public $originalPrice;

    /**
     * @description tradeAmount
     * @var float
     */
    public $tradePrice;

    /**
     * @description discountAmount
     * @var float
     */
    public $discountPrice;

    /**
     * @description optionalPromotions
     * @var coupons
     */
    public $coupons;

    /**
     * @description activityInfo
     * @var activityInfo
     */
    public $activityInfo;

    /**
     * @description ruleIds
     * @var ruleIds
     */
    public $ruleIds;

}
