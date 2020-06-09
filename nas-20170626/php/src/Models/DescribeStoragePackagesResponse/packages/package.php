<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesResponse\packages;

use AlibabaCloud\Tea\Model;

class package extends Model {
    protected $_name = [
        'startTime' => 'StartTime',
        'storageType' => 'StorageType',
        'status' => 'Status',
        'fileSystemId' => 'FileSystemId',
        'packageId' => 'PackageId',
        'expiredTime' => 'ExpiredTime',
        'size' => 'Size',
    ];
    public function validate() {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('packageId', $this->packageId, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        $res['StartTime'] = $this->startTime;
        $res['StorageType'] = $this->storageType;
        $res['Status'] = $this->status;
        $res['FileSystemId'] = $this->fileSystemId;
        $res['PackageId'] = $this->packageId;
        $res['ExpiredTime'] = $this->expiredTime;
        $res['Size'] = $this->size;
        return $res;
    }
    /**
     * @param array $map
     * @return package
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['StorageType'])){
            $model->storageType = $map['StorageType'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['PackageId'])){
            $model->packageId = $map['PackageId'];
        }
        if(isset($map['ExpiredTime'])){
            $model->expiredTime = $map['ExpiredTime'];
        }
        if(isset($map['Size'])){
            $model->size = $map['Size'];
        }
        return $model;
    }
    /**
     * @description startTimeStr
     * @var string
     */
    public $startTime;

    /**
     * @description packageType
     * @var string
     */
    public $storageType;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description packageId
     * @var string
     */
    public $packageId;

    /**
     * @description endTimeStr
     * @var string
     */
    public $expiredTime;

    /**
     * @description size
     * @var integer
     */
    public $size;

}
