<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeContainerGroupsRequest extends Model
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
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description nextToken
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description limit
     *
     * @var int
     */
    public $limit;

    /**
     * @description labels
     *
     * @var array
     */
    public $tag;

    /**
     * @description containerGroupIdParam
     *
     * @var string
     */
    public $containerGroupIds;

    /**
     * @description containerGroupName
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description withEvent
     *
     * @var bool
     */
    public $withEvent;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'zoneId'               => 'ZoneId',
        'VSwitchId'            => 'VSwitchId',
        'nextToken'            => 'NextToken',
        'limit'                => 'Limit',
        'tag'                  => 'Tag',
        'containerGroupIds'    => 'ContainerGroupIds',
        'containerGroupName'   => 'ContainerGroupName',
        'status'               => 'Status',
        'resourceGroupId'      => 'ResourceGroupId',
        'withEvent'            => 'WithEvent',
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
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
        if (null !== $this->containerGroupIds) {
            $res['ContainerGroupIds'] = $this->containerGroupIds;
        }
        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->withEvent) {
            $res['WithEvent'] = $this->withEvent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupsRequest
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
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
        if (isset($map['ContainerGroupIds'])) {
            $model->containerGroupIds = $map['ContainerGroupIds'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['WithEvent'])) {
            $model->withEvent = $map['WithEvent'];
        }

        return $model;
    }
}
