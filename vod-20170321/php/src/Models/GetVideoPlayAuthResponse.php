<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponse\videoMeta;

class GetVideoPlayAuthResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'playAuth' => 'PlayAuth',
        'videoMeta' => 'VideoMeta',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('playAuth', $this->playAuth, true);
        Model::validateRequired('videoMeta', $this->videoMeta, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PlayAuth'] = $this->playAuth;
        $res['VideoMeta'] = null !== $this->videoMeta ? $this->videoMeta->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetVideoPlayAuthResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PlayAuth'])){
            $model->playAuth = $map['PlayAuth'];
        }
        if(isset($map['VideoMeta'])){
            $model->videoMeta = videoMeta::fromMap($map['VideoMeta']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.playAuth
     * @var string
     */
    public $playAuth;

    /**
     * @description data.videoMeta
     * @var videoMeta
     */
    public $videoMeta;

}
