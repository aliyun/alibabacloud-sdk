<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBProxyInstanceKernelVersionResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description data.taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description data.targetMinorVersion
     *
     * @var string
     */
    public $targetMinorVersion;
    protected $_name = [
        'requestId'          => 'RequestId',
        'DBInstanceName'     => 'DBInstanceName',
        'taskId'             => 'TaskId',
        'targetMinorVersion' => 'TargetMinorVersion',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceName', $this->DBInstanceName, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('targetMinorVersion', $this->targetMinorVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBProxyInstanceKernelVersionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }

        return $model;
    }
}
