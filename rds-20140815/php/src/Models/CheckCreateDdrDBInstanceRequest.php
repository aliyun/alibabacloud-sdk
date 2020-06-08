<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckCreateDdrDBInstanceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'restoreType' => 'RestoreType',
        'backupSetId' => 'BackupSetId',
        'restoreTime' => 'RestoreTime',
        'sourceRegion' => 'SourceRegion',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceStorage', $this->DBInstanceStorage, true);
        Model::validateRequired('restoreType', $this->restoreType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['Engine'] = $this->engine;
        $res['EngineVersion'] = $this->engineVersion;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        $res['RestoreType'] = $this->restoreType;
        $res['BackupSetId'] = $this->backupSetId;
        $res['RestoreTime'] = $this->restoreTime;
        $res['SourceRegion'] = $this->sourceRegion;
        $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        return $res;
    }
    /**
     * @param array $map
     * @return CheckCreateDdrDBInstanceRequest
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
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['DBInstanceStorage'])){
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if(isset($map['RestoreType'])){
            $model->restoreType = $map['RestoreType'];
        }
        if(isset($map['BackupSetId'])){
            $model->backupSetId = $map['BackupSetId'];
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
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description dbInstanceClass
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description dbInstanceStorage
     * @var integer
     */
    public $DBInstanceStorage;

    /**
     * @description restoreType
     * @var string
     */
    public $restoreType;

    /**
     * @description backupSetId
     * @var string
     */
    public $backupSetId;

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

}
