<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsResponse\items;

use AlibabaCloud\Tea\Model;

class backup extends Model {
    protected $_name = [
        'backupId' => 'BackupId',
        'DBClusterId' => 'DBClusterId',
        'backupStatus' => 'BackupStatus',
        'backupStartTime' => 'BackupStartTime',
        'backupEndTime' => 'BackupEndTime',
        'backupType' => 'BackupType',
        'backupMode' => 'BackupMode',
        'backupMethod' => 'BackupMethod',
        'storeStatus' => 'StoreStatus',
        'backupSetSize' => 'BackupSetSize',
        'consistentTime' => 'ConsistentTime',
        'backupsLevel' => 'BackupsLevel',
        'isAvail' => 'IsAvail',
    ];
    public function validate() {
        Model::validateRequired('backupId', $this->backupId, true);
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('backupStatus', $this->backupStatus, true);
        Model::validateRequired('backupStartTime', $this->backupStartTime, true);
        Model::validateRequired('backupEndTime', $this->backupEndTime, true);
        Model::validateRequired('backupType', $this->backupType, true);
        Model::validateRequired('backupMode', $this->backupMode, true);
        Model::validateRequired('backupMethod', $this->backupMethod, true);
        Model::validateRequired('storeStatus', $this->storeStatus, true);
        Model::validateRequired('backupSetSize', $this->backupSetSize, true);
        Model::validateRequired('consistentTime', $this->consistentTime, true);
        Model::validateRequired('backupsLevel', $this->backupsLevel, true);
        Model::validateRequired('isAvail', $this->isAvail, true);
    }
    public function toMap() {
        $res = [];
        $res['BackupId'] = $this->backupId;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['BackupStatus'] = $this->backupStatus;
        $res['BackupStartTime'] = $this->backupStartTime;
        $res['BackupEndTime'] = $this->backupEndTime;
        $res['BackupType'] = $this->backupType;
        $res['BackupMode'] = $this->backupMode;
        $res['BackupMethod'] = $this->backupMethod;
        $res['StoreStatus'] = $this->storeStatus;
        $res['BackupSetSize'] = $this->backupSetSize;
        $res['ConsistentTime'] = $this->consistentTime;
        $res['BackupsLevel'] = $this->backupsLevel;
        $res['IsAvail'] = $this->isAvail;
        return $res;
    }
    /**
     * @param array $map
     * @return backup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BackupId'])){
            $model->backupId = $map['BackupId'];
        }
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['BackupStatus'])){
            $model->backupStatus = $map['BackupStatus'];
        }
        if(isset($map['BackupStartTime'])){
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if(isset($map['BackupEndTime'])){
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if(isset($map['BackupType'])){
            $model->backupType = $map['BackupType'];
        }
        if(isset($map['BackupMode'])){
            $model->backupMode = $map['BackupMode'];
        }
        if(isset($map['BackupMethod'])){
            $model->backupMethod = $map['BackupMethod'];
        }
        if(isset($map['StoreStatus'])){
            $model->storeStatus = $map['StoreStatus'];
        }
        if(isset($map['BackupSetSize'])){
            $model->backupSetSize = $map['BackupSetSize'];
        }
        if(isset($map['ConsistentTime'])){
            $model->consistentTime = $map['ConsistentTime'];
        }
        if(isset($map['BackupsLevel'])){
            $model->backupsLevel = $map['BackupsLevel'];
        }
        if(isset($map['IsAvail'])){
            $model->isAvail = $map['IsAvail'];
        }
        return $model;
    }
    /**
     * @description backupSetId
     * @var string
     */
    public $backupId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description backupSetStatus
     * @var string
     */
    public $backupStatus;

    /**
     * @description backupStartTime
     * @var string
     */
    public $backupStartTime;

    /**
     * @description backupEndTime
     * @var string
     */
    public $backupEndTime;

    /**
     * @description backupType
     * @var string
     */
    public $backupType;

    /**
     * @description jobMode
     * @var string
     */
    public $backupMode;

    /**
     * @description backupMethod
     * @var string
     */
    public $backupMethod;

    /**
     * @description storeStatus
     * @var string
     */
    public $storeStatus;

    /**
     * @description backupSetSize
     * @var string
     */
    public $backupSetSize;

    /**
     * @description consistentTime
     * @var string
     */
    public $consistentTime;

    /**
     * @description backupsLevel
     * @var string
     */
    public $backupsLevel;

    /**
     * @description isAvail
     * @var string
     */
    public $isAvail;

}
