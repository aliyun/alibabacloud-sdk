<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class GetRoleRequest extends Model {
    protected $_name = [
        'roleName' => 'RoleName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['RoleName'] = $this->roleName;
        return $res;
    }
    /**
     * @param array $map
     * @return GetRoleRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RoleName'])){
            $model->roleName = $map['RoleName'];
        }
        return $model;
    }
    /**
     * @description RoleName
     * @var string
     */
    public $roleName;

}
