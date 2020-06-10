<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse\chainMonitorDataList\checkPointResult;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse\chainMonitorDataList\qpsSummary;
use AlibabaCloud\Tea\Model;

class chainMonitorDataList extends Model
{
    /**
     * @description chainId
     *
     * @var int
     */
    public $chainId;

    /**
     * @description timePoint
     *
     * @var int
     */
    public $timePoint;

    /**
     * @description configQps
     *
     * @var int
     */
    public $configQps;

    /**
     * @description realQps
     *
     * @var float
     */
    public $realQps;

    /**
     * @description concurrency
     *
     * @var float
     */
    public $concurrency;

    /**
     * @description qps200
     *
     * @var float
     */
    public $qps2XX;

    /**
     * @description qpsFail
     *
     * @var float
     */
    public $failedQps;

    /**
     * @description avgRt
     *
     * @var int
     */
    public $averageRt;

    /**
     * @description maxRt
     *
     * @var int
     */
    public $maxRt;

    /**
     * @description minRt
     *
     * @var int
     */
    public $minRt;

    /**
     * @description count200
     *
     * @var int
     */
    public $count2XX;

    /**
     * @description countFail
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description queueSize
     *
     * @var int
     */
    public $queueSize;

    /**
     * @description queueCapacity
     *
     * @var int
     */
    public $queueCapacity;

    /**
     * @description qpsSummary
     *
     * @var array
     */
    public $qpsSummary;

    /**
     * @description overBizAssert
     *
     * @var checkPointResult
     */
    public $checkPointResult;
    protected $_name = [
        'chainId'          => 'ChainId',
        'timePoint'        => 'TimePoint',
        'configQps'        => 'ConfigQps',
        'realQps'          => 'RealQps',
        'concurrency'      => 'Concurrency',
        'qps2XX'           => 'Qps2XX',
        'failedQps'        => 'FailedQps',
        'averageRt'        => 'AverageRt',
        'maxRt'            => 'MaxRt',
        'minRt'            => 'MinRt',
        'count2XX'         => 'Count2XX',
        'failedCount'      => 'FailedCount',
        'queueSize'        => 'QueueSize',
        'queueCapacity'    => 'QueueCapacity',
        'qpsSummary'       => 'QpsSummary',
        'checkPointResult' => 'CheckPointResult',
    ];

    public function validate()
    {
        Model::validateRequired('chainId', $this->chainId, true);
        Model::validateRequired('timePoint', $this->timePoint, true);
        Model::validateRequired('configQps', $this->configQps, true);
        Model::validateRequired('realQps', $this->realQps, true);
        Model::validateRequired('concurrency', $this->concurrency, true);
        Model::validateRequired('qps2XX', $this->qps2XX, true);
        Model::validateRequired('failedQps', $this->failedQps, true);
        Model::validateRequired('averageRt', $this->averageRt, true);
        Model::validateRequired('maxRt', $this->maxRt, true);
        Model::validateRequired('minRt', $this->minRt, true);
        Model::validateRequired('count2XX', $this->count2XX, true);
        Model::validateRequired('failedCount', $this->failedCount, true);
        Model::validateRequired('queueSize', $this->queueSize, true);
        Model::validateRequired('queueCapacity', $this->queueCapacity, true);
        Model::validateRequired('qpsSummary', $this->qpsSummary, true);
        Model::validateRequired('checkPointResult', $this->checkPointResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }
        if (null !== $this->configQps) {
            $res['ConfigQps'] = $this->configQps;
        }
        if (null !== $this->realQps) {
            $res['RealQps'] = $this->realQps;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->qps2XX) {
            $res['Qps2XX'] = $this->qps2XX;
        }
        if (null !== $this->failedQps) {
            $res['FailedQps'] = $this->failedQps;
        }
        if (null !== $this->averageRt) {
            $res['AverageRt'] = $this->averageRt;
        }
        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }
        if (null !== $this->minRt) {
            $res['MinRt'] = $this->minRt;
        }
        if (null !== $this->count2XX) {
            $res['Count2XX'] = $this->count2XX;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->queueSize) {
            $res['QueueSize'] = $this->queueSize;
        }
        if (null !== $this->queueCapacity) {
            $res['QueueCapacity'] = $this->queueCapacity;
        }
        if (null !== $this->qpsSummary) {
            $res['QpsSummary'] = [];
            if (null !== $this->qpsSummary && \is_array($this->qpsSummary)) {
                $n = 0;
                foreach ($this->qpsSummary as $item) {
                    $res['QpsSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkPointResult) {
            $res['CheckPointResult'] = null !== $this->checkPointResult ? $this->checkPointResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chainMonitorDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }
        if (isset($map['ConfigQps'])) {
            $model->configQps = $map['ConfigQps'];
        }
        if (isset($map['RealQps'])) {
            $model->realQps = $map['RealQps'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['Qps2XX'])) {
            $model->qps2XX = $map['Qps2XX'];
        }
        if (isset($map['FailedQps'])) {
            $model->failedQps = $map['FailedQps'];
        }
        if (isset($map['AverageRt'])) {
            $model->averageRt = $map['AverageRt'];
        }
        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }
        if (isset($map['MinRt'])) {
            $model->minRt = $map['MinRt'];
        }
        if (isset($map['Count2XX'])) {
            $model->count2XX = $map['Count2XX'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['QueueSize'])) {
            $model->queueSize = $map['QueueSize'];
        }
        if (isset($map['QueueCapacity'])) {
            $model->queueCapacity = $map['QueueCapacity'];
        }
        if (isset($map['QpsSummary'])) {
            if (!empty($map['QpsSummary'])) {
                $model->qpsSummary = [];
                $n                 = 0;
                foreach ($map['QpsSummary'] as $item) {
                    $model->qpsSummary[$n++] = null !== $item ? qpsSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CheckPointResult'])) {
            $model->checkPointResult = checkPointResult::fromMap($map['CheckPointResult']);
        }

        return $model;
    }
}
