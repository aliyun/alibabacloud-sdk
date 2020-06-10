<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponse\parameterGroups;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.signalForOptimizeParams
     *
     * @var bool
     */
    public $signalForOptimizeParams;

    /**
     * @description data.parameterGroups
     *
     * @var parameterGroups
     */
    public $parameterGroups;
    protected $_name = [
        'requestId'               => 'RequestId',
        'signalForOptimizeParams' => 'SignalForOptimizeParams',
        'parameterGroups'         => 'ParameterGroups',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('signalForOptimizeParams', $this->signalForOptimizeParams, true);
        Model::validateRequired('parameterGroups', $this->parameterGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signalForOptimizeParams) {
            $res['SignalForOptimizeParams'] = $this->signalForOptimizeParams;
        }
        if (null !== $this->parameterGroups) {
            $res['ParameterGroups'] = null !== $this->parameterGroups ? $this->parameterGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignalForOptimizeParams'])) {
            $model->signalForOptimizeParams = $map['SignalForOptimizeParams'];
        }
        if (isset($map['ParameterGroups'])) {
            $model->parameterGroups = parameterGroups::fromMap($map['ParameterGroups']);
        }

        return $model;
    }
}
