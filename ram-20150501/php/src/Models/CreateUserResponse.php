<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreateUserResponse\user;

class CreateUserResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'user' => 'User',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('user', $this->user, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUserResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['User'])){
            $model->user = user::fromMap($map['User']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description User
     * @var user
     */
    public $user;

}
