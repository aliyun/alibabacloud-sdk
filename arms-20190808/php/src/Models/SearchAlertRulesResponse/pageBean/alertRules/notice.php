<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules;

use AlibabaCloud\Tea\Model;

class notice extends Model
{
    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;

    /**
     * @description noticeEndTime
     *
     * @var int
     */
    public $noticeEndTime;

    /**
     * @description noticeStartTime
     *
     * @var int
     */
    public $noticeStartTime;

    /**
     * @description startTime
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'noticeEndTime'   => 'NoticeEndTime',
        'noticeStartTime' => 'NoticeStartTime',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('noticeEndTime', $this->noticeEndTime, true);
        Model::validateRequired('noticeStartTime', $this->noticeStartTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->noticeEndTime) {
            $res['NoticeEndTime'] = $this->noticeEndTime;
        }
        if (null !== $this->noticeStartTime) {
            $res['NoticeStartTime'] = $this->noticeStartTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NoticeEndTime'])) {
            $model->noticeEndTime = $map['NoticeEndTime'];
        }
        if (isset($map['NoticeStartTime'])) {
            $model->noticeStartTime = $map['NoticeStartTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
