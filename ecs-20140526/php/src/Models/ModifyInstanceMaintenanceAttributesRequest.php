<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesRequest\maintenanceWindow;
use AlibabaCloud\Tea\Model;

class ModifyInstanceMaintenanceAttributesRequest extends Model
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
     * @description maintenanceWindows
     *
     * @var array
     */
    public $maintenanceWindow;

    /**
     * @description actionOnMaintenance
     *
     * @var string
     */
    public $actionOnMaintenance;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'instanceId'           => 'InstanceId',
        'maintenanceWindow'    => 'MaintenanceWindow',
        'actionOnMaintenance'  => 'ActionOnMaintenance',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
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
        if (null !== $this->maintenanceWindow) {
            $res['MaintenanceWindow'] = [];
            if (null !== $this->maintenanceWindow && \is_array($this->maintenanceWindow)) {
                $n = 0;
                foreach ($this->maintenanceWindow as $item) {
                    $res['MaintenanceWindow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceMaintenanceAttributesRequest
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
        if (isset($map['MaintenanceWindow'])) {
            if (!empty($map['MaintenanceWindow'])) {
                $model->maintenanceWindow = [];
                $n                        = 0;
                foreach ($map['MaintenanceWindow'] as $item) {
                    $model->maintenanceWindow[$n++] = null !== $item ? maintenanceWindow::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }

        return $model;
    }
}
