<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\SetPasswordPolicyResponse\passwordPolicy;
use AlibabaCloud\Tea\Model;

class SetPasswordPolicyResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description PasswordPolicy
     *
     * @var passwordPolicy
     */
    public $passwordPolicy;
    protected $_name = [
        'requestId'      => 'RequestId',
        'passwordPolicy' => 'PasswordPolicy',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('passwordPolicy', $this->passwordPolicy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->passwordPolicy) {
            $res['PasswordPolicy'] = null !== $this->passwordPolicy ? $this->passwordPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPasswordPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PasswordPolicy'])) {
            $model->passwordPolicy = passwordPolicy::fromMap($map['PasswordPolicy']);
        }

        return $model;
    }
}
