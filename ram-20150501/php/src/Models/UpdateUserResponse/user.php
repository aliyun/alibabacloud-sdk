<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\UpdateUserResponse;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description UserId
     *
     * @var string
     */
    public $userId;

    /**
     * @description UserName
     *
     * @var string
     */
    public $userName;

    /**
     * @description DisplayName
     *
     * @var string
     */
    public $displayName;

    /**
     * @description MobilePhone
     *
     * @var string
     */
    public $mobilePhone;

    /**
     * @description Email
     *
     * @var string
     */
    public $email;

    /**
     * @description Comments
     *
     * @var string
     */
    public $comments;

    /**
     * @description CreateDate
     *
     * @var string
     */
    public $createDate;

    /**
     * @description UpdateDate
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'userId'      => 'UserId',
        'userName'    => 'UserName',
        'displayName' => 'DisplayName',
        'mobilePhone' => 'MobilePhone',
        'email'       => 'Email',
        'comments'    => 'Comments',
        'createDate'  => 'CreateDate',
        'updateDate'  => 'UpdateDate',
    ];

    public function validate()
    {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('mobilePhone', $this->mobilePhone, true);
        Model::validateRequired('email', $this->email, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
