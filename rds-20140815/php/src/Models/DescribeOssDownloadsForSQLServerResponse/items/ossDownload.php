<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsForSQLServerResponse\items;

use AlibabaCloud\Tea\Model;

class ossDownload extends Model {
    protected $_name = [
        'fileName' => 'FileName',
        'createTime' => 'CreateTime',
        'bakType' => 'BakType',
        'fileSize' => 'FileSize',
        'status' => 'Status',
        'isAvail' => 'IsAvail',
        'desc' => 'Desc',
    ];
    public function validate() {
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('bakType', $this->bakType, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('isAvail', $this->isAvail, true);
        Model::validateRequired('desc', $this->desc, true);
    }
    public function toMap() {
        $res = [];
        $res['FileName'] = $this->fileName;
        $res['CreateTime'] = $this->createTime;
        $res['BakType'] = $this->bakType;
        $res['FileSize'] = $this->fileSize;
        $res['Status'] = $this->status;
        $res['IsAvail'] = $this->isAvail;
        $res['Desc'] = $this->desc;
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
        if(isset($map['BakType'])){
            $model->bakType = $map['BakType'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['IsAvail'])){
            $model->isAvail = $map['IsAvail'];
        }
        if(isset($map['Desc'])){
            $model->desc = $map['Desc'];
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
     * @description bakType
     * @var string
     */
    public $bakType;

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
    public $isAvail;

    /**
     * @description desc
     * @var string
     */
    public $desc;

}
