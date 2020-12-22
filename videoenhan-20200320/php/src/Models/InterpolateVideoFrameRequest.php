<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class InterpolateVideoFrameRequest extends Model
{
    /**
     * @var string
     */
    public $videoURL;

    /**
     * @var int
     */
    public $frameRate;

    /**
     * @var int
     */
    public $bitrate;
    protected $_name = [
        'videoURL'  => 'VideoURL',
        'frameRate' => 'FrameRate',
        'bitrate'   => 'Bitrate',
    ];

    public function validate()
    {
        Model::validateRequired('videoURL', $this->videoURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
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
     * @return InterpolateVideoFrameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
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
