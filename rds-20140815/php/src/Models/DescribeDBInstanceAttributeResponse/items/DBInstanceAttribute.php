<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\extra;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\extra\DBInstanceId;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\readOnlyDBInstanceIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\slaveZones;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @description model.ipVersion
     *
     * @var string
     */
    public $IPType;

    /**
     * @description model.dbInstanceDiskUsed
     *
     * @var string
     */
    public $DBInstanceDiskUsed;

    /**
     * @description model.guardDBInstanceName
     *
     * @var string
     */
    public $guardDBInstanceName;

    /**
     * @description model.canTempUpgrade
     *
     * @var bool
     */
    public $canTempUpgrade;

    /**
     * @description model.tempUpgradeTimeStart
     *
     * @var string
     */
    public $tempUpgradeTimeStart;

    /**
     * @description model.tempUpgradeTimeEnd
     *
     * @var string
     */
    public $tempUpgradeTimeEnd;

    /**
     * @description model.tempUpgradeRecoveryTime
     *
     * @var string
     */
    public $tempUpgradeRecoveryTime;

    /**
     * @description model.tempUpgradeRecoveryClass
     *
     * @var string
     */
    public $tempUpgradeRecoveryClass;

    /**
     * @description model.tempUpgradeRecoveryCpu
     *
     * @var int
     */
    public $tempUpgradeRecoveryCpu;

    /**
     * @description model.tempUpgradeRecoveryMemroy
     *
     * @var int
     */
    public $tempUpgradeRecoveryMemory;

    /**
     * @description model.tempUpgradeRecoveryMaxIOPS
     *
     * @var string
     */
    public $tempUpgradeRecoveryMaxIOPS;

    /**
     * @description model.tempUpgradeRecoveryMaxConnections
     *
     * @var string
     */
    public $tempUpgradeRecoveryMaxConnections;

    /**
     * @description model.dbInstanceId
     *
     * @var int
     */
    public $insId;

    /**
     * @description model.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description model.dbInstancePayType
     *
     * @var string
     */
    public $payType;

    /**
     * @description model.dbInstanceType
     *
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @description model.dbInstanceUsedType
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description model.region
     *
     * @var string
     */
    public $regionId;

    /**
     * @description model.connectionString
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description model.port
     *
     * @var string
     */
    public $port;

    /**
     * @description model.engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description model.engineVersion
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description model.dbInstanceClass
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description model.dbInstanceMemory
     *
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @description model.dbInstanceStorage
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description model.vpcCloudInstanceId
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description model.dbInstanceNetType
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description model.dbInstanceStatusDesc
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description model.dbInstanceDescription
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description model.lockMode
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description model.lockReason
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description model.readDelayTime
     *
     * @var string
     */
    public $readDelayTime;

    /**
     * @description model.dbMaxQty
     *
     * @var int
     */
    public $DBMaxQuantity;

    /**
     * @description model.accountMaxQty
     *
     * @var int
     */
    public $accountMaxQuantity;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description model.dbInstanceExpireTime
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description maintainTime
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description model.availabilityValue
     *
     * @var string
     */
    public $availabilityValue;

    /**
     * @description model.maxIOPS
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description model.maxConnections
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description model.masterDBInstanceName
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description model.dbInstanceCpuCores
     *
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @description model.datacomefromInstanceName
     *
     * @var string
     */
    public $incrementSourceDBInstanceId;

    /**
     * @description model.guardDBInstanceName
     *
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description model.replacateId
     *
     * @var string
     */
    public $replicateId;

    /**
     * @description model.childDBInstanceName
     *
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @description securityIPs
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description model.availableArea
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description model.instanceNetworkType
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description model.dbInstanceStorageType
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description model.isUserVpc
     *
     * @var string
     */
    public $advancedFeatures;

    /**
     * @description model.category
     *
     * @var string
     */
    public $category;

    /**
     * @description model.accountType
     *
     * @var string
     */
    public $accountType;

    /**
     * @description model.supportUpgradeAccountType
     *
     * @var string
     */
    public $supportUpgradeAccountType;

    /**
     * @description model.supportCreateSuperAccount
     *
     * @var string
     */
    public $supportCreateSuperAccount;

    /**
     * @description model.vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description model.vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description model.connectionMode
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description model.currentMinorVersion
     *
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @description model.latestMinorVersion
     *
     * @var string
     */
    public $latestKernelVersion;

    /**
     * @description model.resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description model.readSQLDelayTime
     *
     * @var string
     */
    public $readonlyInstanceSQLDelayedTime;

    /**
     * @description model.securityIPMode
     *
     * @var string
     */
    public $securityIPMode;

    /**
     * @description model.timeZone
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description model.collation
     *
     * @var string
     */
    public $collation;

    /**
     * @description model.dispenseMode
     *
     * @var string
     */
    public $dispenseMode;

    /**
     * @description model.masterRegion
     *
     * @var string
     */
    public $masterZone;

    /**
     * @description model.autoUpgradeMinorVersion
     *
     * @var string
     */
    public $autoUpgradeMinorVersion;

    /**
     * @description model.proxyType
     *
     * @var int
     */
    public $proxyType;

    /**
     * @description model.consoleVersion
     *
     * @var string
     */
    public $consoleVersion;

    /**
     * @description model.mulTempUpgrade
     *
     * @var bool
     */
    public $multipleTempUpgrade;

    /**
     * @description model.originConfig
     *
     * @var string
     */
    public $originConfiguration;

    /**
     * @description model.dedicatedHostGroupId
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description model.superPermissionMode
     *
     * @var string
     */
    public $superPermissionMode;

    /**
     * @description slaveRegionList
     *
     * @var slaveZones
     */
    public $slaveZones;

    /**
     * @description readOnlyDBInstanceNameList
     *
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @description model.extra
     *
     * @var extra
     */
    public $extra;
    protected $_name = [
        'IPType'                            => 'IPType',
        'DBInstanceDiskUsed'                => 'DBInstanceDiskUsed',
        'guardDBInstanceName'               => 'GuardDBInstanceName',
        'canTempUpgrade'                    => 'CanTempUpgrade',
        'tempUpgradeTimeStart'              => 'TempUpgradeTimeStart',
        'tempUpgradeTimeEnd'                => 'TempUpgradeTimeEnd',
        'tempUpgradeRecoveryTime'           => 'TempUpgradeRecoveryTime',
        'tempUpgradeRecoveryClass'          => 'TempUpgradeRecoveryClass',
        'tempUpgradeRecoveryCpu'            => 'TempUpgradeRecoveryCpu',
        'tempUpgradeRecoveryMemory'         => 'TempUpgradeRecoveryMemory',
        'tempUpgradeRecoveryMaxIOPS'        => 'TempUpgradeRecoveryMaxIOPS',
        'tempUpgradeRecoveryMaxConnections' => 'TempUpgradeRecoveryMaxConnections',
        'insId'                             => 'InsId',
        'DBInstanceId'                      => 'DBInstanceId',
        'payType'                           => 'PayType',
        'DBInstanceClassType'               => 'DBInstanceClassType',
        'DBInstanceType'                    => 'DBInstanceType',
        'regionId'                          => 'RegionId',
        'connectionString'                  => 'ConnectionString',
        'port'                              => 'Port',
        'engine'                            => 'Engine',
        'engineVersion'                     => 'EngineVersion',
        'DBInstanceClass'                   => 'DBInstanceClass',
        'DBInstanceMemory'                  => 'DBInstanceMemory',
        'DBInstanceStorage'                 => 'DBInstanceStorage',
        'vpcCloudInstanceId'                => 'VpcCloudInstanceId',
        'DBInstanceNetType'                 => 'DBInstanceNetType',
        'DBInstanceStatus'                  => 'DBInstanceStatus',
        'DBInstanceDescription'             => 'DBInstanceDescription',
        'lockMode'                          => 'LockMode',
        'lockReason'                        => 'LockReason',
        'readDelayTime'                     => 'ReadDelayTime',
        'DBMaxQuantity'                     => 'DBMaxQuantity',
        'accountMaxQuantity'                => 'AccountMaxQuantity',
        'creationTime'                      => 'CreationTime',
        'expireTime'                        => 'ExpireTime',
        'maintainTime'                      => 'MaintainTime',
        'availabilityValue'                 => 'AvailabilityValue',
        'maxIOPS'                           => 'MaxIOPS',
        'maxConnections'                    => 'MaxConnections',
        'masterInstanceId'                  => 'MasterInstanceId',
        'DBInstanceCPU'                     => 'DBInstanceCPU',
        'incrementSourceDBInstanceId'       => 'IncrementSourceDBInstanceId',
        'guardDBInstanceId'                 => 'GuardDBInstanceId',
        'replicateId'                       => 'ReplicateId',
        'tempDBInstanceId'                  => 'TempDBInstanceId',
        'securityIPList'                    => 'SecurityIPList',
        'zoneId'                            => 'ZoneId',
        'instanceNetworkType'               => 'InstanceNetworkType',
        'DBInstanceStorageType'             => 'DBInstanceStorageType',
        'advancedFeatures'                  => 'AdvancedFeatures',
        'category'                          => 'Category',
        'accountType'                       => 'AccountType',
        'supportUpgradeAccountType'         => 'SupportUpgradeAccountType',
        'supportCreateSuperAccount'         => 'SupportCreateSuperAccount',
        'vpcId'                             => 'VpcId',
        'VSwitchId'                         => 'VSwitchId',
        'connectionMode'                    => 'ConnectionMode',
        'currentKernelVersion'              => 'CurrentKernelVersion',
        'latestKernelVersion'               => 'LatestKernelVersion',
        'resourceGroupId'                   => 'ResourceGroupId',
        'readonlyInstanceSQLDelayedTime'    => 'ReadonlyInstanceSQLDelayedTime',
        'securityIPMode'                    => 'SecurityIPMode',
        'timeZone'                          => 'TimeZone',
        'collation'                         => 'Collation',
        'dispenseMode'                      => 'DispenseMode',
        'masterZone'                        => 'MasterZone',
        'autoUpgradeMinorVersion'           => 'AutoUpgradeMinorVersion',
        'proxyType'                         => 'ProxyType',
        'consoleVersion'                    => 'ConsoleVersion',
        'multipleTempUpgrade'               => 'MultipleTempUpgrade',
        'originConfiguration'               => 'OriginConfiguration',
        'dedicatedHostGroupId'              => 'DedicatedHostGroupId',
        'superPermissionMode'               => 'SuperPermissionMode',
        'slaveZones'                        => 'SlaveZones',
        'readOnlyDBInstanceIds'             => 'ReadOnlyDBInstanceIds',
        'extra'                             => 'Extra',
    ];

    public function validate()
    {
        Model::validateRequired('IPType', $this->IPType, true);
        Model::validateRequired('DBInstanceDiskUsed', $this->DBInstanceDiskUsed, true);
        Model::validateRequired('guardDBInstanceName', $this->guardDBInstanceName, true);
        Model::validateRequired('canTempUpgrade', $this->canTempUpgrade, true);
        Model::validateRequired('tempUpgradeTimeStart', $this->tempUpgradeTimeStart, true);
        Model::validateRequired('tempUpgradeTimeEnd', $this->tempUpgradeTimeEnd, true);
        Model::validateRequired('tempUpgradeRecoveryTime', $this->tempUpgradeRecoveryTime, true);
        Model::validateRequired('tempUpgradeRecoveryClass', $this->tempUpgradeRecoveryClass, true);
        Model::validateRequired('tempUpgradeRecoveryCpu', $this->tempUpgradeRecoveryCpu, true);
        Model::validateRequired('tempUpgradeRecoveryMemory', $this->tempUpgradeRecoveryMemory, true);
        Model::validateRequired('tempUpgradeRecoveryMaxIOPS', $this->tempUpgradeRecoveryMaxIOPS, true);
        Model::validateRequired('tempUpgradeRecoveryMaxConnections', $this->tempUpgradeRecoveryMaxConnections, true);
        Model::validateRequired('insId', $this->insId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('DBInstanceClassType', $this->DBInstanceClassType, true);
        Model::validateRequired('DBInstanceType', $this->DBInstanceType, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('connectionString', $this->connectionString, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceMemory', $this->DBInstanceMemory, true);
        Model::validateRequired('DBInstanceStorage', $this->DBInstanceStorage, true);
        Model::validateRequired('vpcCloudInstanceId', $this->vpcCloudInstanceId, true);
        Model::validateRequired('DBInstanceNetType', $this->DBInstanceNetType, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('lockReason', $this->lockReason, true);
        Model::validateRequired('readDelayTime', $this->readDelayTime, true);
        Model::validateRequired('DBMaxQuantity', $this->DBMaxQuantity, true);
        Model::validateRequired('accountMaxQuantity', $this->accountMaxQuantity, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('maintainTime', $this->maintainTime, true);
        Model::validateRequired('availabilityValue', $this->availabilityValue, true);
        Model::validateRequired('maxIOPS', $this->maxIOPS, true);
        Model::validateRequired('maxConnections', $this->maxConnections, true);
        Model::validateRequired('masterInstanceId', $this->masterInstanceId, true);
        Model::validateRequired('DBInstanceCPU', $this->DBInstanceCPU, true);
        Model::validateRequired('incrementSourceDBInstanceId', $this->incrementSourceDBInstanceId, true);
        Model::validateRequired('guardDBInstanceId', $this->guardDBInstanceId, true);
        Model::validateRequired('replicateId', $this->replicateId, true);
        Model::validateRequired('tempDBInstanceId', $this->tempDBInstanceId, true);
        Model::validateRequired('securityIPList', $this->securityIPList, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('DBInstanceStorageType', $this->DBInstanceStorageType, true);
        Model::validateRequired('advancedFeatures', $this->advancedFeatures, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('accountType', $this->accountType, true);
        Model::validateRequired('supportUpgradeAccountType', $this->supportUpgradeAccountType, true);
        Model::validateRequired('supportCreateSuperAccount', $this->supportCreateSuperAccount, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('connectionMode', $this->connectionMode, true);
        Model::validateRequired('currentKernelVersion', $this->currentKernelVersion, true);
        Model::validateRequired('latestKernelVersion', $this->latestKernelVersion, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('readonlyInstanceSQLDelayedTime', $this->readonlyInstanceSQLDelayedTime, true);
        Model::validateRequired('securityIPMode', $this->securityIPMode, true);
        Model::validateRequired('timeZone', $this->timeZone, true);
        Model::validateRequired('collation', $this->collation, true);
        Model::validateRequired('dispenseMode', $this->dispenseMode, true);
        Model::validateRequired('masterZone', $this->masterZone, true);
        Model::validateRequired('autoUpgradeMinorVersion', $this->autoUpgradeMinorVersion, true);
        Model::validateRequired('proxyType', $this->proxyType, true);
        Model::validateRequired('consoleVersion', $this->consoleVersion, true);
        Model::validateRequired('multipleTempUpgrade', $this->multipleTempUpgrade, true);
        Model::validateRequired('originConfiguration', $this->originConfiguration, true);
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('superPermissionMode', $this->superPermissionMode, true);
        Model::validateRequired('slaveZones', $this->slaveZones, true);
        Model::validateRequired('readOnlyDBInstanceIds', $this->readOnlyDBInstanceIds, true);
        Model::validateRequired('extra', $this->extra, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->DBInstanceDiskUsed) {
            $res['DBInstanceDiskUsed'] = $this->DBInstanceDiskUsed;
        }
        if (null !== $this->guardDBInstanceName) {
            $res['GuardDBInstanceName'] = $this->guardDBInstanceName;
        }
        if (null !== $this->canTempUpgrade) {
            $res['CanTempUpgrade'] = $this->canTempUpgrade;
        }
        if (null !== $this->tempUpgradeTimeStart) {
            $res['TempUpgradeTimeStart'] = $this->tempUpgradeTimeStart;
        }
        if (null !== $this->tempUpgradeTimeEnd) {
            $res['TempUpgradeTimeEnd'] = $this->tempUpgradeTimeEnd;
        }
        if (null !== $this->tempUpgradeRecoveryTime) {
            $res['TempUpgradeRecoveryTime'] = $this->tempUpgradeRecoveryTime;
        }
        if (null !== $this->tempUpgradeRecoveryClass) {
            $res['TempUpgradeRecoveryClass'] = $this->tempUpgradeRecoveryClass;
        }
        if (null !== $this->tempUpgradeRecoveryCpu) {
            $res['TempUpgradeRecoveryCpu'] = $this->tempUpgradeRecoveryCpu;
        }
        if (null !== $this->tempUpgradeRecoveryMemory) {
            $res['TempUpgradeRecoveryMemory'] = $this->tempUpgradeRecoveryMemory;
        }
        if (null !== $this->tempUpgradeRecoveryMaxIOPS) {
            $res['TempUpgradeRecoveryMaxIOPS'] = $this->tempUpgradeRecoveryMaxIOPS;
        }
        if (null !== $this->tempUpgradeRecoveryMaxConnections) {
            $res['TempUpgradeRecoveryMaxConnections'] = $this->tempUpgradeRecoveryMaxConnections;
        }
        if (null !== $this->insId) {
            $res['InsId'] = $this->insId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->readDelayTime) {
            $res['ReadDelayTime'] = $this->readDelayTime;
        }
        if (null !== $this->DBMaxQuantity) {
            $res['DBMaxQuantity'] = $this->DBMaxQuantity;
        }
        if (null !== $this->accountMaxQuantity) {
            $res['AccountMaxQuantity'] = $this->accountMaxQuantity;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->DBInstanceCPU) {
            $res['DBInstanceCPU'] = $this->DBInstanceCPU;
        }
        if (null !== $this->incrementSourceDBInstanceId) {
            $res['IncrementSourceDBInstanceId'] = $this->incrementSourceDBInstanceId;
        }
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->replicateId) {
            $res['ReplicateId'] = $this->replicateId;
        }
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->advancedFeatures) {
            $res['AdvancedFeatures'] = $this->advancedFeatures;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->supportUpgradeAccountType) {
            $res['SupportUpgradeAccountType'] = $this->supportUpgradeAccountType;
        }
        if (null !== $this->supportCreateSuperAccount) {
            $res['SupportCreateSuperAccount'] = $this->supportCreateSuperAccount;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->currentKernelVersion) {
            $res['CurrentKernelVersion'] = $this->currentKernelVersion;
        }
        if (null !== $this->latestKernelVersion) {
            $res['LatestKernelVersion'] = $this->latestKernelVersion;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->readonlyInstanceSQLDelayedTime) {
            $res['ReadonlyInstanceSQLDelayedTime'] = $this->readonlyInstanceSQLDelayedTime;
        }
        if (null !== $this->securityIPMode) {
            $res['SecurityIPMode'] = $this->securityIPMode;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->dispenseMode) {
            $res['DispenseMode'] = $this->dispenseMode;
        }
        if (null !== $this->masterZone) {
            $res['MasterZone'] = $this->masterZone;
        }
        if (null !== $this->autoUpgradeMinorVersion) {
            $res['AutoUpgradeMinorVersion'] = $this->autoUpgradeMinorVersion;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->consoleVersion) {
            $res['ConsoleVersion'] = $this->consoleVersion;
        }
        if (null !== $this->multipleTempUpgrade) {
            $res['MultipleTempUpgrade'] = $this->multipleTempUpgrade;
        }
        if (null !== $this->originConfiguration) {
            $res['OriginConfiguration'] = $this->originConfiguration;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->superPermissionMode) {
            $res['SuperPermissionMode'] = $this->superPermissionMode;
        }
        if (null !== $this->slaveZones) {
            $res['SlaveZones'] = null !== $this->slaveZones ? $this->slaveZones->toMap() : null;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['Extra'] = null !== $this->extra ? $this->extra->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['DBInstanceDiskUsed'])) {
            $model->DBInstanceDiskUsed = $map['DBInstanceDiskUsed'];
        }
        if (isset($map['GuardDBInstanceName'])) {
            $model->guardDBInstanceName = $map['GuardDBInstanceName'];
        }
        if (isset($map['CanTempUpgrade'])) {
            $model->canTempUpgrade = $map['CanTempUpgrade'];
        }
        if (isset($map['TempUpgradeTimeStart'])) {
            $model->tempUpgradeTimeStart = $map['TempUpgradeTimeStart'];
        }
        if (isset($map['TempUpgradeTimeEnd'])) {
            $model->tempUpgradeTimeEnd = $map['TempUpgradeTimeEnd'];
        }
        if (isset($map['TempUpgradeRecoveryTime'])) {
            $model->tempUpgradeRecoveryTime = $map['TempUpgradeRecoveryTime'];
        }
        if (isset($map['TempUpgradeRecoveryClass'])) {
            $model->tempUpgradeRecoveryClass = $map['TempUpgradeRecoveryClass'];
        }
        if (isset($map['TempUpgradeRecoveryCpu'])) {
            $model->tempUpgradeRecoveryCpu = $map['TempUpgradeRecoveryCpu'];
        }
        if (isset($map['TempUpgradeRecoveryMemory'])) {
            $model->tempUpgradeRecoveryMemory = $map['TempUpgradeRecoveryMemory'];
        }
        if (isset($map['TempUpgradeRecoveryMaxIOPS'])) {
            $model->tempUpgradeRecoveryMaxIOPS = $map['TempUpgradeRecoveryMaxIOPS'];
        }
        if (isset($map['TempUpgradeRecoveryMaxConnections'])) {
            $model->tempUpgradeRecoveryMaxConnections = $map['TempUpgradeRecoveryMaxConnections'];
        }
        if (isset($map['InsId'])) {
            $model->insId = $map['InsId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['ReadDelayTime'])) {
            $model->readDelayTime = $map['ReadDelayTime'];
        }
        if (isset($map['DBMaxQuantity'])) {
            $model->DBMaxQuantity = $map['DBMaxQuantity'];
        }
        if (isset($map['AccountMaxQuantity'])) {
            $model->accountMaxQuantity = $map['AccountMaxQuantity'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['DBInstanceCPU'])) {
            $model->DBInstanceCPU = $map['DBInstanceCPU'];
        }
        if (isset($map['IncrementSourceDBInstanceId'])) {
            $model->incrementSourceDBInstanceId = $map['IncrementSourceDBInstanceId'];
        }
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['ReplicateId'])) {
            $model->replicateId = $map['ReplicateId'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['AdvancedFeatures'])) {
            $model->advancedFeatures = $map['AdvancedFeatures'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['SupportUpgradeAccountType'])) {
            $model->supportUpgradeAccountType = $map['SupportUpgradeAccountType'];
        }
        if (isset($map['SupportCreateSuperAccount'])) {
            $model->supportCreateSuperAccount = $map['SupportCreateSuperAccount'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['CurrentKernelVersion'])) {
            $model->currentKernelVersion = $map['CurrentKernelVersion'];
        }
        if (isset($map['LatestKernelVersion'])) {
            $model->latestKernelVersion = $map['LatestKernelVersion'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ReadonlyInstanceSQLDelayedTime'])) {
            $model->readonlyInstanceSQLDelayedTime = $map['ReadonlyInstanceSQLDelayedTime'];
        }
        if (isset($map['SecurityIPMode'])) {
            $model->securityIPMode = $map['SecurityIPMode'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['DispenseMode'])) {
            $model->dispenseMode = $map['DispenseMode'];
        }
        if (isset($map['MasterZone'])) {
            $model->masterZone = $map['MasterZone'];
        }
        if (isset($map['AutoUpgradeMinorVersion'])) {
            $model->autoUpgradeMinorVersion = $map['AutoUpgradeMinorVersion'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['ConsoleVersion'])) {
            $model->consoleVersion = $map['ConsoleVersion'];
        }
        if (isset($map['MultipleTempUpgrade'])) {
            $model->multipleTempUpgrade = $map['MultipleTempUpgrade'];
        }
        if (isset($map['OriginConfiguration'])) {
            $model->originConfiguration = $map['OriginConfiguration'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['SuperPermissionMode'])) {
            $model->superPermissionMode = $map['SuperPermissionMode'];
        }
        if (isset($map['SlaveZones'])) {
            $model->slaveZones = slaveZones::fromMap($map['SlaveZones']);
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }
        if (isset($map['Extra'])) {
            $model->extra = extra::fromMap($map['Extra']);
        }

        return $model;
    }
}
