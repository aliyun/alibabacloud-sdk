<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.backupRetentionPeriod
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description data.preferredNextBackupTime
     *
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @description data.preferredBackupTime
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description data.preferredBackupPeriod
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description data.dataLevel1BackupRetentionPeriod
     *
     * @var string
     */
    public $dataLevel1BackupRetentionPeriod;

    /**
     * @description data.dataLevel2BackupRetentionPeriod
     *
     * @var string
     */
    public $dataLevel2BackupRetentionPeriod;

    /**
     * @description data.backupRetentionPolicyOnClusterDeletion
     *
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;
    protected $_name = [
        'requestId'                              => 'RequestId',
        'backupRetentionPeriod'                  => 'BackupRetentionPeriod',
        'preferredNextBackupTime'                => 'PreferredNextBackupTime',
        'preferredBackupTime'                    => 'PreferredBackupTime',
        'preferredBackupPeriod'                  => 'PreferredBackupPeriod',
        'dataLevel1BackupRetentionPeriod'        => 'DataLevel1BackupRetentionPeriod',
        'dataLevel2BackupRetentionPeriod'        => 'DataLevel2BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('backupRetentionPeriod', $this->backupRetentionPeriod, true);
        Model::validateRequired('preferredNextBackupTime', $this->preferredNextBackupTime, true);
        Model::validateRequired('preferredBackupTime', $this->preferredBackupTime, true);
        Model::validateRequired('preferredBackupPeriod', $this->preferredBackupPeriod, true);
        Model::validateRequired('dataLevel1BackupRetentionPeriod', $this->dataLevel1BackupRetentionPeriod, true);
        Model::validateRequired('dataLevel2BackupRetentionPeriod', $this->dataLevel2BackupRetentionPeriod, true);
        Model::validateRequired('backupRetentionPolicyOnClusterDeletion', $this->backupRetentionPolicyOnClusterDeletion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->preferredNextBackupTime) {
            $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
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
     * @return DescribeBackupPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['PreferredNextBackupTime'])) {
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
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
