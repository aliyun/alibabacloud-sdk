<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponse\routerInterfaceSet\routerInterfaceType;
use AlibabaCloud\Tea\Model;

class routerInterfaceSet extends Model
{
    /**
     * @description RouterInterfaceType
     *
     * @var array
     */
    public $routerInterfaceType;
    protected $_name = [
        'routerInterfaceType' => 'RouterInterfaceType',
    ];

    public function validate()
    {
        Model::validateRequired('routerInterfaceType', $this->routerInterfaceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routerInterfaceType) {
            $res['RouterInterfaceType'] = [];
            if (null !== $this->routerInterfaceType && \is_array($this->routerInterfaceType)) {
                $n = 0;
                foreach ($this->routerInterfaceType as $item) {
                    $res['RouterInterfaceType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerInterfaceSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouterInterfaceType'])) {
            if (!empty($map['RouterInterfaceType'])) {
                $model->routerInterfaceType = [];
                $n                          = 0;
                foreach ($map['RouterInterfaceType'] as $item) {
                    $model->routerInterfaceType[$n++] = null !== $item ? routerInterfaceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
