<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupPriceRequest extends Model
{
    public $ownerId;
    public $resourceOwnerAccount;
    public $resourceOwnerId;
    public $ownerAccount;
    public $regionId;
    public $cpu;
    public $memory;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'cpu'                  => 'Cpu',
        'memory'               => 'Memory',
    ];
    protected $_description = [
        'ownerId'              => 'ownerId',
        'resourceOwnerAccount' => 'resourceOwnerAccount',
        'resourceOwnerId'      => 'resourceOwnerId',
        'ownerAccount'         => 'ownerAccount',
        'regionId'             => 'regionId',
        'cpu'                  => 'cpu',
        'memory'               => 'memory',
    ];
    protected $_required = [
        'regionId' => true,
        'cpu'      => true,
        'memory'   => true,
    ];
}
