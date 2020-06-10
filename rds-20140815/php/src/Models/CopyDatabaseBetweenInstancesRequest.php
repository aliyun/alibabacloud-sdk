<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CopyDatabaseBetweenInstancesRequest extends Model
{
    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description sourceDBInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description targetDBInstanceName
     *
     * @var string
     */
    public $targetDBInstanceId;

    /**
     * @description backupDbNames
     *
     * @var string
     */
    public $dbNames;

    /**
     * @description backupSetId
     *
     * @var string
     */
    public $backupId;

    /**
     * @description restoreTime
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description syncUserPrivilege
     *
     * @var string
     */
    public $syncUserPrivilege;
    protected $_name = [
        'resourceOwnerId'    => 'ResourceOwnerId',
        'DBInstanceId'       => 'DBInstanceId',
        'targetDBInstanceId' => 'TargetDBInstanceId',
        'dbNames'            => 'DbNames',
        'backupId'           => 'BackupId',
        'restoreTime'        => 'RestoreTime',
        'syncUserPrivilege'  => 'SyncUserPrivilege',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('targetDBInstanceId', $this->targetDBInstanceId, true);
        Model::validateRequired('dbNames', $this->dbNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->targetDBInstanceId) {
            $res['TargetDBInstanceId'] = $this->targetDBInstanceId;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->syncUserPrivilege) {
            $res['SyncUserPrivilege'] = $this->syncUserPrivilege;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyDatabaseBetweenInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['TargetDBInstanceId'])) {
            $model->targetDBInstanceId = $map['TargetDBInstanceId'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SyncUserPrivilege'])) {
            $model->syncUserPrivilege = $map['SyncUserPrivilege'];
        }

        return $model;
    }
}
