<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupMetricRequest extends Model
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
     * @description bazaarInstanceId
     *
     * @var string
     */
    public $containerGroupId;
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
    /**
     * @description period
     *
     * @var string
     */
    public $period;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'containerGroupId'     => 'ContainerGroupId',
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
        'period'               => 'Period',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['OwnerAccount']         = $this->ownerAccount;
        $res['RegionId']             = $this->regionId;
        $res['ContainerGroupId']     = $this->containerGroupId;
        $res['StartTime']            = $this->startTime;
        $res['EndTime']              = $this->endTime;
        $res['Period']               = $this->period;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupMetricRequest
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
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
