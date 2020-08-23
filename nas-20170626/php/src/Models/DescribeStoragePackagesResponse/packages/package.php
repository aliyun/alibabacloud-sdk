<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesResponse\packages;

use AlibabaCloud\Tea\Model;

class package extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'startTime'    => 'StartTime',
        'storageType'  => 'StorageType',
        'status'       => 'Status',
        'fileSystemId' => 'FileSystemId',
        'packageId'    => 'PackageId',
        'expiredTime'  => 'ExpiredTime',
        'size'         => 'Size',
    ];

    public function validate()
    {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('packageId', $this->packageId, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('size', $this->size, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return package
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
