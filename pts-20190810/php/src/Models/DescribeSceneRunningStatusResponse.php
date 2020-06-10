<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse\agentsLocation;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse\chainMonitorDataList;
use AlibabaCloud\Tea\Model;

class DescribeSceneRunningStatusResponse extends Model
{
    /**
     * @description tips
     *
     * @var string
     */
    public $tips;

    /**
     * @description totalRequestCount
     *
     * @var int
     */
    public $totalRequestCount;

    /**
     * @description vum
     *
     * @var int
     */
    public $vum;

    /**
     * @description requestBps
     *
     * @var string
     */
    public $requestBps;

    /**
     * @description responseBps
     *
     * @var string
     */
    public $responseBps;

    /**
     * @description failedRequestCount
     *
     * @var int
     */
    public $failedRequestCount;

    /**
     * @description failedBusinessCount
     *
     * @var int
     */
    public $failedBusinessCount;

    /**
     * @description concurrency
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description concurrencyLimit
     *
     * @var int
     */
    public $concurrencyLimit;

    /**
     * @description tps
     *
     * @var int
     */
    public $tps;

    /**
     * @description tpsLimit
     *
     * @var int
     */
    public $tpsLimit;

    /**
     * @description aliveAgents
     *
     * @var int
     */
    public $aliveAgents;

    /**
     * @description totalAgents
     *
     * @var int
     */
    public $totalAgents;

    /**
     * @description seg90Rt
     *
     * @var int
     */
    public $seg90Rt;

    /**
     * @description averageRt
     *
     * @var int
     */
    public $averageRt;

    /**
     * @description reportId
     *
     * @var string
     */
    public $reportId;

    /**
     * @description startTime
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description currentTime
     *
     * @var int
     */
    public $currentTime;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description httpStatusCode
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description useCustomPool
     *
     * @var bool
     */
    public $useCustomPool;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description agentsLocation
     *
     * @var array
     */
    public $agentsLocation;

    /**
     * @description monitorDataList
     *
     * @var array
     */
    public $chainMonitorDataList;
    protected $_name = [
        'tips'                 => 'Tips',
        'totalRequestCount'    => 'TotalRequestCount',
        'vum'                  => 'Vum',
        'requestBps'           => 'RequestBps',
        'responseBps'          => 'ResponseBps',
        'failedRequestCount'   => 'FailedRequestCount',
        'failedBusinessCount'  => 'FailedBusinessCount',
        'concurrency'          => 'Concurrency',
        'concurrencyLimit'     => 'ConcurrencyLimit',
        'tps'                  => 'Tps',
        'tpsLimit'             => 'TpsLimit',
        'aliveAgents'          => 'AliveAgents',
        'totalAgents'          => 'TotalAgents',
        'seg90Rt'              => 'Seg90Rt',
        'averageRt'            => 'AverageRt',
        'reportId'             => 'ReportId',
        'beginTime'            => 'BeginTime',
        'currentTime'          => 'CurrentTime',
        'code'                 => 'Code',
        'message'              => 'Message',
        'httpStatusCode'       => 'HttpStatusCode',
        'success'              => 'Success',
        'useCustomPool'        => 'UseCustomPool',
        'requestId'            => 'RequestId',
        'agentsLocation'       => 'AgentsLocation',
        'chainMonitorDataList' => 'ChainMonitorDataList',
    ];

