<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponse\transcodeTask\transcodeJobInfoList;

use AlibabaCloud\Tea\Model;

class outputFile extends Model {
    protected $_name = [
        'width' => 'Width',
        'height' => 'Height',
        'bitrate' => 'Bitrate',
        'fps' => 'Fps',
        'format' => 'Format',
        'duration' => 'Duration',
        'filesize' => 'Filesize',
        'encryption' => 'Encryption',
        'audioStreamList' => 'AudioStreamList',
        'videoStreamList' => 'VideoStreamList',
        'subtitleStreamList' => 'SubtitleStreamList',
        'outputFileUrl' => 'OutputFileUrl',
        'watermarkIdList' => 'WatermarkIdList',
    ];
    public function validate() {
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('fps', $this->fps, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('filesize', $this->filesize, true);
        Model::validateRequired('encryption', $this->encryption, true);
        Model::validateRequired('audioStreamList', $this->audioStreamList, true);
        Model::validateRequired('videoStreamList', $this->videoStreamList, true);
        Model::validateRequired('subtitleStreamList', $this->subtitleStreamList, true);
        Model::validateRequired('outputFileUrl', $this->outputFileUrl, true);
        Model::validateRequired('watermarkIdList', $this->watermarkIdList, true);
    }
    public function toMap() {
        $res = [];
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['Bitrate'] = $this->bitrate;
        $res['Fps'] = $this->fps;
        $res['Format'] = $this->format;
        $res['Duration'] = $this->duration;
        $res['Filesize'] = $this->filesize;
        $res['Encryption'] = $this->encryption;
        $res['AudioStreamList'] = $this->audioStreamList;
        $res['VideoStreamList'] = $this->videoStreamList;
        $res['SubtitleStreamList'] = $this->subtitleStreamList;
        $res['OutputFileUrl'] = $this->outputFileUrl;
        $res['WatermarkIdList'] = [];
        if(null !== $this->watermarkIdList){
            $res['WatermarkIdList'] = $this->watermarkIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return outputFile
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Bitrate'])){
            $model->bitrate = $map['Bitrate'];
        }
        if(isset($map['Fps'])){
            $model->fps = $map['Fps'];
        }
        if(isset($map['Format'])){
            $model->format = $map['Format'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Filesize'])){
            $model->filesize = $map['Filesize'];
        }
        if(isset($map['Encryption'])){
            $model->encryption = $map['Encryption'];
        }
        if(isset($map['AudioStreamList'])){
            $model->audioStreamList = $map['AudioStreamList'];
        }
        if(isset($map['VideoStreamList'])){
            $model->videoStreamList = $map['VideoStreamList'];
        }
        if(isset($map['SubtitleStreamList'])){
            $model->subtitleStreamList = $map['SubtitleStreamList'];
        }
        if(isset($map['OutputFileUrl'])){
            $model->outputFileUrl = $map['OutputFileUrl'];
        }
        if(isset($map['WatermarkIdList'])){
            if(!empty($map['WatermarkIdList'])){
                $model->watermarkIdList = [];
                $model->watermarkIdList = $map['WatermarkIdList'];
            }
        }
        return $model;
    }
    /**
     * @description width
     * @var string
     */
    public $width;

    /**
     * @description height
     * @var string
     */
    public $height;

    /**
     * @description bitrate
     * @var string
     */
    public $bitrate;

    /**
     * @description fps
     * @var string
     */
    public $fps;

    /**
     * @description format
     * @var string
     */
    public $format;

    /**
     * @description duration
     * @var string
     */
    public $duration;

    /**
     * @description filesize
     * @var integer
     */
    public $filesize;

    /**
     * @description encryption
     * @var string
     */
    public $encryption;

    /**
     * @description audioStreamList
     * @var string
     */
    public $audioStreamList;

    /**
     * @description videoStreamList
     * @var string
     */
    public $videoStreamList;

    /**
     * @description subtitleStreamList
     * @var string
     */
    public $subtitleStreamList;

    /**
     * @description outputFileUrl
     * @var string
     */
    public $outputFileUrl;

    /**
     * @description watermarkIdList
     * @var array
     */
    public $watermarkIdList;

}
