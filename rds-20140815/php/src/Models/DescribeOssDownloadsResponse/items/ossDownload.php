<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponse\items;

use AlibabaCloud\Tea\Model;

class ossDownload extends Model {
    protected $_name = [
        'fileName' => 'FileName',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'backupMode' => 'BackupMode',
        'fileSize' => 'FileSize',
        'status' => 'Status',
        'isAvailable' => 'IsAvailable',
        'description' => 'Description',
    ];
    public function validate() {
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('backupMode', $this->backupMode, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('isAvailable', $this->isAvailable, true);
        Model::validateRequired('description', $this->description, true);
    }
    public function toMap() {
        $res = [];
        $res['FileName'] = $this->fileName;
        $res['CreateTime'] = $this->createTime;
        $res['EndTime'] = $this->endTime;
        $res['BackupMode'] = $this->backupMode;
        $res['FileSize'] = $this->fileSize;
        $res['Status'] = $this->status;
        $res['IsAvailable'] = $this->isAvailable;
        $res['Description'] = $this->description;
        return $res;
    }
    /**
     * @param array $map
     * @return ossDownload
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['BackupMode'])){
            $model->backupMode = $map['BackupMode'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['IsAvailable'])){
            $model->isAvailable = $map['IsAvailable'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        return $model;
    }
    /**
     * @description fileName
     * @var string
     */
    public $fileName;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description bakType
     * @var string
     */
    public $backupMode;

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
     * @description isAvail
     * @var string
     */
    public $isAvailable;

    /**
     * @description desc
     * @var string
     */
    public $description;

}
