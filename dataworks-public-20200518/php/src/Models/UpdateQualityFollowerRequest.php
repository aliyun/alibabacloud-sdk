<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateQualityFollowerRequest extends Model
{
    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description followerId
     *
     * @var int
     */
    public $followerId;

    /**
     * @description follower
     *
     * @var string
     */
    public $follower;

    /**
     * @description alarmMode
     *
     * @var int
     */
    public $alarmMode;
    protected $_name = [
        'projectName' => 'ProjectName',
        'followerId'  => 'FollowerId',
        'follower'    => 'Follower',
        'alarmMode'   => 'AlarmMode',
    ];

    public function validate()
    {
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('followerId', $this->followerId, true);
        Model::validateRequired('follower', $this->follower, true);
        Model::validateRequired('alarmMode', $this->alarmMode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->followerId) {
            $res['FollowerId'] = $this->followerId;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }
        if (null !== $this->alarmMode) {
            $res['AlarmMode'] = $this->alarmMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['FollowerId'])) {
            $model->followerId = $map['FollowerId'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }
        if (isset($map['AlarmMode'])) {
            $model->alarmMode = $map['AlarmMode'];
        }

        return $model;
    }
}
