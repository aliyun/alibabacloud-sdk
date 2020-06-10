<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse\duplicationLocation;
use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.model.backupRetentionPeriod
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description data.model.preferredNextBackupTime
     *
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @description data.preferredBackupTime
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description data.preferredBackupPeriod
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description data.backupLog
     *
     * @var string
     */
    public $backupLog;

    /**
     * @description data.model.logBackupRetentionPeriod
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @description data.model.enableBackupLog
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description data.model.logBackupLocalRetentionPeriod
     *
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @description data.model.logBackupLocalRetentionSpace
     *
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description data.model.dumpBackupEnable
     *
     * @var string
     */
    public $duplication;

    /**
     * @description data.duplicationContent
     *
     * @var string
     */
    public $duplicationContent;

    /**
     * @description data.model.forceCleanOnHighSpaceUsage
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description data.logBackupFrequency
     *
     * @var string
     */
    public $logBackupFrequency;

    /**
     * @description data.model.compressType
     *
     * @var string
     */
    public $compressType;

    /**
     * @description data.archiveBackupRetentionPeriod
     *
     * @var string
     */
    public $archiveBackupRetentionPeriod;

    /**
     * @description data.archiveBackupKeepPolicy
     *
     * @var string
     */
    public $archiveBackupKeepPolicy;

    /**
     * @description data.archiveBackupKeepCount
     *
     * @var string
     */
    public $archiveBackupKeepCount;

    /**
     * @description data.releasedKeepPolicy
     *
     * @var string
     */
    public $releasedKeepPolicy;

    /**
     * @description data.logBackupLocalRetentionNumber
     *
     * @var int
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @description data.duplicationLocation
     *
     * @var duplicationLocation
     */
    public $duplicationLocation;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'backupRetentionPeriod'         => 'BackupRetentionPeriod',
        'preferredNextBackupTime'       => 'PreferredNextBackupTime',
        'preferredBackupTime'           => 'PreferredBackupTime',
        'preferredBackupPeriod'         => 'PreferredBackupPeriod',
        'backupLog'                     => 'BackupLog',
        'logBackupRetentionPeriod'      => 'LogBackupRetentionPeriod',
        'enableBackupLog'               => 'EnableBackupLog',
        'localLogRetentionHours'        => 'LocalLogRetentionHours',
        'localLogRetentionSpace'        => 'LocalLogRetentionSpace',
        'duplication'                   => 'Duplication',
        'duplicationContent'            => 'DuplicationContent',
        'highSpaceUsageProtection'      => 'HighSpaceUsageProtection',
        'logBackupFrequency'            => 'LogBackupFrequency',
        'compressType'                  => 'CompressType',
        'archiveBackupRetentionPeriod'  => 'ArchiveBackupRetentionPeriod',
        'archiveBackupKeepPolicy'       => 'ArchiveBackupKeepPolicy',
        'archiveBackupKeepCount'        => 'ArchiveBackupKeepCount',
        'releasedKeepPolicy'            => 'ReleasedKeepPolicy',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'duplicationLocation'           => 'DuplicationLocation',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('backupRetentionPeriod', $this->backupRetentionPeriod, true);
        Model::validateRequired('preferredNextBackupTime', $this->preferredNextBackupTime, true);
        Model::validateRequired('preferredBackupTime', $this->preferredBackupTime, true);
        Model::validateRequired('preferredBackupPeriod', $this->preferredBackupPeriod, true);
        Model::validateRequired('backupLog', $this->backupLog, true);
        Model::validateRequired('logBackupRetentionPeriod', $this->logBackupRetentionPeriod, true);
        Model::validateRequired('enableBackupLog', $this->enableBackupLog, true);
        Model::validateRequired('localLogRetentionHours', $this->localLogRetentionHours, true);
        Model::validateRequired('localLogRetentionSpace', $this->localLogRetentionSpace, true);
        Model::validateRequired('duplication', $this->duplication, true);
        Model::validateRequired('duplicationContent', $this->duplicationContent, true);
        Model::validateRequired('highSpaceUsageProtection', $this->highSpaceUsageProtection, true);
        Model::validateRequired('logBackupFrequency', $this->logBackupFrequency, true);
        Model::validateRequired('compressType', $this->compressType, true);
        Model::validateRequired('archiveBackupRetentionPeriod', $this->archiveBackupRetentionPeriod, true);
        Model::validateRequired('archiveBackupKeepPolicy', $this->archiveBackupKeepPolicy, true);
        Model::validateRequired('archiveBackupKeepCount', $this->archiveBackupKeepCount, true);
        Model::validateRequired('releasedKeepPolicy', $this->releasedKeepPolicy, true);
        Model::validateRequired('logBackupLocalRetentionNumber', $this->logBackupLocalRetentionNumber, true);
        Model::validateRequired('duplicationLocation', $this->duplicationLocation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->preferredNextBackupTime) {
            $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->backupLog) {
            $res['BackupLog'] = $this->backupLog;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->localLogRetentionHours) {
            $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        }
        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }
        if (null !== $this->duplication) {
            $res['Duplication'] = $this->duplication;
        }
        if (null !== $this->duplicationContent) {
            $res['DuplicationContent'] = $this->duplicationContent;
        }
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->logBackupFrequency) {
            $res['LogBackupFrequency'] = $this->logBackupFrequency;
        }
        if (null !== $this->compressType) {
            $res['CompressType'] = $this->compressType;
        }
        if (null !== $this->archiveBackupRetentionPeriod) {
            $res['ArchiveBackupRetentionPeriod'] = $this->archiveBackupRetentionPeriod;
        }
        if (null !== $this->archiveBackupKeepPolicy) {
            $res['ArchiveBackupKeepPolicy'] = $this->archiveBackupKeepPolicy;
        }
        if (null !== $this->archiveBackupKeepCount) {
            $res['ArchiveBackupKeepCount'] = $this->archiveBackupKeepCount;
        }
        if (null !== $this->releasedKeepPolicy) {
            $res['ReleasedKeepPolicy'] = $this->releasedKeepPolicy;
        }
        if (null !== $this->logBackupLocalRetentionNumber) {
            $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
        }
        if (null !== $this->duplicationLocation) {
            $res['DuplicationLocation'] = null !== $this->duplicationLocation ? $this->duplicationLocation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['PreferredNextBackupTime'])) {
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['BackupLog'])) {
            $model->backupLog = $map['BackupLog'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['LocalLogRetentionHours'])) {
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if (isset($map['Duplication'])) {
            $model->duplication = $map['Duplication'];
        }
        if (isset($map['DuplicationContent'])) {
            $model->duplicationContent = $map['DuplicationContent'];
        }
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['LogBackupFrequency'])) {
            $model->logBackupFrequency = $map['LogBackupFrequency'];
        }
        if (isset($map['CompressType'])) {
            $model->compressType = $map['CompressType'];
        }
        if (isset($map['ArchiveBackupRetentionPeriod'])) {
            $model->archiveBackupRetentionPeriod = $map['ArchiveBackupRetentionPeriod'];
        }
        if (isset($map['ArchiveBackupKeepPolicy'])) {
            $model->archiveBackupKeepPolicy = $map['ArchiveBackupKeepPolicy'];
        }
        if (isset($map['ArchiveBackupKeepCount'])) {
            $model->archiveBackupKeepCount = $map['ArchiveBackupKeepCount'];
        }
        if (isset($map['ReleasedKeepPolicy'])) {
            $model->releasedKeepPolicy = $map['ReleasedKeepPolicy'];
        }
        if (isset($map['LogBackupLocalRetentionNumber'])) {
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
        }
        if (isset($map['DuplicationLocation'])) {
            $model->duplicationLocation = duplicationLocation::fromMap($map['DuplicationLocation']);
        }

        return $model;
    }
}
