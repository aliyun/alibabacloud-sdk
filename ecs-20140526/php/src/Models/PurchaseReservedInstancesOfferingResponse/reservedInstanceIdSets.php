<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseReservedInstancesOfferingResponse;

use AlibabaCloud\Tea\Model;

class reservedInstanceIdSets extends Model
{
    /**
     * @var array
     */
    public $reservedInstanceId;
    protected $_name = [
        'reservedInstanceId' => 'ReservedInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('reservedInstanceId', $this->reservedInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedInstanceIdSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstanceId'])) {
            if (!empty($map['ReservedInstanceId'])) {
                $model->reservedInstanceId = $map['ReservedInstanceId'];
            }
        }

        return $model;
    }
}
