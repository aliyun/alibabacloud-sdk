<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSpecRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'payType' => 'PayType',
        'ownerAccount' => 'OwnerAccount',
        'effectiveTime' => 'EffectiveTime',
        'engineVersion' => 'EngineVersion',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'direction' => 'Direction',
        'sourceBiz' => 'SourceBiz',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'zoneId' => 'ZoneId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('payType', $this->payType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        $res['PayType'] = $this->payType;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['EffectiveTime'] = $this->effectiveTime;
        $res['EngineVersion'] = $this->engineVersion;
        $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        $res['Direction'] = $this->direction;
        $res['SourceBiz'] = $this->sourceBiz;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['ZoneId'] = $this->zoneId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBInstanceSpecRequest
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
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['DBInstanceStorage'])){
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['EffectiveTime'])){
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['DBInstanceStorageType'])){
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if(isset($map['Direction'])){
            $model->direction = $map['Direction'];
        }
        if(isset($map['SourceBiz'])){
            $model->sourceBiz = $map['SourceBiz'];
        }
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
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
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description dbInstanceClass
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description dbInstanceStorage
     * @var integer
     */
    public $DBInstanceStorage;

    /**
     * @description payType
     * @var string
     */
    public $payType;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description effectiveTime
     * @var string
     */
    public $effectiveTime;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description dbInstanceStorageType
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description direction
     * @var string
     */
    public $direction;

    /**
     * @description sourceBiz
     * @var string
     */
    public $sourceBiz;

    /**
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

}
