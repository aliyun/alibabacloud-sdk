<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class CreateContainerGroupRequest extends Model
{
    public $ownerId;

    public $resourceOwnerAccount;

    public $resourceOwnerId;

    public $ownerAccount;

    public $regionId;

    public $zoneId;

    public $securityGroupId;

    public $VSwitchId;

    public $containerGroupName;

    public $restartPolicy;

    public $tag;

    public $imageRegistryCredential;

    public $container;

    public $volume;

    public $eipInstanceId;

    public $initContainer;

    public $dnsConfig;

    public $cpu;

    public $memory;

    public $resourceGroupId;

    public $dnsPolicy;

    public $clientToken;

    public $hostAliase;

    public $arn;

    public $instanceType;

    public $securityContext;

    public $slsEnable;

    public $imageSnapshotId;

    public $ramRoleName;

    public $ntpServer;

    public $terminationGracePeriodSeconds;

    public $autoMatchImageCache;

    public $ipv6AddressCount;

    public $activeDeadlineSeconds;

    public $spotStrategy;

    public $spotPriceLimit;

    public $VSwitchStrategy;
    protected $_name = [
        'ownerId'                       => 'OwnerId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'ownerAccount'                  => 'OwnerAccount',
        'regionId'                      => 'RegionId',
        'zoneId'                        => 'ZoneId',
        'securityGroupId'               => 'SecurityGroupId',
        'VSwitchId'                     => 'VSwitchId',
        'containerGroupName'            => 'ContainerGroupName',
        'restartPolicy'                 => 'RestartPolicy',
        'tag'                           => 'Tag',
        'imageRegistryCredential'       => 'ImageRegistryCredential',
        'container'                     => 'Container',
        'volume'                        => 'Volume',
        'eipInstanceId'                 => 'EipInstanceId',
        'initContainer'                 => 'InitContainer',
        'dnsConfig'                     => 'DnsConfig',
        'cpu'                           => 'Cpu',
        'memory'                        => 'Memory',
        'resourceGroupId'               => 'ResourceGroupId',
        'dnsPolicy'                     => 'DnsPolicy',
        'clientToken'                   => 'ClientToken',
        'hostAliase'                    => 'HostAliase',
        'arn'                           => 'Arn',
        'instanceType'                  => 'InstanceType',
        'securityContext'               => 'SecurityContext',
        'slsEnable'                     => 'SlsEnable',
        'imageSnapshotId'               => 'ImageSnapshotId',
        'ramRoleName'                   => 'RamRoleName',
        'ntpServer'                     => 'NtpServer',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'autoMatchImageCache'           => 'AutoMatchImageCache',
        'ipv6AddressCount'              => 'Ipv6AddressCount',
        'activeDeadlineSeconds'         => 'ActiveDeadlineSeconds',
        'spotStrategy'                  => 'SpotStrategy',
        'spotPriceLimit'                => 'SpotPriceLimit',
        'VSwitchStrategy'               => 'VSwitchStrategy',
    ];
}
