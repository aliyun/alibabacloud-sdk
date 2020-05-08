<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models;

use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextRequest\labels;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextRequest\tasks;
use AlibabaCloud\Tea\Model;

class ScanTextRequest extends Model
{
    /**
     * @description tasks
     *
     * @var array
     */
    public $tasks;

    /**
     * @description labels
     *
     * @var array
     */
    public $labels;
    protected $_name = [
        'tasks'  => 'Tasks',
        'labels' => 'Labels',
    ];

    public function validate()
    {
        Model::validateRequired('tasks', $this->tasks, true);
        Model::validateRequired('labels', $this->labels, true);
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
        $res['Labels'] = [];
        if (null !== $this->labels && \is_array($this->labels)) {
            $n = 0;
            foreach ($this->labels as $item) {
                $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanTextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
