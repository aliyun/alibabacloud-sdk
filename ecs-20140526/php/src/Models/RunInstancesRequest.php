<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\networkInterface;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class RunInstancesRequest extends Model
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
     * @description imageId
     *
     * @var string
     */
    public $imageId;

    /**
     * @description imageFamily
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description securityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description securityGroupIds
     *
     * @var array
     */
    public $securityGroupIds;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description internetMaxBandwidthIn
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description internetMaxBandwidthOut
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description hostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description resourceNameSuffix
     *
     * @var bool
     */
    public $uniqueSuffix;

    /**
     * @description password
     *
     * @var string
     */
    public $password;

    /**
     * @description passwdInherit
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description internetChargeType
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description SystemDisk
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description createDataDiskParams
     *
     * @var array
     */
    public $dataDisk;

    /**
     * @description ioOptimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description createEniParams
     *
     * @var array
     */
    public $networkInterface;

    /**
     * @description userData
     *
     * @var string
     */
    public $userData;

    /**
     * @description keyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description ramRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description maxAmount
     *
     * @var int
     */
    public $amount;

    /**
     * @description minAmount
     *
     * @var int
     */
    public $minAmount;

    /**
     * @description autoReleaseTime
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description spotDuration
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description spotPriceLimit
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description spotInterruptionBehavior
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description securityEnhancementStrategy
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description tagListInner
     *
     * @var array
     */
    public $tag;

    /**
     * @description hpcClusterId
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description dedicatedHostId
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description launchTemplateId
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description launchTemplateName
     *
     * @var string
     */
    public $launchTemplateName;

    /**
     * @description launchTemplateVersion
     *
     * @var int
     */
    public $launchTemplateVersion;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description periodUnit
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description autoRenew
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description autoRenewPeriod
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description deploymentSetId
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description privateIpAddress
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description creditSpecification
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description ipv6Addresses
     *
     * @var array
     */
    public $ipv6Address;

    /**
     * @description ipv6AddressCount
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description deletionProtection
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description dedicatedInstanceAffinity
     *
     * @var string
     */
    public $affinity;

    /**
     * @description instanceTenancy
     *
     * @var string
     */
    public $tenancy;

    /**
     * @description storageSetId
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description storageSetPartitionNumber
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description CpuOptions
     *
     * @var cpuOptions
     */
    public $cpuOptions;

    /**
     * @description httpEndpoint
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description httpTokens
     *
     * @var string
     */
    public $httpTokens;

    /**
     * @description httpPutResponseHopLimit
     *
     * @var int
     */
    public $httpPutResponseHopLimit;
    protected $_name = [
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'ownerAccount'                => 'OwnerAccount',
        'regionId'                    => 'RegionId',
        'imageId'                     => 'ImageId',
        'imageFamily'                 => 'ImageFamily',
        'instanceType'                => 'InstanceType',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'VSwitchId'                   => 'VSwitchId',
        'instanceName'                => 'InstanceName',
        'description'                 => 'Description',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'hostName'                    => 'HostName',
        'uniqueSuffix'                => 'UniqueSuffix',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'zoneId'                      => 'ZoneId',
        'internetChargeType'          => 'InternetChargeType',
        'systemDisk'                  => 'SystemDisk',
        'dataDisk'                    => 'DataDisk',
        'ioOptimized'                 => 'IoOptimized',
        'networkInterface'            => 'NetworkInterface',
        'userData'                    => 'UserData',
        'keyPairName'                 => 'KeyPairName',
        'ramRoleName'                 => 'RamRoleName',
        'amount'                      => 'Amount',
        'minAmount'                   => 'MinAmount',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'spotStrategy'                => 'SpotStrategy',
        'spotDuration'                => 'SpotDuration',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'spotInterruptionBehavior'    => 'SpotInterruptionBehavior',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'clientToken'                 => 'ClientToken',
        'tag'                         => 'Tag',
        'hpcClusterId'                => 'HpcClusterId',
        'dryRun'                      => 'DryRun',
        'dedicatedHostId'             => 'DedicatedHostId',
        'launchTemplateId'            => 'LaunchTemplateId',
        'launchTemplateName'          => 'LaunchTemplateName',
        'launchTemplateVersion'       => 'LaunchTemplateVersion',
        'resourceGroupId'             => 'ResourceGroupId',
        'period'                      => 'Period',
        'periodUnit'                  => 'PeriodUnit',
        'autoRenew'                   => 'AutoRenew',
        'autoRenewPeriod'             => 'AutoRenewPeriod',
        'instanceChargeType'          => 'InstanceChargeType',
        'deploymentSetId'             => 'DeploymentSetId',
        'privateIpAddress'            => 'PrivateIpAddress',
        'creditSpecification'         => 'CreditSpecification',
        'ipv6Address'                 => 'Ipv6Address',
        'ipv6AddressCount'            => 'Ipv6AddressCount',
        'deletionProtection'          => 'DeletionProtection',
        'affinity'                    => 'Affinity',
        'tenancy'                     => 'Tenancy',
        'storageSetId'                => 'StorageSetId',
        'storageSetPartitionNumber'   => 'StorageSetPartitionNumber',
        'cpuOptions'                  => 'CpuOptions',
        'httpEndpoint'                => 'HttpEndpoint',
        'httpTokens'                  => 'HttpTokens',
        'httpPutResponseHopLimit'     => 'HttpPutResponseHopLimit',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('systemDisk', $this->systemDisk, true);
        Model::validateRequired('cpuOptions', $this->cpuOptions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = [];
            if (null !== $this->securityGroupIds) {
                $res['SecurityGroupIds'] = $this->securityGroupIds;
            }
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->uniqueSuffix) {
            $res['UniqueSuffix'] = $this->uniqueSuffix;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->networkInterface) {
            $res['NetworkInterface'] = [];
            if (null !== $this->networkInterface && \is_array($this->networkInterface)) {
                $n = 0;
                foreach ($this->networkInterface as $item) {
                    $res['NetworkInterface'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->minAmount) {
            $res['MinAmount'] = $this->minAmount;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = [];
            if (null !== $this->ipv6Address) {
                $res['Ipv6Address'] = $this->ipv6Address;
            }
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }
        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toMap() : null;
        }
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }
        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstancesRequest
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['UniqueSuffix'])) {
            $model->uniqueSuffix = $map['UniqueSuffix'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['NetworkInterface'])) {
            if (!empty($map['NetworkInterface'])) {
                $model->networkInterface = [];
                $n                       = 0;
                foreach ($map['NetworkInterface'] as $item) {
                    $model->networkInterface[$n++] = null !== $item ? networkInterface::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['MinAmount'])) {
            $model->minAmount = $map['MinAmount'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = [];
                $model->ipv6Address = $map['Ipv6Address'];
            }
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }
        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
        }
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }
        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }

        return $model;
    }
}
