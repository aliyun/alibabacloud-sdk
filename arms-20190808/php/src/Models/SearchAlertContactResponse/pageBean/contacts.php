<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactResponse\pageBean;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $contactId;

    /**
     * @description name
     *
     * @var string
     */
    public $contactName;

    /**
     * @description phone
     *
     * @var string
     */
    public $phone;

    /**
     * @description email
     *
     * @var string
     */
    public $email;

    /**
     * @description ownerName
     *
     * @var string
     */
    public $userId;

    /**
     * @description dingRobot
     *
     * @var string
     */
    public $dingRobot;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description updateTime
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description systemNoc
     *
     * @var bool
     */
    public $systemNoc;
    protected $_name = [
        'contactId'   => 'ContactId',
        'contactName' => 'ContactName',
        'phone'       => 'Phone',
        'email'       => 'Email',
        'userId'      => 'UserId',
        'dingRobot'   => 'DingRobot',
        'createTime'  => 'CreateTime',
        'updateTime'  => 'UpdateTime',
        'systemNoc'   => 'SystemNoc',
    ];

    public function validate()
    {
        Model::validateRequired('contactId', $this->contactId, true);
        Model::validateRequired('contactName', $this->contactName, true);
        Model::validateRequired('phone', $this->phone, true);
        Model::validateRequired('email', $this->email, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('dingRobot', $this->dingRobot, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('systemNoc', $this->systemNoc, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->dingRobot) {
            $res['DingRobot'] = $this->dingRobot;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->systemNoc) {
            $res['SystemNoc'] = $this->systemNoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DingRobot'])) {
            $model->dingRobot = $map['DingRobot'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['SystemNoc'])) {
            $model->systemNoc = $map['SystemNoc'];
        }

        return $model;
    }
}
