<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\users;

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
     * @description AttachDate
     *
     * @var string
     */
    public $attachDate;
    protected $_name = [
        'userId'      => 'UserId',
        'userName'    => 'UserName',
        'displayName' => 'DisplayName',
        'attachDate'  => 'AttachDate',
    ];

    public function validate()
    {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('attachDate', $this->attachDate, true);
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
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
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
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }

        return $model;
    }
}
