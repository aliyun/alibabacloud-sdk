<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateOnlineDatabaseTaskRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'DBInstanceId' => 'DBInstanceId',
        'DBName' => 'DBName',
        'migrateTaskId' => 'MigrateTaskId',
        'checkDBMode' => 'CheckDBMode',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('migrateTaskId', $this->migrateTaskId, true);
        Model::validateRequired('checkDBMode', $this->checkDBMode, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBName'] = $this->DBName;
        $res['MigrateTaskId'] = $this->migrateTaskId;
        $res['CheckDBMode'] = $this->checkDBMode;
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOnlineDatabaseTaskRequest
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
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['MigrateTaskId'])){
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        if(isset($map['CheckDBMode'])){
            $model->checkDBMode = $map['CheckDBMode'];
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
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description migrateTaskId
     * @var string
     */
    public $migrateTaskId;

    /**
     * @description dbCheckModel
     * @var string
     */
    public $checkDBMode;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

}
