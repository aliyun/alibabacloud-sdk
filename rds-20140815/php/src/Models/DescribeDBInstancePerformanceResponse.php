<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponse\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancePerformanceResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description data.startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description data.endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description data.performanceKeys
     *
     * @var performanceKeys
     */
    public $performanceKeys;
    protected $_name = [
        'requestId'       => 'RequestId',
        'DBInstanceId'    => 'DBInstanceId',
        'engine'          => 'Engine',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('performanceKeys', $this->performanceKeys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->performanceKeys) {
            $res['PerformanceKeys'] = null !== $this->performanceKeys ? $this->performanceKeys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PerformanceKeys'])) {
            $model->performanceKeys = performanceKeys::fromMap($map['PerformanceKeys']);
        }

        return $model;
    }
}
