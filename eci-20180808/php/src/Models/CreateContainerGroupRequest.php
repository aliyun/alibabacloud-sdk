<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models;

use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\arn;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\container;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\dnsConfig;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\hostAliase;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\imageRegistryCredential;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\initContainer;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\securityContext;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\tag;
use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\volume;
use AlibabaCloud\Tea\Model;

class CreateContainerGroupRequest extends Model
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
     * @description linkedSecurityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description linkedVSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description containerGroupName
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description restartPolicy
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description labels
     *
     * @var array
     */
    public $tag;

    /**
     * @description imageRegistryCredentials
     *
     * @var array
     */
    public $imageRegistryCredential;

    /**
     * @description containers
     *
     * @var array
     */
    public $container;

    /**
     * @description volumes
     *
     * @var array
     */
    public $volume;

    /**
     * @description eipInstanceId
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description initContainers
     *
     * @var array
     */
    public $initContainer;

    /**
     * @description DnsConfig
     *
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @description cpu
     *
     * @var float
     */
    public $cpu;

    /**
     * @description mem
     *
     * @var float
     */
    public $memory;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description dnsPolicy
     *
     * @var string
     */
    public $dnsPolicy;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description hostAliases
     *
     * @var array
     */
    public $hostAliase;

    /**
     * @description arns
     *
     * @var array
     */
    public $arn;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description SecurityContext
     *
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description slsEnable
     *
     * @var bool
     */
    public $slsEnable;

    /**
     * @description imageSnapshotId
     *
     * @var string
     */
    public $imageSnapshotId;

    /**
     * @description ramRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description ntpServers
     *
     * @var array
     */
    public $ntpServer;

    /**
     * @description terminationGracePeriodSeconds
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description autoMatchImageCache
     *
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @description ipv6AddressCount
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description activeDeadlineSeconds
     *
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description spotPriceLimit
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description multiVswitchStrategy
     *
     * @var string
     */
    public $VSwitchStrategy;

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
        'tenantVSwitchId'               => 'TenantVSwitchId',
        'tenantSecurityGroupId'         => 'TenantSecurityGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('containerGroupName', $this->containerGroupName, true);
        Model::validateRequired('container', $this->container, true);
        Model::validateRequired('dnsConfig', $this->dnsConfig, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
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
        $res['SecurityGroupId']      = $this->securityGroupId;
        $res['VSwitchId']            = $this->VSwitchId;
        $res['ContainerGroupName']   = $this->containerGroupName;
        $res['RestartPolicy']        = $this->restartPolicy;
        $res['Tag']                  = [];
        if (null !== $this->tag && \is_array($this->tag)) {
            $n = 0;
            foreach ($this->tag as $item) {
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ImageRegistryCredential'] = [];
        if (null !== $this->imageRegistryCredential && \is_array($this->imageRegistryCredential)) {
            $n = 0;
            foreach ($this->imageRegistryCredential as $item) {
                $res['ImageRegistryCredential'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Container'] = [];
        if (null !== $this->container && \is_array($this->container)) {
            $n = 0;
            foreach ($this->container as $item) {
                $res['Container'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Volume'] = [];
        if (null !== $this->volume && \is_array($this->volume)) {
            $n = 0;
            foreach ($this->volume as $item) {
                $res['Volume'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['EipInstanceId'] = $this->eipInstanceId;
        $res['InitContainer'] = [];
        if (null !== $this->initContainer && \is_array($this->initContainer)) {
            $n = 0;
            foreach ($this->initContainer as $item) {
                $res['InitContainer'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['DnsConfig']       = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        $res['Cpu']             = $this->cpu;
        $res['Memory']          = $this->memory;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        $res['DnsPolicy']       = $this->dnsPolicy;
        $res['ClientToken']     = $this->clientToken;
        $res['HostAliase']      = [];
        if (null !== $this->hostAliase && \is_array($this->hostAliase)) {
            $n = 0;
            foreach ($this->hostAliase as $item) {
                $res['HostAliase'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Arn'] = [];
        if (null !== $this->arn && \is_array($this->arn)) {
            $n = 0;
            foreach ($this->arn as $item) {
                $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['InstanceType']    = $this->instanceType;
        $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        $res['SlsEnable']       = $this->slsEnable;
        $res['ImageSnapshotId'] = $this->imageSnapshotId;
        $res['RamRoleName']     = $this->ramRoleName;
        $res['NtpServer']       = [];
        if (null !== $this->ntpServer) {
            $res['NtpServer'] = $this->ntpServer;
        }
        $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        $res['AutoMatchImageCache']           = $this->autoMatchImageCache;
        $res['Ipv6AddressCount']              = $this->ipv6AddressCount;
        $res['ActiveDeadlineSeconds']         = $this->activeDeadlineSeconds;
        $res['SpotStrategy']                  = $this->spotStrategy;
        $res['SpotPriceLimit']                = $this->spotPriceLimit;
        $res['VSwitchStrategy']               = $this->VSwitchStrategy;
        $res['TenantVSwitchId']               = $this->tenantVSwitchId;
        $res['TenantSecurityGroupId']         = $this->tenantSecurityGroupId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContainerGroupRequest
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n                              = 0;
                foreach ($map['ImageRegistryCredential'] as $item) {
                    $model->imageRegistryCredential[$n++] = null !== $item ? imageRegistryCredential::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Container'])) {
            if (!empty($map['Container'])) {
                $model->container = [];
                $n                = 0;
                foreach ($map['Container'] as $item) {
                    $model->container[$n++] = null !== $item ? container::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Volume'])) {
            if (!empty($map['Volume'])) {
                $model->volume = [];
                $n             = 0;
                foreach ($map['Volume'] as $item) {
                    $model->volume[$n++] = null !== $item ? volume::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['InitContainer'])) {
            if (!empty($map['InitContainer'])) {
                $model->initContainer = [];
                $n                    = 0;
                foreach ($map['InitContainer'] as $item) {
                    $model->initContainer[$n++] = null !== $item ? initContainer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['DnsPolicy'])) {
            $model->dnsPolicy = $map['DnsPolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['HostAliase'])) {
            if (!empty($map['HostAliase'])) {
                $model->hostAliase = [];
                $n                 = 0;
                foreach ($map['HostAliase'] as $item) {
                    $model->hostAliase[$n++] = null !== $item ? hostAliase::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n          = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['SlsEnable'])) {
            $model->slsEnable = $map['SlsEnable'];
        }
        if (isset($map['ImageSnapshotId'])) {
            $model->imageSnapshotId = $map['ImageSnapshotId'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['NtpServer'])) {
            if (!empty($map['NtpServer'])) {
                $model->ntpServer = [];
                $model->ntpServer = $map['NtpServer'];
            }
        }
        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }
        if (isset($map['AutoMatchImageCache'])) {
            $model->autoMatchImageCache = $map['AutoMatchImageCache'];
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['ActiveDeadlineSeconds'])) {
            $model->activeDeadlineSeconds = $map['ActiveDeadlineSeconds'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['VSwitchStrategy'])) {
            $model->VSwitchStrategy = $map['VSwitchStrategy'];
        }
        if (isset($map['TenantVSwitchId'])) {
            $model->tenantVSwitchId = $map['TenantVSwitchId'];
        }
        if (isset($map['TenantSecurityGroupId'])) {
            $model->tenantSecurityGroupId = $map['TenantSecurityGroupId'];
        }

        return $model;
    }
}
