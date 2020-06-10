<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description dbClusterId
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description preferredBackupTime
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description preferredBackupPeriod
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description dataLevel1BackupRetentionPeriod
     *
     * @var string
     */
    public $dataLevel1BackupRetentionPeriod;

    /**
     * @description dataLevel2BackupRetentionPeriod
     *
     * @var string
     */
    public $dataLevel2BackupRetentionPeriod;

    /**
     * @description backupRetentionPolicyOnClusterDeletion
     *
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;
    protected $_name = [
        'accessKeyId'                            => 'AccessKeyId',
        'ownerId'                                => 'OwnerId',
        'resourceOwnerAccount'                   => 'ResourceOwnerAccount',
        'resourceOwnerId'                        => 'ResourceOwnerId',
        'ownerAccount'                           => 'OwnerAccount',
        'DBClusterId'                            => 'DBClusterId',
        'preferredBackupTime'                    => 'PreferredBackupTime',
        'preferredBackupPeriod'                  => 'PreferredBackupPeriod',
        'dataLevel1BackupRetentionPeriod'        => 'DataLevel1BackupRetentionPeriod',
        'dataLevel2BackupRetentionPeriod'        => 'DataLevel2BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
    ];

    public function validate()
    {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->dataLevel1BackupRetentionPeriod) {
            $res['DataLevel1BackupRetentionPeriod'] = $this->dataLevel1BackupRetentionPeriod;
        }
        if (null !== $this->dataLevel2BackupRetentionPeriod) {
            $res['DataLevel2BackupRetentionPeriod'] = $this->dataLevel2BackupRetentionPeriod;
        }
        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['DataLevel1BackupRetentionPeriod'])) {
            $model->dataLevel1BackupRetentionPeriod = $map['DataLevel1BackupRetentionPeriod'];
        }
        if (isset($map['DataLevel2BackupRetentionPeriod'])) {
            $model->dataLevel2BackupRetentionPeriod = $map['DataLevel2BackupRetentionPeriod'];
        }
        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }

        return $model;
    }
}
