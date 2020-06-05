<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetRoleResponse\role;

class GetRoleResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'role' => 'Role',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('role', $this->role, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Role'] = null !== $this->role ? $this->role->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetRoleResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Role'])){
            $model->role = role::fromMap($map['Role']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description Role
     * @var role
     */
    public $role;

}
