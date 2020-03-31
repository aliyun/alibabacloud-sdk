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
    protected $_required = [
        'containerGroupId'   => true,
        'containerGroupName' => true,
        'regionId'           => true,
        'zoneId'             => true,
        'memory'             => true,
        'cpu'                => true,
        'VSwitchId'          => true,
        'securityGroupId'    => true,
        'restartPolicy'      => true,
        'intranetIp'         => true,
        'status'             => true,
        'internetIp'         => true,
        'creationTime'       => true,
        'succeededTime'      => true,
        'eniInstanceId'      => true,
        'instanceType'       => true,
        'expiredTime'        => true,
        'failedTime'         => true,
        'ramRoleName'        => true,
        'ipv6Address'        => true,
        'vpcId'              => true,
        'discount'           => true,
        'resourceGroupId'    => true,
        'tags'               => true,
        'events'             => true,
        'containers'         => true,
        'volumes'            => true,
        'initContainers'     => true,
        'hostAliases'        => true,
        'dnsConfig'          => true,
        'eciSecurityContext' => true,
    ];
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
    protected $_description = [
        'containerGroupId'   => 'containerGroupId',
        'containerGroupName' => 'containerGroupName',
        'regionId'           => 'regionId',
        'zoneId'             => 'zoneId',
        'memory'             => 'mem',
        'cpu'                => 'cpu',
        'VSwitchId'          => 'vSwitchId',
        'securityGroupId'    => 'securityGroupId',
        'restartPolicy'      => 'restartPolicy',
        'intranetIp'         => 'intranetIp',
        'status'             => 'status',
        'internetIp'         => 'internetIp',
        'creationTime'       => 'gmtCreate',
        'succeededTime'      => 'gmtSucceeded',
        'eniInstanceId'      => 'eniInstanceId',
        'instanceType'       => 'instanceType',
        'expiredTime'        => 'gmtExpired',
        'failedTime'         => 'gmtFailed',
        'ramRoleName'        => 'ramRoleName',
        'ipv6Address'        => 'ipv6Address',
        'vpcId'              => 'vpcInstanceId',
        'discount'           => 'discount',
        'resourceGroupId'    => 'resourceGroupId',
        'tags'               => 'labels',
        'events'             => 'events',
        'containers'         => 'containers',
        'volumes'            => 'volumes',
        'initContainers'     => 'initContainers',
        'hostAliases'        => 'hostAliases',
        'dnsConfig'          => 'dnsConfig',
        'eciSecurityContext' => 'podSecurityContext',
    ];
}
