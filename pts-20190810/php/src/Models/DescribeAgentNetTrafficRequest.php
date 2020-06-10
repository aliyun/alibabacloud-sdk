<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeAgentNetTrafficRequest extends Model
{
    /**
     * @description reportId
     *
     * @var string
     */
    public $reportId;

    /**
     * @description taskId
     *
     * @var int
     */
    public $taskId;

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
        'taskId'    => 'TaskId',
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
    ];

    public function validate()
    {
        Model::validateRequired('reportId', $this->reportId, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
     * @return DescribeAgentNetTrafficRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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