    public function validate()
    {
        Model::validateRequired('tips', $this->tips, true);
        Model::validateRequired('totalRequestCount', $this->totalRequestCount, true);
        Model::validateRequired('vum', $this->vum, true);
        Model::validateRequired('requestBps', $this->requestBps, true);
        Model::validateRequired('responseBps', $this->responseBps, true);
        Model::validateRequired('failedRequestCount', $this->failedRequestCount, true);
        Model::validateRequired('failedBusinessCount', $this->failedBusinessCount, true);
        Model::validateRequired('concurrency', $this->concurrency, true);
        Model::validateRequired('concurrencyLimit', $this->concurrencyLimit, true);
        Model::validateRequired('tps', $this->tps, true);
        Model::validateRequired('tpsLimit', $this->tpsLimit, true);
        Model::validateRequired('aliveAgents', $this->aliveAgents, true);
        Model::validateRequired('totalAgents', $this->totalAgents, true);
        Model::validateRequired('seg90Rt', $this->seg90Rt, true);
        Model::validateRequired('averageRt', $this->averageRt, true);
        Model::validateRequired('reportId', $this->reportId, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
        Model::validateRequired('currentTime', $this->currentTime, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('useCustomPool', $this->useCustomPool, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('agentsLocation', $this->agentsLocation, true);
        Model::validateRequired('chainMonitorDataList', $this->chainMonitorDataList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->totalRequestCount) {
            $res['TotalRequestCount'] = $this->totalRequestCount;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }
        if (null !== $this->requestBps) {
            $res['RequestBps'] = $this->requestBps;
        }
        if (null !== $this->responseBps) {
            $res['ResponseBps'] = $this->responseBps;
        }
        if (null !== $this->failedRequestCount) {
            $res['FailedRequestCount'] = $this->failedRequestCount;
        }
        if (null !== $this->failedBusinessCount) {
            $res['FailedBusinessCount'] = $this->failedBusinessCount;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->concurrencyLimit) {
            $res['ConcurrencyLimit'] = $this->concurrencyLimit;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }
        if (null !== $this->tpsLimit) {
            $res['TpsLimit'] = $this->tpsLimit;
        }
        if (null !== $this->aliveAgents) {
            $res['AliveAgents'] = $this->aliveAgents;
        }
        if (null !== $this->totalAgents) {
            $res['TotalAgents'] = $this->totalAgents;
        }
        if (null !== $this->seg90Rt) {
            $res['Seg90Rt'] = $this->seg90Rt;
        }
        if (null !== $this->averageRt) {
            $res['AverageRt'] = $this->averageRt;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->currentTime) {
            $res['CurrentTime'] = $this->currentTime;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->useCustomPool) {
            $res['UseCustomPool'] = $this->useCustomPool;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->agentsLocation) {
            $res['AgentsLocation'] = [];
            if (null !== $this->agentsLocation && \is_array($this->agentsLocation)) {
                $n = 0;
                foreach ($this->agentsLocation as $item) {
                    $res['AgentsLocation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chainMonitorDataList) {
            $res['ChainMonitorDataList'] = [];
            if (null !== $this->chainMonitorDataList && \is_array($this->chainMonitorDataList)) {
                $n = 0;
                foreach ($this->chainMonitorDataList as $item) {
                    $res['ChainMonitorDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSceneRunningStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['TotalRequestCount'])) {
            $model->totalRequestCount = $map['TotalRequestCount'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }
        if (isset($map['RequestBps'])) {
            $model->requestBps = $map['RequestBps'];
        }
        if (isset($map['ResponseBps'])) {
            $model->responseBps = $map['ResponseBps'];
        }
        if (isset($map['FailedRequestCount'])) {
            $model->failedRequestCount = $map['FailedRequestCount'];
        }
        if (isset($map['FailedBusinessCount'])) {
            $model->failedBusinessCount = $map['FailedBusinessCount'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ConcurrencyLimit'])) {
            $model->concurrencyLimit = $map['ConcurrencyLimit'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }
        if (isset($map['TpsLimit'])) {
            $model->tpsLimit = $map['TpsLimit'];
        }
        if (isset($map['AliveAgents'])) {
            $model->aliveAgents = $map['AliveAgents'];
        }
        if (isset($map['TotalAgents'])) {
            $model->totalAgents = $map['TotalAgents'];
        }
        if (isset($map['Seg90Rt'])) {
            $model->seg90Rt = $map['Seg90Rt'];
        }
        if (isset($map['AverageRt'])) {
            $model->averageRt = $map['AverageRt'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CurrentTime'])) {
            $model->currentTime = $map['CurrentTime'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['UseCustomPool'])) {
            $model->useCustomPool = $map['UseCustomPool'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AgentsLocation'])) {
            if (!empty($map['AgentsLocation'])) {
                $model->agentsLocation = [];
                $n                     = 0;
                foreach ($map['AgentsLocation'] as $item) {
                    $model->agentsLocation[$n++] = null !== $item ? agentsLocation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChainMonitorDataList'])) {
            if (!empty($map['ChainMonitorDataList'])) {
                $model->chainMonitorDataList = [];
                $n                           = 0;
                foreach ($map['ChainMonitorDataList'] as $item) {
                    $model->chainMonitorDataList[$n++] = null !== $item ? chainMonitorDataList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
