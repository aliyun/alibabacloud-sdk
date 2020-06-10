<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponse;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponse\groups\group;
use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description Group
     *
     * @var array
     */
    public $group;
    protected $_name = [
        'group' => 'Group',
    ];

    public function validate()
    {
        Model::validateRequired('group', $this->group, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = [];
            if (null !== $this->group && \is_array($this->group)) {
                $n = 0;
                foreach ($this->group as $item) {
                    $res['Group'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            if (!empty($map['Group'])) {
                $model->group = [];
                $n            = 0;
                foreach ($map['Group'] as $item) {
                    $model->group[$n++] = null !== $item ? group::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
