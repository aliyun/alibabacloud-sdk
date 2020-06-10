<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainSummaryResponse;

use AlibabaCloud\Tea\Model;

class chainSummary extends Model
{
    /**
     * @description chainId
     *
     * @var int
     */
    public $chainId;

    /**
     * @description avgTps
     *
     * @var float
     */
    public $averageTps;

    /**
     * @description reqSucRate
     *
     * @var float
     */
    public $succeedRequestRate;

    /**
     * @description hasAssert
     *
     * @var bool
     */
    public $hasCheckPoint;

    /**
     * @description chainName
     *
     * @var string
     */
    public $chainName;

    /**
     * @description totalRequest
     *
     * @var int
     */
    public $totalRequest;

    /**
     * @description count5xx
     *
     * @var int
     */
    public $count5XX;

    /**
     * @description relationName
     *
     * @var string
     */
    public $relationName;

    /**
     * @description count4xx
     *
     * @var int
     */
    public $count4XX;

    /**
     * @description countTimeout
     *
     * @var int
     */
    public $countTimeout;

    /**
     * @description seg75Rt
     *
     * @var int
     */
    public $seg75Rt;

    /**
     * @description bizFailCount
     *
     * @var int
     */
    public $failedBusinessCount;

    /**
     * @description reqFailCount
     *
     * @var int
     */
    public $failedRequestCount;

    /**
     * @description seg90Rt
     *
     * @var int
     */
    public $seg90Rt;

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
     * @description count3xx
     *
     * @var int
     */
    public $count3XX;

    /**
     * @description avgRt
     *
     * @var float
     */
    public $averageRt;

    /**
     * @description relationId
     *
     * @var int
     */
    public $relationId;

    /**
     * @description bizSucRate
     *
     * @var float
     */
    public $succeedBusinessRate;

    /**
     * @description seg50Rt
     *
     * @var int
     */
    public $seg50Rt;

    /**
     * @description seg99Rt
     *
     * @var int
     */
    public $seg99Rt;

    /**
     * @description avgConcurrency
     *
     * @var float
     */
    public $averageConcurrency;
    protected $_name = [
        'chainId'             => 'ChainId',
        'averageTps'          => 'AverageTps',
        'succeedRequestRate'  => 'SucceedRequestRate',
        'hasCheckPoint'       => 'HasCheckPoint',
        'chainName'           => 'ChainName',
        'totalRequest'        => 'TotalRequest',
        'count5XX'            => 'Count5XX',
        'relationName'        => 'RelationName',
        'count4XX'            => 'Count4XX',
        'countTimeout'        => 'CountTimeout',
        'seg75Rt'             => 'Seg75Rt',
        'failedBusinessCount' => 'FailedBusinessCount',
        'failedRequestCount'  => 'FailedRequestCount',
        'seg90Rt'             => 'Seg90Rt',
        'maxRt'               => 'MaxRt',
        'minRt'               => 'MinRt',
        'count3XX'            => 'Count3XX',
        'averageRt'           => 'AverageRt',
        'relationId'          => 'RelationId',
        'succeedBusinessRate' => 'SucceedBusinessRate',
        'seg50Rt'             => 'Seg50Rt',
        'seg99Rt'             => 'Seg99Rt',
        'averageConcurrency'  => 'AverageConcurrency',
    ];

