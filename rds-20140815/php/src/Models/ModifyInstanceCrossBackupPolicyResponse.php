<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceCrossBackupPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
        'crossBackupRegion' => 'CrossBackupRegion',
        'crossBackupType' => 'CrossBackupType',
        'backupEnabled' => 'BackupEnabled',
        'logBackupEnabled' => 'LogBackupEnabled',
        'storageOwner' => 'StorageOwner',
        'storageType' => 'StorageType',
        'endpoint' => 'Endpoint',
        'retentType' => 'RetentType',
        'retention' => 'Retention',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('crossBackupRegion', $this->crossBackupRegion, true);
        Model::validateRequired('crossBackupType', $this->crossBackupType, true);
        Model::validateRequired('backupEnabled', $this->backupEnabled, true);
        Model::validateRequired('logBackupEnabled', $this->logBackupEnabled, true);
        Model::validateRequired('storageOwner', $this->storageOwner, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('retentType', $this->retentType, true);
        Model::validateRequired('retention', $this->retention, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['RegionId'] = $this->regionId;
        $res['CrossBackupRegion'] = $this->crossBackupRegion;
        $res['CrossBackupType'] = $this->crossBackupType;
        $res['BackupEnabled'] = $this->backupEnabled;
        $res['LogBackupEnabled'] = $this->logBackupEnabled;
        $res['StorageOwner'] = $this->storageOwner;
        $res['StorageType'] = $this->storageType;
        $res['Endpoint'] = $this->endpoint;
        $res['RetentType'] = $this->retentType;
        $res['Retention'] = $this->retention;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyInstanceCrossBackupPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['CrossBackupRegion'])){
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if(isset($map['CrossBackupType'])){
            $model->crossBackupType = $map['CrossBackupType'];
        }
        if(isset($map['BackupEnabled'])){
            $model->backupEnabled = $map['BackupEnabled'];
        }
        if(isset($map['LogBackupEnabled'])){
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }
        if(isset($map['StorageOwner'])){
            $model->storageOwner = $map['StorageOwner'];
        }
        if(isset($map['StorageType'])){
            $model->storageType = $map['StorageType'];
        }
        if(isset($map['Endpoint'])){
            $model->endpoint = $map['Endpoint'];
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
     * @description description: 请求ID。; 
     * @var string
     */
    public $requestId;

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
     * @description description: 跨地域备份的目的地域ID。; 
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description description: 跨地域备份保存类型。默认值：**1**，表示每个备份都保存。; 
     * @var string
     */
    public $crossBackupType;

    /**
     * @description description: 跨地域备份总开关，取值：* **0**：关闭；* **1**：开启。; 
     * @var string
     */
    public $backupEnabled;

    /**
     * @description description: 跨地域日志备份开关，取值：* **0**：关闭；* **1**：开启。; 
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @description data.storageOwner
     * @var string
     */
    public $storageOwner;

    /**
     * @description data.storageType
     * @var string
     */
    public $storageType;

    /**
     * @description data.endpoint
     * @var string
     */
    public $endpoint;

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
