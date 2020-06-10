<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponse\group\contactGroups;
use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description contactGroups
     *
     * @var contactGroups
     */
    public $contactGroups;
    protected $_name = [
        'groupName'     => 'GroupName',
        'contactGroups' => 'ContactGroups',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('contactGroups', $this->contactGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }

        return $model;
    }
}
