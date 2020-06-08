<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponse\parameters;

class DescribeParameterTemplatesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'parameterCount' => 'ParameterCount',
        'parameters' => 'Parameters',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('parameterCount', $this->parameterCount, true);
        Model::validateRequired('parameters', $this->parameters, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Engine'] = $this->engine;
        $res['EngineVersion'] = $this->engineVersion;
        $res['ParameterCount'] = $this->parameterCount;
        $res['Parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeParameterTemplatesResponse
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
        if(isset($map['ParameterCount'])){
            $model->parameterCount = $map['ParameterCount'];
        }
        if(isset($map['Parameters'])){
            $model->parameters = parameters::fromMap($map['Parameters']);
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
     * @description data.parameterNumbers
     * @var string
     */
    public $parameterCount;

    /**
     * @description data.parameters
     * @var parameters
     */
    public $parameters;

}
