<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainDetailResponse;

use AlibabaCloud\Tea\Model;

class chainDetails extends Model
{
    /**
     * @description totalFail
     *
     * @var int
     */
    public $totalFail;

    /**
     * @description qpsFail
     *
     * @var float
     */
    public $qpsFail;

    /**
     * @description total300
     *
     * @var int
     */
    public $total3XX;

    /**
     * @description concurrency
     *
     * @var float
     */
    public $realConcurrency;

    /**
     * @description timePoint
     *
     * @var int
     */
    public $timePoint;

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
     * @description realTotal
     *
     * @var int
     */
    public $totalRequest;

    /**
     * @description qps200
     *
     * @var float
     */
    public $qps2XX;

    /**
     * @description total400
     *
     * @var int
     */
    public $total4XX;

    /**
     * @description total500
     *
     * @var int
     */
    public $total5XX;

    /**
     * @description qps400
     *
     * @var float
     */
    public $qps4XX;

    /**
     * @description realQps
     *
     * @var float
     */
    public $realQps;

    /**
     * @description configQps
     *
     * @var int
     */
    public $configQps;

    /**
     * @description avgRt
     *
     * @var int
     */
    public $averageRt;

    /**
     * @description bpsRequest
     *
     * @var int
     */
    public $bpsRequest;

    /**
     * @description chainId
     *
     * @var int
     */
    public $chainId;

    /**
     * @description bpsResponse
     *
     * @var int
     */
    public $bpsResponse;

    /**
     * @description total200
     *
     * @var int
     */
    public $total2XX;

    /**
     * @description qps500
     *
     * @var float
     */
    public $qps5XX;
    protected $_name = [
        'totalFail'       => 'TotalFail',
        'qpsFail'         => 'QpsFail',
        'total3XX'        => 'Total3XX',
        'realConcurrency' => 'RealConcurrency',
        'timePoint'       => 'TimePoint',
        'maxRt'           => 'MaxRt',
        'minRt'           => 'MinRt',
        'totalRequest'    => 'TotalRequest',
        'qps2XX'          => 'Qps2XX',
        'total4XX'        => 'Total4XX',
        'total5XX'        => 'Total5XX',
        'qps4XX'          => 'Qps4XX',
        'realQps'         => 'RealQps',
        'configQps'       => 'ConfigQps',
        'averageRt'       => 'AverageRt',
        'bpsRequest'      => 'BpsRequest',
        'chainId'         => 'ChainId',
        'bpsResponse'     => 'BpsResponse',
        'total2XX'        => 'Total2XX',
        'qps5XX'          => 'Qps5XX',
    ];

    public function validate()
    {
        Model::validateRequired('totalFail', $this->totalFail, true);
        Model::validateRequired('qpsFail', $this->qpsFail, true);
        Model::validateRequired('total3XX', $this->total3XX, true);
        Model::validateRequired('realConcurrency', $this->realConcurrency, true);
        Model::validateRequired('timePoint', $this->timePoint, true);
        Model::validateRequired('maxRt', $this->maxRt, true);
        Model::validateRequired('minRt', $this->minRt, true);
        Model::validateRequired('totalRequest', $this->totalRequest, true);
        Model::validateRequired('qps2XX', $this->qps2XX, true);
        Model::validateRequired('total4XX', $this->total4XX, true);
        Model::validateRequired('total5XX', $this->total5XX, true);
        Model::validateRequired('qps4XX', $this->qps4XX, true);
        Model::validateRequired('realQps', $this->realQps, true);
        Model::validateRequired('configQps', $this->configQps, true);
        Model::validateRequired('averageRt', $this->averageRt, true);
        Model::validateRequired('bpsRequest', $this->bpsRequest, true);
        Model::validateRequired('chainId', $this->chainId, true);
        Model::validateRequired('bpsResponse', $this->bpsResponse, true);
        Model::validateRequired('total2XX', $this->total2XX, true);
        Model::validateRequired('qps5XX', $this->qps5XX, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalFail) {
            $res['TotalFail'] = $this->totalFail;
        }
        if (null !== $this->qpsFail) {
            $res['QpsFail'] = $this->qpsFail;
        }
        if (null !== $this->total3XX) {
            $res['Total3XX'] = $this->total3XX;
        }
        if (null !== $this->realConcurrency) {
            $res['RealConcurrency'] = $this->realConcurrency;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }
        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }
        if (null !== $this->minRt) {
            $res['MinRt'] = $this->minRt;
        }
        if (null !== $this->totalRequest) {
            $res['TotalRequest'] = $this->totalRequest;
        }
        if (null !== $this->qps2XX) {
            $res['Qps2XX'] = $this->qps2XX;
        }
        if (null !== $this->total4XX) {
            $res['Total4XX'] = $this->total4XX;
        }
        if (null !== $this->total5XX) {
            $res['Total5XX'] = $this->total5XX;
        }
        if (null !== $this->qps4XX) {
            $res['Qps4XX'] = $this->qps4XX;
        }
        if (null !== $this->realQps) {
            $res['RealQps'] = $this->realQps;
        }
        if (null !== $this->configQps) {
            $res['ConfigQps'] = $this->configQps;
        }
        if (null !== $this->averageRt) {
            $res['AverageRt'] = $this->averageRt;
        }
        if (null !== $this->bpsRequest) {
            $res['BpsRequest'] = $this->bpsRequest;
        }
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->bpsResponse) {
            $res['BpsResponse'] = $this->bpsResponse;
        }
        if (null !== $this->total2XX) {
            $res['Total2XX'] = $this->total2XX;
        }
        if (null !== $this->qps5XX) {
            $res['Qps5XX'] = $this->qps5XX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chainDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalFail'])) {
            $model->totalFail = $map['TotalFail'];
        }
        if (isset($map['QpsFail'])) {
            $model->qpsFail = $map['QpsFail'];
        }
        if (isset($map['Total3XX'])) {
            $model->total3XX = $map['Total3XX'];
        }
        if (isset($map['RealConcurrency'])) {
            $model->realConcurrency = $map['RealConcurrency'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }
        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }
        if (isset($map['MinRt'])) {
            $model->minRt = $map['MinRt'];
        }
        if (isset($map['TotalRequest'])) {
            $model->totalRequest = $map['TotalRequest'];
        }
        if (isset($map['Qps2XX'])) {
            $model->qps2XX = $map['Qps2XX'];
        }
        if (isset($map['Total4XX'])) {
            $model->total4XX = $map['Total4XX'];
        }
        if (isset($map['Total5XX'])) {
            $model->total5XX = $map['Total5XX'];
        }
        if (isset($map['Qps4XX'])) {
            $model->qps4XX = $map['Qps4XX'];
        }
        if (isset($map['RealQps'])) {
            $model->realQps = $map['RealQps'];
        }
        if (isset($map['ConfigQps'])) {
            $model->configQps = $map['ConfigQps'];
        }
        if (isset($map['AverageRt'])) {
            $model->averageRt = $map['AverageRt'];
        }
        if (isset($map['BpsRequest'])) {
            $model->bpsRequest = $map['BpsRequest'];
        }
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['BpsResponse'])) {
            $model->bpsResponse = $map['BpsResponse'];
        }
        if (isset($map['Total2XX'])) {
            $model->total2XX = $map['Total2XX'];
        }
        if (isset($map['Qps5XX'])) {
            $model->qps5XX = $map['Qps5XX'];
        }

        return $model;
    }
}
