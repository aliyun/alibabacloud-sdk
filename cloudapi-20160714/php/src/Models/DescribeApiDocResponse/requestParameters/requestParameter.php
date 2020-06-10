<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse\requestParameters;

use AlibabaCloud\Tea\Model;

class requestParameter extends Model
{
    /**
     * @description apiParameterName
     *
     * @var string
     */
    public $apiParameterName;

    /**
     * @description location
     *
     * @var string
     */
    public $location;

    /**
     * @description parameterType
     *
     * @var string
     */
    public $parameterType;

    /**
     * @description option
     *
     * @var string
     */
    public $required;

    /**
     * @description defaultValue
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description demoValue
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description maxValue
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description minValue
     *
     * @var int
     */
    public $minValue;

    /**
     * @description maxLength
     *
     * @var int
     */
    public $maxLength;

    /**
     * @description minLength
     *
     * @var int
     */
    public $minLength;

    /**
     * @description regularExpression
     *
     * @var string
     */
    public $regularExpression;

    /**
     * @description jsonScheme
     *
     * @var string
     */
    public $jsonScheme;

    /**
     * @description enumValue
     *
     * @var string
     */
    public $enumValue;

    /**
     * @description docShow
     *
     * @var string
     */
    public $docShow;

    /**
     * @description docOrder
     *
     * @var int
     */
    public $docOrder;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description arrayItemsType
     *
     * @var string
     */
    public $arrayItemsType;
    protected $_name = [
        'apiParameterName'  => 'ApiParameterName',
        'location'          => 'Location',
        'parameterType'     => 'ParameterType',
        'required'          => 'Required',
        'defaultValue'      => 'DefaultValue',
        'demoValue'         => 'DemoValue',
        'maxValue'          => 'MaxValue',
        'minValue'          => 'MinValue',
        'maxLength'         => 'MaxLength',
        'minLength'         => 'MinLength',
        'regularExpression' => 'RegularExpression',
        'jsonScheme'        => 'JsonScheme',
        'enumValue'         => 'EnumValue',
        'docShow'           => 'DocShow',
        'docOrder'          => 'DocOrder',
        'description'       => 'Description',
        'arrayItemsType'    => 'ArrayItemsType',
    ];

    public function validate()
    {
        Model::validateRequired('apiParameterName', $this->apiParameterName, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('parameterType', $this->parameterType, true);
        Model::validateRequired('required', $this->required, true);
        Model::validateRequired('defaultValue', $this->defaultValue, true);
        Model::validateRequired('demoValue', $this->demoValue, true);
        Model::validateRequired('maxValue', $this->maxValue, true);
        Model::validateRequired('minValue', $this->minValue, true);
        Model::validateRequired('maxLength', $this->maxLength, true);
        Model::validateRequired('minLength', $this->minLength, true);
        Model::validateRequired('regularExpression', $this->regularExpression, true);
        Model::validateRequired('jsonScheme', $this->jsonScheme, true);
        Model::validateRequired('enumValue', $this->enumValue, true);
        Model::validateRequired('docShow', $this->docShow, true);
        Model::validateRequired('docOrder', $this->docOrder, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('arrayItemsType', $this->arrayItemsType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiParameterName) {
            $res['ApiParameterName'] = $this->apiParameterName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }
        if (null !== $this->regularExpression) {
            $res['RegularExpression'] = $this->regularExpression;
        }
        if (null !== $this->jsonScheme) {
            $res['JsonScheme'] = $this->jsonScheme;
        }
        if (null !== $this->enumValue) {
            $res['EnumValue'] = $this->enumValue;
        }
        if (null !== $this->docShow) {
            $res['DocShow'] = $this->docShow;
        }
        if (null !== $this->docOrder) {
            $res['DocOrder'] = $this->docOrder;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->arrayItemsType) {
            $res['ArrayItemsType'] = $this->arrayItemsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiParameterName'])) {
            $model->apiParameterName = $map['ApiParameterName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }
        if (isset($map['RegularExpression'])) {
            $model->regularExpression = $map['RegularExpression'];
        }
        if (isset($map['JsonScheme'])) {
            $model->jsonScheme = $map['JsonScheme'];
        }
        if (isset($map['EnumValue'])) {
            $model->enumValue = $map['EnumValue'];
        }
        if (isset($map['DocShow'])) {
            $model->docShow = $map['DocShow'];
        }
        if (isset($map['DocOrder'])) {
            $model->docOrder = $map['DocOrder'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ArrayItemsType'])) {
            $model->arrayItemsType = $map['ArrayItemsType'];
        }

        return $model;
    }
}
