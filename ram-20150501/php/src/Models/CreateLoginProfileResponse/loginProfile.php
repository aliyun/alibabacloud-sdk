<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\CreateLoginProfileResponse;

use AlibabaCloud\Tea\Model;

class loginProfile extends Model
{
    /**
     * @description UserName
     *
     * @var string
     */
    public $userName;

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

    /**
     * @description CreateDate
     *
     * @var string
     */
    public $createDate;
    protected $_name = [
        'userName'              => 'UserName',
        'passwordResetRequired' => 'PasswordResetRequired',
        'MFABindRequired'       => 'MFABindRequired',
        'createDate'            => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('passwordResetRequired', $this->passwordResetRequired, true);
        Model::validateRequired('MFABindRequired', $this->MFABindRequired, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
