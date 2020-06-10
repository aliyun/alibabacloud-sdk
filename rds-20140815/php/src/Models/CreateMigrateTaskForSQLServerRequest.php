<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskForSQLServerRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

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
     * @description taskType
     *
     * @var string
     */
    public $taskType;

    /**
     * @description isOnlineDB
     *
     * @var string
     */
    public $isOnlineDB;

    /**
     * @description ossUrls
     *
     * @var string
     */
    public $OSSUrls;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'DBInstanceId'         => 'DBInstanceId',
        'DBName'               => 'DBName',
        'taskType'             => 'TaskType',
        'isOnlineDB'           => 'IsOnlineDB',
        'OSSUrls'              => 'OSSUrls',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('isOnlineDB', $this->isOnlineDB, true);
        Model::validateRequired('OSSUrls', $this->OSSUrls, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->isOnlineDB) {
            $res['IsOnlineDB'] = $this->isOnlineDB;
        }
        if (null !== $this->OSSUrls) {
            $res['OSSUrls'] = $this->OSSUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrateTaskForSQLServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['IsOnlineDB'])) {
            $model->isOnlineDB = $map['IsOnlineDB'];
        }
        if (isset($map['OSSUrls'])) {
            $model->OSSUrls = $map['OSSUrls'];
        }

        return $model;
    }
}
