<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitRequest\unitEntityList;
use AlibabaCloud\Tea\Model;

class CreateCostUnitRequest extends Model
{
    /**
     * @description unitEntityList
     *
     * @var array
     */
    public $unitEntityList;
    protected $_name = [
        'unitEntityList' => 'UnitEntityList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unitEntityList) {
            $res['UnitEntityList'] = [];
            if (null !== $this->unitEntityList && \is_array($this->unitEntityList)) {
                $n = 0;
                foreach ($this->unitEntityList as $item) {
                    $res['UnitEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCostUnitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UnitEntityList'])) {
            if (!empty($map['UnitEntityList'])) {
                $model->unitEntityList = [];
                $n                     = 0;
                foreach ($map['UnitEntityList'] as $item) {
                    $model->unitEntityList[$n++] = null !== $item ? unitEntityList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
