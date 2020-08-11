<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class payAsYouGoOptions extends Model
{
    /**
     * @var string
     */
    public $allocationStrategy;
    protected $_name = [
        'allocationStrategy' => 'AllocationStrategy',
    ];

    public function validate()
    {
        Model::validateRequired('allocationStrategy', $this->allocationStrategy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payAsYouGoOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }

        return $model;
    }
}
