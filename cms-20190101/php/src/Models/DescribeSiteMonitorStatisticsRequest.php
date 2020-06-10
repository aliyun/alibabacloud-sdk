<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorStatisticsRequest extends Model
{
    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description timeRange
     *
     * @var string
     */
    public $timeRange;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description metricName
     *
     * @var string
     */
    public $metricName;
    protected $_name = [
        'taskId'     => 'TaskId',
        'timeRange'  => 'TimeRange',
        'startTime'  => 'StartTime',
        'metricName' => 'MetricName',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('metricName', $this->metricName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        return $model;
    }
}
