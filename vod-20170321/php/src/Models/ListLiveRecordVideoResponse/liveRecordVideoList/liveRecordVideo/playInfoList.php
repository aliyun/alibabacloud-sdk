<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo\playInfoList\playInfo;

class playInfoList extends Model {
    protected $_name = [
        'playInfo' => 'PlayInfo',
    ];
    public function validate() {
        Model::validateRequired('playInfo', $this->playInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['PlayInfo'] = [];
        if(null !== $this->playInfo && is_array($this->playInfo)){
            $n = 0;
            foreach($this->playInfo as $item){
                $res['PlayInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return playInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PlayInfo'])){
            if(!empty($map['PlayInfo'])){
                $model->playInfo = [];
                $n = 0;
                foreach($map['PlayInfo'] as $item) {
                    $model->playInfo[$n++] = null !== $item ? playInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PlayInfo
     * @var array
     */
    public $playInfo;

}
