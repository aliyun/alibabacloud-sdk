<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportResponse\agentsLocation;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportResponse\relations;
use AlibabaCloud\Tea\Model;

class DescribeReportResponse extends Model
{
    /**
     * @description averageConcurrency
     *
     * @var int
     */
    public $averageConcurrency;

    /**
     * @description averageBandWidth
     *
     * @var int
     */
    public $averageBandWidth;

    /**
     * @description succeedRequestRatio
     *
     * @var float
     */
    public $succeedRequestRatio;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;

    /**
     * @description beginTime
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description totalAgents
     *
     * @var int
     */
    public $totalAgents;

    /**
     * @description requestCount
     *
     * @var int
     */
    public $requestCount;

    /**
     * @description rpsLimit
     *
     * @var int
     */
    public $rpsLimit;

    /**
     * @description aliveAgents
     *
     * @var int
     */
    public $aliveAgents;

    /**
     * @description maxTps
     *
     * @var int
     */
    public $maxTps;

    /**
     * @description concurrencyLimit
     *
     * @var int
     */
    public $concurrencyLimit;

    /**
     * @description maxConcurrency
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description sceneDeleted
     *
     * @var bool
     */
    public $sceneDeleted;

    /**
     * @description duration
     *
     * @var string
     */
    public $duration;

    /**
     * @description maxBandWidth
     *
     * @var int
     */
    public $maxBandWidth;

    /**
     * @description vum
     *
     * @var int
     */
    public $vum;

    /**
     * @description failedBusinessCount
     *
     * @var int
     */
    public $failedBusinessCount;

    /**
     * @description failedRequestCount
     *
     * @var int
     */
    public $failedRequestCount;

    /**
     * @description businessRequestRatio
     *
     * @var float
     */
    public $businessRequestRatio;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

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
     * @description agentsLocation
     *
     * @var array
     */
    public $agentsLocation;

    /**
     * @description relations
     *
     * @var array
     */
    public $relations;
    protected $_name = [
        'averageConcurrency'   => 'AverageConcurrency',
        'averageBandWidth'     => 'AverageBandWidth',
        'succeedRequestRatio'  => 'SucceedRequestRatio',
        'endTime'              => 'EndTime',
        'beginTime'            => 'BeginTime',
        'totalAgents'          => 'TotalAgents',
        'requestCount'         => 'RequestCount',
        'rpsLimit'             => 'RpsLimit',
        'aliveAgents'          => 'AliveAgents',
        'maxTps'               => 'MaxTps',
        'concurrencyLimit'     => 'ConcurrencyLimit',
        'maxConcurrency'       => 'MaxConcurrency',
        'sceneDeleted'         => 'SceneDeleted',
        'duration'             => 'Duration',
        'maxBandWidth'         => 'MaxBandWidth',
        'vum'                  => 'Vum',
        'failedBusinessCount'  => 'FailedBusinessCount',
        'failedRequestCount'   => 'FailedRequestCount',
        'businessRequestRatio' => 'BusinessRequestRatio',
        'requestId'            => 'RequestId',
        'code'                 => 'Code',
        'message'              => 'Message',
        'httpStatusCode'       => 'HttpStatusCode',
        'success'              => 'Success',
        'agentsLocation'       => 'AgentsLocation',
        'relations'            => 'Relations',
    ];

