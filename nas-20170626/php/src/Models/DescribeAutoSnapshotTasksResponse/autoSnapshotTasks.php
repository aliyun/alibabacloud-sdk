<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponse;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponse\autoSnapshotTasks\autoSnapshotTask;
use AlibabaCloud\Tea\Model;

class autoSnapshotTasks extends Model
{
    /**
     * @var array
     */
    public $autoSnapshotTask;
    protected $_name = [
        'autoSnapshotTask' => 'AutoSnapshotTask',
    ];

    public function validate()
    {
        Model::validateRequired('autoSnapshotTask', $this->autoSnapshotTask, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotTask) {
            $res['AutoSnapshotTask'] = [];
            if (null !== $this->autoSnapshotTask && \is_array($this->autoSnapshotTask)) {
                $n = 0;
                foreach ($this->autoSnapshotTask as $item) {
                    $res['AutoSnapshotTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotTask'])) {
            if (!empty($map['AutoSnapshotTask'])) {
                $model->autoSnapshotTask = [];
                $n                       = 0;
                foreach ($map['AutoSnapshotTask'] as $item) {
                    $model->autoSnapshotTask[$n++] = null !== $item ? autoSnapshotTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
