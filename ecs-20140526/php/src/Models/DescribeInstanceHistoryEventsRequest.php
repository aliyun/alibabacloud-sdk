<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\eventPublishTime;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\notBefore;
use AlibabaCloud\Tea\Model;

class DescribeInstanceHistoryEventsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var array
     */
    public $eventId;

    /**
     * @var array
     */
    public $instanceEventCycleStatus;

    /**
     * @var string
     */
    public $eventCycleStatus;

    /**
     * @var array
     */
    public $instanceEventType;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var notBefore
     */
    public $notBefore;

    /**
     * @var eventPublishTime
     */
    public $eventPublishTime;

    /**
     * @var string
     */
    public $impactLevel;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'regionId'                 => 'RegionId',
        'instanceId'               => 'InstanceId',
        'eventId'                  => 'EventId',
        'instanceEventCycleStatus' => 'InstanceEventCycleStatus',
        'eventCycleStatus'         => 'EventCycleStatus',
        'instanceEventType'        => 'InstanceEventType',
        'eventType'                => 'EventType',
        'notBefore'                => 'NotBefore',
        'eventPublishTime'         => 'EventPublishTime',
        'impactLevel'              => 'ImpactLevel',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->instanceEventCycleStatus) {
            $res['InstanceEventCycleStatus'] = $this->instanceEventCycleStatus;
        }
        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = $this->eventCycleStatus;
        }
        if (null !== $this->instanceEventType) {
            $res['InstanceEventType'] = $this->instanceEventType;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = null !== $this->notBefore ? $this->notBefore->toMap() : null;
        }
        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = null !== $this->eventPublishTime ? $this->eventPublishTime->toMap() : null;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceHistoryEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EventId'])) {
            if (!empty($map['EventId'])) {
                $model->eventId = $map['EventId'];
            }
        }
        if (isset($map['InstanceEventCycleStatus'])) {
            if (!empty($map['InstanceEventCycleStatus'])) {
                $model->instanceEventCycleStatus = $map['InstanceEventCycleStatus'];
            }
        }
        if (isset($map['EventCycleStatus'])) {
            $model->eventCycleStatus = $map['EventCycleStatus'];
        }
        if (isset($map['InstanceEventType'])) {
            if (!empty($map['InstanceEventType'])) {
                $model->instanceEventType = $map['InstanceEventType'];
            }
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = notBefore::fromMap($map['NotBefore']);
        }
        if (isset($map['EventPublishTime'])) {
            $model->eventPublishTime = eventPublishTime::fromMap($map['EventPublishTime']);
        }
        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
