<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusResponse\instanceStatuses\instanceStatus;
use AlibabaCloud\Tea\Model;

class instanceStatuses extends Model
{
    /**
     * @description InstanceStatus
     *
     * @var array
     */
    public $instanceStatus;
    protected $_name = [
        'instanceStatus' => 'InstanceStatus',
    ];

    public function validate()
    {
        Model::validateRequired('instanceStatus', $this->instanceStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = [];
            if (null !== $this->instanceStatus && \is_array($this->instanceStatus)) {
                $n = 0;
                foreach ($this->instanceStatus as $item) {
                    $res['InstanceStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceStatus'])) {
            if (!empty($map['InstanceStatus'])) {
                $model->instanceStatus = [];
                $n                     = 0;
                foreach ($map['InstanceStatus'] as $item) {
                    $model->instanceStatus[$n++] = null !== $item ? instanceStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
