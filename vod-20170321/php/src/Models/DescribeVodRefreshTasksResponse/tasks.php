<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponse\tasks\task;

class tasks extends Model {
    protected $_name = [
        'task' => 'Task',
    ];
    public function validate() {
        Model::validateRequired('task', $this->task, true);
    }
    public function toMap() {
        $res = [];
        $res['Task'] = [];
        if(null !== $this->task && is_array($this->task)){
            $n = 0;
            foreach($this->task as $item){
                $res['Task'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tasks
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Task'])){
            if(!empty($map['Task'])){
                $model->task = [];
                $n = 0;
                foreach($map['Task'] as $item) {
                    $model->task[$n++] = null !== $item ? task::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Task
     * @var array
     */
    public $task;

}
