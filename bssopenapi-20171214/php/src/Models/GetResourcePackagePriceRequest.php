<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class GetResourcePackagePriceRequest extends Model
{
    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description packageType
     *
     * @var string
     */
    public $packageType;

    /**
     * @description effectiveDate
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @description specification
     *
     * @var string
     */
    public $specification;

    /**
     * @description duration
     *
     * @var int
     */
    public $duration;

    /**
     * @description pricingCycle
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description orderType
     *
     * @var string
     */
    public $orderType;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'productCode'   => 'ProductCode',
        'packageType'   => 'PackageType',
        'effectiveDate' => 'EffectiveDate',
        'specification' => 'Specification',
        'duration'      => 'Duration',
        'pricingCycle'  => 'PricingCycle',
        'orderType'     => 'OrderType',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourcePackagePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
