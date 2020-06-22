<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data\moduleDetails;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data\promotionDetails;
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
        'currency'         => 'Currency',
        'moduleDetails'    => 'ModuleDetails',
        'promotionDetails' => 'PromotionDetails',
    ];

    public function validate()
    {
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('moduleDetails', $this->moduleDetails, true);
        Model::validateRequired('promotionDetails', $this->promotionDetails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
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
