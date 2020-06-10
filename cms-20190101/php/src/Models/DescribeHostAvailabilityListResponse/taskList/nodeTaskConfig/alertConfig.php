<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig\alertConfig\escalationList;
use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description notifyType
     *
     * @var int
     */
    public $notifyType;

    /**
     * @description startTime
     *
     * @var int
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;

    /**
     * @description silenceTime
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description webhook
     *
     * @var string
     */
    public $webHook;

    /**
     * @description escalationList
     *
     * @var escalationList
     */
    public $escalationList;
    protected $_name = [
        'notifyType'     => 'NotifyType',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'silenceTime'    => 'SilenceTime',
        'webHook'        => 'WebHook',
        'escalationList' => 'EscalationList',
    ];

    public function validate()
    {
        Model::validateRequired('notifyType', $this->notifyType, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('silenceTime', $this->silenceTime, true);
        Model::validateRequired('webHook', $this->webHook, true);
        Model::validateRequired('escalationList', $this->escalationList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
        }
        if (null !== $this->escalationList) {
            $res['EscalationList'] = null !== $this->escalationList ? $this->escalationList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }
        if (isset($map['EscalationList'])) {
            $model->escalationList = escalationList::fromMap($map['EscalationList']);
        }

        return $model;
    }
}
