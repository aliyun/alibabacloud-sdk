<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightResponse\items;

use AlibabaCloud\Tea\Model;

class DBInstanceWeight extends Model
{
    /**
     * @description dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description dbInstanceType
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description readSQLDelayTime
     *
     * @var string
     */
    public $readonlyInstanceSQLDelayedTime;

    /**
     * @description availability
     *
     * @var string
     */
    public $availability;

    /**
     * @description weight
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'DBInstanceId'                   => 'DBInstanceId',
        'DBInstanceType'                 => 'DBInstanceType',
        'readonlyInstanceSQLDelayedTime' => 'ReadonlyInstanceSQLDelayedTime',
        'availability'                   => 'Availability',
        'weight'                         => 'Weight',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceType', $this->DBInstanceType, true);
        Model::validateRequired('readonlyInstanceSQLDelayedTime', $this->readonlyInstanceSQLDelayedTime, true);
        Model::validateRequired('availability', $this->availability, true);
        Model::validateRequired('weight', $this->weight, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->readonlyInstanceSQLDelayedTime) {
            $res['ReadonlyInstanceSQLDelayedTime'] = $this->readonlyInstanceSQLDelayedTime;
        }
        if (null !== $this->availability) {
            $res['Availability'] = $this->availability;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceWeight
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['ReadonlyInstanceSQLDelayedTime'])) {
            $model->readonlyInstanceSQLDelayedTime = $map['ReadonlyInstanceSQLDelayedTime'];
        }
        if (isset($map['Availability'])) {
            $model->availability = $map['Availability'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
