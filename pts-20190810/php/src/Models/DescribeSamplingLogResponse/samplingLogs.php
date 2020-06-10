<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSamplingLogResponse;

use AlibabaCloud\Tea\Model;

class samplingLogs extends Model
{
    /**
     * @description chainId
     *
     * @var string
     */
    public $chainId;

    /**
     * @description timestamp
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description httpRequestMethod
     *
     * @var string
     */
    public $httpRequestMethod;

    /**
     * @description httpRequestBody
     *
     * @var string
     */
    public $httpRequestBody;

    /**
     * @description httpRequestHeaders
     *
     * @var string
     */
    public $httpRequestHeaders;

    /**
     * @description httpRequestUrl
     *
     * @var string
     */
    public $httpRequestUrl;

    /**
     * @description httpStartTime
     *
     * @var string
     */
    public $httpStartTime;

    /**
     * @description httpResponseBody
     *
     * @var string
     */
    public $httpResponseBody;

    /**
     * @description HttpResponseFailMsg
     *
     * @var string
     */
    public $httpResponseFailMsg;

    /**
     * @description httpResponseHeaders
     *
     * @var string
     */
    public $httpResponseHeaders;

    /**
     * @description ImportContent
     *
     * @var string
     */
    public $importContent;

    /**
     * @description exportConfig
     *
     * @var string
     */
    public $exportConfig;

    /**
     * @description exportContent
     *
     * @var string
     */
    public $exportContent;

    /**
     * @description checkResult
     *
     * @var string
     */
    public $checkResult;

    /**
     * @description httpTiming
     *
     * @var string
     */
    public $httpTiming;

    /**
     * @description rt
     *
     * @var string
     */
    public $rt;

    /**
     * @description httpResponseStatus
     *
     * @var string
     */
    public $httpResponseStatus;

    /**
     * @description trans_id
     *
     * @var string
     */
    public $transId;

    /**
     * @description groupTag
     *
     * @var string
     */
    public $groupTag;
    protected $_name = [
        'chainId'             => 'ChainId',
        'timestamp'           => 'Timestamp',
        'httpRequestMethod'   => 'HttpRequestMethod',
        'httpRequestBody'     => 'HttpRequestBody',
        'httpRequestHeaders'  => 'HttpRequestHeaders',
        'httpRequestUrl'      => 'HttpRequestUrl',
        'httpStartTime'       => 'HttpStartTime',
        'httpResponseBody'    => 'HttpResponseBody',
        'httpResponseFailMsg' => 'HttpResponseFailMsg',
        'httpResponseHeaders' => 'HttpResponseHeaders',
        'importContent'       => 'ImportContent',
        'exportConfig'        => 'ExportConfig',
        'exportContent'       => 'ExportContent',
        'checkResult'         => 'CheckResult',
        'httpTiming'          => 'HttpTiming',
        'rt'                  => 'Rt',
        'httpResponseStatus'  => 'HttpResponseStatus',
        'transId'             => 'TransId',
        'groupTag'            => 'GroupTag',
    ];

