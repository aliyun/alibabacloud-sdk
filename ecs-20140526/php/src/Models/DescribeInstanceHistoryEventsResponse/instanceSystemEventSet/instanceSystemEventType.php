<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse\instanceSystemEventSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse\instanceSystemEventSet\instanceSystemEventType\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse\instanceSystemEventSet\instanceSystemEventType\eventType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse\instanceSystemEventSet\instanceSystemEventType\extendedAttribute;
use AlibabaCloud\Tea\Model;

class instanceSystemEventType extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventPublishTime;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $eventFinishTime;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $impactLevel;

    /**
     * @var eventType
     */
    public $eventType;

    /**
     * @var eventCycleStatus
     */
    public $eventCycleStatus;

    /**
     * @var extendedAttribute
     */
    public $extendedAttribute;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'eventId'           => 'EventId',
        'eventPublishTime'  => 'EventPublishTime',
        'notBefore'         => 'NotBefore',
        'eventFinishTime'   => 'EventFinishTime',
        'reason'            => 'Reason',
        'impactLevel'       => 'ImpactLevel',
        'eventType'         => 'EventType',
        'eventCycleStatus'  => 'EventCycleStatus',
        'extendedAttribute' => 'ExtendedAttribute',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventPublishTime', $this->eventPublishTime, true);
        Model::validateRequired('notBefore', $this->notBefore, true);
        Model::validateRequired('eventFinishTime', $this->eventFinishTime, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('impactLevel', $this->impactLevel, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('eventCycleStatus', $this->eventCycleStatus, true);
        Model::validateRequired('extendedAttribute', $this->extendedAttribute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = $this->eventPublishTime;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->eventFinishTime) {
            $res['EventFinishTime'] = $this->eventFinishTime;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }
        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = null !== $this->eventCycleStatus ? $this->eventCycleStatus->toMap() : null;
        }
        if (null !== $this->extendedAttribute) {
            $res['ExtendedAttribute'] = null !== $this->extendedAttribute ? $this->extendedAttribute->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSystemEventType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventPublishTime'])) {
            $model->eventPublishTime = $map['EventPublishTime'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['EventFinishTime'])) {
            $model->eventFinishTime = $map['EventFinishTime'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }
        if (isset($map['EventCycleStatus'])) {
            $model->eventCycleStatus = eventCycleStatus::fromMap($map['EventCycleStatus']);
        }
        if (isset($map['ExtendedAttribute'])) {
            $model->extendedAttribute = extendedAttribute::fromMap($map['ExtendedAttribute']);
        }

        return $model;
    }
}
