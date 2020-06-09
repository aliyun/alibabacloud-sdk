<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyEndpointRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBProxyEndpointId' => 'DBProxyEndpointId',
        'configDBProxyFeatures' => 'ConfigDBProxyFeatures',
        'regionId' => 'RegionId',
        'readOnlyInstanceMaxDelayTime' => 'ReadOnlyInstanceMaxDelayTime',
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'readOnlyInstanceWeight' => 'ReadOnlyInstanceWeight',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBProxyEndpointId', $this->DBProxyEndpointId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        $res['ConfigDBProxyFeatures'] = $this->configDBProxyFeatures;
        $res['RegionId'] = $this->regionId;
        $res['ReadOnlyInstanceMaxDelayTime'] = $this->readOnlyInstanceMaxDelayTime;
        $res['ReadOnlyInstanceDistributionType'] = $this->readOnlyInstanceDistributionType;
        $res['ReadOnlyInstanceWeight'] = $this->readOnlyInstanceWeight;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBProxyEndpointRequest
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
        if(isset($map['DBProxyEndpointId'])){
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if(isset($map['ConfigDBProxyFeatures'])){
            $model->configDBProxyFeatures = $map['ConfigDBProxyFeatures'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ReadOnlyInstanceMaxDelayTime'])){
            $model->readOnlyInstanceMaxDelayTime = $map['ReadOnlyInstanceMaxDelayTime'];
        }
        if(isset($map['ReadOnlyInstanceDistributionType'])){
            $model->readOnlyInstanceDistributionType = $map['ReadOnlyInstanceDistributionType'];
        }
        if(isset($map['ReadOnlyInstanceWeight'])){
            $model->readOnlyInstanceWeight = $map['ReadOnlyInstanceWeight'];
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
     * @description dbProxyEndpointId
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description configDBProxyFeatures
     * @var string
     */
    public $configDBProxyFeatures;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description readOnlyInstanceMaxDelayTime
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @description readOnlyInstanceDistributionType
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @description readOnlyInstanceWeight
     * @var string
     */
    public $readOnlyInstanceWeight;

}
