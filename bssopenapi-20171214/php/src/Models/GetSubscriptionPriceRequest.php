<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest\moduleList;
use AlibabaCloud\Tea\Model;

class GetSubscriptionPriceRequest extends Model
{
    /**
     * @description servicePeriodUnit
     *
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @description subscriptionType
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description orderType
     *
     * @var string
     */
    public $orderType;

    /**
     * @description servicePeriodQuantity
     *
     * @var int
     */
    public $servicePeriodQuantity;

    /**
     * @description productType
     *
     * @var string
     */
    public $productType;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description moduleList
     *
     * @var array
     */
    public $moduleList;

    /**
     * @description quantity
     *
     * @var int
     */
    public $quantity;
    protected $_name = [
        'servicePeriodUnit'     => 'ServicePeriodUnit',
        'subscriptionType'      => 'SubscriptionType',
        'productCode'           => 'ProductCode',
        'orderType'             => 'OrderType',
        'servicePeriodQuantity' => 'ServicePeriodQuantity',
        'productType'           => 'ProductType',
        'region'                => 'Region',
        'instanceId'            => 'InstanceId',
        'moduleList'            => 'ModuleList',
        'quantity'              => 'Quantity',
    ];

    public function validate()
    {
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('orderType', $this->orderType, true);
        Model::validateRequired('moduleList', $this->moduleList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->servicePeriodUnit) {
            $res['ServicePeriodUnit'] = $this->servicePeriodUnit;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->servicePeriodQuantity) {
            $res['ServicePeriodQuantity'] = $this->servicePeriodQuantity;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubscriptionPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServicePeriodUnit'])) {
            $model->servicePeriodUnit = $map['ServicePeriodUnit'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ServicePeriodQuantity'])) {
            $model->servicePeriodQuantity = $map['ServicePeriodQuantity'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
