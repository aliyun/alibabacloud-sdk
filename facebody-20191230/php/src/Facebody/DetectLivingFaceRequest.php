<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class DetectLivingFaceRequest extends Model
{
    /**
     * @description tasks
     *
     * @var array
     */
    public $tasks;
    protected $_name = [
        'tasks' => 'Tasks',
    ];

    public function validate()
    {
        Model::validateRequired('tasks', $this->tasks, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Tasks'] = [];
        if (null !== $this->tasks && \is_array($this->tasks)) {
            $n = 0;
            foreach ($this->tasks as $item) {
                $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectLivingFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? DetectLivingFaceRequest\tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
