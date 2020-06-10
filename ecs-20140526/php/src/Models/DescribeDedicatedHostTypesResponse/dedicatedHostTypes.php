<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponse\dedicatedHostTypes\dedicatedHostType;
use AlibabaCloud\Tea\Model;

class dedicatedHostTypes extends Model
{
    /**
     * @description DedicatedHostType
     *
     * @var array
     */
    public $dedicatedHostType;
    protected $_name = [
        'dedicatedHostType' => 'DedicatedHostType',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostType', $this->dedicatedHostType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = [];
            if (null !== $this->dedicatedHostType && \is_array($this->dedicatedHostType)) {
                $n = 0;
                foreach ($this->dedicatedHostType as $item) {
                    $res['DedicatedHostType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostType'])) {
            if (!empty($map['DedicatedHostType'])) {
                $model->dedicatedHostType = [];
                $n                        = 0;
                foreach ($map['DedicatedHostType'] as $item) {
                    $model->dedicatedHostType[$n++] = null !== $item ? dedicatedHostType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
