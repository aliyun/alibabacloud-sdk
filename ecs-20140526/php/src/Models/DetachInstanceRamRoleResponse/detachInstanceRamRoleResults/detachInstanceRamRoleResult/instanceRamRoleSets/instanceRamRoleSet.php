<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponse\detachInstanceRamRoleResults\detachInstanceRamRoleResult\instanceRamRoleSets;

use AlibabaCloud\Tea\Model;

class instanceRamRoleSet extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ramRoleName;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'ramRoleName' => 'RamRoleName',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('ramRoleName', $this->ramRoleName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRamRoleSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        return $model;
    }
}
