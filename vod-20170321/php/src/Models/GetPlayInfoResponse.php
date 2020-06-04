<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\playInfoList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase\thumbnailList;

class GetPlayInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'playInfoList' => 'PlayInfoList',
        'videoBase' => 'VideoBase',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('playInfoList', $this->playInfoList, true);
        Model::validateRequired('videoBase', $this->videoBase, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PlayInfoList'] = null !== $this->playInfoList ? $this->playInfoList->toMap() : null;
        $res['VideoBase'] = null !== $this->videoBase ? $this->videoBase->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPlayInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PlayInfoList'])){
            $model->playInfoList = playInfoList::fromMap($map['PlayInfoList']);
        }
        if(isset($map['VideoBase'])){
            $model->videoBase = videoBase::fromMap($map['VideoBase']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.playInfoList
     * @var playInfoList
     */
    public $playInfoList;

    /**
     * @description data.videoBase
     * @var videoBase
     */
    public $videoBase;

}
