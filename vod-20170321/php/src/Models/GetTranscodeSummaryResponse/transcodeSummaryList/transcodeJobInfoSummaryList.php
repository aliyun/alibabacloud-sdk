<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponse\transcodeSummaryList;

use AlibabaCloud\Tea\Model;

class transcodeJobInfoSummaryList extends Model {
    protected $_name = [
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'transcodeJobStatus' => 'TranscodeJobStatus',
        'creationTime' => 'CreationTime',
        'completeTime' => 'CompleteTime',
        'transcodeProgress' => 'TranscodeProgress',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'definition' => 'Definition',
        'encryption' => 'Encryption',
        'width' => 'Width',
        'height' => 'Height',
        'bitrate' => 'Bitrate',
        'fps' => 'Fps',
        'format' => 'Format',
        'duration' => 'Duration',
        'filesize' => 'Filesize',
        'watermarkIdList' => 'WatermarkIdList',
    ];
    public function validate() {
        Model::validateRequired('transcodeTemplateId', $this->transcodeTemplateId, true);
        Model::validateRequired('transcodeJobStatus', $this->transcodeJobStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('completeTime', $this->completeTime, true);
        Model::validateRequired('transcodeProgress', $this->transcodeProgress, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('encryption', $this->encryption, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('fps', $this->fps, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('filesize', $this->filesize, true);
        Model::validateRequired('watermarkIdList', $this->watermarkIdList, true);
    }
    public function toMap() {
        $res = [];
        $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        $res['TranscodeJobStatus'] = $this->transcodeJobStatus;
        $res['CreationTime'] = $this->creationTime;
        $res['CompleteTime'] = $this->completeTime;
        $res['TranscodeProgress'] = $this->transcodeProgress;
        $res['ErrorCode'] = $this->errorCode;
        $res['ErrorMessage'] = $this->errorMessage;
        $res['Definition'] = $this->definition;
        $res['Encryption'] = $this->encryption;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        $res['Bitrate'] = $this->bitrate;
        $res['Fps'] = $this->fps;
        $res['Format'] = $this->format;
        $res['Duration'] = $this->duration;
        $res['Filesize'] = $this->filesize;
        $res['WatermarkIdList'] = [];
        if(null !== $this->watermarkIdList){
            $res['WatermarkIdList'] = $this->watermarkIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeJobInfoSummaryList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TranscodeTemplateId'])){
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }
        if(isset($map['TranscodeJobStatus'])){
            $model->transcodeJobStatus = $map['TranscodeJobStatus'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['CompleteTime'])){
            $model->completeTime = $map['CompleteTime'];
        }
        if(isset($map['TranscodeProgress'])){
            $model->transcodeProgress = $map['TranscodeProgress'];
        }
        if(isset($map['ErrorCode'])){
            $model->errorCode = $map['ErrorCode'];
        }
        if(isset($map['ErrorMessage'])){
            $model->errorMessage = $map['ErrorMessage'];
        }
        if(isset($map['Definition'])){
            $model->definition = $map['Definition'];
        }
        if(isset($map['Encryption'])){
            $model->encryption = $map['Encryption'];
        }
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
        if(isset($map['WatermarkIdList'])){
            if(!empty($map['WatermarkIdList'])){
                $model->watermarkIdList = [];
                $model->watermarkIdList = $map['WatermarkIdList'];
            }
        }
        return $model;
    }
    /**
     * @description transcodeTemplateId
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @description transcodeJobState
     * @var string
     */
    public $transcodeJobStatus;

    /**
     * @description startTime
     * @var string
     */
    public $creationTime;

    /**
     * @description finishTime
     * @var string
     */
    public $completeTime;

    /**
     * @description transcodeProgress
     * @var integer
     */
    public $transcodeProgress;

    /**
     * @description errorCode
     * @var string
     */
    public $errorCode;

    /**
     * @description errorMessage
     * @var string
     */
    public $errorMessage;

    /**
     * @description definition
     * @var string
     */
    public $definition;

    /**
     * @description encryption
     * @var string
     */
    public $encryption;

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
     * @description watermarkIdList
     * @var array
     */
    public $watermarkIdList;

}
