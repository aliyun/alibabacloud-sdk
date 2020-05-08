<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Models\SegmentVideoBodyResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description VideoUrl
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['VideoUrl'] = $this->videoUrl;

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

        return $model;
    }
}
