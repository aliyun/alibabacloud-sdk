<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse\paramGroup\parameterGroup\paramDetail;

use AlibabaCloud\Tea\Model;

class parameterDetail extends Model {
    protected $_name = [
        'paramName' => 'ParamName',
        'paramValue' => 'ParamValue',
    ];
    public function validate() {
        Model::validateRequired('paramName', $this->paramName, true);
        Model::validateRequired('paramValue', $this->paramValue, true);
    }
    public function toMap() {
        $res = [];
        $res['ParamName'] = $this->paramName;
        $res['ParamValue'] = $this->paramValue;
        return $res;
    }
    /**
     * @param array $map
     * @return parameterDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ParamName'])){
            $model->paramName = $map['ParamName'];
        }
        if(isset($map['ParamValue'])){
            $model->paramValue = $map['ParamValue'];
        }
        return $model;
    }
    /**
     * @description paramName
     * @var string
     */
    public $paramName;

    /**
     * @description paramValue
     * @var string
     */
    public $paramValue;

}
