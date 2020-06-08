<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceCrossBackupPolicyRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
        'crossBackupType' => 'CrossBackupType',
        'logBackupEnabled' => 'LogBackupEnabled',
        'backupEnabled' => 'BackupEnabled',
        'crossBackupRegion' => 'CrossBackupRegion',
        'retentType' => 'RetentType',
        'retention' => 'Retention',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['RegionId'] = $this->regionId;
        $res['CrossBackupType'] = $this->crossBackupType;
        $res['LogBackupEnabled'] = $this->logBackupEnabled;
        $res['BackupEnabled'] = $this->backupEnabled;
        $res['CrossBackupRegion'] = $this->crossBackupRegion;
        $res['RetentType'] = $this->retentType;
        $res['Retention'] = $this->retention;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyInstanceCrossBackupPolicyRequest
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
        if(isset($map['CrossBackupType'])){
            $model->crossBackupType = $map['CrossBackupType'];
        }
        if(isset($map['LogBackupEnabled'])){
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }
        if(isset($map['BackupEnabled'])){
            $model->backupEnabled = $map['BackupEnabled'];
        }
        if(isset($map['CrossBackupRegion'])){
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if(isset($map['RetentType'])){
            $model->retentType = $map['RetentType'];
        }
        if(isset($map['Retention'])){
            $model->retention = $map['Retention'];
        }
        return $model;
    }
    /**
     * @description description: 阿里云颁发给用户的访问服务所用的密钥ID。; 
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
     * @description description: 实例ID。; 
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 源实例地域ID，可以通过接口[DescribeRegions](~~26243~~)查看地域ID。; 
     * @var string
     */
    public $regionId;

    /**
     * @description description: 跨地域备份保存类型。默认值：**1**，表示每个备份都保存。; 
     * @var string
     */
    public $crossBackupType;

    /**
     * @description description: 跨地域日志备份开关，取值：* **0**：关闭；* **1**：开启。; 
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @description description: 跨地域备份总开关（数据备份+日志备份），取值：* **0**：关闭；* **1**：开启。; 
     * @var string
     */
    public $backupEnabled;

    /**
     * @description description: 跨地域备份的目的地域ID。; 
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description description: 跨地域备份保留方式。默认值：**1**，表示按时长保留。; 
     * @var integer
     */
    public $retentType;

    /**
     * @description description: 跨地域备份保留天数，取值：**7~1825**。; 
     * @var integer
     */
    public $retention;

}
