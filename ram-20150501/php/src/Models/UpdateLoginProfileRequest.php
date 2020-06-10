<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateLoginProfileRequest extends Model
{
    /**
     * @description UserName
     *
     * @var string
     */
    public $userName;

    /**
     * @description Password
     *
     * @var string
     */
    public $password;

    /**
     * @description PasswordResetRequired
     *
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @description MFABindRequired
     *
     * @var bool
     */
    public $MFABindRequired;
    protected $_name = [
        'userName'              => 'UserName',
        'password'              => 'Password',
        'passwordResetRequired' => 'PasswordResetRequired',
        'MFABindRequired'       => 'MFABindRequired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoginProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }

        return $model;
    }
}
