<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetMonitorResultRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'taskId' => 'TaskId',
        'minRecordId' => 'MinRecordId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
    ];
    public function validate() {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['TaskId'] = $this->taskId;
        $res['MinRecordId'] = $this->minRecordId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMonitorResultRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['MinRecordId'])){
            $model->minRecordId = $map['MinRecordId'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description taskId
     * @var string
     */
    public $taskId;

    /**
     * @description minId
     * @var string
     */
    public $minRecordId;

    /**
     * @description startTime
     * @var integer
     */
    public $startTime;

    /**
     * @description endTime
     * @var integer
     */
    public $endTime;

}
