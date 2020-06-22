<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data\promotionDetails;

use AlibabaCloud\Tea\Model;

class promotionDetail extends Model
{
    /**
     * @description promotionName
     *
     * @var string
     */
    public $promotionName;

    /**
     * @description promotionDesc
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @description promotionId
     *
     * @var int
     */
    public $promotionId;
    protected $_name = [
        'promotionName' => 'PromotionName',
        'promotionDesc' => 'PromotionDesc',
        'promotionId'   => 'PromotionId',
    ];

    public function validate()
    {
        Model::validateRequired('promotionName', $this->promotionName, true);
        Model::validateRequired('promotionDesc', $this->promotionDesc, true);
        Model::validateRequired('promotionId', $this->promotionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }
        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        return $model;
    }
}
