<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesResponse\roles;

use AlibabaCloud\Tea\Model;

class role extends Model {
    protected $_name = [
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
        'arn' => 'Arn',
        'description' => 'Description',
        'createDate' => 'CreateDate',
        'updateDate' => 'UpdateDate',
        'maxSessionDuration' => 'MaxSessionDuration',
    ];
    public function validate() {
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('maxSessionDuration', $this->maxSessionDuration, true);
    }
    public function toMap() {
        $res = [];
        $res['RoleId'] = $this->roleId;
        $res['RoleName'] = $this->roleName;
        $res['Arn'] = $this->arn;
        $res['Description'] = $this->description;
        $res['CreateDate'] = $this->createDate;
        $res['UpdateDate'] = $this->updateDate;
        $res['MaxSessionDuration'] = $this->maxSessionDuration;
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
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        if(isset($map['UpdateDate'])){
            $model->updateDate = $map['UpdateDate'];
        }
        if(isset($map['MaxSessionDuration'])){
            $model->maxSessionDuration = $map['MaxSessionDuration'];
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
     * @description CreateDate
     * @var string
     */
    public $createDate;

    /**
     * @description UpdateDate
     * @var string
     */
    public $updateDate;

    /**
     * @description MaxSessionDuration
     * @var integer
     */
    public $maxSessionDuration;

}
