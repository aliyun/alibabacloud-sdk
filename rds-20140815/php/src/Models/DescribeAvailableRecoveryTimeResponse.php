<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableRecoveryTimeResponse extends Model
{
    /**
     * @description description: 请求ID。;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: 跨地域备份文件可恢复的起始时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $recoveryBeginTime;

    /**
     * @description description: 跨地域备份文件可恢复的结束时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $recoveryEndTime;

    /**
     * @description data.dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 源实例所在地域ID。;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: 跨地域备份文件ID。;
     *
     * @var int
     */
    public $crossBackupId;
    protected $_name = [
        'requestId'         => 'RequestId',
        'recoveryBeginTime' => 'RecoveryBeginTime',
        'recoveryEndTime'   => 'RecoveryEndTime',
        'DBInstanceId'      => 'DBInstanceId',
        'regionId'          => 'RegionId',
        'crossBackupId'     => 'CrossBackupId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recoveryBeginTime', $this->recoveryBeginTime, true);
        Model::validateRequired('recoveryEndTime', $this->recoveryEndTime, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('crossBackupId', $this->crossBackupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recoveryBeginTime) {
            $res['RecoveryBeginTime'] = $this->recoveryBeginTime;
        }
        if (null !== $this->recoveryEndTime) {
            $res['RecoveryEndTime'] = $this->recoveryEndTime;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->crossBackupId) {
            $res['CrossBackupId'] = $this->crossBackupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableRecoveryTimeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecoveryBeginTime'])) {
            $model->recoveryBeginTime = $map['RecoveryBeginTime'];
        }
        if (isset($map['RecoveryEndTime'])) {
            $model->recoveryEndTime = $map['RecoveryEndTime'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CrossBackupId'])) {
            $model->crossBackupId = $map['CrossBackupId'];
        }

        return $model;
    }
}
