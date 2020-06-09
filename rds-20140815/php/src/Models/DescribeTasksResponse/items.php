<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponse\items\taskProgressInfo;

class items extends Model {
    protected $_name = [
        'taskProgressInfo' => 'TaskProgressInfo',
    ];
    public function validate() {
        Model::validateRequired('taskProgressInfo', $this->taskProgressInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['TaskProgressInfo'] = [];
        if(null !== $this->taskProgressInfo && is_array($this->taskProgressInfo)){
            $n = 0;
            foreach($this->taskProgressInfo as $item){
                $res['TaskProgressInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['TaskProgressInfo'])){
            if(!empty($map['TaskProgressInfo'])){
                $model->taskProgressInfo = [];
                $n = 0;
                foreach($map['TaskProgressInfo'] as $item) {
                    $model->taskProgressInfo[$n++] = null !== $item ? taskProgressInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description TaskProgressInfo
     * @var array
     */
    public $taskProgressInfo;

}
