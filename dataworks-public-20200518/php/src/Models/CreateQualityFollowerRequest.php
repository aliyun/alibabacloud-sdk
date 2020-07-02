<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityFollowerRequest extends Model
{
    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

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

    /**
     * @description entityId
     *
     * @var int
     */
    public $entityId;
    protected $_name = [
        'projectName' => 'ProjectName',
        'follower'    => 'Follower',
        'alarmMode'   => 'AlarmMode',
        'entityId'    => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('follower', $this->follower, true);
        Model::validateRequired('alarmMode', $this->alarmMode, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }
        if (null !== $this->alarmMode) {
            $res['AlarmMode'] = $this->alarmMode;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }
        if (isset($map['AlarmMode'])) {
            $model->alarmMode = $map['AlarmMode'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
