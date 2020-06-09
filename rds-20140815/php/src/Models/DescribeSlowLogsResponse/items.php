<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponse\items\SQLSlowLog;

class items extends Model {
    protected $_name = [
        'SQLSlowLog' => 'SQLSlowLog',
    ];
    public function validate() {
        Model::validateRequired('SQLSlowLog', $this->SQLSlowLog, true);
    }
    public function toMap() {
        $res = [];
        $res['SQLSlowLog'] = [];
        if(null !== $this->SQLSlowLog && is_array($this->SQLSlowLog)){
            $n = 0;
            foreach($this->SQLSlowLog as $item){
                $res['SQLSlowLog'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SQLSlowLog'])){
            if(!empty($map['SQLSlowLog'])){
                $model->SQLSlowLog = [];
                $n = 0;
                foreach($map['SQLSlowLog'] as $item) {
                    $model->SQLSlowLog[$n++] = null !== $item ? SQLSlowLog::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description SQLSlowLog
     * @var array
     */
    public $SQLSlowLog;

}
