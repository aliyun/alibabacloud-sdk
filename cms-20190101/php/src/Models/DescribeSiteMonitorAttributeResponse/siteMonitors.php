<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse\siteMonitors\ispCities;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse\siteMonitors\optionJson;
use AlibabaCloud\Tea\Model;

class siteMonitors extends Model
{
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
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description ispCity
     *
     * @var ispCities
     */
    public $ispCities;

    /**
     * @description options
     *
     * @var optionJson
     */
    public $optionJson;
    protected $_name = [
        'taskType'   => 'TaskType',
        'address'    => 'Address',
        'taskState'  => 'TaskState',
        'taskName'   => 'TaskName',
        'interval'   => 'Interval',
        'taskId'     => 'TaskId',
        'ispCities'  => 'IspCities',
        'optionJson' => 'OptionJson',
    ];

    public function validate()
    {
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('taskState', $this->taskState, true);
        Model::validateRequired('taskName', $this->taskName, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('ispCities', $this->ispCities, true);
        Model::validateRequired('optionJson', $this->optionJson, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->ispCities) {
            $res['IspCities'] = null !== $this->ispCities ? $this->ispCities->toMap() : null;
        }
        if (null !== $this->optionJson) {
            $res['OptionJson'] = null !== $this->optionJson ? $this->optionJson->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteMonitors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['IspCities'])) {
            $model->ispCities = ispCities::fromMap($map['IspCities']);
        }
        if (isset($map['OptionJson'])) {
            $model->optionJson = optionJson::fromMap($map['OptionJson']);
        }

        return $model;
    }
}
