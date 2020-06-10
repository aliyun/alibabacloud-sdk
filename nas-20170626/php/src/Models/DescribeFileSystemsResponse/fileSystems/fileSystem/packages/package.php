<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\packages;

use AlibabaCloud\Tea\Model;

class package extends Model
{
    /**
     * @description packageId
     *
     * @var string
     */
    public $packageId;

    /**
     * @description packageType
     *
     * @var string
     */
    public $packageType;

    /**
     * @description size
     *
     * @var int
     */
    public $size;

    /**
     * @description startTimeStr
     *
     * @var string
     */
    public $startTime;

    /**
     * @description endTimeStr
     *
     * @var string
     */
    public $expiredTime;
    protected $_name = [
        'packageId'   => 'PackageId',
        'packageType' => 'PackageType',
        'size'        => 'Size',
        'startTime'   => 'StartTime',
        'expiredTime' => 'ExpiredTime',
    ];

    public function validate()
    {
        Model::validateRequired('packageId', $this->packageId, true);
        Model::validateRequired('packageType', $this->packageType, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
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
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        return $model;
    }
}
