<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult;

class GetAIVideoTagResultResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'videoTagResult' => 'VideoTagResult',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('videoTagResult', $this->videoTagResult, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VideoTagResult'] = null !== $this->videoTagResult ? $this->videoTagResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAIVideoTagResultResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VideoTagResult'])){
            $model->videoTagResult = videoTagResult::fromMap($map['VideoTagResult']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.resultDTO
     * @var videoTagResult
     */
    public $videoTagResult;

}
