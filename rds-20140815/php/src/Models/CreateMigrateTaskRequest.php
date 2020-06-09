<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBName' => 'DBName',
        'backupMode' => 'BackupMode',
        'isOnlineDB' => 'IsOnlineDB',
        'checkDBMode' => 'CheckDBMode',
        'ossObjectPositions' => 'OssObjectPositions',
        'OSSUrls' => 'OSSUrls',
        'migrateTaskId' => 'MigrateTaskId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('backupMode', $this->backupMode, true);
        Model::validateRequired('isOnlineDB', $this->isOnlineDB, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBName'] = $this->DBName;
        $res['BackupMode'] = $this->backupMode;
        $res['IsOnlineDB'] = $this->isOnlineDB;
        $res['CheckDBMode'] = $this->checkDBMode;
        $res['OssObjectPositions'] = $this->ossObjectPositions;
        $res['OSSUrls'] = $this->OSSUrls;
        $res['MigrateTaskId'] = $this->migrateTaskId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateMigrateTaskRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['BackupMode'])){
            $model->backupMode = $map['BackupMode'];
        }
        if(isset($map['IsOnlineDB'])){
            $model->isOnlineDB = $map['IsOnlineDB'];
        }
        if(isset($map['CheckDBMode'])){
            $model->checkDBMode = $map['CheckDBMode'];
        }
        if(isset($map['OssObjectPositions'])){
            $model->ossObjectPositions = $map['OssObjectPositions'];
        }
        if(isset($map['OSSUrls'])){
            $model->OSSUrls = $map['OSSUrls'];
        }
        if(isset($map['MigrateTaskId'])){
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description taskType
     * @var string
     */
    public $backupMode;

    /**
     * @description isOnlineDB
     * @var string
     */
    public $isOnlineDB;

    /**
     * @description checkDbMode
     * @var string
     */
    public $checkDBMode;

    /**
     * @description OssObjectPositions
     * @var string
     */
    public $ossObjectPositions;

    /**
     * @description ossUrls
     * @var string
     */
    public $OSSUrls;

    /**
     * @description migrateTaskId
     * @var string
     */
    public $migrateTaskId;

}
