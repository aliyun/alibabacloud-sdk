<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse\duplicationLocation;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponse\duplicationLocation\location;

class DescribeBackupPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'preferredNextBackupTime' => 'PreferredNextBackupTime',
        'preferredBackupTime' => 'PreferredBackupTime',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'backupLog' => 'BackupLog',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'enableBackupLog' => 'EnableBackupLog',
        'localLogRetentionHours' => 'LocalLogRetentionHours',
        'localLogRetentionSpace' => 'LocalLogRetentionSpace',
        'duplication' => 'Duplication',
        'duplicationContent' => 'DuplicationContent',
        'highSpaceUsageProtection' => 'HighSpaceUsageProtection',
        'logBackupFrequency' => 'LogBackupFrequency',
        'compressType' => 'CompressType',
        'archiveBackupRetentionPeriod' => 'ArchiveBackupRetentionPeriod',
        'archiveBackupKeepPolicy' => 'ArchiveBackupKeepPolicy',
        'archiveBackupKeepCount' => 'ArchiveBackupKeepCount',
        'releasedKeepPolicy' => 'ReleasedKeepPolicy',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'duplicationLocation' => 'DuplicationLocation',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
        $res['PreferredBackupTime'] = $this->preferredBackupTime;
        $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        $res['BackupLog'] = $this->backupLog;
        $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        $res['EnableBackupLog'] = $this->enableBackupLog;
        $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        $res['Duplication'] = $this->duplication;
        $res['DuplicationContent'] = $this->duplicationContent;
        $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        $res['LogBackupFrequency'] = $this->logBackupFrequency;
        $res['CompressType'] = $this->compressType;
        $res['ArchiveBackupRetentionPeriod'] = $this->archiveBackupRetentionPeriod;
        $res['ArchiveBackupKeepPolicy'] = $this->archiveBackupKeepPolicy;
        $res['ArchiveBackupKeepCount'] = $this->archiveBackupKeepCount;
        $res['ReleasedKeepPolicy'] = $this->releasedKeepPolicy;
        $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
        $res['DuplicationLocation'] = null !== $this->duplicationLocation ? $this->duplicationLocation->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeBackupPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['BackupRetentionPeriod'])){
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if(isset($map['PreferredNextBackupTime'])){
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
        }
        if(isset($map['PreferredBackupTime'])){
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if(isset($map['PreferredBackupPeriod'])){
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if(isset($map['BackupLog'])){
            $model->backupLog = $map['BackupLog'];
        }
        if(isset($map['LogBackupRetentionPeriod'])){
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if(isset($map['EnableBackupLog'])){
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if(isset($map['LocalLogRetentionHours'])){
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if(isset($map['LocalLogRetentionSpace'])){
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if(isset($map['Duplication'])){
            $model->duplication = $map['Duplication'];
        }
        if(isset($map['DuplicationContent'])){
            $model->duplicationContent = $map['DuplicationContent'];
        }
        if(isset($map['HighSpaceUsageProtection'])){
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if(isset($map['LogBackupFrequency'])){
            $model->logBackupFrequency = $map['LogBackupFrequency'];
        }
        if(isset($map['CompressType'])){
            $model->compressType = $map['CompressType'];
        }
        if(isset($map['ArchiveBackupRetentionPeriod'])){
            $model->archiveBackupRetentionPeriod = $map['ArchiveBackupRetentionPeriod'];
        }
        if(isset($map['ArchiveBackupKeepPolicy'])){
            $model->archiveBackupKeepPolicy = $map['ArchiveBackupKeepPolicy'];
        }
        if(isset($map['ArchiveBackupKeepCount'])){
            $model->archiveBackupKeepCount = $map['ArchiveBackupKeepCount'];
        }
        if(isset($map['ReleasedKeepPolicy'])){
            $model->releasedKeepPolicy = $map['ReleasedKeepPolicy'];
        }
        if(isset($map['LogBackupLocalRetentionNumber'])){
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
        }
        if(isset($map['DuplicationLocation'])){
            $model->duplicationLocation = duplicationLocation::fromMap($map['DuplicationLocation']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.model.backupRetentionPeriod
     * @var integer
     */
    public $backupRetentionPeriod;

    /**
     * @description data.model.preferredNextBackupTime
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @description data.preferredBackupTime
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description data.preferredBackupPeriod
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description data.backupLog
     * @var string
     */
    public $backupLog;

    /**
     * @description data.model.logBackupRetentionPeriod
     * @var integer
     */
    public $logBackupRetentionPeriod;

    /**
     * @description data.model.enableBackupLog
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description data.model.logBackupLocalRetentionPeriod
     * @var integer
     */
    public $localLogRetentionHours;

    /**
     * @description data.model.logBackupLocalRetentionSpace
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description data.model.dumpBackupEnable
     * @var string
     */
    public $duplication;

    /**
     * @description data.duplicationContent
     * @var string
     */
    public $duplicationContent;

    /**
     * @description data.model.forceCleanOnHighSpaceUsage
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description data.logBackupFrequency
     * @var string
     */
    public $logBackupFrequency;

    /**
     * @description data.model.compressType
     * @var string
     */
    public $compressType;

    /**
     * @description data.archiveBackupRetentionPeriod
     * @var string
     */
    public $archiveBackupRetentionPeriod;

    /**
     * @description data.archiveBackupKeepPolicy
     * @var string
     */
    public $archiveBackupKeepPolicy;

    /**
     * @description data.archiveBackupKeepCount
     * @var string
     */
    public $archiveBackupKeepCount;

    /**
     * @description data.releasedKeepPolicy
     * @var string
     */
    public $releasedKeepPolicy;

    /**
     * @description data.logBackupLocalRetentionNumber
     * @var integer
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @description data.duplicationLocation
     * @var duplicationLocation
     */
    public $duplicationLocation;

}
