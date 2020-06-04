<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponse\attachedMediaList;

class GetAttachedMediaInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'attachedMediaList' => 'AttachedMediaList',
        'nonExistMediaIds' => 'NonExistMediaIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('attachedMediaList', $this->attachedMediaList, true);
        Model::validateRequired('nonExistMediaIds', $this->nonExistMediaIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AttachedMediaList'] = [];
        if(null !== $this->attachedMediaList && is_array($this->attachedMediaList)){
            $n = 0;
            foreach($this->attachedMediaList as $item){
                $res['AttachedMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['NonExistMediaIds'] = [];
        if(null !== $this->nonExistMediaIds){
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetAttachedMediaInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AttachedMediaList'])){
            if(!empty($map['AttachedMediaList'])){
                $model->attachedMediaList = [];
                $n = 0;
                foreach($map['AttachedMediaList'] as $item) {
                    $model->attachedMediaList[$n++] = null !== $item ? attachedMediaList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['NonExistMediaIds'])){
            if(!empty($map['NonExistMediaIds'])){
                $model->nonExistMediaIds = [];
                $model->nonExistMediaIds = $map['NonExistMediaIds'];
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
     * @description data.attachedMediaList
     * @var array
     */
    public $attachedMediaList;

    /**
     * @description data.nonExistMediaIds
     * @var array
     */
    public $nonExistMediaIds;

}
