<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerLogRequest extends Model
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
     * @description containerGroupId
     *
     * @var string
     */
    public $containerGroupId;
    /**
     * @description containerName
     *
     * @var string
     */
    public $containerName;
    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;
    /**
     * @description tail
     *
     * @var int
     */
    public $tail;
    /**
     * @description previous
     *
     * @var bool
     */
    public $lastTime;
    /**
     * @description sinceSeconds
     *
     * @var int
     */
    public $sinceSeconds;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'containerGroupId'     => 'ContainerGroupId',
        'containerName'        => 'ContainerName',
        'startTime'            => 'StartTime',
        'tail'                 => 'Tail',
        'lastTime'             => 'LastTime',
        'sinceSeconds'         => 'SinceSeconds',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('containerName', $this->containerName, true);
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
        $res['ContainerName']        = $this->containerName;
        $res['StartTime']            = $this->startTime;
        $res['Tail']                 = $this->tail;
        $res['LastTime']             = $this->lastTime;
        $res['SinceSeconds']         = $this->sinceSeconds;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerLogRequest
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
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tail'])) {
            $model->tail = $map['Tail'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['SinceSeconds'])) {
            $model->sinceSeconds = $map['SinceSeconds'];
        }

        return $model;
    }
}
