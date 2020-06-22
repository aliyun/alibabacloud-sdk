<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;

use AlibabaCloud\Tea\Model;

class resourceInstanceList extends Model
{
    /**
     * @description resourceUserId
     *
     * @var int
     */
    public $resourceUserId;

    /**
     * @description resourceId
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description commodityCode
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description apportionCode
     *
     * @var string
     */
    public $apportionCode;
    protected $_name = [
        'resourceUserId' => 'ResourceUserId',
        'resourceId'     => 'ResourceId',
        'commodityCode'  => 'CommodityCode',
        'apportionCode'  => 'ApportionCode',
    ];

    public function validate()
    {
        Model::validateRequired('resourceUserId', $this->resourceUserId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('commodityCode', $this->commodityCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceUserId) {
            $res['ResourceUserId'] = $this->resourceUserId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->apportionCode) {
            $res['ApportionCode'] = $this->apportionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceUserId'])) {
            $model->resourceUserId = $map['ResourceUserId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ApportionCode'])) {
            $model->apportionCode = $map['ApportionCode'];
        }

        return $model;
    }
}
