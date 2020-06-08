<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceTDERequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'TDEStatus' => 'TDEStatus',
        'DBName' => 'DBName',
        'ownerAccount' => 'OwnerAccount',
        'encryptionKey' => 'EncryptionKey',
        'roleArn' => 'RoleArn',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('TDEStatus', $this->TDEStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['TDEStatus'] = $this->TDEStatus;
        $res['DBName'] = $this->DBName;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['EncryptionKey'] = $this->encryptionKey;
        $res['RoleArn'] = $this->roleArn;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBInstanceTDERequest
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
        if(isset($map['TDEStatus'])){
            $model->TDEStatus = $map['TDEStatus'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['EncryptionKey'])){
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if(isset($map['RoleArn'])){
            $model->roleArn = $map['RoleArn'];
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
     * @description tdeStatus
     * @var string
     */
    public $TDEStatus;

    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description encryptionKey
     * @var string
     */
    public $encryptionKey;

    /**
     * @description roleARN
     * @var string
     */
    public $roleArn;

}
