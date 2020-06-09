<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponse\recordLogs\recordLog;

class recordLogs extends Model {
    protected $_name = [
        'recordLog' => 'RecordLog',
    ];
    public function validate() {
        Model::validateRequired('recordLog', $this->recordLog, true);
    }
    public function toMap() {
        $res = [];
        $res['RecordLog'] = [];
        if(null !== $this->recordLog && is_array($this->recordLog)){
            $n = 0;
            foreach($this->recordLog as $item){
                $res['RecordLog'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return recordLogs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RecordLog'])){
            if(!empty($map['RecordLog'])){
                $model->recordLog = [];
                $n = 0;
                foreach($map['RecordLog'] as $item) {
                    $model->recordLog[$n++] = null !== $item ? recordLog::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description RecordLog
     * @var array
     */
    public $recordLog;

}
