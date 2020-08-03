<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $parameterValue;

    /**
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
        $res = [];
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }
        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
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
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }

        return $model;
    }
}
