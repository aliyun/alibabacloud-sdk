<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType;
use AlibabaCloud\Tea\Model;

class instanceFullStatusSet extends Model
{
    /**
     * @description InstanceFullStatusType
     *
     * @var array
     */
    public $instanceFullStatusType;
    protected $_name = [
        'instanceFullStatusType' => 'InstanceFullStatusType',
    ];

    public function validate()
    {
        Model::validateRequired('instanceFullStatusType', $this->instanceFullStatusType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceFullStatusType) {
            $res['InstanceFullStatusType'] = [];
            if (null !== $this->instanceFullStatusType && \is_array($this->instanceFullStatusType)) {
                $n = 0;
                foreach ($this->instanceFullStatusType as $item) {
                    $res['InstanceFullStatusType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceFullStatusSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceFullStatusType'])) {
            if (!empty($map['InstanceFullStatusType'])) {
                $model->instanceFullStatusType = [];
                $n                             = 0;
                foreach ($map['InstanceFullStatusType'] as $item) {
                    $model->instanceFullStatusType[$n++] = null !== $item ? instanceFullStatusType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
