<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\componentGroups\items;
use AlibabaCloud\Tea\Model;

class componentGroups extends Model
{
    /**
     * @description group_name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description items
     *
     * @var array
     */
    public $items;

    /**
     * @description default
     *
     * @var array
     */
    public $default;
    protected $_name = [
        'groupName' => 'group_name',
        'items'     => 'items',
        'default'   => 'default',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('items', $this->items, true);
        Model::validateRequired('default', $this->default, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['group_name'] = $this->groupName;
        $res['items']      = [];
        if (null !== $this->items && \is_array($this->items)) {
            $n = 0;
            foreach ($this->items as $item) {
                $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['default'] = [];
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['default'])) {
            if (!empty($map['default'])) {
                $model->default = [];
                $model->default = $map['default'];
            }
        }

        return $model;
    }
}
