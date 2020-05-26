<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description ParameterValue
     *
     * @var string
     */
    public $parameterValue;

    /**
     * @description ParameterKey
     *
     * @var string
     */
    public $parameterKey;
    protected $_name = [
        'parameterValue' => 'ParameterValue',
        'parameterKey'   => 'ParameterKey',
    ];

    public function validate()
    {
        Model::validateRequired('parameterValue', $this->parameterValue, true);
        Model::validateRequired('parameterKey', $this->parameterKey, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ParameterValue'] = $this->parameterValue;
        $res['ParameterKey']   = $this->parameterKey;

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
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }

        return $model;
    }
}
