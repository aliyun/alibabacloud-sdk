<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RestoreDdrTableRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
        'clientToken' => 'ClientToken',
        'restoreType' => 'RestoreType',
        'backupId' => 'BackupId',
        'restoreTime' => 'RestoreTime',
        'sourceRegion' => 'SourceRegion',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
        'tableMeta' => 'TableMeta',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('restoreType', $this->restoreType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['RegionId'] = $this->regionId;
        $res['ClientToken'] = $this->clientToken;
        $res['RestoreType'] = $this->restoreType;
        $res['BackupId'] = $this->backupId;
        $res['RestoreTime'] = $this->restoreTime;
        $res['SourceRegion'] = $this->sourceRegion;
        $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        $res['TableMeta'] = $this->tableMeta;
        return $res;
    }
    /**
     * @param array $map
     * @return RestoreDdrTableRequest
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
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['RestoreType'])){
            $model->restoreType = $map['RestoreType'];
        }
        if(isset($map['BackupId'])){
            $model->backupId = $map['BackupId'];
        }
        if(isset($map['RestoreTime'])){
            $model->restoreTime = $map['RestoreTime'];
        }
        if(isset($map['SourceRegion'])){
            $model->sourceRegion = $map['SourceRegion'];
        }
        if(isset($map['SourceDBInstanceName'])){
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }
        if(isset($map['TableMeta'])){
            $model->tableMeta = $map['TableMeta'];
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
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description clientToken
     * @var string
     */
    public $clientToken;

    /**
     * @description restoreType
     * @var string
     */
    public $restoreType;

    /**
     * @description backupId
     * @var string
     */
    public $backupId;

    /**
     * @description restoreTime
     * @var string
     */
    public $restoreTime;

    /**
     * @description sourceRegion
     * @var string
     */
    public $sourceRegion;

    /**
     * @description sourceDBInstanceName
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @description tableMeta
     * @var string
     */
    public $tableMeta;

}
