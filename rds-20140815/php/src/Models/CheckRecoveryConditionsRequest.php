<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckRecoveryConditionsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'backupId' => 'BackupId',
        'backupFile' => 'BackupFile',
        'restoreTime' => 'RestoreTime',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['BackupId'] = $this->backupId;
        $res['BackupFile'] = $this->backupFile;
        $res['RestoreTime'] = $this->restoreTime;
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return CheckRecoveryConditionsRequest
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
        if(isset($map['BackupId'])){
            $model->backupId = $map['BackupId'];
        }
        if(isset($map['BackupFile'])){
            $model->backupFile = $map['BackupFile'];
        }
        if(isset($map['RestoreTime'])){
            $model->restoreTime = $map['RestoreTime'];
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
     * @description dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description backupId
     * @var string
     */
    public $backupId;

    /**
     * @description backupFile
     * @var string
     */
    public $backupFile;

    /**
     * @description restoreTime
     * @var string
     */
    public $restoreTime;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

}
