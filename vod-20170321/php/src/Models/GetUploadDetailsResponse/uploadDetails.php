<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponse;

use AlibabaCloud\Tea\Model;

class uploadDetails extends Model
{
    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description fileSize
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description uploadStatus
     *
     * @var string
     */
    public $uploadStatus;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description modificationTime
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description completionTime
     *
     * @var string
     */
    public $completionTime;

    /**
     * @description uploadSize
     *
     * @var int
     */
    public $uploadSize;

    /**
     * @description uploadRatio
     *
     * @var float
     */
    public $uploadRatio;

    /**
     * @description uploadIp
     *
     * @var string
     */
    public $uploadIP;

    /**
     * @description uploadSource
     *
     * @var string
     */
    public $uploadSource;

    /**
     * @description deviceModel
     *
     * @var string
     */
    public $deviceModel;
    protected $_name = [
        'mediaId'          => 'MediaId',
        'title'            => 'Title',
        'fileSize'         => 'FileSize',
        'status'           => 'Status',
        'uploadStatus'     => 'UploadStatus',
        'creationTime'     => 'CreationTime',
        'modificationTime' => 'ModificationTime',
        'completionTime'   => 'CompletionTime',
        'uploadSize'       => 'UploadSize',
        'uploadRatio'      => 'UploadRatio',
        'uploadIP'         => 'UploadIP',
        'uploadSource'     => 'UploadSource',
        'deviceModel'      => 'DeviceModel',
    ];

    public function validate()
    {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('uploadStatus', $this->uploadStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('completionTime', $this->completionTime, true);
        Model::validateRequired('uploadSize', $this->uploadSize, true);
        Model::validateRequired('uploadRatio', $this->uploadRatio, true);
        Model::validateRequired('uploadIP', $this->uploadIP, true);
        Model::validateRequired('uploadSource', $this->uploadSource, true);
        Model::validateRequired('deviceModel', $this->deviceModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uploadStatus) {
            $res['UploadStatus'] = $this->uploadStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->uploadSize) {
            $res['UploadSize'] = $this->uploadSize;
        }
        if (null !== $this->uploadRatio) {
            $res['UploadRatio'] = $this->uploadRatio;
        }
        if (null !== $this->uploadIP) {
            $res['UploadIP'] = $this->uploadIP;
        }
        if (null !== $this->uploadSource) {
            $res['UploadSource'] = $this->uploadSource;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UploadStatus'])) {
            $model->uploadStatus = $map['UploadStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['UploadSize'])) {
            $model->uploadSize = $map['UploadSize'];
        }
        if (isset($map['UploadRatio'])) {
            $model->uploadRatio = $map['UploadRatio'];
        }
        if (isset($map['UploadIP'])) {
            $model->uploadIP = $map['UploadIP'];
        }
        if (isset($map['UploadSource'])) {
            $model->uploadSource = $map['UploadSource'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }

        return $model;
    }
}
