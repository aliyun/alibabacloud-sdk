<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\eventCycleStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\eventType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute;
use AlibabaCloud\Tea\Model;

class scheduledSystemEventType extends Model
{
    /**
     * @description eventId
     *
     * @var string
     */
    public $eventId;

    /**
     * @description publishTimeStr
     *
     * @var string
     */
    public $eventPublishTime;

    /**
     * @description planExeTimeStr
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description description
     *
     * @var string
     */
    public $reason;

    /**
     * @description impactLevel
     *
     * @var string
     */
    public $impactLevel;

    /**
     * @description eventCycleStatus
     *
     * @var eventCycleStatus
     */
    public $eventCycleStatus;

    /**
     * @description eventType
     *
     * @var eventType
     */
    public $eventType;

    /**
     * @description extendedAttribute
     *
     * @var extendedAttribute
     */
    public $extendedAttribute;
    protected $_name = [
        'eventId'           => 'EventId',
        'eventPublishTime'  => 'EventPublishTime',
        'notBefore'         => 'NotBefore',
        'reason'            => 'Reason',
        'impactLevel'       => 'ImpactLevel',
        'eventCycleStatus'  => 'EventCycleStatus',
        'eventType'         => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
    ];

    public function validate()
    {
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventPublishTime', $this->eventPublishTime, true);
        Model::validateRequired('notBefore', $this->notBefore, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('impactLevel', $this->impactLevel, true);
        Model::validateRequired('eventCycleStatus', $this->eventCycleStatus, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('extendedAttribute', $this->extendedAttribute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = $this->eventPublishTime;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }
        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = null !== $this->eventCycleStatus ? $this->eventCycleStatus->toMap() : null;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = null !== $this->eventType ? $this->eventType->toMap() : null;
        }
        if (null !== $this->extendedAttribute) {
            $res['ExtendedAttribute'] = null !== $this->extendedAttribute ? $this->extendedAttribute->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledSystemEventType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventPublishTime'])) {
            $model->eventPublishTime = $map['EventPublishTime'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }
        if (isset($map['EventCycleStatus'])) {
            $model->eventCycleStatus = eventCycleStatus::fromMap($map['EventCycleStatus']);
        }
        if (isset($map['EventType'])) {
            $model->eventType = eventType::fromMap($map['EventType']);
        }
        if (isset($map['ExtendedAttribute'])) {
            $model->extendedAttribute = extendedAttribute::fromMap($map['ExtendedAttribute']);
        }

        return $model;
    }
}
