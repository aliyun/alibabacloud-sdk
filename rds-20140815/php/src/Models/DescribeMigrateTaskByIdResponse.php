<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeMigrateTaskByIdResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceName' => 'DBInstanceName',
        'DBName' => 'DBName',
        'migrateTaskId' => 'MigrateTaskId',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'backupMode' => 'BackupMode',
        'status' => 'Status',
        'isDBReplaced' => 'IsDBReplaced',
        'description' => 'Description',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceName', $this->DBInstanceName, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('migrateTaskId', $this->migrateTaskId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('backupMode', $this->backupMode, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('isDBReplaced', $this->isDBReplaced, true);
        Model::validateRequired('description', $this->description, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceName'] = $this->DBInstanceName;
        $res['DBName'] = $this->DBName;
        $res['MigrateTaskId'] = $this->migrateTaskId;
        $res['CreateTime'] = $this->createTime;
        $res['EndTime'] = $this->endTime;
        $res['BackupMode'] = $this->backupMode;
        $res['Status'] = $this->status;
        $res['IsDBReplaced'] = $this->isDBReplaced;
        $res['Description'] = $this->description;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeMigrateTaskByIdResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceName'])){
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['MigrateTaskId'])){
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['BackupMode'])){
            $model->backupMode = $map['BackupMode'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['IsDBReplaced'])){
            $model->isDBReplaced = $map['IsDBReplaced'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceId
     * @var string
     */
    public $DBInstanceName;

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
     * @description data.createTime
     * @var string
     */
    public $createTime;

    /**
     * @description data.endTime
     * @var string
     */
    public $endTime;

    /**
     * @description data.backupMode
     * @var string
     */
    public $backupMode;

    /**
     * @description data.status
     * @var string
     */
    public $status;

    /**
     * @description data.isDBReplaced
     * @var string
     */
    public $isDBReplaced;

    /**
     * @description data.description
     * @var string
     */
    public $description;

}
