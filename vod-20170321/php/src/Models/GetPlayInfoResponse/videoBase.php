<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase\thumbnailList;
use AlibabaCloud\Tea\Model;

class videoBase extends Model
{
    /**
     * @description outputType
     *
     * @var string
     */
    public $outputType;

    /**
     * @description coverURL
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description duration
     *
     * @var string
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
     * @description videoId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description mediaType
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description transcodeMode
     *
     * @var string
     */
    public $transcodeMode;

    /**
     * @description thumbnailList
     *
     * @var thumbnailList
     */
    public $thumbnailList;
    protected $_name = [
        'outputType'    => 'OutputType',
        'coverURL'      => 'CoverURL',
        'duration'      => 'Duration',
        'status'        => 'Status',
        'title'         => 'Title',
        'videoId'       => 'VideoId',
        'mediaType'     => 'MediaType',
        'creationTime'  => 'CreationTime',
        'transcodeMode' => 'TranscodeMode',
        'thumbnailList' => 'ThumbnailList',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
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
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->transcodeMode) {
            $res['TranscodeMode'] = $this->transcodeMode;
        }
        if (null !== $this->thumbnailList) {
            $res['ThumbnailList'] = null !== $this->thumbnailList ? $this->thumbnailList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoBase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
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
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['TranscodeMode'])) {
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if (isset($map['ThumbnailList'])) {
            $model->thumbnailList = thumbnailList::fromMap($map['ThumbnailList']);
        }

        return $model;
    }
}
