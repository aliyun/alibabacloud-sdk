<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse\requestParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse\resultDescriptions;
use AlibabaCloud\Tea\Model;

class DescribeApiDocResponse extends Model
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
     * @description data.requestParameters
     *
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @description data.requestConfig
     *
     * @var requestConfig
     */
    public $requestConfig;
    protected $_name = [
        'requestId'          => 'RequestId',
        'regionId'           => 'RegionId',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'stageName'          => 'StageName',
        'apiId'              => 'ApiId',
        'apiName'            => 'ApiName',
        'description'        => 'Description',
        'visibility'         => 'Visibility',
        'authType'           => 'AuthType',
        'resultType'         => 'ResultType',
        'resultSample'       => 'ResultSample',
        'failResultSample'   => 'FailResultSample',
        'deployedTime'       => 'DeployedTime',
        'forceNonceCheck'    => 'ForceNonceCheck',
        'disableInternet'    => 'DisableInternet',
        'errorCodeSamples'   => 'ErrorCodeSamples',
        'resultDescriptions' => 'ResultDescriptions',
        'requestParameters'  => 'RequestParameters',
        'requestConfig'      => 'RequestConfig',
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
        Model::validateRequired('visibility', $this->visibility, true);
        Model::validateRequired('authType', $this->authType, true);
        Model::validateRequired('resultType', $this->resultType, true);
        Model::validateRequired('resultSample', $this->resultSample, true);
        Model::validateRequired('failResultSample', $this->failResultSample, true);
        Model::validateRequired('deployedTime', $this->deployedTime, true);
        Model::validateRequired('forceNonceCheck', $this->forceNonceCheck, true);
        Model::validateRequired('disableInternet', $this->disableInternet, true);
        Model::validateRequired('errorCodeSamples', $this->errorCodeSamples, true);
        Model::validateRequired('resultDescriptions', $this->resultDescriptions, true);
        Model::validateRequired('requestParameters', $this->requestParameters, true);
        Model::validateRequired('requestConfig', $this->requestConfig, true);
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
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toMap() : null;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiDocResponse
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
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = requestParameters::fromMap($map['RequestParameters']);
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = requestConfig::fromMap($map['RequestConfig']);
        }

        return $model;
    }
}
