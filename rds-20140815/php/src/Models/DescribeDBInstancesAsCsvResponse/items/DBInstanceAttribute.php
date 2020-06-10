<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvResponse\items;

use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
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
     * @description model.dbInstanceCreateTime
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
     * @description model.datacomefromInstanceName
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'DBInstanceId'                => 'DBInstanceId',
        'payType'                     => 'PayType',
        'DBInstanceClassType'         => 'DBInstanceClassType',
        'DBInstanceType'              => 'DBInstanceType',
        'regionId'                    => 'RegionId',
        'connectionString'            => 'ConnectionString',
        'port'                        => 'Port',
        'engine'                      => 'Engine',
        'engineVersion'               => 'EngineVersion',
        'DBInstanceClass'             => 'DBInstanceClass',
        'DBInstanceMemory'            => 'DBInstanceMemory',
        'DBInstanceStorage'           => 'DBInstanceStorage',
        'DBInstanceNetType'           => 'DBInstanceNetType',
        'DBInstanceStatus'            => 'DBInstanceStatus',
        'DBInstanceDescription'       => 'DBInstanceDescription',
        'lockMode'                    => 'LockMode',
        'lockReason'                  => 'LockReason',
        'readDelayTime'               => 'ReadDelayTime',
        'DBMaxQuantity'               => 'DBMaxQuantity',
        'accountMaxQuantity'          => 'AccountMaxQuantity',
        'creationTime'                => 'CreationTime',
        'expireTime'                  => 'ExpireTime',
        'maintainTime'                => 'MaintainTime',
        'availabilityValue'           => 'AvailabilityValue',
        'maxIOPS'                     => 'MaxIOPS',
        'maxConnections'              => 'MaxConnections',
        'masterInstanceId'            => 'MasterInstanceId',
        'DBInstanceCPU'               => 'DBInstanceCPU',
        'incrementSourceDBInstanceId' => 'IncrementSourceDBInstanceId',
        'guardDBInstanceId'           => 'GuardDBInstanceId',
        'tempDBInstanceId'            => 'TempDBInstanceId',
        'securityIPList'              => 'SecurityIPList',
        'zoneId'                      => 'ZoneId',
        'instanceNetworkType'         => 'InstanceNetworkType',
        'category'                    => 'Category',
        'accountType'                 => 'AccountType',
        'supportUpgradeAccountType'   => 'SupportUpgradeAccountType',
        'vpcId'                       => 'VpcId',
        'VSwitchId'                   => 'VSwitchId',
        'connectionMode'              => 'ConnectionMode',
        'tags'                        => 'Tags',
    ];

    public function validate()
    {
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
        Model::validateRequired('tempDBInstanceId', $this->tempDBInstanceId, true);
        Model::validateRequired('securityIPList', $this->securityIPList, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('accountType', $this->accountType, true);
        Model::validateRequired('supportUpgradeAccountType', $this->supportUpgradeAccountType, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('connectionMode', $this->connectionMode, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->supportUpgradeAccountType) {
            $res['SupportUpgradeAccountType'] = $this->supportUpgradeAccountType;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['SupportUpgradeAccountType'])) {
            $model->supportUpgradeAccountType = $map['SupportUpgradeAccountType'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
