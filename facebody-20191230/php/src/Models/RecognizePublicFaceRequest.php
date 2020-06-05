<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceRequest\task;

class RecognizePublicFaceRequest extends Model {
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
     * @return RecognizePublicFaceRequest
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
     * @description tasks
     * @var array
     */
    public $task;

}
