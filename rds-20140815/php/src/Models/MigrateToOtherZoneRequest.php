<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class MigrateToOtherZoneRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'VPCId' => 'VPCId',
        'zoneId' => 'ZoneId',
        'ownerAccount' => 'OwnerAccount',
        'effectiveTime' => 'EffectiveTime',
        'VSwitchId' => 'VSwitchId',
        'category' => 'Category',
        'zoneIdSlave1' => 'ZoneIdSlave1',
        'zoneIdSlave2' => 'ZoneIdSlave2',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['VPCId'] = $this->VPCId;
        $res['ZoneId'] = $this->zoneId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['EffectiveTime'] = $this->effectiveTime;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['Category'] = $this->category;
        $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
        $res['ZoneIdSlave2'] = $this->zoneIdSlave2;
        return $res;
    }
    /**
     * @param array $map
     * @return MigrateToOtherZoneRequest
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
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['EffectiveTime'])){
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['ZoneIdSlave1'])){
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }
        if(isset($map['ZoneIdSlave2'])){
            $model->zoneIdSlave2 = $map['ZoneIdSlave2'];
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
     * @description vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

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
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description category
     * @var string
     */
    public $category;

    /**
     * @description zoneIdSlave1
     * @var string
     */
    public $zoneIdSlave1;

    /**
     * @description zoneIdSlave2
     * @var string
     */
    public $zoneIdSlave2;

}
