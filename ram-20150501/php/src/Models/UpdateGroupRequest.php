<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @description GroupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description NewGroupName
     *
     * @var string
     */
    public $newGroupName;

    /**
     * @description NewComments
     *
     * @var string
     */
    public $newComments;
    protected $_name = [
        'groupName'    => 'GroupName',
        'newGroupName' => 'NewGroupName',
        'newComments'  => 'NewComments',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->newGroupName) {
            $res['NewGroupName'] = $this->newGroupName;
        }
        if (null !== $this->newComments) {
            $res['NewComments'] = $this->newComments;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['NewGroupName'])) {
            $model->newGroupName = $map['NewGroupName'];
        }
        if (isset($map['NewComments'])) {
            $model->newComments = $map['NewComments'];
        }

        return $model;
    }
}
