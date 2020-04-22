<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit;

use AlibabaCloud\Tea\Model;

class ScanImageRequest extends Model
{
    /**
     * @description tasks
     *
     * @var array
     */
    public $task;

    /**
     * @description scenes
     *
     * @var array
     */
    public $scene;
    protected $_name = [
        'task'  => 'Task',
        'scene' => 'Scene',
    ];

    public function validate()
    {
        Model::validateRequired('task', $this->task, true);
        Model::validateRequired('scene', $this->scene, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['Task'] = [];
        if (null !== $this->task && \is_array($this->task)) {
            $n = 0;
            foreach ($this->task as $item) {
                $res['Task'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Scene'] = [];
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Task'])) {
            if (!empty($map['Task'])) {
                $model->task = [];
                $n           = 0;
                foreach ($map['Task'] as $item) {
                    $model->task[$n++] = null !== $item ? ScanImageRequest\task::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scene'])) {
            if (!empty($map['Scene'])) {
                $model->scene = [];
                $model->scene = $map['Scene'];
            }
        }

        return $model;
    }
}
