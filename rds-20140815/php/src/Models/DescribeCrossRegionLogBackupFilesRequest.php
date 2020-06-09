<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeCrossRegionLogBackupFilesRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
        'crossBackupRegion' => 'CrossBackupRegion',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['RegionId'] = $this->regionId;
        $res['CrossBackupRegion'] = $this->crossBackupRegion;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCrossRegionLogBackupFilesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['CrossBackupRegion'])){
            $model->crossBackupRegion = $map['CrossBackupRegion'];
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
        return $model;
    }
    /**
     * @description description: 阿里云颁发给用户的访问服务所用的密钥ID。; 
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description description: 实例ID。; 
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 实例所在地域ID。可以通过接口[DescribeRegions](~~26243~~)查看地域ID。; 
     * @var string
     */
    public $regionId;

    /**
     * @description description: 跨地域备份目的地域ID。可以通过接口[DescribeCrossRegionBackupDBInstance](~~121737~~)查看地域ID。; 
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description description: 查询开始时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。; 
     * @var string
     */
    public $startTime;

    /**
     * @description description: 查询结束时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。; 
     * @var string
     */
    public $endTime;

    /**
     * @description description: 每页记录数，取值：* **30**；* **50**；* **100**。默认值：30。; 
     * @var integer
     */
    public $pageSize;

    /**
     * @description description: 页码，取值：大于0且不超过Integer的最大值。默认值：**1**。; 
     * @var integer
     */
    public $pageNumber;

}
