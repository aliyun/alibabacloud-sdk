<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBClusterId' => 'DBClusterId',
        'preferredBackupTime' => 'PreferredBackupTime',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'dataLevel1BackupRetentionPeriod' => 'DataLevel1BackupRetentionPeriod',
        'dataLevel2BackupRetentionPeriod' => 'DataLevel2BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['PreferredBackupTime'] = $this->preferredBackupTime;
        $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        $res['DataLevel1BackupRetentionPeriod'] = $this->dataLevel1BackupRetentionPeriod;
        $res['DataLevel2BackupRetentionPeriod'] = $this->dataLevel2BackupRetentionPeriod;
        $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyBackupPolicyRequest
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
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['PreferredBackupTime'])){
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if(isset($map['PreferredBackupPeriod'])){
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if(isset($map['DataLevel1BackupRetentionPeriod'])){
            $model->dataLevel1BackupRetentionPeriod = $map['DataLevel1BackupRetentionPeriod'];
        }
        if(isset($map['DataLevel2BackupRetentionPeriod'])){
            $model->dataLevel2BackupRetentionPeriod = $map['DataLevel2BackupRetentionPeriod'];
        }
        if(isset($map['BackupRetentionPolicyOnClusterDeletion'])){
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
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
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description preferredBackupTime
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description preferredBackupPeriod
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description dataLevel1BackupRetentionPeriod
     * @var string
     */
    public $dataLevel1BackupRetentionPeriod;

    /**
     * @description dataLevel2BackupRetentionPeriod
     * @var string
     */
    public $dataLevel2BackupRetentionPeriod;

    /**
     * @description backupRetentionPolicyOnClusterDeletion
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

}
