<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeJMeterLogsRequest extends Model
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
     * @description reportId
     *
     * @var string
     */
    public $reportId;

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
     * @description taskId
     *
     * @var int
     */
    public $taskId;

    /**
     * @description thread
     *
     * @var string
     */
    public $thread;

    /**
     * @description level
     *
     * @var string
     */
    public $level;

    /**
     * @description loggerName
     *
     * @var string
     */
    public $loggerName;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyword;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'reportId'   => 'ReportId',
        'beginTime'  => 'BeginTime',
        'endTime'    => 'EndTime',
        'taskId'     => 'TaskId',
        'thread'     => 'Thread',
        'level'      => 'Level',
        'loggerName' => 'LoggerName',
        'keyword'    => 'Keyword',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
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
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->loggerName) {
            $res['LoggerName'] = $this->loggerName;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJMeterLogsRequest
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
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LoggerName'])) {
            $model->loggerName = $map['LoggerName'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        return $model;
    }
}
