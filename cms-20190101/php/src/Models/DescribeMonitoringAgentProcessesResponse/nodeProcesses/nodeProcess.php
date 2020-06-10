<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponse\nodeProcesses;

use AlibabaCloud\Tea\Model;

class nodeProcess extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $processId;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description name
     *
     * @var string
     */
    public $processName;

    /**
     * @description processUser
     *
     * @var string
     */
    public $processUser;

    /**
     * @description command
     *
     * @var string
     */
    public $command;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'processId'   => 'ProcessId',
        'instanceId'  => 'InstanceId',
        'processName' => 'ProcessName',
        'processUser' => 'ProcessUser',
        'command'     => 'Command',
        'groupId'     => 'GroupId',
    ];

    public function validate()
    {
        Model::validateRequired('processId', $this->processId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('processName', $this->processName, true);
        Model::validateRequired('processUser', $this->processUser, true);
        Model::validateRequired('command', $this->command, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeProcess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
