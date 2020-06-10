<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupRequest extends Model
{
    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description backupStrategy
     *
     * @var string
     */
    public $backupStrategy;

    /**
     * @description backupMethod
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description backupType
     *
     * @var string
     */
    public $backupType;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId'    => 'DBInstanceId',
        'DBName'          => 'DBName',
        'backupStrategy'  => 'BackupStrategy',
        'backupMethod'    => 'BackupMethod',
        'backupType'      => 'BackupType',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->backupStrategy) {
            $res['BackupStrategy'] = $this->backupStrategy;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['BackupStrategy'])) {
            $model->backupStrategy = $map['BackupStrategy'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        return $model;
    }
}
