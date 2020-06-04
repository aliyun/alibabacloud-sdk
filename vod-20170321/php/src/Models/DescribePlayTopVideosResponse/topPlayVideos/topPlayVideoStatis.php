<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponse\topPlayVideos;

use AlibabaCloud\Tea\Model;

class topPlayVideoStatis extends Model {
    protected $_name = [
        'playDuration' => 'PlayDuration',
        'VV' => 'VV',
        'UV' => 'UV',
        'videoId' => 'VideoId',
        'title' => 'Title',
    ];
    public function validate() {
        Model::validateRequired('playDuration', $this->playDuration, true);
        Model::validateRequired('VV', $this->VV, true);
        Model::validateRequired('UV', $this->UV, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('title', $this->title, true);
    }
    public function toMap() {
        $res = [];
        $res['PlayDuration'] = $this->playDuration;
        $res['VV'] = $this->VV;
        $res['UV'] = $this->UV;
        $res['VideoId'] = $this->videoId;
        $res['Title'] = $this->title;
        return $res;
    }
    /**
     * @param array $map
     * @return topPlayVideoStatis
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PlayDuration'])){
            $model->playDuration = $map['PlayDuration'];
        }
        if(isset($map['VV'])){
            $model->VV = $map['VV'];
        }
        if(isset($map['UV'])){
            $model->UV = $map['UV'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        return $model;
    }
    /**
     * @description playtime
     * @var string
     */
    public $playDuration;

    /**
     * @description vv
     * @var string
     */
    public $VV;

    /**
     * @description uv
     * @var string
     */
    public $UV;

    /**
     * @description videoid
     * @var string
     */
    public $videoId;

    /**
     * @description title
     * @var string
     */
    public $title;

}