    public function validate()
    {
        Model::validateRequired('chainId', $this->chainId, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('httpRequestMethod', $this->httpRequestMethod, true);
        Model::validateRequired('httpRequestBody', $this->httpRequestBody, true);
        Model::validateRequired('httpRequestHeaders', $this->httpRequestHeaders, true);
        Model::validateRequired('httpRequestUrl', $this->httpRequestUrl, true);
        Model::validateRequired('httpStartTime', $this->httpStartTime, true);
        Model::validateRequired('httpResponseBody', $this->httpResponseBody, true);
        Model::validateRequired('httpResponseFailMsg', $this->httpResponseFailMsg, true);
        Model::validateRequired('httpResponseHeaders', $this->httpResponseHeaders, true);
        Model::validateRequired('importContent', $this->importContent, true);
        Model::validateRequired('exportConfig', $this->exportConfig, true);
        Model::validateRequired('exportContent', $this->exportContent, true);
        Model::validateRequired('checkResult', $this->checkResult, true);
        Model::validateRequired('httpTiming', $this->httpTiming, true);
        Model::validateRequired('rt', $this->rt, true);
        Model::validateRequired('httpResponseStatus', $this->httpResponseStatus, true);
        Model::validateRequired('transId', $this->transId, true);
        Model::validateRequired('groupTag', $this->groupTag, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->httpRequestMethod) {
            $res['HttpRequestMethod'] = $this->httpRequestMethod;
        }
        if (null !== $this->httpRequestBody) {
            $res['HttpRequestBody'] = $this->httpRequestBody;
        }
        if (null !== $this->httpRequestHeaders) {
            $res['HttpRequestHeaders'] = $this->httpRequestHeaders;
        }
        if (null !== $this->httpRequestUrl) {
            $res['HttpRequestUrl'] = $this->httpRequestUrl;
        }
        if (null !== $this->httpStartTime) {
            $res['HttpStartTime'] = $this->httpStartTime;
        }
        if (null !== $this->httpResponseBody) {
            $res['HttpResponseBody'] = $this->httpResponseBody;
        }
        if (null !== $this->httpResponseFailMsg) {
            $res['HttpResponseFailMsg'] = $this->httpResponseFailMsg;
        }
        if (null !== $this->httpResponseHeaders) {
            $res['HttpResponseHeaders'] = $this->httpResponseHeaders;
        }
        if (null !== $this->importContent) {
            $res['ImportContent'] = $this->importContent;
        }
        if (null !== $this->exportConfig) {
            $res['ExportConfig'] = $this->exportConfig;
        }
        if (null !== $this->exportContent) {
            $res['ExportContent'] = $this->exportContent;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->httpTiming) {
            $res['HttpTiming'] = $this->httpTiming;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->httpResponseStatus) {
            $res['HttpResponseStatus'] = $this->httpResponseStatus;
        }
        if (null !== $this->transId) {
            $res['TransId'] = $this->transId;
        }
        if (null !== $this->groupTag) {
            $res['GroupTag'] = $this->groupTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return samplingLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['HttpRequestMethod'])) {
            $model->httpRequestMethod = $map['HttpRequestMethod'];
        }
        if (isset($map['HttpRequestBody'])) {
            $model->httpRequestBody = $map['HttpRequestBody'];
        }
        if (isset($map['HttpRequestHeaders'])) {
            $model->httpRequestHeaders = $map['HttpRequestHeaders'];
        }
        if (isset($map['HttpRequestUrl'])) {
            $model->httpRequestUrl = $map['HttpRequestUrl'];
        }
        if (isset($map['HttpStartTime'])) {
            $model->httpStartTime = $map['HttpStartTime'];
        }
        if (isset($map['HttpResponseBody'])) {
            $model->httpResponseBody = $map['HttpResponseBody'];
        }
        if (isset($map['HttpResponseFailMsg'])) {
            $model->httpResponseFailMsg = $map['HttpResponseFailMsg'];
        }
        if (isset($map['HttpResponseHeaders'])) {
            $model->httpResponseHeaders = $map['HttpResponseHeaders'];
        }
        if (isset($map['ImportContent'])) {
            $model->importContent = $map['ImportContent'];
        }
        if (isset($map['ExportConfig'])) {
            $model->exportConfig = $map['ExportConfig'];
        }
        if (isset($map['ExportContent'])) {
            $model->exportContent = $map['ExportContent'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['HttpTiming'])) {
            $model->httpTiming = $map['HttpTiming'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['HttpResponseStatus'])) {
            $model->httpResponseStatus = $map['HttpResponseStatus'];
        }
        if (isset($map['TransId'])) {
            $model->transId = $map['TransId'];
        }
        if (isset($map['GroupTag'])) {
            $model->groupTag = $map['GroupTag'];
        }

        return $model;
    }
}
