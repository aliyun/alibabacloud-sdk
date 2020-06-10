<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDTCSecurityIpHostsForSQLServerResponse extends Model
{
    /**
     * @description description: 请求ID。;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: RDS实例ID。;
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 设置白名单的结果，取值：* **Success**：设置成功；* **Fail**：设置失败。;
     *
     * @var string
     */
    public $DTCSetResult;

    /**
     * @description description: 设置任务ID。;
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'DTCSetResult' => 'DTCSetResult',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DTCSetResult', $this->DTCSetResult, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DTCSetResult) {
            $res['DTCSetResult'] = $this->DTCSetResult;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DTCSetResult'])) {
            $model->DTCSetResult = $map['DTCSetResult'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
