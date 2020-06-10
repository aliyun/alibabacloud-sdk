<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskAttributeRequest extends Model
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
     * @description instanceId
     *
     * @var string
     */
    public $diskId;

    /**
     * @description instanceIds
     *
     * @var array
     */
    public $diskIds;

    /**
     * @description diskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description diskDesc
     *
     * @var string
     */
    public $description;

    /**
     * @description deleteWithInstance
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description deleteAutoSnapshot
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description enableAutoSnapshot
     *
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'diskId'               => 'DiskId',
        'diskIds'              => 'DiskIds',
        'diskName'             => 'DiskName',
        'description'          => 'Description',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'deleteAutoSnapshot'   => 'DeleteAutoSnapshot',
        'enableAutoSnapshot'   => 'EnableAutoSnapshot',
        'ownerAccount'         => 'OwnerAccount',
    ];

    public function validate()
    {
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
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = [];
            if (null !== $this->diskIds) {
                $res['DiskIds'] = $this->diskIds;
            }
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDiskAttributeRequest
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
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = [];
                $model->diskIds = $map['DiskIds'];
            }
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
