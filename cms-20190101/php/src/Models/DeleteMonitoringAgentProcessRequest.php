<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMonitoringAgentProcessRequest extends Model
{
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
     * @description id
     *
     * @var string
     */
    public $processId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'processName' => 'ProcessName',
        'processId'   => 'ProcessId',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMonitoringAgentProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        return $model;
    }
}
