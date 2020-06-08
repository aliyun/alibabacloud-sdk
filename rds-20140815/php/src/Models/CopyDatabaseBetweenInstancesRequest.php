<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CopyDatabaseBetweenInstancesRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'targetDBInstanceId' => 'TargetDBInstanceId',
        'dbNames' => 'DbNames',
        'backupId' => 'BackupId',
        'restoreTime' => 'RestoreTime',
        'syncUserPrivilege' => 'SyncUserPrivilege',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('targetDBInstanceId', $this->targetDBInstanceId, true);
        Model::validateRequired('dbNames', $this->dbNames, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['TargetDBInstanceId'] = $this->targetDBInstanceId;
        $res['DbNames'] = $this->dbNames;
        $res['BackupId'] = $this->backupId;
        $res['RestoreTime'] = $this->restoreTime;
        $res['SyncUserPrivilege'] = $this->syncUserPrivilege;
        return $res;
    }
    /**
     * @param array $map
     * @return CopyDatabaseBetweenInstancesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['TargetDBInstanceId'])){
            $model->targetDBInstanceId = $map['TargetDBInstanceId'];
        }
        if(isset($map['DbNames'])){
            $model->dbNames = $map['DbNames'];
        }
        if(isset($map['BackupId'])){
            $model->backupId = $map['BackupId'];
        }
        if(isset($map['RestoreTime'])){
            $model->restoreTime = $map['RestoreTime'];
        }
        if(isset($map['SyncUserPrivilege'])){
            $model->syncUserPrivilege = $map['SyncUserPrivilege'];
        }
        return $model;
    }
    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description sourceDBInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description targetDBInstanceName
     * @var string
     */
    public $targetDBInstanceId;

    /**
     * @description backupDbNames
     * @var string
     */
    public $dbNames;

    /**
     * @description backupSetId
     * @var string
     */
    public $backupId;

    /**
     * @description restoreTime
     * @var string
     */
    public $restoreTime;

    /**
     * @description syncUserPrivilege
     * @var string
     */
    public $syncUserPrivilege;

}
