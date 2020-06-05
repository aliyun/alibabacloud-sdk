<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\groups;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\users;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\roles;

class ListEntitiesForPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'groups' => 'Groups',
        'users' => 'Users',
        'roles' => 'Roles',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groups', $this->groups, true);
        Model::validateRequired('users', $this->users, true);
        Model::validateRequired('roles', $this->roles, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        $res['Users'] = null !== $this->users ? $this->users->toMap() : null;
        $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListEntitiesForPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Groups'])){
            $model->groups = groups::fromMap($map['Groups']);
        }
        if(isset($map['Users'])){
            $model->users = users::fromMap($map['Users']);
        }
        if(isset($map['Roles'])){
            $model->roles = roles::fromMap($map['Roles']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description Groups
     * @var groups
     */
    public $groups;

    /**
     * @description Users
     * @var users
     */
    public $users;

    /**
     * @description Roles
     * @var roles
     */
    public $roles;

}
