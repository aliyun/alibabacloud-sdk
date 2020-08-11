<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType\diskEventSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType\diskEventSet\diskEventType\eventType;
use AlibabaCloud\Tea\Model;

class diskEventType extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $eventEndTime;

    /**
     * @var string
     */
    public $impactLevel;

    /**
     * @var eventType
     */
    public $eventType;
    protected $_name = [
        'eventId'      => 'EventId',
        'eventTime'    => 'EventTime',
        'eventEndTime' => 'EventEndTime',
        'impactLevel'  => 'ImpactLevel',
        'eventType'    => 'EventType',
    ];

    public function validate()
    {
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventTime', $this->eventTime, true);
        Model::validateRequired('eventEndTime', $this->eventEndTime, true);
        Model::validateRequired('impactLevel', $this->impactLevel, true);
        Model::validateRequired('eventType', $this->eventType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventEndTime) {
            $res['EventEndTime'] = $this->eventEndTime;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskEventType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventEndTime'])) {
            $model->eventEndTime = $map['EventEndTime'];
        }
        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }

        return $model;
    }
}
