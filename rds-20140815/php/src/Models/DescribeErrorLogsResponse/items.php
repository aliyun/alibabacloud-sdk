<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponse\items\errorLog;

class items extends Model {
    protected $_name = [
        'errorLog' => 'ErrorLog',
    ];
    public function validate() {
        Model::validateRequired('errorLog', $this->errorLog, true);
    }
    public function toMap() {
        $res = [];
        $res['ErrorLog'] = [];
        if(null !== $this->errorLog && is_array($this->errorLog)){
            $n = 0;
            foreach($this->errorLog as $item){
                $res['ErrorLog'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['ErrorLog'])){
            if(!empty($map['ErrorLog'])){
                $model->errorLog = [];
                $n = 0;
                foreach($map['ErrorLog'] as $item) {
                    $model->errorLog[$n++] = null !== $item ? errorLog::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ErrorLog
     * @var array
     */
    public $errorLog;

}
