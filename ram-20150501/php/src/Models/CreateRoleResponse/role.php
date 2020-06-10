<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleResponse;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @description RoleId
     *
     * @var string
     */
    public $roleId;

    /**
     * @description RoleName
     *
     * @var string
     */
    public $roleName;

    /**
     * @description Arn
     *
     * @var string
     */
    public $arn;

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
     * @description CreateDate
     *
     * @var string
     */
    public $createDate;

    /**
     * @description MaxSessionDuration
     *
     * @var int
     */
    public $maxSessionDuration;
    protected $_name = [
        'roleId'                   => 'RoleId',
        'roleName'                 => 'RoleName',
        'arn'                      => 'Arn',
        'description'              => 'Description',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'createDate'               => 'CreateDate',
        'maxSessionDuration'       => 'MaxSessionDuration',
    ];

    public function validate()
    {
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('assumeRolePolicyDocument', $this->assumeRolePolicyDocument, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('maxSessionDuration', $this->maxSessionDuration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->assumeRolePolicyDocument) {
            $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AssumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }

        return $model;
    }
}
