<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyInstanceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBProxyInstanceType' => 'DBProxyInstanceType',
        'DBProxyInstanceNum' => 'DBProxyInstanceNum',
        'effectiveTime' => 'EffectiveTime',
        'effectiveSpecificTime' => 'EffectiveSpecificTime',
        'regionId' => 'RegionId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBProxyInstanceType', $this->DBProxyInstanceType, true);
        Model::validateRequired('DBProxyInstanceNum', $this->DBProxyInstanceNum, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        $res['EffectiveTime'] = $this->effectiveTime;
        $res['EffectiveSpecificTime'] = $this->effectiveSpecificTime;
        $res['RegionId'] = $this->regionId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBProxyInstanceRequest
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
        if(isset($map['DBProxyInstanceType'])){
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if(isset($map['DBProxyInstanceNum'])){
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if(isset($map['EffectiveTime'])){
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if(isset($map['EffectiveSpecificTime'])){
            $model->effectiveSpecificTime = $map['EffectiveSpecificTime'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
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
     * @description dbProxyInstanceType
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @description dbProxyInstanceNum
     * @var string
     */
    public $DBProxyInstanceNum;

    /**
     * @description effectiveTime
     * @var string
     */
    public $effectiveTime;

    /**
     * @description effectiveSpecificTime
     * @var string
     */
    public $effectiveSpecificTime;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

}
