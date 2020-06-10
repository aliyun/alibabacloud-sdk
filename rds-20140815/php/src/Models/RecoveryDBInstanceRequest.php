<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RecoveryDBInstanceRequest extends Model
{
    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceClass
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description dbInstanceStorage
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description payType
     *
     * @var string
     */
    public $payType;

    /**
     * @description instanceNetworkType
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description sourceDBInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description targetDBInstanceName
     *
     * @var string
     */
    public $targetDBInstanceId;

    /**
     * @description backupDbNames
     *
     * @var string
     */
    public $dbNames;

    /**
     * @description backupSetId
     *
     * @var string
     */
    public $backupId;

    /**
     * @description restoreTime
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description vswitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description cloudInstanceIp
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description usedTime
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description timeType
     *
     * @var string
     */
    public $period;

    /**
     * @description dbInstanceStorageType
     *
     * @var string
     */
    public $DBInstanceStorageType;
    protected $_name = [
        'resourceOwnerId'       => 'ResourceOwnerId',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'payType'               => 'PayType',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'DBInstanceId'          => 'DBInstanceId',
        'targetDBInstanceId'    => 'TargetDBInstanceId',
        'dbNames'               => 'DbNames',
        'backupId'              => 'BackupId',
        'restoreTime'           => 'RestoreTime',
        'VPCId'                 => 'VPCId',
        'VSwitchId'             => 'VSwitchId',
        'privateIpAddress'      => 'PrivateIpAddress',
        'usedTime'              => 'UsedTime',
        'period'                => 'Period',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
    ];

    public function validate()
    {
        Model::validateRequired('dbNames', $this->dbNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->targetDBInstanceId) {
            $res['TargetDBInstanceId'] = $this->targetDBInstanceId;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoveryDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['TargetDBInstanceId'])) {
            $model->targetDBInstanceId = $map['TargetDBInstanceId'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }

        return $model;
    }
}
