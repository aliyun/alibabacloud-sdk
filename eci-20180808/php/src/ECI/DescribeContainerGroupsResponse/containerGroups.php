<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse;

use AlibabaCloud\Tea\Model;

class containerGroups extends Model
{
    public $containerGroupId;

    public $containerGroupName;

    public $regionId;

    public $zoneId;

    public $memory;

    public $cpu;

    public $VSwitchId;

    public $securityGroupId;

    public $restartPolicy;

    public $intranetIp;

    public $status;

    public $internetIp;

    public $creationTime;

    public $succeededTime;

    public $eniInstanceId;

    public $instanceType;

    public $expiredTime;

    public $failedTime;

    public $ramRoleName;

    public $ipv6Address;

    public $vpcId;

    public $discount;

    public $resourceGroupId;

    public $tags;

    public $events;

    public $containers;

    public $volumes;

    public $initContainers;

    public $hostAliases;

    public $dnsConfig;

    public $eciSecurityContext;
    protected $_name = [
        'containerGroupId'   => 'ContainerGroupId',
        'containerGroupName' => 'ContainerGroupName',
        'regionId'           => 'RegionId',
        'zoneId'             => 'ZoneId',
        'memory'             => 'Memory',
        'cpu'                => 'Cpu',
        'VSwitchId'          => 'VSwitchId',
        'securityGroupId'    => 'SecurityGroupId',
        'restartPolicy'      => 'RestartPolicy',
        'intranetIp'         => 'IntranetIp',
        'status'             => 'Status',
        'internetIp'         => 'InternetIp',
        'creationTime'       => 'CreationTime',
        'succeededTime'      => 'SucceededTime',
        'eniInstanceId'      => 'EniInstanceId',
        'instanceType'       => 'InstanceType',
        'expiredTime'        => 'ExpiredTime',
        'failedTime'         => 'FailedTime',
        'ramRoleName'        => 'RamRoleName',
        'ipv6Address'        => 'Ipv6Address',
        'vpcId'              => 'VpcId',
        'discount'           => 'Discount',
        'resourceGroupId'    => 'ResourceGroupId',
        'tags'               => 'Tags',
        'events'             => 'Events',
        'containers'         => 'Containers',
        'volumes'            => 'Volumes',
        'initContainers'     => 'InitContainers',
        'hostAliases'        => 'HostAliases',
        'dnsConfig'          => 'DnsConfig',
        'eciSecurityContext' => 'EciSecurityContext',
    ];
}
