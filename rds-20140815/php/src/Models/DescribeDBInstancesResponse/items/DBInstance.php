<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponse\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponse\items\DBInstance\readOnlyDBInstanceIds;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
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
     * @description model.dbInstanceDescription
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description model.dbInstancePayType
     *
     * @var string
     */
    public $payType;

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
     * @description model.dbInstanceExpireTime
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description model.destroyTime
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @description model.dbInstanceStatusDesc
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description model.engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description model.dbInstanceNetType
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description model.connectionMode
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description model.lockMode
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description model.category
     *
     * @var string
     */
    public $category;

    /**
     * @description model.dbInstanceStorageType
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description model.dbInstanceClass
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description model.instanceNetworkType
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description model.vpcCloudInstanceId
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description model.lockReason
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description model.availableArea
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description mutriORsignle
     *
     * @var bool
     */
    public $mutriORsignle;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description model.engineVersion
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description model.guardDBInstanceName
     *
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description model.childDBInstanceName
     *
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @description model.masterDBInstanceName
     *
     * @var string
     */
    public $masterInstanceId;

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
     * @description model.replacateId
     *
     * @var string
     */
    public $replicateId;

    /**
     * @description model.resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description model.autoUpgradeMinorVersion
     *
     * @var string
     */
    public $autoUpgradeMinorVersion;

    /**
     * @description dedicatedHostGroupId
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description dedicatedHostIdForMaster
     *
     * @var string
     */
    public $dedicatedHostIdForMaster;

    /**
     * @description dedicatedHostIdForSlave
     *
     * @var string
     */
    public $dedicatedHostIdForSlave;

    /**
     * @description dedicatedHostIdForLog
     *
     * @var string
     */
    public $dedicatedHostIdForLog;

    /**
     * @description dedicatedHostNameForMaster
     *
     * @var string
     */
    public $dedicatedHostNameForMaster;

    /**
     * @description dedicatedHostNameForSlave
     *
     * @var string
     */
    public $dedicatedHostNameForSlave;

    /**
     * @description dedicatedHostNameForLog
     *
     * @var string
     */
    public $dedicatedHostNameForLog;

    /**
     * @description dedicatedHostZoneIdForMaster
     *
     * @var string
     */
    public $dedicatedHostZoneIdForMaster;

    /**
     * @description dedicatedHostZoneIdForSlave
     *
     * @var string
     */
    public $dedicatedHostZoneIdForSlave;

    /**
     * @description dedicatedHostZoneIdForLog
     *
     * @var string
     */
    public $dedicatedHostZoneIdForLog;

    /**
     * @description readOnlyDBInstanceNameList
     *
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;
    protected $_name = [
        'insId'                        => 'InsId',
        'DBInstanceId'                 => 'DBInstanceId',
        'DBInstanceDescription'        => 'DBInstanceDescription',
        'payType'                      => 'PayType',
        'DBInstanceType'               => 'DBInstanceType',
        'regionId'                     => 'RegionId',
        'expireTime'                   => 'ExpireTime',
        'destroyTime'                  => 'DestroyTime',
        'DBInstanceStatus'             => 'DBInstanceStatus',
        'engine'                       => 'Engine',
        'DBInstanceNetType'            => 'DBInstanceNetType',
        'connectionMode'               => 'ConnectionMode',
        'lockMode'                     => 'LockMode',
        'category'                     => 'Category',
        'DBInstanceStorageType'        => 'DBInstanceStorageType',
        'DBInstanceClass'              => 'DBInstanceClass',
        'instanceNetworkType'          => 'InstanceNetworkType',
        'vpcCloudInstanceId'           => 'VpcCloudInstanceId',
        'lockReason'                   => 'LockReason',
        'zoneId'                       => 'ZoneId',
        'mutriORsignle'                => 'MutriORsignle',
        'createTime'                   => 'CreateTime',
        'engineVersion'                => 'EngineVersion',
        'guardDBInstanceId'            => 'GuardDBInstanceId',
        'tempDBInstanceId'             => 'TempDBInstanceId',
        'masterInstanceId'             => 'MasterInstanceId',
        'vpcId'                        => 'VpcId',
        'VSwitchId'                    => 'VSwitchId',
        'replicateId'                  => 'ReplicateId',
        'resourceGroupId'              => 'ResourceGroupId',
        'autoUpgradeMinorVersion'      => 'AutoUpgradeMinorVersion',
        'dedicatedHostGroupId'         => 'DedicatedHostGroupId',
        'dedicatedHostIdForMaster'     => 'DedicatedHostIdForMaster',
        'dedicatedHostIdForSlave'      => 'DedicatedHostIdForSlave',
        'dedicatedHostIdForLog'        => 'DedicatedHostIdForLog',
        'dedicatedHostNameForMaster'   => 'DedicatedHostNameForMaster',
        'dedicatedHostNameForSlave'    => 'DedicatedHostNameForSlave',
        'dedicatedHostNameForLog'      => 'DedicatedHostNameForLog',
        'dedicatedHostZoneIdForMaster' => 'DedicatedHostZoneIdForMaster',
        'dedicatedHostZoneIdForSlave'  => 'DedicatedHostZoneIdForSlave',
        'dedicatedHostZoneIdForLog'    => 'DedicatedHostZoneIdForLog',
        'readOnlyDBInstanceIds'        => 'ReadOnlyDBInstanceIds',
    ];

    public function validate()
    {
        Model::validateRequired('insId', $this->insId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('DBInstanceType', $this->DBInstanceType, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('destroyTime', $this->destroyTime, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('DBInstanceNetType', $this->DBInstanceNetType, true);
        Model::validateRequired('connectionMode', $this->connectionMode, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('DBInstanceStorageType', $this->DBInstanceStorageType, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('vpcCloudInstanceId', $this->vpcCloudInstanceId, true);
        Model::validateRequired('lockReason', $this->lockReason, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('mutriORsignle', $this->mutriORsignle, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('guardDBInstanceId', $this->guardDBInstanceId, true);
        Model::validateRequired('tempDBInstanceId', $this->tempDBInstanceId, true);
        Model::validateRequired('masterInstanceId', $this->masterInstanceId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('replicateId', $this->replicateId, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('autoUpgradeMinorVersion', $this->autoUpgradeMinorVersion, true);
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('dedicatedHostIdForMaster', $this->dedicatedHostIdForMaster, true);
        Model::validateRequired('dedicatedHostIdForSlave', $this->dedicatedHostIdForSlave, true);
        Model::validateRequired('dedicatedHostIdForLog', $this->dedicatedHostIdForLog, true);
        Model::validateRequired('dedicatedHostNameForMaster', $this->dedicatedHostNameForMaster, true);
        Model::validateRequired('dedicatedHostNameForSlave', $this->dedicatedHostNameForSlave, true);
        Model::validateRequired('dedicatedHostNameForLog', $this->dedicatedHostNameForLog, true);
        Model::validateRequired('dedicatedHostZoneIdForMaster', $this->dedicatedHostZoneIdForMaster, true);
        Model::validateRequired('dedicatedHostZoneIdForSlave', $this->dedicatedHostZoneIdForSlave, true);
        Model::validateRequired('dedicatedHostZoneIdForLog', $this->dedicatedHostZoneIdForLog, true);
        Model::validateRequired('readOnlyDBInstanceIds', $this->readOnlyDBInstanceIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insId) {
            $res['InsId'] = $this->insId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->mutriORsignle) {
            $res['MutriORsignle'] = $this->mutriORsignle;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->replicateId) {
            $res['ReplicateId'] = $this->replicateId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->autoUpgradeMinorVersion) {
            $res['AutoUpgradeMinorVersion'] = $this->autoUpgradeMinorVersion;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostIdForMaster) {
            $res['DedicatedHostIdForMaster'] = $this->dedicatedHostIdForMaster;
        }
        if (null !== $this->dedicatedHostIdForSlave) {
            $res['DedicatedHostIdForSlave'] = $this->dedicatedHostIdForSlave;
        }
        if (null !== $this->dedicatedHostIdForLog) {
            $res['DedicatedHostIdForLog'] = $this->dedicatedHostIdForLog;
        }
        if (null !== $this->dedicatedHostNameForMaster) {
            $res['DedicatedHostNameForMaster'] = $this->dedicatedHostNameForMaster;
        }
        if (null !== $this->dedicatedHostNameForSlave) {
            $res['DedicatedHostNameForSlave'] = $this->dedicatedHostNameForSlave;
        }
        if (null !== $this->dedicatedHostNameForLog) {
            $res['DedicatedHostNameForLog'] = $this->dedicatedHostNameForLog;
        }
        if (null !== $this->dedicatedHostZoneIdForMaster) {
            $res['DedicatedHostZoneIdForMaster'] = $this->dedicatedHostZoneIdForMaster;
        }
        if (null !== $this->dedicatedHostZoneIdForSlave) {
            $res['DedicatedHostZoneIdForSlave'] = $this->dedicatedHostZoneIdForSlave;
        }
        if (null !== $this->dedicatedHostZoneIdForLog) {
            $res['DedicatedHostZoneIdForLog'] = $this->dedicatedHostZoneIdForLog;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsId'])) {
            $model->insId = $map['InsId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['MutriORsignle'])) {
            $model->mutriORsignle = $map['MutriORsignle'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ReplicateId'])) {
            $model->replicateId = $map['ReplicateId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AutoUpgradeMinorVersion'])) {
            $model->autoUpgradeMinorVersion = $map['AutoUpgradeMinorVersion'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostIdForMaster'])) {
            $model->dedicatedHostIdForMaster = $map['DedicatedHostIdForMaster'];
        }
        if (isset($map['DedicatedHostIdForSlave'])) {
            $model->dedicatedHostIdForSlave = $map['DedicatedHostIdForSlave'];
        }
        if (isset($map['DedicatedHostIdForLog'])) {
            $model->dedicatedHostIdForLog = $map['DedicatedHostIdForLog'];
        }
        if (isset($map['DedicatedHostNameForMaster'])) {
            $model->dedicatedHostNameForMaster = $map['DedicatedHostNameForMaster'];
        }
        if (isset($map['DedicatedHostNameForSlave'])) {
            $model->dedicatedHostNameForSlave = $map['DedicatedHostNameForSlave'];
        }
        if (isset($map['DedicatedHostNameForLog'])) {
            $model->dedicatedHostNameForLog = $map['DedicatedHostNameForLog'];
        }
        if (isset($map['DedicatedHostZoneIdForMaster'])) {
            $model->dedicatedHostZoneIdForMaster = $map['DedicatedHostZoneIdForMaster'];
        }
        if (isset($map['DedicatedHostZoneIdForSlave'])) {
            $model->dedicatedHostZoneIdForSlave = $map['DedicatedHostZoneIdForSlave'];
        }
        if (isset($map['DedicatedHostZoneIdForLog'])) {
            $model->dedicatedHostZoneIdForLog = $map['DedicatedHostZoneIdForLog'];
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }

        return $model;
    }
}
