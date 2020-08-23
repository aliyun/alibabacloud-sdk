<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse\fileSystemStatistics;

use AlibabaCloud\Tea\Model;

class fileSystemStatistic extends Model
{
    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var int
     */
    public $expiredCount;

    /**
     * @var int
     */
    public $expiringCount;
    protected $_name = [
        'fileSystemType' => 'FileSystemType',
        'totalCount'     => 'TotalCount',
        'meteredSize'    => 'MeteredSize',
        'expiredCount'   => 'ExpiredCount',
        'expiringCount'  => 'ExpiringCount',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('meteredSize', $this->meteredSize, true);
        Model::validateRequired('expiredCount', $this->expiredCount, true);
        Model::validateRequired('expiringCount', $this->expiringCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->expiredCount) {
            $res['ExpiredCount'] = $this->expiredCount;
        }
        if (null !== $this->expiringCount) {
            $res['ExpiringCount'] = $this->expiringCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystemStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['ExpiredCount'])) {
            $model->expiredCount = $map['ExpiredCount'];
        }
        if (isset($map['ExpiringCount'])) {
            $model->expiringCount = $map['ExpiringCount'];
        }

        return $model;
    }
}
