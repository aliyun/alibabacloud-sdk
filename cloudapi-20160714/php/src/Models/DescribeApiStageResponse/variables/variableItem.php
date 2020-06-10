<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables\variableItem\stageRouteModel;
use AlibabaCloud\Tea\Model;

class variableItem extends Model
{
    /**
     * @description varname
     *
     * @var string
     */
    public $variableName;

    /**
     * @description varvalue
     *
     * @var string
     */
    public $variableValue;

    /**
     * @description supportRoute
     *
     * @var bool
     */
    public $supportRoute;

    /**
     * @description stageRouteModel
     *
     * @var stageRouteModel
     */
    public $stageRouteModel;
    protected $_name = [
        'variableName'    => 'VariableName',
        'variableValue'   => 'VariableValue',
        'supportRoute'    => 'SupportRoute',
        'stageRouteModel' => 'StageRouteModel',
    ];

    public function validate()
    {
        Model::validateRequired('variableName', $this->variableName, true);
        Model::validateRequired('variableValue', $this->variableValue, true);
        Model::validateRequired('supportRoute', $this->supportRoute, true);
        Model::validateRequired('stageRouteModel', $this->stageRouteModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }
        if (null !== $this->variableValue) {
            $res['VariableValue'] = $this->variableValue;
        }
        if (null !== $this->supportRoute) {
            $res['SupportRoute'] = $this->supportRoute;
        }
        if (null !== $this->stageRouteModel) {
            $res['StageRouteModel'] = null !== $this->stageRouteModel ? $this->stageRouteModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }
        if (isset($map['VariableValue'])) {
            $model->variableValue = $map['VariableValue'];
        }
        if (isset($map['SupportRoute'])) {
            $model->supportRoute = $map['SupportRoute'];
        }
        if (isset($map['StageRouteModel'])) {
            $model->stageRouteModel = stageRouteModel::fromMap($map['StageRouteModel']);
        }

        return $model;
    }
}
