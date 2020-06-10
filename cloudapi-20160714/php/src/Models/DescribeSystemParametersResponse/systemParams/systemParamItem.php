<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponse\systemParams;

use AlibabaCloud\Tea\Model;

class systemParamItem extends Model
{
    /**
     * @description paramName
     *
     * @var string
     */
    public $paramName;

    /**
     * @description paramType
     *
     * @var string
     */
    public $paramType;

    /**
     * @description demoValue
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'paramName'   => 'ParamName',
        'paramType'   => 'ParamType',
        'demoValue'   => 'DemoValue',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('paramName', $this->paramName, true);
        Model::validateRequired('paramType', $this->paramType, true);
        Model::validateRequired('demoValue', $this->demoValue, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemParamItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
