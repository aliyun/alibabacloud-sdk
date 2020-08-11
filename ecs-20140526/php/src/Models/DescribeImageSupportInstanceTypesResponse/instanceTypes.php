<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponse\instanceTypes\instanceType;
use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var array
     */
    public $instanceType;
    protected $_name = [
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
        Model::validateRequired('instanceType', $this->instanceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = [];
            if (null !== $this->instanceType && \is_array($this->instanceType)) {
                $n = 0;
                foreach ($this->instanceType as $item) {
                    $res['InstanceType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = [];
                $n                   = 0;
                foreach ($map['InstanceType'] as $item) {
                    $model->instanceType[$n++] = null !== $item ? instanceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
