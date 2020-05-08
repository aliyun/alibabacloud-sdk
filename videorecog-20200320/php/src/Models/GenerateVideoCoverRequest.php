<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;

class GenerateVideoCoverRequest extends Model
{
    /**
     * @description videoUrl
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description isGif
     *
     * @var bool
     */
    public $isGif;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'isGif'    => 'IsGif',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('isGif', $this->isGif, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['VideoUrl'] = $this->videoUrl;
        $res['IsGif']    = $this->isGif;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoCoverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['IsGif'])) {
            $model->isGif = $map['IsGif'];
        }

        return $model;
    }
}
