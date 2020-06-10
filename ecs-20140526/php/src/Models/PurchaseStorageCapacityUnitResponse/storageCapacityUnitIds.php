<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponse;

use AlibabaCloud\Tea\Model;

class storageCapacityUnitIds extends Model
{
    /**
     * @description StorageCapacityUnitId
     *
     * @var array
     */
    public $storageCapacityUnitId;
    protected $_name = [
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
    ];

    public function validate()
    {
        Model::validateRequired('storageCapacityUnitId', $this->storageCapacityUnitId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = [];
            if (null !== $this->storageCapacityUnitId) {
                $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageCapacityUnitIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageCapacityUnitId'])) {
            if (!empty($map['StorageCapacityUnitId'])) {
                $model->storageCapacityUnitId = [];
                $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
            }
        }

        return $model;
    }
}
