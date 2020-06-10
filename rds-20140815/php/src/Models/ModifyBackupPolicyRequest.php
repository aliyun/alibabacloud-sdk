<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

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
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description backupPolicyMode
     *
     * @var string
     */
    public $backupPolicyMode;

    /**
     * @description backupTime
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description backupPeriod
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description backupRetentionPeriod
     *
     * @var string
     */
    public $backupRetentionPeriod;

    /**
     * @description backupLog
     *
     * @var string
     */
    public $backupLog;

    /**
     * @description logBackupRetentionPeriod
     *
     * @var string
     */
    public $logBackupRetentionPeriod;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description enableBackupLog
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description logBackupLocalRetentionPeriod
     *
     * @var string
     */
    public $localLogRetentionHours;

    /**
     * @description logBackupLocalRetentionSpace
     *
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description forceCleanOnHighSpaceUsage
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description logBackupFrequency
     *
     * @var string
     */
    public $logBackupFrequency;

    /**
     * @description compressType
     *
     * @var string
     */
    public $compressType;

    /**
     * @description archiveBackupRetentionPeriod
     *
     * @var string
     */
    public $archiveBackupRetentionPeriod;

    /**
     * @description archiveBackupKeepPolicy
     *
     * @var string
     */
    public $archiveBackupKeepPolicy;

    /**
     * @description archiveBackupKeepCount
     *
     * @var string
     */
    public $archiveBackupKeepCount;

    /**
     * @description releasedKeepPolicy
     *
     * @var string
     */
    public $releasedKeepPolicy;

    /**
     * @description logBackupLocalRetentionNumber
     *
     * @var int
     */
    public $logBackupLocalRetentionNumber;
    protected $_name = [
        'accessKeyId'                   => 'AccessKeyId',
        'ownerId'                       => 'OwnerId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'DBInstanceId'                  => 'DBInstanceId',
        'backupPolicyMode'              => 'BackupPolicyMode',
        'preferredBackupTime'           => 'PreferredBackupTime',
        'preferredBackupPeriod'         => 'PreferredBackupPeriod',
        'backupRetentionPeriod'         => 'BackupRetentionPeriod',
        'backupLog'                     => 'BackupLog',
        'logBackupRetentionPeriod'      => 'LogBackupRetentionPeriod',
        'ownerAccount'                  => 'OwnerAccount',
        'enableBackupLog'               => 'EnableBackupLog',
        'localLogRetentionHours'        => 'LocalLogRetentionHours',
        'localLogRetentionSpace'        => 'LocalLogRetentionSpace',
        'highSpaceUsageProtection'      => 'HighSpaceUsageProtection',
        'logBackupFrequency'            => 'LogBackupFrequency',
        'compressType'                  => 'CompressType',
        'archiveBackupRetentionPeriod'  => 'ArchiveBackupRetentionPeriod',
        'archiveBackupKeepPolicy'       => 'ArchiveBackupKeepPolicy',
        'archiveBackupKeepCount'        => 'ArchiveBackupKeepCount',
        'releasedKeepPolicy'            => 'ReleasedKeepPolicy',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->backupPolicyMode) {
            $res['BackupPolicyMode'] = $this->backupPolicyMode;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->backupLog) {
            $res['BackupLog'] = $this->backupLog;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->localLogRetentionHours) {
            $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        }
        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->logBackupFrequency) {
            $res['LogBackupFrequency'] = $this->logBackupFrequency;
        }
        if (null !== $this->compressType) {
            $res['CompressType'] = $this->compressType;
        }
        if (null !== $this->archiveBackupRetentionPeriod) {
            $res['ArchiveBackupRetentionPeriod'] = $this->archiveBackupRetentionPeriod;
        }
        if (null !== $this->archiveBackupKeepPolicy) {
            $res['ArchiveBackupKeepPolicy'] = $this->archiveBackupKeepPolicy;
        }
        if (null !== $this->archiveBackupKeepCount) {
            $res['ArchiveBackupKeepCount'] = $this->archiveBackupKeepCount;
        }
        if (null !== $this->releasedKeepPolicy) {
            $res['ReleasedKeepPolicy'] = $this->releasedKeepPolicy;
        }
        if (null !== $this->logBackupLocalRetentionNumber) {
            $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['BackupPolicyMode'])) {
            $model->backupPolicyMode = $map['BackupPolicyMode'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['BackupLog'])) {
            $model->backupLog = $map['BackupLog'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['LocalLogRetentionHours'])) {
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['LogBackupFrequency'])) {
            $model->logBackupFrequency = $map['LogBackupFrequency'];
        }
        if (isset($map['CompressType'])) {
            $model->compressType = $map['CompressType'];
        }
        if (isset($map['ArchiveBackupRetentionPeriod'])) {
            $model->archiveBackupRetentionPeriod = $map['ArchiveBackupRetentionPeriod'];
        }
        if (isset($map['ArchiveBackupKeepPolicy'])) {
            $model->archiveBackupKeepPolicy = $map['ArchiveBackupKeepPolicy'];
        }
        if (isset($map['ArchiveBackupKeepCount'])) {
            $model->archiveBackupKeepCount = $map['ArchiveBackupKeepCount'];
        }
        if (isset($map['ReleasedKeepPolicy'])) {
            $model->releasedKeepPolicy = $map['ReleasedKeepPolicy'];
        }
        if (isset($map['LogBackupLocalRetentionNumber'])) {
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
        }

        return $model;
    }
}
