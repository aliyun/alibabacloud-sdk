<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponse\permissions\permission;
use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @var array
     */
    public $permission;
    protected $_name = [
        'permission' => 'Permission',
    ];

    public function validate()
    {
        Model::validateRequired('permission', $this->permission, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permission) {
            $res['Permission'] = [];
            if (null !== $this->permission && \is_array($this->permission)) {
                $n = 0;
                foreach ($this->permission as $item) {
                    $res['Permission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permission'])) {
            if (!empty($map['Permission'])) {
                $model->permission = [];
                $n                 = 0;
                foreach ($map['Permission'] as $item) {
                    $model->permission[$n++] = null !== $item ? permission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
