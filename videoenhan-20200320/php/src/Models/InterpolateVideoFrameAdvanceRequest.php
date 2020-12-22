<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class InterpolateVideoFrameAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @var int
     */
    public $frameRate;

    /**
     * @var int
     */
    public $bitrate;
    protected $_name = [
        'videoURLObject' => 'VideoURLObject',
        'frameRate'      => 'FrameRate',
        'bitrate'        => 'Bitrate',
    ];

    public function validate()
    {
        Model::validateRequired('videoURLObject', $this->videoURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURLObject) {
            $res['VideoURLObject'] = $this->videoURLObject;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InterpolateVideoFrameAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURLObject'])) {
            $model->videoURLObject = $map['VideoURLObject'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        return $model;
    }
}
