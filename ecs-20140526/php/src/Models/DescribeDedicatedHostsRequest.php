<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostsRequest extends Model
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
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description dedicatedHostIds
     *
     * @var string
     */
    public $dedicatedHostIds;

    /**
     * @description dedicatedHostName
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description dedicatedHostType
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description lockReason
     *
     * @var string
     */
    public $lockReason;

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
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'zoneId'               => 'ZoneId',
        'dedicatedHostIds'     => 'DedicatedHostIds',
        'dedicatedHostName'    => 'DedicatedHostName',
        'status'               => 'Status',
        'dedicatedHostType'    => 'DedicatedHostType',
        'lockReason'           => 'LockReason',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'ownerAccount'         => 'OwnerAccount',
        'tag'                  => 'Tag',
        'resourceGroupId'      => 'ResourceGroupId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = $this->dedicatedHostIds;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostsRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DedicatedHostIds'])) {
            $model->dedicatedHostIds = $map['DedicatedHostIds'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
