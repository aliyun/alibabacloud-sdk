<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponse\items;

use AlibabaCloud\Tea\Model;

class DBInstanceExpireTime extends Model
{
    /**
     * @description instanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description instanceDescription
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description endTimeStr
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description dbInstanceStatusDesc
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description lockMode
     *
     * @var string
     */
    public $lockMode;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'expireTime'            => 'ExpireTime',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'lockMode'              => 'LockMode',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceExpireTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        return $model;
    }
}
