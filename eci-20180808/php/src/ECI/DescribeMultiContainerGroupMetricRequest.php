<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeMultiContainerGroupMetricRequest extends Model
{
    public $ownerId;
    public $resourceOwnerAccount;
    public $resourceOwnerId;
    public $ownerAccount;
    public $regionId;
    public $containerGroupIds;
    public $resourceGroupId;
    public $metricType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'containerGroupIds'    => 'ContainerGroupIds',
        'resourceGroupId'      => 'ResourceGroupId',
        'metricType'           => 'MetricType',
    ];
    protected $_description = [
        'ownerId'              => 'ownerId',
        'resourceOwnerAccount' => 'resourceOwnerAccount',
        'resourceOwnerId'      => 'resourceOwnerId',
        'ownerAccount'         => 'ownerAccount',
        'regionId'             => 'regionId',
        'containerGroupIds'    => 'containerGroupIdParam',
        'resourceGroupId'      => 'resourceGroupId',
        'metricType'           => 'metricType',
    ];
    protected $_required = [
        'regionId'          => true,
        'containerGroupIds' => true,
    ];
}
