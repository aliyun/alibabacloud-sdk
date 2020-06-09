<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDetachedBackupsRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'backupId' => 'BackupId',
        'backupStatus' => 'BackupStatus',
        'backupMode' => 'BackupMode',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'region' => 'Region',
    ];
    public function validate() {
        Model::validateRequired('region', $this->region, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['BackupId'] = $this->backupId;
        $res['BackupStatus'] = $this->backupStatus;
        $res['BackupMode'] = $this->backupMode;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['Region'] = $this->region;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDetachedBackupsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['BackupId'])){
            $model->backupId = $map['BackupId'];
        }
        if(isset($map['BackupStatus'])){
            $model->backupStatus = $map['BackupStatus'];
        }
        if(isset($map['BackupMode'])){
            $model->backupMode = $map['BackupMode'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        return $model;
    }
    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description backupId
     * @var string
     */
    public $backupId;

    /**
     * @description backupSetStatus
     * @var string
     */
    public $backupStatus;

    /**
     * @description jobMode
     * @var string
     */
    public $backupMode;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description maxRecordsPerPage
     * @var integer
     */
    public $pageSize;

    /**
     * @description pageNumbers
     * @var integer
     */
    public $pageNumber;

    /**
     * @description region
     * @var string
     */
    public $region;

}
