<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiStageVariableRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description stageId
     *
     * @var string
     */
    public $stageId;

    /**
     * @description variableName
     *
     * @var string
     */
    public $variableName;

    /**
     * @description supportRoute
     *
     * @var bool
     */
    public $supportRoute;

    /**
     * @description variableValue
     *
     * @var string
     */
    public $variableValue;

    /**
     * @description stageRouteModelString
     *
     * @var string
     */
    public $stageRouteModel;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'accessKeyId'     => 'AccessKeyId',
        'groupId'         => 'GroupId',
        'stageId'         => 'StageId',
        'variableName'    => 'VariableName',
        'supportRoute'    => 'SupportRoute',
        'variableValue'   => 'VariableValue',
        'stageRouteModel' => 'StageRouteModel',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('stageId', $this->stageId, true);
        Model::validateRequired('variableName', $this->variableName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }
        if (null !== $this->supportRoute) {
            $res['SupportRoute'] = $this->supportRoute;
        }
        if (null !== $this->variableValue) {
            $res['VariableValue'] = $this->variableValue;
        }
        if (null !== $this->stageRouteModel) {
            $res['StageRouteModel'] = $this->stageRouteModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiStageVariableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }
        if (isset($map['SupportRoute'])) {
            $model->supportRoute = $map['SupportRoute'];
        }
        if (isset($map['VariableValue'])) {
            $model->variableValue = $map['VariableValue'];
        }
        if (isset($map['StageRouteModel'])) {
            $model->stageRouteModel = $map['StageRouteModel'];
        }

        return $model;
    }
}
