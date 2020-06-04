<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase\thumbnailList;

class videoBase extends Model {
    protected $_name = [
        'outputType' => 'OutputType',
        'coverURL' => 'CoverURL',
        'duration' => 'Duration',
        'status' => 'Status',
        'title' => 'Title',
        'videoId' => 'VideoId',
        'mediaType' => 'MediaType',
        'creationTime' => 'CreationTime',
        'transcodeMode' => 'TranscodeMode',
        'thumbnailList' => 'ThumbnailList',
    ];
    public function validate() {
        Model::validateRequired('outputType', $this->outputType, true);
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('mediaType', $this->mediaType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('transcodeMode', $this->transcodeMode, true);
        Model::validateRequired('thumbnailList', $this->thumbnailList, true);
    }
    public function toMap() {
        $res = [];
        $res['OutputType'] = $this->outputType;
        $res['CoverURL'] = $this->coverURL;
        $res['Duration'] = $this->duration;
        $res['Status'] = $this->status;
        $res['Title'] = $this->title;
        $res['VideoId'] = $this->videoId;
        $res['MediaType'] = $this->mediaType;
        $res['CreationTime'] = $this->creationTime;
        $res['TranscodeMode'] = $this->transcodeMode;
        $res['ThumbnailList'] = null !== $this->thumbnailList ? $this->thumbnailList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return videoBase
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OutputType'])){
            $model->outputType = $map['OutputType'];
        }
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
        if(isset($map['MediaType'])){
            $model->mediaType = $map['MediaType'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['TranscodeMode'])){
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if(isset($map['ThumbnailList'])){
            $model->thumbnailList = thumbnailList::fromMap($map['ThumbnailList']);
        }
        return $model;
    }
    /**
     * @description outputType
     * @var string
     */
    public $outputType;

    /**
     * @description coverURL
     * @var string
     */
    public $coverURL;

    /**
     * @description duration
     * @var string
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
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description mediaType
     * @var string
     */
    public $mediaType;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description transcodeMode
     * @var string
     */
    public $transcodeMode;

    /**
     * @description thumbnailList
     * @var thumbnailList
     */
    public $thumbnailList;

}
