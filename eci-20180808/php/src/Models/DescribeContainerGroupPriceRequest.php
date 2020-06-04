<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupPriceRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'regionId' => 'RegionId',
        'cpu' => 'Cpu',
        'memory' => 'Memory',
        'instanceType' => 'InstanceType',
        'spotStrategy' => 'SpotStrategy',
        'zoneId' => 'ZoneId',
        'spotPriceLimit' => 'SpotPriceLimit',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['RegionId'] = $this->regionId;
        $res['Cpu'] = $this->cpu;
        $res['Memory'] = $this->memory;
        $res['InstanceType'] = $this->instanceType;
        $res['SpotStrategy'] = $this->spotStrategy;
        $res['ZoneId'] = $this->zoneId;
        $res['SpotPriceLimit'] = $this->spotPriceLimit;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeContainerGroupPriceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['Cpu'])){
            $model->cpu = $map['Cpu'];
        }
        if(isset($map['Memory'])){
            $model->memory = $map['Memory'];
        }
        if(isset($map['InstanceType'])){
            $model->instanceType = $map['InstanceType'];
        }
        if(isset($map['SpotStrategy'])){
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['SpotPriceLimit'])){
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        return $model;
    }
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
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description cpu
     * @var float
     */
    public $cpu;

    /**
     * @description memory
     * @var float
     */
    public $memory;

    /**
     * @description instanceType
     * @var string
     */
    public $instanceType;

    /**
     * @description spotStrategy
     * @var string
     */
    public $spotStrategy;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description spotPriceLimit
     * @var float
     */
    public $spotPriceLimit;

}
