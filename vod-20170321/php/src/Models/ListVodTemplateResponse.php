<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateResponse\vodTemplateInfoList;

class ListVodTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'vodTemplateInfoList' => 'VodTemplateInfoList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('vodTemplateInfoList', $this->vodTemplateInfoList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VodTemplateInfoList'] = [];
        if(null !== $this->vodTemplateInfoList && is_array($this->vodTemplateInfoList)){
            $n = 0;
            foreach($this->vodTemplateInfoList as $item){
                $res['VodTemplateInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListVodTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VodTemplateInfoList'])){
            if(!empty($map['VodTemplateInfoList'])){
                $model->vodTemplateInfoList = [];
                $n = 0;
                foreach($map['VodTemplateInfoList'] as $item) {
                    $model->vodTemplateInfoList[$n++] = null !== $item ? vodTemplateInfoList::fromMap($item) : $item;
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
     * @description data.vodTemplateInfoList
     * @var array
     */
    public $vodTemplateInfoList;

}
