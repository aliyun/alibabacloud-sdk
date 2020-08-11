<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class ecsCapacityReservationAttr extends Model
{
    /**
     * @var string
     */
    public $capacityReservationId;

    /**
     * @var string
     */
    public $capacityReservationPreference;
    protected $_name = [
        'capacityReservationId'         => 'CapacityReservationId',
        'capacityReservationPreference' => 'CapacityReservationPreference',
    ];

    public function validate()
    {
        Model::validateRequired('capacityReservationId', $this->capacityReservationId, true);
        Model::validateRequired('capacityReservationPreference', $this->capacityReservationPreference, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservationId) {
            $res['CapacityReservationId'] = $this->capacityReservationId;
        }
        if (null !== $this->capacityReservationPreference) {
            $res['CapacityReservationPreference'] = $this->capacityReservationPreference;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsCapacityReservationAttr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservationId'])) {
            $model->capacityReservationId = $map['CapacityReservationId'];
        }
        if (isset($map['CapacityReservationPreference'])) {
            $model->capacityReservationPreference = $map['CapacityReservationPreference'];
        }

        return $model;
    }
}
