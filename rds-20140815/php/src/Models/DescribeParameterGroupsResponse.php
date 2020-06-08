<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponse\parameterGroups;

class DescribeParameterGroupsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'signalForOptimizeParams' => 'SignalForOptimizeParams',
        'parameterGroups' => 'ParameterGroups',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('signalForOptimizeParams', $this->signalForOptimizeParams, true);
        Model::validateRequired('parameterGroups', $this->parameterGroups, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SignalForOptimizeParams'] = $this->signalForOptimizeParams;
        $res['ParameterGroups'] = null !== $this->parameterGroups ? $this->parameterGroups->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeParameterGroupsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SignalForOptimizeParams'])){
            $model->signalForOptimizeParams = $map['SignalForOptimizeParams'];
        }
        if(isset($map['ParameterGroups'])){
            $model->parameterGroups = parameterGroups::fromMap($map['ParameterGroups']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.signalForOptimizeParams
     * @var bool
     */
    public $signalForOptimizeParams;

    /**
     * @description data.parameterGroups
     * @var parameterGroups
     */
    public $parameterGroups;

}
