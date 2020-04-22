<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

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
        $res                         = [];
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['OwnerAccount']         = $this->ownerAccount;
        $res['RegionId']             = $this->regionId;
        $res['ZoneId']               = $this->zoneId;
        $res['VSwitchId']            = $this->VSwitchId;
        $res['NextToken']            = $this->nextToken;
        $res['Limit']                = $this->limit;
        $res['Tag']                  = [];
        if (null !== $this->tag && \is_array($this->tag)) {
            $n = 0;
            foreach ($this->tag as $item) {
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ContainerGroupIds']  = $this->containerGroupIds;
        $res['ContainerGroupName'] = $this->containerGroupName;
        $res['Status']             = $this->status;
        $res['ResourceGroupId']    = $this->resourceGroupId;
        $res['WithEvent']          = $this->withEvent;

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
                    $model->tag[$n++] = null !== $item ? DescribeContainerGroupsRequest\tag::fromMap($item) : $item;
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
