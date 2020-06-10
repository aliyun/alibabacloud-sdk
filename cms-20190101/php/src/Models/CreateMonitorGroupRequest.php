<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupRequest extends Model
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
     * @var string
     */
    public $contactGroups;
    protected $_name = [
        'groupName'     => 'GroupName',
        'contactGroups' => 'ContactGroups',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }

        return $model;
    }
}
