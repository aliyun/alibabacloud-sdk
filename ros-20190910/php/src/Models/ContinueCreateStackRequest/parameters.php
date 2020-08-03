<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $parameterKey;

    /**
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'parameterKey'   => 'ParameterKey',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
        Model::validateRequired('parameterKey', $this->parameterKey, true);
        Model::validateRequired('parameterValue', $this->parameterValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
