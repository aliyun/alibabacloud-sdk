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
     * @var AttachInstancesResponseBody.list
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
        $res['list']    = null !== $this->list ? $this->list->toMap() : null;

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
            $model->list = list_::fromMap($map['list']);
        }

        return $model;
    }
}
