<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk\mountInstances\mountInstance;
use AlibabaCloud\Tea\Model;

class mountInstances extends Model
{
    /**
     * @description MountInstance
     *
     * @var array
     */
    public $mountInstance;
    protected $_name = [
        'mountInstance' => 'MountInstance',
    ];

    public function validate()
    {
        Model::validateRequired('mountInstance', $this->mountInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountInstance) {
            $res['MountInstance'] = [];
            if (null !== $this->mountInstance && \is_array($this->mountInstance)) {
                $n = 0;
                foreach ($this->mountInstance as $item) {
                    $res['MountInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountInstance'])) {
            if (!empty($map['MountInstance'])) {
                $model->mountInstance = [];
                $n                    = 0;
                foreach ($map['MountInstance'] as $item) {
                    $model->mountInstance[$n++] = null !== $item ? mountInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
