<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceID;

    /**
     * @description data.enableBackupLog
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description data.logBackupLocalRetentionPeriod
     *
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @description data.logBackupLocalRetentionSpace
     *
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description data.forceCleanOnHighSpaceUsage
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description data.compressType
     *
     * @var string
     */
    public $compressType;

    /**
     * @description data.logBackupLocalRetentionNumber
     *
     * @var int
     */
    public $logBackupLocalRetentionNumber;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'DBInstanceID'                  => 'DBInstanceID',
        'enableBackupLog'               => 'EnableBackupLog',
        'localLogRetentionHours'        => 'LocalLogRetentionHours',
        'localLogRetentionSpace'        => 'LocalLogRetentionSpace',
        'highSpaceUsageProtection'      => 'HighSpaceUsageProtection',
        'compressType'                  => 'CompressType',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceID', $this->DBInstanceID, true);
        Model::validateRequired('enableBackupLog', $this->enableBackupLog, true);
        Model::validateRequired('localLogRetentionHours', $this->localLogRetentionHours, true);
        Model::validateRequired('localLogRetentionSpace', $this->localLogRetentionSpace, true);
        Model::validateRequired('highSpaceUsageProtection', $this->highSpaceUsageProtection, true);
        Model::validateRequired('compressType', $this->compressType, true);
        Model::validateRequired('logBackupLocalRetentionNumber', $this->logBackupLocalRetentionNumber, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
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
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->compressType) {
            $res['CompressType'] = $this->compressType;
        }
        if (null !== $this->logBackupLocalRetentionNumber) {
            $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
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
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['CompressType'])) {
            $model->compressType = $map['CompressType'];
        }
        if (isset($map['LogBackupLocalRetentionNumber'])) {
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
        }

        return $model;
    }
}
