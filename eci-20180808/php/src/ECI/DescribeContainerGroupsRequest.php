<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupsRequest extends Model
{
    public $ownerId;
    public $resourceOwnerAccount;
    public $resourceOwnerId;
    public $ownerAccount;
    public $regionId;
    public $zoneId;
    public $VSwitchId;
    public $nextToken;
    public $limit;
    public $tag;
    public $containerGroupIds;
    public $containerGroupName;
    public $status;
    public $resourceGroupId;
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
    protected $_description = [
        'ownerId'              => 'ownerId',
        'resourceOwnerAccount' => 'resourceOwnerAccount',
        'resourceOwnerId'      => 'resourceOwnerId',
        'ownerAccount'         => 'ownerAccount',
        'regionId'             => 'regionId',
        'zoneId'               => 'zoneId',
        'VSwitchId'            => 'vSwitchId',
        'nextToken'            => 'nextToken',
        'limit'                => 'limit',
        'tag'                  => 'labels',
        'containerGroupIds'    => 'containerGroupIdParam',
        'containerGroupName'   => 'containerGroupName',
        'status'               => 'status',
        'resourceGroupId'      => 'resourceGroupId',
        'withEvent'            => 'withEvent',
    ];
    protected $_required = [
        'regionId' => true,
    ];
}
