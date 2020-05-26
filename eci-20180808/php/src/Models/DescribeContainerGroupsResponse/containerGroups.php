<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse;

use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers;
use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\dnsConfig;
use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\eciSecurityContext;
use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\events;
use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\hostAliases;
use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers;
use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\tags;
use AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\volumes;
use AlibabaCloud\Tea\Model;

class containerGroups extends Model
{
    /**
     * @description containerGroupId
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description containerGroupName
     *
     * @var string
     */
    public $containerGroupName;

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
     * @description mem
     *
     * @var float
     */
    public $memory;

    /**
     * @description cpu
     *
     * @var float
     */
    public $cpu;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description securityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description restartPolicy
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description intranetIp
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description internetIp
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description gmtSucceeded
     *
     * @var string
     */
    public $succeededTime;

    /**
     * @description eniInstanceId
     *
     * @var string
     */
    public $eniInstanceId;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description gmtExpired
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description gmtFailed
     *
     * @var string
     */
    public $failedTime;

    /**
     * @description ramRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description ipv6Address
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @description vpcInstanceId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description discount
     *
     * @var int
     */
    public $discount;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description tenantEniInstanceId
     *
     * @var string
     */
    public $tenantEniInstanceId;

    /**
     * @description tenantVSwitchId
     *
     * @var string
     */
    public $tenantVSwitchId;

    /**
     * @description tenantSecurityGroupId
     *
     * @var string
     */
    public $tenantSecurityGroupId;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description labels
     *
     * @var array
     */
    public $tags;

    /**
     * @description events
     *
     * @var array
     */
    public $events;

    /**
     * @description containers
     *
     * @var array
     */
    public $containers;

    /**
     * @description volumes
     *
     * @var array
     */
    public $volumes;

    /**
     * @description initContainers
     *
     * @var array
     */
    public $initContainers;

    /**
     * @description hostAliases
     *
     * @var array
     */
    public $hostAliases;

    /**
     * @description dnsConfig
     *
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @description podSecurityContext
     *
     * @var eciSecurityContext
     */
    public $eciSecurityContext;
    protected $_name = [
        'containerGroupId'      => 'ContainerGroupId',
        'containerGroupName'    => 'ContainerGroupName',
        'regionId'              => 'RegionId',
        'zoneId'                => 'ZoneId',
        'memory'                => 'Memory',
        'cpu'                   => 'Cpu',
        'VSwitchId'             => 'VSwitchId',
        'securityGroupId'       => 'SecurityGroupId',
        'restartPolicy'         => 'RestartPolicy',
        'intranetIp'            => 'IntranetIp',
        'status'                => 'Status',
        'internetIp'            => 'InternetIp',
        'creationTime'          => 'CreationTime',
        'succeededTime'         => 'SucceededTime',
        'eniInstanceId'         => 'EniInstanceId',
        'instanceType'          => 'InstanceType',
        'expiredTime'           => 'ExpiredTime',
        'failedTime'            => 'FailedTime',
        'ramRoleName'           => 'RamRoleName',
        'ipv6Address'           => 'Ipv6Address',
        'vpcId'                 => 'VpcId',
        'discount'              => 'Discount',
        'resourceGroupId'       => 'ResourceGroupId',
        'tenantEniInstanceId'   => 'TenantEniInstanceId',
        'tenantVSwitchId'       => 'TenantVSwitchId',
        'tenantSecurityGroupId' => 'TenantSecurityGroupId',
        'spotStrategy'          => 'SpotStrategy',
        'tags'                  => 'Tags',
        'events'                => 'Events',
        'containers'            => 'Containers',
        'volumes'               => 'Volumes',
        'initContainers'        => 'InitContainers',
        'hostAliases'           => 'HostAliases',
        'dnsConfig'             => 'DnsConfig',
        'eciSecurityContext'    => 'EciSecurityContext',
    ];

