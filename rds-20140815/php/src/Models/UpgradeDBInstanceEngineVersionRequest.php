<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceEngineVersionRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'DBInstanceId' => 'DBInstanceId',
        'engineVersion' => 'EngineVersion',
        'ownerAccount' => 'OwnerAccount',
        'effectiveTime' => 'EffectiveTime',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['EngineVersion'] = $this->engineVersion;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['EffectiveTime'] = $this->effectiveTime;
        return $res;
    }
    /**
     * @param array $map
     * @return UpgradeDBInstanceEngineVersionRequest
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
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['EffectiveTime'])){
            $model->effectiveTime = $map['EffectiveTime'];
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
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

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

}
