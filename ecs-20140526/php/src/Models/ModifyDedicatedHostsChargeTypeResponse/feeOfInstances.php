<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeResponse\feeOfInstances\feeOfInstance;
use AlibabaCloud\Tea\Model;

class feeOfInstances extends Model
{
    /**
     * @var array
     */
    public $feeOfInstance;
    protected $_name = [
        'feeOfInstance' => 'FeeOfInstance',
    ];

    public function validate()
    {
        Model::validateRequired('feeOfInstance', $this->feeOfInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feeOfInstance) {
            $res['FeeOfInstance'] = [];
            if (null !== $this->feeOfInstance && \is_array($this->feeOfInstance)) {
                $n = 0;
                foreach ($this->feeOfInstance as $item) {
                    $res['FeeOfInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feeOfInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeeOfInstance'])) {
            if (!empty($map['FeeOfInstance'])) {
                $model->feeOfInstance = [];
                $n                    = 0;
                foreach ($map['FeeOfInstance'] as $item) {
                    $model->feeOfInstance[$n++] = null !== $item ? feeOfInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
