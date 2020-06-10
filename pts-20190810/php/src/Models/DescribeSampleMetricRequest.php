<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeSampleMetricRequest extends Model
{
    /**
     * @description reportId
     *
     * @var string
     */
    public $reportId;

    /**
     * @description samplerId
     *
     * @var int
     */
    public $samplerId;

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
        'samplerId' => 'SamplerId',
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->samplerId) {
            $res['SamplerId'] = $this->samplerId;
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
     * @return DescribeSampleMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['SamplerId'])) {
            $model->samplerId = $map['SamplerId'];
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
