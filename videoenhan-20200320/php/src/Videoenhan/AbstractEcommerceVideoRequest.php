<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class AbstractEcommerceVideoRequest extends Model
{
    /**
     * @description videoUrl
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description duration
     *
     * @var float
     */
    public $duration;

    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description height
     *
     * @var int
     */
    public $height;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'duration' => 'Duration',
        'width'    => 'Width',
        'height'   => 'Height',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('duration', $this->duration, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['VideoUrl'] = $this->videoUrl;
        $res['Duration'] = $this->duration;
        $res['Width']    = $this->width;
        $res['Height']   = $this->height;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbstractEcommerceVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
