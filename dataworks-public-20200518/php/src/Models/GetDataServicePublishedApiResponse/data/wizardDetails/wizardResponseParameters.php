<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\wizardDetails;

use AlibabaCloud\Tea\Model;

class wizardResponseParameters extends Model
{
    /**
     * @description exampleValue
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @description paramType
     *
     * @var int
     */
    public $parameterDataType;

    /**
     * @description paramDesc
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description paramName
     *
     * @var string
     */
    public $parameterName;
    protected $_name = [
        'exampleValue'         => 'ExampleValue',
        'parameterDataType'    => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
    ];

    public function validate()
    {
        Model::validateRequired('exampleValue', $this->exampleValue, true);
        Model::validateRequired('parameterDataType', $this->parameterDataType, true);
        Model::validateRequired('parameterDescription', $this->parameterDescription, true);
        Model::validateRequired('parameterName', $this->parameterName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wizardResponseParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        return $model;
    }
}
