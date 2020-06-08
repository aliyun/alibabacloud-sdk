<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponse\items;

use AlibabaCloud\Tea\Model;

class migrateTask extends Model {
    protected $_name = [
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
     * @return migrateTask
     */
    public static function fromMap($map = []) {
        $model = new self();
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
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description migrateTaskId
     * @var string
     */
    public $migrateTaskId;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description taskType
     * @var string
     */
    public $backupMode;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description isDBReplaced
     * @var string
     */
    public $isDBReplaced;

    /**
     * @description desc
     * @var string
     */
    public $description;

}
