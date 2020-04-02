<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class AbstractEcommerceVideoAdvanceRequest extends Model
{
    /**
     * @description VideoUrlObject
     *
     * @var Stream
     */
    public $videoUrlObject;
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
        'videoUrlObject' => 'VideoUrlObject',
        'duration'       => 'Duration',
        'width'          => 'Width',
        'height'         => 'Height',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
        Model::validateRequired('duration', $this->duration, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['VideoUrlObject'] = $this->videoUrlObject;
        $res['Duration']       = $this->duration;
        $res['Width']          = $this->width;
        $res['Height']         = $this->height;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbstractEcommerceVideoAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
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
