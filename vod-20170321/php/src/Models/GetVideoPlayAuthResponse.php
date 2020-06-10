<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponse\videoMeta;
use AlibabaCloud\Tea\Model;

class GetVideoPlayAuthResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.playAuth
     *
     * @var string
     */
    public $playAuth;

    /**
     * @description data.videoMeta
     *
     * @var videoMeta
     */
    public $videoMeta;
    protected $_name = [
        'requestId' => 'RequestId',
        'playAuth'  => 'PlayAuth',
        'videoMeta' => 'VideoMeta',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('playAuth', $this->playAuth, true);
        Model::validateRequired('videoMeta', $this->videoMeta, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->playAuth) {
            $res['PlayAuth'] = $this->playAuth;
        }
        if (null !== $this->videoMeta) {
            $res['VideoMeta'] = null !== $this->videoMeta ? $this->videoMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPlayAuthResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PlayAuth'])) {
            $model->playAuth = $map['PlayAuth'];
        }
        if (isset($map['VideoMeta'])) {
            $model->videoMeta = videoMeta::fromMap($map['VideoMeta']);
        }

        return $model;
    }
}
