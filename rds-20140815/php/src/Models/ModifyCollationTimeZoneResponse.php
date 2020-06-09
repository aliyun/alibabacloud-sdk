<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyCollationTimeZoneResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'taskId' => 'TaskId',
        'timezone' => 'Timezone',
        'collation' => 'Collation',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('timezone', $this->timezone, true);
        Model::validateRequired('collation', $this->collation, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['TaskId'] = $this->taskId;
        $res['Timezone'] = $this->timezone;
        $res['Collation'] = $this->collation;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyCollationTimeZoneResponse
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
        if(isset($map['Timezone'])){
            $model->timezone = $map['Timezone'];
        }
        if(isset($map['Collation'])){
            $model->collation = $map['Collation'];
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
     * @description data.timeZone
     * @var string
     */
    public $timezone;

    /**
     * @description data.collation
     * @var string
     */
    public $collation;

}
