<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'taskId' => 'TaskId',
        'DBName' => 'DBName',
        'migrateTaskId' => 'MigrateTaskId',
        'backupMode' => 'BackupMode',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('migrateTaskId', $this->migrateTaskId, true);
        Model::validateRequired('backupMode', $this->backupMode, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['TaskId'] = $this->taskId;
        $res['DBName'] = $this->DBName;
        $res['MigrateTaskId'] = $this->migrateTaskId;
        $res['BackupMode'] = $this->backupMode;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateMigrateTaskResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['MigrateTaskId'])){
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        if(isset($map['BackupMode'])){
            $model->backupMode = $map['BackupMode'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.taskId
     * @var string
     */
    public $taskId;

    /**
     * @description data.dbName
     * @var string
     */
    public $DBName;

    /**
     * @description data.migrateTaskId
     * @var string
     */
    public $migrateTaskId;

    /**
     * @description data.taskType
     * @var string
     */
    public $backupMode;

}
