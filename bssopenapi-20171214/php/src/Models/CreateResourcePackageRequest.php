<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateResourcePackageRequest extends Model
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
    protected $_name = [
        'productCode'   => 'ProductCode',
        'packageType'   => 'PackageType',
        'effectiveDate' => 'EffectiveDate',
        'specification' => 'Specification',
        'duration'      => 'Duration',
        'pricingCycle'  => 'PricingCycle',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourcePackageRequest
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

        return $model;
    }
}
