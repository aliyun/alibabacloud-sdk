<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo;

class liveRecordVideoList extends Model {
    protected $_name = [
        'liveRecordVideo' => 'LiveRecordVideo',
    ];
    public function validate() {
        Model::validateRequired('liveRecordVideo', $this->liveRecordVideo, true);
    }
    public function toMap() {
        $res = [];
        $res['LiveRecordVideo'] = [];
        if(null !== $this->liveRecordVideo && is_array($this->liveRecordVideo)){
            $n = 0;
            foreach($this->liveRecordVideo as $item){
                $res['LiveRecordVideo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return liveRecordVideoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LiveRecordVideo'])){
            if(!empty($map['LiveRecordVideo'])){
                $model->liveRecordVideo = [];
                $n = 0;
                foreach($map['LiveRecordVideo'] as $item) {
                    $model->liveRecordVideo[$n++] = null !== $item ? liveRecordVideo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description LiveRecordVideo
     * @var array
     */
    public $liveRecordVideo;

}
