<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskRequest extends Model
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
    public $backupMode;

    /**
     * @description isOnlineDB
     *
     * @var string
     */
    public $isOnlineDB;

    /**
     * @description checkDbMode
     *
     * @var string
     */
    public $checkDBMode;

    /**
     * @description OssObjectPositions
     *
     * @var string
     */
    public $ossObjectPositions;

    /**
     * @description ossUrls
     *
     * @var string
     */
    public $OSSUrls;

    /**
     * @description migrateTaskId
     *
     * @var string
     */
    public $migrateTaskId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'DBInstanceId'         => 'DBInstanceId',
        'DBName'               => 'DBName',
        'backupMode'           => 'BackupMode',
        'isOnlineDB'           => 'IsOnlineDB',
        'checkDBMode'          => 'CheckDBMode',
        'ossObjectPositions'   => 'OssObjectPositions',
        'OSSUrls'              => 'OSSUrls',
        'migrateTaskId'        => 'MigrateTaskId',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('backupMode', $this->backupMode, true);
        Model::validateRequired('isOnlineDB', $this->isOnlineDB, true);
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
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->isOnlineDB) {
            $res['IsOnlineDB'] = $this->isOnlineDB;
        }
        if (null !== $this->checkDBMode) {
            $res['CheckDBMode'] = $this->checkDBMode;
        }
        if (null !== $this->ossObjectPositions) {
            $res['OssObjectPositions'] = $this->ossObjectPositions;
        }
        if (null !== $this->OSSUrls) {
            $res['OSSUrls'] = $this->OSSUrls;
        }
        if (null !== $this->migrateTaskId) {
            $res['MigrateTaskId'] = $this->migrateTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrateTaskRequest
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
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['IsOnlineDB'])) {
            $model->isOnlineDB = $map['IsOnlineDB'];
        }
        if (isset($map['CheckDBMode'])) {
            $model->checkDBMode = $map['CheckDBMode'];
        }
        if (isset($map['OssObjectPositions'])) {
            $model->ossObjectPositions = $map['OssObjectPositions'];
        }
        if (isset($map['OSSUrls'])) {
            $model->OSSUrls = $map['OSSUrls'];
        }
        if (isset($map['MigrateTaskId'])) {
            $model->migrateTaskId = $map['MigrateTaskId'];
        }

        return $model;
    }
}