    public function validate()
    {
        Model::validateRequired('chainId', $this->chainId, true);
        Model::validateRequired('averageTps', $this->averageTps, true);
        Model::validateRequired('succeedRequestRate', $this->succeedRequestRate, true);
        Model::validateRequired('hasCheckPoint', $this->hasCheckPoint, true);
        Model::validateRequired('chainName', $this->chainName, true);
        Model::validateRequired('totalRequest', $this->totalRequest, true);
        Model::validateRequired('count5XX', $this->count5XX, true);
        Model::validateRequired('relationName', $this->relationName, true);
        Model::validateRequired('count4XX', $this->count4XX, true);
        Model::validateRequired('countTimeout', $this->countTimeout, true);
        Model::validateRequired('seg75Rt', $this->seg75Rt, true);
        Model::validateRequired('failedBusinessCount', $this->failedBusinessCount, true);
        Model::validateRequired('failedRequestCount', $this->failedRequestCount, true);
        Model::validateRequired('seg90Rt', $this->seg90Rt, true);
        Model::validateRequired('maxRt', $this->maxRt, true);
        Model::validateRequired('minRt', $this->minRt, true);
        Model::validateRequired('count3XX', $this->count3XX, true);
        Model::validateRequired('averageRt', $this->averageRt, true);
        Model::validateRequired('relationId', $this->relationId, true);
        Model::validateRequired('succeedBusinessRate', $this->succeedBusinessRate, true);
        Model::validateRequired('seg50Rt', $this->seg50Rt, true);
        Model::validateRequired('seg99Rt', $this->seg99Rt, true);
        Model::validateRequired('averageConcurrency', $this->averageConcurrency, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->averageTps) {
            $res['AverageTps'] = $this->averageTps;
        }
        if (null !== $this->succeedRequestRate) {
            $res['SucceedRequestRate'] = $this->succeedRequestRate;
        }
        if (null !== $this->hasCheckPoint) {
            $res['HasCheckPoint'] = $this->hasCheckPoint;
        }
        if (null !== $this->chainName) {
            $res['ChainName'] = $this->chainName;
        }
        if (null !== $this->totalRequest) {
            $res['TotalRequest'] = $this->totalRequest;
        }
        if (null !== $this->count5XX) {
            $res['Count5XX'] = $this->count5XX;
        }
        if (null !== $this->relationName) {
            $res['RelationName'] = $this->relationName;
        }
        if (null !== $this->count4XX) {
            $res['Count4XX'] = $this->count4XX;
        }
        if (null !== $this->countTimeout) {
            $res['CountTimeout'] = $this->countTimeout;
        }
        if (null !== $this->seg75Rt) {
            $res['Seg75Rt'] = $this->seg75Rt;
        }
        if (null !== $this->failedBusinessCount) {
            $res['FailedBusinessCount'] = $this->failedBusinessCount;
        }
        if (null !== $this->failedRequestCount) {
            $res['FailedRequestCount'] = $this->failedRequestCount;
        }
        if (null !== $this->seg90Rt) {
            $res['Seg90Rt'] = $this->seg90Rt;
        }
        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }
        if (null !== $this->minRt) {
            $res['MinRt'] = $this->minRt;
        }
        if (null !== $this->count3XX) {
            $res['Count3XX'] = $this->count3XX;
        }
        if (null !== $this->averageRt) {
            $res['AverageRt'] = $this->averageRt;
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->succeedBusinessRate) {
            $res['SucceedBusinessRate'] = $this->succeedBusinessRate;
        }
        if (null !== $this->seg50Rt) {
            $res['Seg50Rt'] = $this->seg50Rt;
        }
        if (null !== $this->seg99Rt) {
            $res['Seg99Rt'] = $this->seg99Rt;
        }
        if (null !== $this->averageConcurrency) {
            $res['AverageConcurrency'] = $this->averageConcurrency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chainSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['AverageTps'])) {
            $model->averageTps = $map['AverageTps'];
        }
        if (isset($map['SucceedRequestRate'])) {
            $model->succeedRequestRate = $map['SucceedRequestRate'];
        }
        if (isset($map['HasCheckPoint'])) {
            $model->hasCheckPoint = $map['HasCheckPoint'];
        }
        if (isset($map['ChainName'])) {
            $model->chainName = $map['ChainName'];
        }
        if (isset($map['TotalRequest'])) {
            $model->totalRequest = $map['TotalRequest'];
        }
        if (isset($map['Count5XX'])) {
            $model->count5XX = $map['Count5XX'];
        }
        if (isset($map['RelationName'])) {
            $model->relationName = $map['RelationName'];
        }
        if (isset($map['Count4XX'])) {
            $model->count4XX = $map['Count4XX'];
        }
        if (isset($map['CountTimeout'])) {
            $model->countTimeout = $map['CountTimeout'];
        }
        if (isset($map['Seg75Rt'])) {
            $model->seg75Rt = $map['Seg75Rt'];
        }
        if (isset($map['FailedBusinessCount'])) {
            $model->failedBusinessCount = $map['FailedBusinessCount'];
        }
        if (isset($map['FailedRequestCount'])) {
            $model->failedRequestCount = $map['FailedRequestCount'];
        }
        if (isset($map['Seg90Rt'])) {
            $model->seg90Rt = $map['Seg90Rt'];
        }
        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }
        if (isset($map['MinRt'])) {
            $model->minRt = $map['MinRt'];
        }
        if (isset($map['Count3XX'])) {
            $model->count3XX = $map['Count3XX'];
        }
        if (isset($map['AverageRt'])) {
            $model->averageRt = $map['AverageRt'];
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['SucceedBusinessRate'])) {
            $model->succeedBusinessRate = $map['SucceedBusinessRate'];
        }
        if (isset($map['Seg50Rt'])) {
            $model->seg50Rt = $map['Seg50Rt'];
        }
        if (isset($map['Seg99Rt'])) {
            $model->seg99Rt = $map['Seg99Rt'];
        }
        if (isset($map['AverageConcurrency'])) {
            $model->averageConcurrency = $map['AverageConcurrency'];
        }

        return $model;
    }
}
