<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskForSQLServerResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description data.taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description data.dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description data.migrateIaskId
     *
     * @var string
     */
    public $migrateIaskId;

    /**
     * @description data.taskType
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'requestId'      => 'RequestId',
        'DBInstanceId'   => 'DBInstanceId',
        'DBInstanceName' => 'DBInstanceName',
        'taskId'         => 'TaskId',
        'DBName'         => 'DBName',
        'migrateIaskId'  => 'MigrateIaskId',
        'taskType'       => 'TaskType',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceName', $this->DBInstanceName, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('migrateIaskId', $this->migrateIaskId, true);
        Model::validateRequired('taskType', $this->taskType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->migrateIaskId) {
            $res['MigrateIaskId'] = $this->migrateIaskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrateTaskForSQLServerResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['MigrateIaskId'])) {
            $model->migrateIaskId = $map['MigrateIaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
