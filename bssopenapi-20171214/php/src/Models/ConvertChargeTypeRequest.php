<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ConvertChargeTypeRequest extends Model
{
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
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'period'           => 'Period',
        'productCode'      => 'ProductCode',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertChargeTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
