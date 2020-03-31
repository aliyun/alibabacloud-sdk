<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerLogRequest extends Model
{
    public $ownerId;
    public $resourceOwnerAccount;
    public $resourceOwnerId;
    public $ownerAccount;
    public $regionId;
    public $containerGroupId;
    public $containerName;
    public $startTime;
    public $tail;
    public $lastTime;
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
    protected $_description = [
        'ownerId'              => 'ownerId',
        'resourceOwnerAccount' => 'resourceOwnerAccount',
        'resourceOwnerId'      => 'resourceOwnerId',
        'ownerAccount'         => 'ownerAccount',
        'regionId'             => 'regionId',
        'containerGroupId'     => 'containerGroupId',
        'containerName'        => 'containerName',
        'startTime'            => 'startTime',
        'tail'                 => 'tail',
        'lastTime'             => 'previous',
        'sinceSeconds'         => 'sinceSeconds',
    ];
    protected $_required = [
        'regionId'         => true,
        'containerGroupId' => true,
        'containerName'    => true,
    ];
}
