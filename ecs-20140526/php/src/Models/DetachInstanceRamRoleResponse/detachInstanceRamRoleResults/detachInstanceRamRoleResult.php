<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponse\detachInstanceRamRoleResults;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponse\detachInstanceRamRoleResults\detachInstanceRamRoleResult\instanceRamRoleSets;
use AlibabaCloud\Tea\Model;

class detachInstanceRamRoleResult extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var instanceRamRoleSets
     */
    public $instanceRamRoleSets;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'success'             => 'Success',
        'code'                => 'Code',
        'message'             => 'Message',
        'instanceRamRoleSets' => 'InstanceRamRoleSets',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('instanceRamRoleSets', $this->instanceRamRoleSets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->instanceRamRoleSets) {
            $res['InstanceRamRoleSets'] = null !== $this->instanceRamRoleSets ? $this->instanceRamRoleSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detachInstanceRamRoleResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['InstanceRamRoleSets'])) {
            $model->instanceRamRoleSets = instanceRamRoleSets::fromMap($map['InstanceRamRoleSets']);
        }

        return $model;
    }
}
