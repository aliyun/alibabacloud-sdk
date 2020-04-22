<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanTextResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description results
     *
     * @var array
     */
    public $results;
    protected $_name = [
        'taskId'  => 'TaskId',
        'results' => 'Results',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('results', $this->results, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['TaskId']  = $this->taskId;
        $res['Results'] = [];
        if (null !== $this->results && \is_array($this->results)) {
            $n = 0;
            foreach ($this->results as $item) {
                $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? ScanTextResponse\data\elements\results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
