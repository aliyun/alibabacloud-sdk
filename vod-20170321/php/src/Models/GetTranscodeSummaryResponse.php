<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponse\transcodeSummaryList;

class GetTranscodeSummaryResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeSummaryList' => 'TranscodeSummaryList',
        'nonExistVideoIds' => 'NonExistVideoIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeSummaryList', $this->transcodeSummaryList, true);
        Model::validateRequired('nonExistVideoIds', $this->nonExistVideoIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeSummaryList'] = [];
        if(null !== $this->transcodeSummaryList && is_array($this->transcodeSummaryList)){
            $n = 0;
            foreach($this->transcodeSummaryList as $item){
                $res['TranscodeSummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetTranscodeSummaryResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeSummaryList'])){
            if(!empty($map['TranscodeSummaryList'])){
                $model->transcodeSummaryList = [];
                $n = 0;
                foreach($map['TranscodeSummaryList'] as $item) {
                    $model->transcodeSummaryList[$n++] = null !== $item ? transcodeSummaryList::fromMap($item) : $item;
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
     * @description data.transcodeSummaryList
     * @var array
     */
    public $transcodeSummaryList;

    /**
     * @description data.nonExistVideoIdList
     * @var array
     */
    public $nonExistVideoIds;

}
