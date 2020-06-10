<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponse\runningParameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description parameterName
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description unit
     *
     * @var string
     */
    public $dataType;

    /**
     * @description defaultParameterValue
     *
     * @var string
     */
    public $defaultParameterValue;

    /**
     * @description parameterValue
     *
     * @var string
     */
    public $parameterValue;

    /**
     * @description revisable
     *
     * @var bool
     */
    public $isModifiable;

    /**
     * @description effective
     *
     * @var bool
     */
    public $forceRestart;

    /**
     * @description parameterStatus
     *
     * @var string
     */
    public $parameterStatus;

    /**
     * @description checkingCode
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description parameterDescription
     *
     * @var string
     */
    public $parameterDescription;
    protected $_name = [
        'parameterName'         => 'ParameterName',
        'dataType'              => 'DataType',
        'defaultParameterValue' => 'DefaultParameterValue',
        'parameterValue'        => 'ParameterValue',
        'isModifiable'          => 'IsModifiable',
        'forceRestart'          => 'ForceRestart',
        'parameterStatus'       => 'ParameterStatus',
        'checkingCode'          => 'CheckingCode',
        'parameterDescription'  => 'ParameterDescription',
    ];

    public function validate()
    {
        Model::validateRequired('parameterName', $this->parameterName, true);
        Model::validateRequired('dataType', $this->dataType, true);
        Model::validateRequired('defaultParameterValue', $this->defaultParameterValue, true);
        Model::validateRequired('parameterValue', $this->parameterValue, true);
        Model::validateRequired('isModifiable', $this->isModifiable, true);
        Model::validateRequired('forceRestart', $this->forceRestart, true);
        Model::validateRequired('parameterStatus', $this->parameterStatus, true);
        Model::validateRequired('checkingCode', $this->checkingCode, true);
        Model::validateRequired('parameterDescription', $this->parameterDescription, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->defaultParameterValue) {
            $res['DefaultParameterValue'] = $this->defaultParameterValue;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }
        if (null !== $this->isModifiable) {
            $res['IsModifiable'] = $this->isModifiable;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->parameterStatus) {
            $res['ParameterStatus'] = $this->parameterStatus;
        }
        if (null !== $this->checkingCode) {
            $res['CheckingCode'] = $this->checkingCode;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DefaultParameterValue'])) {
            $model->defaultParameterValue = $map['DefaultParameterValue'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }
        if (isset($map['IsModifiable'])) {
            $model->isModifiable = $map['IsModifiable'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['ParameterStatus'])) {
            $model->parameterStatus = $map['ParameterStatus'];
        }
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }

        return $model;
    }
}
