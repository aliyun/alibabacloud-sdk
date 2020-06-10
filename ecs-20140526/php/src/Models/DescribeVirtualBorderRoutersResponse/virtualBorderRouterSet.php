<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet\virtualBorderRouterType;
use AlibabaCloud\Tea\Model;

class virtualBorderRouterSet extends Model
{
    /**
     * @description VirtualBorderRouterType
     *
     * @var array
     */
    public $virtualBorderRouterType;
    protected $_name = [
        'virtualBorderRouterType' => 'VirtualBorderRouterType',
    ];

    public function validate()
    {
        Model::validateRequired('virtualBorderRouterType', $this->virtualBorderRouterType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->virtualBorderRouterType) {
            $res['VirtualBorderRouterType'] = [];
            if (null !== $this->virtualBorderRouterType && \is_array($this->virtualBorderRouterType)) {
                $n = 0;
                foreach ($this->virtualBorderRouterType as $item) {
                    $res['VirtualBorderRouterType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VirtualBorderRouterType'])) {
            if (!empty($map['VirtualBorderRouterType'])) {
                $model->virtualBorderRouterType = [];
                $n                              = 0;
                foreach ($map['VirtualBorderRouterType'] as $item) {
                    $model->virtualBorderRouterType[$n++] = null !== $item ? virtualBorderRouterType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
