<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse\performanceKeys;

class DescribeDBNodePerformanceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBNodeId' => 'DBNodeId',
        'engine' => 'Engine',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBNodeId', $this->DBNodeId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('DBType', $this->DBType, true);
        Model::validateRequired('DBVersion', $this->DBVersion, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('performanceKeys', $this->performanceKeys, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBNodeId'] = $this->DBNodeId;
        $res['Engine'] = $this->engine;
        $res['DBType'] = $this->DBType;
        $res['DBVersion'] = $this->DBVersion;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['PerformanceKeys'] = null !== $this->performanceKeys ? $this->performanceKeys->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBNodePerformanceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBNodeId'])){
            $model->DBNodeId = $map['DBNodeId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['DBType'])){
            $model->DBType = $map['DBType'];
        }
        if(isset($map['DBVersion'])){
            $model->DBVersion = $map['DBVersion'];
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
     * @description data.dbInstanceId
     * @var string
     */
    public $DBNodeId;

    /**
     * @description data.engine
     * @var string
     */
    public $engine;

    /**
     * @description data.dbType
     * @var string
     */
    public $DBType;

    /**
     * @description data.dbVersion
     * @var string
     */
    public $DBVersion;

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
