<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreateRoleRequest extends Model
{
    /**
     * @description RoleName
     *
     * @var string
     */
    public $roleName;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description AssumeRolePolicyDocument
     *
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @description MaxSessionDuration
     *
     * @var int
     */
    public $maxSessionDuration;
    protected $_name = [
        'roleName'                 => 'RoleName',
        'description'              => 'Description',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'maxSessionDuration'       => 'MaxSessionDuration',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->assumeRolePolicyDocument) {
            $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }
        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AssumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }
        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }

        return $model;
    }
}
