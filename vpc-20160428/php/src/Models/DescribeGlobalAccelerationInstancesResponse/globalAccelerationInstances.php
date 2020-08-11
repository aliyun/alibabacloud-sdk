<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponse\globalAccelerationInstances\globalAccelerationInstance;
use AlibabaCloud\Tea\Model;

class globalAccelerationInstances extends Model
{
    /**
     * @var array
     */
    public $globalAccelerationInstance;
    protected $_name = [
        'globalAccelerationInstance' => 'GlobalAccelerationInstance',
    ];

    public function validate()
    {
        Model::validateRequired('globalAccelerationInstance', $this->globalAccelerationInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalAccelerationInstance) {
            $res['GlobalAccelerationInstance'] = [];
            if (null !== $this->globalAccelerationInstance && \is_array($this->globalAccelerationInstance)) {
                $n = 0;
                foreach ($this->globalAccelerationInstance as $item) {
                    $res['GlobalAccelerationInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalAccelerationInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalAccelerationInstance'])) {
            if (!empty($map['GlobalAccelerationInstance'])) {
                $model->globalAccelerationInstance = [];
                $n                                 = 0;
                foreach ($map['GlobalAccelerationInstance'] as $item) {
                    $model->globalAccelerationInstance[$n++] = null !== $item ? globalAccelerationInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
