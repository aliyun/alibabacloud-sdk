<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeReportRequest extends Model
{
    /**
     * @description ReportId
     *
     * @var string
     */
    public $reportId;
    protected $_name = [
        'reportId' => 'ReportId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
