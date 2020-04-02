<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class AdjustVideoColorAdvanceRequest extends Model
{
    /**
     * @description VideoUrlObject
     *
     * @var Stream
     */
    public $videoUrlObject;
    /**
     * @description videoBitrate
     *
     * @var string
     */
    public $videoBitrate;
    /**
     * @description videoCodec
     *
     * @var string
     */
    public $videoCodec;
    /**
     * @description videoFormat
     *
     * @var string
     */
    public $videoFormat;
    /**
     * @description mode
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'videoBitrate'   => 'VideoBitrate',
        'videoCodec'     => 'VideoCodec',
        'videoFormat'    => 'VideoFormat',
        'mode'           => 'Mode',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
        Model::validateRequired('mode', $this->mode, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['VideoUrlObject'] = $this->videoUrlObject;
        $res['VideoBitrate']   = $this->videoBitrate;
        $res['VideoCodec']     = $this->videoCodec;
        $res['VideoFormat']    = $this->videoFormat;
        $res['Mode']           = $this->mode;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustVideoColorAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }
        if (isset($map['VideoFormat'])) {
            $model->videoFormat = $map['VideoFormat'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
