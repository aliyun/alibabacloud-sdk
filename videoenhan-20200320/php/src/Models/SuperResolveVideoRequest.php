<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class SuperResolveVideoRequest extends Model
{
    /**
     * @description videoUrl
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description bitRate
     *
     * @var int
     */
    public $bitRate;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'bitRate'  => 'BitRate',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuperResolveVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }

        return $model;
    }
}
