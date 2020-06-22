<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetRenewalRequest extends Model
{
    /**
     * @description renewalPeriod
     *
     * @var int
     */
    public $renewalPeriod;

    /**
     * @description instanceIDs
     *
     * @var string
     */
    public $instanceIDs;

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
     * @description renewalPeriodUnit
     *
     * @var string
     */
    public $renewalPeriodUnit;

    /**
     * @description renewalStatus
     *
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'renewalPeriod'     => 'RenewalPeriod',
        'instanceIDs'       => 'InstanceIDs',
        'productCode'       => 'ProductCode',
        'productType'       => 'ProductType',
        'subscriptionType'  => 'SubscriptionType',
        'renewalPeriodUnit' => 'RenewalPeriodUnit',
        'renewalStatus'     => 'RenewalStatus',
    ];

    public function validate()
    {
        Model::validateRequired('instanceIDs', $this->instanceIDs, true);
        Model::validateRequired('renewalStatus', $this->renewalStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renewalPeriod) {
            $res['RenewalPeriod'] = $this->renewalPeriod;
        }
        if (null !== $this->instanceIDs) {
            $res['InstanceIDs'] = $this->instanceIDs;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->renewalPeriodUnit) {
            $res['RenewalPeriodUnit'] = $this->renewalPeriodUnit;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRenewalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenewalPeriod'])) {
            $model->renewalPeriod = $map['RenewalPeriod'];
        }
        if (isset($map['InstanceIDs'])) {
            $model->instanceIDs = $map['InstanceIDs'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['RenewalPeriodUnit'])) {
            $model->renewalPeriodUnit = $map['RenewalPeriodUnit'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