    public function validate()
    {
        Model::validateRequired('averageConcurrency', $this->averageConcurrency, true);
        Model::validateRequired('averageBandWidth', $this->averageBandWidth, true);
        Model::validateRequired('succeedRequestRatio', $this->succeedRequestRatio, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
        Model::validateRequired('totalAgents', $this->totalAgents, true);
        Model::validateRequired('requestCount', $this->requestCount, true);
        Model::validateRequired('rpsLimit', $this->rpsLimit, true);
        Model::validateRequired('aliveAgents', $this->aliveAgents, true);
        Model::validateRequired('maxTps', $this->maxTps, true);
        Model::validateRequired('concurrencyLimit', $this->concurrencyLimit, true);
        Model::validateRequired('maxConcurrency', $this->maxConcurrency, true);
        Model::validateRequired('sceneDeleted', $this->sceneDeleted, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('maxBandWidth', $this->maxBandWidth, true);
        Model::validateRequired('vum', $this->vum, true);
        Model::validateRequired('failedBusinessCount', $this->failedBusinessCount, true);
        Model::validateRequired('failedRequestCount', $this->failedRequestCount, true);
        Model::validateRequired('businessRequestRatio', $this->businessRequestRatio, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('agentsLocation', $this->agentsLocation, true);
        Model::validateRequired('relations', $this->relations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageConcurrency) {
            $res['AverageConcurrency'] = $this->averageConcurrency;
        }
        if (null !== $this->averageBandWidth) {
            $res['AverageBandWidth'] = $this->averageBandWidth;
        }
        if (null !== $this->succeedRequestRatio) {
            $res['SucceedRequestRatio'] = $this->succeedRequestRatio;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->totalAgents) {
            $res['TotalAgents'] = $this->totalAgents;
        }
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->rpsLimit) {
            $res['RpsLimit'] = $this->rpsLimit;
        }
        if (null !== $this->aliveAgents) {
            $res['AliveAgents'] = $this->aliveAgents;
        }
        if (null !== $this->maxTps) {
            $res['MaxTps'] = $this->maxTps;
        }
        if (null !== $this->concurrencyLimit) {
            $res['ConcurrencyLimit'] = $this->concurrencyLimit;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->sceneDeleted) {
            $res['SceneDeleted'] = $this->sceneDeleted;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->maxBandWidth) {
            $res['MaxBandWidth'] = $this->maxBandWidth;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }
        if (null !== $this->failedBusinessCount) {
            $res['FailedBusinessCount'] = $this->failedBusinessCount;
        }
        if (null !== $this->failedRequestCount) {
            $res['FailedRequestCount'] = $this->failedRequestCount;
        }
        if (null !== $this->businessRequestRatio) {
            $res['BusinessRequestRatio'] = $this->businessRequestRatio;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->agentsLocation) {
            $res['AgentsLocation'] = [];
            if (null !== $this->agentsLocation && \is_array($this->agentsLocation)) {
                $n = 0;
                foreach ($this->agentsLocation as $item) {
                    $res['AgentsLocation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relations) {
            $res['Relations'] = [];
            if (null !== $this->relations && \is_array($this->relations)) {
                $n = 0;
                foreach ($this->relations as $item) {
                    $res['Relations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageConcurrency'])) {
            $model->averageConcurrency = $map['AverageConcurrency'];
        }
        if (isset($map['AverageBandWidth'])) {
            $model->averageBandWidth = $map['AverageBandWidth'];
        }
        if (isset($map['SucceedRequestRatio'])) {
            $model->succeedRequestRatio = $map['SucceedRequestRatio'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['TotalAgents'])) {
            $model->totalAgents = $map['TotalAgents'];
        }
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['RpsLimit'])) {
            $model->rpsLimit = $map['RpsLimit'];
        }
        if (isset($map['AliveAgents'])) {
            $model->aliveAgents = $map['AliveAgents'];
        }
        if (isset($map['MaxTps'])) {
            $model->maxTps = $map['MaxTps'];
        }
        if (isset($map['ConcurrencyLimit'])) {
            $model->concurrencyLimit = $map['ConcurrencyLimit'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['SceneDeleted'])) {
            $model->sceneDeleted = $map['SceneDeleted'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MaxBandWidth'])) {
            $model->maxBandWidth = $map['MaxBandWidth'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }
        if (isset($map['FailedBusinessCount'])) {
            $model->failedBusinessCount = $map['FailedBusinessCount'];
        }
        if (isset($map['FailedRequestCount'])) {
            $model->failedRequestCount = $map['FailedRequestCount'];
        }
        if (isset($map['BusinessRequestRatio'])) {
            $model->businessRequestRatio = $map['BusinessRequestRatio'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['AgentsLocation'])) {
            if (!empty($map['AgentsLocation'])) {
                $model->agentsLocation = [];
                $n                     = 0;
                foreach ($map['AgentsLocation'] as $item) {
                    $model->agentsLocation[$n++] = null !== $item ? agentsLocation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Relations'])) {
            if (!empty($map['Relations'])) {
                $model->relations = [];
                $n                = 0;
                foreach ($map['Relations'] as $item) {
                    $model->relations[$n++] = null !== $item ? relations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
