<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @description instanceId
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description topicId
     *
     * @var int
     */
    public $topicId;

    /**
     * @description topicName
     *
     * @var int
     */
    public $topicName;

    /**
     * @description addTime
     *
     * @var int
     */
    public $addTime;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'topicId'    => 'TopicId',
        'topicName'  => 'TopicName',
        'addTime'    => 'AddTime',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('topicId', $this->topicId, true);
        Model::validateRequired('topicName', $this->topicName, true);
        Model::validateRequired('addTime', $this->addTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }

        return $model;
    }
}
