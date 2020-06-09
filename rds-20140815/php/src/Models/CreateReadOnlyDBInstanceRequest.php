<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateReadOnlyDBInstanceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'engineVersion' => 'EngineVersion',
        'payType' => 'PayType',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'instanceNetworkType' => 'InstanceNetworkType',
        'VPCId' => 'VPCId',
        'VSwitchId' => 'VSwitchId',
        'privateIpAddress' => 'PrivateIpAddress',
        'ownerAccount' => 'OwnerAccount',
        'resourceGroupId' => 'ResourceGroupId',
        'category' => 'Category',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceStorage', $this->DBInstanceStorage, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('payType', $this->payType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['RegionId'] = $this->regionId;
        $res['ZoneId'] = $this->zoneId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        $res['EngineVersion'] = $this->engineVersion;
        $res['PayType'] = $this->payType;
        $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        $res['InstanceNetworkType'] = $this->instanceNetworkType;
        $res['VPCId'] = $this->VPCId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['PrivateIpAddress'] = $this->privateIpAddress;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        $res['Category'] = $this->category;
        $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateReadOnlyDBInstanceRequest
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
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
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
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['DBInstanceDescription'])){
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if(isset($map['InstanceNetworkType'])){
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['PrivateIpAddress'])){
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['DBInstanceStorageType'])){
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if(isset($map['TargetDedicatedHostIdForMaster'])){
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
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
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

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
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description payType
     * @var string
     */
    public $payType;

    /**
     * @description dbInstanceDescription
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description instanceNetworkType
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description cloudInstanceIp
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description category
     * @var string
     */
    public $category;

    /**
     * @description dbInstanceStorageType
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description targetDedicatedHostIdForMaster
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

}
