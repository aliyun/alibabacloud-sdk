<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeJMeterSamplingLogsRequest extends Model
{
    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

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
     * @description samplerId
     *
     * @var int
     */
    public $samplerId;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description thread
     *
     * @var string
     */
    public $thread;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyword;

    /**
     * @description rtRange
     *
     * @var string
     */
    public $rtRange;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'beginTime'  => 'BeginTime',
        'endTime'    => 'EndTime',
        'reportId'   => 'ReportId',
        'taskId'     => 'TaskId',
        'samplerId'  => 'SamplerId',
        'success'    => 'Success',
        'thread'     => 'Thread',
        'keyword'    => 'Keyword',
        'rtRange'    => 'RtRange',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('reportId', $this->reportId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->samplerId) {
            $res['SamplerId'] = $this->samplerId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->rtRange) {
            $res['RtRange'] = $this->rtRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJMeterSamplingLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['SamplerId'])) {
            $model->samplerId = $map['SamplerId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['RtRange'])) {
            $model->rtRange = $map['RtRange'];
        }

        return $model;
    }
}
