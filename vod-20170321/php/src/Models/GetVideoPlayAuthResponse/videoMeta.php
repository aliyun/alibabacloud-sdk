<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponse;

use AlibabaCloud\Tea\Model;

class videoMeta extends Model {
    protected $_name = [
        'coverURL' => 'CoverURL',
        'duration' => 'Duration',
        'status' => 'Status',
        'title' => 'Title',
        'videoId' => 'VideoId',
    ];
    public function validate() {
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['CoverURL'] = $this->coverURL;
        $res['Duration'] = $this->duration;
        $res['Status'] = $this->status;
        $res['Title'] = $this->title;
        $res['VideoId'] = $this->videoId;
        return $res;
    }
    /**
     * @param array $map
     * @return videoMeta
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        return $model;
    }
    /**
     * @description coverURL
     * @var string
     */
    public $coverURL;

    /**
     * @description duration
     * @var float
     */
    public $duration;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description mediaId
     * @var string
     */
    public $videoId;

}
