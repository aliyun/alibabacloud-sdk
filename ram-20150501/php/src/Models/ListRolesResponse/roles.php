<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesResponse;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesResponse\roles\role;
use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @description Role
     *
     * @var array
     */
    public $role;
    protected $_name = [
        'role' => 'Role',
    ];

    public function validate()
    {
        Model::validateRequired('role', $this->role, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->role) {
            $res['Role'] = [];
            if (null !== $this->role && \is_array($this->role)) {
                $n = 0;
                foreach ($this->role as $item) {
                    $res['Role'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Role'])) {
            if (!empty($map['Role'])) {
                $model->role = [];
                $n           = 0;
                foreach ($map['Role'] as $item) {
                    $model->role[$n++] = null !== $item ? role::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
