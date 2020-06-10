<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeReportChainDetailRequest extends Model
{
    /**
     * @description reportId
     *
     * @var string
     */
    public $reportId;

    /**
     * @description chainId
     *
     * @var int
     */
    public $chainId;

    /**
     * @description beginTime
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;
    protected $_name = [
        'reportId'  => 'ReportId',
        'chainId'   => 'ChainId',
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
    ];

    public function validate()
    {
        Model::validateRequired('reportId', $this->reportId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportChainDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
