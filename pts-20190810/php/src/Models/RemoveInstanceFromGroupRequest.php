<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class RemoveInstanceFromGroupRequest extends Model
{
    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

    /**
     * @description instanceIdAndPorts
     *
     * @var array
     */
    public $instanceIdAndPorts;

    /**
     * @description version
     *
     * @var int
     */
    public $ver;
    protected $_name = [
        'groupId'            => 'GroupId',
        'instanceIdAndPorts' => 'InstanceIdAndPorts',
        'ver'                => 'Ver',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('instanceIdAndPorts', $this->instanceIdAndPorts, true);
        Model::validateRequired('ver', $this->ver, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceIdAndPorts) {
            $res['InstanceIdAndPorts'] = $this->instanceIdAndPorts;
        }
        if (null !== $this->ver) {
            $res['Ver'] = $this->ver;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveInstanceFromGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceIdAndPorts'])) {
            $model->instanceIdAndPorts = $map['InstanceIdAndPorts'];
        }
        if (isset($map['Ver'])) {
            $model->ver = $map['Ver'];
        }

        return $model;
    }
}
