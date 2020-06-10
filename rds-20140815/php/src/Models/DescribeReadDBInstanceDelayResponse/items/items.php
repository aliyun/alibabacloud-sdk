<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items\readDBInstanceNames;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items\readDelayTimes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items\readonlyInstanceDelay;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description readonlyInstanceDelay
     *
     * @var readonlyInstanceDelay
     */
    public $readonlyInstanceDelay;

    /**
     * @description readDBInstanceNames
     *
     * @var readDBInstanceNames
     */
    public $readDBInstanceNames;

    /**
     * @description readDelayTimes
     *
     * @var readDelayTimes
     */
    public $readDelayTimes;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'readonlyInstanceDelay' => 'ReadonlyInstanceDelay',
        'readDBInstanceNames'   => 'ReadDBInstanceNames',
        'readDelayTimes'        => 'ReadDelayTimes',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('readonlyInstanceDelay', $this->readonlyInstanceDelay, true);
        Model::validateRequired('readDBInstanceNames', $this->readDBInstanceNames, true);
        Model::validateRequired('readDelayTimes', $this->readDelayTimes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->readonlyInstanceDelay) {
            $res['ReadonlyInstanceDelay'] = null !== $this->readonlyInstanceDelay ? $this->readonlyInstanceDelay->toMap() : null;
        }
        if (null !== $this->readDBInstanceNames) {
            $res['ReadDBInstanceNames'] = null !== $this->readDBInstanceNames ? $this->readDBInstanceNames->toMap() : null;
        }
        if (null !== $this->readDelayTimes) {
            $res['ReadDelayTimes'] = null !== $this->readDelayTimes ? $this->readDelayTimes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ReadonlyInstanceDelay'])) {
            $model->readonlyInstanceDelay = readonlyInstanceDelay::fromMap($map['ReadonlyInstanceDelay']);
        }
        if (isset($map['ReadDBInstanceNames'])) {
            $model->readDBInstanceNames = readDBInstanceNames::fromMap($map['ReadDBInstanceNames']);
        }
        if (isset($map['ReadDelayTimes'])) {
            $model->readDelayTimes = readDelayTimes::fromMap($map['ReadDelayTimes']);
        }

        return $model;
    }
}
