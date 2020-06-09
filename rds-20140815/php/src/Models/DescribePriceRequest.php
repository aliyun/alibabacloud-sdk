<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'ownerAccount' => 'OwnerAccount',
        'commodityCode' => 'CommodityCode',
        'regionId' => 'RegionId',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'payType' => 'PayType',
        'zoneId' => 'ZoneId',
        'usedTime' => 'UsedTime',
        'timeType' => 'TimeType',
        'quantity' => 'Quantity',
        'instanceUsedType' => 'InstanceUsedType',
        'orderType' => 'OrderType',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'DBInstanceId' => 'DBInstanceId',
    ];
    public function validate() {
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceStorage', $this->DBInstanceStorage, true);
        Model::validateRequired('quantity', $this->quantity, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['CommodityCode'] = $this->commodityCode;
        $res['RegionId'] = $this->regionId;
        $res['Engine'] = $this->engine;
        $res['EngineVersion'] = $this->engineVersion;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        $res['PayType'] = $this->payType;
        $res['ZoneId'] = $this->zoneId;
        $res['UsedTime'] = $this->usedTime;
        $res['TimeType'] = $this->timeType;
        $res['Quantity'] = $this->quantity;
        $res['InstanceUsedType'] = $this->instanceUsedType;
        $res['OrderType'] = $this->orderType;
        $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        $res['DBInstanceId'] = $this->DBInstanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePriceRequest
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
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['CommodityCode'])){
            $model->commodityCode = $map['CommodityCode'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
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
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['UsedTime'])){
            $model->usedTime = $map['UsedTime'];
        }
        if(isset($map['TimeType'])){
            $model->timeType = $map['TimeType'];
        }
        if(isset($map['Quantity'])){
            $model->quantity = $map['Quantity'];
        }
        if(isset($map['InstanceUsedType'])){
            $model->instanceUsedType = $map['InstanceUsedType'];
        }
        if(isset($map['OrderType'])){
            $model->orderType = $map['OrderType'];
        }
        if(isset($map['DBInstanceStorageType'])){
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
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
     * @description token
     * @var string
     */
    public $clientToken;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description commodity
     * @var string
     */
    public $commodityCode;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

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
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description usedTime
     * @var integer
     */
    public $usedTime;

    /**
     * @description timeType
     * @var string
     */
    public $timeType;

    /**
     * @description quantity
     * @var integer
     */
    public $quantity;

    /**
     * @description dbInstanceUsedType
     * @var integer
     */
    public $instanceUsedType;

    /**
     * @description orderType
     * @var string
     */
    public $orderType;

    /**
     * @description dbInstanceStorageType
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

}
