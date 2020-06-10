<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel\typeModels\typeModel\instanceModels;

use AlibabaCloud\Tea\Model;

class instanceModel extends Model
{
    /**
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description payType
     *
     * @var string
     */
    public $payType;

    /**
     * @description createdTime
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description expireTime
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description lockMode
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description statusDesc
     *
     * @var string
     */
    public $DBInstanceStatus;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'region'           => 'Region',
        'zoneId'           => 'ZoneId',
        'engine'           => 'Engine',
        'payType'          => 'PayType',
        'createdTime'      => 'CreatedTime',
        'expireTime'       => 'ExpireTime',
        'lockMode'         => 'LockMode',
        'DBInstanceStatus' => 'DBInstanceStatus',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }

        return $model;
    }
}
