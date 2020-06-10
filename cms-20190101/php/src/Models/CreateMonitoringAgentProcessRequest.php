<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitoringAgentProcessRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $processName;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description processUser
     *
     * @var string
     */
    public $processUser;
    protected $_name = [
        'processName' => 'ProcessName',
        'instanceId'  => 'InstanceId',
        'processUser' => 'ProcessUser',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitoringAgentProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }

        return $model;
    }
}
