<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreateRoleRequest extends Model {
    protected $_name = [
        'roleName' => 'RoleName',
        'description' => 'Description',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'maxSessionDuration' => 'MaxSessionDuration',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['RoleName'] = $this->roleName;
        $res['Description'] = $this->description;
        $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        $res['MaxSessionDuration'] = $this->maxSessionDuration;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateRoleRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RoleName'])){
            $model->roleName = $map['RoleName'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['AssumeRolePolicyDocument'])){
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }
        if(isset($map['MaxSessionDuration'])){
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }
        return $model;
    }
    /**
     * @description RoleName
     * @var string
     */
    public $roleName;

    /**
     * @description Description
     * @var string
     */
    public $description;

    /**
     * @description AssumeRolePolicyDocument
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @description MaxSessionDuration
     * @var integer
     */
    public $maxSessionDuration;

}
