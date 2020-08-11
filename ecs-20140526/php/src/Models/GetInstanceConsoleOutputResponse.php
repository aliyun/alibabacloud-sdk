<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceConsoleOutputResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $consoleOutput;

    /**
     * @var string
     */
    public $lastUpdateTime;
    protected $_name = [
        'requestId'      => 'RequestId',
        'instanceId'     => 'InstanceId',
        'consoleOutput'  => 'ConsoleOutput',
        'lastUpdateTime' => 'LastUpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('consoleOutput', $this->consoleOutput, true);
        Model::validateRequired('lastUpdateTime', $this->lastUpdateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->consoleOutput) {
            $res['ConsoleOutput'] = $this->consoleOutput;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceConsoleOutputResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ConsoleOutput'])) {
            $model->consoleOutput = $map['ConsoleOutput'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        return $model;
    }
}
