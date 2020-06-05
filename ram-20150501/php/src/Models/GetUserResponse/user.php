<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetUserResponse;

use AlibabaCloud\Tea\Model;

class user extends Model {
    protected $_name = [
        'userId' => 'UserId',
        'userName' => 'UserName',
        'displayName' => 'DisplayName',
        'mobilePhone' => 'MobilePhone',
        'email' => 'Email',
        'comments' => 'Comments',
        'createDate' => 'CreateDate',
        'updateDate' => 'UpdateDate',
        'lastLoginDate' => 'LastLoginDate',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('mobilePhone', $this->mobilePhone, true);
        Model::validateRequired('email', $this->email, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('lastLoginDate', $this->lastLoginDate, true);
    }
    public function toMap() {
        $res = [];
        $res['UserId'] = $this->userId;
        $res['UserName'] = $this->userName;
        $res['DisplayName'] = $this->displayName;
        $res['MobilePhone'] = $this->mobilePhone;
        $res['Email'] = $this->email;
        $res['Comments'] = $this->comments;
        $res['CreateDate'] = $this->createDate;
        $res['UpdateDate'] = $this->updateDate;
        $res['LastLoginDate'] = $this->lastLoginDate;
        return $res;
    }
    /**
     * @param array $map
     * @return user
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
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
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        if(isset($map['UpdateDate'])){
            $model->updateDate = $map['UpdateDate'];
        }
        if(isset($map['LastLoginDate'])){
            $model->lastLoginDate = $map['LastLoginDate'];
        }
        return $model;
    }
    /**
     * @description UserId
     * @var string
     */
    public $userId;

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

    /**
     * @description CreateDate
     * @var string
     */
    public $createDate;

    /**
     * @description UpdateDate
     * @var string
     */
    public $updateDate;

    /**
     * @description LastLoginDate
     * @var string
     */
    public $lastLoginDate;

}
