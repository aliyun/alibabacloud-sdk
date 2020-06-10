<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponse\storageCapacityUnits\storageCapacityUnit;
use AlibabaCloud\Tea\Model;

class storageCapacityUnits extends Model
{
    /**
     * @description StorageCapacityUnit
     *
     * @var array
     */
    public $storageCapacityUnit;
    protected $_name = [
        'storageCapacityUnit' => 'StorageCapacityUnit',
    ];

    public function validate()
    {
        Model::validateRequired('storageCapacityUnit', $this->storageCapacityUnit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageCapacityUnit) {
            $res['StorageCapacityUnit'] = [];
            if (null !== $this->storageCapacityUnit && \is_array($this->storageCapacityUnit)) {
                $n = 0;
                foreach ($this->storageCapacityUnit as $item) {
                    $res['StorageCapacityUnit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageCapacityUnits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageCapacityUnit'])) {
            if (!empty($map['StorageCapacityUnit'])) {
                $model->storageCapacityUnit = [];
                $n                          = 0;
                foreach ($map['StorageCapacityUnit'] as $item) {
                    $model->storageCapacityUnit[$n++] = null !== $item ? storageCapacityUnit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
