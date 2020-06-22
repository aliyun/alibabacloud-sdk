<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse\data\moduleDetails;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse\data\promotionDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description quantity
     *
     * @var int
     */
    public $quantity;

    /**
     * @description moduleDetails
     *
     * @var moduleDetails
     */
    public $moduleDetails;

    /**
     * @description promotionDetails
     *
     * @var promotionDetails
     */
    public $promotionDetails;
    protected $_name = [
        'originalPrice'    => 'OriginalPrice',
        'discountPrice'    => 'DiscountPrice',
        'tradePrice'       => 'TradePrice',
        'currency'         => 'Currency',
        'quantity'         => 'Quantity',
        'moduleDetails'    => 'ModuleDetails',
        'promotionDetails' => 'PromotionDetails',
    ];

    public function validate()
    {
        Model::validateRequired('originalPrice', $this->originalPrice, true);
        Model::validateRequired('discountPrice', $this->discountPrice, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('quantity', $this->quantity, true);
        Model::validateRequired('moduleDetails', $this->moduleDetails, true);
        Model::validateRequired('promotionDetails', $this->promotionDetails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->moduleDetails) {
            $res['ModuleDetails'] = null !== $this->moduleDetails ? $this->moduleDetails->toMap() : null;
        }
        if (null !== $this->promotionDetails) {
            $res['PromotionDetails'] = null !== $this->promotionDetails ? $this->promotionDetails->toMap() : null;
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
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ModuleDetails'])) {
            $model->moduleDetails = moduleDetails::fromMap($map['ModuleDetails']);
        }
        if (isset($map['PromotionDetails'])) {
            $model->promotionDetails = promotionDetails::fromMap($map['PromotionDetails']);
        }

        return $model;
    }
}
