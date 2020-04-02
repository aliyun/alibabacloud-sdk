<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description dataId
     *
     * @var string
     */
    public $dataId;
    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    /**
     * @description subResults
     *
     * @var array
     */
    public $subResults;
    protected $_name = [
        'dataId'     => 'DataId',
        'taskId'     => 'TaskId',
        'imageURL'   => 'ImageURL',
        'subResults' => 'SubResults',
    ];

    public function validate()
    {
        Model::validateRequired('dataId', $this->dataId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('subResults', $this->subResults, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['DataId']     = $this->dataId;
        $res['TaskId']     = $this->taskId;
        $res['ImageURL']   = $this->imageURL;
        $res['SubResults'] = [];
        if (null !== $this->subResults && \is_array($this->subResults)) {
            $n = 0;
            foreach ($this->subResults as $item) {
                $res['SubResults'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['SubResults'])) {
            if (!empty($map['SubResults'])) {
                $model->subResults = [];
                $n                 = 0;
                foreach ($map['SubResults'] as $item) {
                    $model->subResults[$n++] = null !== $item ? ScanImageResponse\data\results\subResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
