<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponse\configParameters;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponse\runningParameters;

class DescribeParametersResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'configParameters' => 'ConfigParameters',
        'runningParameters' => 'RunningParameters',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('configParameters', $this->configParameters, true);
        Model::validateRequired('runningParameters', $this->runningParameters, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Engine'] = $this->engine;
        $res['EngineVersion'] = $this->engineVersion;
        $res['ConfigParameters'] = null !== $this->configParameters ? $this->configParameters->toMap() : null;
        $res['RunningParameters'] = null !== $this->runningParameters ? $this->runningParameters->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeParametersResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['ConfigParameters'])){
            $model->configParameters = configParameters::fromMap($map['ConfigParameters']);
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
     * @description data.engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description data.configParameters
     * @var configParameters
     */
    public $configParameters;

    /**
     * @description data.runningParameters
     * @var runningParameters
     */
    public $runningParameters;

}
