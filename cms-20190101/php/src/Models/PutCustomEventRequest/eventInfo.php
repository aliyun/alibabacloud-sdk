<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRequest;

use AlibabaCloud\Tea\Model;

class eventInfo extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $eventName;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description time
     *
     * @var string
     */
    public $time;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'eventName' => 'EventName',
        'content'   => 'Content',
        'time'      => 'Time',
        'groupId'   => 'GroupId',
    ];

    public function validate()
    {
        Model::validateRequired('eventName', $this->eventName, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
