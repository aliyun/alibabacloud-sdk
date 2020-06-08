<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskForSQLServerRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBName' => 'DBName',
        'taskType' => 'TaskType',
        'isOnlineDB' => 'IsOnlineDB',
        'OSSUrls' => 'OSSUrls',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('isOnlineDB', $this->isOnlineDB, true);
        Model::validateRequired('OSSUrls', $this->OSSUrls, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBName'] = $this->DBName;
        $res['TaskType'] = $this->taskType;
        $res['IsOnlineDB'] = $this->isOnlineDB;
        $res['OSSUrls'] = $this->OSSUrls;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateMigrateTaskForSQLServerRequest
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
        if(isset($map['TaskType'])){
            $model->taskType = $map['TaskType'];
        }
        if(isset($map['IsOnlineDB'])){
            $model->isOnlineDB = $map['IsOnlineDB'];
        }
        if(isset($map['OSSUrls'])){
            $model->OSSUrls = $map['OSSUrls'];
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
    public $taskType;

    /**
     * @description isOnlineDB
     * @var string
     */
    public $isOnlineDB;

    /**
     * @description ossUrls
     * @var string
     */
    public $OSSUrls;

}
