<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponse\siteMonitors;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponse\siteMonitors\siteMonitor\optionsJson;
use AlibabaCloud\Tea\Model;

class siteMonitor extends Model
{
    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description taskTypeAlias
     *
     * @var string
     */
    public $taskType;

    /**
     * @description address
     *
     * @var string
     */
    public $address;

    /**
     * @description taskState
     *
     * @var string
     */
    public $taskState;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description taskName
     *
     * @var string
     */
    public $taskName;

    /**
     * @description interval
     *
     * @var string
     */
    public $interval;

    /**
     * @description ts
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description options
     *
     * @var optionsJson
     */
    public $optionsJson;
    protected $_name = [
        'taskId'      => 'TaskId',
        'taskType'    => 'TaskType',
        'address'     => 'Address',
        'taskState'   => 'TaskState',
        'createTime'  => 'CreateTime',
        'taskName'    => 'TaskName',
        'interval'    => 'Interval',
        'updateTime'  => 'UpdateTime',
        'optionsJson' => 'OptionsJson',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('taskState', $this->taskState, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('taskName', $this->taskName, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('optionsJson', $this->optionsJson, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = null !== $this->optionsJson ? $this->optionsJson->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteMonitor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['OptionsJson'])) {
            $model->optionsJson = optionsJson::fromMap($map['OptionsJson']);
        }

        return $model;
    }
}
