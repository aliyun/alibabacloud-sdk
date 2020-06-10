<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageCapacityUnitsRequest extends Model
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
     * @description pageNo
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

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description capacity
     *
     * @var int
     */
    public $capacity;

    /**
     * @description instanceIds
     *
     * @var array
     */
    public $storageCapacityUnitId;

    /**
     * @description statusStrList
     *
     * @var array
     */
    public $status;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'ownerAccount'          => 'OwnerAccount',
        'regionId'              => 'RegionId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'name'                  => 'Name',
        'capacity'              => 'Capacity',
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
        'status'                => 'Status',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = [];
            if (null !== $this->storageCapacityUnitId) {
                $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
            }
        }
        if (null !== $this->status) {
            $res['Status'] = [];
            if (null !== $this->status) {
                $res['Status'] = $this->status;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageCapacityUnitsRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['StorageCapacityUnitId'])) {
            if (!empty($map['StorageCapacityUnitId'])) {
                $model->storageCapacityUnitId = [];
                $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
            }
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $model->status = $map['Status'];
            }
        }

        return $model;
    }
}
