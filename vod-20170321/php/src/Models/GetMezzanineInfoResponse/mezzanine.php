<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse\mezzanine\audioStreamList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse\mezzanine\videoStreamList;

class mezzanine extends Model {
    protected $_name = [
        'videoId' => 'VideoId',
        'bitrate' => 'Bitrate',
        'creationTime' => 'CreationTime',
        'duration' => 'Duration',
        'fps' => 'Fps',
        'height' => 'Height',
        'width' => 'Width',
        'size' => 'Size',
        'status' => 'Status',
        'fileURL' => 'FileURL',
        'fileName' => 'FileName',
        'CRC64' => 'CRC64',
        'preprocessStatus' => 'PreprocessStatus',
        'outputType' => 'OutputType',
        'audioStreamList' => 'AudioStreamList',
        'videoStreamList' => 'VideoStreamList',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['VideoId'] = $this->videoId;
        $res['Bitrate'] = $this->bitrate;
        $res['CreationTime'] = $this->creationTime;
        $res['Duration'] = $this->duration;
        $res['Fps'] = $this->fps;
        $res['Height'] = $this->height;
        $res['Width'] = $this->width;
        $res['Size'] = $this->size;
        $res['Status'] = $this->status;
        $res['FileURL'] = $this->fileURL;
        $res['FileName'] = $this->fileName;
        $res['CRC64'] = $this->CRC64;
        $res['PreprocessStatus'] = $this->preprocessStatus;
        $res['OutputType'] = $this->outputType;
        $res['AudioStreamList'] = [];
        if(null !== $this->audioStreamList && is_array($this->audioStreamList)){
            $n = 0;
            foreach($this->audioStreamList as $item){
                $res['AudioStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['VideoStreamList'] = [];
        if(null !== $this->videoStreamList && is_array($this->videoStreamList)){
            $n = 0;
            foreach($this->videoStreamList as $item){
                $res['VideoStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return mezzanine
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['Bitrate'])){
            $model->bitrate = $map['Bitrate'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Fps'])){
            $model->fps = $map['Fps'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Size'])){
            $model->size = $map['Size'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['FileURL'])){
            $model->fileURL = $map['FileURL'];
        }
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
        }
        if(isset($map['CRC64'])){
            $model->CRC64 = $map['CRC64'];
        }
        if(isset($map['PreprocessStatus'])){
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if(isset($map['OutputType'])){
            $model->outputType = $map['OutputType'];
        }
        if(isset($map['AudioStreamList'])){
            if(!empty($map['AudioStreamList'])){
                $model->audioStreamList = [];
                $n = 0;
                foreach($map['AudioStreamList'] as $item) {
                    $model->audioStreamList[$n++] = null !== $item ? audioStreamList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['VideoStreamList'])){
            if(!empty($map['VideoStreamList'])){
                $model->videoStreamList = [];
                $n = 0;
                foreach($map['VideoStreamList'] as $item) {
                    $model->videoStreamList[$n++] = null !== $item ? videoStreamList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $videoId;

    /**
     * @description bitrate
     * @var string
     */
    public $bitrate;

    /**
     * @description createTime
     * @var string
     */
    public $creationTime;

    /**
     * @description durationStr
     * @var string
     */
    public $duration;

    /**
     * @description fps
     * @var string
     */
    public $fps;

    /**
     * @description height
     * @var integer
     */
    public $height;

    /**
     * @description width
     * @var integer
     */
    public $width;

    /**
     * @description size
     * @var integer
     */
    public $size;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description fileURL
     * @var string
     */
    public $fileURL;

    /**
     * @description fileName
     * @var string
     */
    public $fileName;

    /**
     * @description crc64
     * @var string
     */
    public $CRC64;

    /**
     * @description preprocessStatus
     * @var string
     */
    public $preprocessStatus;

    /**
     * @description outputType
     * @var string
     */
    public $outputType;

    /**
     * @description audioStreamList
     * @var array
     */
    public $audioStreamList;

    /**
     * @description videoStreamList
     * @var array
     */
    public $videoStreamList;

}
