<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponse\videoList\video;

class videoList extends Model {
    protected $_name = [
        'video' => 'Video',
    ];
    public function validate() {
        Model::validateRequired('video', $this->video, true);
    }
    public function toMap() {
        $res = [];
        $res['Video'] = [];
        if(null !== $this->video && is_array($this->video)){
            $n = 0;
            foreach($this->video as $item){
                $res['Video'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return videoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Video'])){
            if(!empty($map['Video'])){
                $model->video = [];
                $n = 0;
                foreach($map['Video'] as $item) {
                    $model->video[$n++] = null !== $item ? video::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Video
     * @var array
     */
    public $video;

}
