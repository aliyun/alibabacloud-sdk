<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponse\instanceTypes;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var float
     */
    public $memorySize;

    /**
     * @var string
     */
    public $instanceTypeFamily;
    protected $_name = [
        'instanceTypeId'     => 'InstanceTypeId',
        'cpuCoreCount'       => 'CpuCoreCount',
        'memorySize'         => 'MemorySize',
        'instanceTypeFamily' => 'InstanceTypeFamily',
    ];

    public function validate()
    {
        Model::validateRequired('instanceTypeId', $this->instanceTypeId, true);
        Model::validateRequired('cpuCoreCount', $this->cpuCoreCount, true);
        Model::validateRequired('memorySize', $this->memorySize, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }

        return $model;
    }
}
