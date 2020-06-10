<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\GenerateVehicleRepairPlanRequest\damageImageList;
use AlibabaCloud\Tea\Model;

class GenerateVehicleRepairPlanRequest extends Model
{
    /**
     * @description damageImageList
     *
     * @var array
     */
    public $damageImageList;
    protected $_name = [
        'damageImageList' => 'DamageImageList',
    ];

    public function validate()
    {
        Model::validateRequired('damageImageList', $this->damageImageList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->damageImageList) {
            $res['DamageImageList'] = [];
            if (null !== $this->damageImageList && \is_array($this->damageImageList)) {
                $n = 0;
                foreach ($this->damageImageList as $item) {
                    $res['DamageImageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVehicleRepairPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DamageImageList'])) {
            if (!empty($map['DamageImageList'])) {
                $model->damageImageList = [];
                $n                      = 0;
                foreach ($map['DamageImageList'] as $item) {
                    $model->damageImageList[$n++] = null !== $item ? damageImageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
