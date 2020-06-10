<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @description RoleName
     *
     * @var string
     */
    public $roleName;

    /**
     * @description NewAssumeRolePolicyDocument
     *
     * @var string
     */
    public $newAssumeRolePolicyDocument;

    /**
     * @description NewMaxSessionDuration
     *
     * @var int
     */
    public $newMaxSessionDuration;
    protected $_name = [
        'roleName'                    => 'RoleName',
        'newAssumeRolePolicyDocument' => 'NewAssumeRolePolicyDocument',
        'newMaxSessionDuration'       => 'NewMaxSessionDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->newAssumeRolePolicyDocument) {
            $res['NewAssumeRolePolicyDocument'] = $this->newAssumeRolePolicyDocument;
        }
        if (null !== $this->newMaxSessionDuration) {
            $res['NewMaxSessionDuration'] = $this->newMaxSessionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['NewAssumeRolePolicyDocument'])) {
            $model->newAssumeRolePolicyDocument = $map['NewAssumeRolePolicyDocument'];
        }
        if (isset($map['NewMaxSessionDuration'])) {
            $model->newMaxSessionDuration = $map['NewMaxSessionDuration'];
        }

        return $model;
    }
}
