<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\constantParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\customSystemParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\openIdConnectConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\requestParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\resultDescriptions;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceParametersMap;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\systemParameters;
use AlibabaCloud\Tea\Model;

class DescribeApiHistoryResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description data.groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description data.stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description data.apiUid
     *
     * @var string
     */
    public $apiId;

    /**
     * @description data.apiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description data.description
     *
     * @var string
     */
    public $description;

    /**
     * @description data.historyVersion
     *
     * @var string
     */
    public $historyVersion;

    /**
     * @description data.status
     *
     * @var string
     */
    public $status;

    /**
     * @description data.visibility
     *
     * @var string
     */
    public $visibility;

    /**
     * @description data.authType
     *
     * @var string
     */
    public $authType;

    /**
     * @description data.resultType
     *
     * @var string
     */
    public $resultType;

    /**
     * @description data.resultSample
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description data.failResultSample
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @description data.gmtCreate
     *
     * @var string
     */
    public $deployedTime;

    /**
     * @description data.signatureMethod
     *
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @description data.resultBodyModel
     *
     * @var string
     */
    public $resultBodyModel;

    /**
     * @description data.forceNonceCheck
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description data.disableInternet
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @description data.errorCodeInfos
     *
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @description data.resultDescriptions
     *
     * @var resultDescriptions
     */
    public $resultDescriptions;

    /**
     * @description data.systemParameters
     *
     * @var systemParameters
     */
    public $systemParameters;

    /**
     * @description data.customSystemParameters
     *
     * @var customSystemParameters
     */
    public $customSystemParameters;

    /**
     * @description data.constantParameters
     *
     * @var constantParameters
     */
    public $constantParameters;

    /**
     * @description data.requestParameters
     *
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @description data.serviceParameters
     *
     * @var serviceParameters
     */
    public $serviceParameters;

    /**
     * @description data.parametersMap
     *
     * @var serviceParametersMap
     */
    public $serviceParametersMap;

    /**
     * @description data.requestConfig
     *
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @description data.serviceConfig
     *
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @description data.openIdConnectConfig
     *
     * @var openIdConnectConfig
     */
    public $openIdConnectConfig;
    protected $_name = [
        'requestId'              => 'RequestId',
        'regionId'               => 'RegionId',
        'groupId'                => 'GroupId',
        'groupName'              => 'GroupName',
        'stageName'              => 'StageName',
        'apiId'                  => 'ApiId',
        'apiName'                => 'ApiName',
        'description'            => 'Description',
        'historyVersion'         => 'HistoryVersion',
        'status'                 => 'Status',
        'visibility'             => 'Visibility',
        'authType'               => 'AuthType',
        'resultType'             => 'ResultType',
        'resultSample'           => 'ResultSample',
        'failResultSample'       => 'FailResultSample',
        'deployedTime'           => 'DeployedTime',
        'allowSignatureMethod'   => 'AllowSignatureMethod',
        'resultBodyModel'        => 'ResultBodyModel',
        'forceNonceCheck'        => 'ForceNonceCheck',
        'disableInternet'        => 'DisableInternet',
        'errorCodeSamples'       => 'ErrorCodeSamples',
        'resultDescriptions'     => 'ResultDescriptions',
        'systemParameters'       => 'SystemParameters',
        'customSystemParameters' => 'CustomSystemParameters',
        'constantParameters'     => 'ConstantParameters',
        'requestParameters'      => 'RequestParameters',
        'serviceParameters'      => 'ServiceParameters',
        'serviceParametersMap'   => 'ServiceParametersMap',
        'requestConfig'          => 'RequestConfig',
        'serviceConfig'          => 'ServiceConfig',
        'openIdConnectConfig'    => 'OpenIdConnectConfig',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('historyVersion', $this->historyVersion, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('visibility', $this->visibility, true);
        Model::validateRequired('authType', $this->authType, true);
        Model::validateRequired('resultType', $this->resultType, true);
        Model::validateRequired('resultSample', $this->resultSample, true);
        Model::validateRequired('failResultSample', $this->failResultSample, true);
        Model::validateRequired('deployedTime', $this->deployedTime, true);
        Model::validateRequired('allowSignatureMethod', $this->allowSignatureMethod, true);
        Model::validateRequired('resultBodyModel', $this->resultBodyModel, true);
        Model::validateRequired('forceNonceCheck', $this->forceNonceCheck, true);
        Model::validateRequired('disableInternet', $this->disableInternet, true);
        Model::validateRequired('errorCodeSamples', $this->errorCodeSamples, true);
        Model::validateRequired('resultDescriptions', $this->resultDescriptions, true);
        Model::validateRequired('systemParameters', $this->systemParameters, true);
        Model::validateRequired('customSystemParameters', $this->customSystemParameters, true);
        Model::validateRequired('constantParameters', $this->constantParameters, true);
        Model::validateRequired('requestParameters', $this->requestParameters, true);
        Model::validateRequired('serviceParameters', $this->serviceParameters, true);
        Model::validateRequired('serviceParametersMap', $this->serviceParametersMap, true);
        Model::validateRequired('requestConfig', $this->requestConfig, true);
        Model::validateRequired('serviceConfig', $this->serviceConfig, true);
        Model::validateRequired('openIdConnectConfig', $this->openIdConnectConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
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
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->allowSignatureMethod) {
            $res['AllowSignatureMethod'] = $this->allowSignatureMethod;
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
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
        }
        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = null !== $this->resultDescriptions ? $this->resultDescriptions->toMap() : null;
        }
        if (null !== $this->systemParameters) {
            $res['SystemParameters'] = null !== $this->systemParameters ? $this->systemParameters->toMap() : null;
        }
        if (null !== $this->customSystemParameters) {
            $res['CustomSystemParameters'] = null !== $this->customSystemParameters ? $this->customSystemParameters->toMap() : null;
        }
        if (null !== $this->constantParameters) {
            $res['ConstantParameters'] = null !== $this->constantParameters ? $this->constantParameters->toMap() : null;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toMap() : null;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = null !== $this->serviceParameters ? $this->serviceParameters->toMap() : null;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = null !== $this->serviceParametersMap ? $this->serviceParametersMap->toMap() : null;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toMap() : null;
        }
        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = null !== $this->serviceConfig ? $this->serviceConfig->toMap() : null;
        }
        if (null !== $this->openIdConnectConfig) {
            $res['OpenIdConnectConfig'] = null !== $this->openIdConnectConfig ? $this->openIdConnectConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiHistoryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
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
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['AllowSignatureMethod'])) {
            $model->allowSignatureMethod = $map['AllowSignatureMethod'];
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
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }
        if (isset($map['ResultDescriptions'])) {
            $model->resultDescriptions = resultDescriptions::fromMap($map['ResultDescriptions']);
        }
        if (isset($map['SystemParameters'])) {
            $model->systemParameters = systemParameters::fromMap($map['SystemParameters']);
        }
        if (isset($map['CustomSystemParameters'])) {
            $model->customSystemParameters = customSystemParameters::fromMap($map['CustomSystemParameters']);
        }
        if (isset($map['ConstantParameters'])) {
            $model->constantParameters = constantParameters::fromMap($map['ConstantParameters']);
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = requestParameters::fromMap($map['RequestParameters']);
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = serviceParameters::fromMap($map['ServiceParameters']);
        }
        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = serviceParametersMap::fromMap($map['ServiceParametersMap']);
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = requestConfig::fromMap($map['RequestConfig']);
        }
        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = serviceConfig::fromMap($map['ServiceConfig']);
        }
        if (isset($map['OpenIdConnectConfig'])) {
            $model->openIdConnectConfig = openIdConnectConfig::fromMap($map['OpenIdConnectConfig']);
        }

        return $model;
    }
}
