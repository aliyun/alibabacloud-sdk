<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponse;

use AlibabaCloud\Tea\Model;

class uploadDetails extends Model {
    protected $_name = [
        'mediaId' => 'MediaId',
        'title' => 'Title',
        'fileSize' => 'FileSize',
        'status' => 'Status',
        'uploadStatus' => 'UploadStatus',
        'creationTime' => 'CreationTime',
        'modificationTime' => 'ModificationTime',
        'completionTime' => 'CompletionTime',
        'uploadSize' => 'UploadSize',
        'uploadRatio' => 'UploadRatio',
        'uploadIP' => 'UploadIP',
        'uploadSource' => 'UploadSource',
        'deviceModel' => 'DeviceModel',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['MediaId'] = $this->mediaId;
        $res['Title'] = $this->title;
        $res['FileSize'] = $this->fileSize;
        $res['Status'] = $this->status;
        $res['UploadStatus'] = $this->uploadStatus;
        $res['CreationTime'] = $this->creationTime;
        $res['ModificationTime'] = $this->modificationTime;
        $res['CompletionTime'] = $this->completionTime;
        $res['UploadSize'] = $this->uploadSize;
        $res['UploadRatio'] = $this->uploadRatio;
        $res['UploadIP'] = $this->uploadIP;
        $res['UploadSource'] = $this->uploadSource;
        $res['DeviceModel'] = $this->deviceModel;
        return $res;
    }
    /**
     * @param array $map
     * @return uploadDetails
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['UploadStatus'])){
            $model->uploadStatus = $map['UploadStatus'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModificationTime'])){
            $model->modificationTime = $map['ModificationTime'];
        }
        if(isset($map['CompletionTime'])){
            $model->completionTime = $map['CompletionTime'];
        }
        if(isset($map['UploadSize'])){
            $model->uploadSize = $map['UploadSize'];
        }
        if(isset($map['UploadRatio'])){
            $model->uploadRatio = $map['UploadRatio'];
        }
        if(isset($map['UploadIP'])){
            $model->uploadIP = $map['UploadIP'];
        }
        if(isset($map['UploadSource'])){
            $model->uploadSource = $map['UploadSource'];
        }
        if(isset($map['DeviceModel'])){
            $model->deviceModel = $map['DeviceModel'];
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description fileSize
     * @var integer
     */
    public $fileSize;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description uploadStatus
     * @var string
     */
    public $uploadStatus;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description modificationTime
     * @var string
     */
    public $modificationTime;

    /**
     * @description completionTime
     * @var string
     */
    public $completionTime;

    /**
     * @description uploadSize
     * @var integer
     */
    public $uploadSize;

    /**
     * @description uploadRatio
     * @var float
     */
    public $uploadRatio;

    /**
     * @description uploadIp
     * @var string
     */
    public $uploadIP;

    /**
     * @description uploadSource
     * @var string
     */
    public $uploadSource;

    /**
     * @description deviceModel
     * @var string
     */
    public $deviceModel;

}
