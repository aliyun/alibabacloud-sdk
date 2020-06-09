<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponse\runningParameters;

use AlibabaCloud\Tea\Model;

class DBInstanceParameter extends Model {
    protected $_name = [
        'parameterName' => 'ParameterName',
        'parameterValue' => 'ParameterValue',
        'parameterDescription' => 'ParameterDescription',
    ];
    public function validate() {
        Model::validateRequired('parameterName', $this->parameterName, true);
        Model::validateRequired('parameterValue', $this->parameterValue, true);
        Model::validateRequired('parameterDescription', $this->parameterDescription, true);
    }
    public function toMap() {
        $res = [];
        $res['ParameterName'] = $this->parameterName;
        $res['ParameterValue'] = $this->parameterValue;
        $res['ParameterDescription'] = $this->parameterDescription;
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstanceParameter
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ParameterName'])){
            $model->parameterName = $map['ParameterName'];
        }
        if(isset($map['ParameterValue'])){
            $model->parameterValue = $map['ParameterValue'];
        }
        if(isset($map['ParameterDescription'])){
            $model->parameterDescription = $map['ParameterDescription'];
        }
        return $model;
    }
    /**
     * @description parameterName
     * @var string
     */
    public $parameterName;

    /**
     * @description parameterValue
     * @var string
     */
    public $parameterValue;

    /**
     * @description parameterDescription
     * @var string
     */
    public $parameterDescription;

}
