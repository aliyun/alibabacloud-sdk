<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosResponse\videoList;

class GetVideoInfosResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'videoList' => 'VideoList',
        'nonExistVideoIds' => 'NonExistVideoIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('videoList', $this->videoList, true);
        Model::validateRequired('nonExistVideoIds', $this->nonExistVideoIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VideoList'] = [];
        if(null !== $this->videoList && is_array($this->videoList)){
            $n = 0;
            foreach($this->videoList as $item){
                $res['VideoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['NonExistVideoIds'] = [];
        if(null !== $this->nonExistVideoIds){
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetVideoInfosResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VideoList'])){
            if(!empty($map['VideoList'])){
                $model->videoList = [];
                $n = 0;
                foreach($map['VideoList'] as $item) {
                    $model->videoList[$n++] = null !== $item ? videoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['NonExistVideoIds'])){
            if(!empty($map['NonExistVideoIds'])){
                $model->nonExistVideoIds = [];
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaInfoDTOS
     * @var array
     */
    public $videoList;

    /**
     * @description data.nonExistVideoIds
     * @var array
     */
    public $nonExistVideoIds;

}
