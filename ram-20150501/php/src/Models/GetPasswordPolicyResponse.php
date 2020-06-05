<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetPasswordPolicyResponse\passwordPolicy;

class GetPasswordPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'passwordPolicy' => 'PasswordPolicy',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('passwordPolicy', $this->passwordPolicy, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PasswordPolicy'] = null !== $this->passwordPolicy ? $this->passwordPolicy->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPasswordPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PasswordPolicy'])){
            $model->passwordPolicy = passwordPolicy::fromMap($map['PasswordPolicy']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description PasswordPolicy
     * @var passwordPolicy
     */
    public $passwordPolicy;

}
