<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyReadonlyInstanceDelayReplicationTimeResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'readSQLReplicationTime' => 'ReadSQLReplicationTime',
        'taskId' => 'TaskId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('readSQLReplicationTime', $this->readSQLReplicationTime, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['ReadSQLReplicationTime'] = $this->readSQLReplicationTime;
        $res['TaskId'] = $this->taskId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['ReadSQLReplicationTime'])){
            $model->readSQLReplicationTime = $map['ReadSQLReplicationTime'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
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
     * @description data.sqlDelay
     * @var string
     */
    public $readSQLReplicationTime;

    /**
     * @description data.taskId
     * @var string
     */
    public $taskId;

}
