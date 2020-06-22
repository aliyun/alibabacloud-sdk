<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceRequest\parameter;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description parameter
     *
     * @var array
     */
    public $parameter;

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
     * @description renewalStatus
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @description renewPeriod
     *
     * @var int
     */
    public $renewPeriod;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'productCode'      => 'ProductCode',
        'parameter'        => 'Parameter',
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'period'           => 'Period',
        'renewalStatus'    => 'RenewalStatus',
        'renewPeriod'      => 'RenewPeriod',
        'clientToken'      => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->parameter) {
            $res['Parameter'] = [];
            if (null !== $this->parameter && \is_array($this->parameter)) {
                $n = 0;
                foreach ($this->parameter as $item) {
                    $res['Parameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->renewPeriod) {
            $res['RenewPeriod'] = $this->renewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Parameter'])) {
            if (!empty($map['Parameter'])) {
                $model->parameter = [];
                $n                = 0;
                foreach ($map['Parameter'] as $item) {
                    $model->parameter[$n++] = null !== $item ? parameter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['RenewPeriod'])) {
            $model->renewPeriod = $map['RenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
