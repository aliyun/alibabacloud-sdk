<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskResponse\transcodeTaskList;

class ListTranscodeTaskResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTaskList' => 'TranscodeTaskList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeTaskList', $this->transcodeTaskList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeTaskList'] = [];
        if(null !== $this->transcodeTaskList && is_array($this->transcodeTaskList)){
            $n = 0;
            foreach($this->transcodeTaskList as $item){
                $res['TranscodeTaskList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListTranscodeTaskResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeTaskList'])){
            if(!empty($map['TranscodeTaskList'])){
                $model->transcodeTaskList = [];
                $n = 0;
                foreach($map['TranscodeTaskList'] as $item) {
                    $model->transcodeTaskList[$n++] = null !== $item ? transcodeTaskList::fromMap($item) : $item;
                }
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
     * @description data.transcodeJobProcessList
     * @var array
     */
    public $transcodeTaskList;

}
