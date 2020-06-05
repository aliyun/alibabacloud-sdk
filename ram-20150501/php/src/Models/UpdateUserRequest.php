<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model {
    protected $_name = [
        'userName' => 'UserName',
        'newUserName' => 'NewUserName',
        'newDisplayName' => 'NewDisplayName',
        'newMobilePhone' => 'NewMobilePhone',
        'newEmail' => 'NewEmail',
        'newComments' => 'NewComments',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['UserName'] = $this->userName;
        $res['NewUserName'] = $this->newUserName;
        $res['NewDisplayName'] = $this->newDisplayName;
        $res['NewMobilePhone'] = $this->newMobilePhone;
        $res['NewEmail'] = $this->newEmail;
        $res['NewComments'] = $this->newComments;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateUserRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['NewUserName'])){
            $model->newUserName = $map['NewUserName'];
        }
        if(isset($map['NewDisplayName'])){
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if(isset($map['NewMobilePhone'])){
            $model->newMobilePhone = $map['NewMobilePhone'];
        }
        if(isset($map['NewEmail'])){
            $model->newEmail = $map['NewEmail'];
        }
        if(isset($map['NewComments'])){
            $model->newComments = $map['NewComments'];
        }
        return $model;
    }
    /**
     * @description UserName
     * @var string
     */
    public $userName;

    /**
     * @description NewUserName
     * @var string
     */
    public $newUserName;

    /**
     * @description NewDisplayName
     * @var string
     */
    public $newDisplayName;

    /**
     * @description NewMobilePhone
     * @var string
     */
    public $newMobilePhone;

    /**
     * @description NewEmail
     * @var string
     */
    public $newEmail;

    /**
     * @description NewComments
     * @var string
     */
    public $newComments;

}
