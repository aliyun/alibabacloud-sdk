<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data\promotionDetails\promotionDetail;
use AlibabaCloud\Tea\Model;

class promotionDetails extends Model
{
    /**
     * @description PromotionDetail
     *
     * @var array
     */
    public $promotionDetail;
    protected $_name = [
        'promotionDetail' => 'PromotionDetail',
    ];

    public function validate()
    {
        Model::validateRequired('promotionDetail', $this->promotionDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionDetail) {
            $res['PromotionDetail'] = [];
            if (null !== $this->promotionDetail && \is_array($this->promotionDetail)) {
                $n = 0;
                foreach ($this->promotionDetail as $item) {
                    $res['PromotionDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionDetail'])) {
            if (!empty($map['PromotionDetail'])) {
                $model->promotionDetail = [];
                $n                      = 0;
                foreach ($map['PromotionDetail'] as $item) {
                    $model->promotionDetail[$n++] = null !== $item ? promotionDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
