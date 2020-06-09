<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponse\items;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponse\items\DBInstance\readOnlyDBInstanceIds;

class DBInstance extends Model {
    protected $_name = [
        'insId' => 'InsId',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'payType' => 'PayType',
        'DBInstanceType' => 'DBInstanceType',
        'regionId' => 'RegionId',
        'expireTime' => 'ExpireTime',
        'destroyTime' => 'DestroyTime',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'engine' => 'Engine',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'connectionMode' => 'ConnectionMode',
        'lockMode' => 'LockMode',
        'category' => 'Category',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'DBInstanceClass' => 'DBInstanceClass',
        'instanceNetworkType' => 'InstanceNetworkType',
        'vpcCloudInstanceId' => 'VpcCloudInstanceId',
        'lockReason' => 'LockReason',
        'zoneId' => 'ZoneId',
        'mutriORsignle' => 'MutriORsignle',
        'createTime' => 'CreateTime',
        'engineVersion' => 'EngineVersion',
        'guardDBInstanceId' => 'GuardDBInstanceId',
        'tempDBInstanceId' => 'TempDBInstanceId',
        'masterInstanceId' => 'MasterInstanceId',
        'vpcId' => 'VpcId',
        'VSwitchId' => 'VSwitchId',
        'replicateId' => 'ReplicateId',
        'resourceGroupId' => 'ResourceGroupId',
        'readOnlyDBInstanceIds' => 'ReadOnlyDBInstanceIds',
    ];
    public function validate() {
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
        Model::validateRequired('readOnlyDBInstanceIds', $this->readOnlyDBInstanceIds, true);
    }
    public function toMap() {
        $res = [];
        $res['InsId'] = $this->insId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        $res['PayType'] = $this->payType;
        $res['DBInstanceType'] = $this->DBInstanceType;
        $res['RegionId'] = $this->regionId;
        $res['ExpireTime'] = $this->expireTime;
        $res['DestroyTime'] = $this->destroyTime;
        $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        $res['Engine'] = $this->engine;
        $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        $res['ConnectionMode'] = $this->connectionMode;
        $res['LockMode'] = $this->lockMode;
        $res['Category'] = $this->category;
        $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['InstanceNetworkType'] = $this->instanceNetworkType;
        $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        $res['LockReason'] = $this->lockReason;
        $res['ZoneId'] = $this->zoneId;
        $res['MutriORsignle'] = $this->mutriORsignle;
        $res['CreateTime'] = $this->createTime;
        $res['EngineVersion'] = $this->engineVersion;
        $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        $res['MasterInstanceId'] = $this->masterInstanceId;
        $res['VpcId'] = $this->vpcId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['ReplicateId'] = $this->replicateId;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstance
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InsId'])){
            $model->insId = $map['InsId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['DBInstanceDescription'])){
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['DBInstanceType'])){
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ExpireTime'])){
            $model->expireTime = $map['ExpireTime'];
        }
        if(isset($map['DestroyTime'])){
            $model->destroyTime = $map['DestroyTime'];
        }
        if(isset($map['DBInstanceStatus'])){
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['DBInstanceNetType'])){
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if(isset($map['ConnectionMode'])){
            $model->connectionMode = $map['ConnectionMode'];
        }
        if(isset($map['LockMode'])){
            $model->lockMode = $map['LockMode'];
        }
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['DBInstanceStorageType'])){
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['InstanceNetworkType'])){
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if(isset($map['VpcCloudInstanceId'])){
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if(isset($map['LockReason'])){
            $model->lockReason = $map['LockReason'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['MutriORsignle'])){
            $model->mutriORsignle = $map['MutriORsignle'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['GuardDBInstanceId'])){
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if(isset($map['TempDBInstanceId'])){
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if(isset($map['MasterInstanceId'])){
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if(isset($map['VpcId'])){
            $model->vpcId = $map['VpcId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['ReplicateId'])){
            $model->replicateId = $map['ReplicateId'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if(isset($map['ReadOnlyDBInstanceIds'])){
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }
        return $model;
    }
    /**
     * @description model.dbInstanceId
     * @var integer
     */
    public $insId;

    /**
     * @description model.dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description model.dbInstanceDescription
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description model.dbInstancePayType
     * @var string
     */
    public $payType;

    /**
     * @description model.dbInstanceUsedType
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description model.region
     * @var string
     */
    public $regionId;

    /**
     * @description model.dbInstanceExpireTime
     * @var string
     */
    public $expireTime;

    /**
     * @description model.destroyTime
     * @var string
     */
    public $destroyTime;

    /**
     * @description model.dbInstanceStatusDesc
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description model.engine
     * @var string
     */
    public $engine;

    /**
     * @description model.dbInstanceNetType
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description model.connectionMode
     * @var string
     */
    public $connectionMode;

    /**
     * @description model.lockMode
     * @var string
     */
    public $lockMode;

    /**
     * @description model.category
     * @var string
     */
    public $category;

    /**
     * @description model.dbInstanceStorageType
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description model.dbInstanceClass
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description model.instanceNetworkType
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description model.vpcCloudInstanceId
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description model.lockReason
     * @var string
     */
    public $lockReason;

    /**
     * @description model.availableArea
     * @var string
     */
    public $zoneId;

    /**
     * @description mutriORsignle
     * @var bool
     */
    public $mutriORsignle;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description model.engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description model.guardDBInstanceName
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description model.childDBInstanceName
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @description model.masterDBInstanceName
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description model.vpcId
     * @var string
     */
    public $vpcId;

    /**
     * @description model.vSwitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description model.replacateId
     * @var string
     */
    public $replicateId;

    /**
     * @description model.resourceGroupId
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description readOnlyDBInstanceNameList
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

}
