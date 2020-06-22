<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest\moduleList;
use AlibabaCloud\Tea\Model;

class GetPayAsYouGoPriceRequest extends Model
{
    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description productType
     *
     * @var string
     */
    public $productType;

    /**
     * @description subscriptionType
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description moduleList
     *
     * @var array
     */
    public $moduleList;
    protected $_name = [
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'region'           => 'Region',
        'moduleList'       => 'ModuleList',
    ];

    public function validate()
    {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('moduleList', $this->moduleList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->moduleList) {
            $res['ModuleList'] = [];
            if (null !== $this->moduleList && \is_array($this->moduleList)) {
                $n = 0;
                foreach ($this->moduleList as $item) {
                    $res['ModuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPayAsYouGoPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ModuleList'])) {
            if (!empty($map['ModuleList'])) {
                $model->moduleList = [];
                $n                 = 0;
                foreach ($map['ModuleList'] as $item) {
                    $model->moduleList[$n++] = null !== $item ? moduleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
