<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class StartDBInstanceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'DBInstanceId' => 'DBInstanceId',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'targetDedicatedHostIdForSlave' => 'TargetDedicatedHostIdForSlave',
        'targetDedicatedHostIdForLog' => 'TargetDedicatedHostIdForLog',
        'effectiveTime' => 'EffectiveTime',
        'specifiedTime' => 'SpecifiedTime',
        'targetDBInstanceClass' => 'TargetDBInstanceClass',
        'engineVersion' => 'EngineVersion',
        'DBInstanceTransType' => 'DBInstanceTransType',
        'storage' => 'Storage',
        'VSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        $res['TargetDedicatedHostIdForSlave'] = $this->targetDedicatedHostIdForSlave;
        $res['TargetDedicatedHostIdForLog'] = $this->targetDedicatedHostIdForLog;
        $res['EffectiveTime'] = $this->effectiveTime;
        $res['SpecifiedTime'] = $this->specifiedTime;
        $res['TargetDBInstanceClass'] = $this->targetDBInstanceClass;
        $res['EngineVersion'] = $this->engineVersion;
        $res['DBInstanceTransType'] = $this->DBInstanceTransType;
        $res['Storage'] = $this->storage;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['ZoneId'] = $this->zoneId;
        return $res;
    }
    /**
     * @param array $map
     * @return StartDBInstanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['TargetDedicatedHostIdForMaster'])){
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }
        if(isset($map['TargetDedicatedHostIdForSlave'])){
            $model->targetDedicatedHostIdForSlave = $map['TargetDedicatedHostIdForSlave'];
        }
        if(isset($map['TargetDedicatedHostIdForLog'])){
            $model->targetDedicatedHostIdForLog = $map['TargetDedicatedHostIdForLog'];
        }
        if(isset($map['EffectiveTime'])){
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if(isset($map['SpecifiedTime'])){
            $model->specifiedTime = $map['SpecifiedTime'];
        }
        if(isset($map['TargetDBInstanceClass'])){
            $model->targetDBInstanceClass = $map['TargetDBInstanceClass'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['DBInstanceTransType'])){
            $model->DBInstanceTransType = $map['DBInstanceTransType'];
        }
        if(isset($map['Storage'])){
            $model->storage = $map['Storage'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description targetDedicatedHostIdForMaster
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @description targetDedicatedHostIdForSlave
     * @var string
     */
    public $targetDedicatedHostIdForSlave;

    /**
     * @description targetDedicatedHostIdForLog
     * @var string
     */
    public $targetDedicatedHostIdForLog;

    /**
     * @description effectiveTime
     * @var string
     */
    public $effectiveTime;

    /**
     * @description specifiedTime
     * @var string
     */
    public $specifiedTime;

    /**
     * @description targetDBInstanceClass
     * @var string
     */
    public $targetDBInstanceClass;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description dbInstanceTransType
     * @var integer
     */
    public $DBInstanceTransType;

    /**
     * @description storage
     * @var integer
     */
    public $storage;

    /**
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

}
