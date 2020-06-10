<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusRequest\eventPublishTime;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusRequest\notBefore;
use AlibabaCloud\Tea\Model;

class DescribeInstancesFullStatusRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description instanceIds
     *
     * @var array
     */
    public $instanceId;

    /**
     * @description eventIds
     *
     * @var array
     */
    public $eventId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description healthStatus
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description eventTypes
     *
     * @var array
     */
    public $instanceEventType;

    /**
     * @description eventType
     *
     * @var string
     */
    public $eventType;

    /**
     * @description NotBefore
     *
     * @var notBefore
     */
    public $notBefore;

    /**
     * @description EventPublishTime
     *
     * @var eventPublishTime
     */
    public $eventPublishTime;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'instanceId'           => 'InstanceId',
        'eventId'              => 'EventId',
        'status'               => 'Status',
        'healthStatus'         => 'HealthStatus',
        'instanceEventType'    => 'InstanceEventType',
        'eventType'            => 'EventType',
        'notBefore'            => 'NotBefore',
        'eventPublishTime'     => 'EventPublishTime',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('notBefore', $this->notBefore, true);
        Model::validateRequired('eventPublishTime', $this->eventPublishTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = [];
            if (null !== $this->instanceId) {
                $res['InstanceId'] = $this->instanceId;
            }
        }
        if (null !== $this->eventId) {
            $res['EventId'] = [];
            if (null !== $this->eventId) {
                $res['EventId'] = $this->eventId;
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceEventType) {
            $res['InstanceEventType'] = [];
            if (null !== $this->instanceEventType) {
                $res['InstanceEventType'] = $this->instanceEventType;
            }
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
     * @return DescribeInstancesFullStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['EventId'])) {
            if (!empty($map['EventId'])) {
                $model->eventId = [];
                $model->eventId = $map['EventId'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceEventType'])) {
            if (!empty($map['InstanceEventType'])) {
                $model->instanceEventType = [];
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
