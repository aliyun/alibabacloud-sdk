<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseReservedInstancesOfferingResponse\reservedInstanceIdSets;
use AlibabaCloud\Tea\Model;

class PurchaseReservedInstancesOfferingResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reservedInstanceIdSets
     */
    public $reservedInstanceIdSets;
    protected $_name = [
        'requestId'              => 'RequestId',
        'reservedInstanceIdSets' => 'ReservedInstanceIdSets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('reservedInstanceIdSets', $this->reservedInstanceIdSets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reservedInstanceIdSets) {
            $res['ReservedInstanceIdSets'] = null !== $this->reservedInstanceIdSets ? $this->reservedInstanceIdSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReservedInstanceIdSets'])) {
            $model->reservedInstanceIdSets = reservedInstanceIdSets::fromMap($map['ReservedInstanceIdSets']);
        }

        return $model;
    }
}
