<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ToneSdrVideoRequest extends Model
{
    /**
     * @var string
     */
    public $videoURL;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $recolorModel;
    protected $_name = [
        'videoURL'     => 'VideoURL',
        'bitrate'      => 'Bitrate',
        'recolorModel' => 'RecolorModel',
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
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->recolorModel) {
            $res['RecolorModel'] = $this->recolorModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ToneSdrVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['RecolorModel'])) {
            $model->recolorModel = $map['RecolorModel'];
        }

        return $model;
    }
}
