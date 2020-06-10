<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceCrossBackupPolicyResponse extends Model
{
    /**
     * @description description: 请求ID。;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: 实例ID。;
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 实例名称，长度为2~256个字符。以中文、英文字母开头，可以包含数字、中文、英文、下划线（_）、短横线（-）。>不能以 http:// 和 https:// 开头。;
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description description: 实例状态。详情请参见[实例状态表](~~26315~~)。;
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description data.dbInstanceStatusDesc
     *
     * @var string
     */
    public $DBInstanceStatusDesc;

    /**
     * @description description: 数据库类型。;
     *
     * @var string
     */
    public $engine;

    /**
     * @description description: 数据库版本。;
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description description: 实例所在地域ID。;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: 跨地域备份的目的地域ID。;
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description description: 跨地域备份保存类型。默认值：**1**，表示每个备份都保存。;
     *
     * @var string
     */
    public $crossBackupType;

    /**
     * @description description: 跨地域备份开启时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $backupEnabledTime;

    /**
     * @description description: 跨地域备份总开关，取值：* **Disable**：关闭；* **Enable**：开启。;
     *
     * @var string
     */
    public $backupEnabled;

    /**
     * @description description: 跨地域日志备份开关，取值：* **Disable**：关闭；* **Enable**：开启。;
     *
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @description description: 跨地域日志备份开启时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $logBackupEnabledTime;

    /**
     * @description data.storageOwner
     *
     * @var string
     */
    public $storageOwner;

    /**
     * @description data.storageType
     *
     * @var string
     */
    public $storageType;

    /**
     * @description data.endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description description: 跨地域备份保留方式。默认值：**1**，表示按时长保留。;
     *
     * @var int
     */
    public $retentType;

    /**
     * @description description: 跨地域备份保留天数，取值：**7~1825**。;
     *
     * @var int
     */
    public $retention;

    /**
     * @description description: 实例锁定状态，取值：* **Unlock**：正常，没有锁定；* **ManualLock**：手动触发锁定；* **LockByExpiration**：实例过期自动锁定；* **LockByRestoration**：实例回滚前的自动锁定；* **LockByDiskQuota**：实例空间满自动锁定，不可访问实例。;
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description data.relService
     *
     * @var string
     */
    public $relService;

    /**
     * @description data.relServiceId
     *
     * @var string
     */
    public $relServiceId;
    protected $_name = [
        'requestId'             => 'RequestId',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceStatusDesc'  => 'DBInstanceStatusDesc',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'regionId'              => 'RegionId',
        'crossBackupRegion'     => 'CrossBackupRegion',
        'crossBackupType'       => 'CrossBackupType',
        'backupEnabledTime'     => 'BackupEnabledTime',
        'backupEnabled'         => 'BackupEnabled',
        'logBackupEnabled'      => 'LogBackupEnabled',
        'logBackupEnabledTime'  => 'LogBackupEnabledTime',
        'storageOwner'          => 'StorageOwner',
        'storageType'           => 'StorageType',
        'endpoint'              => 'Endpoint',
        'retentType'            => 'RetentType',
        'retention'             => 'Retention',
        'lockMode'              => 'LockMode',
        'relService'            => 'RelService',
        'relServiceId'          => 'RelServiceId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('DBInstanceStatusDesc', $this->DBInstanceStatusDesc, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('crossBackupRegion', $this->crossBackupRegion, true);
        Model::validateRequired('crossBackupType', $this->crossBackupType, true);
        Model::validateRequired('backupEnabledTime', $this->backupEnabledTime, true);
        Model::validateRequired('backupEnabled', $this->backupEnabled, true);
        Model::validateRequired('logBackupEnabled', $this->logBackupEnabled, true);
        Model::validateRequired('logBackupEnabledTime', $this->logBackupEnabledTime, true);
        Model::validateRequired('storageOwner', $this->storageOwner, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('retentType', $this->retentType, true);
        Model::validateRequired('retention', $this->retention, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('relService', $this->relService, true);
        Model::validateRequired('relServiceId', $this->relServiceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStatusDesc) {
            $res['DBInstanceStatusDesc'] = $this->DBInstanceStatusDesc;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossBackupType) {
            $res['CrossBackupType'] = $this->crossBackupType;
        }
        if (null !== $this->backupEnabledTime) {
            $res['BackupEnabledTime'] = $this->backupEnabledTime;
        }
        if (null !== $this->backupEnabled) {
            $res['BackupEnabled'] = $this->backupEnabled;
        }
        if (null !== $this->logBackupEnabled) {
            $res['LogBackupEnabled'] = $this->logBackupEnabled;
        }
        if (null !== $this->logBackupEnabledTime) {
            $res['LogBackupEnabledTime'] = $this->logBackupEnabledTime;
        }
        if (null !== $this->storageOwner) {
            $res['StorageOwner'] = $this->storageOwner;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->retentType) {
            $res['RetentType'] = $this->retentType;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->relService) {
            $res['RelService'] = $this->relService;
        }
        if (null !== $this->relServiceId) {
            $res['RelServiceId'] = $this->relServiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceCrossBackupPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStatusDesc'])) {
            $model->DBInstanceStatusDesc = $map['DBInstanceStatusDesc'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossBackupType'])) {
            $model->crossBackupType = $map['CrossBackupType'];
        }
        if (isset($map['BackupEnabledTime'])) {
            $model->backupEnabledTime = $map['BackupEnabledTime'];
        }
        if (isset($map['BackupEnabled'])) {
            $model->backupEnabled = $map['BackupEnabled'];
        }
        if (isset($map['LogBackupEnabled'])) {
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }
        if (isset($map['LogBackupEnabledTime'])) {
            $model->logBackupEnabledTime = $map['LogBackupEnabledTime'];
        }
        if (isset($map['StorageOwner'])) {
            $model->storageOwner = $map['StorageOwner'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['RetentType'])) {
            $model->retentType = $map['RetentType'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['RelService'])) {
            $model->relService = $map['RelService'];
        }
        if (isset($map['RelServiceId'])) {
            $model->relServiceId = $map['RelServiceId'];
        }

        return $model;
    }
}
