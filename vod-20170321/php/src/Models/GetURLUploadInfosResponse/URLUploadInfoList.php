<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponse;

use AlibabaCloud\Tea\Model;

class URLUploadInfoList extends Model
{
    /**
     * @description jobId
     *
     * @var string
     */
    public $jobId;

    /**
     * @description uploadUrl
     *
     * @var string
     */
    public $uploadURL;

    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description fileSize
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description userData
     *
     * @var string
     */
    public $userData;

    /**
     * @description errorCode
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description errorMessage
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description completeTime
     *
     * @var string
     */
    public $completeTime;
    protected $_name = [
        'jobId'        => 'JobId',
        'uploadURL'    => 'UploadURL',
        'mediaId'      => 'MediaId',
        'fileSize'     => 'FileSize',
        'status'       => 'Status',
        'userData'     => 'UserData',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'creationTime' => 'CreationTime',
        'completeTime' => 'CompleteTime',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->uploadURL) {
            $res['UploadURL'] = $this->uploadURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return URLUploadInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UploadURL'])) {
            $model->uploadURL = $map['UploadURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        return $model;
    }
}