    public function validate()
    {
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('containerGroupName', $this->containerGroupName, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('cpu', $this->cpu, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('restartPolicy', $this->restartPolicy, true);
        Model::validateRequired('intranetIp', $this->intranetIp, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('internetIp', $this->internetIp, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('succeededTime', $this->succeededTime, true);
        Model::validateRequired('eniInstanceId', $this->eniInstanceId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('failedTime', $this->failedTime, true);
        Model::validateRequired('ramRoleName', $this->ramRoleName, true);
        Model::validateRequired('ipv6Address', $this->ipv6Address, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('discount', $this->discount, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('tenantEniInstanceId', $this->tenantEniInstanceId, true);
        Model::validateRequired('tenantVSwitchId', $this->tenantVSwitchId, true);
        Model::validateRequired('tenantSecurityGroupId', $this->tenantSecurityGroupId, true);
        Model::validateRequired('spotStrategy', $this->spotStrategy, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('events', $this->events, true);
        Model::validateRequired('containers', $this->containers, true);
        Model::validateRequired('volumes', $this->volumes, true);
        Model::validateRequired('initContainers', $this->initContainers, true);
        Model::validateRequired('hostAliases', $this->hostAliases, true);
        Model::validateRequired('dnsConfig', $this->dnsConfig, true);
        Model::validateRequired('eciSecurityContext', $this->eciSecurityContext, true);
    }

    public function toMap()
    {
        $res                          = [];
        $res['ContainerGroupId']      = $this->containerGroupId;
        $res['ContainerGroupName']    = $this->containerGroupName;
        $res['RegionId']              = $this->regionId;
        $res['ZoneId']                = $this->zoneId;
        $res['Memory']                = $this->memory;
        $res['Cpu']                   = $this->cpu;
        $res['VSwitchId']             = $this->VSwitchId;
        $res['SecurityGroupId']       = $this->securityGroupId;
        $res['RestartPolicy']         = $this->restartPolicy;
        $res['IntranetIp']            = $this->intranetIp;
        $res['Status']                = $this->status;
        $res['InternetIp']            = $this->internetIp;
        $res['CreationTime']          = $this->creationTime;
        $res['SucceededTime']         = $this->succeededTime;
        $res['EniInstanceId']         = $this->eniInstanceId;
        $res['InstanceType']          = $this->instanceType;
        $res['ExpiredTime']           = $this->expiredTime;
        $res['FailedTime']            = $this->failedTime;
        $res['RamRoleName']           = $this->ramRoleName;
        $res['Ipv6Address']           = $this->ipv6Address;
        $res['VpcId']                 = $this->vpcId;
        $res['Discount']              = $this->discount;
        $res['ResourceGroupId']       = $this->resourceGroupId;
        $res['TenantEniInstanceId']   = $this->tenantEniInstanceId;
        $res['TenantVSwitchId']       = $this->tenantVSwitchId;
        $res['TenantSecurityGroupId'] = $this->tenantSecurityGroupId;
        $res['SpotStrategy']          = $this->spotStrategy;
        $res['Tags']                  = [];
        if (null !== $this->tags && \is_array($this->tags)) {
            $n = 0;
            foreach ($this->tags as $item) {
                $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Events'] = [];
        if (null !== $this->events && \is_array($this->events)) {
            $n = 0;
            foreach ($this->events as $item) {
                $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Containers'] = [];
        if (null !== $this->containers && \is_array($this->containers)) {
            $n = 0;
            foreach ($this->containers as $item) {
                $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Volumes'] = [];
        if (null !== $this->volumes && \is_array($this->volumes)) {
            $n = 0;
            foreach ($this->volumes as $item) {
                $res['Volumes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['InitContainers'] = [];
        if (null !== $this->initContainers && \is_array($this->initContainers)) {
            $n = 0;
            foreach ($this->initContainers as $item) {
                $res['InitContainers'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['HostAliases'] = [];
        if (null !== $this->hostAliases && \is_array($this->hostAliases)) {
            $n = 0;
            foreach ($this->hostAliases as $item) {
                $res['HostAliases'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['DnsConfig']          = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        $res['EciSecurityContext'] = null !== $this->eciSecurityContext ? $this->eciSecurityContext->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['SucceededTime'])) {
            $model->succeededTime = $map['SucceededTime'];
        }
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FailedTime'])) {
            $model->failedTime = $map['FailedTime'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Discount'])) {
            $model->discount = $map['Discount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TenantEniInstanceId'])) {
            $model->tenantEniInstanceId = $map['TenantEniInstanceId'];
        }
        if (isset($map['TenantVSwitchId'])) {
            $model->tenantVSwitchId = $map['TenantVSwitchId'];
        }
        if (isset($map['TenantSecurityGroupId'])) {
            $model->tenantSecurityGroupId = $map['TenantSecurityGroupId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Volumes'])) {
            if (!empty($map['Volumes'])) {
                $model->volumes = [];
                $n              = 0;
                foreach ($map['Volumes'] as $item) {
                    $model->volumes[$n++] = null !== $item ? volumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InitContainers'])) {
            if (!empty($map['InitContainers'])) {
                $model->initContainers = [];
                $n                     = 0;
                foreach ($map['InitContainers'] as $item) {
                    $model->initContainers[$n++] = null !== $item ? initContainers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostAliases'])) {
            if (!empty($map['HostAliases'])) {
                $model->hostAliases = [];
                $n                  = 0;
                foreach ($map['HostAliases'] as $item) {
                    $model->hostAliases[$n++] = null !== $item ? hostAliases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['EciSecurityContext'])) {
            $model->eciSecurityContext = eciSecurityContext::fromMap($map['EciSecurityContext']);
        }

        return $model;
    }
}
