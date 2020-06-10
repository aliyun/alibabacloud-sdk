<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifySiteMonitorRequest extends Model
{
    /**
     * @description address
     *
     * @var string
     */
    public $address;

    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

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
        'taskId'      => 'TaskId',
        'taskName'    => 'TaskName',
        'interval'    => 'Interval',
        'ispCities'   => 'IspCities',
        'optionsJson' => 'OptionsJson',
        'alertIds'    => 'AlertIds',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
     * @return ModifySiteMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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
