<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
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
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description internetChargeType
     *
     * @var string
     */
    public $internetChargeType;

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
     * @description deploymentSetId
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description zoneNo
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description vlanNo
     *
     * @var string
     */
    public $vlanId;

    /**
     * @description innerIp
     *
     * @var string
     */
    public $innerIpAddress;

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
     * @description arns
     *
     * @var array
     */
    public $arn;

    /**
     * @description nodeControllerId
     *
     * @var string
     */
    public $nodeControllerId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description privateIpAddress
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description ioOptimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description enableVmOsConfig
     *
     * @var bool
     */
    public $useAdditionalService;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

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
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description userData
     *
     * @var string
     */
    public $userData;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description keyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description spotPriceLimit
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description spotDuration
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description spotInterruptionBehavior
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description ramRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description securityEnhancementStrategy
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

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
     * @description creditSpecification
     *
     * @var string
     */
    public $creditSpecification;

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
        'regionId'                    => 'RegionId',
        'imageId'                     => 'ImageId',
        'imageFamily'                 => 'ImageFamily',
        'instanceType'                => 'InstanceType',
        'securityGroupId'             => 'SecurityGroupId',
        'instanceName'                => 'InstanceName',
        'internetChargeType'          => 'InternetChargeType',
        'autoRenew'                   => 'AutoRenew',
        'autoRenewPeriod'             => 'AutoRenewPeriod',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'hostName'                    => 'HostName',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'deploymentSetId'             => 'DeploymentSetId',
        'zoneId'                      => 'ZoneId',
        'clusterId'                   => 'ClusterId',
        'clientToken'                 => 'ClientToken',
        'vlanId'                      => 'VlanId',
        'innerIpAddress'              => 'InnerIpAddress',
        'systemDisk'                  => 'SystemDisk',
        'dataDisk'                    => 'DataDisk',
        'arn'                         => 'Arn',
        'nodeControllerId'            => 'NodeControllerId',
        'description'                 => 'Description',
        'VSwitchId'                   => 'VSwitchId',
        'privateIpAddress'            => 'PrivateIpAddress',
        'ioOptimized'                 => 'IoOptimized',
        'ownerAccount'                => 'OwnerAccount',
        'useAdditionalService'        => 'UseAdditionalService',
        'instanceChargeType'          => 'InstanceChargeType',
        'period'                      => 'Period',
        'periodUnit'                  => 'PeriodUnit',
        'tag'                         => 'Tag',
        'userData'                    => 'UserData',
        'spotStrategy'                => 'SpotStrategy',
        'keyPairName'                 => 'KeyPairName',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'spotDuration'                => 'SpotDuration',
        'spotInterruptionBehavior'    => 'SpotInterruptionBehavior',
        'ramRoleName'                 => 'RamRoleName',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'resourceGroupId'             => 'ResourceGroupId',
        'hpcClusterId'                => 'HpcClusterId',
        'dryRun'                      => 'DryRun',
        'dedicatedHostId'             => 'DedicatedHostId',
        'creditSpecification'         => 'CreditSpecification',
        'deletionProtection'          => 'DeletionProtection',
        'affinity'                    => 'Affinity',
        'tenancy'                     => 'Tenancy',
        'storageSetId'                => 'StorageSetId',
        'storageSetPartitionNumber'   => 'StorageSetPartitionNumber',
        'httpEndpoint'                => 'HttpEndpoint',
        'httpTokens'                  => 'HttpTokens',
        'httpPutResponseHopLimit'     => 'HttpPutResponseHopLimit',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('systemDisk', $this->systemDisk, true);
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
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
        if (null !== $this->arn) {
            $res['Arn'] = [];
            if (null !== $this->arn && \is_array($this->arn)) {
                $n = 0;
                foreach ($this->arn as $item) {
                    $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeControllerId) {
            $res['NodeControllerId'] = $this->nodeControllerId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->useAdditionalService) {
            $res['UseAdditionalService'] = $this->useAdditionalService;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
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
     * @return CreateInstanceRequest
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
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
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = $map['InnerIpAddress'];
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
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n          = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeControllerId'])) {
            $model->nodeControllerId = $map['NodeControllerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['UseAdditionalService'])) {
            $model->useAdditionalService = $map['UseAdditionalService'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
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
