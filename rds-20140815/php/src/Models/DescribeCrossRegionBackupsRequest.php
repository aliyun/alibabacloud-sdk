<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeCrossRegionBackupsRequest extends Model
{
    /**
     * @description description: 阿里云颁发给用户的访问服务所用的密钥ID。;
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description description: 实例ID。;
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 实例所在地域ID。;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: 跨地域备份目的地域ID。;
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description description: 跨地域备份文件ID。>**CrossBackupId**和起止时间参数（**StartTime**、**EndTime**）必须传入其中一组。;
     *
     * @var int
     */
    public $crossBackupId;

    /**
     * @description description: 查询开始时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $startTime;

    /**
     * @description description: 查询结束时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $endTime;

    /**
     * @description description: 每页记录数，取值：* **30**；* **50**；* **100**。默认值：30。;
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description description: 页码，取值：大于0且不超过Integer的最大值。默认值：**1**。;
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'DBInstanceId'         => 'DBInstanceId',
        'regionId'             => 'RegionId',
        'crossBackupRegion'    => 'CrossBackupRegion',
        'crossBackupId'        => 'CrossBackupId',
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
        'pageSize'             => 'PageSize',
        'pageNumber'           => 'PageNumber',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossBackupId) {
            $res['CrossBackupId'] = $this->crossBackupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCrossRegionBackupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossBackupId'])) {
            $model->crossBackupId = $map['CrossBackupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
