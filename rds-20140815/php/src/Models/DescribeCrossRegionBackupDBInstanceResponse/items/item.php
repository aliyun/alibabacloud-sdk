<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceResponse\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description dbInstanceDescription
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description dbInstanceStatus
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description dbInstanceStatusDesc
     *
     * @var string
     */
    public $DBInstanceStatusDesc;

    /**
     * @description engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description engineVersion
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description crossBackupRegion
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description crossBackupType
     *
     * @var string
     */
    public $crossBackupType;

    /**
     * @description backupEnabled
     *
     * @var string
     */
    public $backupEnabled;

    /**
     * @description logBackupEnabled
     *
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @description logBackupEnabledTime
     *
     * @var string
     */
    public $logBackupEnabledTime;

    /**
     * @description backupEnabledTime
     *
     * @var string
     */
    public $backupEnabledTime;

    /**
     * @description retentType
     *
     * @var int
     */
    public $retentType;

    /**
     * @description retention
     *
     * @var int
     */
    public $retention;

    /**
     * @description lockMode
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description relService
     *
     * @var string
     */
    public $relService;

    /**
     * @description relServiceId
     *
     * @var string
     */
    public $relServiceId;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceStatusDesc'  => 'DBInstanceStatusDesc',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'crossBackupRegion'     => 'CrossBackupRegion',
        'crossBackupType'       => 'CrossBackupType',
        'backupEnabled'         => 'BackupEnabled',
        'logBackupEnabled'      => 'LogBackupEnabled',
        'logBackupEnabledTime'  => 'LogBackupEnabledTime',
        'backupEnabledTime'     => 'BackupEnabledTime',
        'retentType'            => 'RetentType',
        'retention'             => 'Retention',
        'lockMode'              => 'LockMode',
        'relService'            => 'RelService',
        'relServiceId'          => 'RelServiceId',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('DBInstanceStatusDesc', $this->DBInstanceStatusDesc, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('crossBackupRegion', $this->crossBackupRegion, true);
        Model::validateRequired('crossBackupType', $this->crossBackupType, true);
        Model::validateRequired('backupEnabled', $this->backupEnabled, true);
        Model::validateRequired('logBackupEnabled', $this->logBackupEnabled, true);
        Model::validateRequired('logBackupEnabledTime', $this->logBackupEnabledTime, true);
        Model::validateRequired('backupEnabledTime', $this->backupEnabledTime, true);
        Model::validateRequired('retentType', $this->retentType, true);
        Model::validateRequired('retention', $this->retention, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('relService', $this->relService, true);
        Model::validateRequired('relServiceId', $this->relServiceId, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossBackupType) {
            $res['CrossBackupType'] = $this->crossBackupType;
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
        if (null !== $this->backupEnabledTime) {
            $res['BackupEnabledTime'] = $this->backupEnabledTime;
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
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossBackupType'])) {
            $model->crossBackupType = $map['CrossBackupType'];
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
        if (isset($map['BackupEnabledTime'])) {
            $model->backupEnabledTime = $map['BackupEnabledTime'];
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
