<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ReportInstancesStatusRequest extends Model
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
     * @description diskIds
     *
     * @var array
     */
    public $diskId;

    /**
     * @description devices
     *
     * @var array
     */
    public $device;

    /**
     * @description reason
     *
     * @var string
     */
    public $reason;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'instanceId'           => 'InstanceId',
        'diskId'               => 'DiskId',
        'device'               => 'Device',
        'reason'               => 'Reason',
        'description'          => 'Description',
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('description', $this->description, true);
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
        if (null !== $this->diskId) {
            $res['DiskId'] = [];
            if (null !== $this->diskId) {
                $res['DiskId'] = $this->diskId;
            }
        }
        if (null !== $this->device) {
            $res['Device'] = [];
            if (null !== $this->device) {
                $res['Device'] = $this->device;
            }
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportInstancesStatusRequest
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
        if (isset($map['DiskId'])) {
            if (!empty($map['DiskId'])) {
                $model->diskId = [];
                $model->diskId = $map['DiskId'];
            }
        }
        if (isset($map['Device'])) {
            if (!empty($map['Device'])) {
                $model->device = [];
                $model->device = $map['Device'];
            }
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
