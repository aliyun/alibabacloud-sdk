<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponse\runningParameters;

class DescribeDBClusterParametersResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'engine' => 'Engine',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'runningParameters' => 'RunningParameters',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('DBType', $this->DBType, true);
        Model::validateRequired('DBVersion', $this->DBVersion, true);
        Model::validateRequired('runningParameters', $this->runningParameters, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Engine'] = $this->engine;
        $res['DBType'] = $this->DBType;
        $res['DBVersion'] = $this->DBVersion;
        $res['RunningParameters'] = null !== $this->runningParameters ? $this->runningParameters->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBClusterParametersResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
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
        if(isset($map['RunningParameters'])){
            $model->runningParameters = runningParameters::fromMap($map['RunningParameters']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

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
     * @description data.runningParameters
     * @var runningParameters
     */
    public $runningParameters;

}
