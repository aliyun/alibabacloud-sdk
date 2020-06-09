<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CloneDBInstanceRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'dbNames' => 'DbNames',
        'payType' => 'PayType',
        'instanceNetworkType' => 'InstanceNetworkType',
        'DBInstanceId' => 'DBInstanceId',
        'backupId' => 'BackupId',
        'restoreTime' => 'RestoreTime',
        'VPCId' => 'VPCId',
        'VSwitchId' => 'VSwitchId',
        'privateIpAddress' => 'PrivateIpAddress',
        'usedTime' => 'UsedTime',
        'period' => 'Period',
        'category' => 'Category',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'restoreTable' => 'RestoreTable',
        'tableMeta' => 'TableMeta',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'backupType' => 'BackupType',
    ];
    public function validate() {
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['ZoneId'] = $this->zoneId;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        $res['DbNames'] = $this->dbNames;
        $res['PayType'] = $this->payType;
        $res['InstanceNetworkType'] = $this->instanceNetworkType;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['BackupId'] = $this->backupId;
        $res['RestoreTime'] = $this->restoreTime;
        $res['VPCId'] = $this->VPCId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['PrivateIpAddress'] = $this->privateIpAddress;
        $res['UsedTime'] = $this->usedTime;
        $res['Period'] = $this->period;
        $res['Category'] = $this->category;
        $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        $res['RestoreTable'] = $this->restoreTable;
        $res['TableMeta'] = $this->tableMeta;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['BackupType'] = $this->backupType;
        return $res;
    }
    /**
     * @param array $map
     * @return CloneDBInstanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['DBInstanceStorage'])){
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if(isset($map['DbNames'])){
            $model->dbNames = $map['DbNames'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['InstanceNetworkType'])){
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['BackupId'])){
            $model->backupId = $map['BackupId'];
        }
        if(isset($map['RestoreTime'])){
            $model->restoreTime = $map['RestoreTime'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['PrivateIpAddress'])){
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if(isset($map['UsedTime'])){
            $model->usedTime = $map['UsedTime'];
        }
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['DBInstanceStorageType'])){
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if(isset($map['RestoreTable'])){
            $model->restoreTable = $map['RestoreTable'];
        }
        if(isset($map['TableMeta'])){
            $model->tableMeta = $map['TableMeta'];
        }
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if(isset($map['BackupType'])){
            $model->backupType = $map['BackupType'];
        }
        return $model;
    }
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
     * @description zoneId
     * @var string
     */
    public $zoneId;

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
     * @description dbNames
     * @var string
     */
    public $dbNames;

    /**
     * @description payType
     * @var string
     */
    public $payType;

    /**
     * @description instanceNetworkType
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description sourceDBInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description backupSetId
     * @var string
     */
    public $backupId;

    /**
     * @description restoreTime
     * @var string
     */
    public $restoreTime;

    /**
     * @description vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description cloudInstanceIp
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description usedTime
     * @var integer
     */
    public $usedTime;

    /**
     * @description timeType
     * @var string
     */
    public $period;

    /**
     * @description category
     * @var string
     */
    public $category;

    /**
     * @description dbInstanceStorageType
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description restoreTable
     * @var string
     */
    public $restoreTable;

    /**
     * @description tableMeta
     * @var string
     */
    public $tableMeta;

    /**
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description backupType
     * @var string
     */
    public $backupType;

}
