<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponse\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponse\items\item\restoreRegions;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description description: 跨地域备份文件ID。;
     *
     * @var int
     */
    public $crossBackupId;

    /**
     * @description description: 跨地域备份的目的地域ID。;
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description description: 备份文件状态，取值：* **0**：完成备份；* **1**：备份失败。;
     *
     * @var int
     */
    public $backupSetStatus;

    /**
     * @description description: 跨地域备份开始时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description description: 跨地域备份结束时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description description: 跨地域备份类型，取值：* **F**：全量；* **I**：增量。;
     *
     * @var string
     */
    public $backupType;

    /**
     * @description description: 跨地域备份方式，取值：* **L**：逻辑备份；* **P**：物理备份。;
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description description: 跨地域备份文件大小，单位：Byte。;
     *
     * @var int
     */
    public $crossBackupSetSize;

    /**
     * @description description: 跨地域备份文件压缩包名称。;
     *
     * @var string
     */
    public $crossBackupSetFile;

    /**
     * @description description: 跨地域备份文件外网下载链接。;
     *
     * @var string
     */
    public $crossBackupDownloadLink;

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
     * @description description: 备份文件存储位置。;
     *
     * @var string
     */
    public $crossBackupSetLocation;

    /**
     * @description description: 备份文件的备份策略，取值：* **0**：实例备份；* **1**：单库备份。;
     *
     * @var int
     */
    public $backupSetScale;

    /**
     * @description description: 实例编号。用于区分该备份集产生于主实例或备实例。;
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description description: 存储类型。;
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description description: 实例系列，取值：* **Basic**：基础版；* **HighAvailability**：高可用版；* **Finance**：金融版（仅中国站支持）。;
     *
     * @var string
     */
    public $category;

    /**
     * @description description: 备份文件里数据的时间点。;
     *
     * @var string
     */
    public $consistentTime;

    /**
     * @description hasBackupTableMeta
     *
     * @var string
     */
    public $hasBackupTableMeta;

    /**
     * @description restoreRegion
     *
     * @var restoreRegions
     */
    public $restoreRegions;
    protected $_name = [
        'crossBackupId'           => 'CrossBackupId',
        'crossBackupRegion'       => 'CrossBackupRegion',
        'backupSetStatus'         => 'BackupSetStatus',
        'backupStartTime'         => 'BackupStartTime',
        'backupEndTime'           => 'BackupEndTime',
        'backupType'              => 'BackupType',
        'backupMethod'            => 'BackupMethod',
        'crossBackupSetSize'      => 'CrossBackupSetSize',
        'crossBackupSetFile'      => 'CrossBackupSetFile',
        'crossBackupDownloadLink' => 'CrossBackupDownloadLink',
        'engine'                  => 'Engine',
        'engineVersion'           => 'EngineVersion',
        'crossBackupSetLocation'  => 'CrossBackupSetLocation',
        'backupSetScale'          => 'BackupSetScale',
        'instanceId'              => 'InstanceId',
        'DBInstanceStorageType'   => 'DBInstanceStorageType',
        'category'                => 'Category',
        'consistentTime'          => 'ConsistentTime',
        'hasBackupTableMeta'      => 'HasBackupTableMeta',
        'restoreRegions'          => 'RestoreRegions',
    ];

    public function validate()
    {
        Model::validateRequired('crossBackupId', $this->crossBackupId, true);
        Model::validateRequired('crossBackupRegion', $this->crossBackupRegion, true);
        Model::validateRequired('backupSetStatus', $this->backupSetStatus, true);
        Model::validateRequired('backupStartTime', $this->backupStartTime, true);
        Model::validateRequired('backupEndTime', $this->backupEndTime, true);
        Model::validateRequired('backupType', $this->backupType, true);
        Model::validateRequired('backupMethod', $this->backupMethod, true);
        Model::validateRequired('crossBackupSetSize', $this->crossBackupSetSize, true);
        Model::validateRequired('crossBackupSetFile', $this->crossBackupSetFile, true);
        Model::validateRequired('crossBackupDownloadLink', $this->crossBackupDownloadLink, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('crossBackupSetLocation', $this->crossBackupSetLocation, true);
        Model::validateRequired('backupSetScale', $this->backupSetScale, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('DBInstanceStorageType', $this->DBInstanceStorageType, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('consistentTime', $this->consistentTime, true);
        Model::validateRequired('hasBackupTableMeta', $this->hasBackupTableMeta, true);
        Model::validateRequired('restoreRegions', $this->restoreRegions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossBackupId) {
            $res['CrossBackupId'] = $this->crossBackupId;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->backupSetStatus) {
            $res['BackupSetStatus'] = $this->backupSetStatus;
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
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->crossBackupSetSize) {
            $res['CrossBackupSetSize'] = $this->crossBackupSetSize;
        }
        if (null !== $this->crossBackupSetFile) {
            $res['CrossBackupSetFile'] = $this->crossBackupSetFile;
        }
        if (null !== $this->crossBackupDownloadLink) {
            $res['CrossBackupDownloadLink'] = $this->crossBackupDownloadLink;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->crossBackupSetLocation) {
            $res['CrossBackupSetLocation'] = $this->crossBackupSetLocation;
        }
        if (null !== $this->backupSetScale) {
            $res['BackupSetScale'] = $this->backupSetScale;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->hasBackupTableMeta) {
            $res['HasBackupTableMeta'] = $this->hasBackupTableMeta;
        }
        if (null !== $this->restoreRegions) {
            $res['RestoreRegions'] = null !== $this->restoreRegions ? $this->restoreRegions->toMap() : null;
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
        if (isset($map['CrossBackupId'])) {
            $model->crossBackupId = $map['CrossBackupId'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['BackupSetStatus'])) {
            $model->backupSetStatus = $map['BackupSetStatus'];
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
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['CrossBackupSetSize'])) {
            $model->crossBackupSetSize = $map['CrossBackupSetSize'];
        }
        if (isset($map['CrossBackupSetFile'])) {
            $model->crossBackupSetFile = $map['CrossBackupSetFile'];
        }
        if (isset($map['CrossBackupDownloadLink'])) {
            $model->crossBackupDownloadLink = $map['CrossBackupDownloadLink'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['CrossBackupSetLocation'])) {
            $model->crossBackupSetLocation = $map['CrossBackupSetLocation'];
        }
        if (isset($map['BackupSetScale'])) {
            $model->backupSetScale = $map['BackupSetScale'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['HasBackupTableMeta'])) {
            $model->hasBackupTableMeta = $map['HasBackupTableMeta'];
        }
        if (isset($map['RestoreRegions'])) {
            $model->restoreRegions = restoreRegions::fromMap($map['RestoreRegions']);
        }

        return $model;
    }
}
