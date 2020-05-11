<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponseBody\list_;
use AlibabaCloud\Tea\Model;

class AttachInstancesResponseBody extends Model
{
    /**
     * @description task_id
     *
     * @var string
     */
    public $taskId;

    /**
     * @description list
     *
     * @var array
     */
    public $list;
    protected $_name = [
        'taskId' => 'task_id',
        'list'   => 'list',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('list', $this->list, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['task_id'] = $this->taskId;
        $res['list']    = [];
        if (null !== $this->list && \is_array($this->list)) {
            $n = 0;
            foreach ($this->list as $item) {
                $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
