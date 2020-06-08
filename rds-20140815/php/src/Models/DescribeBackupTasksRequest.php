<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupTasksRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'flag' => 'Flag',
        'ownerAccount' => 'OwnerAccount',
        'DBInstanceId' => 'DBInstanceId',
        'backupJobId' => 'BackupJobId',
        'backupMode' => 'BackupMode',
        'backupJobStatus' => 'BackupJobStatus',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['Flag'] = $this->flag;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['BackupJobId'] = $this->backupJobId;
        $res['BackupMode'] = $this->backupMode;
        $res['BackupJobStatus'] = $this->backupJobStatus;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeBackupTasksRequest
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
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['Flag'])){
            $model->flag = $map['Flag'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['BackupJobId'])){
            $model->backupJobId = $map['BackupJobId'];
        }
        if(isset($map['BackupMode'])){
            $model->backupMode = $map['BackupMode'];
        }
        if(isset($map['BackupJobStatus'])){
            $model->backupJobStatus = $map['BackupJobStatus'];
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
     * @description token
     * @var string
     */
    public $clientToken;

    /**
     * @description flag
     * @var string
     */
    public $flag;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description backupjobId
     * @var integer
     */
    public $backupJobId;

    /**
     * @description jobMode
     * @var string
     */
    public $backupMode;

    /**
     * @description backupjobStatus
     * @var string
     */
    public $backupJobStatus;

}
