<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageRequest;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description dataId
     *
     * @var string
     */
    public $dataId;

    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description imageTime
     *
     * @var int
     */
    public $imageTimeMillisecond;

    /**
     * @description interval
     *
     * @var int
     */
    public $interval;

    /**
     * @description maxFrames
     *
     * @var int
     */
    public $maxFrames;
    protected $_name = [
        'dataId'               => 'DataId',
        'imageURL'             => 'ImageURL',
        'imageTimeMillisecond' => 'ImageTimeMillisecond',
        'interval'             => 'Interval',
        'maxFrames'            => 'MaxFrames',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['DataId']               = $this->dataId;
        $res['ImageURL']             = $this->imageURL;
        $res['ImageTimeMillisecond'] = $this->imageTimeMillisecond;
        $res['Interval']             = $this->interval;
        $res['MaxFrames']            = $this->maxFrames;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['ImageTimeMillisecond'])) {
            $model->imageTimeMillisecond = $map['ImageTimeMillisecond'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['MaxFrames'])) {
            $model->maxFrames = $map['MaxFrames'];
        }

        return $model;
    }
}
