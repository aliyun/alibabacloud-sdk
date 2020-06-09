<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse\fileSystemStatistics;

use AlibabaCloud\Tea\Model;

class fileSystemStatistic extends Model {
    protected $_name = [
        'fileSystemType' => 'FileSystemType',
        'totalCount' => 'TotalCount',
        'meteredSize' => 'MeteredSize',
        'expiredCount' => 'ExpiredCount',
        'expiringCount' => 'ExpiringCount',
    ];
    public function validate() {
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('meteredSize', $this->meteredSize, true);
        Model::validateRequired('expiredCount', $this->expiredCount, true);
        Model::validateRequired('expiringCount', $this->expiringCount, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemType'] = $this->fileSystemType;
        $res['TotalCount'] = $this->totalCount;
        $res['MeteredSize'] = $this->meteredSize;
        $res['ExpiredCount'] = $this->expiredCount;
        $res['ExpiringCount'] = $this->expiringCount;
        return $res;
    }
    /**
     * @param array $map
     * @return fileSystemStatistic
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['MeteredSize'])){
            $model->meteredSize = $map['MeteredSize'];
        }
        if(isset($map['ExpiredCount'])){
            $model->expiredCount = $map['ExpiredCount'];
        }
        if(isset($map['ExpiringCount'])){
            $model->expiringCount = $map['ExpiringCount'];
        }
        return $model;
    }
    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description meteredSize
     * @var integer
     */
    public $meteredSize;

    /**
     * @description expiredCount
     * @var integer
     */
    public $expiredCount;

    /**
     * @description expiringCount
     * @var integer
     */
    public $expiringCount;

}
