<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponse\performanceKeys;

class DescribeDBProxyPerformanceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('performanceKeys', $this->performanceKeys, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['PerformanceKeys'] = null !== $this->performanceKeys ? $this->performanceKeys->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBProxyPerformanceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['PerformanceKeys'])){
            $model->performanceKeys = performanceKeys::fromMap($map['PerformanceKeys']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.startTime
     * @var string
     */
    public $startTime;

    /**
     * @description data.endTime
     * @var string
     */
    public $endTime;

    /**
     * @description data.performanceKeys
     * @var performanceKeys
     */
    public $performanceKeys;

}
