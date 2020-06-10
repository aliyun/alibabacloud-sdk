<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteMonitorRequest extends Model
{
    /**
     * @description address
     *
     * @var string
     */
    public $address;

    /**
     * @description taskTypeAlias
     *
     * @var string
     */
    public $taskType;

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
     * @description ispCity
     *
     * @var string
     */
    public $ispCities;

    /**
     * @description options
     *
     * @var string
     */
    public $optionsJson;

    /**
     * @description alertIds
     *
     * @var string
     */
    public $alertIds;
    protected $_name = [
        'address'     => 'Address',
        'taskType'    => 'TaskType',
        'taskName'    => 'TaskName',
        'interval'    => 'Interval',
        'ispCities'   => 'IspCities',
        'optionsJson' => 'OptionsJson',
        'alertIds'    => 'AlertIds',
    ];

    public function validate()
    {
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('taskName', $this->taskName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ispCities) {
            $res['IspCities'] = $this->ispCities;
        }
        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = $this->optionsJson;
        }
        if (null !== $this->alertIds) {
            $res['AlertIds'] = $this->alertIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IspCities'])) {
            $model->ispCities = $map['IspCities'];
        }
        if (isset($map['OptionsJson'])) {
            $model->optionsJson = $map['OptionsJson'];
        }
        if (isset($map['AlertIds'])) {
            $model->alertIds = $map['AlertIds'];
        }

        return $model;
    }
}
