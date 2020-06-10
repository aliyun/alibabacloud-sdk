<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk\operationLocks\operationLock;
use AlibabaCloud\Tea\Model;

class operationLocks extends Model
{
    /**
     * @description OperationLock
     *
     * @var array
     */
    public $operationLock;
    protected $_name = [
        'operationLock' => 'OperationLock',
    ];

    public function validate()
    {
        Model::validateRequired('operationLock', $this->operationLock, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationLock) {
            $res['OperationLock'] = [];
            if (null !== $this->operationLock && \is_array($this->operationLock)) {
                $n = 0;
                foreach ($this->operationLock as $item) {
                    $res['OperationLock'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationLocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationLock'])) {
            if (!empty($map['OperationLock'])) {
                $model->operationLock = [];
                $n                    = 0;
                foreach ($map['OperationLock'] as $item) {
                    $model->operationLock[$n++] = null !== $item ? operationLock::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
