<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\registrationDetails;

use AlibabaCloud\Tea\Model;

class registrationRequestParameters extends Model
{
    /**
     * @description defaultValue
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description exampleValue
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @description required
     *
     * @var bool
     */
    public $isRequiredParameter;

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

    /**
     * @description paramOperator
     *
     * @var int
     */
    public $parameterOperator;

    /**
     * @description paramPosition
     *
     * @var int
     */
    public $parameterPosition;
    protected $_name = [
        'defaultValue'         => 'DefaultValue',
        'exampleValue'         => 'ExampleValue',
        'isRequiredParameter'  => 'IsRequiredParameter',
        'parameterDataType'    => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'parameterOperator'    => 'ParameterOperator',
        'parameterPosition'    => 'ParameterPosition',
    ];

    public function validate()
    {
        Model::validateRequired('defaultValue', $this->defaultValue, true);
        Model::validateRequired('exampleValue', $this->exampleValue, true);
        Model::validateRequired('isRequiredParameter', $this->isRequiredParameter, true);
        Model::validateRequired('parameterDataType', $this->parameterDataType, true);
        Model::validateRequired('parameterDescription', $this->parameterDescription, true);
        Model::validateRequired('parameterName', $this->parameterName, true);
        Model::validateRequired('parameterOperator', $this->parameterOperator, true);
        Model::validateRequired('parameterPosition', $this->parameterPosition, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->isRequiredParameter) {
            $res['IsRequiredParameter'] = $this->isRequiredParameter;
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
        if (null !== $this->parameterOperator) {
            $res['ParameterOperator'] = $this->parameterOperator;
        }
        if (null !== $this->parameterPosition) {
            $res['ParameterPosition'] = $this->parameterPosition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registrationRequestParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['IsRequiredParameter'])) {
            $model->isRequiredParameter = $map['IsRequiredParameter'];
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
        if (isset($map['ParameterOperator'])) {
            $model->parameterOperator = $map['ParameterOperator'];
        }
        if (isset($map['ParameterPosition'])) {
            $model->parameterPosition = $map['ParameterPosition'];
        }

        return $model;
    }
}
