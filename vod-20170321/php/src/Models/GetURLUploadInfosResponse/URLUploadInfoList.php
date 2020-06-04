<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponse;

use AlibabaCloud\Tea\Model;

class URLUploadInfoList extends Model {
    protected $_name = [
        'jobId' => 'JobId',
        'uploadURL' => 'UploadURL',
        'mediaId' => 'MediaId',
        'fileSize' => 'FileSize',
        'status' => 'Status',
        'userData' => 'UserData',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'creationTime' => 'CreationTime',
        'completeTime' => 'CompleteTime',
    ];
    public function validate() {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('uploadURL', $this->uploadURL, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('userData', $this->userData, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('completeTime', $this->completeTime, true);
    }
    public function toMap() {
        $res = [];
        $res['JobId'] = $this->jobId;
        $res['UploadURL'] = $this->uploadURL;
        $res['MediaId'] = $this->mediaId;
        $res['FileSize'] = $this->fileSize;
        $res['Status'] = $this->status;
        $res['UserData'] = $this->userData;
        $res['ErrorCode'] = $this->errorCode;
        $res['ErrorMessage'] = $this->errorMessage;
        $res['CreationTime'] = $this->creationTime;
        $res['CompleteTime'] = $this->completeTime;
        return $res;
    }
    /**
     * @param array $map
     * @return URLUploadInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        if(isset($map['UploadURL'])){
            $model->uploadURL = $map['UploadURL'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['ErrorCode'])){
            $model->errorCode = $map['ErrorCode'];
        }
        if(isset($map['ErrorMessage'])){
            $model->errorMessage = $map['ErrorMessage'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['CompleteTime'])){
            $model->completeTime = $map['CompleteTime'];
        }
        return $model;
    }
    /**
     * @description jobId
     * @var string
     */
    public $jobId;

    /**
     * @description uploadUrl
     * @var string
     */
    public $uploadURL;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description fileSize
     * @var string
     */
    public $fileSize;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description userData
     * @var string
     */
    public $userData;

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
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description completeTime
     * @var string
     */
    public $completeTime;

}
