<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RebuildDBInstanceResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.taskId
     *
     * @var int
     */
    public $taskId;

    /**
     * @description data.migrationId
     *
     * @var int
     */
    public $migrationId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'taskId'      => 'TaskId',
        'migrationId' => 'MigrationId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('migrationId', $this->migrationId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->migrationId) {
            $res['MigrationId'] = $this->migrationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebuildDBInstanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['MigrationId'])) {
            $model->migrationId = $map['MigrationId'];
        }

        return $model;
    }
}
