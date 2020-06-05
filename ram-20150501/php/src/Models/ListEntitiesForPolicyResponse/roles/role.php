<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\roles;

use AlibabaCloud\Tea\Model;

class role extends Model {
    protected $_name = [
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
        'arn' => 'Arn',
        'description' => 'Description',
        'attachDate' => 'AttachDate',
    ];
    public function validate() {
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('attachDate', $this->attachDate, true);
    }
    public function toMap() {
        $res = [];
        $res['RoleId'] = $this->roleId;
        $res['RoleName'] = $this->roleName;
        $res['Arn'] = $this->arn;
        $res['Description'] = $this->description;
        $res['AttachDate'] = $this->attachDate;
        return $res;
    }
    /**
     * @param array $map
     * @return role
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RoleId'])){
            $model->roleId = $map['RoleId'];
        }
        if(isset($map['RoleName'])){
            $model->roleName = $map['RoleName'];
        }
        if(isset($map['Arn'])){
            $model->arn = $map['Arn'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['AttachDate'])){
            $model->attachDate = $map['AttachDate'];
        }
        return $model;
    }
    /**
     * @description RoleId
     * @var string
     */
    public $roleId;

    /**
     * @description RoleName
     * @var string
     */
    public $roleName;

    /**
     * @description Arn
     * @var string
     */
    public $arn;

    /**
     * @description Description
     * @var string
     */
    public $description;

    /**
     * @description AttachDate
     * @var string
     */
    public $attachDate;

}
