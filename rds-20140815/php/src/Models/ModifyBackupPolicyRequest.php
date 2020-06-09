<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'backupPolicyMode' => 'BackupPolicyMode',
        'preferredBackupTime' => 'PreferredBackupTime',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupLog' => 'BackupLog',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'ownerAccount' => 'OwnerAccount',
        'enableBackupLog' => 'EnableBackupLog',
        'localLogRetentionHours' => 'LocalLogRetentionHours',
        'localLogRetentionSpace' => 'LocalLogRetentionSpace',
        'highSpaceUsageProtection' => 'HighSpaceUsageProtection',
        'logBackupFrequency' => 'LogBackupFrequency',
        'compressType' => 'CompressType',
        'archiveBackupRetentionPeriod' => 'ArchiveBackupRetentionPeriod',
        'archiveBackupKeepPolicy' => 'ArchiveBackupKeepPolicy',
        'archiveBackupKeepCount' => 'ArchiveBackupKeepCount',
        'releasedKeepPolicy' => 'ReleasedKeepPolicy',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
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
        $res['BackupPolicyMode'] = $this->backupPolicyMode;
        $res['PreferredBackupTime'] = $this->preferredBackupTime;
        $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        $res['BackupLog'] = $this->backupLog;
        $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['EnableBackupLog'] = $this->enableBackupLog;
        $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        $res['LogBackupFrequency'] = $this->logBackupFrequency;
        $res['CompressType'] = $this->compressType;
        $res['ArchiveBackupRetentionPeriod'] = $this->archiveBackupRetentionPeriod;
        $res['ArchiveBackupKeepPolicy'] = $this->archiveBackupKeepPolicy;
        $res['ArchiveBackupKeepCount'] = $this->archiveBackupKeepCount;
        $res['ReleasedKeepPolicy'] = $this->releasedKeepPolicy;
        $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
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
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['BackupPolicyMode'])){
            $model->backupPolicyMode = $map['BackupPolicyMode'];
        }
        if(isset($map['PreferredBackupTime'])){
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if(isset($map['PreferredBackupPeriod'])){
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if(isset($map['BackupRetentionPeriod'])){
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if(isset($map['BackupLog'])){
            $model->backupLog = $map['BackupLog'];
        }
        if(isset($map['LogBackupRetentionPeriod'])){
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['EnableBackupLog'])){
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if(isset($map['LocalLogRetentionHours'])){
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if(isset($map['LocalLogRetentionSpace'])){
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if(isset($map['HighSpaceUsageProtection'])){
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if(isset($map['LogBackupFrequency'])){
            $model->logBackupFrequency = $map['LogBackupFrequency'];
        }
        if(isset($map['CompressType'])){
            $model->compressType = $map['CompressType'];
        }
        if(isset($map['ArchiveBackupRetentionPeriod'])){
            $model->archiveBackupRetentionPeriod = $map['ArchiveBackupRetentionPeriod'];
        }
        if(isset($map['ArchiveBackupKeepPolicy'])){
            $model->archiveBackupKeepPolicy = $map['ArchiveBackupKeepPolicy'];
        }
        if(isset($map['ArchiveBackupKeepCount'])){
            $model->archiveBackupKeepCount = $map['ArchiveBackupKeepCount'];
        }
        if(isset($map['ReleasedKeepPolicy'])){
            $model->releasedKeepPolicy = $map['ReleasedKeepPolicy'];
        }
        if(isset($map['LogBackupLocalRetentionNumber'])){
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
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
     * @description backupPolicyMode
     * @var string
     */
    public $backupPolicyMode;

    /**
     * @description backupTime
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description backupPeriod
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description backupRetentionPeriod
     * @var string
     */
    public $backupRetentionPeriod;

    /**
     * @description backupLog
     * @var string
     */
    public $backupLog;

    /**
     * @description logBackupRetentionPeriod
     * @var string
     */
    public $logBackupRetentionPeriod;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description enableBackupLog
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description logBackupLocalRetentionPeriod
     * @var string
     */
    public $localLogRetentionHours;

    /**
     * @description logBackupLocalRetentionSpace
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description forceCleanOnHighSpaceUsage
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description logBackupFrequency
     * @var string
     */
    public $logBackupFrequency;

    /**
     * @description compressType
     * @var string
     */
    public $compressType;

    /**
     * @description archiveBackupRetentionPeriod
     * @var string
     */
    public $archiveBackupRetentionPeriod;

    /**
     * @description archiveBackupKeepPolicy
     * @var string
     */
    public $archiveBackupKeepPolicy;

    /**
     * @description archiveBackupKeepCount
     * @var string
     */
    public $archiveBackupKeepCount;

    /**
     * @description releasedKeepPolicy
     * @var string
     */
    public $releasedKeepPolicy;

    /**
     * @description logBackupLocalRetentionNumber
     * @var integer
     */
    public $logBackupLocalRetentionNumber;

}
