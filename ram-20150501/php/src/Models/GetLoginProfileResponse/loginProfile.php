<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileResponse;

use AlibabaCloud\Tea\Model;

class loginProfile extends Model {
    protected $_name = [
        'userName' => 'UserName',
        'passwordResetRequired' => 'PasswordResetRequired',
        'MFABindRequired' => 'MFABindRequired',
        'createDate' => 'CreateDate',
    ];
    public function validate() {
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('passwordResetRequired', $this->passwordResetRequired, true);
        Model::validateRequired('MFABindRequired', $this->MFABindRequired, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }
    public function toMap() {
        $res = [];
        $res['UserName'] = $this->userName;
        $res['PasswordResetRequired'] = $this->passwordResetRequired;
        $res['MFABindRequired'] = $this->MFABindRequired;
        $res['CreateDate'] = $this->createDate;
        return $res;
    }
    /**
     * @param array $map
     * @return loginProfile
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['PasswordResetRequired'])){
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if(isset($map['MFABindRequired'])){
            $model->MFABindRequired = $map['MFABindRequired'];
        }
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        return $model;
    }
    /**
     * @description UserName
     * @var string
     */
    public $userName;

    /**
     * @description PasswordResetRequired
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @description MFABindRequired
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @description CreateDate
     * @var string
     */
    public $createDate;

}
