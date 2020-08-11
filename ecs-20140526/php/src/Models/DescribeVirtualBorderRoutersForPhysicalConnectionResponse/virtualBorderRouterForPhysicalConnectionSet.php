<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse\virtualBorderRouterForPhysicalConnectionSet\virtualBorderRouterForPhysicalConnectionType;
use AlibabaCloud\Tea\Model;

class virtualBorderRouterForPhysicalConnectionSet extends Model
{
    /**
     * @var array
     */
    public $virtualBorderRouterForPhysicalConnectionType;
    protected $_name = [
        'virtualBorderRouterForPhysicalConnectionType' => 'VirtualBorderRouterForPhysicalConnectionType',
    ];

    public function validate()
    {
        Model::validateRequired('virtualBorderRouterForPhysicalConnectionType', $this->virtualBorderRouterForPhysicalConnectionType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->virtualBorderRouterForPhysicalConnectionType) {
            $res['VirtualBorderRouterForPhysicalConnectionType'] = [];
            if (null !== $this->virtualBorderRouterForPhysicalConnectionType && \is_array($this->virtualBorderRouterForPhysicalConnectionType)) {
                $n = 0;
                foreach ($this->virtualBorderRouterForPhysicalConnectionType as $item) {
                    $res['VirtualBorderRouterForPhysicalConnectionType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterForPhysicalConnectionSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VirtualBorderRouterForPhysicalConnectionType'])) {
            if (!empty($map['VirtualBorderRouterForPhysicalConnectionType'])) {
                $model->virtualBorderRouterForPhysicalConnectionType = [];
                $n                                                   = 0;
                foreach ($map['VirtualBorderRouterForPhysicalConnectionType'] as $item) {
                    $model->virtualBorderRouterForPhysicalConnectionType[$n++] = null !== $item ? virtualBorderRouterForPhysicalConnectionType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
