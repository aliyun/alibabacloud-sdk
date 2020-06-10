<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse\mezzanine\audioStreamList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse\mezzanine\videoStreamList;
use AlibabaCloud\Tea\Model;

class mezzanine extends Model
{
    /**
     * @description mediaId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description bitrate
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description createTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description durationStr
     *
     * @var string
     */
    public $duration;

    /**
     * @description fps
     *
     * @var string
     */
    public $fps;

    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description size
     *
     * @var int
     */
    public $size;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description fileURL
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description fileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description crc64
     *
     * @var string
     */
    public $CRC64;

    /**
     * @description preprocessStatus
     *
     * @var string
     */
    public $preprocessStatus;

    /**
     * @description outputType
     *
     * @var string
     */
    public $outputType;

    /**
     * @description audioStreamList
     *
     * @var array
     */
    public $audioStreamList;

    /**
     * @description videoStreamList
     *
     * @var array
     */
    public $videoStreamList;
    protected $_name = [
        'videoId'          => 'VideoId',
        'bitrate'          => 'Bitrate',
        'creationTime'     => 'CreationTime',
        'duration'         => 'Duration',
        'fps'              => 'Fps',
        'height'           => 'Height',
        'width'            => 'Width',
        'size'             => 'Size',
        'status'           => 'Status',
        'fileURL'          => 'FileURL',
        'fileName'         => 'FileName',
        'CRC64'            => 'CRC64',
        'preprocessStatus' => 'PreprocessStatus',
        'outputType'       => 'OutputType',
        'audioStreamList'  => 'AudioStreamList',
        'videoStreamList'  => 'VideoStreamList',
    ];

    public function validate()
    {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('fps', $this->fps, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('fileURL', $this->fileURL, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('CRC64', $this->CRC64, true);
        Model::validateRequired('preprocessStatus', $this->preprocessStatus, true);
        Model::validateRequired('outputType', $this->outputType, true);
        Model::validateRequired('audioStreamList', $this->audioStreamList, true);
        Model::validateRequired('videoStreamList', $this->videoStreamList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->CRC64) {
            $res['CRC64'] = $this->CRC64;
        }
        if (null !== $this->preprocessStatus) {
            $res['PreprocessStatus'] = $this->preprocessStatus;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->audioStreamList) {
            $res['AudioStreamList'] = [];
            if (null !== $this->audioStreamList && \is_array($this->audioStreamList)) {
                $n = 0;
                foreach ($this->audioStreamList as $item) {
                    $res['AudioStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoStreamList) {
            $res['VideoStreamList'] = [];
            if (null !== $this->videoStreamList && \is_array($this->videoStreamList)) {
                $n = 0;
                foreach ($this->videoStreamList as $item) {
                    $res['VideoStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mezzanine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['CRC64'])) {
            $model->CRC64 = $map['CRC64'];
        }
        if (isset($map['PreprocessStatus'])) {
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['AudioStreamList'])) {
            if (!empty($map['AudioStreamList'])) {
                $model->audioStreamList = [];
                $n                      = 0;
                foreach ($map['AudioStreamList'] as $item) {
                    $model->audioStreamList[$n++] = null !== $item ? audioStreamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoStreamList'])) {
            if (!empty($map['VideoStreamList'])) {
                $model->videoStreamList = [];
                $n                      = 0;
                foreach ($map['VideoStreamList'] as $item) {
                    $model->videoStreamList[$n++] = null !== $item ? videoStreamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
