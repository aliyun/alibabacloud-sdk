<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupResponse\transcodeTemplateGroupList;

class ListTranscodeTemplateGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTemplateGroupList' => 'TranscodeTemplateGroupList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeTemplateGroupList', $this->transcodeTemplateGroupList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeTemplateGroupList'] = [];
        if(null !== $this->transcodeTemplateGroupList && is_array($this->transcodeTemplateGroupList)){
            $n = 0;
            foreach($this->transcodeTemplateGroupList as $item){
                $res['TranscodeTemplateGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListTranscodeTemplateGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeTemplateGroupList'])){
            if(!empty($map['TranscodeTemplateGroupList'])){
                $model->transcodeTemplateGroupList = [];
                $n = 0;
                foreach($map['TranscodeTemplateGroupList'] as $item) {
                    $model->transcodeTemplateGroupList[$n++] = null !== $item ? transcodeTemplateGroupList::fromMap($item) : $item;
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
     * @description data.transcodeTemplateGroupList
     * @var array
     */
    public $transcodeTemplateGroupList;

}
