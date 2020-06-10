<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponse\items;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @description backupSetId
     *
     * @var string
     */
    public $backupId;

    /**
     * @description dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description backupSetStatus
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description backupStartTime
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description backupEndTime
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description backupType
     *
     * @var string
     */
    public $backupType;

    /**
     * @description jobMode
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description backupMethod
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description backupDownloadURL
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description backupIntranetDownloadURL
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @description backupsetLocation
     *
     * @var string
     */
    public $backupLocation;

    /**
     * @description dataExtractionStatus
     *
     * @var string
     */
    public $backupExtractionStatus;

    /**
     * @description backupSetScale
     *
     * @var string
     */
    public $backupScale;

    /**
     * @description backupDbList
     *
     * @var string
     */
    public $backupDBNames;

    /**
     * @description totalBackupSize
     *
     * @var int
     */
    public $totalBackupSize;

    /**
     * @description backupSetSize
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description instanceID
     *
     * @var string
     */
    public $hostInstanceID;

    /**
     * @description storeStatus
     *
     * @var string
     */
    public $storeStatus;

    /**
     * @description metaStatus
     *
     * @var string
     */
    public $metaStatus;

    /**
     * @description slaveStatus
     *
     * @var string
     */
    public $slaveStatus;

    /**
     * @description consistentTime
     *
     * @var int
     */
    public $consistentTime;

    /**
     * @description backupInitiator
     *
     * @var string
     */
    public $backupInitiator;

    /**
     * @description copyOnly
     *
     * @var string
     */
    public $copyOnlyBackup;

    /**
     * @description storageClass
     *
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'backupId'                  => 'BackupId',
        'DBInstanceId'              => 'DBInstanceId',
        'backupStatus'              => 'BackupStatus',
        'backupStartTime'           => 'BackupStartTime',
        'backupEndTime'             => 'BackupEndTime',
        'backupType'                => 'BackupType',
        'backupMode'                => 'BackupMode',
        'backupMethod'              => 'BackupMethod',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupLocation'            => 'BackupLocation',
        'backupExtractionStatus'    => 'BackupExtractionStatus',
        'backupScale'               => 'BackupScale',
        'backupDBNames'             => 'BackupDBNames',
        'totalBackupSize'           => 'TotalBackupSize',
        'backupSize'                => 'BackupSize',
        'hostInstanceID'            => 'HostInstanceID',
        'storeStatus'               => 'StoreStatus',
        'metaStatus'                => 'MetaStatus',
        'slaveStatus'               => 'SlaveStatus',
        'consistentTime'            => 'ConsistentTime',
        'backupInitiator'           => 'BackupInitiator',
        'copyOnlyBackup'            => 'CopyOnlyBackup',
        'storageClass'              => 'StorageClass',
    ];

    public function validate()
    {
        Model::validateRequired('backupId', $this->backupId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('backupStatus', $this->backupStatus, true);
        Model::validateRequired('backupStartTime', $this->backupStartTime, true);
        Model::validateRequired('backupEndTime', $this->backupEndTime, true);
        Model::validateRequired('backupType', $this->backupType, true);
        Model::validateRequired('backupMode', $this->backupMode, true);
        Model::validateRequired('backupMethod', $this->backupMethod, true);
        Model::validateRequired('backupDownloadURL', $this->backupDownloadURL, true);
        Model::validateRequired('backupIntranetDownloadURL', $this->backupIntranetDownloadURL, true);
        Model::validateRequired('backupLocation', $this->backupLocation, true);
        Model::validateRequired('backupExtractionStatus', $this->backupExtractionStatus, true);
        Model::validateRequired('backupScale', $this->backupScale, true);
        Model::validateRequired('backupDBNames', $this->backupDBNames, true);
        Model::validateRequired('totalBackupSize', $this->totalBackupSize, true);
        Model::validateRequired('backupSize', $this->backupSize, true);
        Model::validateRequired('hostInstanceID', $this->hostInstanceID, true);
        Model::validateRequired('storeStatus', $this->storeStatus, true);
        Model::validateRequired('metaStatus', $this->metaStatus, true);
        Model::validateRequired('slaveStatus', $this->slaveStatus, true);
        Model::validateRequired('consistentTime', $this->consistentTime, true);
        Model::validateRequired('backupInitiator', $this->backupInitiator, true);
        Model::validateRequired('copyOnlyBackup', $this->copyOnlyBackup, true);
        Model::validateRequired('storageClass', $this->storageClass, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }
        if (null !== $this->backupLocation) {
            $res['BackupLocation'] = $this->backupLocation;
        }
        if (null !== $this->backupExtractionStatus) {
            $res['BackupExtractionStatus'] = $this->backupExtractionStatus;
        }
        if (null !== $this->backupScale) {
            $res['BackupScale'] = $this->backupScale;
        }
        if (null !== $this->backupDBNames) {
            $res['BackupDBNames'] = $this->backupDBNames;
        }
        if (null !== $this->totalBackupSize) {
            $res['TotalBackupSize'] = $this->totalBackupSize;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
        }
        if (null !== $this->metaStatus) {
            $res['MetaStatus'] = $this->metaStatus;
        }
        if (null !== $this->slaveStatus) {
            $res['SlaveStatus'] = $this->slaveStatus;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->backupInitiator) {
            $res['BackupInitiator'] = $this->backupInitiator;
        }
        if (null !== $this->copyOnlyBackup) {
            $res['CopyOnlyBackup'] = $this->copyOnlyBackup;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }
        if (isset($map['BackupLocation'])) {
            $model->backupLocation = $map['BackupLocation'];
        }
        if (isset($map['BackupExtractionStatus'])) {
            $model->backupExtractionStatus = $map['BackupExtractionStatus'];
        }
        if (isset($map['BackupScale'])) {
            $model->backupScale = $map['BackupScale'];
        }
        if (isset($map['BackupDBNames'])) {
            $model->backupDBNames = $map['BackupDBNames'];
        }
        if (isset($map['TotalBackupSize'])) {
            $model->totalBackupSize = $map['TotalBackupSize'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }
        if (isset($map['MetaStatus'])) {
            $model->metaStatus = $map['MetaStatus'];
        }
        if (isset($map['SlaveStatus'])) {
            $model->slaveStatus = $map['SlaveStatus'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['BackupInitiator'])) {
            $model->backupInitiator = $map['BackupInitiator'];
        }
        if (isset($map['CopyOnlyBackup'])) {
            $model->copyOnlyBackup = $map['CopyOnlyBackup'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
