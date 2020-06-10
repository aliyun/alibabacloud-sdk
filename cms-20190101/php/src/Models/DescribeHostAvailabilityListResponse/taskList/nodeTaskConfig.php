<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig\instances;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponse\taskList\nodeTaskConfig\taskOption;
use AlibabaCloud\Tea\Model;

class nodeTaskConfig extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description taskName
     *
     * @var string
     */
    public $taskName;

    /**
     * @description taskType
     *
     * @var string
     */
    public $taskType;

    /**
     * @description taskScope
     *
     * @var string
     */
    public $taskScope;

    /**
     * @description disabled
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

    /**
     * @description groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description taskOption
     *
     * @var taskOption
     */
    public $taskOption;

    /**
     * @description alertConfig
     *
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @description instanceList
     *
     * @var instances
     */
    public $instances;
    protected $_name = [
        'id'          => 'Id',
        'taskName'    => 'TaskName',
        'taskType'    => 'TaskType',
        'taskScope'   => 'TaskScope',
        'disabled'    => 'Disabled',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'taskOption'  => 'TaskOption',
        'alertConfig' => 'AlertConfig',
        'instances'   => 'Instances',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('taskName', $this->taskName, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('taskScope', $this->taskScope, true);
        Model::validateRequired('disabled', $this->disabled, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('taskOption', $this->taskOption, true);
        Model::validateRequired('alertConfig', $this->alertConfig, true);
        Model::validateRequired('instances', $this->instances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskScope) {
            $res['TaskScope'] = $this->taskScope;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->taskOption) {
            $res['TaskOption'] = null !== $this->taskOption ? $this->taskOption->toMap() : null;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTaskConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskScope'])) {
            $model->taskScope = $map['TaskScope'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['TaskOption'])) {
            $model->taskOption = taskOption::fromMap($map['TaskOption']);
        }
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }

        return $model;
    }
}
