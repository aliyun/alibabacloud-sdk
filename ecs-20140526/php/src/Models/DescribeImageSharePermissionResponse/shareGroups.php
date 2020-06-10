<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponse\shareGroups\shareGroup;
use AlibabaCloud\Tea\Model;

class shareGroups extends Model
{
    /**
     * @description ShareGroup
     *
     * @var array
     */
    public $shareGroup;
    protected $_name = [
        'shareGroup' => 'ShareGroup',
    ];

    public function validate()
    {
        Model::validateRequired('shareGroup', $this->shareGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shareGroup) {
            $res['ShareGroup'] = [];
            if (null !== $this->shareGroup && \is_array($this->shareGroup)) {
                $n = 0;
                foreach ($this->shareGroup as $item) {
                    $res['ShareGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shareGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShareGroup'])) {
            if (!empty($map['ShareGroup'])) {
                $model->shareGroup = [];
                $n                 = 0;
                foreach ($map['ShareGroup'] as $item) {
                    $model->shareGroup[$n++] = null !== $item ? shareGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
