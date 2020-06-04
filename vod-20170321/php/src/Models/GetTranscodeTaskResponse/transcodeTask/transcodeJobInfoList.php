<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponse\transcodeTask;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponse\transcodeTask\transcodeJobInfoList\outputFile;

class transcodeJobInfoList extends Model {
    protected $_name = [
        'transcodeJobId' => 'TranscodeJobId',
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'transcodeJobStatus' => 'TranscodeJobStatus',
        'creationTime' => 'CreationTime',
        'completeTime' => 'CompleteTime',
        'transcodeProgress' => 'TranscodeProgress',
        'inputFileUrl' => 'InputFileUrl',
        'priority' => 'Priority',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'definition' => 'Definition',
        'outputFile' => 'OutputFile',
    ];
    public function validate() {
        Model::validateRequired('transcodeJobId', $this->transcodeJobId, true);
        Model::validateRequired('transcodeTemplateId', $this->transcodeTemplateId, true);
        Model::validateRequired('transcodeJobStatus', $this->transcodeJobStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('completeTime', $this->completeTime, true);
        Model::validateRequired('transcodeProgress', $this->transcodeProgress, true);
        Model::validateRequired('inputFileUrl', $this->inputFileUrl, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('outputFile', $this->outputFile, true);
    }
    public function toMap() {
        $res = [];
        $res['TranscodeJobId'] = $this->transcodeJobId;
        $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        $res['TranscodeJobStatus'] = $this->transcodeJobStatus;
        $res['CreationTime'] = $this->creationTime;
        $res['CompleteTime'] = $this->completeTime;
        $res['TranscodeProgress'] = $this->transcodeProgress;
        $res['InputFileUrl'] = $this->inputFileUrl;
        $res['Priority'] = $this->priority;
        $res['ErrorCode'] = $this->errorCode;
        $res['ErrorMessage'] = $this->errorMessage;
        $res['Definition'] = $this->definition;
        $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeJobInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TranscodeJobId'])){
            $model->transcodeJobId = $map['TranscodeJobId'];
        }
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
        if(isset($map['InputFileUrl'])){
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
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
        if(isset($map['OutputFile'])){
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        return $model;
    }
    /**
     * @description transcodeJobId
     * @var string
     */
    public $transcodeJobId;

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
     * @description inputFileUrl
     * @var string
     */
    public $inputFileUrl;

    /**
     * @description priority
     * @var string
     */
    public $priority;

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
     * @description outputFile
     * @var outputFile
     */
    public $outputFile;

}
