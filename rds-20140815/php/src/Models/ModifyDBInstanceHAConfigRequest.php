<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceHAConfigRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'syncMode' => 'SyncMode',
        'HAMode' => 'HAMode',
        'dbInstanceId' => 'DbInstanceId',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {
        Model::validateRequired('syncMode', $this->syncMode, true);
        Model::validateRequired('HAMode', $this->HAMode, true);
        Model::validateRequired('dbInstanceId', $this->dbInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['SyncMode'] = $this->syncMode;
        $res['HAMode'] = $this->HAMode;
        $res['DbInstanceId'] = $this->dbInstanceId;
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBInstanceHAConfigRequest
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
        if(isset($map['SyncMode'])){
            $model->syncMode = $map['SyncMode'];
        }
        if(isset($map['HAMode'])){
            $model->HAMode = $map['HAMode'];
        }
        if(isset($map['DbInstanceId'])){
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
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
     * @description syncMode
     * @var string
     */
    public $syncMode;

    /**
     * @description haMode
     * @var string
     */
    public $HAMode;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

}
