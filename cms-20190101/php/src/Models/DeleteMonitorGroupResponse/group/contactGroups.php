<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponse\group;

use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponse\group\contactGroups\contactGroup;
use AlibabaCloud\Tea\Model;

class contactGroups extends Model
{
    /**
     * @description ContactGroup
     *
     * @var array
     */
    public $contactGroup;
    protected $_name = [
        'contactGroup' => 'ContactGroup',
    ];

    public function validate()
    {
        Model::validateRequired('contactGroup', $this->contactGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroup) {
            $res['ContactGroup'] = [];
            if (null !== $this->contactGroup && \is_array($this->contactGroup)) {
                $n = 0;
                foreach ($this->contactGroup as $item) {
                    $res['ContactGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroup'])) {
            if (!empty($map['ContactGroup'])) {
                $model->contactGroup = [];
                $n                   = 0;
                foreach ($map['ContactGroup'] as $item) {
                    $model->contactGroup[$n++] = null !== $item ? contactGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
