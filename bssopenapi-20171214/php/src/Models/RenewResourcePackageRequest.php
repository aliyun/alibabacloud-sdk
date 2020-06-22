<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RenewResourcePackageRequest extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description effectiveDate
     *
     * @var string
     */
    public $effectiveDate;

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
        'instanceId'    => 'InstanceId',
        'effectiveDate' => 'EffectiveDate',
        'duration'      => 'Duration',
        'pricingCycle'  => 'PricingCycle',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('pricingCycle', $this->pricingCycle, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
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
     * @return RenewResourcePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
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
