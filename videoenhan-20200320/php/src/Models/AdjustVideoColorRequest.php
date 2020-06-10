<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class AdjustVideoColorRequest extends Model
{
    /**
     * @description videoUrl
     *
     * @var string
     */
    public $videoUrl;

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
        'videoUrl'     => 'VideoUrl',
        'videoBitrate' => 'VideoBitrate',
        'videoCodec'   => 'VideoCodec',
        'videoFormat'  => 'VideoFormat',
        'mode'         => 'Mode',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('mode', $this->mode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
        }
        if (null !== $this->videoFormat) {
            $res['VideoFormat'] = $this->videoFormat;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustVideoColorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
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
