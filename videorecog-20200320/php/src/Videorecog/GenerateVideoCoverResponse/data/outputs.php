<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GenerateVideoCoverResponse\data;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    /**
     * @description confidence
     *
     * @var float
     */
    public $confidence;
    /**
     * @description time
     *
     * @var float
     */
    public $time;
    /**
     * @description faceCount
     *
     * @var float
     */
    public $faceCount;
    /**
     * @description startTime
     *
     * @var float
     */
    public $startTime;
    /**
     * @description endTime
     *
     * @var float
     */
    public $endTime;
    protected $_name = [
        'imageURL'   => 'ImageURL',
        'confidence' => 'Confidence',
        'time'       => 'Time',
        'faceCount'  => 'FaceCount',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('faceCount', $this->faceCount, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['ImageURL']   = $this->imageURL;
        $res['Confidence'] = $this->confidence;
        $res['Time']       = $this->time;
        $res['FaceCount']  = $this->faceCount;
        $res['StartTime']  = $this->startTime;
        $res['EndTime']    = $this->endTime;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
