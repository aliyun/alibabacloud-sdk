<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponse\storageSets\storageSet;
use AlibabaCloud\Tea\Model;

class storageSets extends Model
{
    /**
     * @var array
     */
    public $storageSet;
    protected $_name = [
        'storageSet' => 'StorageSet',
    ];

    public function validate()
    {
        Model::validateRequired('storageSet', $this->storageSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageSet) {
            $res['StorageSet'] = [];
            if (null !== $this->storageSet && \is_array($this->storageSet)) {
                $n = 0;
                foreach ($this->storageSet as $item) {
                    $res['StorageSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageSet'])) {
            if (!empty($map['StorageSet'])) {
                $model->storageSet = [];
                $n                 = 0;
                foreach ($map['StorageSet'] as $item) {
                    $model->storageSet[$n++] = null !== $item ? storageSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
