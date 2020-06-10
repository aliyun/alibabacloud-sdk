<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description repeatWeekdays
     *
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description timePoints
     *
     * @var string
     */
    public $timePoints;

    /**
     * @description retentionDays
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description autoSnapshotPolicyName
     *
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description fileSystemType
     *
     * @var string
     */
    public $fileSystemType;
    protected $_name = [
        'repeatWeekdays'         => 'RepeatWeekdays',
        'timePoints'             => 'TimePoints',
        'retentionDays'          => 'RetentionDays',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'fileSystemType'         => 'FileSystemType',
    ];

    public function validate()
    {
        Model::validateRequired('repeatWeekdays', $this->repeatWeekdays, true);
        Model::validateRequired('timePoints', $this->timePoints, true);
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        return $model;
    }
}
