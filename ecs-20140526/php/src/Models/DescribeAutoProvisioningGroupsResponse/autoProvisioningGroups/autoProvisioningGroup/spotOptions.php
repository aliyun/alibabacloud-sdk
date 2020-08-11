<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class spotOptions extends Model
{
    /**
     * @var string
     */
    public $allocationStrategy;

    /**
     * @var string
     */
    public $instanceInterruptionBehavior;

    /**
     * @var int
     */
    public $instancePoolsToUseCount;
    protected $_name = [
        'allocationStrategy'           => 'AllocationStrategy',
        'instanceInterruptionBehavior' => 'InstanceInterruptionBehavior',
        'instancePoolsToUseCount'      => 'InstancePoolsToUseCount',
    ];

    public function validate()
    {
        Model::validateRequired('allocationStrategy', $this->allocationStrategy, true);
        Model::validateRequired('instanceInterruptionBehavior', $this->instanceInterruptionBehavior, true);
        Model::validateRequired('instancePoolsToUseCount', $this->instancePoolsToUseCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }
        if (null !== $this->instanceInterruptionBehavior) {
            $res['InstanceInterruptionBehavior'] = $this->instanceInterruptionBehavior;
        }
        if (null !== $this->instancePoolsToUseCount) {
            $res['InstancePoolsToUseCount'] = $this->instancePoolsToUseCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }
        if (isset($map['InstanceInterruptionBehavior'])) {
            $model->instanceInterruptionBehavior = $map['InstanceInterruptionBehavior'];
        }
        if (isset($map['InstancePoolsToUseCount'])) {
            $model->instancePoolsToUseCount = $map['InstancePoolsToUseCount'];
        }

        return $model;
    }
}
