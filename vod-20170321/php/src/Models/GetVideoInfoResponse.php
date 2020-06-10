<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponse\video;
use AlibabaCloud\Tea\Model;

class GetVideoInfoResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.aiResult
     *
     * @var string
     */
    public $AI;

    /**
     * @description data.mediaInfo
     *
     * @var video
     */
    public $video;
    protected $_name = [
        'requestId' => 'RequestId',
        'AI'        => 'AI',
        'video'     => 'Video',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AI', $this->AI, true);
        Model::validateRequired('video', $this->video, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->AI) {
            $res['AI'] = $this->AI;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AI'])) {
            $model->AI = $map['AI'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
