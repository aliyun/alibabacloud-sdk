<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponse\eventItems;

use AlibabaCloud\Tea\Model;

class eventItems extends Model {
    protected $_name = [
        'eventId' => 'EventId',
        'eventType' => 'EventType',
        'eventName' => 'EventName',
        'eventTime' => 'EventTime',
        'resourceType' => 'ResourceType',
        'resourceName' => 'ResourceName',
        'regionId' => 'RegionId',
        'eventUserType' => 'EventUserType',
        'eventReason' => 'EventReason',
        'eventPayload' => 'EventPayload',
        'eventRecordTime' => 'EventRecordTime',
    ];
    public function validate() {
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('eventName', $this->eventName, true);
        Model::validateRequired('eventTime', $this->eventTime, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceName', $this->resourceName, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('eventUserType', $this->eventUserType, true);
        Model::validateRequired('eventReason', $this->eventReason, true);
        Model::validateRequired('eventPayload', $this->eventPayload, true);
        Model::validateRequired('eventRecordTime', $this->eventRecordTime, true);
    }
    public function toMap() {
        $res = [];
        $res['EventId'] = $this->eventId;
        $res['EventType'] = $this->eventType;
        $res['EventName'] = $this->eventName;
        $res['EventTime'] = $this->eventTime;
        $res['ResourceType'] = $this->resourceType;
        $res['ResourceName'] = $this->resourceName;
        $res['RegionId'] = $this->regionId;
        $res['EventUserType'] = $this->eventUserType;
        $res['EventReason'] = $this->eventReason;
        $res['EventPayload'] = $this->eventPayload;
        $res['EventRecordTime'] = $this->eventRecordTime;
        return $res;
    }
    /**
     * @param array $map
     * @return eventItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['EventId'])){
            $model->eventId = $map['EventId'];
        }
        if(isset($map['EventType'])){
            $model->eventType = $map['EventType'];
        }
        if(isset($map['EventName'])){
            $model->eventName = $map['EventName'];
        }
        if(isset($map['EventTime'])){
            $model->eventTime = $map['EventTime'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['ResourceName'])){
            $model->resourceName = $map['ResourceName'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['EventUserType'])){
            $model->eventUserType = $map['EventUserType'];
        }
        if(isset($map['EventReason'])){
            $model->eventReason = $map['EventReason'];
        }
        if(isset($map['EventPayload'])){
            $model->eventPayload = $map['EventPayload'];
        }
        if(isset($map['EventRecordTime'])){
            $model->eventRecordTime = $map['EventRecordTime'];
        }
        return $model;
    }
    /**
     * @description eventId
     * @var integer
     */
    public $eventId;

    /**
     * @description eventType
     * @var string
     */
    public $eventType;

    /**
     * @description eventName
     * @var string
     */
    public $eventName;

    /**
     * @description eventTime
     * @var string
     */
    public $eventTime;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description resourceName
     * @var string
     */
    public $resourceName;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description eventUserType
     * @var string
     */
    public $eventUserType;

    /**
     * @description eventReason
     * @var string
     */
    public $eventReason;

    /**
     * @description eventPayload
     * @var string
     */
    public $eventPayload;

    /**
     * @description eventRecordTime
     * @var string
     */
    public $eventRecordTime;

}
