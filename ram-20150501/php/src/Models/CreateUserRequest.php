<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model {
    protected $_name = [
        'userName' => 'UserName',
        'displayName' => 'DisplayName',
        'mobilePhone' => 'MobilePhone',
        'email' => 'Email',
        'comments' => 'Comments',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['UserName'] = $this->userName;
        $res['DisplayName'] = $this->displayName;
        $res['MobilePhone'] = $this->mobilePhone;
        $res['Email'] = $this->email;
        $res['Comments'] = $this->comments;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateUserRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['DisplayName'])){
            $model->displayName = $map['DisplayName'];
        }
        if(isset($map['MobilePhone'])){
            $model->mobilePhone = $map['MobilePhone'];
        }
        if(isset($map['Email'])){
            $model->email = $map['Email'];
        }
        if(isset($map['Comments'])){
            $model->comments = $map['Comments'];
        }
        return $model;
    }
    /**
     * @description UserName
     * @var string
     */
    public $userName;

    /**
     * @description DisplayName
     * @var string
     */
    public $displayName;

    /**
     * @description MobilePhone
     * @var string
     */
    public $mobilePhone;

    /**
     * @description Email
     * @var string
     */
    public $email;

    /**
     * @description Comments
     * @var string
     */
    public $comments;

}
