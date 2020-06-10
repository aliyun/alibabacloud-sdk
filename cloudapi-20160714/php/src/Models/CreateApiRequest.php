<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiRequest extends Model
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
     * @description apiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description visibility
     *
     * @var string
     */
    public $visibility;

    /**
     * @description apiDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description authType
     *
     * @var string
     */
    public $authType;

    /**
     * @description requestConfigStr
     *
     * @var string
     */
    public $requestConfig;

    /**
     * @description serviceConfigStr
     *
     * @var string
     */
    public $serviceConfig;

    /**
     * @description requestParamtersStr
     *
     * @var string
     */
    public $requestParameters;

    /**
     * @description systemParametersStr
     *
     * @var string
     */
    public $systemParameters;

    /**
     * @description constantParametersStr
     *
     * @var string
     */
    public $constantParameters;

    /**
     * @description serviceParameterStr
     *
     * @var string
     */
    public $serviceParameters;

    /**
     * @description serviceParametersMapStr
     *
     * @var string
     */
    public $serviceParametersMap;

    /**
     * @description apiResultType
     *
     * @var string
     */
    public $resultType;

    /**
     * @description apiResultSample
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description apiFailResultSample
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @description apiErrorCodeSample
     *
     * @var string
     */
    public $errorCodeSamples;

    /**
     * @description apiResultDescription
     *
     * @var string
     */
    public $resultDescriptions;

    /**
     * @description openIdConnectConfigStr
     *
     * @var string
     */
    public $openIdConnectConfig;

    /**
     * @description signatureMethod
     *
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @description webSocketApiType
     *
     * @var string
     */
    public $webSocketApiType;

    /**
     * @description apiResultBodyModel
     *
     * @var string
     */
    public $resultBodyModel;

    /**
     * @description forceNonceCheck
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description disableInternet
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @description appCodeAuthType
     *
     * @var string
     */
    public $appCodeAuthType;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'accessKeyId'          => 'AccessKeyId',
        'groupId'              => 'GroupId',
        'apiName'              => 'ApiName',
        'visibility'           => 'Visibility',
        'description'          => 'Description',
        'authType'             => 'AuthType',
        'requestConfig'        => 'RequestConfig',
        'serviceConfig'        => 'ServiceConfig',
        'requestParameters'    => 'RequestParameters',
        'systemParameters'     => 'SystemParameters',
        'constantParameters'   => 'ConstantParameters',
        'serviceParameters'    => 'ServiceParameters',
        'serviceParametersMap' => 'ServiceParametersMap',
        'resultType'           => 'ResultType',
        'resultSample'         => 'ResultSample',
        'failResultSample'     => 'FailResultSample',
        'errorCodeSamples'     => 'ErrorCodeSamples',
        'resultDescriptions'   => 'ResultDescriptions',
        'openIdConnectConfig'  => 'OpenIdConnectConfig',
        'allowSignatureMethod' => 'AllowSignatureMethod',
        'webSocketApiType'     => 'WebSocketApiType',
        'resultBodyModel'      => 'ResultBodyModel',
        'forceNonceCheck'      => 'ForceNonceCheck',
        'disableInternet'      => 'DisableInternet',
        'appCodeAuthType'      => 'AppCodeAuthType',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('visibility', $this->visibility, true);
        Model::validateRequired('requestConfig', $this->requestConfig, true);
        Model::validateRequired('serviceConfig', $this->serviceConfig, true);
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
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = $this->requestConfig;
        }
        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = $this->requestParameters;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = $this->systemParameters;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = $this->constantParameters;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = $this->serviceParametersMap;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = $this->errorCodeSamples;
        }
        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = $this->resultDescriptions;
        }
        if (null !== $this->openIdConnectConfig) {
            $res['OpenIdConnectConfig'] = $this->openIdConnectConfig;
        }
        if (null !== $this->allowSignatureMethod) {
            $res['AllowSignatureMethod'] = $this->allowSignatureMethod;
        }
        if (null !== $this->webSocketApiType) {
            $res['WebSocketApiType'] = $this->webSocketApiType;
        }
        if (null !== $this->resultBodyModel) {
            $res['ResultBodyModel'] = $this->resultBodyModel;
        }
        if (null !== $this->forceNonceCheck) {
            $res['ForceNonceCheck'] = $this->forceNonceCheck;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->appCodeAuthType) {
            $res['AppCodeAuthType'] = $this->appCodeAuthType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiRequest
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
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = $map['RequestConfig'];
        }
        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = $map['RequestParameters'];
        }
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = $map['SystemParameters'];
        }
        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = $map['ConstantParameters'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }
        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = $map['ServiceParametersMap'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = $map['ErrorCodeSamples'];
        }
        if (isset($map['ResultDescriptions'])) {
            $model->resultDescriptions = $map['ResultDescriptions'];
        }
        if (isset($map['OpenIdConnectConfig'])) {
            $model->openIdConnectConfig = $map['OpenIdConnectConfig'];
        }
        if (isset($map['AllowSignatureMethod'])) {
            $model->allowSignatureMethod = $map['AllowSignatureMethod'];
        }
        if (isset($map['WebSocketApiType'])) {
            $model->webSocketApiType = $map['WebSocketApiType'];
        }
        if (isset($map['ResultBodyModel'])) {
            $model->resultBodyModel = $map['ResultBodyModel'];
        }
        if (isset($map['ForceNonceCheck'])) {
            $model->forceNonceCheck = $map['ForceNonceCheck'];
        }
        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }
        if (isset($map['AppCodeAuthType'])) {
            $model->appCodeAuthType = $map['AppCodeAuthType'];
        }

        return $model;
    }
}
