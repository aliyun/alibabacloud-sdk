<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponse;

use AlibabaCloud\Tea\Model;

class contactGroups extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $contactGroupId;

    /**
     * @description name
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description ownerName
     *
     * @var string
     */
    public $userId;

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
    protected $_name = [
        'contactGroupId'   => 'ContactGroupId',
        'contactGroupName' => 'ContactGroupName',
        'userId'           => 'UserId',
        'createTime'       => 'CreateTime',
        'updateTime'       => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('contactGroupId', $this->contactGroupId, true);
        Model::validateRequired('contactGroupName', $this->contactGroupName, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupId) {
            $res['ContactGroupId'] = $this->contactGroupId;
        }
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupId'])) {
            $model->contactGroupId = $map['ContactGroupId'];
        }
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
