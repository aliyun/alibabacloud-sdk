<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class targetCapacitySpecification extends Model
{
    /**
     * @var float
     */
    public $totalTargetCapacity;

    /**
     * @var float
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @var float
     */
    public $spotTargetCapacity;

    /**
     * @var string
     */
    public $defaultTargetCapacityType;
    protected $_name = [
        'totalTargetCapacity'       => 'TotalTargetCapacity',
        'payAsYouGoTargetCapacity'  => 'PayAsYouGoTargetCapacity',
        'spotTargetCapacity'        => 'SpotTargetCapacity',
        'defaultTargetCapacityType' => 'DefaultTargetCapacityType',
    ];

    public function validate()
    {
        Model::validateRequired('totalTargetCapacity', $this->totalTargetCapacity, true);
        Model::validateRequired('payAsYouGoTargetCapacity', $this->payAsYouGoTargetCapacity, true);
        Model::validateRequired('spotTargetCapacity', $this->spotTargetCapacity, true);
        Model::validateRequired('defaultTargetCapacityType', $this->defaultTargetCapacityType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetCapacitySpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }

        return $model;
    }
}
