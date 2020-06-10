<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponse;

use AlibabaCloud\Tea\Model;

class videoMeta extends Model
{
    /**
     * @description coverURL
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description duration
     *
     * @var float
     */
    public $duration;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description mediaId
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'coverURL' => 'CoverURL',
        'duration' => 'Duration',
        'status'   => 'Status',
        'title'    => 'Title',
        'videoId'  => 'VideoId',
    ];

    public function validate()
    {
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('videoId', $this->videoId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
