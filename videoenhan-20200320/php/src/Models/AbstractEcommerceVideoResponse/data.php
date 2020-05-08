<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description VideoUrl
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description VideoCoverUrl
     *
     * @var string
     */
    public $videoCoverUrl;
    protected $_name = [
        'videoUrl'      => 'VideoUrl',
        'videoCoverUrl' => 'VideoCoverUrl',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('videoCoverUrl', $this->videoCoverUrl, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['VideoUrl']      = $this->videoUrl;
        $res['VideoCoverUrl'] = $this->videoCoverUrl;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['VideoCoverUrl'])) {
            $model->videoCoverUrl = $map['VideoCoverUrl'];
        }

        return $model;
    }
}
