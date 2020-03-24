<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class UpdateContainerGroupRequest extends Model
{
    public $ownerId;

    public $resourceOwnerAccount;

    public $resourceOwnerId;

    public $ownerAccount;

    public $regionId;

    public $containerGroupId;

    public $restartPolicy;

    public $tag;

    public $volume;

    public $dnsConfig;

    public $container;

    public $initContainer;

    public $imageRegistryCredential;

    public $clientToken;

    public $cpu;

    public $memory;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'ownerAccount'            => 'OwnerAccount',
        'regionId'                => 'RegionId',
        'containerGroupId'        => 'ContainerGroupId',
        'restartPolicy'           => 'RestartPolicy',
        'tag'                     => 'Tag',
        'volume'                  => 'Volume',
        'dnsConfig'               => 'DnsConfig',
        'container'               => 'Container',
        'initContainer'           => 'InitContainer',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'clientToken'             => 'ClientToken',
        'cpu'                     => 'Cpu',
        'memory'                  => 'Memory',
    ];
}
