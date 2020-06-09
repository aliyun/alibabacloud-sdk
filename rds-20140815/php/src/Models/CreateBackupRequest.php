<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBName' => 'DBName',
        'backupStrategy' => 'BackupStrategy',
        'backupMethod' => 'BackupMethod',
        'backupType' => 'BackupType',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBName'] = $this->DBName;
        $res['BackupStrategy'] = $this->backupStrategy;
        $res['BackupMethod'] = $this->backupMethod;
        $res['BackupType'] = $this->backupType;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateBackupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['BackupStrategy'])){
            $model->backupStrategy = $map['BackupStrategy'];
        }
        if(isset($map['BackupMethod'])){
            $model->backupMethod = $map['BackupMethod'];
        }
        if(isset($map['BackupType'])){
            $model->backupType = $map['BackupType'];
        }
        return $model;
    }
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
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description backupStrategy
     * @var string
     */
    public $backupStrategy;

    /**
     * @description backupMethod
     * @var string
     */
    public $backupMethod;

    /**
     * @description backupType
     * @var string
     */
    public $backupType;

}
