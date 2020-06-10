<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeJMeterSampleSummaryRequest extends Model
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
    protected $_name = [
        'reportId'  => 'ReportId',
        'samplerId' => 'SamplerId',
    ];

    public function validate()
    {
        Model::validateRequired('reportId', $this->reportId, true);
        Model::validateRequired('samplerId', $this->samplerId, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJMeterSampleSummaryRequest
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

        return $model;
    }
}
